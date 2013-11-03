<footer class="site-footer">
    <div class="container">
      <div class="row footer-content">
        <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
          <h4>Pages</h4>
          <?php
          $menu_name = 'primary';

          if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
            $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );

            $menu_items = wp_get_nav_menu_items($menu->term_id);

            if( count( $menu_items ) > 0 ) {

              $menu_list = '<ul>';

              foreach ( (array) $menu_items as $key => $menu_item ) {
                
                if( $menu_item->post_parent == 0 ) {
                  $title = $menu_item->title;
                  $url = $menu_item->url;
                  $menu_list .= '<li><a href="' . $url . '">' . $title . '</a></li>';
                }
              }
              $menu_list .= '</ul>';
            }
          } else {
            $menu_list = '';
          }
          echo $menu_list;
          ?>
        </div>
        <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
          <h4>Resources</h4>
          <ul>
            <li><a href="#">List 1</a></li>
            <li><a href="#">List 1</a></li>
            <li><a href="#">List 1</a></li>
            <li><a href="#">List 1</a></li>
            <li><a href="#">List 1</a></li>
            <li><a href="#">List 1</a></li>
          </ul>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 hidden-xs">
          <h4>Contact</h4>
          <address>
            <strong>Pathway to Recovery</strong><br/>
            2135 N. Alabama St<br/>
            Indianapolis, IN 46202<br/>
            <abbr title="Phone">P:</abbr> (317) 926-8557<br />
            <abbr title="Fax">F:</abbr> (317) 926-2250
          </address>
        </div>
      </div>
      <div class="row visible-xs">
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
          <h4>Contact</h4>
          <address>
            <strong>Pathway to Recovery</strong><br/>
            2135 N. Alabama St<br/>
            Indianapolis, IN 46202<br/>
            <abbr title="Phone">P:</abbr> (317) 926-8557<br />
            <abbr title="Fax">F:</abbr> (317) 926-2250
          </address>
        </div>
      </div>
      <section class="copyright">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            Copyright 2013 Pathway to Recovery, Inc. / CFC 56320 / SECC 686300
          </div>
        </div>
      </section>
    </div>
  </footer>
  <?php wp_footer(); ?>
  <!--script type="text/javascript" src="/js/jquery.min.js"></script>
  <script type="text/javascript" src="/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="/js/main.js"></script-->
</body>
</html>