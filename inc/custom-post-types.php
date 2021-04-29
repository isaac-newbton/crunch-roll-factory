<?php
register_post_type('product', [
	'labels'=>[
		'name'=>'Products',
		'singular_name'=>'Product',
		'add_new_item'=>'Add New Product',
		'edit_item'=>'Edit Product',
		'new_item'=>'New Product',
		'view_item'=>'View Product',
		'view_items'=>'View Products',
		'search_items'=>'Search Products',
		'not_found'=>'No Products found',
		'not_found_in_trash'=>'No Products found in trash',
		'parent_item_colon'=>'Parent Product:',
		'all_items'=>'All Products',
		'archives'=>'Product Archives',
		'attributes'=>'Product Attributes',
		'insert_into_item'=>'Insert into Product',
		'uploaded_to_this_item'=>'Uploaded to this Product',
		'filter_items_list'=>'Filter Products list',
		'items_list_navigation'=>'Products list navigation',
		'items_list'=>'Products list',
		'item_published'=>'Product published',
		'item_published_privately'=>'Product published privately',
		'item_reverted_to_draft'=>'Product reverted to draft',
		'item_scheduled'=>'Product scheduled',
		'item_updated'=>'Product updated'
	],
	'public'=>true,
	'has_archive'=>false,
	'menu_position'=>20,
	'menu_icon'=>'dashicons-food',
	'supports'=>[
		'thumbnail',
		'title',
        'editor',
        'excerpt',
        'page-attributes'
	]
]);