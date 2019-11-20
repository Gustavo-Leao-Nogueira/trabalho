<?php 
    require_once '../includes/config.inc.php'; 
    $locais = setLocais('secundario');
    setTitulo('Estoque de Livros - Cadastro de Funcionarios');
    require_once '../includes/header.inc.php';  
    require_once '../includes/menu.inc.php'; 
?>

<div class="container">

	<form class="text-center border border-light p-5" action="#!">
		
    <div class="row">
       

        <div class="col-8 ">
	 	<div class="row">
	 		 <h2 class="h4 mb-4">Cadastro Funcionário</h2>
	 	</div>
		<div class="form-group">
		<!-- Login -->
			<input type="login" id="defaultLoginFormRegistre" class="form-control mb-4" placeholder="Digite seu Login ">
	    </div>
		<div class="form-group">
		<!-- Nome -->
			<input type="name" id="defaultLoginFormname" class="form-control mb-4" placeholder="Digite seu Nome">
		</div>
		<div class="form-group">
			 <!-- Cpf -->
			<input type="Cpf" id="defaultLoginFormcpf" class="form-control mb-4" placeholder="Digite seu CPF">
		</div>
	   	<div class="form-group">
			 <!-- E-mail -->
			<input type="email" id="defaultLoginFormemail" class="form-control mb-4" placeholder="Digite seu E-mail">
		</div>
		<div class="form-group">
		 <!-- Endereco -->
		    <input type="endereco" id="defaultLoginFormendereco" class="form-control mb-4" placeholder="Digite seu Endereço"> 
		</div>
	    <div class="form-group">		    
	    	<!-- Cidade -->
		    <input type="city" id="defaultLoginFormcity" class="form-control mb-4" placeholder="Digite sua Cidade">
		</div>
		 <div class="form-group">		    
		 <!-- Telefone -->		
		    <input type="Phone" id="defaultLoginFormPhone" class="form-control mb-4" placeholder="Digite seu Telefone">
		</div>
        <div class="form-group">		    
		 <!-- Data de contratação -->		
		 <input class="form-control mb-4 datepicker" data-date-format="mm/dd/yyyy">
		    <!-- <input type="date" id="defaultLoginFormdate" class="form-control mb-4" placeholder="Data de contratação"> -->
		</div>
       
		<div class="form-group left">
			<button type="submit" class="btn btn-primary">Enviar</button>
			<button type="reset" class="btn btn-secondary">Apagar</button>	    
		</div>

		</div>

 		<div class="col-3 ">
			<img src="../imgs/imagem.png"  class="img-fluid imagem-media"  />
		</div>
</div>
	</form>
	
</div>

<?php require_once '../includes/footer.inc.php'; ?>