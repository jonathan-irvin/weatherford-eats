<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Restaurant {
	
	
	private $name;
	private $tags;
	private $url;
	private $menu_url;
	private $description;	
	
    public function __construct($params)
    {
		$this->name 		= $params['name'];
		$this->tags 		= $params['tags'];
		$this->image		= $params['image'];
		$this->menu_url 	= $params['menu_url'];		
		$this->description  = $params['description'];
    }	
	
	public function toString()
	{
		return "<div class=\"element $this->tags tz_item\">
                <div class=\"TzInner\">
                  <div class=\"TzPortfolioMedia\"> <a href=\"$this->menu_url\" class=\"prettyPhoto\" rel=\"prettyPhoto[id]\"> <img src=\"$this->image\"/>
                    <div class=\"TzPortfolioDescription\">
                      <h3 class=\"TzPortfolioTitle name\" itemprop=\"name\"> <em>$this->name</em> </h3>
                      <span class=\"TzItemTag\">$this->description</span>
                      <div class=\"r_plus \"></div>
                    </div>
                    </a> </div>
                </div>
                <!--Inner--> 
              </div>";
	}
}

/* End of file Restaurant.php */