		<?php
			$footer_copyright_contact_info = get_field('footer_copyright_contact_info', 'option');
		?>
		<footer id="footer">
			<div class="container">
				<img id="footer__wedges" src="<?= get_template_directory_uri() ?>/assets/img/wedges.svg">
				<img id="footer__wedges_mobile" src="<?= get_template_directory_uri() ?>/assets/img/wedges-mobile.svg">
				<div id="footer__middle">
					<?php
						$footer = get_field('global_footer', 'option');
					?>
					<div id="footer__middle__left"><?= $footer['headline'] ?></div>
					<div id="footer__middle__right">
						<?= $footer['copy'] ?>
						<?php if (!empty($footer['link_text'])) : ?>
							<a href="<?= $footer['link_url'] ?>" id="footer__middle__right__cta"><?= $footer['link_text'] ?></a>
						<?php endif ?>
					</div>
				</div>
				<div id="footer__bottom">
					<div id="footer__bottom__left">
						<a id="footer__bottom__left__logo" href="/">
							<img src="<?= get_template_directory_uri() ?>/assets/img/logo-footer.svg" alt="Fairtility">
						</a>
						<?= $footer_copyright_contact_info['copyright'] ?>
					</div>
					<div id="footer__bottom__right">
						<div class="col">
							<span>SITEMAP</span>
							<?php
								wp_nav_menu([
									'menu' => 'Footer Menu'
								])
							?>
						</div>
						<div class="col">
							<span>CONTACT</span>
							<?= $footer_copyright_contact_info['contact_info'] ?>
						</div>
						<div class="col">
							<span>CONNECT</span>
							<ul class="socials">
								<li><a href="https://www.linkedin.com/company/fairtility/" target="_blank"><span class="fab fa-linkedin-in"></span></a></li>
								<li><a href="https://twitter.com/fairtility" target="_blank"><span class="fab fa-twitter"></span></a></li>
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