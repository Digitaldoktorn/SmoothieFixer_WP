<?php

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

?>

<div class="container">
      <!-- IMAGE SECTION -->
      <section class="row justify-content-center mt-3 py-5 bg-image text-center" id="hero">
        <div>
          <div class="d-flex align-items-center justify-content-center">
            <div class="text-white col-lg-8 ml-lg-5">
              <h1 class="mb-3 font-weight-bold">Skapa nyttiga och välsmakande smoothies</h1>
              <p class="mb-3 text-white lead">Vettig näringslära i grunden. Du kan inte misslyckas! </p>
              <p class="mb-3 text-white lead">Skapa och läs recepten i mobil, läsplatta eller dator. </p>
              <a class="mt-3 mr-2 btn btn-outline-light btn-lg" href="#!" role="button">Skapa veggie-smoothie</a>
              <a class="mt-3 btn btn-outline-light btn-lg" href="#!" role="button">Skapa frukt-smoothie</a>
            </div>
          </div>
        </div>
      </section>

      <!-- SECTION 1 -->
      <section class="row justify-content-center mt-3 py-5 bg-white">

        <div class="col-lg-5 col-md-12 pl-4 mb-4 mb-md-0">
          <h4>Skapa din smoothie i några enkla steg</h4>
          <ul>
            <li>Registrera dig för att spara dina recept</li>
            <li>Välj om du ska göra en frukt- eller veggiesmoothie</li>
            <li>Välj ingredienser</li>
            <li>Skriv in mängd av respektive ingrediens</li>
            <li>Spara ditt recept på "Mina sidor"</li>
            <li>Om du vill, publicera ditt recept och låt läsare ge betyg</li>
            <br>
          </ul>
          <a class="btn btn-primary mb-4" href="#">Prova direkt</a>
        </div>
        <div class="col-lg-6">
        
          <img class="img-fluid img-thumbnail" src="<?php echo get_theme_file_uri('/img/harshal-s-hirve-yNB8niq1qCk-unsplash.jpg') ?>" alt="carrots">
        </div>
      </section>

      <!-- SECTION 2 -->
      <section class="row justify-content-center mt-3">
        <div class="col text-center px-5 py-5 text-white bg-info">
          <h4>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reprehenderit quos expedita illum animi suscipit
            id, perferendis.</h4>
        </div>
      </section>

      <!-- SECTION 3 -->
      <section class="row justify-content-center mt-3 py-5 bg-white">
        <div class="col-lg-5 col-md-12 pl-4 mb-4 mb-md-0">
          <h4>Bygger på kinesisk medicin</h4>
          <p>Alla dina recept som du skapar med Smoothie Fixer kommer att följa vetting näringslära. Du kan inte
            kombinera
            ingredienser som inte passar ihop. </p>
          <p>Med hjälp av appen får du möjlighet att skapa oändliga varianter av
            smoothierecept med
            nyttiga och goda råvaror. Endast din fantasi sätter gränserna!</p>
          <br>
          <a class="btn btn-primary mb-4" href="#">Se andras recept</a>
        </div>
        <div class="col-lg-6">
          <img class="img-fluid img-thumbnail" src="<?php echo get_theme_file_uri('/img/pexels-photomix-company-867349_600x400.jpg') ?>" alt="">
        </div>
      </section>
  </div>

<?php get_footer(); ?>
