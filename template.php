<?php include( 'includes/header.inc.php'); ?>
<div id='start'>


    <div id="bck_1" class="bck">
        <div id="block_1" class="row column text-center rowNo09">
            <h1><?php get_page_title(); ?></h1>
            <p class="lead"><?php get_component('hm1') ?></p>
        </div>
    </div>
   
    
   
    <div id="bck_5" class="bck">
        <div id="block_5" class="row rowNo10">
            <div class="medium-6 columns medium-6">
                <img src="<?php get_component(get_page_slug(FALSE)); ?>">
            </div>
            <div class="medium-6 columns medium-6">
                <p><?php get_page_content() ?></p>
            </div>
        </div>
    </div>
    
   
</div>
<?php include( 'includes/footer.inc.php'); ?>