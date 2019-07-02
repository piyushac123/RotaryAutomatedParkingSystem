<!DOCTYPE html>
<html>
<head>
<title>hello</title>
</head>
<body>
<button onclick="displayPopup(12,14)">btn</button>
<script>
function displayPopup(tempLat,tempLng){
    // Get the modal
                //var modal = document.getElementById('myModal');
                // Get the <span> element that closes the modal
                //var span = document.getElementsByClassName("close")[0];
		//window.location = "?var1=" + tempLat;
		window.location = "?var1=" + tempLat+"&var2="+tempLng;
}
</script>
<?php
$lat=$_GET['var1'];
$lng=$_GET['var2'];
echo $lat." ".$lng;
?>
</body>
</html> 
