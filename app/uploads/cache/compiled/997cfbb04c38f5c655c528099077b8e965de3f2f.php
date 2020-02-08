<header class="top" role="banner">

    <section id="primary">

        <div class="container flex">

            <div class="brand max-2">
                <a href="<?php echo get_home_url(); ?>">
                    <img class="logo_grande" src="<?php echo e(get_field('png_','option')); ?>" alt="Ir para: <?php echo bloginfo('name'); ?>" />
                </a>
            </div>

            <nav id="nav" class="max-5 text-right">
                <?php echo wp_nav_menu([ 'theme_location' => 'primary_navigation' ]); ?>

            </nav>

        </div>

    </section>

    <section class="banner relative">
        <ul class="container-full table">
            
            <?php if(!have_posts()): ?>
                <li class="background" style="background-image: url('<?php echo get_field('imagem_erro404' , 'option'); ?>')">
                    <div class="cell-table">
                        <a href="<?php echo e(home_url('/')); ?>" target="_parent" class="content">
                            <h3><?php echo get_field('titulo_erro404' , 'option'); ?></h3>
                            <p class="margT btn" >voltar</p>
                        </a>
                    </div>
                </li>

            
            <?php elseif(  is_home() || is_front_page() ): ?>
                <?php while( have_rows('itens_banners' , 'option') ): ?>
                    <?php (the_row()); ?>
                    <li class="background" style="background-image: url('<?php echo get_sub_field('imagem_banner'); ?>')">
                        <div class="cell-table">
                            <div class="content container text-left">
                                <h3 class="margB max-8"><?php echo get_sub_field('titulo_banner'); ?></h3>
                                <p class="max-7 margB"><?php echo get_sub_field('descricao_banner'); ?></p>
                                <?php if(get_sub_field('botao_banner')): ?>
                                    <?php ($target = get_sub_field('externo_banner') ? '_blank' : '_self' ); ?>
                                    <a class="margT padT btn" href="<?php echo get_sub_field('link_banner'); ?>" target="<?php echo $target; ?>"><?php echo get_sub_field('botao_banner'); ?></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </li>
                <?php endwhile; ?>
            
            <?php elseif( is_single() ): ?>
                <?php ($post = get_queried_object()); ?>
                <li class="background singlepage" style="background-image: url('<?php echo get_field('png_dest_thumb' , $post->ID); ?>')">
                    <div class="cell-table">
                        <div class="content container text-left">
                            <h3 class="margB max-8"><?php echo get_the_title($post->ID); ?></h3>
                            <p class="max-7 margB"><?php echo get_the_excerpt($post->ID); ?>...</p>
                            <p class=" padT btn">
                                <a class="avatar background" href="<?php echo esc_url( get_author_posts_url($post->post_author) ); ?>" target="_self" style="background-image: url('<?php echo get_field('avatar_autor' , 'user_'.$post->post_author); ?>');"></a>
                                De
                                <a href="<?php echo esc_url( get_author_posts_url($post->post_author) ); ?>" target="_parent"><b><?php echo get_the_author_meta( 'display_name', $post->post_author ); ?></b></a>. Postado em <span><b><?php echo get_the_date(); ?></b></span></p>
                        </div>
                    </div>
                </li>
            <?php endif; ?>
        </ul>
    </section>

</header>