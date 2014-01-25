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
		$header_data['title'] = "Weatherford Eats";
		$restaurant_data['restaurants'] = $this->generate();
		$this->load->view('header',$header_data);
		$this->load->view('nav');
		$this->load->view('restaurant_listings',$restaurant_data);
		$this->load->view('settings');
		$this->load->view('footer');
	}
	
	private function generate()
	{
		$this->load->database();
		
		$query = $this->db->get('restaurants');
		
		foreach ($query->result() as $row)
		{			
			$restaurants[] = $this->restaurant_output(
				array(
				'name'				=>$row->name,	
				'tags'				=>$row->tags,	
				'menu_url'			=>$row->menu_url,
				'image'				=>$row->image_url,
				'description'	 	=>$row->description)
			);
		}	
		
		return $restaurants;
	}
	
	private function restaurant_output($params){			
		
		$name 			= $params['name'];
		$tags			= $params['tags'];
		$img			= $params['image'];
		$menu_url		= $params['menu_url'];	
		$description	= $params['description'];			
	
		return "<!-- A GALLERY ENTRY -->
				<div class=\"mega-entry $tags\" id=\"mega-entry-1\" data-src=\"$img\" data-width=\"780\" data-height=\"585\" data-lowsize=\"\">
				  <div class=\"mega-covercaption mega-square-bottom mega-landscape-right mega-portrait-bottom mega-blue\"> 
					<!-- The Content Part with Hidden Overflow Container -->
					
					<div class=\"mega-title\"><img src=\"images/icons/grid.png\" alt=\"\" style=\"float: left; padding-right: 15px;\"/>$name</div>
					<div class=\"mega-date\">Windows 8 Style</div>
					<p>$description<br/>
					  <br/>
					  <a href=\"$menu_url\">See the Menu</a></p>
				  </div>
				  
				  <!-- The Link Buttons -->
				  <div class=\"mega-coverbuttons\">
					<div class=\"mega-link mega-blue\"></div>
					<a class=\"fancybox\" rel=\"group\" href=\"$img\" title=\"Photo\">
					<div class=\"mega-view mega-blue\"></div>
					</a> </div>
				</div>";
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
