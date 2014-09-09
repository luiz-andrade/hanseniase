<?php
include 'conexao.php';
?>
<html>
<head>
	<title>Formulario Hanseniase</title>
	<link rel="stylesheet" type="text/css" href="css/foundation.min.css">
	<meta charset="utf-8">
</head>
<body>
<div class="row panel">
<form method="post">
	  <div class="row">
		<div class="large-12 columns">
		  <div class="row collapse">
			<div class="small-4 columns">
			  <input type="number" name="qtd" placeholder="Quantidade de pessoas">
			</div>
			<div class="small-1 columns ">
			  <input class="button postfix" type="submit" value="Enviar">
			</div>
			<div class="small-7 columns"></div>
		  </div>
		</div>
	  </div>
</form>

<h3 class="text-center">Prevenção de controle da Hanseníase 2014</h3>

<form>
	<fieldset>
		<legend>Dados do responsável</legend>
		<div class="row">
			<div class="large-10 columns"> <!--autofocus -->
			  <label>Responsável<input name="nome_respon" type="text" placeholder="nome do responsavel" required /></label>
			</div>
			<div class="large-2 columns">
			  <label>Telefone:</label><input name="tel_respon" type="text"  placeholder="Telefone fixo"/>
			</div>
		</div>
		<div class="row">
			<div class="large-4 columns">
			  <label>Idade<input name="idade_respon" type="number" size="10px" min="1" max="130" /></label>
			</div>
			<div class="large-2 columns">
			  <label>Sexo
					<select name="sexo_respon" id="sexo_respon">
						<option value="m">Masculino</option>
						<option value="f">Feminino</option>
					</select>
				</label>
			</div>
			<div class="large-6 columns">
			  <label>Cartão SUS<input type="text" name="cartao_respon" placeholder="numero cartao" /></label>
			</div>
		</div>
		<div class="row">
			<div class="large-12 columns">
			  <label>Mãe<input type="text" name="mae_respon" placeholder="Mãe do responsavel" /></label>
			</div>
		</div>
		<div class="row">
			<div class="large-4 columns">
			  <label>Rua<input type="text" name="rua_respon" placeholder="Digite o nome da rua" /></label>
			</div>
			<div class="large-2 columns">
			  <label>Número<input type="number" name="numero_respon" /></label>
			</div>
			<div class="large-6 columns">
			  <label>Bairro<input type="text" name="bairro_respon" placeholder="Bairro" /></label>
			</div>
		</div>
		<div class="row">
			<div class="large-12 columns">
			<label>Referência<input type="text" name="referencia_respon"/></label>
			</div>
		</div>
		<div class="row"> 
			<div class="large-2 columns">
				<label>Visitador
						<select name="visitador">
							<option value="visitador1">Visitador 1</option>
							<option value="visitador2">Visitador 2</option>
						</select>
				</label>
			</div>
		</div>		
		<div class="row">
			<div class="large-2 columns">
				<label>Renda mensal<input type="number" value="renda_respon" max="2" min="1" step="0.5" value="1" /></label>
			</div>
			<div class="large-4 columns">
			  <label>Recebe Beneficio ?</label>
			  <input type="radio" name="beneficio" value="beneficio_sim" id="sim"><label for="sim">Sim</label>
			  <input type="radio" name="beneficio" value="beneficio_nao" id="nao" checked="checked"><label for="nao">Não</label>
			</div>
			<div class="large-6 columns">
				<!-- Se beneficio=SIM então mostra abaixo-->
				<label>Tipo de Beneficio</label>
				<input type="text" name="beneficio_descr" placeholder="qual beneficio ?"/>
			</div>
		</div>
		<div class="row">
			<div class="large-10 columns">
				<label>Encaminhado para atendimento em<input type="text" name="encaminhado" /></label>
			</div>
			<div class="large-2 columns">
				<label>Data<input type="text" name="data_encaminhamento" placeholder="00/00/0000" /></label>
			</div>
		</div>
	</fieldset>
	<div class="alert-box secondary radius">
	<label><h2>Dados de Saude</h2></label>
		<div class="row">
			<div class="large-4 columns">
				<label>Celular<input type="text" name="celular" /></label>
			</div>
			<div class="large-8 columns"></div>
		</div>
		<div class="row">
			<div class="large-4 columns">
				<label>Celular<input type="text" name="celular" /></label>
			</div>
			<div class="large-8 columns"></div>
		</div>
	</div>

<?php
$qtd=0;
if(isset($_POST['qtd'])){
$qtd= $_POST['qtd'];
}
for ($i=0; $i <$qtd ; $i++) { ?>
	<div class="alert-box secondary radius">
		<legend>Familiar <?php echo $i+1 ?></legend>
		<div class="large-4 columns">
				<label>Celular<input type="text" name="celular" value="usuario<?php echo $i+1 ?>" /></label>
			</div>
			<div class="large-8 columns"></div>
		<div class="row">
			<div class="large-4 columns">
				<label>Celular<input type="text" name="celular" value="usuario<?php echo $i+1 ?>"/></label>
			</div>
			<div class="large-8 columns"></div>
		</div>
	</div>
<?php } ?>
quantidade de pessoas na familia é: 
<?php echo $qtd ?>
<br />
<input class="button [tiny small large] success round" type="submit" value="Salvar">
</form>

<br />
<br />
<br />
<!--///-->

<footer class="row">
	<p>&copy; Company 2014</p>
</footer>
</div><!--Fim small 10-->
</div><!--Fim ROW-->
</body>
</html>