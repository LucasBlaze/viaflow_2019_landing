<?php 
/*
Template Name: Landing
*/
?>

<?php get_header(); ?>
<link rel="stylesheet" href="/wp/wp-content/themes/viaflow/landing/css/style.css" type="text/css" />
<main>
	<section class="s-landing-banner">
	</section>
	<section class="s-landing-text">
		<div class="o-wrapper">
			<div class="s-landing-text__col">
				<h1 class="s-landing-text__ttl">Formando<br/> novos profissionais para empresas</h1>
			</div>
			<div class="s-landing-text__col">
				<p>O FlowTalents foi criado pela ViaFlow para suprir as demandas de mercado por novos talentos na área de tecnologia.</p>

				<p>Através do programa, recrutamos jovens estudantes e desenvolvemos formações específicas para que eles adquiram novas habilidades, conectando esses novos talentos a empresas que estejam buscando esses recursos.</p>

				<p>A atuação do time FlowTalents dentro das empresas acontece no modelo trainee e conta sempre com a supervisão de um profissional experiente da ViaFlow.</p>
			</div>	
		</div>
	</section>
	<section class="s-landing-forms">
		<div class="o-wrapper">
			<div class="s-landing-forms__row">
				<div class="s-landing-forms__col">
					<h1 class="s-landing-forms__ttl">Para empresas</h1>

					<p>A tecnologia está diretamente ligada ao crescimento e desenvolvimento dos negócios.</p>

					<p>É fato que está cada vez está mais difícil encontrar profissionais capacitados para as necessidades específicas das empresas, gerando um atraso nos projetos e impactando na entrega da área de tecnologia para o negócio. Para atender essa demanda, a ViaFlow desenvolveu o FlowTalents. </p>

					<p>Diante de necessidades específicas, recrutamos e formamos times com os mais diversos skills e conhecimentos para atender tecnologicamente as demandas de qualquer segmento.
					Nossa proposta é preparar e entregar times capacitados para apoiar na entrega de projetos estratégicos da sua empresa. </p>

				</div>
				<div class="s-landing-forms__col">
					<span><b>Quer conhecer mais o FlowTalents?</b> <br/>Ligue 51 3012.4100 ou preencha o formulário abaixo que entraremos em contato.</span>
					<form action="/wp/wp-content/themes/viaflow/landing/mail.php" method="POST" class="s-landing-forms__form s-landing-forms__form--01">
						<input name="landing" type="hidden" value="empresarial">
						<input type="text" name="name" id="name" placeholder="Nome" maxlength="50">
						<input type="email" name="email" id="email" placeholder="E-mail" maxlength="255">
						<input type="text" class="form-phone" name="phone" id="phone" placeholder="Telefone">
						<input type="text" name="company" id="company" placeholder="Empresa" maxlength="50">
						<input type="text" name="role" id="role" placeholder="Função" maxlength="50">
						<input type="submit" value="Enviar">
						<span class="msg"></span>
					</form>
				</div>
			</div>
			<img src="/wp/wp-content/themes/viaflow/landing/img/blue-wave.png" alt="Viaflow" class="c-wave-separator">
			<div class="s-landing-forms__row">
				<div class="s-landing-forms__col">
					<h1 class="s-landing-forms__ttl">Para jovens estudantes</h1>

					<p>Se você busca uma oportunidade para entrar no mercado de trabalho, ou adquirir e aperfeiçoar skills para atuação nas áreas de tecnologia de médias e grandes empresas, você tem que se inscrever no FlowTalents.</p>

					<p>O FlowTalents é o programa de recrutamento e formação de novos talentos com conhecimentos específicos da área de tecnologia. Com ele você tem oportunidade de inserção no mercado de trabalho já nos primeiros semestres da faculdade.</p>

					<p>Através do programa você se qualifica e ainda pode ser direcionado a empresas para atuar como trainee e, assim, amplificar suas chances de crescimento e desenvolvimento de uma carreira bem sucedida. Tudo isso com o suporte e supervisão da ViaFlow. </p>


				</div>
				<div class="s-landing-forms__col">
					<span>
						<b>
							Você tem conceitos de lógica e comportamento inovador?<br/> 
							Gosta de aprender e ama tecnologia? <br/> 
							Então o FlowTalents é perfeito para você.
						</b>
					</span>
					<a href="http://www2.viaflow.com.br/curriculo" class="o-btn">Envie seu currículo aqui</a>
					<!-- <form action="/wp/wp-content/themes/viaflow/landing/mail.php" method="POST" class="s-landing-forms__form s-landing-forms__form--02">
						<input name="landing" type="hidden" value="estudantil">
						<input type="text" name="name" id="name" placeholder="Nome">
						<input type="email" name="email" id="email" placeholder="E-mail">
						<input type="text" name="college" id="college" placeholder="Universidade">
						<input type="text" name="class" id="class" placeholder="Curso">
						<input type="text" class="form-phone" name="phone" id="phone" placeholder="Telefone">
						<input type="submit" value="Enviar">
						<span class="msg"></span>
					</form> -->
				</div>
			</div>
		</div>
	</section>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.0/dist/jquery.validate.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
	<script src="/wp/wp-content/themes/viaflow/landing/js/scripts.js"></script>

</main>


<?php get_footer(); ?>