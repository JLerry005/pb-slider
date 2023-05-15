<?php
/**
 *  @since 1.0
 */

    // function my_plugin_enqueue(){
    //     // styles
    //     wp_register_style( 'my-plugin-styles',  MY_PLUGIN_BASE_URL . '/assets/styles.css', array(), '1.0', 'all' );
    //     wp_enqueue_style( 'my-plugin-styles' );
    //     //js
    //     wp_enqueue_script('my-plugin-js', MY_PLUGIN_BASE_URL . '/assets/app.js', array( 'jquery' ), '1.0', true );
    // }

    // add_action( 'wp_enqueue_scripts', 'my_plugin_enqueue');
    //     // styles
    //     wp_register_style( 'my-plugin-styles',  MY_PLUGIN_BASE_URL . '/admin/assets/admin.css', array(), '1.0', 'all' );
    //     wp_enqueue_style( 'my-plugin-styles' );

    //     //js
    //     wp_enqueue_script( 'jquery' );
    //     wp_enqueue_script('my-admin-plugin-js', MY_PLUGIN_BASE_URL . '/admin/assets/admin.js', array( 'jquery' ), '1.0', true );
    //     wp_enqueue_script('my-plugin-chart', 'https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js', array( 'jquery' ), '1.0', true );
    //     wp_enqueue_style( 'wp-color-picker' );
    //     $chart_post_data = get_option( 'chart_post_data', 'post' );
    //     $mppost = get_posts([
    //         'post_type' => $chart_post_data
    //     ]);

    //     wp_localize_script( 'my-admin-plugin-js', 'mp_vars', 
    //         array( 
    //             'mp_ajax' => admin_url( 'admin-ajax.php' ),
    //             'mp_nonce' => wp_create_nonce('mp-nonce'),
    //             'mp_error_message' => __('Sorry, there was a problem processing your request.', ''),
    //             'posts' => $mppost,
    //         ) 
    //     );
    // }
    // add_action( 'admin_enqueue_scripts', 'my_plugin_admin_enqueue');



    // ADDING CUSTOM JS AND CSS
	add_action('wp_enqueue_scripts', 'app_js_css');
	function app_js_css(){

        $slider_post_data = get_option( 'slider_post_data', 'post' );
		
		wp_enqueue_script( 
			$handle    = 'Jquery', 
			$src       = 'https://code.jquery.com/jquery-3.6.4.min.js', 
			$deps      = array(), 
			$ver       = '1.0.0', 
			$in_footer = false
		);

		wp_enqueue_script( 
			$handle    = 'app-front-js', 
			$src       = MY_PLUGIN_BASE_URL .'/assets/app.js', 
			$deps      = array('Jquery'), 
			$ver       = '1.0.0', 
			// $in_footer = null 
		);
		
		wp_enqueue_style( 
			$handle = 'Bootstrap', 
			$src    = 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css', 
			$deps   = array(), 
			$ver    = '1.0', 
			$media  = 'all' 
        );
		
		wp_enqueue_style( 
			$handle = 'custom-front-css', 
			$src    = MY_PLUGIN_BASE_URL .'/assets/styles.css', 
            $deps   = array(), 
            $ver    = '1.0', 
            $media  = 'all' 
		);

        wp_enqueue_style( 
			$handle = 'Fontawesome', 
			$src    = 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css', 
            $deps   = array(), 
            $ver    = '1.0', 
            $media  = 'all' 
		);



        // echo '<pre>';
        // print_r(MY_PLUGIN_BASE_URL);
        // echo '</pre>';
        // die();
	}