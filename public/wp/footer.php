


			<footer id="footer" class="l-footer">
				<div class="l-footer__inner">
					<ul class="c-footer__navbox">
						<li class="c-footer__navbox__menu">
							<a href="/">TOP</a>
						</li>
						<li class="c-footer__navbox__menu">
							<a href="/activity/">活動内容</a>
						</li>
						<li class="c-footer__navbox__menu">
							<a href="/outline/">協会概要</a>
						</li>
						<li class="c-footer__navbox__menu">
							<a href="/news/">お知らせ</a>
						</li>
						<li class="c-footer__navbox__menu">
							<a href="/column/">コラム</a>
						</li>
						<li class="c-footer__navbox__menu">
							<a href="/membership/">会員登録</a>
						</li>
						<li class="c-footer__navbox__menu">
							<a href="/contact/">お問い合わせ</a>
						</li>
		
					</ul>
					<!-- サイトロゴ -->
					<h2 class="c-footer__logo">
						<a href="/">
							<img src="<?php bloginfo('template_url'); ?>/images/logo/shoukibo-shien-logo.png" alt="一般社団法人 小規模事業者支援協会">
						</a>
					</h2>

				</div>
				<div class="c-footer__copy f-copy">
					Copyright 2022 shoukibojigyousya-shienkyoukai All Rights Reserved.
				</div>
			</footer>
		</div>
		<!-- / l-wrapper -->
		<!-- Adobe Font -->
		<script>
			(function(d) {
			var config = {
				kitId: 'lvy0ccv',
				scriptTimeout: 3000,
				async: true
			},
			h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
			})(document);
		</script>
		<!-- // Adobe Font -->
		<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/script.min.js"></script>

		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
		
		<?php wp_footer();?>
	</body>
</html>




