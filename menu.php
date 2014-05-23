<?php
$menuItem = $instancia->getPostBy('', 1, '', array('id', 'post_type+', 'title'));
// referencia de page.php
$registro = isset($registro) ? $registro : '';
//var_dump($registro);Exit;

function select($registro, $integer) {
    $classActive = '';
    if (isset($registro['post_type'])) {
        $classActive = ($registro['post_type'] == $integer ) ? 'active' : ''; 
    } elseif ($integer == 'active') {
       $classActive = 'active'; 
    }
    
    return $classActive;
}

?>
<?php if (is_array($menuItem) && count($menuItem) > 0 ) : ?>
<div class="row clearfix">
    <div class="col-md-12">
        <ul class="venus-menu">
            <li class="<?php echo select($registro, 'active') ?>"><a href="index.php">Portada</a></li>
            <li><a href="#">Tienda Online</a></li>
            <li><a href="seciones.php">Secciones</a></li>
            <li class="<?php echo select($registro, '1') ?>"><a href="javascript:voice(0)">Preconcepcion</a>
                <ul>
                    <?php foreach ($menuItem as $array) : ?>
                    <?php if ($array['post_type'] == 1) : ?>
                        <li><a href="page.php?p=<?php echo $array['id'] ?>"><?php echo $array['title'] ?></a></li>                        
                    <?php endif; ?>                    
                    <?php endforeach; ?>
                </ul>
            </li>
            <li class="<?php echo select($registro, '2') ?>"><a href="javascript:voice(0)">Embarazo</a>
                <ul>
                    <?php foreach ($menuItem as $array) : ?>
                    <?php if ($array['post_type'] == 2) : ?>
                        <li><a href="page.php?p=<?php echo $array['id'] ?>"><?php echo $array['title'] ?></a></li>                        
                    <?php endif; ?>                    
                    <?php endforeach; ?>
                </ul>
            </li>
            <li class="<?php echo select($registro, '3') ?>"><a href="bebes.php">Bebes</a>
                <ul>
                    <?php foreach ($menuItem as $array) : ?>
                    <?php if ($array['post_type'] == 3) : ?>
                        <li><a href="page.php?p=<?php echo $array['id'] ?>"><?php echo $array['title'] ?></a></li>                        
                    <?php endif; ?>                    
                    <?php endforeach; ?>
                </ul>
            </li>
            <li class="<?php echo select($registro, '4') ?>"><a href="javascript:voice(0)">Niños</a>
                <ul>
                    <?php foreach ($menuItem as $array) : ?>
                    <?php if ($array['post_type'] == 4) : ?>
                        <li><a href="page.php?p=<?php echo $array['id'] ?>"><?php echo $array['title'] ?></a></li>                        
                    <?php endif; ?>                    
                    <?php endforeach; ?>
                </ul>
            </li>

            <li class="<?php echo select($registro, '5') ?>"><a href="adolecentes.php">Adolescentes</a>
                <ul>
                    <?php foreach ($menuItem as $array) : ?>
                    <?php if ($array['post_type'] == 5) : ?>
                        <li><a href="page.php?p=<?php echo $array['id'] ?>"><?php echo $array['title'] ?></a></li>                        
                    <?php endif; ?>                    
                    <?php endforeach; ?>
                </ul>
            </li>
            <li class="search">
                <form method="get" />

                <input type="text" name="search" class="search" placeholder="Buscar" />
                </form>
            </li>
        </ul>
    </div>
</div>
<?php else : ?>
<div class="row clearfix">
    <div class="col-md-12">
        <ul class="venus-menu">
            <li class=""><a href="#">No existen datos.</a></li>
        </ul>
    </div>
</div>
<?php endif; ?>
