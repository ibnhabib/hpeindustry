<section class="section">
    <div class="container">
        <?php
        foreach ($manifest as $cat_key => $category) {
            echo '<h3>Category: ' . $category['category'] . '</h3>';
            foreach ($category['category_items'] as $item_key => $item) {
                echo '<h5> --- Item: '. $item['title']. '</h5>';
            }
        }
        ?>
    </div> <!-- .container -->
</section>