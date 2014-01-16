<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		// TODO Import initial html or php and separate into separate views
		// $data['title'] = "Beacon Tech Support Website";		
		// $this->load->view('header',$data);
		// $this->load->view('index_content');
		// $this->load->view('footer');
		
		$header_data['title'] = "Weatherford Eats";
		$restaurant_data['restaurants'] = $this->generate();
		$this->load->view('header',$header_data);
		$this->load->view('restaurant_listings',$restaurant_data);
	}
	
	private function generate()
	{
		$this->load->library('restaurant',array(
			'name'=>"Sweetness Factory",	
			'tags'=>"American Bakery",	
			'menu_url'=>'http://sweetnessfactory.com/?page_id=156',
			'image'=>'assets/restaurants/sweetness_factory.png',
			'description' => "Sweet"),
			'sf');
		$this->load->library('restaurant',array(
			'name'=>"The Stand",			
			'tags'=>"American International Sandwiches",	
			'menu_url'=>'assets/restaurants/menus/stand_menu_full.png',
			'image'=>'assets/restaurants/the_stand.jpg',
			'description' => "Awesome sandwiches"),	
			'stand');
		$this->load->library('restaurant',array(
			'name'=>"The Stand",			
			'tags'=>"American BBQ",	
			'menu_url'=>'http://legacy.ybsitecenter.com/images/kop/var/bv/94419/827222-menu.pdf',
			'image'=>'assets/restaurants/heapinhelpinbbq.jpg',
			'description' => "Great local BBQ"),	
			'hhbbq');
		
		
	
		$restaurants = array(
			$this->hhbbq->toString(),
			$this->sf->toString(),
			$this->stand->toString()
		);		
		
		return $restaurants;
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
