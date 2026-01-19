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
      <h1>{{__('messages.heaTitle')  }}</h1>
    </div>
  </div>
  <!-- Microbioma -->
  <div class="row align-items-center py-3 text-center" data-aos="fade-up" data-aos-delay="600">
    <p>{{__('messages.hea_summary')  }}</p>
  </div>
  <div class="row text-center">
    <div class="col-md-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="1100">
      <div class="card">
        <div class="zoomWrapper">
          <img class="card-img-top" style="height: 40vh; object-fit: cover;" src="{{ asset("img/biomarkers.webp") }}" alt="{{__('messages.hea1_title')  }}">
        </div>
        <div class="card-body">
          <h5 class="card-title">{{__('messages.hea1_title')  }}</h5>
          <p class="card-text">{{__('messages.hea1_text')  }}</p>
        </div>
      </div>
    </div>
    <div class="col-md-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="1600">
      <div class="card">
        <div class="zoomWrapper">
          <img class="card-img-top" style="height: 40vh; object-fit: cover;" src="{{ asset("img/nutrigenomics.webp") }}" alt="{{__('messages.hea2_title')  }}">
        </div>
        <div class="card-body">
          <h5 class="card-title">{{__('messages.hea2_title')  }}</h5>
          <p class="card-text">{{__('messages.hea2_text')  }}</p>
        </div>
      </div>
    </div>
    <div class="col-md-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="2100">
      <div class="card">
        <div class="zoomWrapper">
          <img class="card-img-top" style="height: 40vh; object-fit: cover;" src="{{ asset("img/detection.webp") }}" alt="{{__('messages.hea3_title')  }}">
        </div>
        <div class="card-body">
          <h5 class="card-title">{{__('messages.hea3_title')  }}</h5>
          <p class="card-text">{{__('messages.hea3_text')  }}</p>
        </div>
      </div>
    </div>
    <div class="col-md-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="2600">
      <div class="card">
        <div class="zoomWrapper">
          <img class="card-img-top" style="height: 40vh; object-fit: cover;" src="{{ asset("img/drugs.webp") }}" alt="{{__('messages.hea4_title')  }}">
        </div>
        <div class="card-body">
          <h5 class="card-title">{{__('messages.hea4_title')  }}</h5>
          <p class="card-text">{{__('messages.hea4_text')  }}</p>
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