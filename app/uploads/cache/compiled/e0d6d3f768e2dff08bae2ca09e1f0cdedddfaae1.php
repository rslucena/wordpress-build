<footer class="background" style="background-image: url('<?php echo get_field('imagem_de_fundo', 'option'); ?>')">

    <section class="ads space">

        <div class="padALL container flex">

            <?php if(get_field('bloco_a_rodape_ads' , 'option')): ?>
                <div class="margT margB text-center code max-5">
                    <img src="<?php echo get_field('bloco_a_top_ads' , 'option'); ?>" />
                </div>
            <?php endif; ?>

            <?php if(get_field('bloco_b_rodape_ads' , 'option')): ?>
                <div class="margT margB text-center code max-5">
                    <img src="<?php echo get_field('bloco_b_top_ads' , 'option'); ?>" />
                </div>
            <?php endif; ?>

        </div>

    </section>

    <section class="container ">

        <div class="mod-section content max-10 margAUTO mod-about">

            <div class="text-center">
                <h3>Quem somos</h3>
                <p class="margT padB"><?php echo get_field('quem_somos_subtitulos_section'); ?></p>
            </div>

            <ul class="flex margT padT text-center">

                <?php if( have_rows('icone_rodape', 'option') ): ?>
                    <?php while( have_rows('icone_rodape', 'option') ): ?>
                        <?php (the_row()); ?>

                        <li class="max-4 padALL">
                            <img src="<?php echo get_sub_field('png_rodape'); ?>" alt="<?php echo get_sub_field('titulo_rodape'); ?>" />
                            <p class="margT margB"><b><?php echo get_sub_field('titulo_rodape'); ?></b></p>
                            <p><?php echo get_sub_field('descricao_rodape'); ?></p>
                        </li>

                    <?php endwhile; ?>
                <?php endif; ?>

            </ul>

            <div class="flex more-btns margAUTO margB margT max-6 padALL">
                <a class="btn padALL borderRadius" href="<?php echo esc_url(get_page_link(62)); ?>" target="_self">
                    <b class="padALL">Saiba mais</b>
                </a>
                <a id="toggleform" class="btn padALL borderRadius" href="" target="_self">
                    <b class="padALL">Entrar em contato</b>
                </a>
            </div>

            <div id="form" class="hidden">
                <?php echo do_shortcode('[contact-form-7 id="86" title="singleform"]'); ?>

            </div>

        </div>

    </section>

    <section class="sitemap container space">

        <div class="content">

            <div class="flex">

                <ul class="side-nav max-2">
                    <?php ($pages = get_pages()); ?>
                    <a class="margT margB" href="<?php echo get_home_url(); ?>">
                        <img class="logo_grande" src="<?php echo e(get_field('png_','option')); ?>" alt="Ir para: <?php echo bloginfo('name'); ?>" />
                    </a>
                    <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="padT">
                            <a href="<?php echo esc_url(get_page_link($data->ID)); ?>" target="_self">
                                <p><?php echo esc_html($data->post_title); ?></p>
                            </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>

                <ul class="side-nav max-2">
                    <?php ($categories = get_categories( array('orderby'=>'name','order'=>'ASC'))); ?>
                    <p class="margT margB"><b>Canais</b></p>
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="padT">
                            <a href="<?php echo esc_url( get_category_link( $category->term_id ) ); ?>">
                                <p><?php echo esc_html( $category->name ); ?></p>
                            </a>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>

                <ul class="side-nav max-4">
                    <?php  $the_query = new WP_Query( array( 'posts_per_page' => 15 ) )  ?>
                    <?php if( $the_query->have_posts() ): ?>
                        <p class="margT margB"><b>Conteúdos Recentes</b></p>
                        <?php while( $the_query->have_posts() ): ?>
                            <?php ( $the_query->the_post() ); ?>
                            <li class="padT"><a  href="<?php echo get_permalink( get_the_ID() ); ?>" target="_self">
                                    <?php ($resume = strlen(get_the_title()) > 30 ? substr(get_the_title(), 0, 30) . '...' : get_the_title() ); ?>
                                    <p><?php echo esc_html( $resume ); ?></p>
                                </a></li>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <?php (wp_reset_postdata()); ?>
                </ul>

                <ul class="side-nav max-4">
                    <p class="margT margB"><b>Redes Social</b></p>

                    <ul class="padT flex ico">
                        <?php if(get_field('facebook_sonar','option')): ?>
                            <a class="margR facebook" href="<?php echo esc_html(get_field('facebook_sonar','option')); ?>" target="_blank">&nbsp;</a>
                        <?php endif; ?>

                        <?php if(get_field('instagram_sonar','option')): ?>
                            <a class="margR instagram" href="<?php echo esc_html(get_field('instagram_sonar','option')); ?>" target="_blank">&nbsp;</a>
                        <?php endif; ?>

                        <?php if(get_field('youtube_sonar','option')): ?>
                            <a class="margR youtube" href="<?php echo esc_html(get_field('youtube_sonar','option')); ?>" target="_blank">&nbsp;</a>
                        <?php endif; ?>

                        <?php if(get_field('linkedin_sonar','option')): ?>
                            <a class="margR linkedin" href="<?php echo esc_html(get_field('linkedin_sonar','option')); ?>" target="_blank">&nbsp;</a>
                        <?php endif; ?>

                    </ul>
                    <?php if(get_field('telefone_sonar','option')): ?>
                    <p class="padT margT margB"><b>Telefone</b></p>
                        <a class="margR linkedin" href="tel:<?php echo esc_html(get_field('telefone_sonar','option')); ?>" target="_blank"><?php echo get_field('telefone_sonar','option'); ?></a>
                    <?php endif; ?>

                </ul>

            </div>

        </div>


    </section>

    <section class="copy text-center padB">
        <p>© <?php echo date('Y'); ?> <?php echo get_bloginfo('name'); ?>. Todos os direitos reservados.</p>
        <p><a href="<?php echo esc_url(get_field('endereco_maps', 'option')); ?>" target="_blank"><?php echo esc_html(get_field('endereco_maps_copiar', 'option')); ?></a></p>
    </section>

</footer>