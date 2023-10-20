<div>
    <section class="news-section section-padding" id="section_5">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-12">
                    <div class="news-block">
                        <div class="news-block-info">
                            <div class="news-block-title mb-2">
                                <h4><a href="#" class="news-block-title-link">{{ app()->getLocale() == 'ar' ? $goals->title_ar : $goals->title_en }}</a></h4>
                            </div>
                            <div class="news-block-body">
                                <p>{!! app()->getLocale() == 'ar' ? nl2br(e($goals->desc_ar)): nl2br(e($goals->desc_en)) !!}</p>
                            </div>
                        </div>
                    </div>
                    <div class="news-block mt-3">
                        <div class="news-block-info">
                            <div class="news-block-title mb-2">
                                <h4><a href="#" class="news-block-title-link">{{ app()->getLocale() == 'ar' ? $goals->title_ar1 : $goals->title_en1 }}</a></h4>
                            </div>
                            <div class="news-block-body">
                                <p>{!! app()->getLocale() == 'ar' ? nl2br(e($goals->desc_ar1)): nl2br(e($goals->desc_en1)) !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12 mx-auto">
                    <div class="category-block d-flex flex-column">
                        <h5 class="mb-3">{{ app()->getLocale() == 'ar' ? $goals->title_ar_g : $goals->title_en_g }}</h5>
                        @foreach($list as $l)
                            <a href="#" class="category-block-link">
                                {{ $l['list'] }}
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
