<?php
/**
 * Footer - template
 * 
 * @package cgr-awpt
 * 
 */
?>

<footer class="site-footer">
  
  <?php
    if (is_active_sidebar('sidebar-2' ) ) {
    ?>
      <aside>
        <?php dynamic_sidebar('sidebar-2') ?>
      </aside>
    <?php
    }
    ?>

    <?php// get_template_part( 'template-parts/footer/footer' ); ?>
</footer>

</div> <!-- end #content.site-content -->
</div> <!-- end #page.site -->
<?php wp_footer(); ?>
</body>
</html>