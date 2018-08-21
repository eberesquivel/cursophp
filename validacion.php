<style>
	h1{
		text-align:center;
	}

	table{
		background-color:#FF2335;
		padding:5px;
		border:#666 5px solid;
	}
	
	.no_validado{
		font-size:18px;
		color:#F00;
		font-weight:bold;
	}
	
	.validado{
		font-size:18px;
		color:#0C3;
		font-weight:bold;
	}


</style>
<?php
    if(isset($_POST["enviando"])){
      $usuario = $_POST["nombre_usuario"];
      $edad =$_POST["edad_usuario"];

      if ($usuario=="EBER" && $edad>=18){
        echo "<p class='validado'>Puedes entrar"."</p>";
        
      }else{
        echo "<p class='no_validado'>NO Puedes entrar"."</p>";
      }

    }

?>