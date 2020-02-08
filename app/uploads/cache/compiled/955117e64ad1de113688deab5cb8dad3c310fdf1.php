<head>
    <meta charset="utf-8">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="pt_BR">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="keywords" content="<?php echo e(get_field('keywords_seo','option')); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="article:author" content="Academia do Psicólogo">

    <!-- GLOBAL -->
    <title><?php echo e(get_bloginfo('name').' - '.get_bloginfo('description')); ?></title>
    <meta property="og:url" content="<?php echo e(get_page_link(get_the_id())); ?>" />
    <meta property="og:title" content="<?php echo e(get_bloginfo('name')); ?>" />
    <meta name="twitter:title" content="<?php echo e(get_bloginfo('name')); ?>" />
    <meta property="og:image" content="<?php echo e(get_site_url()); ?>/<?php echo e(get_field('image_seo', 'option')); ?>" />
    <meta name="description" content="<?php echo e(get_field('description_seo' , 'option')); ?>">


    <meta property="og:site_name" content="<?php echo e(get_bloginfo('name')); ?>" />

    <?php if(get_field('admin_page_facebook','option')): ?>
        <meta property="fb:admins" content="<?php echo e(get_field('admin_page_facebook','option')); ?>" />
    <?php endif; ?>

    <!-- TWITTER -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="<?php echo e(get_site_url()); ?>" />
    <meta name="twitter:image:alt" content="<?php echo e(get_bloginfo('name').' - '.get_bloginfo('description')); ?>" />

    <?php if(get_field('admin_page_twitter','option')): ?>
        <meta name="twitter:creator" content="<?php echo e(get_field('admin_page_twitter','option')); ?>">
    <?php endif; ?>

    <!-- GOOGLE + -->
    <?php if(get_field('author_profile_google_','option')): ?>
        <link rel="author" href="<?php echo e(get_field('author_profile_google_','option')); ?>" />
        <link rel="publisher" href="<?php echo e(get_field('page_profile_google_','option')); ?>"/>
    <?php endif; ?>

    <?php (wp_head()); ?>
</head>

