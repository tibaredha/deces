<div class="content-right">
<div class="mainmenu">
	<h2 class="sidebar1">Main Menu</h2>
	<ul>	
		<?php if (Session::get('loggedIn') == true)
		{
			echo '<li><a href="'.URL.'">Home</a></li>';
			echo '<li><a href="'.URL.'">Certificat de deces</a></li>';
			echo '<li><a href="'.URL.'Dashboard">Dashboard</a></li>';
			echo '<li><a href="'.URL.'Dashboard/Nouveau">Nouveau</a></li>';
		}
		else 
		{
			echo '<li><a href="'.URL.'">Home</a></li>';
		}
		?>
		
	  <!--
	  <li><a href="pdf/TCPDF.php">TCPDF</a></li>
	  <li><a href="pdf/FPDF.php">FPDF</a></li>
	  <li><a href="pdf/FPDI-FPDF.php">FPDI-FPDF</a></li>
	  <li><a href="pdf/FPDI-TCPDF.php">FPDI-TCPDF</a></li>-->
	</ul>
</div>
<div class="contact">
	<h2 class="sidebar2">Contact</h2>
	<div class="contact-detail">
	<p class="green"><strong>Direction de la Santé et de la Population : </strong>Djelfa</p>
	<p><strong>Adress :</strong> Citée Chaabani Commune Djelfa <br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </p>
	<p><strong>E-mail :</strong> &nbsp;&nbsp;&nbsp;tibaredha@yahoo.fr</p>
	
	<p><strong>Phone :</strong> &nbsp;&nbsp;&nbsp;027-93-60-11<br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;07-72-71-80-59</p>
	</div>
</div>
</div>