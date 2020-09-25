<?php
add_filter('wp_enqueue_scripts', 'change_default_jquery', PHP_INT_MAX);

function change_default_jquery()
{
    wp_dequeue_script('jquery');
    wp_deregister_script('jquery');
}

function anydevy_setup()
{
    if (is_front_page()) {
        wp_enqueue_style('owl-carousel', get_theme_file_uri('/assets/css/owlCarousel/owl.carousel.min.css', null, microtime()));
        wp_enqueue_style('owl-theme', get_theme_file_uri('/assets/css/owlCarousel/owl.theme.default.min.css', array('owl-carousel'), microtime()));
        wp_enqueue_style('main', get_stylesheet_uri(), array('owl-theme'), microtime());
        wp_enqueue_script('jquery-custom', get_theme_file_uri('/assets/js/jquery-3.5.1.min.js'), null, microtime(), true);
        wp_enqueue_script('owl-carousel', get_theme_file_uri('/assets/js/owl.carousel.min.js'), array('jquery-custom'), microtime(), true);
        wp_enqueue_script('mousewheel', get_theme_file_uri('/assets/js/jquery.mousewheel.min.js'), array('jquery-custom'), microtime(), true);
        wp_enqueue_script('jarallax', get_theme_file_uri('/assets/js/jarallax.min.js'), array('jquery-custom'), microtime(), true);
        wp_enqueue_script('jarallax-element', get_theme_file_uri('/assets/js/jarallax-element.min.js'), array('jarallax'), microtime(), true);
        wp_enqueue_script('main', get_theme_file_uri('/assets/js/main.js'), array('owl-carousel', 'mousewheel', 'jarallax-element'), microtime(), true);
        wp_enqueue_script('home', get_theme_file_uri('/assets/js/home.js'), array('main'), microtime(), true);
    } else {
        wp_enqueue_style('main', get_stylesheet_uri(), null, microtime());
        wp_enqueue_script('jquery-custom', get_theme_file_uri('/assets/js/jquery-3.5.1.min.js'), null, microtime(), true);
        wp_enqueue_script('main', get_theme_file_uri('/assets/js/main.js'), array('home'), microtime(), true);
    }
}

add_action('wp_enqueue_scripts', 'anydevy_setup');

function anydevy_init()
{
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('html5',
        array('comment-list', 'comment-form', 'search-form')
    );
}

add_action('after_setup_theme', 'anydevy_init');

//Projects post type
function project_post_type()
{
    register_post_type(
        'project',
        array(
            'rewrite' => array('slug' => 'projects'),
            'labels' => array(
                'name' => 'Projects',
                'singular_name' => 'Project',
                'add_new_item' => 'New Project',
                'edit_item' => 'Edit Project'
            ),
            'menu_icon' => 'dashicons-embed-post',
            'public' => true,
            'has_archive' => true,
            'show_in_rest' => true,
            'supports' => array(
                'title', 'editor', 'excerpt'
            )
        )
    );
}

add_action('init', 'project_post_type');

//Testimonials post type
function testimonial_post_type()
{
    register_post_type('testimonial',
        array(
            'rewrite' => array('slug' => 'testimonials'),
            'labels' => array(
                'name' => 'Testimonials',
                'singular_name' => 'Testimonial',
                'add_new_item' => 'New Testimonial',
                'edit_item' => 'Edit Testimonial'
            ),
            'menu_icon' => 'dashicons-testimonial',
            'public' => true,
            'has_archive' => false,
            'supports' => array(
                'title', 'thumbnail', 'editor'
            )
        )
    );
}

add_action('init', 'testimonial_post_type');

//Services post type
function service_post_type()
{
    register_post_type('service',
        array(
            'rewrite' => array('slug' => 'services'),
            'labels' => array(
                'name' => 'Services',
                'singular_name' => 'Service',
                'add_new_item' => 'New Service',
                'edit_item' => 'Edit Service'
            ),
            'menu_icon' => 'dashicons-food',
            'public' => true,
            'has_archive' => false,
            'show_in_rest' => true,
            'supports' => array(
                'title', 'thumbnail', 'editor', 'excerpt'
            )
        )
    );
}

add_action('init', 'service_post_type');

//Team post type
function team_member_post_type()
{
    register_post_type('team_member',
        array(
            'rewrite' => array('slug' => 'team_members'),
            'labels' => array(
                'name' => 'Team Members',
                'singular_name' => 'Team Member',
                'add_new_item' => 'New Team Member',
                'edit_item' => 'Edit Team Member'
            ),
            'menu_icon' => 'dashicons-groups',
            'public' => true,
            'has_archive' => false,
            'supports' => array(
                'title', 'thumbnail'
            )
        )
    );
}

add_action('init', 'team_member_post_type');

//Solutions post type
function solution_post_type()
{
    register_post_type('solution',
        array(
            'rewrite' => array('slug' => 'solutions'),
            'labels' => array(
                'name' => 'Solutions',
                'singular_name' => 'Solution',
                'add_new_item' => 'New Solution',
                'edit_item' => 'Edit Solution'
            ),
            'menu_icon' => 'dashicons-admin-network',
            'public' => true,
            'has_archive' => false,
            'show_in_rest' => true,
            'supports' => array(
                'title', 'excerpt', 'editor'
            )
        )
    );
}

add_action('init', 'solution_post_type');

//Techs post type
function technology_post_type()
{
    register_post_type('technology',
        array(
            'rewrite' => array('slug' => 'technologies'),
            'labels' => array(
                'name' => 'Technologies',
                'singular_name' => 'Technology',
                'add_new_item' => 'New Technology',
                'edit_item' => 'Edit Technology'
            ),
            'menu_icon' => 'dashicons-sos',
            'public' => true,
            'has_archive' => false,
            'supports' => array(
                'title', 'thumbnail'
            )
        )
    );
}

add_action('init', 'technology_post_type');

//Fields for comments
function anydevy_modify_comment_fields($arg)
{
    $arg['url'] = '';
    $arg['cookies'] = '';
    $arg['author'] = '<input 
                        class="postComment-input"
                        type="text"
                        placeholder="Your name"
                        name="author"
                        id="author"
                        />';
    $arg['email'] = '<input 
                        class="postComment-input"
                        type="email"
                        placeholder="Your email"
                        name="email"
                        id="email"
                        />';
    return $arg;
}

add_filter('comment_form_default_fields', 'anydevy_modify_comment_fields');

//Change order of comment fields
function anydevy_move_comment_field_to_bottom($fields)
{
    $comment_field = $fields['comment'];
    unset($fields['comment']);
    $fields['comment'] = $comment_field;
    return $fields;
}

add_filter('comment_form_fields', 'anydevy_move_comment_field_to_bottom');


//Add theme settings
function theme_settings_page()
{
    {
        ?>
        <div class="wrap">
            <h1>Theme Panel</h1>
            <form method="post" action="options.php">
                <?php
                settings_fields("section");
                do_settings_sections("theme-options");
                submit_button();
                ?>
            </form>
        </div>
        <?php
    }
}

function add_theme_menu_item()
{
    add_menu_page("Theme Panel", "Theme Panel", "manage_options", "theme-panel", "theme_settings_page", null, 99);
}

add_action("admin_menu", "add_theme_menu_item");

//Add Options to theme settings
function display_email()
{
    ?>
    <input type="email" name="email_address" id="email_address" value="<?php echo get_option('email_address'); ?>" />
    <?php
}

function display_phoneNumber()
{
    ?>
    <input type="tel" name="phone_number" id="phone_number" value="<?php echo get_option('phone_number'); ?>" />
    <?php
}

function logo_display()
{
    ?>
    <input type="file" name="logo" />
    <?php echo get_option('logo'); ?>
    <?php
}

function handle_logo_upload()
{
    if(!empty($_FILES["demo-file"]["tmp_name"]))
    {
        $urls = wp_handle_upload($_FILES["logo"], array('test_form' => FALSE));
        $temp = $urls["url"];
        return $temp;
    }

    return $option;
}

function display_theme_panel_fields()
{
    add_settings_section("section", "Contact Settings", null, "theme-options");

    add_settings_field("email_address", "Contact Email Address", "display_email", "theme-options", "section");
    add_settings_field("phone_number", "Contact Phone Number", "display_phoneNumber", "theme-options", "section");
    add_settings_field("logo", "Logo", "logo_display", "theme-options", "section");

    register_setting("section", "email_address");
    register_setting("section", "phone_number");
    register_setting("section", "logo", "handle_logo_upload");
}

add_action("admin_init", "display_theme_panel_fields");