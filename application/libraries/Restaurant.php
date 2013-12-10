<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Restaurant {
	
	private $tags;
	private $name;
	private $description;	
	
    public function __contstruct($name,$tags,$description)
    {
		$name = $this->name;
		$tags = $this->tags;
		$description = $this->description;
    }
	
	public function toString()
	{
		print "<div id=\"portfolio\" class=\"super-list variable-sizes clearfix\">
              <div class=\"element American Bakery tz_item\">
                <div class=\"TzInner\">
                  <div class=\"TzPortfolioMedia\"> <a href=\"http://placehold.it/400x300&text=$name\" class=\"prettyPhoto\" rel=\"prettyPhoto[id]\"> <img src=\"http://placehold.it/400x300&text=$name\"/>
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

/* End of file Restaurant.php */