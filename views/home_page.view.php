<?php
$page_title = 'Welcome to HPE Industry';
$css = '/css/app.css';
$script = 'js/app.js';
?>
<!-- Head, Meta Info -->
<?php include_once($project_root_folder . '/views/partials/head.view.php'); ?>

<!-- Header Band for contact -->
<?php include_once($project_root_folder . '/views/partials/upper_band.view.php'); ?>

<!-- Navigation Bar -->
<?php include_once($project_root_folder . '/views/partials/navigation.view.php'); ?>

<!-- Hero -->
<?php include_once($project_root_folder . '/views/partials/homepage/hero.view.php'); ?>

<!-- Products and services -->
<section class="section has-little-padding">
    <div class="container">
        <div class="columns">
            <div class="column is-8">
                <!-- Products -->
                <?php include_once($project_root_folder . '/views/partials/homepage/products.view.php'); ?>
            </div>
            <div class="column is-4">
                <!-- Parnership Button -->
                <div>
                <a href="/img/Festo-HPE-Official-Partnership.pdf"><img src ="/img/official-partnership-button.png" width="360px" style="margin-bottom:1em"></a>
                </div>
                <!-- Services -->
                <?php include_once($project_root_folder . '/views/partials/homepage/services.view.php'); ?>

            </div>
        </div>
    </div>
</section>

<!-- Customers -->

<section class="section">
    <div class="container">
        <h2 class="title is-size-3">Our Customers</h2>
        <p class="pull-quote is-size-5">We Are Trusted by Ghana's Top Companies</p>
        <?php
        $customer_logos = scandir($project_root_folder.'/img/customers');
        foreach ($customer_logos as $key => $logo) { ;
        
            if ($logo == "." || $logo == "..") { // skip the directories "." and ".."
                continue;
            }
        ?>

        <div class="customer_logo">
            <img src="/img/customers/<?= $logo ?>" >
        </div>

        <?php 
        }
        ?>
    </div>
</section>

<?php include_once($project_root_folder . '/views/partials/footer.view.php') ; ?>

</html>