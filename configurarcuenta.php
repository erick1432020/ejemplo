<?php
include ("invoice.php")


if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM factura_usuarios WHERE id=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $password = $row['password'];
    $address =  $row['address'];
  }
}

if (isset($_POST['actualizar'])){
  $id = $_GET['id'];
  $password = $_POST['password'];
  $address =  $_POST['address'];
  $query = "UPDATE factura_usuarios SET password='$password', address = '$address' WHERE id=$id";
  mysqli_query($conn, $query);
  header('Location: index.php');
}
?>
<title>Sistema facturación ABC</title>
<script src="js/invoice.js"></script>
<link href="css/style.css" rel="stylesheet">
<?php include('container.php');?>
<div class="container content-invoice">
<div class="load-animate animated fadeInUp">
<div class="row">
<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
<?php include('header.php'); ?>
<div class="container content-invoice">
	    	<div class="load-animate animated fadeInUp">
		    	<div class="row">
		    		<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
		    			<h1 class="title">Sistema de Facturación PHP</h1>
						<?php include('menu.php');?>			
		    		</div>		    		
		    	</div>
		      	<input id="currency" type="hidden" value="$">
		    	<div class="row">
		      		<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
						<?php echo $_SESSION['user']; ?> <br>	
      <form action="configurarcuenta.php?id=<?php echo $_GET['id']; ?>" method="POST">
        <div class="form-group">
        <input name="" type="text" class="form-control" value="<?php echo $password;?>" placeholder="Update password">
        </div>
        <div class="form-group">
        <input  name="" type="text" class="form-control" value="<?php echo $address;?>" placeholder="Update address">
        </div>
        <button class="btn-success" name="actualizar">
          Actualizar
</button>
      </form>
      </div>
    </div>
  </div>
</div>
<?php include('footer.php'); ?>