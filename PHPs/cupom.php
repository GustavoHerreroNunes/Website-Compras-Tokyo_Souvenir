<!DOCTYPE hmtl>
<html>
	<head>
		<meta charset="UTF-8"/>
		<title>Tokyo Souvenir</title>
		<link rel="stylesheet" type="text/css" href="../css/Op1.css"/>
	</head>
	<body>
	<center>
	<div id="phpV">	
			<?php
				$prod = $_POST['produto'];
				$cupom = $_POST['cupomP'];
				$preco = 0.0;
				$nome= " ";
				$desc =0;
				
				switch($prod){
					case 1:
						$preco = 25.0;
						$nome= "Globo Tokyo Tower";
						break;
					case 2:
						$preco = 7.5;
						$nome= "Chaveiros Comemorátivos";
						break;
					case 3:
						$preco = 59.99;
						$nome= "Pelúcias";
						break;
				}
				switch($cupom){
					case "uxr23":
						$desc = 20;
						break;
					case "abf432":
						$desc = 10;
						break;
					case "23bc":
						$desc = 35;
						break;
					case "cupom123":
						$desc = 70;
						break;
				}
				
				$preco2 = $preco -($preco *($desc /100));
				
				echo "Parábens<br>Compra efetuada com sucesso<br><br>";
				echo "Produto comprado: ".$nome;
				echo "<br>Preço Original: ".$preco;
				echo "<br><br>Desconto: ".$desc."% = ".($preco *($desc /100));
				echo "<br>Total: ".$preco2;
			?>

	</div>
	<center>
	</body>
</html>