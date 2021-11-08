<?php if( paginate_links()){ ?>
    <div class="col-span-3">
        <div class="pagination-wraper">
            <div class="pagination-box">
                <?php echo paginate_links(); ?>
            </div>
        </div>
    </div>  
<?php } ?>