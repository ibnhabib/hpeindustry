<?php
$page_title = 'Contact Us - HPE Industry';
$css = '/css/app.css';
$script = 'js/app.js';
?>
<!-- Head, Meta Info -->
<?php include_once($project_root_folder . '/views/partials/head.view.php'); ?>

<!-- Header Band for contact -->
<?php include_once($project_root_folder . '/views/partials/upper_band.view.php'); ?>

<!-- Navigation Bar -->
<?php include_once($project_root_folder . '/views/partials/navigation.view.php'); ?>


<div class="section">
    <div class="container">
        <div class="columns">
            <div class="column is-6" style="height:400px">
            <iframe 
                style="min-height: 99%; width: 100%;" 
                frameborder="0" 
                scrolling="no" 
                marginheight="0"
                marginwidth="0" 
                src="https://maps.google.com/maps?f=q&amp;source=s_d&amp;hl=en&amp;saddr=5.583324,-0.224348&amp;z=15&amp;output=embed">
            </iframe>
            </div>
            <div class="column is-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis nulla, tenetur, praesentium saepe neque vitae voluptas quaerat fuga, quisquam quasi exercitationem quia placeat perferendis repudiandae dolorum nam corporis aliquid nisi!</div>
        </div>
    </div>
</div>



<!-- Footer -->
<?php include_once($project_root_folder . '/views/partials/footer.view.php') ; ?>