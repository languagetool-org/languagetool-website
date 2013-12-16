<div id="plugins">
  <h2>Plugins</h2>
  <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor.</p>
  <div id="list">
    <?php

      function array_chunk_fixed($input, $num, $preserve_keys = FALSE) {
        $count = count($input) ;
        if($count)
            $input = array_chunk($input, ceil($count/$num), $preserve_keys) ;
        $input = array_pad($input, $num, array()) ;
        return $input ;
      }

      $plugins = array(
        array('name'=>'Website Lorem','url'=>'#'),
        array('name'=>'Website Ipsum','url'=>'#'),
        array('name'=>'Website Dolor','url'=>'#'),
        array('name'=>'Website Sit','url'=>'#'),
        array('name'=>'Website Amet','url'=>'#'),
        array('name'=>'Website Lorem','url'=>'#'),
        array('name'=>'Website Ipsum','url'=>'#'),
        array('name'=>'Website Dolor','url'=>'#'),
        array('name'=>'Website Sit','url'=>'#'),
        array('name'=>'Website Amet','url'=>'#'),
        array('name'=>'Website Lorem','url'=>'#'),
        array('name'=>'Website Ipsum','url'=>'#'),
        array('name'=>'Website Dolor','url'=>'#'),
        array('name'=>'Website Sit','url'=>'#'),
        array('name'=>'Website Amet','url'=>'#'),
        array('name'=>'Website Amet','url'=>'#')
      );

      $plugin_columns = array_chunk_fixed($plugins, 3);
      foreach ($plugin_columns as $column) {
        print '<ul>';
        foreach ($column as $plugin) {
          print '<li><a href="'.$plugin['url'].'">'.$plugin['name'].'</a></li>';
        }
        print '</ul>';
      }
    ?>
    <div style="clear:both;"></div>
  </div>
</div>
