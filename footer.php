<?php
/**
 * Footer - template
 * 
 * @package cgr-awpt
 * 
 */
?>

<!-- Start Footer -->
<footer class="site-footer pb-5">
  <div class="container text-center">
    <div class="row py-5">
      <div class="col-md-4 footer-margin">
        <h4 class="mb-2">PNH Support</h4>
        <a href="#" class="d-block footer-link">Help Center</a>
        <a href="#" class="d-block footer-link">PNH Forums</a>
        <a href="#" class="d-block footer-link">PNH Contact</a>
        <a href="#" class="d-block footer-link">Our site</a>
      </div>

      <div class="col-md-4 footer-margin">
        <?php
        if (is_active_sidebar('sidebar-2' ) ) {
        ?>
          <aside>
            <?php dynamic_sidebar('sidebar-2') ?>
          </aside>
        <?php
        }
        ?>
      </div>

      <div class="col-md-4 footer-margin">
        <h4 class="mb-2">Legal</h4>
        <a href="#" class="d-block footer-link">Disclaimer</a>
        <a href="#" class="d-block footer-link">Privacy Notice</a>
        <a href="#" class="d-block footer-link">Constitution</a>
        <a href="#" class="d-block footer-link">Members T&C</a>
      </div>
    </div>
    <h4>PNH SUPPORT</h4>
    <p class="m-0">Copyright &copy; <span id="year"></span></p>
  </div>
</footer>

</div> <!-- end #content.site-content -->
</div> <!-- end #page.site -->
<?php wp_footer(); ?>
</body>
</html>


<?php /* <footer class="site-footer">
  footer stuff
  <?php
    if (is_active_sidebar('sidebar-2' ) ) {
    ?>
      <aside>
        <?php dynamic_sidebar('sidebar-2') ?>
      </aside>
    <?php
    }
    ?>

    <?php get_template_part( 'template-parts/footer/footer' ); ?>
</footer>*/