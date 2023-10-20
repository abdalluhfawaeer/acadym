<div>
    <section class="section-padding">
        <div class="container">
            <div class="row" style="align-items: center;justify-content: center;">
                <div class="col-lg-10 col-12 text-center mx-auto">
                    <h2 class="mb-5">{{ $title }}</h2>
                </div>
                @foreach($welcome as $w)
                    <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                        <div class="featured-block d-flex justify-content-center align-items-center">
                            <a href="#" class="d-block">
                                <img src="{{ asset("storage/". $w['img']) }}" class="featured-block-image img-fluid" alt="">
                                <p class="featured-block-text">{{ $w['title'] }}</p>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</div>
