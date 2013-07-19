	<div id="sidebar">
		<div class="adsense_sidebar_upper"><?php /* include (TEMPLATEPATH . '/_adsense_side_upper.php'); */ ?></div>
		<div class="sideabar1">
			<ul>
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(1) ) : ?>
				<li>
					<h2 class="widgettitle">META</h2>
					<ul>
					<?php wp_register(); ?>
						<li><?php wp_loginout(); ?></li>
						<li>Widget Here.</li>
						<?php wp_meta(); ?>
					</ul>
				</li>
				<?php endif; ?>
			</ul>
		</div>
		<div class="adsense_sidebar_middle"><?php include (TEMPLATEPATH . '/_adsense_side_middle.php'); ?></div>
		<div class="sidebar2">
			<ul>
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(2) ) : ?>
				<li>
					<h2 class="widgettitle">META</h2>
					<ul>
					<?php wp_register(); ?>
						<li><?php wp_loginout(); ?></li>
						<li>Widget Here.</li>
						<?php wp_meta(); ?>
					</ul>
				</li>
				<?php endif; ?>
			</ul>
		</div>
		<div class="sidebar3">
			<ul>
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(3) ) : ?>
				<li>
					<h2 class="widgettitle">META</h2>
					<ul>
					<?php wp_register(); ?>
						<li><?php wp_loginout(); ?></li>
						<li>Widget Here.</li>
						<?php wp_meta(); ?>
					</ul>
				</li>
				<?php endif; ?>
			</ul>
		</div>
		<div class="sidebar4">
			<ul>
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(4) ) : ?>
				<li>
					<h2 class="widgettitle">META</h2>
					<ul>
					<?php wp_register(); ?>
						<li><?php wp_loginout(); ?></li>
						<li>Widget Here.</li>
						<?php wp_meta(); ?>
					</ul>
				</li>
				<?php endif; ?>
			</ul>
		</div>
	</div>
