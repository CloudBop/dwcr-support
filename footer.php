<?php
/**
 * Footer - template
 * 
 * @package cgr-awpt
 * 
 */
?>

<!-- Start Footer -->
<footer class="site-footer">
  <div class="container">
    <div class="row py-1">

      <div class="col-md-8 mb-3 mb-md-0">
        <?php
        if (is_active_sidebar('sidebar-footer' ) ) {
        ?>
          <aside>
            <?php dynamic_sidebar('sidebar-footer') ?>
          </aside>
        <?php
        }
        ?>
      </div>
      <div class="col-md-4 mb-3 mb-md-0">
        <?php
        if (is_active_sidebar('sidebar-footer-legal' ) ) {
        ?>
          <aside>
            <?php dynamic_sidebar('sidebar-footer-legal') ?>
          </aside>
        <?php
        } else { ?>
          <h3 class="mb-2">Legal update me</h3>
          <a href="#" class="d-block footer-link">Disclaimer</a>
          <a href="#" class="d-block footer-link">Privacy Notice</a>
          <a href="#" class="d-block footer-link">Constitution</a>
          <a href="#" class="d-block footer-link">Members T&C</a>
        <? }
        ?>
      </div>

      
    </div>
  </div>
  <div class="text-center bg-dark p-2">
    <h4>PNH SUPPORT</h4>
  </div>
</footer>

</div> <!-- end #content.site-content -->
</div> <!-- end #page.site -->
<?php wp_footer(); ?>
</body>
</html>
<?php // <p class="m-0">Copyright &copy; <span id="year"></span></p>?>