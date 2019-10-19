<?php

if(isset($_POST['email'])){

	$email = addslashes($_POST['email']);
	$password = addslashes($_POST['password']);
	$endereco = addslashes($_POST['endereco']);
	$complemento = addslashes($_POST['complemento']);
	$cidade = addslashes($_POST['cidade']);
	$estado = addslashes($_POST['estado']);
	$numero = addslashes($_POST['numero']);

	$pdo->createCadastrar($email, $password, $endereco, $complemento, $cidade, $estado, $numero);
}

	

?>
<div class="container">
	<div class="form-cadastro">
		<form method="post">
		  <div class="form-row">
		    <div class="form-group col-md-6">
		      <label for="inputEmail4">Email</label>
		      <input type="email" class="form-control" id="inputEmail4" name="email" placeholder="Email">
		    </div>
		    <div class="form-group col-md-6">
		      <label for="inputPassword4">Password</label>
		      <input type="password" class="form-control" id="inputPassword4" name="password" placeholder="Password">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="inputAddress">Endereço</label>
		    <input type="text" class="form-control" id="inputAddress" name="endereco" placeholder="1234 Main St">
		  </div>
		  <div class="form-group">
		    <label for="inputAddress2">Complemento</label>
		    <input type="text" class="form-control" id="inputAddress2" name="complemento" placeholder="Apartment, studio, or floor">
		  </div>
		  <div class="form-row">
		    <div class="form-group col-md-6">
		      <label for="inputCity">Cidade</label>
		      <input type="text" class="form-control" id="inputCity" name="cidade">
		    </div>
		    <div class="form-group col-md-4">
		      <label for="inputState">Estado</label>
		      <select id="inputState" class="form-control" name="estado">
		        <option selected>SP</option>
		        <option>AL</option>
		        <option>RJ</option>
		        <option>RS</option>
		        <option>GO</option>
		        <option>MG</option>
		        <option>CE</option>
		        <option>MA</option>
		        <option>BA</option>
		        <option>PI</option>
		        <option>PA</option>
		        <option>SE</option>
		        <option>RO</option>
		        <option>AC</option>
		      </select>
		    </div>
		    <div class="form-group col-md-2">
		      <label for="inputZip">Numero</label>
		      <input type="text" class="form-control" id="inputZip" name="numero">
		    </div>
		  </div>
		  <div class="btn-form-cadastro" style="text-align: center;">
		    <button type="submit" id="cadastrar" class="btn btn-primary btn-lg">ENVIAR</button>
		  </div>
		  
		</form>
	</div>
</div>