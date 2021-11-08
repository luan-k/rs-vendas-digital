<?php $price = get_post_meta( get_the_ID(), '_price', true );
    $product = wc_get_product( get_the_ID() );
    
            
?>

<a href="<?php the_permalink(); ?>" class="card-product bg-white rounded-md relative">
    <div class="card-product__img-wrapper">
        <img class="card-product__img-wrapper--img" src="<?php the_post_thumbnail_url('ProductImageList') ?>" alt="imagem produto">
    </div>
    <div class="card-product__body pt-12 px-9 pb-9 border-t-2 border-gray-400">
        <h4 class="card-product__body--price text-3xl mb-3">
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
        </h4 >     
        <h3 class="card-product__body--title title-bland text-gray-600 text-2xl mb-3">
            <?php echo wp_trim_words( get_the_title(), 5);  ?>
        </h3>
        
        <p class="card-product__body--text text-lg"> <?php 
            if (has_excerpt()) {
                echo wp_trim_words( get_the_excerpt(), 7);
            }else {
                echo wp_trim_words(get_the_content(), 7);
            }  ?> 
            
        </p>
    </div>                                                                                                                                                                                                                               
</a>