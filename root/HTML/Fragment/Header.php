<div id='header-wrapper' class='avyaan-chrome'>
	<div class='avyaan-nav'>
		<a class='avyaan-brand XURL' href='/' data-target='root' data-title='' aria-label='Avyaan Technologies home'>
			<span class='avyaan-brand-mark' aria-hidden='true'><?php includeSVG('', 'Logo_full'); ?></span>
		</a>

		<nav class='avyaan-nav-links' aria-label='Primary'>
			<a class='avyaan-nav-link XURL' href='/' data-target='root' data-title='' data-section-nav='hero'>Home</a>
			<a class='avyaan-nav-link XURL' href='/work' data-target='work' data-title='Work'>Work</a>
			<a class='avyaan-nav-link XURL' href='/#portfolio' data-target='root' data-title='' data-section-nav='portfolio'>Portfolio</a>
			<a class='avyaan-nav-link XURL' href='/#contact' data-target='root' data-title='' data-section-nav='contact'>Contact</a>
		</nav>

		<div class='avyaan-nav-actions' id='header-right-list'>
			<div id='header_buttons_right'>
				<div id='header_button'>
					<div id='search-button' class='grow' title='Search'><div class='image'><?php includeSVG('', 'Search'); ?></div></div>
					<div id='translate-button' class='grow' title='Translate'><div class='image'><?php includeSVG('', 'Translate'); ?></div></div>
					<div id='theme-selector'>
						<button id='darkmode-button' class='grow' type='button' aria-haspopup='menu' aria-expanded='false'>
							<span class='theme-current-icon image' data-theme-icon='light'><?php includeSVG('', 'Light_mode'); ?></span>
							<span class='theme-current-icon image' data-theme-icon='dark'><?php includeSVG('', 'Dark_mode'); ?></span>
						</button>
						<div id='theme-menu' role='menu' aria-label='Theme' hidden>
							<button class='theme-option' type='button' role='menuitemradio' data-theme='system'>
								<span class='theme-option-icon image'><?php includeSVG('', 'System_mode'); ?></span><span>System</span>
							</button>
							<button class='theme-option' type='button' role='menuitemradio' data-theme='light'>
								<span class='theme-option-icon image'><?php includeSVG('', 'Light_mode'); ?></span><span>Light</span>
							</button>
							<button class='theme-option' type='button' role='menuitemradio' data-theme='dark'>
								<span class='theme-option-icon image'><?php includeSVG('', 'Dark_mode'); ?></span><span>Dark</span>
							</button>
						</div>
					</div>
					<button type='button' class='avyaan-menu-toggle toggle-push-left image grow' id='menu-button' aria-label='Open menu' aria-controls='nav-menu' aria-expanded='false'>
						<?php includeSVG('', 'Menu_icon'); ?>
					</button>
				</div>
			</div>
		</div>
	</div>
</div>
