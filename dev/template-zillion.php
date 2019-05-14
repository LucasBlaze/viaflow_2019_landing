<?php 
/*
Template Name: Zillion
*/
?>

<?php get_header(); ?>
<link rel="stylesheet" href="/wp/wp-content/themes/viaflow/landing/css/style.css" type="text/css" />
<main class="page-zillion">
	<section class="s-zillion-header">
	</section>


	<?php 

	if (have_posts()){
		while (have_posts()) : the_post();

			the_content();

		endwhile;
	}
	?>

	<section class="u-text-align--center u-p-t-80 u-p-t-50--sm">
		<div class="o-wrapper o-wrapper--960">
			<h1 class="o-ttl o-ttl--22 o-ttl--purple u-m-b-10">Aumente o desempenho da sua empresa com trabalhadores digitais_</h1>
			<p>A robotização é a porta de entrada para a transformação dos negócios, promovendo redução de custos e maior eficiência operacional. <br/> Com a família de robôs Zillion da ViaFlow, você coloca as pessoas no centro da tomada de decisão executando trabalhos de maior valor agregado.<br/> 
			Afinal, tarefas repetitivas e manuais podem ser executadas por robôs com muito mais precisão e maior rapidez. </p>

			<ul class="c-list-highlights u-m-t-50">
				<li class="c-list-highlights__item">
					<img class="c-list-highlights__icon" src="/wp/wp-content/themes/viaflow/landing/img/zillion/zillion-icon_01.png" alt="mais agilidade_">
					<h3 class="o-ttl o-ttl--22 o-ttl--purple">mais<br/> agilidade_</h3>
					<span>Tarefas cumpridas em menos tempo e dentro do prazo. </span>
				</li>
				<li class="c-list-highlights__item">
					<img class="c-list-highlights__icon" src="/wp/wp-content/themes/viaflow/landing/img/zillion/zillion-icon_02.png" alt="mais produtividade_">
					<h3 class="o-ttl o-ttl--22 o-ttl--purple">mais<br/> produtividade_</h3>
					<span>Mais entregas com o mesmo time. </span>
				</li>
				<li class="c-list-highlights__item">
					<img class="c-list-highlights__icon" src="/wp/wp-content/themes/viaflow/landing/img/zillion/zillion-icon_03.png" alt="menos erros_">
					<h3 class="o-ttl o-ttl--22 o-ttl--purple">menos<br/> erros_</h3>
					<span>Foco dos esforços humanos na correção de inconsistências. </span>
				</li>
				<li class="c-list-highlights__item"> 
					<img class="c-list-highlights__icon" src="/wp/wp-content/themes/viaflow/landing/img/zillion/zillion-icon_04.png" alt="menos custo operacional_">
					<h3 class="o-ttl o-ttl--22 o-ttl--purple">menos custo<br/> operacional_</h3>
					<span>Processos mais rápidos e padronizados. </span>
				</li>
			</ul>	
		</div>
	</section>

	<section class="u-p-t-300 u-p-t-50--sm">
		<div class="o-wrapper o-wrapper--960">
			<div class="c-highlight-text u-m-l-370 u-m-l-0--sm">
				<img src="/wp/wp-content/themes/viaflow/landing/img/zillion/logo.png" alt="Zillion Contábil Fiscal" class="c-highlight-text__logo">
				<p>Controlar as entradas e saídas de recursos financeiros da empresa é, sem dúvida, muito importante para qualquer negócio. <br/> A movimentação envolve um volume grande de lançamentos a serem conciliados com o objetivo de garantir que as posições financeiras e contábeis estejam sempre alinhadas. <br/> Com a família de robôs Zillion da ViaFlow, a conciliação é automatizada, garantindo maior agilidade, minimizando os erros do processo, com menor custo. </p>
			</div>
			<ul class="c-text-list u-m-t-50">
				<li class="c-text-list__item">
					<h3 class="o-ttl o-ttl--16 o-ttl--purple u-m-b-0">MOVIMENTO DE CLIENTE/FORNECEDOR </h3>
					<p>Garantia de integridade da movimentação nas contas de clientes e fornecedores de forma robotizada, cruzando a entrada e saída de notas fiscais registradas no Financeiro e na Contabilidade. </p>
				</li>
				<li class="c-text-list__item">
					<h3 class="o-ttl o-ttl--16 o-ttl--purple u-m-b-0">ICMS / IPI</h3>
					<p>Conferência do Livro Razão de ICMS/IPI com os Livros Fiscais de Entrada e Saída contratando robôs para executar estas atividades manuais e repetitivas. </p>
				</li>
				<li class="c-text-list__item">
					<h3 class="o-ttl o-ttl--16 o-ttl--purple u-m-b-0">NOTAS FISCAIS DE ENTRADA</h3>
					<p>Comparação das notas fiscais emitidas contra sua empresa versus os lançamentos de entrada do documento fiscal no sistema de gestão.</p>
				</li>
			</ul>
		</div>
	</section>

	<section>
		<div class="o-wrapper o-wrapper--960 u-text-align--center u-m-width--600 u-block-center u-m-t-30">
			<h1 class="o-ttl o-ttl--16 o-ttl--purple u-m-b-0">Quer conhecer mais sobre Zillion?</h1>
			<span>Ligue 51 3012.4100 ou preencha o formulário ao lado que entraremos em contato.</span>
			<form action="/wp/wp-content/themes/viaflow/landing/mail.php" method="POST" class="s-landing-forms__form s-landing-forms__form--03">
				<input name="landing" type="hidden" value="zillion">
				<input class="u-text-align--center" type="text" name="name" id="name" placeholder="Nome">
				<input class="u-text-align--center" type="email" name="email" id="email" placeholder="E-mail">
				<input class="u-text-align--center form-phone" type="text" name="phone" id="phone" placeholder="Telefone">
				<input class="u-text-align--center" type="text" name="company" id="company" placeholder="Empresa">
				<input class="o-btn o-btn--purple" type="submit" value="Enviar">
				<span class="msg"></span>
			</form>
		</div>
	</section>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.0/dist/jquery.validate.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
	<script src="/wp/wp-content/themes/viaflow/landing/js/scripts.js"></script>
</main>
<?php get_footer(); ?>