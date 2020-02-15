@php

    $header = array(
        'title' => '',
        'description' => '',
        'image:url' => '');
@endphp

<head>
    {{-- CHARSET --}}
    <meta charset="utf-8">

    {{-- LANGUAGE --}}
    <meta http-equiv="Content-Language" content="pt-br">
    <meta property="og:locale" content="pt_BR">

    {{--  REFERRER   --}}
    <meta name="referrer" content="origin-when-crossorigin">

    {{-- CONTENT SECURITY --}}
    <meta http-equiv="Content-Security-Policy" content="default-src 'self'">

    {{-- BASE URL --}}
    <base href="{!! get_site_url() !!}">

    {{-- TYPE --}}
    <meta property="og:type" content="website">
    <meta name="twitter:card" content="summary">

    {{-- TITLE --}}
    <title></title>
    <meta property="og:title" content="">
    <meta name="twitter:title" content="">

    {{-- DESCRIPTION --}}
    <meta name="description" content="">
    <meta property="og:image:alt" content="">
    <meta property="og:description" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image:alt" content="">

    {{-- SUBJECT --}}
    <meta name="subject" content="">

    {{-- ROBOTS --}}
    <meta name="robots" content="index,follow">

    {{-- CONTROL CHECK ROBOTS INDEX / DAYS --}}
    <meta name="revisit-after" content="3 days">

    {{-- KEYWORDS --}}
    <meta name="keywords" content="">

    {{-- REMOVE FORMAT DETECTION --}}
    <meta name="format-detection" content="telephone=no">

    {{-- ICONS --}}
    <link rel="mask-icon" href="">
    <link rel="apple-touch-icon" href="">
    <link rel="icon" sizes="192x192" href="">

    {{-- IMAGEM --}}
    <meta name="twitter:image" content="">
    <meta property="og:image" content="">

    {{-- IDS --}}
    <meta property="fb:app_id" content="">
    <meta name="twitter:site" content="@">


    @php(wp_head())

</head>