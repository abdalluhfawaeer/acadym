<div>
    <section class="about-section section-padding" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-5 col-12">
                    <img src="{{ asset("storage/". $about->image1) }}"
                         class="about-image ms-lg-auto bg-light shadow-lg img-fluid" alt="">
                </div>
                <div class="col-lg-5 col-md-7 col-12">
                    <div class="custom-text-block">
                        <h2 class="mb-0">{{ app()->getLocale() == 'ar' ? $about->title_ar : $about->title_en }}</h2>
                        <p class="text-muted mb-lg-4 mb-md-4">{{ app()->getLocale() == 'ar' ? $about->sub_title_ar : $about->sub_title_en }}</p>
                        <p>{!! app()->getLocale() == 'ar' ? nl2br(e($about->desc_ar)): nl2br(e($about->desc_en)) !!}</p>
                        <ul class="social-icon mt-4">
                            <li class="social-icon-item">
                                <a href="{{ $about->facebook }}" class="social-icon-link bi-twitter"></a>
                            </li>
                            <li class="social-icon-item">
                                <a href="{{ $about->twitter }}" class="social-icon-link bi-facebook"></a>
                            </li>
                            <li class="social-icon-item">
                                <a href="{{ $about->instagram }}" class="social-icon-link bi-instagram"></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
