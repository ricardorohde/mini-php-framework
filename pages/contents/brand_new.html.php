﻿
<div id="topo2">
    <h1>Conteudos</h1> 
</div>
<div id="meio">
	<?= render('admin_menu') ?>
    <div id="conteudo">
		<?= render('flash_messages') ?>
		<form action="index.php?pagina=conteudos&acao=criar" method="post" class="form">
		  <h5>Novo Conteudo</h2>
		  <div class="form-container">
		    <?php require '_form.html.php' ?>
		  </div>
		</form>
    </div>
</div>
