<nav id="navbar" class="navbar navbar-expand-lg fixed-top">
    <a href="{{ route('home') }}">
        <img id="navbar-logo" class="navbar-logo" width="223" height="94" src="{{ asset('img/Identidad_preferente_blanco.svg') }}" alt="Navbar Logo">
    </a>
    <button style="color: #fff" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="fas fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            {{-- About --}}
            {{-- <li class="nav-item">
                <a class="nav-link" style="cursor: pointer" role="button" data-toggle="modal" data-target="#modalAbout">{{ Str::upper(__('messages.about'))}}</a>
            </li> --}}
            {{-- More --}}
            <li class="nav-item">
                <a class="nav-link" style="cursor: pointer" role="button" data-toggle="modal" data-target="#modalContact"><small>{{ Str::upper(__('messages.contact'))}}</small></a>
            </li>
            {{-- Language --}}
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownLanguage" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <small>{{ Str::upper(Config::get('languages')[App::getLocale()]) }}</small>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownLanguage">
                @foreach (Config::get('languages') as $lang => $language)
                    @if ($lang != App::getLocale())
                            <a class="dropdown-item" href="{{ route('lang.switch', $lang) }}"> <small>{{ Str::upper($language)}}</small></a>
                    @endif
                @endforeach
                </div>
            </li>
        </ul>
    </div>
</nav>