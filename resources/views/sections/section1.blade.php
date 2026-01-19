<div class="slogan">
    <div class="row text-center mb-3" data-aos="fade-up" data-aos-delay="15">
        <div class="col">
            <p style="color: grey">{!! trans('messages.numPartners')!!}</p>
        </div>
    </div>
    <div class="row text-center mb-3" data-aos="fade-up" data-aos-delay="30">
        <div class="col-6 col-md-2" style="padding: 5px"><img class="grayscale" src="{{ asset('img/logos/colabs/public/umu.webp') }}" alt="UMU" height="30px"></div>
        <div class="col-6 col-md-2" style="padding: 5px"><img class="grayscale" src="{{ asset('img/logos/colabs/public/ucm.webp') }}" alt="UCM" height="30px"></div>
        <div class="col-6 col-md-2" style="padding: 5px"><img class="grayscale" src="{{ asset('img/logos/colabs/public/birmingham.webp') }}" alt="Universidad de Birmingham" height="30px"></div>
        <div class="col-6 col-md-2" style="padding: 5px"><img class="grayscale" src="{{ asset('img/logos/colabs/public/ceu.webp') }}" alt="CEU" height="30px"></div>
        <div class="col-6 col-md-2" style="padding: 5px"><img class="grayscale" src="{{ asset('img/logos/colabs/public/uclm.webp') }}" alt="UCLM" height="30px"></div>
        <div class="col-6 col-md-2" style="padding: 5px"><img class="grayscale" src="{{ asset('img/logos/colabs/public/umh.webp') }}" alt="UMH" height="30px"></div>
    </div>
    <div class="row text-center mb-5" data-aos="fade-up" data-aos-delay="60">
        <div class="col-6 col-md-2" style="padding: 5px"><img class="grayscale" src="{{ asset('img/logos/colabs/public/imib.webp') }}" alt="UMU" height="30px"></div>
        <div class="col-6 col-md-2" style="padding: 5px"><img class="grayscale" src="{{ asset('img/logos/colabs/public/imida.webp') }}" alt="UCM" height="30px"></div>
        <div class="col-6 col-md-2" style="padding: 5px"><img class="grayscale" src="{{ asset('img/logos/colabs/private/bioithas.webp') }}" alt="Universidad de Birmingham" height="30px"></div>
        <div class="col-6 col-md-2" style="padding: 5px"><img class="grayscale" src="{{ asset('img/logos/colabs/private/ideagro.webp') }}" alt="CEU" height="30px"></div>
        <div class="col-6 col-md-2" style="padding: 5px"><img class="grayscale" src="{{ asset('img/logos/colabs/private/itene.webp') }}" alt="UCLM" height="30px"></div>
        <div class="col-6 col-md-2" style="padding: 5px"><img class="grayscale" src="{{ asset('img/logos/colabs/private/naturbec.webp') }}" alt="UMH" height="30px"></div>
    </div>
    <div class="row p-3 my-5 align-items-center">
      <div class="col-md-7 pr-5">
          <div class="text text-justify">
              <h1 class="title mb-5" data-aos="fade-up" data-aos-delay="100">{!! trans('messages.slogan1')!!}</h1>
              <h4 class="my-3" data-aos="fade-up" data-aos-delay="100">{!! trans('messages.slogan1_2')!!}</h4>
              <button  data-aos="fade-up" data-aos-delay="300" class="btn btn-2 rounded-pill" data-toggle="modal" data-target="#modalContact">{{__('messages.buttonMeeting') }}</button>
          </div>
      </div>
      <div class="col-md-5">
          <div class="text text-center">
            <iframe class="video" width="560" height="315" src="https://www.youtube.com/embed/MbuNTmR0Agc" title="Video Resumen Marbyt" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen data-aos="fade-up" data-aos-delay="600"></iframe>
          </div>
      </div>
    </div>
</div>
<div class="cards-work">
    <div class="row p-3 my-3 align-items-center">
        <div class="col-md-10 offset-md-1">
            <div class="text text-center">
                <h1 data-aos="fade-up" data-aos-delay="100">{{__('messages.slogan2')  }}</h1>
            </div>
        </div>
    </div>
    <div class="align-items-center">
        <div class="row">
            <div class="col-lg-4 mb-4 d-flex align-items-stretch" style="flex-direction: row">
                <div class="card card-rounded d-flex" style="flex-direction: column" data-aos="fade-up" data-aos-delay="100">
                    <div class="img-card zoomWrapper rounded-top">
                        <img width="100px" height="100px" class="rounded-top" src="{{ asset('img/bacteria.webp') }}" alt="biotechnology"/>
                    </div>
                    <div class="card-content">
                        <div class="text text-center">
                            <h3 class="card-title">{!! trans('messages.bioTitle') !!}</h3>
                            <p>{{__('messages.bioText')}}</p>
                        </div>
                    </div>
                    <a role="button" class="mt-auto rounded-bottom" href="{{ route('projects') }}" style="text-decoration: none">
                        <div class="d-flex align-items-center justify-content-center card-read-more mt-auto rounded-bottom font-weight-bold" style="color: white; transition: font-size 0.2s ease-in-out;">
                            {{__('messages.bioButton')  }}
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 mb-4 d-flex align-items-stretch" style="flex-direction: row"">
                <div class="card card-rounded d-flex" style="flex-direction: column" data-aos="fade-up" data-aos-delay="600">
                    <div class="img-card zoomWrapper rounded-top">
                        <img width="100px" height="100px" class="rounded-top" src="{{ asset('img/code.webp') }}" alt="informatics"/>
                    </div>
                    <div class="card-content">
                        <div class="text text-center">
                            <h3 class="card-title">{!! trans('messages.infTitle') !!}</h3>
                            <p>{{__('messages.infText')}}</p>
                        </div>
                    </div>
                    <a role="button" class="mt-auto rounded-bottom" href="{{ route('software') }}" style="text-decoration: none">
                        <div class="d-flex align-items-center justify-content-center card-read-more mt-auto rounded-bottom font-weight-bold" style="color: white; transition: font-size 0.2s ease-in-out;">
                            {{__('messages.infButton')}}
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 mb-4 d-flex align-items-stretch" style="flex-direction: row">
                <div class="card card-rounded d-flex" style="flex-direction: column" data-aos="fade-up" data-aos-delay="1100">
                    <div class="img-card zoomWrapper rounded-top">
                        <img width="100px" height="100px" class="rounded-top" src="{{ asset('img/laboratory.webp') }}" alt="support"/>
                    </div>
                    <div class="card-content">
                        <div class="text text-center">
                            <h3 class="card-title">{!! trans('messages.supportTitle') !!}</h3>
                            <p>{{__('messages.supportText')}}</p>
                        </div>
                    </div>
                    <a role="button" class="mt-auto rounded-bottom" href="{{ route('team') }}" style="text-decoration: none">
                        <div class="d-flex align-items-center justify-content-center card-read-more mt-auto rounded-bottom font-weight-bold" style="color: white; transition: font-size 0.2s ease-in-out;">
                            {{__('messages.supportButton')  }}
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>