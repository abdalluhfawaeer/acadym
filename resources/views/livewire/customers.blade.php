<div>
    <section class="testimonial-section section-padding section-bg" id="clint">
        <div class="container" >
            <div class="row">
                <div class="section-title">
                    <h2> {{ app()->getLocale() == 'ar' ? $title->title_ar : $title->title_en }} </h2>
                </div>
                <div class="carousel-client" style="display: flex;z-index: 99999999;overflow-y: auto;justify-content: center;align-items: center;">
                    @foreach($clint as $c)
                        <div class="slide"><img src="{{ asset("storage/". $c->image) }}" style="width: 200px ;height: 200px ;margin: 5px"></div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
</div>
