<?php include_once('includes/common.php') ;?>
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
    
    <?php include_once($project_root_folder.'/includes/upper_band.php') ;?>

    <!-- Navigation Bar -->
    <?php include_once($project_root_folder.'/includes/navigation.php') ;?>
    
    <!-- First Section (change name later) -->
    <?php include_once($project_root_folder.'/includes/hero.php') ;?>
    
    <!-- Products and services -->
    <section class="section has-little-padding">
        <div class="container">
            <div class="columns">
                <div class="column is-8">
                    <!-- Products -->
                    <?php include_once($project_root_folder.'/includes/products.php') ;?>
                </div>
                <div class="column is-4">
                    <!-- Services -->
                    <?php include_once($project_root_folder.'/includes/services.php') ;?>
                    
                </div>
            </div>
        </div>
    </section>

</body>
<script src="js/app.js"></script>
</html>