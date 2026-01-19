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
      <h1>{{__('messages.supportButton')  }}</h1>
    </div>
  </div>
  <div class="container" data-aos="fade-up" data-aos-delay="600">
    <div class="row">
      @foreach ($teamItems as $item)
        @if ($item['active'] == 1 && $item['external'] == 0)
          <div class="col-12 col-md-6 col-lg-4">
            <div class="our-team">
              <div class="picture">
                <img class="img-fluid" src="{{asset('img/'.$item['img_url'])}}">
              </div>
              <div class="team-content">
                <h3 class="name">{{ $item['name'] }}</h3>
                <h4 class="title">{{__('messages.'.$item['position']) }}</h4>
              </div>
              <ul class="social">
                <!--
                <li><a href="https://codepen.io/collection/XdWJOQ/" class="fab fa-facebook" aria-hidden="true"></a></li>
                <li><a href="https://codepen.io/collection/XdWJOQ/" class="fab fa-twitter" aria-hidden="true"></a></li>
                <li><a href="https://codepen.io/collection/XdWJOQ/" class="fab fa-google-plus" aria-hidden="true"></a></li>
                -->
                <li><a href="{{ $item['linkedin']}}" class="fab fa-linkedin" aria-hidden="true" target="_blank"></a></li>
              </ul>
            </div>
          </div>
        @endif
      @endforeach
    </div>
  </div>
  <div class="row" data-aos="fade-up" data-aos-delay="1100">
    <div class="col-12 text-center">
      <h3>{{__('messages.colaborators')  }}</h3>
    </div>
  </div>
  <div class="container" data-aos="fade-up" data-aos-delay="1600">
    <div class="row">
      @foreach ($teamItems as $item)
        @if ($item['active'] == 1 && $item['external'] == 1)
          <div class="col-12 col-md-6 col-lg-3">
            <div class="our-team">
              <div class="picture">
                <img class="img-fluid" src="{{asset('img/'.$item['img_url'])}}">
              </div>
              <div class="team-content">
                <h3 class="name">{{ $item['name'] }}</h3>
                <h4 class="title">{{__('messages.'.$item['position']) }}</h4>
              </div>
              <ul class="social">
                <!--
                <li><a href="https://codepen.io/collection/XdWJOQ/" class="fab fa-facebook" aria-hidden="true"></a></li>
                <li><a href="https://codepen.io/collection/XdWJOQ/" class="fab fa-twitter" aria-hidden="true"></a></li>
                <li><a href="https://codepen.io/collection/XdWJOQ/" class="fab fa-google-plus" aria-hidden="true"></a></li>
                -->
                <li><a href="{{ $item['linkedin']}}" class="fab fa-linkedin" aria-hidden="true" target="_blank"></a></li>
              </ul>
            </div>
          </div>
        @endif
      @endforeach
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

<script>
    //ToolTip
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })

    $(document).ready(function() {
    var maxHeight = 0;
    $('.our-team').each(function() {
      maxHeight = Math.max(maxHeight, $(this).height());
    });
    $('.our-team').height(maxHeight);
  });
</script>