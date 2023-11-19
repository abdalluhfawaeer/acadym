<div>
    <section class="section-padding section-bg" id="section_2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                    <img src="{{ asset("storage/". $story->image1) }}"
                         class="custom-text-box-image img-fluid" alt="">
                </div>
                <div class="col-lg-6 col-12">
                    <div class="custom-text-box">
                        <h2 class="mb-2">{{ app()->getLocale() == 'ar' ? $story->title_ar : $story->title_en }}</h2>
                        <p class="mb-0">{!! app()->getLocale() == 'ar' ? nl2br(e($story->desc_ar)): nl2br(e($story->desc_en)) !!}</p>
                    </div>
                    <div class="custom-text-box">
                        <h2 class="mb-2">{{ app()->getLocale() == 'ar' ? $story->title_ar1 : $story->title_en1 }}</h2>
                        <h5 class="mb-3">{{ app()->getLocale() == 'ar' ? $story->sub_title_ar1 : $story->sub_title_en1 }}</h5>
                        <p class="mb-0">{!! app()->getLocale() == 'ar' ? nl2br(e($story->desc_ar_1)): nl2br(e($story->desc_en_1)) !!}</p>
                        <br>
                        <h5 class="mb-3">{{ app()->getLocale() == 'ar' ? $story->sub_title_ar : $story->sub_title_en }}</h5>
                        <p class="mb-0">{!! app()->getLocale() == 'ar' ? nl2br(e($story->desc_ar_2)): nl2br(e($story->desc_en_2)) !!}</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
</div>
