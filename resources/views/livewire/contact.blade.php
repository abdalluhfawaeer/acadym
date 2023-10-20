<div>
    <section class="contact-section section-padding" id="section_6">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-12 ms-auto mb-5 mb-lg-0">
                    <div class="contact-info-wrap">
                        <div class="contact-info">
                            <h5 class="mb-3">{{ app()->getLocale() == 'ar' ? $contact->title_ar : $contact->title_en }}</h5>
                            <p class="d-flex mb-2">
                                <i class="bi-geo-alt me-2"></i>
                                {{ app()->getLocale() == 'ar' ? $header->address_ar : $header->address_en }}
                            </p>
                            @foreach($phone as $p)
                                <p class="d-flex mb-2">
                                    <i class="bi-telephone me-2"></i>
                                    <a href="tel: 305-240-9671">
                                        {{ $p['phone'] }}
                                    </a>
                                </p>
                            @endforeach
                            <p class="d-flex">
                                <i class="bi-envelope me-2"></i>
                                <a href="mailto:info@yourgmail.com">
                                    {{ $header->email }}
                                </a>
                            </p>
                            <div class="d-flex">
                                <iframe src="{{ $contact->google_maps }}" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 col-12 mx-auto">
                    <div class="custom-form contact-form" role="form">
                        <h2>{{ app()->getLocale() == 'ar' ? $contact->title_ar_form : $contact->title_en_form }}</h2>
                        <p class="mb-4">{{ app()->getLocale() == 'ar' ? $contact->sub_title_ar_form : $contact->sub_title_en_form }}</p>
                        @if (session()->has('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                        @endif
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <input type="text" name="first-name" id="first-name" class="form-control"
                                       placeholder="First Name" required wire:model.dafer="first">
                            </div>

                            <div class="col-lg-6 col-md-6 col-12">
                                <input type="text" name="last-name" id="last-name" class="form-control"
                                       placeholder="Last Nmae" required wire:model.dafer="last">
                            </div>
                        </div>

                        <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control"
                               placeholder="email@email.com" required wire:model.dafer="email">

                        <textarea name="message" rows="5" class="form-control" id="message"
                                  placeholder="?" wire:model.dafer="msg"></textarea>

                        <button type="submit" class="form-control" wire:click="save">{{ app()->getLocale() == 'ar' ? $contact->button_ar_form : $contact->button_en_form }}</button>
                    </div>
                </div>

            </div>
        </div>
    </section>
</div>
