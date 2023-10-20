<div>
    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-12 mb-4">
                    <img src="{{ asset("storage/". $nav->img) }}" class="logo img-fluid" alt="">
                </div>

                <div class="col-lg-4 col-md-6 col-12 mb-4">
                    <ul class="footer-menu">
                        <li class="footer-menu-item"><a href="#top" class="footer-menu-link">{{ app()->getLocale() == 'ar' ? $nav->menu_1_ar : $nav->menu_1_en }}</a></li>
                        <li class="footer-menu-item"><a href="#top" class="footer-menu-link">{{ app()->getLocale() == 'ar' ? $nav->menu_2_ar : $nav->menu_2_en }}</a></li>
                        <li class="footer-menu-item"><a href="#about" class="footer-menu-link">{{ app()->getLocale() == 'ar' ? $nav->menu_3_ar : $nav->menu_3_en }}</a></li>
                        <li class="footer-menu-item"><a href="#section_3" class="footer-menu-link">{{ app()->getLocale() == 'ar' ? $nav->menu_4_ar : $nav->menu_4_en }}</a></li>
                        <li class="footer-menu-item"><a href="#clint" class="footer-menu-link">{{ app()->getLocale() == 'ar' ? $nav->menu_5_ar : $nav->menu_5_en }}</a></li>
                        <li class="footer-menu-item"><a href="#section_6" class="footer-menu-link">{{ app()->getLocale() == 'ar' ? $nav->menu_6_ar : $nav->menu_6_en }}</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6 col-12 mx-auto">
                    <p class="text-white d-flex mb-2">
                        <i class="bi-telephone me-2"></i>
                        <a href="tel: 305-240-9671" class="site-footer-link">
                            {{ $contact->phone1 }}
                        </a>
                    </p>
                    <p class="text-white d-flex">
                        <i class="bi-envelope me-2"></i>
                        <a href="mailto:info@yourgmail.com" class="site-footer-link">
                            {{ $header->email }}
                        </a>
                    </p>
                    <p class="text-white d-flex mt-3">
                        <i class="bi-geo-alt me-2"></i>
                        {{ app()->getLocale() == 'ar' ? $header->address_ar : $header->address_en }}
                    </p>
                    @if(app()->getLocale() == 'ar')
                        <a class="custom-btn btn mt-3" href="/en">English</a>
                    @else
                        <a class="custom-btn btn mt-3" href="/ar">العربية</a>
                    @endif
                </div>
            </div>
        </div>

        <div class="site-footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-7 col-12">
                        <p class="copyright-text mb-0">Copyright © 2023 <a href="/">Adam Academy for International Training and Development</a></p>
                    </div>
                    <div class="col-lg-6 col-md-5 col-12 d-flex justify-content-center align-items-center mx-auto">
                        <ul class="social-icon">
                            @if(!empty($header->twitter))
                                <li class="social-icon-item">
                                    <a href="{{ $header->twitter }}" class="social-icon-link bi-twitter"></a>
                                </li>
                            @endif
                            @if(!empty($header->facebook))
                                <li class="social-icon-item">
                                    <a href="{{ $header->facebook }}" class="social-icon-link bi-facebook"></a>
                                </li>
                            @endif
                            @if(!empty($header->instagram))
                                <li class="social-icon-item">
                                    <a href="{{ $header->instagram }}" class="social-icon-link bi-instagram"></a>
                                </li>
                            @endif
                            @if(!empty($header->youtube))
                                <li class="social-icon-item">
                                    <a href="{{ $header->youtube }}" class="social-icon-link bi-youtube"></a>
                                </li>
                            @endif
                            @if(!empty($header->whatsapp))
                                <li class="social-icon-item">
                                    <a href="{{ $header->whatsapp }}" class="social-icon-link bi-whatsapp"></a>
                                </li>
                            @endif
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </footer>
</div>
