<?php $__env->startSection('content'); ?>
    <?php while(have_posts()): ?> <?php (the_post()); ?>

        <section class="mod-share padALL">

            <div class="flex container margAUTO">

                <?php ($url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"); ?>
                <ul class="list-share flex margT margB">
                    <li class="title">
                        <span>Compartilhar</span>
                    </li>
                    <li class="share s-twitter">
                        <a href="https://twitter.com/share?text=<?php echo esc_url( $url ); ?>" title="Share on Twitter" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
                            <i class="fab fa-twitter"></i>
                            <span class="social-share-button-text">Twitter</span>
                        </a>
                    </li>
                    <li class="share s-facebook">
                        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo esc_url( $url ); ?>" title="Share on Facebook" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
                            <i class="fab fa-facebook-f"></i>
                            <span class="social-share-button-text">Facebook</span>
                        </a>
                    </li>
                    <li class="share s-pinterest">
                        <a href="https://www.pinterest.com/pin/create/button/?url=<?php echo esc_url( $url ); ?>" title="Share on Pinterest" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
                            <i class="fab fa-pinterest-p"></i>
                            <span class="social-share-button-text">Pinterest</span>
                        </a>
                    </li>
                    <li class="share s-linkedin">
                        <a href="https://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo esc_url( $url ); ?>" title="Share on LinkedIn" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
                            <i class="fab fa-linkedin-in"></i>
                            <span class="social-share-button-text">Linkedin</span>
                        </a>
                    </li>
                </ul>
                <ul class="modtoggle max-2 margT margB">
                    <li class="flex">
                        <i class="branco title">Modo escuro <br /><span class="mode">Ativado</span></i>
                        <script>
                            const lampOff = '<?php echo get_field('lampada_off' , 'option'); ?>';
                            const lampOn = '<?php echo get_field('lampada_on' , 'option'); ?>';
                        </script>
                        <img id="lamp" class="background" src="<?php echo get_field('lampada_off' , 'option'); ?>" />
                    </li>
                </ul>

            </div>

        </section>

        <section id="content" class="container space">

            <div class="content flex">

                <div data-mod="off" class="primary-content max-9 padALL __sn_darkmode">

                    <?php echo esc_html(the_content()); ?>


                </div>

                <div class="max-3">

                    <section class="ads margB">

                        <?php if(get_field('bloco_a_top_ads' , 'option')): ?>
                            <div class="margB text-center code"><img src="<?php echo get_field('bloco_a_top_ads' , 'option'); ?>" /></div>
                        <?php endif; ?>

                        <?php if(get_field('bloco_a_top_ads' , 'option')): ?>
                            <div class="text-center code"><img src="<?php echo get_field('bloco_b_top_ads' , 'option'); ?>" /></div>
                        <?php endif; ?>

                    </section>

                    <div class="space mod-loop">
                        <?php  $the_query = new WP_Query( array( 'posts_per_page' => 3, 'post__not_in' => array(get_the_ID()) ) )  ?>
                        <?php if( $the_query->have_posts() ): ?>
                            <div class="margB padB">
                                <p><b>Últimas postagens</b></p>
                            </div>
                            <ul>
                                <?php while( $the_query->have_posts() ): ?>
                                    <?php ( $the_query->the_post() ); ?>
                                    <li class="margB">
                                        <a class="flex" href="<?php echo get_permalink( get_the_ID() ); ?>" target="_self">
                                            <div class="max-3 thumb background" style="background-image: url(<?php echo get_field('png_dest_thumb'); ?>);"></div>
                                            <p class="padL max-9"><?php echo get_the_title(); ?></p>
                                        </a>
                                    </li>
                                <?php endwhile; ?>
                            </ul>
                        <?php endif; ?>
                        <?php (wp_reset_postdata()); ?>
                    </div>

                    <div class="space mod-loop">

                        <?php 
                            $crit = array();
                            $crit['posts_per_page'] = 3;
                            $categories = get_the_category();
                            if(! empty( $categories ) )
                                $crit['category__in'] = $categories[0]->term_id;
                            $crit['post__not_in'] = array(get_the_ID());
                         ?>

                        <?php  $the_query = new WP_Query($crit)  ?>
                        <?php if( $the_query->have_posts() ): ?>
                            <div class="margB padB">
                                <p><b>Relacionados</b></p>
                            </div>
                            <ul>
                                <?php while( $the_query->have_posts() ): ?>
                                    <?php ( $the_query->the_post() ); ?>
                                    <li class="margB">
                                        <a class="flex" href="<?php echo get_permalink( get_the_ID() ); ?>" target="_self">
                                            <div class="max-3 thumb background" style="background-image: url(<?php echo get_field('png_dest_thumb'); ?>);"></div>
                                            <p class="padL max-9"><?php echo get_the_title(); ?></p>
                                        </a>
                                    </li>
                                <?php endwhile; ?>
                            </ul>
                        <?php endif; ?>
                        <?php (wp_reset_postdata()); ?>
                    </div>


                </div>

            </div>

        </section>

        <?php if( !empty(get_the_tags())): ?>
            <section class="mod-tag padALL ">
                <div class="flex container margAUTO">
                    <ul class="list-share flex margT margB">
                        <?php $__currentLoopData = get_the_tags(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="padALL margR">
                                <a href="<?php echo esc_html(get_tag_link($tag->term_id)); ?>" target="_self">
                                    <?php echo $tag->name; ?>

                                </a>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            </section>

        <?php endif; ?>

        <section class="mod-share padALL">

            <div class="flex container margAUTO">

                <?php ($url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"); ?>
                <ul class="list-share flex margT margB">
                    <li class="title">
                        <span>Compartilhar</span>
                    </li>
                    <li class="share s-twitter">
                        <a href="https://twitter.com/share?text=<?php echo esc_url( $url ); ?>" title="Share on Twitter" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
                            <i class="fab fa-twitter"></i>
                            <span class="social-share-button-text">Twitter</span>
                        </a>
                    </li>
                    <li class="share s-facebook">
                        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo esc_url( $url ); ?>" title="Share on Facebook" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
                            <i class="fab fa-facebook-f"></i>
                            <span class="social-share-button-text">Facebook</span>
                        </a>
                    </li>
                    <li class="share s-pinterest">
                        <a href="https://www.pinterest.com/pin/create/button/?url=<?php echo esc_url( $url ); ?>" title="Share on Pinterest" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
                            <i class="fab fa-pinterest-p"></i>
                            <span class="social-share-button-text">Pinterest</span>
                        </a>
                    </li>
                    <li class="share s-linkedin">
                        <a href="https://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo esc_url( $url ); ?>" title="Share on LinkedIn" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
                            <i class="fab fa-linkedin-in"></i>
                            <span class="social-share-button-text">Linkedin</span>
                        </a>
                    </li>
                </ul>
            </div>

        </section>

        <section class="form container space">

            <div class="max-7">
                <div  id="disqus_thread"></div>
            </div>

        </section>

    <?php endwhile; ?>

    <script src="https://kit.fontawesome.com/197aa4f703.js" crossorigin="anonymous"></script>
    <script src="http://sonartrade-com-br.disqus.com/embed.js" crossorigin="anonymous"></script>
    <script type="text/javascript">
        var disqus_title = "<?php echo get_the_title(); ?>";
        var disqus_url = "<?php echo get_permalink(); ?>";
        var disqus_identifier = "sonartrade-com-br-<?php echo get_the_ID(); ?>";
    </script>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>