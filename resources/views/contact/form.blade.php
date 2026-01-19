<form id="contact-form" class="py-3" method="POST" action="{{ route('contact') }}">
    {{ csrf_field() }}
    <div class="form-group row text-center justify-content-center">
        <div class="col-12 my-1">
            <input type="email" class="form-control" id="email" placeholder="Email" name="email" required>
        </div>
    </div>
    <div class="row">
        <div class="col-12 my-1">
            <input type="checkbox" name="checkbox" value="check" id="agree" />{!! trans('messages.agreePrivacy')!!}
        </div>
    </div>
    <div class="row">
        <div class="col-12 my-1">
            <button id="sendButton" type="button" class="rounded-pill btn-send btn-lg" disabled>{{__('messages.send')  }}</button>
        </div>
    </div>
 </form>