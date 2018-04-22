<?php

$flags = get_field('country_flags', 'option');

foreach ( $flags as $flag ) {
	d($flag); ?>


	<p><button class="button" data-open="<?php echo $flag['slug']; ?>">Open <?php echo $flag['name']; ?></button></p>

	<div class="reveal wider-width" id="<?php echo $flag['slug']; ?>" data-reveal>
		<h1><?php echo $flag['name']; ?></h1>
		<img src="<?php echo $flag['image']['url']; ?>" />
		<button class="close-button" data-close aria-label="Close modal" type="button">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>


<?php } ?>