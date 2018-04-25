<?php 
$passed_title = 'Result';
include('./include_files/HTML_MENU.inc'); // INCLUDING HTML MENU ?>
    
	
	<br>
	<br>

    <div id="map" class="map"></div>
    <script>
		myLatLngArray = [];
	</script>
	
	
	
	<br>
	<br>
	<br>
	
		<table id="table-fill"  style="width:50%" >
         <thead>		 
		 <tr>
			<th id="text-left">Name</th>
			<th id="text-left">Suburd</th> 
			<th id="text-left">Easting</th>
			<th id="text-left">Northing</th>
			<th id="text-left">Visit</th>
		  </tr>
		  </thead>
		  
	
    <?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "assignment_test";

	$name = $_GET['name']; 
	$suburb = $_GET['suburb'];
	
	$najib = mysqli_connect($servername,$username,$password,$dbname);

	$select1 = "SELECT * FROM park WHERE Name Like '%" . $name . "%' AND Suburb Like '%" . $suburb . "%' LIMIT 4";
	
	$result = mysqli_query($najib,$select1);
	
	while($row = mysqli_fetch_assoc($result)){ ?>
	
		<tbody class="table-hover"> 
		<tr>
	          	
		      <td class="text-left"><?php echo  $row['Name']; ?></td>		 
			  <td class="text-left"><?php echo  $row['Suburb']; ?></td>
			  <td class="text-left"><?php echo  $row['Easting']; ?></td>
			  <td class="text-left"><?php echo  $row['Northing']; ?></td>
			  <td><a href="<?php echo 'item.php?id=' . $row['id'] ?>">Review</a></td> 
		</tr>
		</tbody>
		<script>
			myLatLngArray.push({lat: <?php echo $row['Latitude'] ?>,lng: <?php echo $row['Longitude'] ?>});
			console.log(myLatLngArray);
		</script>
		
		
    <?php		
	}
	?>
	<script>
      var map;
	  console.log(myLatLngArray);
	
	  
      function initMap() {
		  var myLatLng = {lat: -27.4698, lng: 153.0251};
		  var marker;
		  
          var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 10,
          center: myLatLng
          });

		  
		  for (var i = 0; i < myLatLngArray.length; i+=1) {
			  var marker = new google.maps.Marker({
				position:{lat: myLatLngArray[i].lat, lng: myLatLngArray[i].lng},
				map: map,
				visible: true
			  });
		  }
		  
		  marker.setMap(map);
		  
      }
    </script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD4mSIwn2723vuGV97zCy7GGLvkkUkpMj0&callback=initMap"
    async defer></script>
	</table> 
        <br>
		<br>    
<?php include('./include_files/HTML_FOOTER.inc');  // HTML FOOTER INCLUDE FILE?>