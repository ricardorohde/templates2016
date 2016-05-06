<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('rodape-1') ) :?>
            <p class="msg-info">Gerencie seus Widgets pelo painel administrativo do Wordpress.</p>
        <?php endif; ?>
        <img src="<?php echo get_template_directory_uri() ?>/images/logo-footer.png" alt="Grupo 4media" class="img-fluid" />
      </div>
      <div class="col-md-3">
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('rodape-2') ) :?>
            <p class="msg-info">Gerencie seus Widgets pelo painel administrativo do Wordpress.</p>
        <?php endif; ?>
      </div>
      <div class="col-md-3">
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('rodape-3') ) :?>
            <p class="msg-info">Gerencie seus Widgets pelo painel administrativo do Wordpress.</p>
        <?php endif; ?>
      </div>
      <div class="col-md-3">
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('rodape-4') ) :?>
            <p class="msg-info">Gerencie seus Widgets pelo painel administrativo do Wordpress.</p>
        <?php endif; ?>
      </div>
    </div>
  </div>
</footer>

<?php wp_footer() ?>

<!-- Start of Async HubSpot Analytics Code -->
  <script type="text/javascript">
    (function(d,s,i,r) {
      if (d.getElementById(i)){return;}
      var n=d.createElement(s),e=d.getElementsByTagName(s)[0];
      n.id=i;n.src='//js.hs-analytics.net/analytics/'+(Math.ceil(new Date()/r)*r)+'/555498.js';
      e.parentNode.insertBefore(n, e);
    })(document,"script","hs-analytics",300000);
  </script>
<!-- End of Async HubSpot Analytics Code -->
<script type="text/javascript" async src="https://d335luupugsy2.cloudfront.net/js/loader-scripts/3f58733c-0adf-4461-a40f-ccf43f4bf252-loader.js" ></script>
<script type="text/javascript" async src="https://d335luupugsy2.cloudfront.net/js/loader-scripts/3f58733c-0adf-4461-a40f-ccf43f4bf252-loader.js" ></script>

</body>
</html>
