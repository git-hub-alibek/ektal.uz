<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Admin extends CI_Controller {

	public function __construct()

	{
		parent::__construct();

		if(!$this->ion_auth->logged_in())
			redirect('auth/login');

		$this->load->database();
		$this->load->helper('url');
		$this->load->library('grocery_CRUD');
	}

	public function news()
	{
		$crud=new grocery_CRUD();
		$crud->set_field_upload('img','uploads');
		$output=$crud->render();
		$this->_example_output($output);
	}
	public function gallery()
	{
		$crud=new grocery_CRUD();
		$crud->set_field_upload('img','uploads');
		$output=$crud->render();
		$this->_example_output($output);
	}
	public function blogs()
	{
		$crud=new grocery_CRUD();
		$crud->columns('id', 'img', 'date', 'title_kk', 'text_kk', 'title_ru', 'text_ru', 'title_uz', 'text_uz');
		$crud->display_as('id', '#');
		$crud->display_as('img', 'Сүўрет');
		$crud->display_as('date', 'Сәне');
		$crud->display_as('title_kk', 'Блог аты QR');
		$crud->display_as('text_kk', 'Текст QR');
		$crud->display_as('title_ru', 'Блог аты RU');
		$crud->display_as('text_ru', 'Текст RU');
		$crud->display_as('title_uz', 'Блог аты UZ');
		$crud->display_as('text_uz', 'Текст UZ');
		$crud->set_field_upload('img', 'uploads');
		$output=$crud->render();
		$this->_example_output($output);
	}

	public function feedback()
	{
		$crud=new grocery_CRUD();
		$crud->columns('id', 'statement', 'date', 'full_name', 'user_info', 'text', 'department_id', 'doctor_id', 'post_scriptum');
		$crud->display_as('id', '#');
		$crud->display_as('statement', 'Жағдай');
		$crud->set_relation('statement', 'feedback_statement', 'title');
		$crud->display_as('date', 'Сәне');
		$crud->display_as('full_name', 'Пайдаланыўшы аты');
		$crud->display_as('user_info', 'Мағлыўмат');
		$crud->display_as('text', 'Текст');
		$crud->display_as('department_id', 'Бөлим');
		$crud->set_relation('department_id', 'departments', 'title_kk');
		$crud->display_as('doctor_id', 'Шыпакер');
		$crud->set_relation('doctor_id', 'doctors', 'full_name');
		$crud->display_as('post_scriptum', 'Қосымша мағлыўмат');
		$output=$crud->render();
		$this->_example_output($output);
	}

	public function products()
	{
		$crud=new grocery_CRUD();
		$crud->columns('id', 'img', 'price',
					   'name_kk', 'name_uz', 'name_en', 'name_es', 
					   'info_short_kk', 'info_long_kk', 
					   'info_short_uz', 'info_long_uz',
					   'info_short_en', 'info_long_en', 
					   'info_short_es', 'info_long_es');
		$crud->display_as('id','#');
		$crud->display_as('img','Изображение');
		$crud->display_as('price','Цена');
		$crud->display_as('name_kk','Название на каракал.');
		$crud->display_as('name_en','Название на англ.');
		$crud->display_as('name_es','Название исп.');
		$crud->display_as('name_uz','Название узб.');
		$crud->display_as('name_uz','Название узб.');
		$crud->display_as('info_short_kk','Короткое описание на каракал.');
		$crud->display_as('info_long_kk','Полное описание на каракал.');
		$crud->display_as('info_short_en','Короткое описание на англ.');
		$crud->display_as('info_long_en','Полное описание на англ.');
		$crud->display_as('info_short_es','Короткое описание на исп.');
		$crud->display_as('info_long_es','Полное описание на исп.');
		$crud->display_as('info_short_uz','Короткое описание на узб.');
		$crud->display_as('info_long_uz','Полное описание на узб.');
		$crud->set_field_upload('img', 'uploads');
		//$crud->set_relation('spec_id','spec','title');
		$output=$crud->render();
		$this->_example_output($output);
	}
	public function spec()
	{
		$crud = new grocery_CRUD();
		$crud->columns('id', 'title');
		$crud->display_as('id', '#');
		$crud->display_as('title', 'Қәнигелик аты');
		$output = $crud->render();
		$this->_example_output($output);
	}
	public function departments()
	{
		$crud=new grocery_CRUD();
		$crud->columns('id', 'title_kk', 'info_kk', 'title_ru', 'info_ru', 'title_uz', 'info_uz');
		$crud->display_as('id','#');
		$crud->display_as('title_kk','Бөлим QR');
		$crud->display_as('info_kk','Мағлыўмат QR');
		$crud->display_as('title_ru','Бөлим RU');
		$crud->display_as('info_ru','Мағлыўмат RU');
		$crud->display_as('title_uz','Бөлим UZ');
		$crud->display_as('info_uz','Мағлыўмат UZ');		
		$output=$crud->render();
		$this->_example_output($output);
	}
	public function services()
	{
		$crud = new grocery_CRUD();
		$crud->columns('id', 'title_kk', 'title_ru', 'title_uz', 'price');
		$crud->display_as('id', '#');
		$crud->display_as('title_kk', 'Хизмет аты QR');
		$crud->display_as('title_ru', 'Хизмет аты RU');
		$crud->display_as('title_uz', 'Хизмет аты UZ');
		$crud->display_as('price', 'Баҳа');	
		$output = $crud->render();
		$this->_example_output($output);
	}
	public function appointments()
	{
		$crud = new grocery_CRUD();
		$crud->columns('id', 'date', 'name', 'phone');
		$crud->display_as('id', '#');
		$crud->display_as('date', 'Сәне');
		$crud->display_as('name', 'Аты');
		$crud->display_as('phone', 'Телефон');
		$output = $crud->render();
		$this->_example_output($output);
	}

	public function add_link_ref($value)
	{
		return "<a target='_blank' href='/uploads/".$value."'>$value</a>";
	}

	public function images(){
		$crud=new grocery_CRUD();
		$crud->set_field_upload('img','uploads');
		$output=$crud->render();
		$this->_example_output($output);
	}

	public function _example_output($output = null)

	{

		$this->load->view('admin.php',(array)$output);

	}



	public function offices()

	{

		$output = $this->grocery_crud->render();



		$this->_example_output($output);

	}



	public function index()

	{

if(!$this->ion_auth->logged_in()){

            redirect('auth/login');

        }



		$this->_example_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));

	}



	public function offices_management()

	{

		try{

			$crud = new grocery_CRUD();



			$crud->set_theme('datatables');

			$crud->set_table('offices');

			$crud->set_subject('Office');

			$crud->required_fields('city');

			$crud->columns('city','country','phone','addressLine1','postalCode');



			$output = $crud->render();



			$this->_example_output($output);



		}catch(Exception $e){

			show_error($e->getMessage().' --- '.$e->getTraceAsString());

		}

	}



	public function employees_management()

	{

			$crud = new grocery_CRUD();



			$crud->set_theme('datatables');

			$crud->set_table('employees');

			$crud->set_relation('officeCode','offices','city');

			$crud->display_as('officeCode','Office City');

			$crud->set_subject('Employee');



			$crud->required_fields('lastName');



			$crud->set_field_upload('file_url','assets/uploads/files');



			$output = $crud->render();



			$this->_example_output($output);

	}



	public function customers_management()

	{

			$crud = new grocery_CRUD();



			$crud->set_table('customers');

			$crud->columns('customerName','contactLastName','phone','city','country','salesRepEmployeeNumber','creditLimit');

			$crud->display_as('salesRepEmployeeNumber','from Employeer')

				 ->display_as('customerName','Name')

				 ->display_as('contactLastName','Last Name');

			$crud->set_subject('Customer');

			$crud->set_relation('salesRepEmployeeNumber','employees','lastName');



			$output = $crud->render();



			$this->_example_output($output);

	}



	public function orders_management()

	{

			$crud = new grocery_CRUD();



			$crud->set_relation('customerNumber','customers','{contactLastName} {contactFirstName}');

			$crud->display_as('customerNumber','Customer');

			$crud->set_table('orders');

			$crud->set_subject('Order');

			$crud->unset_add();

			$crud->unset_delete();



			$output = $crud->render();



			$this->_example_output($output);

	}



	public function products_management()

	{

			$crud = new grocery_CRUD();



			$crud->set_table('products');

			$crud->set_subject('Product');

			$crud->unset_columns('productDescription');

			$crud->callback_column('buyPrice',array($this,'valueToEuro'));



			$output = $crud->render();



			$this->_example_output($output);

	}



	public function valueToEuro($value, $row)

	{

		return $value.' &euro;';

	}



	public function film_management()

	{

		$crud = new grocery_CRUD();



		$crud->set_table('film');

		$crud->set_relation_n_n('actors', 'film_actor', 'actor', 'film_id', 'actor_id', 'fullname','priority');

		$crud->set_relation_n_n('category', 'film_category', 'category', 'film_id', 'category_id', 'name');

		$crud->unset_columns('special_features','description','actors');



		$crud->fields('title', 'description', 'actors' ,  'category' ,'release_year', 'rental_duration', 'rental_rate', 'length', 'replacement_cost', 'rating', 'special_features');



		$output = $crud->render();



		$this->_example_output($output);

	}



	public function film_management_twitter_bootstrap()

	{

		try{

			$crud = new grocery_CRUD();



			$crud->set_theme('twitter-bootstrap');

			$crud->set_table('film');

			$crud->set_relation_n_n('actors', 'film_actor', 'actor', 'film_id', 'actor_id', 'fullname','priority');

			$crud->set_relation_n_n('category', 'film_category', 'category', 'film_id', 'category_id', 'name');

			$crud->unset_columns('special_features','description','actors');



			$crud->fields('title', 'description', 'actors' ,  'category' ,'release_year', 'rental_duration', 'rental_rate', 'length', 'replacement_cost', 'rating', 'special_features');



			$output = $crud->render();

			$this->_example_output($output);



		}catch(Exception $e){

			show_error($e->getMessage().' --- '.$e->getTraceAsString());

		}

	}



	function multigrids()

	{

		$this->config->load('grocery_crud');

		$this->config->set_item('grocery_crud_dialog_forms',true);

		$this->config->set_item('grocery_crud_default_per_page',10);



		$output1 = $this->offices_management2();



		$output2 = $this->employees_management2();



		$output3 = $this->customers_management2();



		$js_files = $output1->js_files + $output2->js_files + $output3->js_files;

		$css_files = $output1->css_files + $output2->css_files + $output3->css_files;

		$output = "<h1>List 1</h1>".$output1->output."<h1>List 2</h1>".$output2->output."<h1>List 3</h1>".$output3->output;



		$this->_example_output((object)array(

				'js_files' => $js_files,

				'css_files' => $css_files,

				'output'	=> $output

		));

	}



	public function offices_management2()

	{

		$crud = new grocery_CRUD();

		$crud->set_table('offices');

		$crud->set_subject('Office');



		$crud->set_crud_url_path(site_url(strtolower(__CLASS__."/".__FUNCTION__)),site_url(strtolower(__CLASS__."/multigrids")));



		$output = $crud->render();



		if($crud->getState() != 'list') {

			$this->_example_output($output);

		} else {

			return $output;

		}

	}



	public function employees_management2()

	{

		$crud = new grocery_CRUD();



		$crud->set_theme('datatables');

		$crud->set_table('employees');

		$crud->set_relation('officeCode','offices','city');

		$crud->display_as('officeCode','Office City');

		$crud->set_subject('Employee');



		$crud->required_fields('lastName');



		$crud->set_field_upload('file_url','assets/uploads/files');



		$crud->set_crud_url_path(site_url(strtolower(__CLASS__."/".__FUNCTION__)),site_url(strtolower(__CLASS__."/multigrids")));



		$output = $crud->render();



		if($crud->getState() != 'list') {

			$this->_example_output($output);

		} else {

			return $output;

		}

	}



	public function customers_management2()

	{

		$crud = new grocery_CRUD();



		$crud->set_table('customers');

		$crud->columns('customerName','contactLastName','phone','city','country','salesRepEmployeeNumber','creditLimit');

		$crud->display_as('salesRepEmployeeNumber','from Employeer')

			 ->display_as('customerName','Name')

			 ->display_as('contactLastName','Last Name');

		$crud->set_subject('Customer');

		$crud->set_relation('salesRepEmployeeNumber','employees','lastName');



		$crud->set_crud_url_path(site_url(strtolower(__CLASS__."/".__FUNCTION__)),site_url(strtolower(__CLASS__."/multigrids")));



		$output = $crud->render();



		if($crud->getState() != 'list') {

			$this->_example_output($output);

		} else {

			return $output;

		}

	}



}

