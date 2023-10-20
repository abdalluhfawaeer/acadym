<div>
    <section class="hero-section hero-section-full-height">
        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-12 col-12 p-0">
                    <div id="hero-slide" class="carousel carousel-fade slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            @foreach($banners as $banner)
                                <div class="carousel-item active">
                                    <img src="{{ asset("storage/". $banner['img']) }}"
                                         class="carousel-image img-fluid" alt="..." style="width: 100%;height: 100%;">
                                    <div class="carousel-caption d-flex flex-column justify-content-end">
                                        <h1>{{ $banner['title'] }}</h1>
                                        <p>{{ $banner['sub_title'] }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <button class="carousel-control-prev" type="button" data-bs-target="#hero-slide"
                                data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>

                        <button class="carousel-control-next" type="button" data-bs-target="#hero-slide"
                                data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </section>
</div>
