<?php
    $services = [
        'Sales and Services'            =>  'We provides the best industrial automation solutions and technical support through our highly experienced sales team. ',
        'Solution Sales'                =>  'With a wide variety of products, we help customers raise productivity by providing alround customized solutions',
        'Compressed Air Installation'   =>  'Infinity piping is a high performance aluminum piping system that is easy to install and simple to extend or modify.',
        'Maintenance And Field Work'    =>  'We provide field support and services for large scale projects within a wide range of industries. With a vast range of products including aluminum piping.',
        'Industrial Automation'         =>  'With a wide variety of products, we help customers raise productivity by providing alround solutions which are customized to meet requirements, budget and environments.' 
    ]
?>
<h2 class="title is-size-3">Services</h2>
<?php
foreach ($services as $title => $description) {
    $icon = kebab($title);
    ?>
        <div class="columns">
            <div class="column is-3">
                <img class="service-icon" style="margin-top:1em" src="/img/services_icons/<?=$icon?>.png" width="65px" height="65px" alt="">
            </div>

            <div class="column is-9">
                <h3 class="service-title"><?=$title?></h3>
                <p class="service-description"><?=$description?></p>
            </div>
        </div>
    <?php
}
?>
        <div class="columns">
            <div class="column is-9 is-offset-3">
                <a href="/services" class="button">More About Our Services</a>
            </div>
        </div>
<?php
    // Convert from "This is a phrase" to "this-is-a-phrase"
    // Used to convert Title to icon filename

    function kebab($title){
        $words = explode(' ', $title);
        $kebab = "";
        foreach ($words as $word) {
            $kebab .= lcfirst($word) . '-';
        }
        // remove trailing '-'
        $kebab = rtrim($kebab, "-");
        return $kebab;
    }

?>
</div>