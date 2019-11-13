<?php
    $page_title = 'Welcome to HPE Industry';
    $css = '/css/app.css';
    $script = 'js/app.js';
?>

    <?php include_once($project_root_folder.'/views/partials/head.view.php'); ?>
    
    <?php include_once($project_root_folder.'/views/partials/upper_band.view.php') ;?>

    <!-- Navigation Bar -->
    <?php include_once($project_root_folder.'/views/partials/navigation.view.php') ;?>
    
    <!-- First Section (change name later) -->
    <?php include_once($project_root_folder.'/views/partials/hero.view.php') ;?>
    
    <!-- Products and services -->
    <section class="section has-little-padding">
        <div class="container">
            <div class="columns">
                <div class="column is-8">
                    <!-- Products -->
                    <?php include_once($project_root_folder.'/views/partials/products.view.php') ;?> 
                </div>
                <div class="column is-4">
                    <!-- Services -->
                    <?php include_once($project_root_folder.'/views/partials/services.view.php') ;?>.view
                    
                </div>
            </div>
        </div>
    </section>

</body>
<script src=""></script>
</html>