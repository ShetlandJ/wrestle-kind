			<footer class="footer" role="contentinfo">
				<div class="container">
					<div class="footer__social clear">
						<ul class="social-btns clear">
							<li class="facebook"><a href="https://www.facebook.com/getwellgamersuk"><i class="i-facebook"></i></a></li>
							<li class="twitter"><a href="https://twitter.com/gwguk"><i class="i-twitter"></i></a></li>
							<li class="instagram"><a href="https://www.instagram.com/gwguk/"><i class="i-insta"></i></a></li>
							<li class="mail"><a href="mailto:hello@getwellgamers.org.uk"><i class="i-mail"></i></a></li>
							<li class="linkedin"><a href="https://www.linkedin.com/company/9430215"><i class="i-linkedin"></i></a></li>
						</ul>
					</div>
					<p class="footer__copyright">
						&copy; <?php echo date('Y'); ?> Copyright Get Well Gamers. <a title="OSCR registered charity number" href="https://www.oscr.org.uk/about-charities/search-the-register/charity-details?number=SC046494#results">SC046494</a>
					</p>
				</div>
			</footer>

		</div>

		<?php wp_footer(); ?>

		<script type="text/javascript">
			
			// Class Handlers
			var hasClass = function (elem, className) {
			    return new RegExp(' ' + className + ' ').test(' ' + elem.className + ' ');
			}

			var addClass = function (elem, className) {
			    if (!hasClass(elem, className)) {
			        elem.className += ' ' + className;
			    }
			}

			var removeClass = function (elem, className) {
			    var newClass = ' ' + elem.className.replace( /[\t\r\n]/g, ' ') + ' ';
			    if (hasClass(elem, className)) {
			        while (newClass.indexOf(' ' + className + ' ') >= 0 ) {
			            newClass = newClass.replace(' ' + className + ' ', ' ');
			        }
			        elem.className = newClass.replace(/^\s+|\s+$/g, '');
			    }
			}

			document.addEventListener("DOMContentLoaded", function() {
				if ( 'querySelector' in document && 'addEventListener' in window ) {

				    var menutrigger = document.getElementById('mobileTrigger'),
				    	menu = document.getElementById('menu');

				    menutrigger.addEventListener('click', function(e) {
				        if ( hasClass(menu, 'active') ) {
				            removeClass(menu, 'active');
				        } else {
				            addClass(menu, 'active');
				        }
				    },true);

				}
			});
		</script>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-64346250-1', 'getwellgamers.org.uk');
		ga('send', 'pageview');
		</script>

	</body>
</html>
