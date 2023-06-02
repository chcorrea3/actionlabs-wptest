<footer id="footer">
  <div class="container">
    <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
      <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Logo">
    </a>
    <hr/>
    <p class="footertext">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.</p>
  </div>
</footer>

<?php wp_footer(); ?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
