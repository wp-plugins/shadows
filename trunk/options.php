<?php

function shadows_plugin_options() {
	$curl_shadow_height = get_option('curl_shadow_height');
	$curl_shadow_height = $curl_shadow_height ? $curl_shadow_height : '10px';

	$flat_shadow_height = get_option('flat_shadow_height');
	$flat_shadow_height = $flat_shadow_height ? $flat_shadow_height : '10px';
?>
<div class="wrap">
<h2>Shadows Options</h2>
<form method="post" action="options.php">

<?php wp_nonce_field('update-options'); ?>

<p>It is recommended that you leave the height of the shadows at the default of 10px for best results.</p>

<p>Heights must include units such as px or em.</p>

<table class="form-table">
<tr valign="top">
<th scope="row">Curl shadow height</th>
<td><input type="text" name="curl_shadow_height" value="<?php echo $curl_shadow_height; ?>" /></td>
</tr>
<tr valign="top">
<th scope="row">Curl shadow opacity<br/> (<strong>do not include %</strong>)</th>
<td><input type="text" name="curl_shadow_opacity" value="<?php echo get_option('curl_shadow_opacity'); ?>" /></td>
</tr>
<tr valign="top">
<th scope="row">Flat shadow height</th>
<td><input type="text" name="flat_shadow_height" value="<?php echo $flat_shadow_height; ?>" /></td>
</tr>
<tr valign="top">
<th scope="row">Flat shadow opacity<br/> (<strong>do not include %</strong>)</th>
<td><input type="text" name="flat_shadow_opacity" value="<?php echo get_option('flat_shadow_opacity'); ?>" /></td>
</tr>
</table>

<input type="hidden" name="action" value="update" />
<input type="hidden" name="page_options" value="curl_shadow_height,curl_shadow_opacity,flat_shadow_height,flat_shadow_opacity" />

<p class="submit">
<input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
</p>
</form>
</div>

<?php
}
?>
