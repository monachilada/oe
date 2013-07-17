<style>
	#<?= $post->post_name ?> {
		<? $bg_type = get_field('bg_type'); ?>
		<? if($bg_type == 'color'): ?>
			background: <? the_field('bg_color') ?>;
		<? elseif($bg_type == 'image'): ?>
			background: url('<?= wp_get_attachment_url(get_field('bg_image')) ?>') no-repeat center center <? the_field('bg_image_fixed') ?>; 
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
			filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?= wp_get_attachment_url(get_field('bg_image')) ?>', sizingMethod='scale');
			-ms-filter: "progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?= wp_get_attachment_url(get_field('bg_image')) ?>', sizingMethod='scale')";
		<? elseif($bg_type == 'gradient'): ?>
			<? $type = get_field('bg_gradient_type'); ?>
			<? $type_inverse = (($type == 'left')? 'right': (($type == 'top')? 'bottom': '')); ?>
			<? $type_absolute_1 = (($type == 'left')? $type.' top': (($type == 'top')? 'left '.$type: '')); ?>
			<? $type_absolute_2 = (($type == 'left')? $type_inverse.' top': (($type == 'top')? 'left '.$type_inverse: '')); ?>
			<? $type_number = (($type == 'left')? 1: 0); ?>
			<? $start = get_field('bg_gradient_start'); ?>
			<? $stop = get_field('bg_gradient_stop'); ?>
			<? if($type == 'radial'): ?>
				background: <?= $start ?>; /* Old browsers */
				background: -moz-radial-gradient(center, ellipse cover,  <?= $start ?> 0%, <?= $stop ?> 100%); /* FF3.6+ */
				background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(0%,<?= $start ?>), color-stop(100%,<?= $stop ?>)); /* Chrome,Safari4+ */
				background: -webkit-radial-gradient(center, ellipse cover,  <?= $start ?> 0%,<?= $stop ?> 100%); /* Chrome10+,Safari5.1+ */
				background: -o-radial-gradient(center, ellipse cover,  <?= $start ?> 0%,<?= $stop ?> 100%); /* Opera 12+ */
				background: -ms-radial-gradient(center, ellipse cover,  <?= $start ?> 0%,<?= $stop ?> 100%); /* IE10+ */
				background: radial-gradient(ellipse at center,  <?= $start ?> 0%,<?= $stop ?> 100%); /* W3C */
				filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='<?= $start ?>', endColorstr='<?= $stop ?>',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
			<? else: ?>
				background: <?= $start ?>; /* Old browsers */
				background: -moz-linear-gradient(<?= $type ?>,  <?= $start ?> 0%, <?= $stop ?> 100%); /* FF3.6+ */
				background: -webkit-gradient(linear, <?= $type_absolute_1 ?>, <?= $type_absolute_2 ?>, color-stop(0%,<?= $start ?>), color-stop(100%,<?= $stop ?>)); /* Chrome,Safari4+ */
				background: -webkit-linear-gradient(<?= $type ?>,  <?= $start ?> 0%,<?= $stop ?> 100%); /* Chrome10+,Safari5.1+ */
				background: -o-linear-gradient(<?= $type ?>,  <?= $start ?> 0%,<?= $stop ?> 100%); /* Opera 11.10+ */
				background: -ms-linear-gradient(<?= $type ?>,  <?= $start ?> 0%,<?= $stop ?> 100%); /* IE10+ */
				background: linear-gradient(to <?= $type_inverse ?>,  <?= $start ?> 0%,<?= $stop ?> 100%); /* W3C */
				filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='<?= $start ?>', endColorstr='<?= $stop ?>',GradientType=<?= $type_number ?> ); /* IE6-9 */
			<? endif; ?>
		<? endif; ?>
	}
</style>