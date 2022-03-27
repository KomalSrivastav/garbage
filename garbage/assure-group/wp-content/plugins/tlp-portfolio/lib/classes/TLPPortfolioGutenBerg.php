<?php
if (!defined('WPINC')) {
    die;
}
// check pro feature
if ( !class_exists( 'TLPPortfolioGutenBerg' ) && !class_exists( 'TLPPortfolioGutenBurg' ) ):

    class TLPPortfolioGutenBerg
    {
        protected $version;

        function __construct() {
            $this->version = (defined('WP_DEBUG') && WP_DEBUG) ? time() : TLP_PORTFOLIO_VERSION;
            add_action('enqueue_block_assets', array($this, 'block_assets'));
            add_action('enqueue_block_editor_assets', array($this, 'block_editor_assets'));
            if (function_exists('register_block_type')) {
                register_block_type('rt-portfolio/tlp-portfolio-pro', array(
                    'render_callback' => array($this, 'render_shortcode_pro'),
                ));
            }
        }

        
		static function render_shortcode_pro( $atts ){
			if(!empty($atts['gridId']) && $id = absint($atts['gridId'])){
				return do_shortcode( '[tlpportfolio id="' . $id . '"]' );
			}
		}


        function block_assets() {
            wp_enqueue_style('wp-blocks');
        }

        function block_editor_assets() {
            // Scripts.
            wp_enqueue_script(
                'rt-tlp-portfolio-gb-block-js',
                TLPportfolio()->assetsUrl . "js/tlp-portfolio-blocks.min.js",
                array('wp-blocks', 'wp-i18n', 'wp-element'),
                $this->version,
                true
            );
            wp_localize_script('rt-tlp-portfolio-gb-block-js', 'rtPortfolio', array(
                'layout'      => TLPportfolio()->oldScLayouts(),
                'column'      => TLPportfolio()->scColumns(),
                'orderby'     => TLPportfolio()->scOrderBy(),
                'order'       => TLPportfolio()->scOrder(),
                'alignments'  => TLPportfolio()->scAlignment(),
                'fontWeights' => TLPportfolio()->scTextWeight(),
                'fontSizes'   => TLPportfolio()->scFontSize(),
                'cats'        => TLPportfolio()->getAllPortFolioCategoryList(),
				'short_codes' => TLPportfolio()->get_shortCode_list(),
                'icon'        => TLPportfolio()->assetsUrl . 'images/portfolio.png',
            ));
            wp_enqueue_style('wp-edit-blocks');
        }
    }

endif;