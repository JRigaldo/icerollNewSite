				<!-- Footer -->
                	<footer id="footer">
						<section>

							<?php the_field('footer_contact') ?>

							<!--?php if ( shortcode_exists( 'contact-form-7' ) ) { echo do_shortcode('[contact-form-7 id="95" title="Formulaire de contact 1"]'); } ? -->


							<!-- form method="post" action="#">
								<div class="fields">
									<div class="field">
										<label for="name">Name</label>
										<input type="text" name="name" id="name" />
									</div>
									<div class="field">
										<label for="email">Email</label>
										<input type="text" name="email" id="email" />
									</div>
									<div class="field">
										<label for="message">Message</label>
										<textarea name="message" id="message" rows="3"></textarea>
									</div>
								</div>
								<ul class="actions">
									<li><input type="submit" value="Send Message" /></li>
								</ul>
							</form> -->
						</section>
						<section class="split contact">
							<section class="alt">
								<h3>Address</h3>
								<p>Jetée de la compagnie <br />
								1007 Lausanne</p>
							</section>
							<section>
								<h3>Phone</h3>
								<p><a href="#">(0041) 078 672 54 02</a></p>
							</section>
							<section>
								<h3>Email</h3>
								<p><a href="#">info@icerolllausanne.ch</a></p>
							</section>
							<section>
								<h3>Social</h3>
								<ul class="icons alt">
									<li><a href="https://twitter.com/IcerollLausanne" class="icon brands alt fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="https://www.facebook.com/iceroll.lausanne.5" class="icon brands alt fa-facebook-f"><span class="label">Facebook</span></a></li>
									<li><a href="https://www.instagram.com/icerolldelice/?hl=fr" class="icon brands alt fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="https://www.youtube.com" class="icon brands alt fa-youtube"><span class="label">Youtube</span></a></li>
								</ul>
							</section>
						</section>
					</footer>

				<!-- Copyright -->
					<div id="copyright">
						<ul><li>&copy; Iceroll-lausanne</li></ul>
					</div>

			</div>
	<?php wp_footer(); ?>
	</body>
</html>