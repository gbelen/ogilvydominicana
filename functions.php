<?php
	add_theme_support('post-thumbnails');
    add_image_size('thumb-cuadrada', 400,400, true);
    add_image_size('thumb-movil', 450,300, true);
    add_image_size('thumb-related', 300,300, true);
    // add_image_size('thumb-sidebar', 382,225, true);


	define('THEME_VERSION', '1.0.0.0');
    // define('THEME_VERSION', rand(5,100));

	if(function_exists('register_nav_menus')){
		register_nav_menus(array('main' => 'main'));
	}


	if(function_exists('register_sidebar'))
		register_sidebar(array(
			'name'			=> 'GBelen Widgets',
			'id'			=> 'gbelen-widgets',
			'before_widget'	=> '',
			'after_widget'	=> '',
			'before_title'	=> '<h1>',
			'after_title'	=> '</h1>'
		)
	);	



	//Remove meta generator by wordpress
	remove_action('wp_head', 'wp_generator');


    //Make pages support Excerpts
    function excerpt_to_pages() {
        add_post_type_support( 'page', array('excerpt') );
    }
    add_action('init', 'excerpt_to_pages');


    
    // function get_ancestor() {
    //     global $post;
        
    //     if ($post->post_parent) {
    //         $ancestors  = get_post_ancestors($post->ID);
    //         $root       = count($ancestors)-1;
    //         $parent     = $ancestors[$root];
    //     } else {
    //         $parent     = 0; //$post->ID;
    //     }
        
    //     return $parent;
    // }


	//if not admin
    if(!is_admin()){

            //REGISTRING
            function my_register_scripts() {
            
                wp_deregister_script('jquery'); //Remove default jQuery and Add jQuery in theme
                wp_register_script('jquery', get_template_directory_uri().'/assets/js/jquery.min.js', null, THEME_VERSION, false);
                wp_enqueue_script('jquery');
                
                wp_register_script ( 'popper', get_template_directory_uri().'/assets/js/popper.min.js', array('jquery'), THEME_VERSION, true);
                wp_register_script( 'bootstrap', get_template_directory_uri().'/assets/js/bootstrap.min.js', array('popper', 'jquery'), THEME_VERSION, true);
                
                // wp_register_script( 'owljs', get_template_directory_uri().'/assets/js/owl.carousel.min.js', array('jquery', 'bootstrap'), THEME_VERSION, true);
    
                // wp_register_script( 'mask', get_template_directory_uri().'/assets/js/jquery.mask.min.js', array('jquery'), THEME_VERSION, true);

                wp_register_script( 'fpjsscroll', '//cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.2/vendors/scrolloverflow.min.js', array('jquery'), THEME_VERSION, true);
                wp_register_script( 'fpjs', '//cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.2/fullpage.min.js', array('jquery'), THEME_VERSION, true);
    
                wp_register_script('customscripts', get_template_directory_uri().'/assets/js/scripts.js', array('jquery', 'bootstrap'), THEME_VERSION, true);
            }
            add_action("init", "my_register_scripts", 11);
    
    
            function my_register_style(){
                wp_register_style('generalStyles', get_stylesheet_uri(), null, THEME_VERSION, 'all');
                wp_register_style('fp', '//cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.2/fullpage.min.css', null, THEME_VERSION, 'all');
                // wp_register_style('animate', get_template_directory_uri().'/assets/css/animate.css', array('generalStyles'), THEME_VERSION, 'all');
    
                // wp_register_style('fa', get_template_directory_uri().'/assets/css/font-awesome.min.css', array('generalStyles'), THEME_VERSION, 'all');
                // wp_register_style('timelin', get_template_directory_uri().'/assets/css/timeline.css', array('generalStyles'), THEME_VERSION, 'all');

                // wp_register_style('owlcss', get_template_directory_uri().'/assets/css/owl.carousel.min.css', array('generalStyles'), THEME_VERSION, 'all');
                // wp_register_style('owlthe', get_template_directory_uri().'/assets/css/owl.theme.default.css', array('generalStyles'), THEME_VERSION, 'all');
            }
            add_action('init', 'my_register_style');
    
    
            //ENQUEUEING
            //js
            function enqueueing_scripts(){
            
                wp_enqueue_script('popper');
                wp_enqueue_script('bootstrap');
                wp_enqueue_script('fpjsscroll');
                wp_enqueue_script('fpjs');
                wp_enqueue_script('customscripts');
            }
            add_action('wp_enqueue_scripts', 'enqueueing_scripts');
    
            //Styles
            function enqueueing_styles(){
                // wp_enqueue_style( 'timelin' );
                // wp_enqueue_style( 'fa' );
                // wp_enqueue_style( 'animate' );
                // wp_enqueue_style( 'owlcss' );
                // wp_enqueue_style( 'owlthe' );
                wp_enqueue_style( 'fp' );

                wp_enqueue_style( 'generalStyles' );
            }
            add_action('wp_enqueue_scripts', 'enqueueing_styles');
            
    
        }//ifnot admin



