<?php

namespace Plugin_Name\Admin\Pages;

use Plugin_Name\Admin\Submenu_Page;

class Settings extends Submenu_Page {
	public function render() {
	?>
		<div class="wrap">
			<h2><?php echo __( 'Plugin Name', 'plugin-name' ); ?></h2>

			<?php settings_errors(); ?>

			<!-- Settings inputs goes here. -->
		</div>
	<?php
	}
}
