

<?php

$flags = get_field('country_flags', 'option');

foreach ( $flags as $flag ) {

	$flag_id = 'Reveal' . str_replace(array(' ', '+'), '', $flag['name']); ?>

	<div class="reveal wider-width" id="<?php echo $flag_id; ?>" data-reveal>
		<h1><?php echo $flag['name']; ?></h1>
		<img src="<?php echo $flag['image']['url']; ?>" />
		<button class="close-button" data-close aria-label="Close modal" type="button">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>

<?php } ?>