<?php
//tabela  
$teste = array();
$teste[0]['produtos']['nome'] = "Produto 1";
$teste[0]['produtos']['descricao'] = "Descrição do produto 1";
$teste[0]['produtos']['valor'] = 50;
$teste[0]['produtos']['opcionais'][] = "Opcional 1";
$teste[0]['produtos']['opcionais'][] = "Opcional 2";
$teste[0]['produtos']['opcionais'][] = "Opcional 3";
$teste[1]['produtos']['nome'] = "Produto 2";
$teste[1]['produtos']['descricao'] = "Descrição do produto 2";
$teste[1]['produtos']['valor'] = 75;
$teste[1]['produtos']['opcionais'][] = "Opcional 1";
$teste[1]['produtos']['opcionais'][] = "Opcional 2";
$teste[1]['produtos']['opcionais'][] = "Opcional 3";
$teste[1]['produtos']['opcionais'][] = "Opcional 4";
$teste[2]['produtos']['nome'] = "Produto 3";
$teste[2]['produtos']['descricao'] = "Descrição do produto 3";
$teste[2]['produtos']['valor'] = 100;
$teste[2]['produtos']['opcionais'][] = "Opcional 1";
$teste[2]['produtos']['opcionais'][] = "Opcional 2";
?>

<div class="container">
	<div class="row">
		<div class="col-md-6">
			<p class="ct">Tabela</p>
			<table border="1">
				<tr>
					<th>Produto</th>
					<th>Descrição</th>
					<th>Valor</th>
					<th>Opções</th>
				</tr>
				<?php
				for ($i = 0; $i < count($teste); ++$i){
					echo "<tr><td>" . $teste[$i]['produtos']['nome'] . "</td>";
					echo "<td>" . $teste[$i]['produtos']['descricao'] . "</td>";
					echo "<td>" . $teste[$i]['produtos']['valor'] . "</td>";
					echo "<td>";

					foreach ($teste[$i]['produtos']['opcionais'] as $opcoes){
						echo "$opcoes<br/>";
					}

					echo "</td></tr>";
				}
				?>
			</table>
		</div>
		<div class="col-md-6">
			<?php
			//tabela invertida
			rsort($teste);
			?>

			<p class="ct">Tabela invertida</p>
			<table border="1">
				<tr>
					<th>Produto</th>
					<th>Descrição</th>
					<th>Valor</th>
					<th>Opções</th>
				</tr>

				<?php
				for ($i = 0; $i < count($teste); ++$i){
					echo "<tr><td>" . $teste[$i]['produtos']['nome'] . "</td>";
					echo "<td>" . $teste[$i]['produtos']['descricao'] . "</td>";
					echo "<td>" . $teste[$i]['produtos']['valor'] . "</td>";

					echo "<td>";
					foreach ($teste[$i]['produtos']['opcionais'] as $opcoes){
						echo "$opcoes<br/>";
					}

					echo "</td></tr>";
				}
				?>

			</table>
		</div>
	</div>
</div>



