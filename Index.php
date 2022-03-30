<?php
    require_once ('Bebida.php');
?>
      
	  <!DOCTYPE html>
<html lang="en">
<head>
	<title>Bebidas</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="Login/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/css/util.css">
	<link rel="stylesheet" type="text/css" href="login/css/main.css">
<!--===============================================================================================-->
	<style type="text/css">
	#pai div{
		display: none;
	}
</style>
</head>
<body>
	
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('Login/images/back.jpeg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<?php
				if(!isset($_POST['enviar'])){
				
				
				?>
				<form class="login100-form validate-form" method="POST" >
					<span class="login100-form-title p-b-49">
						Bebidas
					</span>
					<div>
					<input class="input100" type="tipo" name="nome" placeholder="Nome">
						<input class="input100" type="tipo" name="preco" placeholder="Preço">

						<select id="select" >
							<option value="">SELECIONE</option>
							<option value="vinho">Vinho</option>
							<option value="suco">Suco</option>
							<option value="refri">Refrigerante</option>
							
						</select>
						<div class= "selecionar"></div>
					</div>
					<div id="pai">
					<div id="vinho">
						<span class="label-input100">Vinho</span>
						
						<input class="input100" type="tipo" name="tipo" placeholder="Tipo">
						<input class="input100" type="safra" name="safra" placeholder="Safra">
						<span class="focus-input100" data-symbol="&#xf206;">
						</span>
					</div>
					

					<div id="suco">
						<span class="label-input100">Suco</span>
						
						<input class="input100" type="text" name="sabor" placeholder="sabor">
						<span class="focus-input100" data-symbol="&#xf206;">
						</span>
					</div>

					<div id="refri">
						<span class="label-input100">Refrigerante</span>
						
						<input class="input100" type="text" name="retornável" placeholder="retornável">
						<span class="focus-input100" data-symbol="&#xf206;">
						</span>
					</div>
					</div>
					<div> <input type="submit" name="enviar" class="btn" value="enviar">
					<div>
					<?php
					
					?>
																						
					
					
					
					</div>
				</form>
				<?php

				}
				else
				
				{
					
					?>
					<form class="login100-form validate-form" method="POST" action="Index.php" >
					<?php
					include ("Processa.php");
					?>
					<span class="login100-form-title p-b-49">
						Bebidas
					</span>
					<div>
					<input class="input100" type="tipo" name="nome" placeholder="Nome" value="<?php echo $dados['nome'] ?>"disabled>
						<input class="input100" type="tipo" name="preco" placeholder="Preço" value="<?php echo $dados['preco'] ?>"disabled disabled>

						
						
					</div>
					<?php
					if($tipo == 'vinho'){
						?>
						<div id="vinho" style="display: show;">

						<span class="label-input100">Vinho</span>

						<input class="input100" type="tipo" name="tipo" placeholder="Tipo" value="<?php echo $dados['tipo'] ?>"disabled  disabled>
						<input class="input100" type="safra" name="safra" placeholder="Safra" value="<?php echo $dados['safra'] ?>"disabled disabled>
						<span class="focus-input100" data-symbol="&#xf206;">
						</span>
						</div>
						<?php
					} elseif($tipo == 'suco'){					
					?>

						<div id="suco">
						<span class="label-input100">Suco</span>
						
						<input class="input100" type="text" name="sabor" placeholder="sabor" value="<?php echo $dados['sabor'] ?>"disabled disabled>
						<span class="focus-input100" data-symbol="&#xf206;">
						</span>
					</div>
					<?php
					}elseif($tipo == 'refri'){
					?>

					<div id="refri">
						<span class="label-input100">Refrigerante</span>
						
						<input class="input100" type="text" name="retornável" placeholder="retornável" value="<?php echo $dados['retornavel'] ?>"disabled disabled>
						<span class="focus-input100" data-symbol="&#xf206;">
						</span>
					</div>
					</div>
					<div> <input type="submit" name="enviar2" class="btn" value="voltar">
					<div>
						<?php
					}
						?>
					
																						
					
					
					
					
				</form>
					
					<?php
				}
			

				?>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!--===============================================================================================-->
	<script src="login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="login/vendor/bootstrap/js/popper.js"></script>
	<script src="login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="login/vendor/daterangepicker/moment.min.js"></script>
	<script src="login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="login/js/main.js"></script>
	<script  type="text/javascript">

         $(document).ready(function(){
        $('#select').on('change',function(){
            var selectValor = '#'+$(this).val();
            $('#pai').children('div').hide();  
            $('#pai').children(selectValor).show();
        });
    });               
            
        
    </script>
</body>
</html>

	<div id="dropDownSelect1"></div>

      
      

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   
  
	


  
</html>
