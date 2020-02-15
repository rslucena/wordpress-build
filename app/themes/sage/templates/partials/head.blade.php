@php
    $header['image']        = get_field('default_seo_imagem','option');
    $header['description']  = get_field('default_seo_descricao','option');

    if(is_author())
        $header['title'] = get_the_author_meta('display_name');

    if(is_archive())
        $header['title'] = single_cat_title( '', false );

    if(is_single())
        $header = array(
            'title' => get_the_title(get_the_ID()),
            'description' => get_the_excerpt(),
            'image' => get_the_post_thumbnail_url('full'));

    if(is_home() || is_front_page())
        $header['title'] = get_bloginfo('description');

    $header['title'] &= ' - ' . get_bloginfo('name');
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
    <link rel="canonical" href="{!! get_site_url() !!}" />

    {{-- TYPE --}}
    <meta property="og:type" content="website">
    <meta name="twitter:card" content="summary">

    {{-- SET VIEWPORT --}}
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1, user-scalable=no" />

    {{-- SET COMPATIBLE IE --}}
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    {{-- TITLE --}}
    <title>{!! $header['title'] !!}</title>
    <meta property="og:title" content="{!! $header['title'] !!}">
    <meta name="twitter:title" content="{!! $header['title'] !!}">

    {{-- DESCRIPTION --}}
    <meta name="description" content="{!! $header['description'] !!}">
    <meta property="og:image:alt" content="{!! $header['description'] !!}">
    <meta property="og:description" content="{!! $header['description'] !!}">
    <meta name="twitter:description" content="{!! $header['description'] !!}">
    <meta name="twitter:image:alt" content="{!! $header['description'] !!}">

    {{-- SUBJECT --}}
    <meta name="subject" content="{!! $header['description'] !!}">

    {{-- ROBOTS --}}
    <meta name="robots" content="index,follow">

    {{-- CONTROL CHECK ROBOTS INDEX / DAYS --}}
    <meta name="revisit-after" content="3 days">

    {{-- KEYWORDS --}}
    @if(get_field('default_seo_keywords', 'option'))
        <meta name="keywords" content="{!! get_field('default_seo_keywords', 'option') !!}">
    @endif

    {{-- REMOVE FORMAT DETECTION --}}
    <meta name="format-detection" content="telephone=no">

    {{-- ICONS --}}
    @if(get_field('default_seo_icon', 'option'))
        <link rel="mask-icon" href="{!! get_field('default_seo_icon', 'option') !!}">
    @endif

    @if(get_field('default_seo_apple_touch', 'option'))
        <link rel="apple-touch-icon" href="{!! get_field('default_seo_apple_touch', 'option') !!}">
    @endif

    @if(get_field('default_seo_mask_ico', 'option'))
        <link rel="icon" sizes="192x192" href="{!! get_field('default_seo_mask_ico', 'option') !!}">
    @endif

    {{-- IMAGEM --}}
    <meta name="twitter:image" content="{!! $header['image'] !!}">
    <meta property="og:image" content="{!! $header['image'] !!}">

    {{-- FACEBOOK ID --}}
    @if(get_field('default_seo_facebook_id', 'option'))
        <meta property="fb:app_id" content="{!! get_field('default_seo_facebook_id', 'option') !!}">
    @endif

    {{-- TWITTER USER --}}
    @if(get_field('default_seo_twitter_user'))
        <meta name="twitter:site" content="{!! get_field('default_seo_twitter_user') !!} ">
    @endif

    @php(wp_head())

</head>