<?php

if (function_exists('acf_add_options_page'))
{
	acf_add_options_page(
		array(
			'page_title'  => __('Réglages site', 'twoobl'),
			'menu_title'  => 'Réglages site',
			'menu_slug'   => 'reglages_site',
			'icon_url'    => 'dashicons-admin-settings',
			'position'    => 2
		)
	);

	acf_add_options_sub_page(array(
		'title' => __('Settings', 'twoobl'),
		'parent' => 'twoobl'
	));

	acf_add_options_sub_page(array(
		'title' => __('Home', 'twoobl'),
		'parent' => 'twoobl'
	));

	acf_add_options_sub_page(array(
		'title' => __('Footer', 'twoobl'),
		'parent' => 'twoobl'
	));
}
