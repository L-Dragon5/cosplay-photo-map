<div id="sidebar-nav" uk-offcanvas="overlay: true; flip: true">
	<div class="uk-offcanvas-bar uk-flex uk-flex-column">
		<button class="uk-offcanvas-close" type="button" uk-close></button>
		
		<span class="header__title--mobile uk-hidden@s">{{ setting('site.title') }}</span>
		<ul class="uk-nav uk-nav-primary">
			<li class="uk-parent"><a href="#about-us" uk-toggle>About</a></li>
				<li class="uk-nav-divider"></li>
			<li class="uk-parent"><a href="#faq" uk-toggle>FAQ</a></li>
				<li class="uk-nav-divider"></li>
			<li class="uk-parent"><a href="#contact-us" uk-toggle>Contact Us</a></li>
		</ul>
	</div>
</div>