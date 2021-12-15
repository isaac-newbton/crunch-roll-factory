<?php
define('ACF_PATH', get_stylesheet_directory() . '/inc/plugins/advanced-custom-fields-pro/');
define('ACF_URL', get_stylesheet_directory_uri() . '/inc/plugins/advanced-custom-fields-pro/');

include_once ACF_PATH . 'acf.php';

function aca_acf_settings_url($url){
	return ACF_URL;
}
add_filter('acf_settings_url', 'aca_acf_settings_url');

if(function_exists('acf_add_local_field_group')){
	acf_add_local_field_group([
		'key'=>'group_product',
		'title'=>'Product Options',
		'fields'=>[
			[
				'key'=>'field_button_title',
				'label'=>'Button Title',
				'name'=>'button_title',
				'type'=>'text'
			],
			[
				'key'=>'field_background',
				'label'=>'Background',
				'name'=>'background',
				'type'=>'image',
				'return_format'=>'url',
				'preview_size'=>'medium',
				'library'=>'all'
			],
			[
				'key'=>'field_bottom_image',
				'label'=>'Bottom Image (Background)',
				'name'=>'bottom_image',
				'type'=>'image',
				'return_format'=>'url',
				'preview_size'=>'medium',
				'library'=>'all'
			],
			[
				'key'=>'field_left_image',
				'label'=>'Left Image (Background)',
				'name'=>'left_image',
				'type'=>'image',
				'return_format'=>'url',
				'preview_size'=>'medium',
				'library'=>'all'
			],
			[
				'key'=>'field_right_image',
				'label'=>'Right Image (Background)',
				'name'=>'right_image',
				'type'=>'image',
				'return_format'=>'url',
				'preview_size'=>'medium',
				'library'=>'all'
			],
			[
				'key'=>'field_package_front',
				'label'=>'Package (Front)',
				'name'=>'package_front',
				'type'=>'image',
				'return_format'=>'url',
				'preview_size'=>'medium',
				'library'=>'all'
			],
			[
				'key'=>'field_package_back',
				'label'=>'Package (Back)',
				'name'=>'package_back',
				'type'=>'image',
				'return_format'=>'url',
				'preview_size'=>'medium',
				'library'=>'all'
			],
			[
				'key'=>'field_ingredients',
				'label'=>'Ingredients',
				'name'=>'ingredients',
				'type'=>'wysiwyg',
				'toolbar'=>'basic',
				'media_upload'=>false
			],
			[
				'key'=>'field_heating_instructions',
				'label'=>'Heating Instructions',
				'name'=>'heating_instructions',
				'type'=>'wysiwyg',
				'toolbar'=>'basic',
				'media_upload'=>false
			],
			[
				'key'=>'field_heating_instructions_air_fryer',
				'label'=>'Heating Instructions (Air Fryer)',
				'name'=>'heating_instructions_air_fryer',
				'type'=>'wysiwyg',
				'toolbar'=>'basic',
				'media_upload'=>false
			],
			[
				'key'=>'field_heating_instructions_oven',
				'label'=>'Heating Instructions (Oven)',
				'name'=>'heating_instructions_oven',
				'type'=>'wysiwyg',
				'toolbar'=>'basic',
				'media_upload'=>false
			],
			[
				'key'=>'field_heating_instructions_deep_fryer',
				'label'=>'Heating Instructions (Deep Fryer)',
				'name'=>'heating_instructions_deep_fryer',
				'type'=>'wysiwyg',
				'toolbar'=>'basic',
				'media_upload'=>false
			],
			[
				'key'=>'field_opener_button_color',
				'label'=>'Opener Button Color',
				'name'=>'opener_button_color',
				'type'=>'color_picker'
			],
			[
				'key'=>'field_opener_background_color',
				'label'=>'Opener Background Color',
				'name'=>'opener_background_color',
				'type'=>'color_picker'
			]
		],
		'location'=>[
			[
				[
					'param'=>'post_type',
					'operator'=>'==',
					'value'=>'product'
				]
			]
		],
		'position'=>'acf_after_title',
		'active'=>true
	]);

	acf_add_local_field_group([
		'key'=>'group_about',
		'title'=>'About Options',
		'fields'=>[
			[
				'key'=>'field_our_product_content',
				'label'=>'Our Product',
				'name'=>'our_product_content',
				'type'=>'wysiwyg',
			],
			[
				'key'=>'field_our_product_thumbnail',
				'label'=>'Our Product Thumbnail',
				'name'=>'our_product_thumbnail',
				'type'=>'image',
				'return_format'=>'array',
				'preview_size'=>'medium',
				'library'=>'all',
			],
			[
				'key'=>'field_our_product_video',
				'label'=>'Our Product Video',
				'name'=>'our_product_video',
				'type'=>'url',
			],
			[
				'key'=>'field_our_past_content',
				'label'=>'Our Past',
				'name'=>'our_past_content',
				'type'=>'wysiwyg',
			],
			[
				'key'=>'field_our_past_mobile_image',
				'label'=>'Our Past Image (Mobile)',
				'name'=>'our_past_mobile_image',
				'type'=>'image',
				'return_format'=>'array',
				'preview_size'=>'medium',
				'library'=>'all',
			],
			[
				'key'=>'field_our_past_left_image',
				'label'=>'Our Past Image (Left)',
				'name'=>'our_past_left_image',
				'type'=>'image',
				'return_format'=>'array',
				'preview_size'=>'medium',
				'library'=>'all',
			],
			[
				'key'=>'field_our_past_right_image',
				'label'=>'Our Past Image (Right)',
				'name'=>'our_past_right_image',
				'type'=>'image',
				'return_format'=>'array',
				'preview_size'=>'medium',
				'library'=>'all',
			],
			[
				'key'=>'field_our_present_content',
				'label'=>'Our Present',
				'name'=>'our_present_content',
				'type'=>'wysiwyg',
			],
			[
				'key'=>'field_our_present_image',
				'label'=>'Our Present Image',
				'name'=>'our_present_image',
				'type'=>'image',
				'return_format'=>'array',
				'preview_size'=>'medium',
				'library'=>'all',
			],
			[
				'key'=>'field_our_mission_content',
				'label'=>'Our Mission',
				'name'=>'our_mission_content',
				'type'=>'wysiwyg',
			],
		],
		'location'=>[
			[
				[
					'param'=>'page_template',
					'operator'=>'==',
					'value'=>'page_about.php',
				],
			],
		],
		'position'=>'acf_after_title',
		'active'=>true,
	]);

	acf_add_local_field_group([
		'key'=>'group_foodservice',
		'title'=>'Foodservice Options',
		'fields'=>[
			[
				'key'=>'field_background',
				'label'=>'Background',
				'name'=>'background',
				'type'=>'image',
				'return_format'=>'url',
				'preview_size'=>'medium',
				'library'=>'all',
			],
			[
				'key'=>'field_products',
				'label'=>'Products',
				'name'=>'products',
				'type'=>'repeater',
				'format'=>'rows',
				'sub_fields'=>[
					[
						'key'=>'field_s_product',
						'label'=>'Product',
						'name'=>'product',
						'type'=>'post_object',
						'post_type'=>['product'],
						'required'=>true,
					],
					[
						'key'=>'field_s_copy',
						'label'=>'Copy',
						'name'=>'copy',
						'type'=>'wysiwyg',
						'required'=>true,
					],
					[
						'key'=>'field_s_image',
						'label'=>'Image',
						'name'=>'image',
						'type'=>'image',
						'return_format'=>'array',
						'required'=>true,
					],
					[
						'key'=>'field_s_background',
						'label'=>'Background',
						'name'=>'background',
						'type'=>'image',
						'return_format'=>'url',
						'required'=>true,
					],
				],
			],
		],	
		'location'=>[
			[
				[
					'param'=>'page_template',
					'operator'=>'==',
					'value'=>'page_foodservice.php',
				],
			],
		],
		'position'=>'acf_after_title',
		'active'=>true,
	]);

	acf_add_local_field_group([
		'key'=>'group_homepage',
		'title'=>'Homepage',
		'fields'=>[
			[
				'key'=>'field_sliders',
				'label'=>'Sliders',
				'name'=>'sliders',
				'type'=>'repeater',
				'layout'=>'block',
				'sub_fields'=>[
					[
						'key'=>'field_image',
						'label'=>'Image',
						'name'=>'image',
						'type'=>'image',
						'return_format'=>'url',
						'preview_size'=>'medium',
						'library'=>'all'
					],
					[
						'key'=>'field_video',
						'label'=>'Video URL',
						'name'=>'video',
						'type'=>'url'
					],
					[
						'key'=>'field_video_type',
						'label'=>'Video Type',
						'name'=>'video_type',
						'type'=>'select',
						'choices'=>[
							'video/mp4'=>'MP4',
							'video/webm'=>'WebM'
						]
					],
					[
						'key'=>'field_link',
						'label'=>'Link',
						'name'=>'link',
						'type'=>'url'
					]
				]
			],
			[
				'key'=>'field_products_banner',
				'label'=>'Products Banner',
				'name'=>'products_banner',
				'type'=>'image',
				'return_format'=>'url',
				'preview_size'=>'medium',
				'library'=>'all'
			],
			[
				'key'=>'field_products_text',
				'label'=>'Products Text',
				'name'=>'products_text',
				'type'=>'wysiwyg',
				'toolbar'=>'basic',
				'media_upload'=>false
			],
			[
				'key'=>'field_heating_instructions',
				'label'=>'Heating Instructions',
				'name'=>'heating_instructions',
				'type'=>'wysiwyg',
				'toolbar'=>'basic',
				'media_upload'=>false
			],
			[
				'key'=>'field_heating_instructions_air_fryer',
				'label'=>'Heating Instructions (Air Fryer)',
				'name'=>'heating_instructions_air_fryer',
				'type'=>'wysiwyg',
				'toolbar'=>'basic',
				'media_upload'=>false
			],
			[
				'key'=>'field_heating_instructions_oven',
				'label'=>'Heating Instructions (Oven)',
				'name'=>'heating_instructions_oven',
				'type'=>'wysiwyg',
				'toolbar'=>'basic',
				'media_upload'=>false
			],
			[
				'key'=>'field_heating_instructions_deep_fryer',
				'label'=>'Heating Instructions (Deep Fryer)',
				'name'=>'heating_instructions_deep_fryer',
				'type'=>'wysiwyg',
				'toolbar'=>'basic',
				'media_upload'=>false
			],
			[
				'key'=>'field_social_feed_background',
				'label'=>'Social Feed Background',
				'name'=>'social_feed_background',
				'type'=>'image',
				'return_format'=>'url',
				'preview_size'=>'medium',
				'library'=>'all'
			]
		],
		'location'=>[
			[
				[
					'param'=>'page_type',
					'operator'=>'==',
					'value'=>'front_page'
				]
			]
		],
		'position'=>'acf_after_title',
		'active'=>true
	]);
}