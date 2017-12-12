		</div> <!-- end #content -->
		<div id="content-bottom">
            <div class="hotlog">
                <!-- HotLog -->
                <span id="hotlog_counter"></span>
                <span id="hotlog_dyn"></span>
                <script type="text/javascript">
                    var hot_s = document.createElement('script');
                    hot_s.type = 'text/javascript'; hot_s.async = true;
                    hot_s.src = 'http://js.hotlog.ru/dcounter/2333865.js';
                    hot_d = document.getElementById('hotlog_dyn');
                    hot_d.appendChild(hot_s);
                </script>
                <noscript>
                    <a href="http://click.hotlog.ru/?2333865" target="_blank"><img
                                src="http://hit37.hotlog.ru/cgi-bin/hotlog/count?s=2333865&amp;im=80" border="0"
                                alt="HotLog"></a>
                </noscript>
                <!-- /HotLog -->
            </div>
            <p id="copyright">
                Copyright 2017 Фаэтон
            </p>
            <!--			<p id="copyright">--><?php //esc_html_e('Designed by ','Memoir'); ?><!-- <a href="http://www.elegantthemes.com" title="Elegant Themes">Elegant Themes</a></p>-->
		</div> <!-- end #content-bottom -->
	</div> <!-- end #container -->

	<?php get_template_part('includes/scripts'); ?>
	<?php wp_footer(); ?>

</body>
</html>