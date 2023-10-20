<div>
    <header class="site-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12 d-flex flex-wrap">
                    <p class="d-flex me-4 mb-0">
                        <i class="bi-geo-alt me-2"></i>
                        {{ app()->getLocale() == 'ar' ? $header->address_ar : $header->address_en }}
                    </p>
                    <p class="d-flex mb-0">
                        <i class="bi-envelope me-2"></i>
                        <a href="mailto:info@company.com">
                            {{ $header->email }}
                        </a>
                    </p>
                </div>
                <div class="col-lg-3 col-12 ms-auto d-lg-block d-none">
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
    </header>
    <nav class="navbar navbar-expand-lg bg-light shadow-lg" style="z-index: 99999999999">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="{{ asset("storage/". $nav->img) }}" class="logo img-fluid" alt="Kind Heart Charity">
                <span>
                    {{ app()->getLocale() == 'ar' ? $nav->title_ar : $nav->title_en }}
                    <small>{{ app()->getLocale() == 'ar' ? $nav->sub_title_ar : $nav->sub_title_en }}</small>
                </span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    @if(!empty($nav->menu_1_ar) && !empty($nav->menu_1_en))
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#top">{{ app()->getLocale() == 'ar' ? $nav->menu_1_ar : $nav->menu_1_en }}</a>
                        </li>
                    @endif
                    @if(!empty($nav->menu_2_ar) && !empty($nav->menu_2_en))
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#top">{{ app()->getLocale() == 'ar' ? $nav->menu_1_ar : $nav->menu_1_en }}</a>
                        </li>
                    @endif
                    @if(!empty($nav->menu_3_ar) && !empty($nav->menu_3_en))
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#about">{{ app()->getLocale() == 'ar' ? $nav->menu_1_ar : $nav->menu_1_en }}</a>
                        </li>
                    @endif
                    @if(!empty($nav->menu_4_ar) && !empty($nav->menu_4_en))
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_3">{{ app()->getLocale() == 'ar' ? $nav->menu_1_ar : $nav->menu_1_en }}</a>
                        </li>
                    @endif
                    @if(!empty($nav->menu_5_ar) && !empty($nav->menu_5_en))
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#clint">{{ app()->getLocale() == 'ar' ? $nav->menu_1_ar : $nav->menu_1_en }}</a>
                        </li>
                    @endif
                    @if(!empty($nav->menu_6_ar) && !empty($nav->menu_6_en))
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_6">{{ app()->getLocale() == 'ar' ? $nav->menu_1_ar : $nav->menu_1_en }}</a>
                        </li>
                    @endif
                    <li class="nav-item ms-3">
                        @if(app()->getLocale() == 'ar')
                            <a class="nav-link custom-btn custom-border-btn btn" href="/en">English</a>
                        @else
                            <a class="nav-link custom-btn custom-border-btn btn" href="/ar">العربية</a>
                        @endif
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
