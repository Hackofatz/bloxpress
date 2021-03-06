<?php get_header(); ?>

	<div id="layout">
		<div id="drop_1" class="dropspot">
			<ul id="sidebar-1" class="sortable">			
				<?php if (!renderSidebar(1)) : ?>
					<!-- alternative html -->
				<?php endif; ?>
			</ul>	
		</div>
		<div id="drop_2" class="dropspot">
			<ul id="sidebar-2" class="sortable">
				<?php if (!renderSidebar(2)) : ?>
					<!-- alternative html -->
				<?php endif; ?>
			</ul>
		</div>
		<div id="drop_3" class="dropspot">
			<ul id="sidebar-3" class="sortable">
				<?php if (!renderSidebar(3)) : ?>
					<!-- alternative html -->
				<?php endif; ?>
			</ul>
		</div>
		<br style="clear:both" />
	</div>

	<!-- dev only -->
	<p><a href="#" onclick="$('#debug').toggle();return false;">debug</a></p>
	<div id="debug" style="display:none">		
		<?php pr($bloxpress); ?>
	</div>
	<!-- /dev only -->

<?php get_footer(); ?>