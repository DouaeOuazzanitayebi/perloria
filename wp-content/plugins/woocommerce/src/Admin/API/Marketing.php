<?php
/**
 * REST API Marketing Controller
 *
 * Handles requests to /marketing.
 */

namespace Automattic\WooCommerce\Admin\API;

use Automattic\WooCommerce\Admin\PluginsHelper;
use Automattic\WooCommerce\Internal\Admin\Marketing\MarketingSpecs;
use Automattic\WooCommerce\Admin\Features\MarketingRecommendations\Init as MarketingRecommendationsInit;

defined( 'ABSPATH' ) || exit;

/**
 * Marketing Controller.
 *
 * @internal
 * @extends WC_REST_Data_Controller
 */
class Marketing extends \WC_REST_Data_Controller {

	/**
	 * Endpoint namespace.
	 *
	 * @var string
	 */
	protected $namespace = 'wc-admin';

	/**
	 * Route base.
	 *
	 * @var string
	 */
	protected $rest_base = 'marketing';

	/**
	 * Register routes.
	 */
	public function register_routes() {
		register_rest_route(
			$this->namespace,
			'/' . $this->rest_base . '/recommended',
			array(
				array(
					'methods'             => \WP_REST_Server::READABLE,
					'callback'            => array( $this, 'get_recommended_plugins' ),
					'permission_callback' => array( $this, 'get_recommended_plugins_permissions_check' ),
					'args'                => array(
						'per_page' => $this->get_collection_params()['per_page'],
						'category' => array(
							'type'              => 'string',
							'validate_callback' => 'rest_validate_request_arg',
							'sanitize_callback' => 'sanitize_title_with_dashes',
						),
					),
				),
				'schema' => array( $this, 'get_public_item_schema' ),
			)
		);

		register_rest_route(
			$this->namespace,
			'/' . $this->rest_base . '/knowledge-base',
			array(
				array(
					'methods'             => \WP_REST_Server::READABLE,
					'callback'            => array( $this, 'get_knowledge_base_posts' ),
					'permission_callback' => array( $this, 'get_items_permissions_check' ),
					'args'                => array(
						'category' => array(
							'type'              => 'string',
							'validate_callback' => 'rest_validate_request_arg',
							'sanitize_callback' => 'sanitize_title_with_dashes',
						),
					),
				),
				'schema' => array( $this, 'get_public_item_schema' ),
			)
		);
<<<<<<< HEAD

		register_rest_route(
			$this->namespace,
			'/' . $this->rest_base . '/misc-recommendations',
			array(
				array(
					'methods'             => \WP_REST_Server::READABLE,
					'callback'            => array( $this, 'get_misc_recommendations' ),
					'permission_callback' => array( $this, 'get_recommended_plugins_permissions_check' ),
				),
				'schema' => array( $this, 'get_public_item_schema' ),
			)
		);
=======
>>>>>>> 8d244dd10d2e32e461d508a54a2cfd79fc236c90
	}

	/**
	 * Check whether a given request has permission to install plugins.
	 *
	 * @param  WP_REST_Request $request Full details about the request.
	 * @return WP_Error|boolean
	 */
	public function get_recommended_plugins_permissions_check( $request ) {
		if ( ! current_user_can( 'install_plugins' ) ) {
			return new \WP_Error( 'woocommerce_rest_cannot_update', __( 'Sorry, you cannot manage plugins.', 'woocommerce' ), array( 'status' => rest_authorization_required_code() ) );
		}

		return true;
	}


	/**
	 * Return installed marketing extensions data.
	 *
	 * @param \WP_REST_Request $request Request data.
	 *
	 * @return \WP_Error|\WP_REST_Response
	 */
	public function get_recommended_plugins( $request ) {
		// Default to marketing category (if no category set).
		$category      = ( ! empty( $request->get_param( 'category' ) ) ) ? $request->get_param( 'category' ) : 'marketing';
		$all_plugins   = MarketingRecommendationsInit::get_recommended_plugins();
		$valid_plugins = [];
		$per_page      = $request->get_param( 'per_page' );

		foreach ( $all_plugins as $plugin ) {

			// default to marketing if 'categories' is empty on the plugin object (support for legacy api while testing).
			$plugin_categories = ( ! empty( $plugin['categories'] ) ) ? $plugin['categories'] : [ 'marketing' ];

			if ( ! PluginsHelper::is_plugin_installed( $plugin['plugin'] ) && in_array( $category, $plugin_categories, true ) ) {
				$valid_plugins[] = $plugin;
			}
		}

		return rest_ensure_response( array_slice( $valid_plugins, 0, $per_page ) );
	}

	/**
	 * Return installed marketing extensions data.
	 *
	 * @param \WP_REST_Request $request Request data.
	 *
	 * @return \WP_Error|\WP_REST_Response
	 */
	public function get_knowledge_base_posts( $request ) {
		/**
		 * MarketingSpecs class.
		 *
		 * @var MarketingSpecs $marketing_specs
		 */
		$marketing_specs = wc_get_container()->get( MarketingSpecs::class );

		$category = $request->get_param( 'category' );
		return rest_ensure_response( $marketing_specs->get_knowledge_base_posts( $category ) );
	}
<<<<<<< HEAD

	/**
	 * Return misc recommendations.
	 *
	 * @param \WP_REST_Request $request Request data.
	 *
	 * @since 9.5.0
	 *
	 * @return \WP_Error|\WP_REST_Response
	 */
	public function get_misc_recommendations( $request ) {
		$misc_recommendations = MarketingRecommendationsInit::get_misc_recommendations();

		return rest_ensure_response( $misc_recommendations );
	}
=======
>>>>>>> 8d244dd10d2e32e461d508a54a2cfd79fc236c90
}
