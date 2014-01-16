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
	
		return "<div class=\"element $tags tz_item\">
                <div class=\"TzInner\">
                  <div class=\"TzPortfolioMedia\"> <a href=\"$menu_url\" class=\"prettyPhoto\" rel=\"prettyPhoto[id]\"> <img src=\"$img\"/>
                    <div class=\"TzPortfolioDescription\">
                      <h3 class=\"TzPortfolioTitle name\" itemprop=\"name\"> <em>$name</em> </h3>
                      <span class=\"TzItemTag\">$description</span>
                      <div class=\"r_plus \"></div>
                    </div>
                    </a> </div>
                </div>
                <!--Inner--> 
              </div>";
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
