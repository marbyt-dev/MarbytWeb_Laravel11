@include('layouts/header')
{{-- Partcicles in background --}}
<div id="particles-js">
</div>
{{-- Navbar --}}
@include('layouts/navbar')
{{-- Section 0: Logo --}}
<div class="section" id="section0">
    @include('sections/section0')
</div>
{{-- Section 2: Offer --}}
<div class="section" id="section1">
    @include('sections/section1')
</div>
{{-- Section 1: Sectors --}}
<div class="section" id="section2">
    @include('sections/section2')
</div>
{{-- Section 3: Contact and footer --}}
<div class="section" id="section3">
    @include('sections/section3')
</div>
{{-- Modales --}}
@include('layouts/modals')
{{-- Cookie policy --}}

@if (!isset($_COOKIE['is_cookie_compliance_accepted']))
    @include('layouts/cookies')
@endif
@include('layouts/footer')
