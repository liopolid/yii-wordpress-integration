<?php $this->beginContent('//layouts/main'); ?>
<div id="primary">
	<div id="content" role="main">
		<?php echo $content; ?>
	</div><!-- #content -->
</div>
<?php get_sidebar(); ?>
<?php $this->endContent(); ?>