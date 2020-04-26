<section class="section">
  <div class="container">
    <div class="columns has-background-light">
      <div class="hpe-blurb column is-3">
        <h1 class="title is-size-3">Welcome To HPE Industry</h1>
        <p class="is-size-5">Established in April 2005, we are a well stocked, full service hydraulic, pneumatic and electronics- company that offers a wide range of equipment and services from top international brands</p>
        <a href="/contact" class="button is-primary is-medium" style="margin-top:1.5em">Get In Touch</a>
      </div>
      <div class="hero-background column is-paddingless is-9" style="background-image: url('/img/slides/<?php echo random_slide()  ?>')"> 
      </div>
    </div>
    <!-- <img src="/img/slides/festo-jose-joao.jpg" alt=""> -->
  </div>
</section>

<?php 

function random_slide(){
  $slides= ['festo-woman.jpg','festo-jose-joao.jpg','festo-man-woman.jpg','festo-globe.jpg'];
  return $slides[array_rand($slides)];;
}

?>
