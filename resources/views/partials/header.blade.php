<header class="header sticky-top shadow-sm">
    <div class="container">
        <nav class="navbar navbar-expand-lg main-navbar">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('/images/thesis-logo.png') }}" alt="IHU" loading="lazy" class="d-inline-block align-middle" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto main-navbar">
                    <li class="nav-item main-navbar__item {{ (Route::currentRouteName() === 'welcome') ? 'main-navbar__item--active' : '' }}">
                        <a class="nav-link main-navbar__link link link--state-1" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0 form--loader" action="{{ route('search') }}" method="GET">
                    <input class="form-control mr-sm-2" name="AdText" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
    </div>
</header>