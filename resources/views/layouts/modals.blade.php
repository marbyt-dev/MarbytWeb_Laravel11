<!-- Modal About -->
<div class="modal fade" id="modalAbout" tabindex="-1" role="dialog" aria-labelledby="modalAboutTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header" id="modalAboutTitle">
      </div>
      <div class="modal-body text-justify p-4">
        {!! trans('messages.modalAboutText') !!}
      </div>
      <span class="text-center text-justify-center p-4" style="font-size: larger">{{__('messages.modalAboutText2') }} <a href = "mailto: hola@marbyt.com">hola@marbyt.com</a></span>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">{{__('messages.modalClose')}}</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal contact -->
<div class="modal fade" id="modalContact" tabindex="-1" role="dialog" aria-labelledby="modalContactTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalContactTitle">{{__('messages.modalContactTitle')}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-6 p-4 text-center justify-content-center px-5 align-self-center">
            <p><i class="fab fa-whatsapp"></i> <a href="tel:678441149">+34 678 44 11 49</a></p>
            <p><i class="fa fa-at"></i> <a href = "mailto:hola@marbyt.com">hola@marbyt.com</a></p>
            <p><i class="fa fa-location-arrow"></i> CEEIM - Calle Campus Universitario de Espinardo, 7, 30100 Espinardo, Murcia</p>
          </div>
          <div class="col-md-6 p-4">
            <div class="map-responsive">
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12573.776452103106!2d-1.1736896!3d38.0134247!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd6381aae08b97bf%3A0xf21eda6b7d106c59!2sCeeim%20-%20Centro%20Europeo%20de%20Empresas%20e%20Innovaci%C3%B3n%20de%20Murcia!5e0!3m2!1ses!2ses!4v1681655887683!5m2!1ses!2ses" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <!--<small>{!! trans('messages.recaptcha')!!}</small>-->
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">{{__('messages.modalClose')}}</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal Contact Confirmation -->
<div class="modal fade" id="modalConfirm" tabindex="-1" role="dialog" aria-labelledby="modalConfirmTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header" id="modalConfirmTitle">
      </div>
      <div id="modalConfirmTextValue" class="modal-body text-justify p-4">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">{{__('messages.modalClose')}}</button>
      </div>
    </div>
  </div>
</div>
@if(!empty(Session::get('confirmation')) && Session::get('confirmation') !== 0)
  <script>
    var text = "{!! trans(Session::get('confirmation')) !!}";
    document.addEventListener("DOMContentLoaded", function(event) {
      confirmModal(text);
    });
  </script>
  {{ session()->put('confirmation', 0)}}
@endif
<!-- Modal privacy policy -->
<div class="modal fade" id="modalPrivacy" tabindex="-1" role="dialog" aria-labelledby="modalPrivacyTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalPrivacyTitle">{{__('messages.modalPrivacyTitle')}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        {!! trans('messages.modalPrivacy') !!}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">{{__('messages.modalClose')}}</button>
      </div>
    </div>
  </div>
</div>