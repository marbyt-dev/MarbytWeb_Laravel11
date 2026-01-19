<div class="row">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <!--<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>-->
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="{{ asset('img/agrotech.webp') }}" alt="Agro-Foodtech">
          <div class="mask">
            <div class="carousel-caption">
              <h3>{{__('messages.agrTitle')  }}</h3>
              <p>
                {{__('messages.agrText')  }}
              </p>
              <a role="button" class="btn btn-white rounded-pill" href="{{ route('agrotech') }}">{{__('messages.moreInformation') }}</a>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="{{ asset('img/salud.webp') }}" alt="Salud">
          <div class="mask">
            <div class="carousel-caption">
              <h4>{{__('messages.heaTitle')  }}</h4>
              <p>
                {{__('messages.heaText')  }}
              </p>
              <a role="button" class="btn btn-white rounded-pill" href="{{ route('health') }}">{{__('messages.moreInformation') }}</a>
            </div>
          </div>
        </div>
        <!--
        <div class="carousel-item">
          <img class="d-block w-100" src="{{ asset('img/industria.webp') }}" alt="Industria">
          <div class="mask">
            <div class="carousel-caption">
              <h4>{{__('messages.indTitle')  }}</h4>
              <p>
                {{__('messages.indText')  }}
              </p>
              <a role="button" class="btn btn-white rounded-pill" href="{{ route('industry') }}">{{__('messages.moreInformation') }}</a>
            </div>
          </div>
        </div>
        -->
        <div class="carousel-item">
          <img class="d-block w-100" src="{{ asset('img/investigacion.webp') }}" alt="Investigación">
          <div class="mask">
            <div class="carousel-caption">
              <h4>{{__('messages.invTitle')  }}</h4>
              <p>
                {{__('messages.invText')  }}
              </p>
              <a role="button" class="btn btn-white rounded-pill" href="{{ route('research') }}">{{__('messages.moreInformation') }}</a>
            </div>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
      <div class="carousel-text">
        <div class="col-md-12 text-center">
            <p>{{__('messages.carouselText')  }}</p>
        </div>
      </div>
  </div>
</div>
<div class="slogan">
  <div class="row p-3 my-3">
    <div class="col-md-10 offset-md-1">
        <div class="text text-center">
            <h1 data-aos="fade-up" data-aos-delay="100">{{__('messages.slogan3')  }}</h1>
        </div>
    </div>
  </div>
  <div class="row p-3 my-3">
    <div class="col-md-10 offset-md-1">
        <div class="text text-center">
            <h1 data-aos="fade-up" data-aos-delay="600">{{__('messages.slogan4')  }}</h1>
        </div>
    </div>
  </div>
  <div class="row p-3 my-3">
    <div class="col-md-10 offset-md-1">
        <div class="text text-center">
            <h1 data-aos="fade-up" data-aos-delay="1100">{{__('messages.slogan5')  }}</h1>
        </div>
    </div>
  </div>
  <div class="row mt-3">
    <div class="container">
      <section class="logo-carousel slider" data-arrows="true" data-aos="fade-up" data-aos-delay="1200">
        <div class="slide"><img src="{{ asset('img/logos/recon/umuemprende.webp') }}" alt="Umuemprende" height="100px" width="100px"></div>
        <div class="slide"><img src="{{ asset('img/logos/recon/EIA.webp') }}" alt="European Innovation Academy" height="100px" width="100px"></div>
        <div class="slide"><img src="{{ asset('img/logos/recon/aytoMurcia.webp') }}" alt="Ayuntamiento de Murcia" height="100px" width="100px"></div>
        <div class="slide"><img src="{{ asset('img/logos/recon/emprendedordelmes.webp') }}" alt="Emprendedores del mes" height="100px" width="100px"></div>
        <div class="slide"><img src="{{ asset('img/logos/recon/testealo.webp') }}" alt="Testéalo" height="100px" width="100px"></div>
        <div class="slide"><img src="{{ asset('img/logos/recon/hitech.webp') }}" alt="UCAM HiTech" height="100px" width="100px"></div>
        <div class="slide"><img src="{{ asset('img/logos/recon/explorer.webp') }}" alt="Explorer" height="100px" width="100px"></div>
        <div class="slide"><img src="{{ asset('img/logos/recon/ances.webp') }}" alt="Ances Open Innovation" height="100px" width="100px"></div>
      </section>
    </div>
  </div>
</div>
