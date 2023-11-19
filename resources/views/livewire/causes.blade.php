<div>
    <section class="section-padding" id="section_3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-12 text-center mb-4">
                    <h2>{{ app()->getLocale() == 'ar' ? $title->title_ar : $title->title_en }}</h2>
                </div>
                @foreach($course as $c)
                    <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                        <div class="custom-block-wrap">
                            <img src="{{ asset("storage/". $c->image) }}"
                                 class="custom-block-image img-fluid" alt="">
                            <div class="custom-block">
                                <div class="custom-block-body">
                                    <h5 class="mb-3">{{ app()->getLocale() == 'ar' ? $c->title_ar : $c->title_en }}</h5>
                                    <p>{{ app()->getLocale() == 'ar' ? $c->desc_ar : $c->desc_en }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <a href="{{ app()->getLocale() }}/cours" class="custom-btn btn mt-3" target="_blank">
                    @if(app()->getLocale() == 'ar')
                        المزيد
                    @else
                        More
                    @endif
                </a>
            </div>
        </div>
    </section>
</div>
