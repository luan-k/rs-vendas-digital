
            
            <footer class="page-footer bg-primary text-light-primary pb-20">
                
                <!-- Footer Links -->
                <div class="container text-center md:text-left text-lg">

                    <div class="grid grid-cols-1 md:grid-cols-3 col-g gap-6">

                        <div class="col-12 col-sm-4">
                            <h4 class="title-3 text-2xl mb-6 ">
                                central de atendimento
                            </h4>
                            <p class="footer-text">
                                <i class="fas fa-phone-alt"></i> (48) 3033-3277
                            </p>
                            <p class="footer-text">
                                <i class="fab fa-whatsapp"></i> (48) 998479-1962
                            </p>
                            <a class="footer-text" href="<?php echo esc_url(site_url('/contato')); ?>">
                                <i class="far fa-envelope"></i> Enviar uma mensagem
                            </a>
                            <hr class="white">
                            <h4 class="title-3 text-2xl mb-6 title-intert mt-5">
                                Onde Estamos:
                            </h4>
                            <p class="footer-text">
                                <i class="fas fa-map-marker-alt"></i> R. José Antonio Pereira, 3890, Ipiranga - Sao Jose - SC - 88111-490
                            </p>
                        </div>
                       
                        <div class="col-12 col-sm-4">
                            <h4 class="title-3 text-2xl mb-6">
                                a empresa
                            </h4>
                            <div class="footer-text">
                                <a class="footer-text" href="<?php echo esc_url(site_url('/inicio')); ?>"> Início </a>
                            </div>
                            <div class="footer-text">
                                <a class="footer-text" href="<?php echo esc_url(site_url('/produtos')); ?>">Produtos</a>
                            </div>
                            <div class="footer-text">
                                <a class="footer-text" href="<?php echo esc_url(site_url('/servicos')); ?>"> Serviços </a>
                            </div>
                            <div class="footer-text">
                                <a class="footer-text" href="<?php echo esc_url(site_url('/quem-somos')); ?>"> Quem Somos </a>
                            </div>
                            <div class="footer-text">
                                <a class="footer-text" href="<?php echo esc_url(site_url('/contato')); ?>">Contato</a>
                            </div>  
                            <hr class="white">
                            
                        </div>
                        <div class="col-12 col-sm-4">
                            <h4 class="title-3 text-2xl mb-6">
                                Produtos
                            </h4>
                            <?php
                                $footerPosts = new WP_Query(array(
                                'posts_per_page' => 5,
                                'orderby' => 'date',
                                'order' => 'ASC',
                                'category_name' => 'destaques'
                                ));

                                while($footerPosts->have_posts()){
                                $footerPosts->the_post(); ?>
                                <div class="mt-3">
                                    <a href="<?php the_permalink(); ?>" class="footer-text">
                                        <?php the_title() ?>
                                    </a>
                                </div>
                                
                            <?php } wp_reset_postdata(); ?>
                            <hr class="white">
                            <h4 class="title-3 text-2xl mb-6 mt-5">
                                Serviços
                            </h4>
                            <?php
                                $footerServices = new WP_Query(array(
                                'posts_per_page' => 5,
                                'post_type' => 'servico',
                                'orderby' => 'date',
                                'order' => 'ASC'
                                ));

                                while($footerServices->have_posts()){
                                $footerServices->the_post(); ?>
                                <div class="mt-3">
                                    <a href="<?php the_permalink(); ?>" class="footer-text">
                                        <?php the_title() ?>
                                    </a>
                                </div>
                                
                            <?php } wp_reset_postdata(); ?>
                        </div>

                    </div>
                       


            
            </footer>
            <!-- Footer -->
            
            <?php wp_footer() ?>

        </div>
    </body>
</html>