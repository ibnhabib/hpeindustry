<?php include_once('../../includes/common.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome To HPE Industry</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>

    <!-- Upper Bar -->
    <?php include_once($project_root_folder.'/includes/upper_band.php') ;?>

    <!-- Navigation Bar -->
    <?php include_once($project_root_folder.'/includes/navigation.php') ;?>

    <!-- Hero -->
    <section class="hero is-primary is-strong">
        <div class="hero-body">
            <div class="container">
            <h1 class="title">
                Autonics
            </h1>
            <h2 class="subtitle">
            </h2>
            </div>
        </div>
    </section>
    <!-- breadcrumbs -->

    <section class="section">
        <div class="container">
            <nav class="breadcrumb" aria-label="breadcrumbs">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Products</a></li>
                <li class="is-active"><a href="#" aria-current="page">Aignep </a></li>
            </ul>
            </nav>
        </div>
    </section>

    <section class="section">
        <div class="container">
    <?php
    // List of partnames and filenames
    @include_once('manifest.php');
    $columns = 6;
    $column_class = 'is-2'; // 4 columns, 12/6 = 2


    foreach ($manifest as $key => $item):
        if ($key % $columns == 0):
            if($key !== 0):?> 
                </div>
            <?php endif; ?>
            <div class="columns">
        <?php
        endif;?> 
        
        <div class="column <?= $column_class ?>">
            <?php 
            $image_location= '/img/products/autonics/'.$item['image'];
            $image_description = $item['title'];
            include($project_root_folder.'/includes/card.php'); 
            ?>    
        </div>
    
    
        <!-- <img src="/img/products/festo/<?= $filenames[$key] ;?>">
        <p><?= $title ;?></p> -->
    <?php 
    endforeach;
    ?>
</div> <!-- last .columns -->
</div> <!-- .container -->
</section>


</body>
<!-- <script src="js/app.js"></script> -->
</html>
