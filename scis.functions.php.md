<?php
/**
 * Twenty Twenty-Four functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Twenty Twenty-Four
 * @since Twenty Twenty-Four 1.0
 */

/**
 * Register block styles.
 */




function add_level_id_meta_box() {
    add_meta_box(
        'level_id_meta_box',
        'Level ID',
        'display_level_id_meta_box',
        'product',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'add_level_id_meta_box');

function display_level_id_meta_box($post) {
    $level_id = get_post_meta($post->ID, 'level_id', true);
    ?>
    <label for="level_id_field">Level ID:</label>
    <input required type="number" min="0" id="level_id_field" name="level_id_field" value="<?php echo esc_attr($level_id); ?>">
    <?php
}

function save_level_id_meta_box($post_id) {
    if (isset($_POST['level_id_field'])) {
        update_post_meta($post_id, 'level_id', sanitize_text_field($_POST['level_id_field']));
    }
}
add_action('save_post', 'save_level_id_meta_box');



// in the future must be hook - woocommerce_thankyou
 
add_action( 'woocommerce_checkout_update_order_meta', 'woocommerce_after_order_bridge_code', 10, 1 );
// add_action( 'woocommerce_thankyou', 'woocommerce_after_order_bridge_code', 10, 1 );
function woocommerce_after_order_bridge_code( $order_id ) {
$order = wc_get_order( $order_id );
$status = $order->get_status();
if ($status == 'pending') {
//if ($status == 'processing' || $status == 'completed') {
    
global $wpdb;

$query = $wpdb->prepare(
    "SELECT order_item_meta.meta_value 
    FROM {$wpdb->prefix}woocommerce_order_items AS order_items 
    LEFT JOIN {$wpdb->prefix}woocommerce_order_itemmeta AS order_item_meta ON order_items.order_item_id = order_item_meta.order_item_id 
    WHERE order_items.order_id = %d 
    AND order_items.order_item_type = 'line_item' 
    AND order_item_meta.meta_key = '_product_id'",
    $order_id
);

$product_ids = $wpdb->get_col($query);

$product_id = isset($product_ids[0]) ? $product_ids[0] : false;

$query_email = $wpdb->prepare(
    "SELECT `meta_value` FROM `{$wpdb->prefix}postmeta` WHERE `meta_key` = '_billing_email' AND `post_id` = %d",
    $order_id
);

$emails = $wpdb->get_col($query_email);

$email = isset($emails[0]) ? $emails[0] : false;

$level_id = get_post_meta($product_id, 'level_id', true);

if ($product_id && $email) {
$endpoint = 'https://smarttrader.community/wp-content/plugins/stc-bridge/api.php?process=new_order&product_id=' . $product_id . '&email=' . $email . '&level_id=' . $level_id;
file_get_contents($endpoint);
}

}

/*
 } else {
    
global $wpdb;

$query = $wpdb->prepare(
    "SELECT order_item_meta.meta_value 
    FROM {$wpdb->prefix}woocommerce_order_items AS order_items 
    LEFT JOIN {$wpdb->prefix}woocommerce_order_itemmeta AS order_item_meta ON order_items.order_item_id = order_item_meta.order_item_id 
    WHERE order_items.order_id = %d 
    AND order_items.order_item_type = 'line_item' 
    AND order_item_meta.meta_key = '_product_id'",
    $order_id
);

$product_ids = $wpdb->get_col($query);

$product_id = isset($product_ids[0]) ? $product_ids[0] : false;

$query_email = $wpdb->prepare(
    "SELECT `meta_value` FROM `{$wpdb->prefix}postmeta` WHERE `meta_key` = '_billing_email' AND `post_id` = %d",
    $order_id
);

$emails = $wpdb->get_col($query_email);

$email = isset($emails[0]) ? $emails[0] : false;

$level_id = 0;

if ($product_id && $email) {
$endpoint = 'https://demo.wp.kiev.ua/wp-content/plugins/stc-bridge/api.php?process=new_order&product_id=' . $product_id . '&email=' . $email . '&level_id=' . $level_id;
file_get_contents($endpoint);
}

 }
*/


}
 
add_filter( 'woocommerce_default_address_fields', 'make_optional_fields' );
function make_optional_fields( $address_fields ) {
    //$address_fields['first_name']['required'] = false;
    //$address_fields['last_name']['required'] = false;    
    $address_fields['address_1']['required'] = false;
    $address_fields['city']['required'] = false;
    $address_fields['state']['required'] = false;
    $address_fields['postcode']['required'] = false;
    // $address_fields['country']['required'] = false;
    return $address_fields;
}
/*
add_filter( 'woocommerce_billing_fields', 'make_phone_optional' );
function make_phone_optional( $fields ) {
    $fields['billing_phone']['required'] = false;
    return $fields;
}
*/

 
add_action('init', 'bridge_init_code');
function bridge_init_code() {
    if ($_POST['process'] == 'bridge_package') {
    global $woocommerce;
    $product_id = isset( $_POST['package'] ) ? absint( $_POST['package'] ) : 0;
    $cart_item_key = $woocommerce->cart->find_product_in_cart( $product_id );
        if ( ! $cart_item_key ) {
            $woocommerce->cart->add_to_cart( $product_id );
        }
    }
};

add_action( 'woocommerce_after_checkout_form', 'add_html_after_checkout_form' );

function add_html_after_checkout_form() {
    ?>
<script>
jQuery(document).ready(function($) {
    <?php if (isset($_POST['email']) && !empty($_POST['email'])) { ?>
    $('#billing_email').val('<?= $_POST['email'] ?>');
    <?php } ?>
    <?php if (isset($_POST['first_name']) && !empty($_POST['first_name'])) { ?>
    $('#billing_first_name').val('<?= $_POST['first_name'] ?>');
    <?php } ?>
    <?php if (isset($_POST['last_name']) && !empty($_POST['last_name'])) { ?>
    $('#billing_last_name').val('<?= $_POST['last_name'] ?>');
    <?php } ?>
    <?php if (isset($_POST['country_region']) && !empty($_POST['country_region'])) { ?>
    $('#billing_country option:contains("<?= $_POST['country_region'] ?>")').prop('selected', true);
    <?php } ?>
    <?php if (isset($_POST['phone_number']) && !empty($_POST['phone_number'])) { ?>
    $('#billing_phone').val('<?= $_POST['phone_number'] ?>');
    <?php } ?>
    $('#billing_email_field label').append('<span style="margin-right: 10px; color: #ff0000"></span>');
    <?php if (!isset($_POST['email']) || empty($_POST['email'])) { ?>
    var register_button_html = `<p style="text-align: right;"><button class="button wp-element-button" id="quick_register" style="background: #007cba">Register</button></p>`;
    $('.woocommerce-billing-fields__field-wrapper').after(register_button_html);
    $(document).on('click','#quick_register', function(e) {
        e.preventDefault();
        $.ajax({
        url: 'https://smarttrader.community/wp-content/plugins/stc-bridge/api.php',
        method: "post",
        data: {
            process: "quick_register",
            first_name: $('#billing_first_name').val(),
            last_name: $('#billing_last_name').val(),
            country_region: $('#billing_country option:selected').text(),
            phone_number: $('#billing_phone').val(),
            email: $('#billing_email').val()
        },
        cache: false,
        beforeSend: function () {
            //$preloader.show();
        },
        success: function (response) {
            if (response.trim().length > 0) {
                if (response.trim() == 1) {
                    $('#quick_register').remove();
                    $('#place_order').addClass('workable');
                } else {
                    alert('error during registering');
                }
                //$preloader.hide();
            }
        }
        });
    });
    <?php } ?>
    $(document).on('input change','#billing_email', function() {
        $.ajax({
        url: 'https://smarttrader.community/wp-content/plugins/stc-bridge/api.php',
        method: "post",
        data: {
            process: "email_checking",
            email_to_check: $(this).val()
        },
        cache: false,
        beforeSend: function () {
            //$preloader.show();
        },
        success: function (response) {
            if (response.trim().length > 0) {
                $('#billing_email_field label span').html(response.trim());
                //$preloader.hide();
            }
        }
        });
    });
});
</script>


<style>
/*
#billing_first_name_field,
#billing_last_name_field,
#billing_phone_field,
#billing_country_field,
*/
#billing_address_1_field,
#billing_city_field,
#billing_state_field,
#billing_postcode_field {
    display: none !important;
}
<?php if (isset($_POST['email']) && !empty($_POST['email'])) { ?>
input#billing_email {
    pointer-events: none;
    background: #999;
}
<?php } ?>
<?php if (!isset($_POST['email']) || empty($_POST['email'])) { ?>
#place_order {
    pointer-events: none;
    opacity: .4;
}
#place_order.workable {
    pointer-events: auto;
    opacity: 1;
}
<?php } ?>
</style>
    <?php
}

 
function woocommerce_support() {
    add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'woocommerce_support');

function is_current_page($base_url) {
    // Get the current URL components
    $current_scheme = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http";
    $current_host = $_SERVER['HTTP_HOST'];
    $current_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    // Normalize trailing slash for both URLs
    $base_url = rtrim($base_url, '/') . '/';
    $current_path = rtrim($current_path, '/') . '/';

    // Build the current base URL
    $current_base_url = $current_scheme . "://" . $current_host . $current_path;

    // Check if the current base URL matches the specified base URL
    return strpos($current_base_url, $base_url) === 0;
}



// The static base URL you want to check
$base_target_url = "https://scis-solutions.com/checkout/order-received/";

if (is_current_page($base_target_url)) {
    echo '<script>
            setTimeout(function() {
                window.location.href = "https://smarttrader.community/";
            }, 3000);
          </script>';
    // exit; // Uncomment if needed
}


 
 

if ( ! function_exists( 'twentytwentyfour_block_styles' ) ) :
	/**
	 * Register custom block styles
	 *
	 * @since Twenty Twenty-Four 1.0
	 * @return void
	 */
	function twentytwentyfour_block_styles() {

		register_block_style(
			'core/details',
			array(
				'name'         => 'arrow-icon-details',
				'label'        => __( 'Arrow icon', 'twentytwentyfour' ),
				/*
				 * Styles for the custom Arrow icon style of the Details block
				 */
				'inline_style' => '
				.is-style-arrow-icon-details {
					padding-top: var(--wp--preset--spacing--10);
					padding-bottom: var(--wp--preset--spacing--10);
				}

				.is-style-arrow-icon-details summary {
					list-style-type: "\2193\00a0\00a0\00a0";
				}

				.is-style-arrow-icon-details[open]>summary {
					list-style-type: "\2192\00a0\00a0\00a0";
				}',
			)
		);
		register_block_style(
			'core/post-terms',
			array(
				'name'         => 'pill',
				'label'        => __( 'Pill', 'twentytwentyfour' ),
				/*
				 * Styles variation for post terms
				 * https://github.com/WordPress/gutenberg/issues/24956
				 */
				'inline_style' => '
				.is-style-pill a,
				.is-style-pill span:not([class], [data-rich-text-placeholder]) {
					display: inline-block;
					background-color: var(--wp--preset--color--base-2);
					padding: 0.375rem 0.875rem;
					border-radius: var(--wp--preset--spacing--20);
				}

				.is-style-pill a:hover {
					background-color: var(--wp--preset--color--contrast-3);
				}',
			)
		);
		register_block_style(
			'core/list',
			array(
				'name'         => 'checkmark-list',
				'label'        => __( 'Checkmark', 'twentytwentyfour' ),
				/*
				 * Styles for the custom checkmark list block style
				 * https://github.com/WordPress/gutenberg/issues/51480
				 */
				'inline_style' => '
				ul.is-style-checkmark-list {
					list-style-type: "\2713";
				}

				ul.is-style-checkmark-list li {
					padding-inline-start: 1ch;
				}',
			)
		);
		register_block_style(
			'core/navigation-link',
			array(
				'name'         => 'arrow-link',
				'label'        => __( 'With arrow', 'twentytwentyfour' ),
				/*
				 * Styles for the custom arrow nav link block style
				 */
				'inline_style' => '
				.is-style-arrow-link .wp-block-navigation-item__label:after {
					content: "\2197";
					padding-inline-start: 0.25rem;
					vertical-align: middle;
					text-decoration: none;
					display: inline-block;
				}',
			)
		);
		register_block_style(
			'core/heading',
			array(
				'name'         => 'asterisk',
				'label'        => __( 'With asterisk', 'twentytwentyfour' ),
				'inline_style' => "
				.is-style-asterisk:before {
					content: '';
					width: 1.5rem;
					height: 3rem;
					background: var(--wp--preset--color--contrast-2, currentColor);
					clip-path: path('M11.93.684v8.039l5.633-5.633 1.216 1.23-5.66 5.66h8.04v1.737H13.2l5.701 5.701-1.23 1.23-5.742-5.742V21h-1.737v-8.094l-5.77 5.77-1.23-1.217 5.743-5.742H.842V9.98h8.162l-5.701-5.7 1.23-1.231 5.66 5.66V.684h1.737Z');
					display: block;
				}

				/* Hide the asterisk if the heading has no content, to avoid using empty headings to display the asterisk only, which is an A11Y issue */
				.is-style-asterisk:empty:before {
					content: none;
				}

				.is-style-asterisk:-moz-only-whitespace:before {
					content: none;
				}

				.is-style-asterisk.has-text-align-center:before {
					margin: 0 auto;
				}

				.is-style-asterisk.has-text-align-right:before {
					margin-left: auto;
				}

				.rtl .is-style-asterisk.has-text-align-left:before {
					margin-right: auto;
				}",
			)
		);
	}
endif;

add_action( 'init', 'twentytwentyfour_block_styles' );

/**
 * Enqueue block stylesheets.
 */

if ( ! function_exists( 'twentytwentyfour_block_stylesheets' ) ) :
	/**
	 * Enqueue custom block stylesheets
	 *
	 * @since Twenty Twenty-Four 1.0
	 * @return void
	 */
	function twentytwentyfour_block_stylesheets() {
		/**
		 * The wp_enqueue_block_style() function allows us to enqueue a stylesheet
		 * for a specific block. These will only get loaded when the block is rendered
		 * (both in the editor and on the front end), improving performance
		 * and reducing the amount of data requested by visitors.
		 *
		 * See https://make.wordpress.org/core/2021/12/15/using-multiple-stylesheets-per-block/ for more info.
		 */
		wp_enqueue_block_style(
			'core/button',
			array(
				'handle' => 'twentytwentyfour-button-style-outline',
				'src'    => get_parent_theme_file_uri( 'assets/css/button-outline.css' ),
				'ver'    => wp_get_theme( get_template() )->get( 'Version' ),
				'path'   => get_parent_theme_file_path( 'assets/css/button-outline.css' ),
			)
		);
	}
endif;

add_action( 'init', 'twentytwentyfour_block_stylesheets' );

/**
 * Register pattern categories.
 */

if ( ! function_exists( 'twentytwentyfour_pattern_categories' ) ) :
	/**
	 * Register pattern categories
	 *
	 * @since Twenty Twenty-Four 1.0
	 * @return void
	 */
	function twentytwentyfour_pattern_categories() {

		register_block_pattern_category(
			'page',
			array(
				'label'       => _x( 'Pages', 'Block pattern category' ),
				'description' => __( 'A collection of full page layouts.' ),
			)
		);
	}
endif;

add_action( 'init', 'twentytwentyfour_pattern_categories' );



add_action( 'woocommerce_after_checkout_form', 'add_custom_message_to_checkout' );
function add_custom_message_to_checkout() {
    echo '<p class="help-text-register-button">If the button is not active, please go to the top of the page and register</p>';
}






































