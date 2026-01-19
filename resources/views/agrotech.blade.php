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
      <h1>{{__('messages.agrTitle')  }}</h1>
    </div>
  </div>
  <!-- Microbioma -->
  <div class="row align-items-center py-3 text-center" data-aos="fade-up" data-aos-delay="600">
    <p>{{__('messages.agr_summary') }}</p>
  </div>
  <div class="row text-center">
    <div class="col-md-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="1100">
      <div class="card">
        <div class="zoomWrapper">
          <img class="card-img-top" style="height: 40vh; object-fit: cover;" src="{{ asset("img/microbiome.webp") }}" alt="{{__('messages.agr1_title')  }}">
        </div>
        <div class="card-body">
          <h5 class="card-title">{{__('messages.agr1_title')  }}</h5>
          <p class="card-text">{{__('messages.agr1_text')  }}</p>
        </div>
      </div>
    </div>
    <div class="col-md-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="1600">
      <div class="card">
        <div class="zoomWrapper">
          <img class="card-img-top" style="height: 40vh; object-fit: cover;" src="{{ asset("img/screening.webp") }}" alt="{{__('messages.agr2_title')  }}">
        </div>
        <div class="card-body">
          <h5 class="card-title">{{__('messages.agr2_title')  }}</h5>
          <p class="card-text">{{__('messages.agr2_text')  }}</p>
        </div>
      </div>
    </div>
    <div class="col-md-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="2100">
      <div class="card">
        <div class="zoomWrapper">
          <img class="card-img-top" style="height: 40vh; object-fit: cover;" src="{{ asset("img/enzyme.webp") }}" alt="{{__('messages.agr3_title')  }}">
        </div>
        <div class="card-body">
          <h5 class="card-title">{{__('messages.agr3_title')  }}</h5>
          <p class="card-text">{{__('messages.agr3_text')  }}</p>
        </div>
      </div>
    </div>
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