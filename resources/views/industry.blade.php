@include('layouts/header')
{{-- Partcicles in background --}}
<div id="particles-js">
</div>
{{-- Navbar --}}
@include('layouts/navbar')
{{-- Software --}}
<div class="section section_out">
  <div class="row" data-aos="fade-up" data-aos-delay="100">
    <div class="col-12 text-center">
      <h1>{{__('messages.indTitle')  }}</h1>
    </div>
  </div>
  <!-- Microbioma -->
  <div class="row align-items-center py-3" data-aos="fade-up" data-aos-delay="600">
    <h3>Desarrolla nuevos productos bioestimulantes mediante el análisis del microbioma del suelo</h3>
    <div class="col-md-4">
      <img class="rounded" style="width: 100%" src="{{asset('img/agrotech_microbioma.webp')}}" alt="Agrotech"/>
    </div>
    <div class="col-md-8">
      <p>Desarrolla nuevos productos para suelo o personaliza y optimiza la aplicación de tus productos actuales para aumentar la rentabilidad y productividad de las explotaciones agrícolas mediante el análisis del microbioma de su suelo.</p>
      <ul>
        <li>
          <b>Incrementa exponencialmente tu potencial innovador:</b> Desarrollo de nuevos productos bioestimulantes y biofertilizantes para mejorar la salud del suelo y la rentabilidad del cultivo. 
        </li>
        <li>
          <b>Diferénciate con la máxima personalización:</b> Conoce con detalle las características del suelo de tu cliente y optimiza la aplicación de tus productos para una máxima productividad de la explotación.
        </li>
        <li>
          <b>Análisis rápido y de bajo coste:</b> Análisis de microbioma agrícola rápido y fácil a través de una muestra mínima del suelo de la explotación.
        </li>
      </ul>
    </div>
    <hr/>
  </div>
  <!-- Análisis masivo -->
  <div class="row align-items-center py-3" data-aos="fade-up" data-aos-delay="1100">
    <h3>Desarrolla bioestimulantes a través del Cribado mediante Inteligencia Artificial</h3>
    <div class="col-md-8">
      <p>Incrementa de forma fácil y rápida tu potencial innovador buscando nuevos componentes a través del Cribado masivo mediante modelos predictivos de Inteligencia Artificial para el desarrollo de productos bioestimulantes o fitosanitarios diferenciales en el mercado.
      </p>
      <ul>
        <li>
          <b>Incrementa exponencialmente tu potencial innovador:</b> la capacidad de la IA permite descubrir nuevos componentes inalcanzables con una metodología tradicional.
        </li>
        <li>
          <b>Ahorro de costes y eficacia:</b> la IA criba millones de potenciales componentes y selecciona los más idóneos, minimizando el coste experimental.
        </li>
        <li>
          <b>Diferénciate y adáptate con nuevos productos naturales-sostenibles:</b> la IA permite la predicción de actividad de componentes naturales para desarrollar productos sostenibles para las nuevas demandas legislativas y del mercado.
        </li>
      </ul>
    </div>
    <div class="col-md-4">
      <img class="rounded" style="width: 100%" src="{{asset('img/agrotech_cribado.webp')}}" alt="Agrotech"/>
    </div>
    <hr/>
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