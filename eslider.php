<?php 
    $data = $instancia->getBanners(3);
?>
<?php if (is_array($data) && count($data) > 0) : ?>
<div class="col-md-12">
<div id="wrapper" class="wrapper"> 
  
  <!--Eslider-->
  <div id="my-cute-slider" class="cute-slider" data-width="1040" data-height="392">
  <ul data-type="slides">
  
      <?php foreach ($data as $key => $array) :
            $data_trans3d = '';
            $data_trans2d = '';
            $data_delay = 4;
            if ($key == 0) {
                $data_trans3d = 'tr1,tr16';
                $data_trans2d = 'tr2';
            } elseif ($key == 1) {
                $data_trans3d = 'tr2';
                $data_trans2d = 'tr3';
            } elseif ($key == 2) {
                $data_trans3d = 'tr18';
                $data_trans2d = 'tr4';
                $data_delay = 6;
            }
      ?>
        <li data-delay="<?php echo $data_delay ?>" data-trans3d="<?php echo $data_trans3d ?>" data-trans2d="<?php echo $data_trans2d ?>"> 
          <img src="images/bannerCentral/<?php echo $array['image'] ?>" data-thumb="images/bannerCentral/<?php echo $array['image'] ?>"/>
        </li>
      <?php endforeach; ?>
      
</ul>
    <ul data-type="controls">
      <li data-type="captions"> </li>
      <li data-type="link"> </li>
      <li data-type="video"> </li>
      <li data-type="slideinfo"> </li>
      <li data-type="circletimer"> </li>
      <li data-type="next"> </li>
      <li data-type="previous"> </li>
      <li data-type="slidecontrol"> </li>
      <li data-type="bartimer"> </li>
    </ul>
  </div>
  <!--End Eslider--> 
  
</div> 
</div>
<?php else: ?>
<div class="col-md-12">
    <div id="wrapper" class="wrapper"><p>No se encontraron datos.</p></div>
</div>
<?php endif; ?>
