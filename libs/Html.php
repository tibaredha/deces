<?php
class Html  
{
    
	public function __construct()
	{			
		
	}
	
	function Wilaya($id,$class,$name,$value,$selected,$source)
    {	
		if (isset($source))
		{
			echo "<select  id=\"".$id."\" size=1 class=\"".$class."\" name=\"".$name."\" onblur=\"genererCodeP()\">"."\n";
			echo"<option  value=\"".$value."\"  selected=\"selected\">".$selected."</option>"."\n";
			foreach($source as $key => $value)
			{
				echo '<option value="'.$value['IDWIL'].'">'.$value['WILAYAS'].'</option>';
			}
			echo '</select>'."\n";
		}
	}
	
	function Commune($id,$class,$name,$value,$selected)
    {
		echo "<select id=\"".$id."\" size=1 class=\"".$class."\" name=\"".$name."\" onblur=\"genererCodeP()\"  >"."\n";
		echo"<option  value=\"".$value."\" selected=\"selected\">".$selected."</option>"."\n";
		echo '</select>'."\n";
	}

    function Structure($name,$id,$class,$value,$selected) 
	{	 
	echo "<select id=\"".$id."\" size=1 class=\"".$class."\" name=\"".$name."\">"."\n";
	echo"<option value=\"".$value."\" selected=\"selected\">".$selected."</option>"."\n";
	echo '</select>'."\n";
	}

   //*****************************************************************************//
    function CaptchaCreate() {
	
		$resultat = rand(1000,9999);
		$phrase = $resultat;
		return array($resultat, $phrase);
	}
	
    function captchax() {
	
		list($resultat, $phrase) = $this->CaptchaCreate();
		$_SESSION['captcha'] = $resultat;
		return $phrase;
	}

	
		
	function password_generator($size , $with_numbers=true , $with_tiny_letters=true, $with_capital_letters=true){ 
	  $pass_g = ""; 
	  $sizeof_lchar = 0; 
	  $letter = ""; 
	  $letter_tiny = "abcdefghijklmnopqrstuvwxyz"; 
	  $letter_capital = "ABCDEFGHIJKLMNOPQRSTUVWXYZ"; 
	  $letter_number = "0123456789"; 
	  
	  if($with_tiny_letters == true){ 
	  $sizeof_lchar += 26; 
	  if (isset($letter)) $letter .= $letter_tiny; 
	  else $letter = $letter_tiny; 
	  } 
	  
	  if($with_capital_letters == true){ 
	  $sizeof_lchar += 26; 
	  if (isset($letter)) $letter .= $letter_capital; 
	  else $letter = $letter_capital; 
	  } 
	  
	  if($with_numbers == true){ 
	  $sizeof_lchar += 10; 
	  if (isset($letter)) $letter .= $letter_number; 
	  else $letter = $letter_number; 
	  } 
	  
	  if($sizeof_lchar > 0){ 
	  srand((double)microtime()*date("YmdGis")); 
	  
	  for($cnt = 0; $cnt < $size; $cnt++){ 
	  $char_select = rand(0, $sizeof_lchar - 1); 
	  $pass_g .= $letter[$char_select]; 
	  } 
	  } 
	  return $pass_g;   
	}
	 //*****************************************************************************//
}
?>
