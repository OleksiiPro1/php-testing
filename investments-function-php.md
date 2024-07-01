<?php

function redirect_my_account_to_dashboard() {
    if (is_page('my-account')) {
        wp_redirect('https://üa.at/dashboard/');
        exit();
    }
}
add_action('template_redirect', 'redirect_my_account_to_dashboard');

// Redirect after login / logout

add_action('template_redirect', 'custom_redirects_based_on_login_status');

function custom_redirects_based_on_login_status() {
    // Redirect logged-in users from homepage to dashboard
    if (is_user_logged_in() && is_front_page()) {
        wp_redirect('https://üa.at/dashboard');
        exit();
    }

    // Redirect logged-out users from dashboard to homepage
    if (!is_user_logged_in() && is_page('dashboard')) {
        wp_redirect('https://xn--a-dha.at/login/');
        exit();
    }
}

function greeting_shortcode() {
    if (is_user_logged_in()) {
        $current_user = wp_get_current_user();
        $user_name = $current_user->display_name;
        return '<div class="user-greeting">Hello, ' . esc_html($user_name) . '!</div>';
    } else {
        return '<div class="user-greeting">Hello, Guest!</div>';
    }
}
add_shortcode('user_greeting', 'greeting_shortcode');


function custom_logout_redirect($logout_url, $redirect) {
    return $logout_url . '&redirect_to=' . urlencode(home_url());
}
add_filter('logout_url', 'custom_logout_redirect', 10, 2);

// Comments

function my_unique_custom_comments_shortcode($atts) {
    ob_start();
    ?>
    <div class="main-comments-area">
        <div id="comments" class="comments-area" style="background-color: rgba(240, 243, 250, 0.46);">
            <?php
            // Get the current post ID
            $post_id = get_the_ID();

            // Fetch comments for the current post
            $comments = get_comments(array('post_id' => $post_id));

            if ($comments) :
                // Display existing comments
                wp_list_comments(array(
                    'style'       => 'div',
                    'short_ping'  => true,
                    'avatar_size' => 50,
                    'echo' => true,
                ), $comments);

                // Comment navigation
                if (get_comment_pages_count() > 1 && get_option('page_comments')) :
                    ?>
                    <nav class="comment-navigation" role="navigation">
                        <div class="nav-previous"><?php previous_comments_link('&larr; Older Comments'); ?></div>
                        <div class="nav-next"><?php next_comments_link('Newer Comments &rarr;'); ?></div>
                    </nav>
                    <?php
                endif;
            else :
                echo '<p>No comments found.</p>';
            endif;
            ?>

            <div id="respond" class="comment-respond">
                <?php if (comments_open($post_id)) : ?>
                    <?php if (is_user_logged_in()) : ?>
                        <h3 id="reply-title" class="comment-reply-title">
                          Leave your review  
                            <small>
                                <a rel="nofollow" id="cancel-comment-reply-link" href="<?php echo esc_url(get_permalink()); ?>#respond" style="display:none;" data-wpel-link="internal">Cancel reply</a>
                            </small>
                        </h3>
                        <form action="<?php echo site_url('/wp-comments-post.php'); ?>" method="post" id="commentform" class="comment-form" novalidate="">
                            <div id="stars-rating-review">
                                <div class="rating-plate stars-style-solid">
                                    <div class="br-wrapper br-theme-fontawesome-stars">
                                        <select id="rate-it" class="require-yes negative-alert-disable" data-threshold="0" name="rating" style="display: none;">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5" selected="">5</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <p class="logged-in-as">
                                Logged in as <?php echo wp_get_current_user()->display_name; ?>. 
                                <a href="<?php echo site_url('/wp-admin/profile.php'); ?>" data-wpel-link="internal" rel="follow"></a> 
                                <a href="<?php echo wp_logout_url(get_permalink()); ?>" data-wpel-link="internal" rel="follow">Log out?</a>
                            </p>
                            <p class="comment-form-comment">
                                <label for="comment">Comment <span class="required">*</span></label> 
                                <textarea placeholder="Leave a comment" id="comment" name="comment" cols="45" rows="8" maxlength="65525" required=""></textarea>
                            </p>
                            <input name="wpml_language_code" type="hidden" value="en">
                            <p class="form-submit">
                                <input name="submit" type="submit" id="submit" class="submit" value="Post Comment"> 
                                <input type="hidden" name="comment_post_ID" value="<?php echo $post_id; ?>" id="comment_post_ID">
                                <input type="hidden" name="comment_parent" id="comment_parent" value="0">
                            </p>
                            <input type="hidden" id="_wp_unfiltered_html_comment_disabled" name="_wp_unfiltered_html_comment" value="14fd217523">
                            <script>
                                (function() {
                                    if (window === window.parent) {
                                        document.getElementById('_wp_unfiltered_html_comment_disabled').name = '_wp_unfiltered_html_comment';
                                    }
                                })();
                            </script>
                        </form>
                    <?php else : ?>
                        <p>You must be <a href="<?php echo wp_login_url(get_permalink()); ?>">logged in</a> to post a comment.</p>
                    <?php endif; ?>
                <?php else : ?>
                    <p>Comments are closed for this post.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <?php
    return ob_get_clean();
}
add_shortcode('my_unique_custom_comments', 'my_unique_custom_comments_shortcode');


  



function auto_approve_comments($approved, $commentdata) {
    return 1; // Automatically approve all comments
}
add_filter('pre_comment_approved', 'auto_approve_comments', 99, 2);






add_action('wp_head', 'change_button');
function change_button() {


?>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Create the new button element
        var newButton = document.createElement('button');
        newButton.type = 'button'; // Specify button type
        newButton.innerHTML = 'Go to Specific Page';
        newButton.className = 'new-button-class'; // Add class for styling if needed

        // PHP logic to determine the URL
        var redirectUrl = '<?php 
            if (get_the_ID() == 94) {
                echo 'https://www.google.com';
            } elseif (is_page(2)) {
                echo '/page2';
            } elseif (is_page(3)) {
                echo '/page3';
            } else {
                echo '/';
            }
        ?>';

        // Add click event to the button to navigate to the specific page
        newButton.addEventListener('click', function() {
            window.location.href = redirectUrl;
        });

        // Append the new button to the form
        var form = document.querySelector('.cart.AA');
        if (form) {
            form.appendChild(newButton);
        }
    });
    </script>

<?php
}

// второй уровень меню

function custom_menu_scripts() {
    ?>
    <script>
    document.addEventListener('DOMContentLoaded', function () {
        var menuItems = document.querySelectorAll('#primary-menu > .menu-item-has-children');
        menuItems.forEach(function (menuItem) {
            menuItem.addEventListener('mouseover', function () {
                var submenu = this.querySelector('.sub-menu');
                if (submenu) {
                    submenu.style.display = 'block';
                }
            });
            menuItem.addEventListener('mouseout', function () {
                var submenu = this.querySelector('.sub-menu');
                if (submenu) {
                    submenu.style.display = 'none';
                }
            });
        });
    });
    </script>
    <?php
}
add_action('wp_footer', 'custom_menu_scripts');

function add_custom_post_template() {
    add_post_type_support('post', 'custom-template');
}
add_action('init', 'add_custom_post_template');

// Проверка номера телефона , только плюс и цифры
// Добавляем скрипт для проверки на стороне клиента
function custom_pmpro_scripts() {
    ?>
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function() {
            const phoneInput = document.querySelector('input#phone');

            phoneInput.addEventListener('input', function(event) {
                const value = phoneInput.value;
                const cleanedValue = value.replace(/[^0-9+]/g, '');
                
                if (value !== cleanedValue) {
                    phoneInput.value = cleanedValue;
                }
            });
        });
    </script>
    <?php
}
add_action('wp_footer', 'custom_pmpro_scripts');

// Добавляем проверку на стороне сервера
function validate_phone_number($okay) {
    if (empty($_POST['phone'])) {
        pmpro_setMessage('Phone number is required.', 'pmpro_error');
        $okay = false;
    } else {
        $phone = sanitize_text_field($_POST['phone']);
        $phone_pattern = '/^[+]?[0-9]{10,14}$/';

        if (!preg_match($phone_pattern, $phone)) {
            pmpro_setMessage('Please enter a valid phone number.', 'pmpro_error');
            $okay = false;
        }
    }

    return $okay;
}
add_filter('pmpro_registration_checks', 'validate_phone_number');

// Регистрация на странице логина

function add_registration_link_to_content($content) {
    // URL to the registration page
    $registration_link = '<p><a href="https://xn--a-dha.at/membership-checkout">Register here</a></p>';

    // Check if we are on the specific page with ID 180
    if (is_page(180)) {
        // Append the registration link after the content
        $content .= $registration_link;
    }

    return $content;
}
add_filter('the_content', 'add_registration_link_to_content');

function enqueue_custom_script() {
    // Check if we are on the specific page with ID 180
    if (is_page(180)) {
        // Register the custom script
        wp_register_script('custom_script', get_template_directory_uri() . '/js/custom-script.js', array('jquery'), null, true);

        // Enqueue the custom script
        wp_enqueue_script('custom_script');
    }
}
add_action('wp_enqueue_scripts', 'enqueue_custom_script');

// Вывод постов-обновлений

function display_category_posts($category_name) {
    $args = array(
        'category_name' => $category_name,
        'posts_per_page' => -1,
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) {
        echo '<div class="smart-updates-container">';
        while ($query->have_posts()) {
            $query->the_post();
            ?>
            <div class="smart-updates-post">
                <a href="<?php the_permalink(); ?>" class="smart-updates-thumbnail">
                    <?php if (has_post_thumbnail()) {
                        the_post_thumbnail('thumbnail');
                    } ?>
                </a>
                <div class="smart-updates-content">
                    <h2 class="smart-updates-title">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                    </a>
                    </h2>
                    <div class="smart-updates-date"><?php echo get_the_date(); ?></div>
                    <div class="smart-updates-excerpt">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_excerpt(); ?>
                        </a>
                    </div>
                </div>
            </div>
            <?php
        }
        echo '</div>';
        wp_reset_postdata();
    } else {
        echo '<p>No posts found in this category.</p>';
    }
}


// Проверка номера телефона
// Добавляем скрипт для проверки на стороне клиента
function custom_pmpro_scripts_v2() {
    ?>
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function() {
            const phoneInput = document.querySelector('input#phone');

            phoneInput.addEventListener('input', function(event) {
                const value = phoneInput.value;
                const cleanedValue = value.replace(/[^0-9+]/g, '');
                
                if (value !== cleanedValue) {
                    phoneInput.value = cleanedValue;
                }

                // Check phone number length
                if (cleanedValue.length < 10 || cleanedValue.length > 15) {
                    phoneInput.setCustomValidity('Phone number must be between 10 and 15 digits.');
                } else {
                    phoneInput.setCustomValidity('');
                }
            });
        });
    </script>
    <?php
}
add_action('wp_footer', 'custom_pmpro_scripts_v2');

// Добавляем проверку на стороне сервера
function validate_phone_number_v2($okay) {
    if (empty($_POST['phone'])) {
        pmpro_setMessage('Phone number is required.', 'pmpro_error');
        $okay = false;
    } else {
        $phone = sanitize_text_field($_POST['phone']);
        $phone_pattern = '/^[+]?[0-9]{10,15}$/';

        if (!preg_match($phone_pattern, $phone)) {
            pmpro_setMessage('Please enter a valid phone number.', 'pmpro_error');
            $okay = false;
        } elseif (strlen($phone) < 10 || strlen($phone) > 15) {
            pmpro_setMessage('Phone number must be between 10 and 15 digits.', 'pmpro_error');
            $okay = false;
        }
    }

    return $okay;
}
add_filter('pmpro_registration_checks', 'validate_phone_number_v2');



// Notifications

// Display the custom fields on the user profile page
function myplugin_add_custom_user_profile_fields($user) {
    ?>
    <h3>Custom User Notifications</h3>
    <table class="form-table">
        <tr>
            <th><label for="myplugin_user_notifications">Notifications</label></th>
            <td>
                <div id="myplugin_notifications_wrapper">
                    <?php
                    $notifications = get_user_meta($user->ID, 'myplugin_user_notifications', true);
                    if (!empty($notifications) && is_array($notifications)) {
                        foreach ($notifications as $index => $notification) {
                            ?>
                            <div class="myplugin_notification">
                                <input type="text" name="myplugin_user_notifications[]" value="<?php echo esc_attr($notification); ?>" class="regular-text" />
                                <button type="button" class="button myplugin_remove_notification">Remove</button>
                            </div>
                            <?php
                        }
                    } else {
                        ?>
                        <div class="myplugin_notification">
                            <input type="text" name="myplugin_user_notifications[]" class="regular-text" />
                            <button type="button" class="button myplugin_remove_notification">Remove</button>
                        </div>
                        <?php
                    }
                    ?>
                </div>
                <button type="button" class="button myplugin_add_notification">Add Notification</button>
                <span class="description">Enter custom notifications for the user.</span>
            </td>
        </tr>
    </table>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $('.myplugin_add_notification').click(function() {
                $('#myplugin_notifications_wrapper').prepend('<div class="myplugin_notification"><input type="text" name="myplugin_user_notifications[]" class="regular-text" /><button type="button" class="button myplugin_remove_notification">Remove</button></div>');
            });

            $(document).on('click', '.myplugin_remove_notification', function() {
                $(this).parent('.myplugin_notification').remove();
            });
        });
    </script>
    <?php
}
add_action('show_user_profile', 'myplugin_add_custom_user_profile_fields');
add_action('edit_user_profile', 'myplugin_add_custom_user_profile_fields');

// Save the custom fields value
function myplugin_save_custom_user_profile_fields($user_id) {
    if (!current_user_can('edit_user', $user_id)) {
        return false;
    }

    if (isset($_POST['myplugin_user_notifications']) && is_array($_POST['myplugin_user_notifications'])) {
        $notifications = array_map('sanitize_text_field', $_POST['myplugin_user_notifications']);
        update_user_meta($user_id, 'myplugin_user_notifications', $notifications);
    } else {
        delete_user_meta($user_id, 'myplugin_user_notifications');
    }
}
add_action('personal_options_update', 'myplugin_save_custom_user_profile_fields');
add_action('edit_user_profile_update', 'myplugin_save_custom_user_profile_fields');


// Payments

// Create the database table for analytics payments
function create_analytics_payments_table() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'analytics_payments';

    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE $table_name (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        user_id bigint(20) NOT NULL,
        user_name varchar(255) NOT NULL,
        email varchar(255) NOT NULL,
        payment_name text NOT NULL,
        amount decimal(10,2) NOT NULL,
        payment_date date NOT NULL,
        PRIMARY KEY  (id)
    ) $charset_collate;";

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
}
add_action('after_setup_theme', 'create_analytics_payments_table');

// Display the custom fields on the user profile page
function premiumplugin_add_custom_user_profile_fields($user) {
    ?>
    <h3>Custom User Payments</h3>
    <table class="form-table">
        <tr>
            <th><label for="premiumplugin_user_payments">Payments</label></th>
            <td>
                <div id="premiumplugin_payments_wrapper">
                    <?php
                    $payments = get_user_meta($user->ID, 'premiumplugin_user_payments', true);
                    if (!empty($payments) && is_array($payments)) {
                        foreach ($payments as $index => $payment) {
                            ?>
                            <div class="premiumplugin_payment">
                                <input type="text" name="premiumplugin_user_payments[]" value="<?php echo esc_attr($payment); ?>" class="regular-text" placeholder="Payment description $amount date (e.g., Payment $100 26.06.2024)" />
                                <button type="button" class="button premiumplugin_remove_payment">Remove</button>
                            </div>
                            <?php
                        }
                    } else {
                        ?>
                        <div class="premiumplugin_payment">
                            <input type="text" name="premiumplugin_user_payments[]" class="regular-text" placeholder="Payment description $amount date (e.g., Payment $100 26.06.2024)" />
                            <button type="button" class="button premiumplugin_remove_payment">Remove</button>
                        </div>
                        <?php
                    }
                    ?>
                </div>
                <button type="button" class="button premiumplugin_add_payment">Add Payment</button>
                <span class="description">Enter custom payments for the user with amount and date.</span>
            </td>
        </tr>
    </table>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $('.premiumplugin_add_payment').click(function() {
                $('#premiumplugin_payments_wrapper').prepend('<div class="premiumplugin_payment"><input type="text" name="premiumplugin_user_payments[]" class="regular-text" placeholder="Payment description $amount date (e.g., Payment $100 26.06.2024)" /><button type="button" class="button premiumplugin_remove_payment">Remove</button></div>');
            });

            $(document).on('click', '.premiumplugin_remove_payment', function() {
                $(this).parent('.premiumplugin_payment').remove();
            });
        });
    </script>
    <?php
}
add_action('show_user_profile', 'premiumplugin_add_custom_user_profile_fields');
add_action('edit_user_profile', 'premiumplugin_add_custom_user_profile_fields');

// Save the custom fields on the user profile page
function premiumplugin_save_custom_user_profile_fields($user_id) {
    if (!current_user_can('edit_user', $user_id)) {
        return false;
    }

    $payments = isset($_POST['premiumplugin_user_payments']) ? array_map('sanitize_text_field', $_POST['premiumplugin_user_payments']) : [];

    // Update user meta
    update_user_meta($user_id, 'premiumplugin_user_payments', $payments);

    // Insert payments into the analytics_payments table
    global $wpdb;
    $table_name = $wpdb->prefix . 'analytics_payments';

    // Clear existing records for the user to avoid duplicates
    $wpdb->delete($table_name, ['user_id' => $user_id]);

    // Insert new payment records
    $user_info = get_userdata($user_id);
    foreach ($payments as $payment) {
        if (preg_match('/\$(\d+(\.\d{2})?) (\d{2}\.\d{2}\.\d{4})/', $payment, $matches)) {
            $amount = floatval($matches[1]);
            $date = date('Y-m-d', strtotime($matches[3]));
            $wpdb->insert(
                $table_name,
                [
                    'user_id' => $user_id,
                    'user_name' => $user_info->user_login,
                    'email' => $user_info->user_email,
                    'payment_name' => $payment,
                    'amount' => $amount,
                    'payment_date' => $date,
                ]
            );
        }
    }
}
add_action('personal_options_update', 'premiumplugin_save_custom_user_profile_fields');
add_action('edit_user_profile_update', 'premiumplugin_save_custom_user_profile_fields');













// Cтраницы, доступные только зарегистрированным пользователям

function restrict_access_to_pages() {
    // Массив URL-адресов страниц, доступных только зарегистрированным пользователям
    $restricted_pages = array(
        '/founder/',
        '/notifications/',
        '/my-portfolio/',
        '/analytics/',
        '/personal-account/',
    );

    // Получаем текущий URL
    $current_url = $_SERVER['REQUEST_URI'];

    // Проверяем, является ли текущий URL одним из защищенных
    foreach ($restricted_pages as $page) {
        if (strpos($current_url, $page) !== false) {
            if (!is_user_logged_in()) {
                // Перенаправляем незарегистрированных пользователей на страницу входа
                wp_redirect(wp_login_url());
                exit;
            }
        }
    }
}
add_action('template_redirect', 'restrict_access_to_pages');































