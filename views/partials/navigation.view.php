<?php
  $products = [ 'festo' => 'Festo',
                'aignep' => 'Aignep',
                'autonics' => 'Autonics',
                'finder' => 'Finder',
                'comex' => 'Comex',
                'infinity' => 'Infinity',
                'jorc' => 'Jorc',
                'mei' => 'Mei',
                'mm-rotork' => 'M&M Rotork',
                'omi' => 'OMI',
                'shiny'=> 'Shiny',
              ];
?>
<section class="section">
  <nav class="navbar container" role="navigation" aria-label="main navigation">
      
        <div class="navbar-brand">
          <a class="navbar-item" href="/">
            <div id="hpe_logo">
                <?php include_once($project_root_folder.'/img/cogs.svg');?>
            </div>
            <div>
              <?php include_once($project_root_folder.'/img/logo-text.svg') ;?>
            </div>
          </a>
      
          <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
          </a>
        </div>
      
        <div class="navbar-menu is-size-4">      
          <div class="navbar-end">

          <a class="navbar-item" href="/about">
              About
            </a>
      
            <div class="navbar-item has-dropdown is-hoverable">
              <a class="navbar-link">
                Products
              </a>
      
              <div class="navbar-dropdown">
                <?php
                  foreach ($products as $key => $name) {
                      ?>
                <a class="navbar-item" href="/products/<?=$key?>">
                    <?=$name?>
                </a>
                <?php
                  }
                ?>
              </div>
            </div>
            <a class="navbar-item">
              Services
            </a>
      
            
            <div class="navbar-item" >
              <a href="/contact" class="button is-size-6 is-primary">Contact US</a>
            </div>

          
          </div>
        </div>
      
  </nav>
</section>