<?php
class View  extends Html {

    private $views="views";
	
	function __construct() {
	
	}

	public function Render($name, $noInclude = false)
	{
		if ($noInclude == true) {
			require $this->views.'/'.$name.'.php';	
		}
		else {
			require $this->views.'/Header.php';
			require $this->views.'/'.$name.'.php';
			require $this->views.'/Content-right.php';	
			require $this->views.'/Footer.php';	
		}
	}

}