<?php
if ( ! defined( 'WPINC' ) ) {
	die;
}

if ( ! class_exists( 'TLPPortfolioNotice' ) ):

	class TLPPortfolioNotice {
		public function __construct() {
            register_activation_hook( TLP_PORTFOLIO_PLUGIN_ACTIVE_FILE_NAME, [$this, 'rtport_activation_time'] );
            add_action( 'admin_init', [$this, 'rtport_check_installation_time'] );
            add_action( 'admin_init', [__CLASS__, 'rtport_spare_me'], 5 );
        }

		// add plugin activation time
		public static function rtport_activation_time() {
			$get_activation_time = strtotime( "now" );
			add_option( 'rtport_plugin_activation_time', $get_activation_time );
		}

		//check if review notice should be shown or not
		public static function rtport_check_installation_time() {

			// Added Lines Start
			$nobug = get_option( 'rtport_spare_me', "0");

			if ($nobug == "1" || $nobug == "3") {
				return;
			}

			$install_date = get_option( 'rtport_plugin_activation_time' );
			$past_date    = strtotime( '-10 days' );

			$remind_time = get_option( 'rtport_remind_me' );
			$remind_due  = strtotime( '+15 days', $remind_time );
			$now         = strtotime( "now" );

			if ( $now >= $remind_due ) {
				add_action( 'admin_notices', [__CLASS__, 'rtport_display_admin_notice']);
			} else if (($past_date >= $install_date) &&  $nobug !== "2") {
				add_action( 'admin_notices', [__CLASS__, 'rtport_display_admin_notice']);
			}
		}

		/**
		 * Display Admin Notice, asking for a review
		 **/
		public static function rtport_display_admin_notice() {
			// wordpress global variable
			global $pagenow;

			$exclude = [ 'themes.php', 'users.php', 'tools.php', 'options-general.php', 'options-writing.php', 'options-reading.php', 'options-discussion.php', 'options-media.php', 'options-permalink.php', 'options-privacy.php', 'edit-comments.php', 'upload.php', 'media-new.php', 'admin.php', 'import.php', 'export.php', 'site-health.php', 'export-personal-data.php', 'erase-personal-data.php' ];

			if ( ! in_array( $pagenow, $exclude ) ) {
				$dont_disturb = esc_url( add_query_arg( 'rtport_spare_me', '1', self::rtport_current_admin_url() ) );
				$remind_me    = esc_url( add_query_arg( 'rtport_remind_me', '1', self::rtport_current_admin_url() ) );
				$rated        = esc_url( add_query_arg( 'rtport_rated', '1', self::rtport_current_admin_url() ) );
				$reviewurl    = esc_url( 'https://wordpress.org/support/plugin/tlp-portfolio/reviews/?filter=5#new-post' );

				printf( __( '<div class="notice rttss-review-notice rttss-review-notice--extended">
                <div class="rttss-review-notice_content">
                    <h3>Enjoying Portfolio Plugin?</h3>
                    <p>Thank you for choosing Portfolio Plugin. If you have found our plugin useful and makes you smile, please consider giving us a 5-star rating on WordPress.org. It will help us to grow.</p>
                    <div class="rttss-review-notice_actions">
                        <a href="%s" class="rttss-review-button rttss-review-button--cta" target="_blank"><span>⭐ Yes, You Deserve It!</span></a>
                        <a href="%s" class="rttss-review-button rttss-review-button--cta rttss-review-button--outline"><span>😀 Already Rated!</span></a>
                        <a href="%s" class="rttss-review-button rttss-review-button--cta rttss-review-button--outline"><span>🔔 Remind Me Later</span></a>
                        <a href="%s" class="rttss-review-button rttss-review-button--cta rttss-review-button--error rttss-review-button--outline"><span>😐 No Thanks</span></a>
                    </div>
                </div>
            </div>' ), $reviewurl, $rated, $remind_me, $dont_disturb );

				echo '<style>
            .rttss-review-button--cta {
                --e-button-context-color: #4C6FFF;
                --e-button-context-color-dark: #4C6FFF;
                --e-button-context-tint: rgb(75 47 157/4%);
                --e-focus-color: rgb(75 47 157/40%);
            }
            .rttss-review-notice {
                position: relative;
                margin: 5px 20px 5px 2px;
                border: 1px solid #ccd0d4;
                background: #fff;
                box-shadow: 0 1px 4px rgba(0,0,0,0.15);
                font-family: Roboto, Arial, Helvetica, Verdana, sans-serif;
                border-inline-start-width: 4px;
            }
            .rttss-review-notice.notice {
                padding: 0;
            }
            .rttss-review-notice:before {
                position: absolute;
                top: -1px;
                bottom: -1px;
                left: -4px;
                display: block;
                width: 4px;
                background: -webkit-linear-gradient(bottom, #4C6FFF 0%, #6939c6 100%);
                background: linear-gradient(0deg, #4C6FFF 0%, #6939c6 100%);
                content: "";
            }
            .rttss-review-notice_content {
                padding: 20px;
            }
            .rttss-review-notice_actions > * + * {
                margin-inline-start: 8px;
                -webkit-margin-start: 8px;
                -moz-margin-start: 8px;
            }
            .rttss-review-notice p {
                margin: 0;
                padding: 0;
                line-height: 1.5;
            }
            p + .rttss-review-notice_actions {
                margin-top: 1rem;
            }
            .rttss-review-notice h3 {
                margin: 0;
                font-size: 1.0625rem;
                line-height: 1.2;
            }
            .rttss-review-notice h3 + p {
                margin-top: 8px;
            }
            .rttss-review-button {
                display: inline-block;
                padding: 0.4375rem 0.75rem;
                border: 0;
                border-radius: 3px;;
                background: var(--e-button-context-color);
                color: #fff;
                vertical-align: middle;
                text-align: center;
                text-decoration: none;
                white-space: nowrap;
            }
            .rttss-review-button:active {
                background: var(--e-button-context-color-dark);
                color: #fff;
                text-decoration: none;
            }
            .rttss-review-button:focus {
                outline: 0;
                background: var(--e-button-context-color-dark);
                box-shadow: 0 0 0 2px var(--e-focus-color);
                color: #fff;
                text-decoration: none;
            }
            .rttss-review-button:hover {
                background: var(--e-button-context-color-dark);
                color: #fff;
                text-decoration: none;
            }
            .rttss-review-button.focus {
                outline: 0;
                box-shadow: 0 0 0 2px var(--e-focus-color);
            }
            .rttss-review-button--error {
                --e-button-context-color: #d72b3f;
                --e-button-context-color-dark: #ae2131;
                --e-button-context-tint: rgba(215,43,63,0.04);
                --e-focus-color: rgba(215,43,63,0.4);
            }
            .rttss-review-button.rttss-review-button--outline {
                border: 1px solid;
                background: 0 0;
                color: var(--e-button-context-color);
            }
            .rttss-review-button.rttss-review-button--outline:focus {
                background: var(--e-button-context-tint);
                color: var(--e-button-context-color-dark);
            }
            .rttss-review-button.rttss-review-button--outline:hover {
                background: var(--e-button-context-tint);
                color: var(--e-button-context-color-dark);
            }
            </style>';
			}
		}

		protected static function rtport_current_admin_url() {
			$uri = isset( $_SERVER['REQUEST_URI'] ) ? esc_url_raw( wp_unslash( $_SERVER['REQUEST_URI'] ) ) : '';
			$uri = preg_replace( '|^.*/wp-admin/|i', '', $uri );

			if ( ! $uri ) {
				return '';
			}
			return remove_query_arg( [ '_wpnonce', '_wc_notice_nonce', 'wc_db_update', 'wc_db_update_nonce', 'wc-hide-notice' ], admin_url( $uri ) );
		}

		// remove the notice for the user if review already done or if the user does not want to
		public static function rtport_spare_me() {
			if ( isset( $_GET['rtport_spare_me'] ) && ! empty( $_GET['rtport_spare_me'] ) ) {
				$spare_me = $_GET['rtport_spare_me'];
				if ( 1 == $spare_me ) {
					update_option( 'rtport_spare_me', "1" );
				}
			}

			if ( isset( $_GET['rtport_remind_me'] ) && ! empty( $_GET['rtport_remind_me'] ) ) {
				$remind_me = $_GET['rtport_remind_me'];
				if ( 1 == $remind_me ) {
					$get_activation_time = strtotime( "now" );
					update_option( 'rtport_remind_me', $get_activation_time );
					update_option( 'rtport_spare_me', "2" );
				}
			}

			if ( isset( $_GET['rtport_rated'] ) && ! empty( $_GET['rtport_rated'] ) ) {
				$rtport_rated = $_GET['rtport_rated'];
				if ( 1 == $rtport_rated ) {
					update_option( 'rtport_rated', 'yes' );
					update_option( 'rtport_spare_me', "3" );
				}
			}
		}

	}

endif;
