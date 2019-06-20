<div data-sticky-container class="show-for-large">
	<div class="top-bar sticky" id="top-bar-menu" data-sticky data-sticky-on="large" data-anchor="content" data-margin-top="0">
		<div class="grid-container">
			<div class="grid-x">
				<div class="cell">
					<div class="top-bar-left">
						<div class="nav-table">
							<div class="nav-table-row">
								<ul id="menu-main-left" class="dropdown menu float-left" data-dropdown-menu="">
									<li>
										<a href="/">Inicio</a>
									</li>
									<?php echo m2i_get_block_html( 'topnavwp' ); ?>
									<li>
										<a href="https://brasil.pregel-itc.com/">TREINAMENTO</a>
										<!-- have to add these manual for the moment -->
										<ul class="menu arrow-box submenu is-dropdown-submenu first-sub vertical" data-submenu="" aria-hidden="true" role="menu">
											<li class="menu-item menu-item-type-post_type menu-item-object-page is-submenu-item is-dropdown-submenu-item" role="menuitem"><a href="https://brasil.pregel-itc.com/treinamento/inscricoes/">Inscrições</a></li>
											<li class="menu-item menu-item-type-post_type menu-item-object-page is-submenu-item is-dropdown-submenu-item" role="menuitem"><a href="https://brasil.pregel-itc.com/treinamento/cursos/">Cursos</a></li>
											<li class="menu-item menu-item-type-post_type menu-item-object-page is-submenu-item is-dropdown-submenu-item" role="menuitem"><a href="https://brasil.pregel-itc.com/treinamento/curriculo-de-cursos/">Currículo de Cursos</a></li>
											<li class="menu-item menu-item-type-post_type menu-item-object-page is-submenu-item is-dropdown-submenu-item" role="menuitem"><a href="https://brasil.pregel-itc.com/calendario/">Calendário</a></li>
											<li class="menu-item menu-item-type-post_type menu-item-object-page is-submenu-item is-dropdown-submenu-item" role="menuitem"><a href="https://brasil.pregel-itc.com/treinamento/unidades/">Unidades</a></li>
											<li class="menu-item menu-item-type-post_type menu-item-object-page is-submenu-item is-dropdown-submenu-item" role="menuitem"><a href="https://brasil.pregel-itc.com/instrutores/">Instrutores</a></li>
											<li class="menu-item menu-item-type-post_type menu-item-object-page is-submenu-item is-dropdown-submenu-item" role="menuitem"><a href="https://brasil.pregel-itc.com/perguntas-frequentes/">Perguntas Frequentes</a></li>
											<li class="menu-item menu-item-type-post_type menu-item-object-page is-submenu-item is-dropdown-submenu-item" role="menuitem"><a href="https://brasil.pregel-itc.com/minhas-reservas/">Minhas Reservas</a></li>
										</ul>
									</li>
								</ul>
								<?php joints_top_nav_right(); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="grid-container">
	<div class="grid-x hide-for-large">	
		<div class="m-menu-icon"><button class="menu-icon" type="button" data-toggle="off-canvas"></button></div>	
		<div class="cell text-center mobile-logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/pregel-logo.png" alt="PreGel"></div>	
	</div>
</div>