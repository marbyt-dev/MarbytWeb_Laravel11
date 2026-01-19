@include('layouts/header')
{{-- Partcicles in background --}}
<div id="particles-js">
</div>
{{-- Navbar --}}
@include('layouts/navbar')
{{-- Software --}}
<div class="section section_out">
  <div class="row" data-aos="fade-up" data-aos-delay="0">
    <div class="col-12 text-center">
      <h1>{{__('messages.bioButton')  }}</h1>
    </div>
  </div>
  <div class="row" data-aos="fade-up" data-aos-delay="100">
    <div class="btn-group" role="group" aria-label="Basic example">
      <button type="button" style="margin-right: 10px" class="btn btn-dark btn-bg rounded-pill btn-type active" data-type="proyectos">{{__('messages.projects') }}</button>
      <button type="button" style="margin-left: 10px" class="btn btn-dark btn-bg rounded-pill btn-type" data-type="publicaciones">{{__('messages.papers') }}</button>
    </div>
  </div>
  <div class="post-container proyectos active">
      @foreach ($projectItems as $item)
        @if ($item['active'] == 1)
          <div class="row align-items-center" data-aos="fade-up" data-aos-delay="1100">
            <div class="col-md-3">
              <!--<p class="date">{{ date('m/Y', strtotime($item['finished'])) }}</p>-->
              <img class="rounded" style="width: 100%" src="{{asset('img/'.$item['img_url'])}}" alt="{{__('messages.'.$item['name']) }}"/>
            </div>
            <div class="col-md-9">
              <div class="post">
                <h2>{{__('messages.'.$item['name']) }}</h2>
                <div class="post-content">
                  <p>{!! trans('messages.'.$item['description']) !!}</p>
                  <p>{{__('messages.withColaboration') }}</p>
                  <p>{{ $item['colabs'] }}</p>
                </div>
              </div>
            </div>
          </div>
          <br/>
        @endif
      @endforeach
  </div>
  <div class="post-container publicaciones">
    @foreach ($paperItems as $item)
      @if ($item['active'] == 1)
        <div class="row align-items-center">
          <div class="col-md-3">
            <!--<p class="date">{{ date('m/Y', strtotime($item['finished'])) }}</p>-->
            <img class="rounded" style="width: 100%" src="{{asset('img/'.$item['img_url'])}}" alt="{{ $item['name'] }}"/>
          </div>
          <div class="col-md-9">
            <div class="post">
              <h2>{{ $item['name'] }}</h2>
              <div class="post-content">
                <p id="texto-corto-{{ $item['id'] }}" class="texto-corto">{{ $item['description'] }}</p>
                <a href="#" class="ver-mas date" data-id="{{ $item['id'] }}">{{__('messages.viewMore')  }}</a>
                <p>{{ $item['colabs'] }}</p>
                <a href="{{ $item['link_url'] }}" target="_blank" type="button" class="btn btn-dark rounded-pill btn-type active">{{__('messages.viewPaper') }}</a>
              </div>
            </div>
          </div>
        </div>
        <br/>
      @endif 
    @endforeach
</div>
</div>

{{-- Section 3: Contact and footer --}}
<div class="section" id="section3">
  @include('sections/section3')
</div>

{{-- Modales --}}
@include('layouts/modals')
{{-- Cookie policy --}}
@if (!isset($_COOKIE['is_cookie_compliance_accepted'])):
    @include('layouts/cookies')
@endif;
@include('layouts/footer')

<script>
    //ToolTip
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    });

    $(document).ready(function() {
      // Escucha el clic en los botones
      $('.btn-type').on('click', function() {
        // Remueve la clase active de todos los botones
        $('.btn-type').removeClass('active');

        // Agrega la clase active al botón clickeado
        $(this).addClass('active');

        // Obtiene el valor del atributo data-type del botón clickeado
        var type = $(this).data('type');

        // Oculta todas las secciones
        $('.post-container').removeClass('active');

        // Muestra la sección correspondiente al tipo de botón clickeado
        $('.' + type).addClass('active');
      });
    });

    const boton = document.getElementById('ver-mas');
    const texto = document.querySelector('.texto-corto');

    $(".ver-mas").click(function(event) {
      event.preventDefault();
      var id = $(this).data('id');
      if ($(this).text() == "{{__('messages.viewMore') }}") {
        // Mostrar todo el texto
        $("#texto-corto-" + id).addClass('expanded');
        $(this).text("{{__('messages.viewLess') }}");
      } else {
        // Mostrar solo el texto corto
        $("#texto-corto-" + id).removeClass('expanded');
        $(this).text("{{__('messages.viewMore') }}");
      }
    });
</script>