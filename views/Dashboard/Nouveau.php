<style>
#inner-grid {
  display: grid;padding: 8px;
  grid-template-columns: 1fr 1fr 1fr ;
  grid-template-rows: 20px 20px 20px 20px 20px 20px 20px 20px 20px 20px 20px;
  grid-gap: 10px;
}

#a {border-radius: 5px;padding: 8px;grid-column: 1  / 2;  grid-row: 1 / 3;}
#b {border-radius: 5px;padding: 8px;grid-column: 2  / 3;  grid-row: 1 / 3;}
#c {border-radius: 5px;padding: 8px;grid-column: 3  / 4;  grid-row: 1 / 3;}

#a1 {border-radius: 5px;padding: 8px;grid-column: 1  / 2;  grid-row: 3 / 5;}
#b1 {border-radius: 5px;padding: 8px;grid-column: 2  / 3;  grid-row: 3 / 5;}
#c1 {border-radius: 5px;padding: 8px;grid-column: 3  / 4;  grid-row: 3 / 5;}

#a2 {border-radius: 5px;padding: 8px;grid-column: 1  / 2;  grid-row: 5 / 7;}
#b2 {border-radius: 5px;padding: 8px;grid-column: 2  / 3;  grid-row: 5 / 7;}
#c2 {border-radius: 5px;padding: 8px;grid-column: 3  / 4;  grid-row: 5 / 7;}

#a3 {border-radius: 5px;padding: 8px;grid-column: 1  / 2;  grid-row: 7 / 9;}
#b3 {border-radius: 5px;padding: 8px;grid-column: 2  / 3;  grid-row: 7 / 9;}
#c3 {border-radius: 5px;padding: 8px;grid-column: 3  / 4;  grid-row: 7 / 9;}

#a4 {border-radius: 5px;padding: 8px;grid-column: 1  / 2;  grid-row: 9 / 11;}
#b4 {border-radius: 5px;padding: 8px;grid-column: 2  / 3;  grid-row: 9 / 11;}
#c4 {border-radius: 5px;padding: 8px;grid-column: 3  / 4;  grid-row: 9 / 11;}
</style>
<div class="content-left">
	<div class="row1">
	<h1 class="title">Certificat de <span> deces</span></h1>
						<form action="<?php echo URL;?>pdf/FPDI-FPDF.php" method="post">
						<div class="tabbed_area">  
							<ul class="tabs">  
								<li><a href="javascript:tabSwitch('tab_1', 'content_1');" id="tab_1" class="active">1er partie</a></li>  
								<li><a href="javascript:tabSwitch('tab_2', 'content_2');" id="tab_2">2em partie</a></li> 
								<li><a href="javascript:tabSwitch('tab_3', 'content_3');" id="tab_3">3em partie</a></li> 	
								<li><a href="javascript:tabSwitch('tab_4', 'content_4');" id="tab_4">4em partie </a></li> 	
							</ul>  
						<div id="content_1" class="contenttabs1">
								<div id="inner-grid">
									<div id="a">
										<label for="comb_wilaya">Wilaya de déces:</label><?php $this->Wilaya("comb_wilayad","comb_wilayad","comb_wilayad","17000","Djelfa",$this->wilayaListview);?>
									</div>
									<div id="b">
										<label for="comb_commune">Commune de déces:</label><?php $this->Commune("comb_communed","comb_communed","comb_communed","914","Ain-oussera"); ?>
									</div>
									<div id="c">
										<label for="ldéces">Date de déces :</label><input type="text" id="ldéces" name="ldéces" value="">	
									</div>
								
									<div id="a1">
										<label for="fname">Nom:</label><input type="text" id="fname" name="fname" value="">
						                
									</div>
									<div id="b1">
										 <label for="lname">Prenom:</label><input type="text" id="lname" name="lname" value="">    
									</div>
									<div id="c1">
										<label for="lsexe">Sexe:</label><select name="lsexe" id="lsexe"><option value="M">M</option><option value="F">F</option></select> 	
									</div>
								
								    <div id="a2">
										 <label for="fnamep">Nom pere:</label><br><input type="text" id="fnamep" name="fnamep" value="">     
									</div>
									<div id="b2">
										    <label for="lnamem">Nom et Prenom de la mere :</label><input type="text" id="lnamem" name="lnamem" value="">
									</div>
									<div id="c2">
									   	    
									</div>
								
									<div id="a3">
									       <label for="comb_wilaya">Wilaya de naissance:</label><?php $this->Wilaya("comb_wilaya","comb_wilaya","comb_wilaya","17000","Djelfa",$this->wilayaListview);?>	
									</div>
									<div id="b3">
										   <label for="comb_commune">Commune de naissance:</label><?php $this->Commune("comb_commune","comb_commune","comb_commune","914","Ain-oussera"); ?> 
									</div>
									<div id="c3">
										<label for="ldnaisance">Date de naissance :</label><input type="text" id="ldnaisance" name="ldnaisance" value="">	
									</div>
								
								    <div id="a4">
									       <label for="comb_wilayar">Wilaya de residence:</label><br><?php $this->Wilaya("comb_wilayar","comb_wilayar","comb_wilayar","17000","Djelfa",$this->wilayaListview); ?><br><br>
									</div>
									<div id="b4">
										   <label for="comb_commune">Commune de residence:</label><br><?php $this->Commune("comb_communer","comb_communer","comb_communer","914","Ain-oussera"); ?><br><br>
									</div>
									<div id="c4">
										<input type="hidden" id="variable" name="variable" value="<?php echo DO_ROOT; ?>">
									</div>
								</div>
							</div>
							<div id="content_2" class="contenttabs2"></div>
							<div id="content_3" class="contenttabs3"></div>
							<div id="content_4" class="contenttabs4"> 
							     <input type="submit" id="submit" value="Submit">
							</div>
						</div>
						</form>
    </br>	
	</div>
	
</div>							
