<?php 

	if(isset($_POST['email'])){

		$email = addslashes($_POST['email']);

		$pdo->createEmail($email);
	}
?>
<div class="container">
	<div class="form-email">
		<h3>Informe seu email para receber ofertas e vantagens</h3>
		<form method="post">
			<input type="email" name="email" placeholder="Email">
			<button type="submit" id="btn-email" class="btn btn-primary btn-sm" style="margin: 2%; padding: 5px 5%;">Enviar</button>
		</form>
	</div>
</div>
