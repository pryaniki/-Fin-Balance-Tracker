<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" width="70" height="24" class="d-inline-block align-text-top">
        </a>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                @foreach($menu as $item)
                    <a class="nav-link @if($item['active']) active @endif @if($item['disabled']) disabled @endif"
                       @if($item['active']) aria-current="page" @endif
                       @if($item['disabled']) aria-disabled="true" @endif
                       href="{{ route($item['route']) }}">
                        @lang($item['title'])
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</nav>