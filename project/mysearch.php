<?php 
$passed_title = 'Seach';
include('./include_files/HTML_MENU.inc'); // INCLUDING HTML MENU ?>	       
			<br>
			
			<div class="form">
			      
			  <form class="seach-page" action="myresult.php" name="result">
			     <input type="text" name="name" placeholder="name"/>
				 
				 <input type="text" name="suburb" placeholder="subrubs"/>
				 				 	                 
                  <label for="KM"></label>
                     <input type="number" id="KM" name="Postcode" placeholder="Within how many KM">			 
				     <button> seach</button>
			  </form>
			      
			</div>						 			
	
<?php include('./include_files/HTML_FOOTER.inc');  // HTML FOOTER INCLUDE FILE?>