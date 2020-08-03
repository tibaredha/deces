<?php 
echo '<div class="topmenu">';
echo '<ul>';
echo '<li style="background: transparent none repeat scroll 0% 50%; -moz-background-clip: initial; -moz-background-origin: initial; -moz-background-inline-policy: initial; padding-left: 0px;"><a href="'.URL.'"><span>Home</span></a></li>';
echo '<li><a href="'.URL.'"><span>About&nbsp;us</span></a></li>';
echo '<li><a href="'.URL.'"><span>What s&nbsp;new</span></a></li>';
echo '<li><a href="'.URL.'"><span>Services</span></a></li>';
echo '<li><a href="'.URL.'"><span>['.Session::get('structure').']</span></a></li>';
echo '<li><a href="'.URL.'Users/Profil/'.Session::get('id').'/1"><span>['.Session::get('login').']</span></a></li>';
echo '<li><a href="'.URL.'Login/Logout/'.Session::get('id').'"><span>[Logout]</span></a></li>';
echo '</ul>';
echo '</div>';
?>
		