<?php



class FpThemeFunctions {



	public function __construct()

	{

		$this->registerActions();

		$this->registerAssets();

		$this->registerNavs();

		$this->enqueueAssets();

	}



	public function registerActions()

	{

		add_action('init', array($this, 'registerPostTypes'));

		add_action('admin_init', array($this, 'addMetaBoxes'));

		add_action('save_post', array($this, 'savePost'));

	}



	public function registerAssets()

	{

		wp_register_style(

			'fpScreen',

			get_template_directory_uri() . '/style.css',

			array('bootstrap_css', 'slickCss'),

			'1.0',

			'screen'

		);



		wp_register_style(

			'slickCss',

			get_template_directory_uri() . '/plugins/slick/slick.css',

			array('bootstrap_css'),

			'1.0',

			'screen'

		);



		wp_register_script(

			'fpCommon',

			get_template_directory_uri() . '/js/common.js',

			array('jquery', 'colorbox'),

			'1.0'

		);



		wp_register_script(

			'slickJs',

			get_template_directory_uri() . '/plugins/slick/slick.min.js',

			array('jquery'),

			'1.0'

		);



		wp_register_script(

			'fpHome',

			get_template_directory_uri() . '/js/home.js',

			array('slickJs', 'fpParallax'),

			'1.0'

		);



		wp_register_script(

			'fpParallax',

			get_template_directory_uri() . '/js/parallax.js',

			array('jquery'),

			'1.0'

		);



		wp_register_script(

			'fpProducts',

			get_template_directory_uri() . '/js/products.js',

			array('jquery', 'fpParallax', 'slickJs', 'fpTabs'),

			'1.0'

		);



		wp_register_script(

			'fpTabs',

			get_template_directory_uri() . '/js/tabs.js',

			array('jquery'),

			'1.0'

		);
		
	}



	public function registerNavs()

	{

		register_nav_menus(array(

			'fp_primary' => 'Primary',

			'fp_top' => 'Top'

		));

	}



	public function enqueueAssets()

	{

		wp_enqueue_style('fpScreen');

		wp_enqueue_style('slickCss');



		wp_enqueue_script('fpCommon');

		wp_enqueue_script('slickJs');

		wp_enqueue_script('fpHome');

		wp_enqueue_script('fpParallax');

		wp_enqueue_script('fpProducts');

		wp_enqueue_script('fpTabs');



		if (is_admin()) // ADMIN ASSETS

		{

			wp_enqueue_media();

		}

	}



	public function registerPostTypes()

	{

		register_post_type(

			'case-study',

			array(

				'label' => 'Case Studies',

				'public' => true,

				'menu_position' => 6,

			)

		);



		register_post_type(

			'white-paper',

			array(

				'label' => 'White Papers',

				'public' => true,

				'menu_position' => 6,

			)

		);



		register_post_type(

			'presentation',

			array(

				'label' => 'Presentations',

				'public' => true,

				'menu_position' => 6,

			)

		);

	}



	public function addMetaBoxes()

	{

		add_meta_box(

			'fp_titles',

			'Alternative Titles',

			array($this, 'displayMetaBox'),

			'page',

			'normal',

			'high'

		);



		if ($_GET['post'] == 64) // HOME PAGE

		{

			add_meta_box(

				'fp_home_slides',

				'Slideshow',

				array($this, 'displayMetaBox'),

				'page',

				'normal',

				'high'

			);

		}

	}



	public function displayMetaBox($post, $meta_box)

	{

		$dir = plugin_dir_path(__FILE__) . 'inc/meta_box_' . $meta_box['id'] . '.php';



		include $dir;

	}



	public function savePost($id)

	{



		if (isset($_POST['fp_main_title']))

		{

			update_post_meta($id, 'fp_main_title', $_POST['fp_main_title']);

		}



		if (isset($_POST['fp_sub_title']))

		{

			update_post_meta($id, 'fp_sub_title', $_POST['fp_sub_title']);

		}



	}



}



$fpThemeFunctions = new FpThemeFunctions();