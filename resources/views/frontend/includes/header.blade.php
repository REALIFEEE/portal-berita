<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="/" class="logo d-flex align-items-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/logo.png" alt=""> -->
            <h1>ZenNews</h1>
        </a>

        <nav id="navbar" class="navbar">
            <ul>
                @foreach ($nav_category as $row)
                    <li><a href="{{ route('detailCategory', $row->slug) }}">{{ $row->name }}</a></li>
                @endforeach
            </ul>
        </nav><!-- .navbar -->

        <div class="position-relative">
            <a href="#" class="mx-2"><span class="bi-facebook"></span></a>
            <a href="#" class="mx-2"><span class="bi-twitter"></span></a>
            <a href="#" class="mx-2"><span class="bi-instagram"></span></a>

            <a href="#" class="mx-2 js-search-open"><span class="bi-search"></span></a>
            <i class="bi bi-list mobile-nav-toggle"></i>

            <!-- ======= Search Form ======= -->
            <div class="search-form-wrap js-search-form-wrap">

                <form action="{{ route('searchBerita') }}" method="GET">
                    <div class="input-group mb-3">

                        <input type="text" class="form-control" placeholder="Search News"
                            aria-label="Example text with button addon" aria-describedby="button-addon1" name="keyword">

                        <button class="btn btn-secondary btn-sm" type="submit" id="button-addon1">Search</button>
                    </div>
                </form>

            </div><!-- End Search Form -->
            @guest
                <a href="/login">Login</a>
            @else
                <a href="/home">Home</a>

            @endguest
        </div>

    </div>

</header><!-- End Header -->
