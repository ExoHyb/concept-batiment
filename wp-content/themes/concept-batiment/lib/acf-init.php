<?php

if (function_exists('acf_add_options_page'))
{
	acf_add_options_page(
		array(
			'page_title'  => __('Website settings', 'twoobl'),
			'menu_title'  => 'Réglages site',
			'menu_slug'   => 'twoobl',
			'icon_url'    => 'dashicons-admin-settings',
			'position'    => 2
		)
	);
}
