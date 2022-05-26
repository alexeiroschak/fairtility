		<footer id="footer">
			<div class="container">
				<img id="footer__wedges" src="<?= get_template_directory_uri() ?>/assets/img/wedges.svg">
				<img id="footer__wedges_mobile" src="<?= get_template_directory_uri() ?>/assets/img/wedges-mobile.svg">
				<div id="footer__middle">
					<div id="footer__middle__left">Life from the start.</div>
					<div id="footer__middle__right">
						<p>Life, even at its earliest stages, is rich with stories. Discover how Chloe can unlock a new frontier of data and help you discover the untold stories across the entire IVF journey.</p>
						<a href="#" id="footer__middle__right__cta">Request a demo →</a>
					</div>
				</div>
				<div id="footer__bottom">
					<div id="footer__bottom__left">
						<a id="footer__bottom__left__logo" href="/">
							<img src="<?= get_template_directory_uri() ?>/assets/img/logo-footer.svg" alt="Fairtility">
						</a>
						<p>&copy; <?= date('Y') ?> Fairtility. All rights reserved. <a href="/privacy-policy">Privacy policy</a>.</p>
					</div>
					<div id="footer__bottom__right">
						<div class="col">
							<span>SITEMAP</span>
							<ul>
								<li><a href="/">Home</a></li>
								<li><a href="#">Embryo Grading</a></li>
								<li><a href="#">Transparent AI</a></li>
								<li><a href="/media-publications">Media &amp; Publications</a></li>
								<li><a href="/request-a-demo">Request a Demo</a></li>
								<li><a href="/faq">FAQ</a></li>
								<li><a href="/about-fairtility">About Us</a></li>
								<li><a href="/careers">Careers</a></li>
								<li><a href="/contact-us">Contact Us</a></li>
							</ul>
						</div>
						<div class="col">
							<span>CONTACT</span>
							<p>
								Headquarters<br>
								Magshimim, Israel<br>
								<br>
								info@fairtility.com<br>
								+972 3-932-8360
							</p>
						</div>
						<div class="col">
							<span>CONNECT</span>
							<ul class="socials">
								<li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
								<li><a href="#"><span class="fab fa-twitter"></span></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<button id="footer__request_demo_button" class="demo">Request a demo →</button>
		</footer>		
		
		<?php wp_footer(); ?>
	</body>
</html>