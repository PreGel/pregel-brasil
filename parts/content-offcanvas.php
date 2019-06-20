<div class="off-canvas position-left" id="off-canvas" data-off-canvas data-position="left">

	<!-- pull in the products search from magento -->
	
		<?php //the_block('top.wpsearch'); ?>
	
	<ul id="mobile-menu" class="vertical menu accordion-menu" data-accordion-menu>
	
		<?php echo m2i_get_block_html( 'topnavwp' ); ?>
		
		<?php joints_off_canvas_nav_getleft(); ?>
		<li>
			<a href="https://brasil.pregel-itc.com/">TREINAMENTO</a>
			<ul class="vertical menu">
				<li><a href="https://brasil.pregel-itc.com/treinamento/inscricoes/">Inscrições</a></li>
				<li class="menu-item menu-item-type-post_type menu-item-object-page is-submenu-item is-dropdown-submenu-item" role="menuitem"><a href="https://brasil.pregel-itc.com/treinamento/cursos/">Cursos</a></li>
				<li><a href="https://brasil.pregel-itc.com/treinamento/curriculo-de-cursos/">Currículo de Cursos</a></li>
				<li><a href="https://brasil.pregel-itc.com/calendario/">Calendário</a></li>
				<li><a href="https://brasil.pregel-itc.com/treinamento/unidades/">Unidades</a></li>
				<li><a href="https://brasil.pregel-itc.com/instrutores/">Instrutores</a></li>
				<li><a href="https://brasil.pregel-itc.com/perguntas-frequentes/">Perguntas Frequentes</a></li>
				<li><a href="https://brasil.pregel-itc.com/minhas-reservas/">Minhas Reservas</a></li>
			</ul>
		</li>
		
		<?php joints_off_canvas_nav_getright(); ?>
		
		<?php joints_off_canvas_nav(); ?>
	</ul>
	
</div>