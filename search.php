<?php get_header(); ?>

<!-- products -->
<section  >
        <!-- <h2 class="title text-center">PRODUCTS</h2> -->
        <div class="container py-5">
            <div class="row row-search py-5 my-5">
            <?php 
                if(have_posts()){
                while (have_posts()) {
                    the_post(); 
                    if (get_post_type() == 'servico'){
                        get_template_part('template-parts/content-servico');                        
                    }if (get_post_type() == 'post'){ 
                        get_template_part('template-parts/content-post');                        
                     }
                } 
                get_template_part('template-parts/content-pagination'); 
                }else {
                echo '<h2 class="title-2 secondary">Não encontramos o que você procura</h2>';
                }
            
            ?>              
            </div>
        </div>
    </section>

<?php get_footer(); ?>