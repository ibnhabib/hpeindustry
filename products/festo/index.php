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

    <?php
    // List of partnames and filenames
    @include_once('manifest.php');
    $columns = 4;

    foreach ($titles as $key => $title):
    if ($key % $columns == 0):?>    
        <div class="columns">
    <?php
    endif;?> 
    
    <div class="column">
        <?php 
        $image_location= '/img/products/festo/'.$filenames[$key];
        $image_description = $title;
        include_once($project_root_folder.'/includes/card.php'); 
        ?>    
    </div>

    <?php
    if ($key % $columns == 0):?>    
        </div>
    <?php
    endif; 

?>

    <img src="/img/products/festo/<?= $filenames[$key] ;?>">
    <p><?= $title ;?></p>
<?php 
endforeach;
?>



</body>
<!-- <script src="js/app.js"></script> -->
</html>
