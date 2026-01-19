<?php

namespace App\Http\Controllers;

use App\Mail\SendEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use App\Models\SoftwareItem;
use App\Models\TeamItem;
use App\Models\ProjectItem;
use App\Models\PaperItem;

class MarbytController extends Controller
{
    public function home() {
        return view('home');
    }

    public function contact(Request $request) {   
        
        define('CLAVE', '6Leqv54eAAAAABnRmNWSIuOWjz-xpVdM7hp16Ojv');
        $token = $request->token;
        $action = $request->action;
        $cu = curl_init();
        curl_setopt($cu, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
        curl_setopt($cu, CURLOPT_POST, 1);
        curl_setopt($cu, CURLOPT_POSTFIELDS, http_build_query(array('secret' => CLAVE, 'response' => $token)));
        curl_setopt($cu, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($cu);
        curl_close($cu);

        $datos = json_decode($response, true);

        // print_r($datos);
        if($datos['success'] == 1 && $datos['score'] >= 0.5){
            $data = array(
                'email' => $request->email
            );
            $dataExtend = array(
                'email' => $request->email,
                'datos' => $datos
            );
            DB::table('users')->insert($data);
            Mail::send('contact.send_email', $dataExtend, function($message) {
                $message->from('hola@marbyt.com', 'Marbyt');
                $message->to('hola@marbyt.com')->subject('Nuevo mensaje desde la web');
            });
    
            Mail::send('contact.auto_reply', $data, function($message) use ($data) {
                $message->from('hola@marbyt.com', 'Marbyt');
                $message->to($data['email'])->subject('Marbyt automatic reply');
            });
            
            return redirect()->back()->with('confirmation', 'messages.modalConfirmText');
        } else {
            return redirect()->back()->with('confirmation', 'messages.modalConfirmText2');
        } 
    }

    public function software()
    {
        $softwareItems = SoftwareItem::all();

        return view('software')->with('softwareItems', $softwareItems);
    }

    public function team()
    {
        $teamItems = TeamItem::all();

        return view('team')->with('teamItems', $teamItems);
    }

    public function projects()
    {
        $projectItems = ProjectItem::orderBy('finished', 'desc')->get();
        $paperItems = PaperItem::orderBy('finished', 'desc')->get();

        return view('projects', compact('projectItems', 'paperItems'));
    }

    public function agrotech()
    {
        return view('agrotech');
    }

    public function health()
    {
        return view('health');
    }

    public function industry()
    {
        return view('industry');
    }

    public function research()
    {
        return view('research');
    }

    public function spia()
    {
        return view('spia');
    }
}
