<?php get_header(); ?>

    <!-- slider -->
    <section class="slider-custom" id="slider-custom" data-anime="slow-slider">
        <?php echo do_shortcode('[ssslider id="99"]') ?>
    </section>

    <section class="pagamentos py-16 container">
        <div class="grid grid-cols-1 md:grid-cols-4 bg-primary text-white rounded-2xl py-12">
            <div class="pagamentos__wrapper grid grid-cols-1 md:grid-cols-3 border-r-4 border-double border-white px-3">
                <i class="pagamentos__wrapper--icon fas fa-lock text-6xl m-auto"></i>
                <div class="texts col-span-2">
                    <h2 class="title-bland text-2xl">Pagamento cômodo e seguro</h2>
                    <h3 class="title-bland text-xl text-gray-300">com Mercado Pago</h3>
                </div>
            </div>
            <div class="pagamentos__wrapper grid grid-cols-1 md:grid-cols-3 border-r-4 border-double border-white px-3">
                <i class="pagamentos__wrapper--icon far fa-credit-card text-6xl m-auto"></i>
                <div class="texts col-span-2">
                    <h2 class="title-bland text-2xl">Até 12 parcelas sem juros</h2>
                    <h3 class="title-bland text-xl text-gray-300"><a href="">ver mais!</a> </h3>
                </div>
            </div>
            <div class="pagamentos__wrapper grid grid-cols-1 md:grid-cols-3 border-r-4 border-double border-white px-3">
                <i class="pagamentos__wrapper--icon fas fa-money-bill text-6xl m-auto"></i>
                <div class="texts col-span-2">
                    <h2 class="title-bland text-2xl">À vista no boleto bancário</h2>
                    <h3 class="title-bland text-xl text-gray-300"><a href="">ver mais!</a> </h3>
                </div>
            </div>
            <div class="pagamentos__wrapper grid grid-cols-1 md:grid-cols-3  px-3">
                <i class="pagamentos__wrapper--icon fas fa-plus-circle text-6xl m-auto"></i>
                <div class="texts col-span-2">
                    <h2 class="title-bland text-2xl">Mais meios de pagamento</h2>
                    <h3 class="title-bland text-xl text-gray-300"><a href="">ver mais!</a> </h3>
                </div>
            </div>
        </div>
    </section>

    <section class="recomendados py-16 container">
        <div class=" grid grid-cols-1 md:grid-cols-4 gap-6">
            <?php

            $produtosRecomendados = new WP_Query(array(
            'post_type' => array('product', 'product_variation'),
            'posts_per_page' => 4,
            'orderby' => 'date',
            'order' => 'ASC' ,
            'meta_query' => array(
                array(
                    'key'   => 'produto_recomendado',
                    'value' => '1',
                )
            ),            
            ));

            while($produtosRecomendados->have_posts()){
                $produtosRecomendados->the_post();
                get_template_part('template-parts/content', 'card-products');
            } wp_reset_postdata();?>  
        </div> 
            
    </section>

    <section class="categorias container">
        <h2 class="title-2 text-6xl text-secondary mb-3 mt-12">Categorias</h2>
        <div class="categorias__wrapper grid grid-cols-1 grid-rows-3 md:grid-cols-2 md:grid-rows-2 gap-4">
            
                <div class="categorias__wrapper--eletrodomesticos row-span-2">
                    <a class="min-h-full min-w-full" href="<?php echo esc_url(site_url('/categoria-produto/eletrodometicos/')); ?>">
                        <h3 class="categorias__wrapper--titulo title-bland text-3xl text-white mt-9 ml-9">Eletrodomésticos</h3>
                        
                    </a>                 
                </div>
            
            
               <div class="categorias__wrapper--decoracao">
                   <a class="min-h-full min-w-full" href="<?php echo esc_url(site_url('/categoria-produto/decoracao-casa-e-cozinha/')); ?>">
                        <h3 class="categorias__wrapper--titulo title-bland text-3xl text-white mt-9 ml-9">Decoração/casa e cozinha</h3>    
                        
                   </a>
                </div>
            
            
               <div class="categorias__wrapper--brinquedos">
                   <a class="min-h-full min-w-full" href="<?php echo esc_url(site_url('/categoria-produto/brinquedos-e-hobbies/')); ?>">
                        <h3 class="categorias__wrapper--titulo title-bland text-3xl text-white mt-9 ml-9">Brinquedos e hobbies</h3>    
                        
                   </a>
                </div>
            
            
            
            
        </div>
    </section>
    
        <section class="strip-contato w-full bg-dark-primary py-12 mt-20">
            <div class="grid grid-cols-1 md:grid-cols-2 container">
                <h3 class="title-2 text-white py-6 text-center md:text-left mb-5 md:mb-0">Fale conosco!</h3>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-28">
                    <a class="btn-wk text-4xl text-white bg-primary rounded-full py-9 px-7 text-center">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                    <a class="btn-wk text-4xl text-white bg-primary rounded-full py-9 px-7 text-center">
                         <i class="fas fa-phone-alt"></i>
                    </a>
                    <a class="btn-wk text-4xl text-white bg-primary rounded-full py-9 px-7 text-center">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    
                    <a class="btn-wk text-4xl text-white bg-primary rounded-full py-9 px-7 text-center">
                        <i class="far fa-envelope"></i>
                    </a>
                    
                </div>
                
            </div>
        </section>
    <!-- products -->
    <div id="promotional_slider">
        <div class="promotionalslider_wrapper">
         <?php

            $homepagePosts = new WP_Query(array(
            'post_type' => 'product',
            'posts_per_page' => 15,
            'orderby' => 'date',
            'order' => 'ASC' ,
            'tax_query' => array(
                array(
                    'taxonomy' => 'product_visibility',
                    'field'    => 'name',
                    'terms'    => 'featured',
                ),
            ),
            ));

            while($homepagePosts->have_posts()){
                $homepagePosts->the_post(); 
                $price = get_post_meta( get_the_ID(), '_price', true );
                $product = wc_get_product( get_the_ID() ); ?>

            
                <div class="promotionalslider_single">
                    <a href="<?php the_permalink(); ?>" class="product-card__hyperlink-btn relative">
                        <div class="product-card" data-anime="bottom">
                                <div class="product-card__top-wraper">
                                    <div class="product-card__img-wraper">
                                        <img class="product-card__img-top" src="<?php the_post_thumbnail_url('ProductImageList') ?>" alt="imagem produto">
                                        
                                    </div>
                                    <h4 class="product-card__title title-3 white px-3 md:px-9 mt-3 md:mt-9 text-left text-2xl md:text-3xl"><?php echo wp_trim_words( get_the_title(), 5);  ?></h4>
                                </div>
                                
                                
                                <div class="product-card__body px-3 md:px-9 text-xl md:text-2xl">
                                    <p>
                                    <?php
                                        if($price){
                                            
                                            if ( ! $product->is_type('variable') ){
                                                $active_price  = $product->get_price();
                                                $regular_price = $product->get_regular_price();
                                                
                                                if ( $product->is_on_sale()) {
                                                    echo wc_price($active_price ) . ' <del class="text-primary text-lg"> ' . wc_price($regular_price) . '</del>' . '<div class="card-product__body--price-offer bg-primary rounded-full flex items-center justify-center"> OFERTA! </div>';
                                                } else {
                                                    echo wc_price( $price );
                                                }
                                            }
                                        } else {
                                            echo "Consulte";
                                        }
                                    ?>
                                    </p>
                                    <p class="product-card__text">
                                        <?php echo wp_trim_words( get_the_content(), 7);  ?>
                                    </p>
                                    
                                </div>
                                
                        
                            
                                    <!-- <div class="btn-wk__alt btn-wk__alt--material-bubble bg-green-primary hover:bg-green-900">Ver mais</div> -->
                                
                        </div>
                    </a>
                </div>
            <?php } wp_reset_postdata(); ?>
        </div>
    </div>
    

<?php get_footer(); ?>