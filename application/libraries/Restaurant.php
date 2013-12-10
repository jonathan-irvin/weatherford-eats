<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Restaurant {
	
	private $tags;
	private $name;
	private $description;	
	
    public function __construct($params)
    {
		$this->name 		= $params['name'];
		$this->tags 		= $params['tags'];
		$this->description  = $params['description'];
    }	
	
	public function toString()
	{
		return "<div id=\"portfolio\" class=\"super-list variable-sizes clearfix\">
              <div class=\"element $this->tags tz_item\">
                <div class=\"TzInner\">
                  <div class=\"TzPortfolioMedia\"> <a href=\"http://placehold.it/400x300&text=$this->name\" class=\"prettyPhoto\" rel=\"prettyPhoto[id]\"> <img src=\"http://placehold.it/400x300&text=$this->name\"/>
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