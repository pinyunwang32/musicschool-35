<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "assignment_test";


	$najib = new mysqli($servername,$username,$password,$dbname); 
	
	$id=$_GET['id'];
	$query="SELECt * FROM park WHERE id=" .$id;
	$result=mysqli_query($najib,$query);
	
	$item = mysqli_fetch_assoc($result);
	
	$passed_title = $item['Suburb'];

include('./include_files/HTML_MENU.inc'); // INCLUDING HTML MENU ?>


    <h2>User review</h2>
	<br>

    <div id="map" class="map"></div>
    <script>
      var map;
	  var marker;
	  var longitude = <?php echo $item['Longitude'] ?>;
	  var latitude = <?php echo $item['Latitude'] ?>;

      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: latitude, lng: longitude},
          zoom: 15
		  
		  
        });
		
		marker = new google.maps.Marker({
			position: {lat: latitude, lng: longitude},
			map: map
		});
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD4mSIwn2723vuGV97zCy7GGLvkkUkpMj0&callback=initMap"
    async defer></script>
	
	<h3>park info</h3>
	
	<table  class="table-fill" style="width:20%">
		  <tr>
			<th>Name</th>
			<th>Suburb</th> 
			
		  </tr>
		  <tr>
			<td><?php echo $item['Name'] ?></td>
			<td><?php echo $item['Suburb'] ?></td> 
			 </tr>
	</table>

		 
   <form style="margin-left: 35em" name="review" method="post" action="review.php">
   
			<label for="id_rest_name">comment:</label>
			<br>
	 <input id="id_rest_name" style="width: 50%" class="form-control" type="text" name="rest_name"/><br/>
	 <div class="stars">         
    <input class="star star-5" id="star-5" type="radio" name="star"/>
    <label class="star star-5" for="star-5"></label>
    <input class="star star-4" id="star-4" type="radio" name="star"/>
    <label class="star star-4" for="star-4"></label>
    <input class="star star-3" id="star-3" type="radio" name="star"/>
    <label class="star star-3" for="star-3"></label>
    <input class="star star-2" id="star-2" type="radio" name="star"/>
    <label class="star star-2" for="star-2"></label>
    <input class="star star-1" id="star-1" type="radio" name="star"/>
    <label class="star star-1" for="star-1"></label>
	
   </div>
     
		<br/>		
			<input type="submit" value="Submit"  style="width:30%" name="Submit"><br>	
		</form>
	
		
		
		
		


 
   
   
   
   
   
   
   
   
   
<?php include('./include_files/HTML_FOOTER.inc');  // HTML FOOTER INCLUDE FILE
?>



