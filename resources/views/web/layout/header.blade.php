<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title . ' - ' . $brandName }}</title>
    <link rel="icon" href="{{ $favicon }}" type="image/jpeg">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css')}}">
</head>
<body>

<!-- Header Section Start -->
<header>

    @includeWhen(Route::currentRouteName() == 'page.index', 'web.layout.slider')

    @includeIf('web.layout.navbar')
</header>
<!-- End Header Section -->

