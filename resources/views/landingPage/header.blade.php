
<header id="header">
    <div class="container">
        <div class="row align-items-center justify-content-between d-flex">
            <div id="logo">
                <a href="index.html"><h2 style="color: white"> IKA SKANEL </h2></a>
            </div>
            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li class="menu-active"><a href="#">Beranda</a></li>
                    <li><a href="#">Tentang</a></li>
                    <li><a href="#">Struktur Organisasi</a></li>
                    <li class="menu-has-children"><a href="#">Informasi</a>
                        <ul>
                            <li><a href="elements.html">Alumni</a></li>
                            <li><a href="elements.html">Lowongan Kerja</a></li>

                        </ul>
                    </li>

                    @if (Route::has('login'))
                        <div class="top-right links">
                            @auth
{{--                                <a href="{{ url('/home') }}">Home</a>--}}
                            @else
                               <li><a href="{{ route('login') }}">Login</a>

{{--                            @if (Route::has('register'))--}}
{{--                                <ul>--}}
{{--                                    <a href="{{ route('register') }}">Register</a>--}}
{{--                                </ul>--}}
{{--                                @endif--}}
                            @endauth
                               </li>
                        </div>
                    @endif
                </ul>
            </nav><!-- #nav-menu-container -->
        </div>
    </div>
</header>

