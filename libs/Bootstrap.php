<?php
class Bootstrap 
{
	private $controllers="controllers";
	
	function __construct() 
	{
		$url = isset($_GET['url']) ? $_GET['url'] : null;
		$url = rtrim($url, '/');
		$url = explode('/', $url);
      
		// calling controller
		if (empty($url[0])) 
		{
			$config = "libs/Config.php";
			if (file_exists($config))
			{
				require $this->controllers.'/Index.php';
				$controller = new Index();
				$controller->Index();
			} 
			else 
			{
				require $this->controllers.'/Setup.php';
				$controller = new Setup();
				$controller->Index();	
			}
				
			return false;	
		}
        //verifier si fichier exist
		$file = $this->controllers.'/'.$url[0].'.php';
		if (file_exists($file)) 
		{
			require $file;
			$controller = new $url[0];//instacier la class controlleur + appeler le model corespandant + instacier view
			$controller->loadModel($url[0]);
			
			if (isset($url[2]))      //calling methods
			{
				if (method_exists($controller, $url[1])) {
					$controller->{$url[1]}($url[2]); // avec parametre 
				} else {
					$this->Error();
				}
			} 
			else 
			{
				if (isset($url[1])) {
					if (method_exists($controller, $url[1])) {
						$controller->{$url[1]}(); //sans parametre
					} else {
						$this->Error();
					}
				} else {
					$controller->Index();
				}
			}	
		} 
		else 
		{
			$this->error();
			return false;
		}	
	}
	
	function Error() {
		require $this->controllers.'/Errors.php';
		$controller = new Errors();
		$controller->Index();
		return false;
	}

}