<ul class="nav navbar-nav">
<li class="dropdown">
	<button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown">Factura
	<span class="caret"></span></button>
	<ul class="dropdown-menu">
		<li><a href="invoice_list.php">Lista de Facturas</a></li>
		<li><a href="create_invoice.php">Crear Factura</a></li>				  
	</ul>
</li>
<li class="dropdown">
	<button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown">Productos
	<span class="caret"></span></button>
	<ul class="dropdown-menu">
		<li><a href="invoice_listproduct.php">Lista de productos </a></li>		
		<li><a href="create_product.php">Crear nuevo producto </a></li>		  
	</ul>
</li>
<?php 
if($_SESSION['userid']) { ?>
	<li class="dropdown">
		<button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown">Conectado: <?php echo $_SESSION['user']; ?>
		<span class="caret"></span></button>
		<ul class="dropdown-menu">
			<li><a href="configurarcuenta.php">Mi Cuenta</a></li>
			<li><a href="action.php?action=logout">Salir</a></li>		  
		</ul>
	</li>
<?php } ?>
</ul>
<br /><br /><br /><br />