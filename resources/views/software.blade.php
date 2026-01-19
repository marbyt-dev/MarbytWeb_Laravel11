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
          <h1>{{__('messages.infButton')  }}</h1>
        </div>
    </div>
    <div class="row" style="margin-top: 50px">
        @foreach ($softwareItems as $item)
            @if ($item['active'] == 1)
                <div class="col-md-3 col-12" data-aos="fade-up" data-aos-delay="600">
                    <div class="card d-flex img-card zoomWrapper">
                        <a href="#" data-toggle="modal" data-target="#modal_{{$item['modal_id']}}">
                            <img class="rounded" src="{{asset('img/'.$item['logo_url'])}}" alt="{{ $item['name'] }}"/>
                        </a>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
    @foreach ($softwareItems as $item)
        @if ($item['active'] == 1)
            <div class="modal fade" id="modal_{{$item['modal_id']}}" tabindex="-1" role="dialog" aria-labelledby="{{$item['modal_id']}}Label" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="{{$item['modal_id']}}Label">{{$item['name']}}</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-12 text-center">
                                    <img class="rounded" style="max-width: 50%" src="{{asset('img/'.$item['logo_url'])}}" alt="{{ $item['name'] }}"/>
                                </div>
                            </div>
                            <p>{!! trans('messages.'.$item['description']) !!}</p>
                            <p>{{__('messages.withColaboration')}}</p>
                            <div>{!! trans('messages.'.$item['colabs']) !!}</div>
                        </div>
                        <div class="modal-footer">
                            @if ($item['develop'] == 1)
                                <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="{{__('messages.underDevelopment')}}">
                                    <button type="button" class="btn btn-primary"  style="pointer-events: none;" disabled>{{__('messages.toolGo') }}</button>
                                </span>
                            @else
                                <a href="<?= $item['link_url'] ?>" class="btn btn-primary" role="button" target="_blank">{{__('messages.toolGo') }}</a>
                            @endif
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">{{__('messages.modalClose') }}</button>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    @endforeach
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
</script>