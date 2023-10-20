<?php

namespace App\Livewire;

use Livewire\Component;

class Banner extends Component
{
    public $banners = [];

    public function render()
    {
        return view('livewire.banner');
    }

    public function mount() {
        $banner = \App\Models\Banner::first();
        for ($i = 1 ; $i <= 3 ; $i++) {
            if (!empty($banner['image'.$i])) {
                $this->banners[] = [
                    'img' => $banner['image'.$i],
                    'title' => app()->getLocale() == 'ar' ? $banner['title_ar'.$i] : $banner['title_en'.$i],
                    'sub_title' => app()->getLocale() == 'ar' ? $banner['sub_title_ar'.$i] : $banner['sub_title_en'.$i],
                ];
            }
        }
    }
}
