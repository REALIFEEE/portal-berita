@extends('frontend.perent')

<body>

    <div class="container">
        {{-- navbar --}}
        {{-- <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        @foreach ($category as $row)
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page"
                                    href="{{ route('detailCategory', $row->slug) }}">{{ $row->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav> --}}
        {{-- end navbar --}}

        {{-- card --}}
        {{-- <div class="row row-cols-1 row-cols-md-2 g-4">
            @foreach ($news as $row)
                <div class="col mb-3">
                    <div class="card mb-3">
                        <img src="{{ $row->image }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $row->title }}</h5>
                            <div class="text-truncate">
                                <p class="card-text">{!! $row->description !!}</p>
                            </div>
                            <a href="{{ $row->slug }}"></a>
                        </div>
                    </div>
            @endforeach
        </div> --}}

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            @foreach ($news as $row)
                <div class="portfolio-wrap">
                    <img src="{{ $row->image }}" class="img-fluid w-25" alt="">
                    <div class="portfolio-info">
                        <h4>{{ $row->title }}</h4>
                        <p>{!! $row->description !!}</p>
                        <div class="portfolio-links">
                            <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery"
                                class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="portfolio-details-lightbox"
                                data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>


        {{-- end card --}}
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">
    </script>
</body>

</html>
