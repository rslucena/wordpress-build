<?php

if( function_exists('acf_add_options_page') ) {

    acf_add_options_sub_page(array(
        'page_title' 	=> 'Logo',
        'menu_title'	=> 'Logo',
        'parent_slug'	=> 'themes.php',
    ));

	acf_add_options_sub_page(array(
        'page_title' 	=> 'Banner',
        'menu_title'	=> 'Banner',
        'parent_slug'	=> 'themes.php',
    ));

    acf_add_options_sub_page(array(
        'page_title' 	=> 'SEO',
        'menu_title'	=> 'SEO',
        'parent_slug'	=> 'themes.php',
    ));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Erro 404',
		'menu_title'	=> 'Erro 404',
		'parent_slug'	=> 'themes.php',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Ad Manager',
		'menu_title'	=> 'Ad Manager',
		'parent_slug'	=> 'themes.php',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Rodapé',
		'menu_title'	=> 'Rodapé',
		'parent_slug'	=> 'themes.php',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Single',
		'menu_title'	=> 'Single',
		'parent_slug'	=> 'themes.php',
	));

}


##LOGO

if( function_exists('acf_add_local_field_group') ):

	##LOGO
    acf_add_local_field_group(array (
        'key' => 'group_59ccf36e3f33d',
        'title' => 'Logo',
        'fields' => array (
            array (
                'key' => 'field_59ccf373f4bf6',
                'label' => 'PNG',
                'name' => 'png_',
                'type' => 'image',
                'instructions' => '',
                'required' => 1,
                'conditional_logic' => 0,
                'wrapper' => array (
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'return_format' => 'url',
                'preview_size' => 'full',
                'library' => 'all',
                'min_width' => '',
                'min_height' => '',
                'min_size' => '',
                'max_width' => '',
                'max_height' => '',
                'max_size' => '',
                'mime_types' => 'png',
            ),
        ),
        'location' => array (
            array (
                array (
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'acf-options-logo',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => array (
            0 => 'permalink',
            1 => 'the_content',
            2 => 'excerpt',
            3 => 'custom_fields',
            4 => 'discussion',
            5 => 'comments',
            6 => 'revisions',
            7 => 'slug',
            8 => 'author',
            9 => 'format',
            10 => 'page_attributes',
            11 => 'featured_image',
            12 => 'categories',
            13 => 'tags',
            14 => 'send-trackbacks',
        ),
        'active' => 1,
        'description' => '',
    ));

	##BANNER
	acf_add_local_field_group(array(
		'key' => 'group_5c8800a665691',
		'title' => 'Repetidor',
		'fields' => array(
			array(
				'key' => 'field_5c8800af63cee',
				'label' => 'Itens',
				'name' => 'itens_banners',
				'type' => 'repeater',
				'instructions' => '',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'collapsed' => '',
				'min' => 0,
				'max' => 0,
				'layout' => 'block',
				'button_label' => 'Adicionar outro item',
				'sub_fields' => array(
					array(
						'key' => 'field_5c88010d63cf3',
						'label' => 'Botão',
						'name' => 'botao_banner',
						'type' => 'text',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '33',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'maxlength' => '',
					),
					array(
						'key' => 'field_5c88010063cf2',
						'label' => 'Link',
						'name' => 'link_banner',
						'type' => 'text',
						'instructions' => '',
						'required' => 1,
						'conditional_logic' => array(
							array(
								array(
									'field' => 'field_5c88010d63cf3',
									'operator' => '!=empty',
								),
							),
						),
						'wrapper' => array(
							'width' => '33',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'maxlength' => '',
					),
					array(
						'key' => 'field_5ca21018c97fa',
						'label' => 'Externo',
						'name' => 'externo_banner',
						'type' => 'true_false',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '33',
							'class' => '',
							'id' => '',
						),
						'message' => '',
						'default_value' => 0,
						'ui' => 0,
						'ui_on_text' => '',
						'ui_off_text' => '',
					),
					array(
						'key' => 'field_5c8800d463cf0',
						'label' => 'Título',
						'name' => 'titulo_banner',
						'type' => 'text',
						'instructions' => '',
						'required' => 1,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'maxlength' => '',
					),
					array(
						'key' => 'field_5c8800bd63cef',
						'label' => 'Imagem',
						'name' => 'imagem_banner',
						'type' => 'image',
						'instructions' => '',
						'required' => 1,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '30',
							'class' => '',
							'id' => '',
						),
						'return_format' => 'url',
						'preview_size' => 'full',
						'library' => 'all',
						'min_width' => '',
						'min_height' => '',
						'min_size' => '',
						'max_width' => '',
						'max_height' => '',
						'max_size' => '',
						'mime_types' => 'jpg',
						'default_value' => '',
					),
					array(
						'key' => 'field_5c8800e163cf1',
						'label' => 'Descrição',
						'name' => 'descricao_banner',
						'type' => 'textarea',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '70',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'placeholder' => '',
						'maxlength' => '',
						'rows' => 2,
						'new_lines' => 'br',
					),
				),
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'options_page',
					'operator' => '==',
					'value' => 'acf-options-banner',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => array(
			0 => 'permalink',
			1 => 'the_content',
			2 => 'excerpt',
			3 => 'discussion',
			4 => 'comments',
			5 => 'revisions',
			6 => 'slug',
			7 => 'author',
			8 => 'format',
			9 => 'page_attributes',
			10 => 'featured_image',
			11 => 'categories',
			12 => 'tags',
			13 => 'send-trackbacks',
		),
		'active' => true,
		'description' => 'BANNER',
	));

	##SEO
	if( function_exists('acf_add_local_field_group') ):

	    acf_add_local_field_group(array (
	        'key' => 'group_58e19357e60b7',
	        'title' => 'Itens',
	        'fields' => array (
	            array (
	                'key' => 'field_58e19378bb9c1',
	                'label' => 'Descriçao',
	                'name' => 'description_seo',
	                'type' => 'textarea',
	                'instructions' => '',
	                'required' => 1,
	                'conditional_logic' => 0,
	                'wrapper' => array (
	                    'width' => '',
	                    'class' => '',
	                    'id' => '',
	                ),
	                'default_value' => '',
	                'placeholder' => '',
	                'maxlength' => 200,
	                'rows' => 5,
	                'new_lines' => '',
	            ),
	            array (
	                'key' => 'field_58e1938fbb9c2',
	                'label' => 'Keywords',
	                'name' => 'keywords_seo',
	                'type' => 'textarea',
	                'instructions' => 'Separated by \',\'',
	                'required' => 0,
	                'conditional_logic' => 0,
	                'wrapper' => array (
	                    'width' => '',
	                    'class' => '',
	                    'id' => '',
	                ),
	                'default_value' => '',
	                'placeholder' => '',
	                'maxlength' => '',
	                'rows' => 4,
	                'new_lines' => '',
	            ),
	            array (
	                'key' => 'field_58e19591bb9c4',
	                'label' => 'Imagem de Destaque',
	                'name' => 'image_seo',
	                'type' => 'image',
	                'instructions' => '',
	                'required' => 1,
	                'conditional_logic' => 0,
	                'wrapper' => array (
	                    'width' => '',
	                    'class' => '',
	                    'id' => '',
	                ),
	                'return_format' => 'url',
	                'preview_size' => 'full',
	                'library' => 'all',
	                'min_width' => '',
	                'min_height' => '',
	                'min_size' => '',
	                'max_width' => '',
	                'max_height' => '',
	                'max_size' => '',
	                'mime_types' => 'jpg',
	            ),
	            array (
	                'key' => 'field_58e19602bb9c5',
	                'label' => 'FACEBOOK',
	                'name' => '',
	                'type' => 'tab',
	                'instructions' => '',
	                'required' => 0,
	                'conditional_logic' => 0,
	                'wrapper' => array (
	                    'width' => '',
	                    'class' => '',
	                    'id' => '',
	                ),
	                'placement' => 'left',
	                'endpoint' => 0,
	            ),
	            array (
	                'key' => 'field_58e19616bb9c6',
	                'label' => 'Admin da Página',
	                'name' => 'admin_page_facebook',
	                'type' => 'text',
	                'instructions' => 'Facebook numeric ID',
	                'required' => 0,
	                'conditional_logic' => 0,
	                'wrapper' => array (
	                    'width' => '',
	                    'class' => '',
	                    'id' => '',
	                ),
	                'default_value' => '',
	                'placeholder' => '',
	                'prepend' => '',
	                'append' => '',
	                'maxlength' => '',
	            ),
	            array (
	                'key' => 'field_58e19718bb9c9',
	                'label' => 'Twitter',
	                'name' => '',
	                'type' => 'tab',
	                'instructions' => '',
	                'required' => 0,
	                'conditional_logic' => 0,
	                'wrapper' => array (
	                    'width' => '',
	                    'class' => '',
	                    'id' => '',
	                ),
	                'placement' => 'left',
	                'endpoint' => 0,
	            ),
	            array (
	                'key' => 'field_58e19723bb9ca',
	                'label' => 'User Admin',
	                'name' => 'admin_page_twitter',
	                'type' => 'text',
	                'instructions' => '@xxxx',
	                'required' => 0,
	                'conditional_logic' => 0,
	                'wrapper' => array (
	                    'width' => '',
	                    'class' => '',
	                    'id' => '',
	                ),
	                'default_value' => '',
	                'placeholder' => '',
	                'prepend' => '',
	                'append' => '',
	                'maxlength' => '',
	            ),
	            array (
	                'key' => 'field_58e197f3bb9cb',
	                'label' => 'Google +',
	                'name' => '',
	                'type' => 'tab',
	                'instructions' => '',
	                'required' => 0,
	                'conditional_logic' => 0,
	                'wrapper' => array (
	                    'width' => '',
	                    'class' => '',
	                    'id' => '',
	                ),
	                'placement' => 'left',
	                'endpoint' => 0,
	            ),
	            array (
	                'key' => 'field_58e197ffbb9cc',
	                'label' => 'Autor',
	                'name' => 'author_profile_google_',
	                'type' => 'url',
	                'instructions' => 'Link Posts',
	                'required' => 0,
	                'conditional_logic' => 0,
	                'wrapper' => array (
	                    'width' => '',
	                    'class' => '',
	                    'id' => '',
	                ),
	                'default_value' => '',
	                'placeholder' => '',
	            ),
	            array (
	                'key' => 'field_58e19819bb9cd',
	                'label' => 'Profile',
	                'name' => 'page_profile_google_',
	                'type' => 'url',
	                'instructions' => 'Profile link',
	                'required' => 0,
	                'conditional_logic' => 0,
	                'wrapper' => array (
	                    'width' => '',
	                    'class' => '',
	                    'id' => '',
	                ),
	                'default_value' => '',
	                'placeholder' => '',
	            ),
	        ),
	        'location' => array (
	            array (
	                array (
	                    'param' => 'options_page',
	                    'operator' => '==',
	                    'value' => 'acf-options-seo',
	                ),
	            ),
	        ),
	        'menu_order' => 0,
	        'position' => 'normal',
	        'style' => 'default',
	        'label_placement' => 'top',
	        'instruction_placement' => 'label',
	        'hide_on_screen' => '',
	        'active' => 1,
	        'description' => 'SEO',
	    ));

	endif;

	##CUSTOM SEO POST
	if( function_exists('acf_add_local_field_group') ):
		acf_add_local_field_group(array (
			'key' => 'group_59de524a9e80d',
			'title' => 'Imagens de Destaque',
			'fields' => array (
				array (
					'key' => 'field_59de525390c6f',
					'label' => 'SEO/JPG',
					'name' => 'png_seo_thumb',
					'type' => 'image',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'return_format' => 'url',
					'preview_size' => 'full',
					'library' => 'all',
					'min_width' => '',
					'min_height' => '',
					'min_size' => '',
					'max_width' => '',
					'max_height' => '',
					'max_size' => '',
					'mime_types' => 'jpg',
				),
				array (
					'key' => 'field_61e602f3c0c6f',
					'label' => 'CAPA/JPG',
					'name' => 'png_dest_thumb',
					'type' => 'image',
					'instructions' => '',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'return_format' => 'url',
					'preview_size' => 'full',
					'library' => 'all',
					'min_width' => '',
					'min_height' => '',
					'min_size' => '',
					'max_width' => '',
					'max_height' => '',
					'max_size' => '',
					'mime_types' => 'jpg',
				),
			),
			'location' => array (
				array (
					array (
						'param' => 'post_type',
						'operator' => '==',
						'value' => 'post',
					),
				),
			),
			'menu_order' => 99,
			'position' => 'side',
			'style' => 'default',
			'label_placement' => 'top',
			'instruction_placement' => 'label',
			'hide_on_screen' => array( 0 => 'featured_image'),
			'active' => 1,
			'description' => 'IMAGENS DE DESTAQUE',
		));
	endif;

	##ERRO404
	if( function_exists('acf_add_local_field_group') ):

		acf_add_local_field_group(array (
			'key' => 'group_59d635ec45c18',
			'title' => 'Informações',
			'fields' => array (
				array (
					'key' => 'field_59d635f56e6fc',
					'label' => 'Título',
					'name' => 'titulo_erro404',
					'type' => 'text',
					'instructions' => '',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array (
					'key' => 'field_59d6360c6e6fd',
					'label' => 'Descrição',
					'name' => 'descricao_erro404',
					'type' => 'text',
					'instructions' => '',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array (
					'key' => 'field_59d636196e6fe',
					'label' => 'Imagem',
					'name' => 'imagem_erro404',
					'type' => 'image',
					'instructions' => '',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'return_format' => 'url',
					'preview_size' => 'full',
					'library' => 'all',
					'min_width' => '',
					'min_height' => '',
					'min_size' => '',
					'max_width' => '',
					'max_height' => '',
					'max_size' => '',
					'mime_types' => '',
				),
			),
			'location' => array (
				array (
					array (
						'param' => 'options_page',
						'operator' => '==',
						'value' => 'acf-options-erro-404',
					),
				),
			),
			'menu_order' => 0,
			'position' => 'normal',
			'style' => 'default',
			'label_placement' => 'top',
			'instruction_placement' => 'label',
			'hide_on_screen' => array (
				0 => 'permalink',
				1 => 'the_content',
				2 => 'excerpt',
				3 => 'custom_fields',
				4 => 'discussion',
				5 => 'comments',
				6 => 'revisions',
				7 => 'slug',
				8 => 'author',
				9 => 'format',
				10 => 'page_attributes',
				11 => 'featured_image',
				12 => 'categories',
				13 => 'tags',
				14 => 'send-trackbacks',
			),
			'active' => 1,
			'description' => 'ERRO 404',
		));

	endif;

	##SET DEFAULT IMAGE
	add_action('acf/render_field_settings/type=image', function ($field) {
		acf_render_field_setting( $field, array(
			'label'			=> 'Imagem padrão',
			'instructions'		=> 'Aparece ao criar uma nova postagem',
			'type'			=> 'image',
			'name'			=> 'default_value',
		));
	}

	);

endif;
