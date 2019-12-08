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
            <div class="column">
            <h2 class="title is-1">Contact Us</h1>
        <p class="subtitle is-4">There are several ways to reach us. <br>Get in touch with us for a free consultation</p>
        <hr>
        <h3 class="title ">By Phone</h3>
                <p class="size-is-3">
                <strong>Mobile / Whatsapp</strong>+233 (0) 243 366 718<br><strong>Landline: </strong> 233 (0) 302 235 108<br> <strong>Fax:</strong> +233 (0) 302 235 109 
                </p>
                <h3 class="title ">By Email</h3>
                <p class="size-is-3">
                sales@hpeindustry.com
                </p>
                <h3 class="title ">Facebook Page</h3>
                <a class="button" href="https://web.facebook.com/hpeindustry/">Visit our Facebook page</a>
               
            </div>
            <div class="column">
            <img src="/img/pipes-7.jpg" alt="">
            <img src="/img/pipes-8.jpg" style="height:320px" alt="">
            </div>
        </div>

        <hr>
        <h3 class="title">Or You Can Visit Us</h3>
            
            <iframe 
                style="min-height: 300px; width: 100%; background-color:#eaeaea" 
                frameborder="0" 
                scrolling="no" 
                marginheight="0"
                marginwidth="0" 
                src="https://maps.google.com/maps?f=q&amp;source=s_d&amp;hl=en&amp;saddr=5.583324,-0.224348&amp;z=15&amp;output=embed">
            </iframe>
    </div>
</div>



<!-- Footer -->
<?php include_once($project_root_folder . '/views/partials/footer.view.php') ; ?>