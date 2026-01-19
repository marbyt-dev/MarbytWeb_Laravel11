<div class="row contact_section align-items-center text-center text-justify-center">
    <div class="col-md-4 offset-md-4">
        <!--    
        <div class="text text-contact">
            <p>{{__('messages.knowText') }}</p>
        </div>
        -->
        <button class="btn btn-2 btn-bg rounded-pill" data-toggle="modal" data-target="#modalContact">{{__('messages.buttonMeeting') }}</button><br>
        <img width="100px" height="100px" class="marbyt-logo" src="{{ asset('img/horizontal_preferente_blanco_color_marino.svg') }}" alt="Marbyt Logo"/>
        <img src="{{ asset('img/logos/recon/EIBT_color.webp') }}" alt="Sello EIBT" width="150px">
        <p class="small mt-5">
            <a href = "mailto:hola@marbyt.com" style="color: white !important"><i class="fa fa-at"></i> hola@marbyt.com</a> <br>
            <a href="tel:678441149" style="color: white !important"><i class="fa fa-phone"></i> +34 678 44 11 49 <br>
            <a href="https://goo.gl/maps/XLdcK8fMHCHRmHxd6" style="color: white !important"><i class="fa fa-map-marker"></i> C/ Campus Universitario de Espinardo Nº7 (Edificio CEEIM), 30100. Murcia - España</a>
        </p>
    </div>
</div>
{{-- Copyright --}}
<div class="row copyright align-items-center">
    <div class="col-12">
        Copyright <i class="fa fa-copyright" aria-hidden="true"></i> Marbyt <?php echo date("Y"); ?> | <a role="button" tabindex="0" data-toggle="modal" data-target="#modalPrivacy">{{__('messages.modalPrivacyTitle')  }}</a>
    </div>
</div>
