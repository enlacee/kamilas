<?php 
    $data = $instancia->getBanners(3);
?>
<?php if (is_array($data) && count($data) > 0) : ?>
<div class="col-md-12">
<div id="wrapper" class="wrapper"> 
  
  <!--Eslider-->
  <div id="my-cute-slider" class="cute-slider" data-width="1040" data-height="392">
    <ul data-type="slides">  
    <?php foreach ($data as $key => $array) : ?>
        <?php if ($key == 0) : ?>
          <li data-delay="4" data-trans3d="tr1,tr16" data-trans2d="tr2"> 
            <img src="images/bannerCentral/<?php echo $array['image'] ?>" />
          </li>
        <?php elseif($key == 1) : ?>
            <li data-delay="4" data-trans3d="tr1,tr16" data-trans2d="tr3"> 
              <img src="cute-theme/blank.jpg" data-src="images/bannerCentral/<?php echo $array['image'] ?>"/>
            </li>
        <?php elseif($key == 2) : ?>
            <li data-delay="6" data-trans3d="tr18" data-trans2d="tr4"> 
              <img src="cute-theme/blank.jpg" data-src="images/bannerCentral/<?php echo $array['image'] ?>"/>
            </li>
        <?php else : ?>
            <li data-delay="4" data-trans3d="tr1,tr16" data-trans2d="tr2"> 
              <img src="cute-theme/blank.jpg" data-src="images/bannerCentral/<?php echo $array['image'] ?>"/>
            </li>
        <?php endif; ?>
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
