<head>
    <meta charset="utf-8">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="pt_BR">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="keywords" content="{{get_field('keywords_seo','option')}}"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- GLOBAL -->
    <title>{{get_bloginfo('name').' - '.get_bloginfo('description')}}</title>
    <meta property="og:url" content="{{get_page_link(get_the_id())}}" />
    <meta property="og:title" content="{{get_bloginfo('name')}}" />
    <meta name="twitter:title" content="{{get_bloginfo('name')}}" />
    <meta property="og:image" content="{{get_site_url()}}/{{get_field('image_seo', 'option')}}" />
    <meta name="description" content="{{get_field('description_seo' , 'option')}}">


    <meta property="og:site_name" content="{{get_bloginfo('name')}}" />

    @if(get_field('admin_page_facebook','option'))
        <meta property="fb:admins" content="{{get_field('admin_page_facebook','option')}}" />
    @endif

    <!-- TWITTER -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="{{get_site_url()}}" />
    <meta name="twitter:image:alt" content="{{get_bloginfo('name').' - '.get_bloginfo('description')}}" />

    @if(get_field('admin_page_twitter','option'))
        <meta name="twitter:creator" content="{{get_field('admin_page_twitter','option')}}">
    @endif

    <!-- GOOGLE + -->
    @if(get_field('author_profile_google_','option'))
        <link rel="author" href="{{get_field('author_profile_google_','option')}}" />
        <link rel="publisher" href="{{get_field('page_profile_google_','option')}}"/>
    @endif

    @php(wp_head())
</head>

