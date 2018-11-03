<?php
	
	mysql_connect($host_mysql,$user_mysql,$pass_mysql) or die ("Error al conectar al servidor mysql");
	mysql_select_db($db_mysql) or die("Error conectando a la base de datos");

function clear($var){
	htmlspecialchars($var);

	return $var;
}

function check_admin(){
	if(!isset($_SESSION['id'])){
		redir("./");
	}
}

function redir($var){
	?>
	<script>
		window.location="<?=$var?>";
	</script>
	<?php
	die();
}

function alert($var){
	?>
	<script type="text/javascript">
		alert("<?=$var?>");
	</script>
	<?php
}
?>