@include('layout.header')

<style>
    :root {
        --primary-color:{{ $color->color1 }};
        --secondary-color:{{ $color->color2 }};
        --section-bg-color: {{ $color->color3 }};
        --site-footer-bg-color: {{ $color->color4 }};
        --custom-btn-bg-color: {{ $color->color5 }};
    }
</style>
<livewire:header />
<main>
    <livewire:coures />
</main>
<livewire:footer />

@include('layout.footer')
