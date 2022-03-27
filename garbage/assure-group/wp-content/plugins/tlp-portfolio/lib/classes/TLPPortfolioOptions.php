<?php
if ( ! class_exists( 'TLPPortfolioOptions' ) ) :

	class TLPPortfolioOptions {


		function scLayoutMetaFields() {
			global $TLPportfolio;
			return array(
				"pfp_layout_type" => array(
                    "type"    => "radio-image",
                    "label"   => esc_html__("Layout type", 'review-schema'),
                    "id"      => "rtpfp-layout-type",
                    "options" => array(
							'grid' => array(
								'title' => 'Grid Layout',
								'demoUrl' => '',
								'img' => $TLPportfolio->assetsUrl . 'images/layout_type_grid.png',
							),
							'isotope' => array(
								'title' => 'Isotop Layout',
								'demoUrl' => '',
								'img' => $TLPportfolio->assetsUrl . 'images/layout_type_isotope.png',
							),
							'carousel' => array(
								'title' => 'Slider Layout',
								'demoUrl' => '',
								'img' => $TLPportfolio->assetsUrl . 'images/layout_type_slider.png',
							),
						)
                ),
				'pfp_layout'    => array(
					'label'   => __( 'Layout', 'tlp-portfolio' ),
					'type'    => 'radio-image',
					'class'   => 'rt-select2',
					'options' => $this->scLayouts(),
				),
				// 'pfp_layout'                    => array(
				// 	'label'   => __( 'Layout', 'tlp-portfolio' ),
				// 	'type'    => 'select',
				// 	'class'   => 'rt-select2',
				// 	'options' => $this->scLayouts(),
				// ),
				'pfp_isotope_filter_taxonomy'   => array(
					'type'        => 'select',
					'label'       => __( "Isotope filter (Selected item) <span style='color:red;'>Pro feature</span>", 'tlp-portfolio' ),
					'holderClass' => 'pfp-isotope-item pfp-hidden',
					'class'       => 'rt-select2',
					'attr'        => 'disabled',
				),
				'pfp_isotope_filter_show_all'   => array(
					'type'        => 'checkbox',
					'label'       => __( "Isotope filter (Show All item) <span style='color:red;'>Pro feature</span>", 'tlp-portfolio' ),
					'holderClass' => 'pfp-isotope-item pfp-hidden',
					'id'          => 'rt-tpg-sc-isotope-filter-show-all',
					'optionLabel' => __( 'Disable', 'tlp-portfolio' ),
					'option'      => 1,
					'attr'        => 'disabled',
				),
				'pfp_isotope_search_filtering'  => array(
                    "type"        => "checkbox",
                    "label"       => "Isotope search filter <span style='color:red;'>Pro feature</span>",
                    'holderClass' => "pfp-isotope-item pfp-hidden",
                    "optionLabel" => 'Enable',
					'option'      => 1,
                    'attr'        => 'disabled'
                ),

				'pfp_carousel_speed'            => array(
					'label'       => __( 'Speed', 'tlp-portfolio' ),
					'holderClass' => 'pfp-hidden pfp-carousel-item',
					'type'        => 'number',
					'default'     => 2000,
					'description' => __( 'Auto play Speed in milliseconds', 'tlp-portfolio' ),
				),
				'pfp_carousel_options'          => array(
					'label'       => __( 'Carousel Options', 'tlp-portfolio' ),
					'holderClass' => 'pfp-hidden pfp-carousel-item',
					'type'        => 'checkbox',
					'multiple'    => true,
					'alignment'   => 'vertical',
					'options'     => $this->owlProperty(),
					'default'     => array( 'autoplay', 'arrows', 'dots', 'responsive', 'infinite' ),
				),
				'pfp_carousel_autoplay_timeout' => array(
					'label'       => __( 'Autoplay timeout', 'tlp-portfolio' ),
					'holderClass' => 'pfp-hidden pfp-carousel-auto-play-timeout',
					'type'        => 'number',
					'default'     => 5000,
					'description' => __( 'Autoplay interval timeout', 'tlp-portfolio' ),
				),
				'pfp_desktop_column'            => array(
					'type'    => 'select',
					'label'   => __( 'Desktop column', 'tlp-portfolio' ),
					'class'   => 'rt-select2',
					'default' => 3,
					'options' => $this->scColumns(),
				),
				'pfp_tab_column'                => array(
					'type'    => 'select',
					'label'   => __( 'Tab column', 'tlp-portfolio' ),
					'class'   => 'rt-select2',
					'default' => 2,
					'options' => $this->scColumns(),
				),
				'pfp_mobile_column'             => array(
					'type'    => 'select',
					'label'   => __( 'Mobile column', 'tlp-portfolio' ),
					'class'   => 'rt-select2',
					'default' => 1,
					'options' => $this->scColumns(),
				),
				'pfp_pagination'                => array(
					'type'        => 'checkbox',
					'label'       => __( 'Pagination', 'tlp-portfolio' ),
					'holderClass' => 'pagination',
					'optionLabel' => __( 'Enable', 'tlp-portfolio' ),
					'option'      => 1,
				),
				'pfp_posts_per_page'            => array(
					'type'        => 'number',
					'label'       => __( 'Display per page', 'tlp-portfolio' ),
					'holderClass' => 'pfp-pagination-item pfp-hidden',
					'default'     => 5,
					'description' => __(
						'If value of Limit setting is not blank (empty), this value should be smaller than Limit value.',
						'tlp-portfolio'
					),
				),
				'pfp_image_size'                => array(
					'type'    => 'select',
					'label'   => __( 'Image Size', 'tlp-portfolio' ),
					'class'   => 'rt-select2',
					'options' => TLPPortfolio()->get_image_sizes(),
				),
				'pfp_custom_image_size'         => array(
					'type'        => 'image_size',
					'label'       => __( 'Custom Image Size', 'tlp-portfolio' ),
					'holderClass' => 'pfp-hidden',
					'description' => __( 'We prefer to upload image larger than your custom image size. <span style="margin-top: 5px; display: block; color: #9A2A2A; font-weight: 400;">Please note that, if you enter image size larger than the actual image iteself, the image sizes will fallback to the full size image.</span>', 'tlp-portfolio' ),
				),
				'pfp_disable_image'             => array(
					'type'        => 'checkbox',
					'label'       => __( 'Disable image', 'tlp-portfolio' ),
					'option'      => 1,
					'optionLabel' => __( 'Disable', 'tlp-portfolio' ),
				),
				'pfp_excerpt_limit'             => array(
					'type'        => 'number',
					'label'       => __( 'Short description limit', 'tlp-portfolio' ),
					'description' => __(
						'Short description limit only integer number is allowed, Leave it blank for full text.',
						'tlp-portfolio'
					),
				),
				'pfp_detail_page_link'          => array(
					'type'        => 'checkbox',
					'label'       => __( 'Detail page link', 'tlp-portfolio' ),
					'optionLabel' => __( 'Enable', 'tlp-portfolio' ),
					'default'     => 1,
					'option'      => 1,
				),
				'pfp_detail_page_link_type'     => array(
					'type'        => 'radio',
					'label'       => __( 'Detail page link type', 'tlp-portfolio' ),
					'default'     => 'inner_link',
					'holderClass' => 'pfp_detail_page_link_type pfp-hidden pfp-detail-page-link-item',
					'alignment'   => 'vertical',
					'options'     => array(
						'inner_link'    => 'Inner Link',
						'external_link' => 'External Link',
					),
				),
				'pfp_link_target'               => array(
					'type'        => 'radio',
					'label'       => __( 'Link Target', 'tlp-portfolio' ),
					'default'     => '_blank',
					'holderClass' => 'pfp_link_target pfp-hidden pfp-detail-page-link-item',
					'alignment'   => 'vertical',
					'options'     => array(
						'_self'  => 'Same Window',
						'_blank' => 'New Window',
					),
				),
				// 'pfp_disable_equal_height'      => array(
				// 	'type'        => 'checkbox',
				// 	'label'       => __( 'Disable equal height', 'tlp-portfolio' ),
				// 	'option'      => 1,
				// 	'optionLabel' => __( 'Disable', 'tlp-portfolio' ),
				// ),
			);
		}

		function scFilterMetaFields() {
			return array(
				'pfp_post__in'          => array(
					'label'       => __( 'Include only', 'tlp-portfolio' ),
					'type'        => 'text',
					'description' => __(
						'List of post IDs to show (comma-separated values, for example: 1,2,3)',
						'tlp-portfolio'
					),
				),
				'pfp_post__not_in'      => array(
					'label'       => __( 'Exclude', 'tlp-portfolio' ),
					'type'        => 'text',
					'description' => __(
						'List of post IDs to show (comma-separated values, for example: 1,2,3)',
						'tlp-portfolio'
					),
				),
				'pfp_limit'             => array(
					'label'       => __( 'Limit', 'tlp-portfolio' ),
					'type'        => 'number',
					'description' => __(
						'The number of posts to show. Set empty to show all found posts.',
						'tlp-portfolio'
					),
				),
				'pfp_categories'        => array(
					'label'       => __( 'Categories', 'tlp-portfolio' ),
					'type'        => 'select',
					'class'       => 'rt-select2',
					'multiple'    => true,
					'description' => __(
						'Select the category you want to filter, Leave it blank for All category',
						'tlp-portfolio'
					),
					'options'     => TLPPortfolio()->getAllPortFolioCategoryList(),
				),
				'pfp_tags'              => array(
					'label'       => __( 'Tags', 'tlp-portfolio' ),
					'type'        => 'select',
					'class'       => 'rt-select2',
					'multiple'    => true,
					'description' => __(
						'Select the category you want to filter, Leave it blank for All category',
						'tlp-portfolio'
					),
					'options'     => TLPPortfolio()->getAllPortFolioTagList(),
				),
				'pfp_taxonomy_relation' => array(
					'label'       => __( 'Taxonomy relation', 'tlp-portfolio' ),
					'type'        => 'select',
					'class'       => 'rt-select2',
					'description' => __(
						'Select this option if you select more than one taxonomy like category and tag, or category , tag and tools',
						'tlp-portfolio'
					),
					'options'     => $this->scTaxonomyRelation(),
				),
				'pfp_order_by'          => array(
					'label'   => __( 'Order By', 'tlp-portfolio' ),
					'type'    => 'select',
					'class'   => 'rt-select2',
					'default' => 'date',
					'options' => $this->scOrderBy(),
				),
				'pfp_order'             => array(
					'label'     => __( 'Order', 'tlp-portfolio' ),
					'type'      => 'radio',
					'options'   => $this->scOrder(),
					'default'   => 'DESC',
					'alignment' => 'vertical',
				),
			);
		}

        function field() {
            return array(
                'name'              => 'Name',
                'short_description' => 'Short description',
                'client_name'       => 'Client Name',
                'project_url'       => 'Project Url',
                'completed_date'    => 'Completed Date',
                'tools'             => 'Tools',
                'categories' 		=> 'Categories',
                'zoom_image'        => 'Zoom Image',
            );
        }

		function scItemDefaultMetaFields() {
            return array(
                'name'              => 'Name',
                'short_description' => 'Short description',
                'zoom_image'        => 'Zoom Image',
            );
        }

		function scItemMetaFields() {
            return array(
                "pfp_item_fields" => array(
                    "type"        => "checkbox",
                    "label"       => __("Field selection", 'tlp-portfolio'),
                    "multiple"    => true,
                    "alignment"   => "vertical",
                    "default"     => array_keys($this->scItemDefaultMetaFields()),
                    "options"     => $this->field(),
                    "description" => __('Check the field which you want to display', 'tlp-portfolio')
                )
            );
        }

		function scStyleFields() {
			return array(
				'pfp_parent_class'            => array(
					'type'        => 'text',
					'label'       => __( 'Parent class', 'tlp-portfolio' ),
					'class'       => 'medium-text',
					'description' => __( 'Parent class for adding custom css', 'tlp-portfolio' ),
				),
				'pfp_primary_color'           => array(
					'type'  => 'colorpicker',
					'label' => __( 'Primary Color', 'tlp-portfolio' ),
					'alpha' => true,
				),
				'pfp_overlay_color'           => array(
					'type'  => 'colorpicker',
					'label' => __( 'Overlay color', 'tlp-portfolio' ),
					'alpha' => true,
				),
				'pfp_button_bg_color'         => array(
					'type'  => 'colorpicker',
					'label' => __( 'Button background color', 'tlp-portfolio' ),
				),
				'pfp_button_hover_bg_color'   => array(
					'type'  => 'colorpicker',
					'label' => __( 'Button hover background color', 'tlp-portfolio' ),
				),
				'pfp_button_active_bg_color'  => array(
					'type'  => 'colorpicker',
					'label' => __( 'Button active background color', 'tlp-portfolio' ),
				),
				'pfp_button_text_color'       => array(
					'type'  => 'colorpicker',
					'label' => __( 'Button text color', 'tlp-portfolio' ),
				),
				'pfp_gutter'                  => array(
					'type'        => 'number',
					'label'       => __( 'Padding', 'tlp-portfolio' ),
					'description' => __( 'Unit will be pixel, No need to give any unit. Only integer value will be valid.<br> Leave it blank for default', 'tlp-portfolio' ),
				),
				'pfp_name_style'              => array(
					'type'  => 'style',
					'label' => __( 'Name / Title', 'tlp-portfolio' ),
				),
				'pfp_name_hover_style'                     => array(
                    'type'  => 'style',
                    'label' => __('Name Hover', 'tlp-portfolio'),
                ),
				'pfp_short_description_style' => array(
					'type'  => 'style',
					'label' => __( 'Short description', 'tlp-portfolio' ),
				),
				'pfp_icon_style'              => array(
					'type'  => 'style',
					'label' => __( 'Icon style', 'tlp-portfolio' ),
				),
				'pfp_meta_style'              => array(
					'type'  => 'style',
					'label' => __( 'Meta style', 'tlp-portfolio' ),
				),
			);
		}

		function imageCropType() {
			return array(
				'soft' => __( 'Soft Crop', 'tlp-portfolio' ),
				'hard' => __( 'Hard Crop', 'tlp-portfolio' ),
			);
		}

		function scTaxonomyRelation() {
			return array(
				'OR'  => 'OR Relation',
				'AND' => 'AND Relation',
			);
		}

		function socialLink() {
			return array(
				'facebook' => 'Facebook',
				'twitter'  => 'Twitter',
				'linkedin' => 'LinkedIn',
			);
		}

		function scColumns() {
			return array(
				1 => '1 Column',
				2 => '2 Column',
				3 => '3 Column',
				4 => '4 Column',
				5 => '5 Column',
				6 => '6 Column',
			);
		}


		function scLayouts() {
			global $TLPportfolio ;
			$layout_root_url = 'https://demo.radiustheme.com/wordpress/plugins/portfolios/';
			return array(
				'layout1' => array(
							'title' => 'Layout 1',
							'layout' => 'grid',
							'demoUrl' => $layout_root_url.'portfolio-layout-1/',
							'img' => $TLPportfolio->assetsUrl . 'images/layout/layout1.png',
						),
				'layout2'   => array(
							'title' => 'Layout 2',
							'layout' => 'grid',
							'demoUrl' => $layout_root_url.'portfolio-layout-2/',
							'img' => $TLPportfolio->assetsUrl . 'images/layout/layout2.png',
						),
				'layout3'   => array(
							'title' => 'Layout 3',
							'layout' => 'grid',
							'demoUrl' => $layout_root_url.'portfolio-layout-3/',
							'img' => $TLPportfolio->assetsUrl . 'images/layout/layout3.png',
						),

				'isotope1'  => array(
							'title' => 'Isotope Layout 1',
							'layout' => 'isotope',
							'demoUrl' => $layout_root_url.'isotope-layout/',
							'img' => $TLPportfolio->assetsUrl . 'images/layout/isotope1.png',
						),
				// isotope2 layout similar like  isotope3 Pro
				'isotope2'  => array(
							'title' => 'Isotope Layout 2',
							'layout' => 'isotope',
							'demoUrl' => $layout_root_url.'isotope-layout-2/',
							'img' => $TLPportfolio->assetsUrl . 'images/layout/isotope2.png',
						),
				'isotope3'  => array(
							'title' => 'Isotope Layout 3',
							'layout' => 'isotope',
							'demoUrl' => $layout_root_url.'isotope-layout-3/',
							'img' => $TLPportfolio->assetsUrl . 'images/layout/isotope3.png',
						),
				'carousel1' => array(
							'title' => 'Carousel Layout 1',
							'layout' => 'carousel',
							'demoUrl' => $layout_root_url.'carousel-layout-1/',
							'img' => $TLPportfolio->assetsUrl . 'images/layout/carousel1.png',
						),

				'carousel2' => array(
							'title' => 'Carousel Layout 2',
							'layout' => 'carousel',
							'demoUrl' => $layout_root_url.'carousel-layout-2/',
							'img' => $TLPportfolio->assetsUrl . 'images/layout/carousel2.png',
						),

				'carousel3' => array(
							'title' => 'Carousel Layout 3',
							'layout' => 'carousel',
							'demoUrl' => $layout_root_url.'carousel-layout-3/',
							'img' => $TLPportfolio->assetsUrl . 'images/layout/carousel3.png',
						),
			);
		}

		function owlProperty() {
			return array(
				'loop'               => __( 'Loop', 'tlp-portfolio' ),
				'autoplay'           => __( 'Auto Play', 'tlp-portfolio' ),
				'autoplayHoverPause' => __( 'Pause on mouse hover', 'tlp-portfolio' ),
				'nav'                => __( 'Nav Button', 'tlp-portfolio' ),
				'dots'               => __( 'Pagination', 'tlp-portfolio' ),
				'auto_height'        => __( 'Auto Height', 'tlp-portfolio' ),
				'lazy_load'          => __( 'Lazy Load', 'tlp-portfolio' ),
				'rtl'                => __( 'Right to left (RTL)', 'tlp-portfolio' ),
			);
		}

		function oldScLayouts() {
			return array(
				1         => 'Layout 1',
				2         => 'Layout 2',
				3         => 'Layout 3',
				// 'layout4'  => 'Layout 4', // Next layout format
				'isotope' => 'Isotope Layout 1',
				'isotope2' => 'Isotope Layout 2',
				'isotope3' => 'Isotope Layout 3',
				'carousel1' => 'Carousel Slider 1',
				'carousel2' => 'Carousel Slider 2',
				'carousel3' => 'Carousel Slider 3',
			);
		}

		function scOrderBy() {
			return array(
				'menu_order' => 'Menu Order',
				'title'      => 'Name',
				'ID'         => 'ID',
				'date'       => 'Date',
			);
		}

		function scOrder() {
			return array(
				'ASC'  => 'Ascending',
				'DESC' => 'Descending',
			);
		}

		function owl_property() {
			return array(
				'auto_play'   => __( 'Auto Play', 'tlp-portfolio' ),
				'navigation'  => __( 'Navigation', 'tlp-portfolio' ),
				'pagination'  => __( 'Pagination', 'tlp-portfolio' ),
				'stop_hover'  => __( 'Stop Hover', 'tlp-portfolio' ),
				'responsive'  => __( 'Responsive', 'tlp-portfolio' ),
				'auto_height' => __( 'Auto Height', 'tlp-portfolio' ),
				'lazy_load'   => __( 'Lazy Load', 'tlp-portfolio' ),
			);
		}

		function scFontSize() {
			$num = array();
			for ( $i = 10; $i <= 50; $i ++ ) {
				$num[ $i ] = $i . 'px';
			}

			return $num;
		}

		function scAlignment() {
			return array(
				'left'    => 'Left',
				'right'   => 'Right',
				'center'  => 'Center',
				'justify' => 'Justify',
			);
		}

		function scTextWeight() {
			return array(
				'normal'  => 'Normal',
				'bold'    => 'Bold',
				'bolder'  => 'Bolder',
				'lighter' => 'Lighter',
				'inherit' => 'Inherit',
				'initial' => 'Initial',
				'unset'   => 'Unset',
				100       => '100',
				200       => '200',
				300       => '300',
				400       => '400',
				500       => '500',
				600       => '600',
				700       => '700',
				800       => '800',
				900       => '900',
			);
		}

		private function isotope_filter_taxonomy() {
			return apply_filters( 'tlp_portfolio_isotope_filter_taxonomy', array_flip( TLPPortfolio()->taxonomies ) );
		}

	}
endif;
