<form method="get" action="<?php echo esc_url(site_url('/')); ?>" class="search-box">
    <input class="search-text" type="search" placeholder="Pesquisar" value="<?php echo get_search_query(); ?>" name="s" title="Pesquisar">
    <a href="#" class = "search-btn">
        <i class="fas fa-search"></i>
    </a>
</form>