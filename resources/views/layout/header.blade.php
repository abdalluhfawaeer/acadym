<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    @if(app()->getLocale() == 'ar')
        <title>أكاديمية آدم للتدريب والتطوير الدولية</title>
    @else
        <title>Adam Academy for International Training and Development</title>
    @endif
    <!-- CSS FILES -->
    <link rel="icon" type="image/x-icon" href="{{ asset('images/logo.jpeg') }}">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('css/templatemo-kind-heart-charity.css') }}" rel="stylesheet">
    @if(app()->getLocale() == 'ar')
    <link href="{{ asset('css/kind_ar.css') }}" rel="stylesheet">
    @endif
    @livewireStyles
</head>
<body id="section_1">
