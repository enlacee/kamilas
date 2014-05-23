<div class="head-bg">
    <div class="container">
    	<div class="row clearfix">
        	<div class="col-md-12">
            	<div class="col-md-6">
                	<div class="logo">
                		<a href="admin.php"><img src="images/logo.png" class="img-responsive" width="230" height="61" /></a>
                    </div>
                </div>
                
                <div class="col-md-6 pdTop5 text-right">
                	<p class="colorBlanco">Hola <strong style="text-transform:capitalize;"><?php if($_SESSION["usuario"]){echo $_SESSION["usuario"];} ?></strong>, Bienvenido!</p>
                    <p><a href="mi-cuenta.php">Mi Cuenta</a> <span class="colorBlanco">|</span> <a href="salir.php">Salir</a></p>
                </div>
            </div>
        </div>
    </div><!--End Container-->
</div>