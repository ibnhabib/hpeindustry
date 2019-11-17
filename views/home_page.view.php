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

<!-- First Section (change name later) -->
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
                <!-- Services -->
                <?php include_once($project_root_folder . '/views/partials/homepage/services.view.php'); ?>

            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer style="margin-top:2em;" class="footer">
    <div class="content has-text-centered">
        <p>
            <strong>Bulma</strong> by <a href="https://jgthms.com">Jeremy Thomas</a>. The source code is licensed
            <a href="http://opensource.org/licenses/mit-license.php">MIT</a>. The website content
            is licensed <a href="http://creativecommons.org/licenses/by-nc-sa/4.0/">CC BY NC SA 4.0</a>.
        </p>
    </div>
</footer>
</body>
<script src=""></script>

</html>