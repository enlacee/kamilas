<?php
$menuItem = $instancia->getPostBy('', '', '', array('id', 'post_type+', 'title'));

?>
<?php if (is_array($menuItem) && count($menuItem) > 0 ) : ?>
<div class="container">
    <div class="row clearfix">
        <div class="col-md-12">
            <ul class="venus-menu">
                <li class="active"><a href="admin.php">Panel</a></li>
                <li><a href="#">Secciones</a>
                	<ul>
                    	<li><a href="javascript:voice(0)">Preconcepci&oacute;n</a>
                            <ul>
                            <?php foreach ($menuItem as $array) : ?>
                                <?php if ($array['post_type'] == 1) : ?>
                                    <li><a href="adm_section_edit.php?p=<?php echo $array['id'] ?>"><?php echo $array['title'] ?></a></li>                        
                                <?php endif; ?>                    
                            <?php endforeach; ?>
                            </ul>
                        </li>
                        <li><a href="javascript:voice(0)">Embarazo</a>
                            <ul>
                            <?php foreach ($menuItem as $array) : ?>
                                <?php if ($array['post_type'] == 2) : ?>
                                    <li><a href="adm_section_edit.php?p=<?php echo $array['id'] ?>"><?php echo $array['title'] ?></a></li>                        
                                <?php endif; ?>                    
                            <?php endforeach; ?>
                            </ul>
                        </li>
                        <li><a href="javascript:voice(0)">Bebes</a>
                            <ul>
                            <?php foreach ($menuItem as $array) : ?>
                                <?php if ($array['post_type'] == 3) : ?>
                                    <li><a href="adm_section_edit.php?p=<?php echo $array['id'] ?>"><?php echo $array['title'] ?></a></li>                        
                                <?php endif; ?>                    
                            <?php endforeach; ?>
                            </ul>
                        </li>
                        <li><a href="javascript:voice(0)">Niños</a>
                            <ul>
                            <?php foreach ($menuItem as $array) : ?>
                                <?php if ($array['post_type'] == 4) : ?>
                                    <li><a href="adm_section_edit.php?p=<?php echo $array['id'] ?>"><?php echo $array['title'] ?></a></li>                        
                                <?php endif; ?>                    
                            <?php endforeach; ?>
                            </ul>
                        </li>
                        <li><a href="javascript:voice(0)">Adolescentes</a>
                            <ul>
                            <?php foreach ($menuItem as $array) : ?>
                                <?php if ($array['post_type'] == 5) : ?>
                                    <li><a href="adm_section_edit.php?p=<?php echo $array['id'] ?>"><?php echo $array['title'] ?></a></li>                        
                                <?php endif; ?>                    
                            <?php endforeach; ?>
                            </ul>
                        </li>                        
                    </ul>
                </li>                
                <li><a href="adm_new.php">Noticias</a></li>

                <li><a href="salir.php">Salir</a></li>
                <li class="search">
                <!--<form name="buscar" id="buscar" method="post">                
                <input type="text" name="search" class="search" placeholder="Buscar" />
                </form>-->
                </li>
            </ul>
        </div>
    </div>
</div>
<?php else : ?>
<p>No se encontraron datos.</p>
<?php endif; ?>
