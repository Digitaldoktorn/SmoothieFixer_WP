<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

?>

<footer class="mt-3 text-center text-lg-left bg-secondary">
    <!-- Grid container -->
    <div class="container p-5">
      <!--Grid row-->
      <div class="row">
        <!--Grid column-->
        <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
          <h5 class="text-uppercase">I webbläsaren och i mobilen</h5>

          <p>
            Smoothie Fixer är responsiv och funkar för olika enheter (t ex dator, ipad, mobil). I mobil och läsplatta kan du dessutom använda Smoothie Fixer som en s k Progressive Web App. Det innebär att du t ex kan använda den "offline". Läs mer...
          </p>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
          <h5 class="text-uppercase">Sociala medier</h5>

          <p>
            Vi har ingen kontaktsida utan vi välkomnar dig till vår <a href="#">Facebook-grupp</a>. Den funkar som ett forum där vi inspirerar varandra och hjälps åt med support. Vi finns även på <a href="#">Instagram</a>. Hjärtligt välkommen!
          </p>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->

    <div class="text-center p-5" style="background-color: rgba(0, 0, 0, 0.2);">
    Copyright &copy <?php echo date ('Y'); ?>  SmoothieFixer.com •  
      <a iclass="text-dark" href="http://localhost:8001/integritetspolicy/">Integritetspolicy</a>
    </div>
    <!-- Copyright -->
  </footer>
</body>

<!-- MDB -->
<script type="text/javascript" src="js/mdb.min.js"></script>
<!-- Custom scripts -->
<script type="text/javascript"></script>

</html>


<?php wp_footer(); ?>

</body>


