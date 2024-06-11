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

