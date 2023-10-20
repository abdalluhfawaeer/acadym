@include('layout.admin.head')

<!-- Sidebar -->
@include('layout.admin.nav')
<!-- End of Sidebar -->

<div id="content-wrapper" class="d-flex flex-column">
    @include('layout.admin.header')
    <livewire:admin.components.add-users id=""/>
</div>

@include('layout.admin.footer')
