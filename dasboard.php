<?php
include "./php/security-main.php";
?>
<?php
include "./php/connection.php";
$sql      = "SELECT * FROM system_contact order by id asc";
$dataSave = $connection->query($sql);

$sql2      = "SELECT * FROM system_contact order by id asc";
$dataSave2 = $connection->query($sql2);

$sqlMobile  = "SELECT * FROM system_contact order by id asc";
$dataMobile = $connection->query($sqlMobile);
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Portal Semagen</title>
	<link rel="icon" href="./img/icon.ico">
	<link rel="stylesheet" href="./css/style-headerPanel.css">
	<link rel="stylesheet" href="./css/style-dasboard.css">
	<link rel="stylesheet" href="./css/style-icon.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900" rel="stylesheet">
	<script src="./js/jquery-3.1.1.min.js" type="text/javascript" charset="utf-8" ></script>
	<script src="./js/validationLogin.js" type="text/javascript" charset="utf-8"></script>
</head>
<body>
<header class="header flex">
	<div class="contentLogo flex">
		<img class="logoBig flex" src="./img/logo.png" alt="Semagen" class="flex">
		<img class="logoMini flex" src="./img/miniLogo.png" alt="Semagen">
	</div>
	<div class="contentLink flex">
		<nav class="nav flex">
			<a class="home flex" href="./index.php" title="Home">Home</a>
			<a class="exit flex"  href="./exit.php" title="Log out">
				Log out
			</a>
		</nav>
	</div>
</header>
<section class="containerTable flex">
	<div class="contentTable flex">
		<div class="contTitle flex">
			<h2 class="title flex">
				Sistema de control para cotizaciones
			</h2>
		</div>
		<div class="table flex">
			<table class="tableDesktop t-table t-table1 flex" >
						<?php
while ($inputData = $dataSave->fetch_array(MYSQLI_BOTH)) {
    ?>
						<tr class="tr-init flex tr-table">
							<th>Id</th>
							<td>
								<?php echo $inputData['id']; ?>
							</td>
						</tr>
						<tr class="flex tr-table">
							<th>Nombre</th>
							<td>
								<?php echo $inputData['name']; ?>
							</td>
						</tr>
						<tr class="flex tr-table">
							<th>Teléfono</th>
							<td>
								<?php echo $inputData['phone']; ?>
							</td>
						</tr>
						<tr  class="flex tr-table"id="line-end">
							<th>Correo</th>
							<td>
								<?php echo $inputData['email']; ?>
							</td>
						</tr>
						<tr  class="flex tr-table" >
              				<td class="flex" id="modify"><a id="edit" name="edit" href="./edit.php?id=<?php echo $inputData['id']; ?>">Editar</a>
              				</td>
              			</tr>
						<?php
}
?>
			</table>
			<table class="tableDesktop t-table t-table2 flex" >
						<?php
while ($inputData2 = $dataSave2->fetch_array(MYSQLI_BOTH)) {
    ?>
						<tr  class="tr-init flex tr-table"  class="type-woman">
							<th>Asunto</th>
							<td>
								<?php echo $inputData2['subject']; ?>
							</td>
						</tr>
						<tr class="flex tr-table" >
							<th>Fecha</th>
							<td>
								<?php echo $inputData2['datatime']; ?>
							</td>
						</tr>
						<tr class="flex tr-table" >
							<th>Hora</th>
							<td>
								<?php echo $inputData2['timeCont']; ?>
							</td>
						</tr>
						<tr class="flex tr-table"  id="line-end">
							<th>Mensaje</th>
							<td>
								<?php echo $inputData2['message']; ?>
							</td>
						</tr>
						<tr  class="flex tr-table" id="delete">
              				<td class="flex" id="dele"><a id="del" name="del" href="#" onclick="preguntar(<?php echo $inputData2['id']; ?>)">Eliminar</a>
              				</td>
            			</tr>
						<?php
}
?>
			</table>
			<table class="tableMobile t-table t-table1 flex" >
						<?php
while ($inputDataMobile = $dataMobile->fetch_array(MYSQLI_BOTH)) {
    ?>
						<tr class="tr-init flex tr-table">
							<th>Id</th>
							<td>
								<?php echo $inputDataMobile['id']; ?>
							</td>
						</tr>
						<tr class="flex tr-table">
							<th>Nombre</th>
							<td>
								<?php echo $inputDataMobile['name']; ?>
							</td>
						</tr>
						<tr class="flex tr-table">
							<th>Teléfono</th>
							<td>
								<?php echo $inputDataMobile['phone']; ?>
							</td>
						</tr>
						<tr  class="flex tr-table"id="line-end">
							<th>Correo</th>
							<td>
								<?php echo $inputDataMobile['email']; ?>
							</td>
						</tr>
						<tr  class="tr-init flex tr-table"  class="type-woman">
							<th>Asunto</th>
							<td>
								<?php echo $inputDataMobile['subject']; ?>
							</td>
						</tr>
						<tr class="flex tr-table" >
							<th>Fecha</th>
							<td>
								<?php echo $inputDataMobile['datatime']; ?>
							</td>
						</tr>
						<tr class="flex tr-table" >
							<th>Hora</th>
							<td>
								<?php echo $inputDataMobile['timeCont']; ?>
							</td>
						</tr>
						<tr class="flex tr-table">
							<th>Mensaje</th>
							<td>
								<?php echo $inputDataMobile['message']; ?>
							</td>
						</tr>
						<tr  class="flex tr-table" >
              				<td class="flex" id="modify"><a id="edit" name="edit" href="./edit.php?id=<?php echo $inputDataMobil['id']; ?>">Editar</a>
              				</td>
              			</tr>
						<tr  class="flex tr-table" id="delete">
              				<td class="flex" id="dele"><a id="del" name="del" href="#" onclick="preguntar(<?php echo $inputDataMobil['id']; ?>)">Eliminar</a>
              				</td>
            			</tr>
						<?php
}
?>
			</table>
		</div>
	</div>
</section>
<script type="text/javascript" >
	function preguntar(id){
		if (confirm('Estas seguro de borrar este elemento con id = ' + id + '?')) {
				window.location.href = "./php/delete.php?id=" + id;
			}
	}
</script>
</body>
</html>


