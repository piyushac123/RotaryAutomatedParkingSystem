<!doctype html>
<html>
    <body>
        <?php
            $name= "'".$_POST['fname']."'";
            $email= "'".$_POST['email1']."'";
            $passcode= "'".intval($_POST['passcode'])."'";
            $password= "'".$_POST['password']."'";
            $accno= "'".$_POST['accno']."'";
            $expDate= "'".$_POST['date1']."'";
            $cvv= "'".$_POST['cvv']."'";

            $con = mysqli_connect('localhost','root','','Sociothon');
            if (!$con) {
                die('Could not connect: ' . mysqli_error($con));
            }

            //mysqli_select_db($con,"ajax_demo");

            $sql="INSERT INTO Registration (`email`, `firstName`, `password`,`accno`,`expiryDate`,`cvv`,`passcode`,`checkLogin`)
            VALUES ($email,$name,$password,$accno,$expDate ,$cvv ,$passcode,'1')";
            
            if ($con->query($sql) === FALSE) {
                echo "Error: " . $sql . "<br>" . $con->error;
            }else{
               ?>
                <script>
                    window.history.go(-2);
                </script>
                <?php 
                
                
            }
            /*else {
                echo "Error: " . $sql . "<br>" . $con->error;
            }*/
            //  echo $name." ".$email." ".$passcode." ".$password;

            /*echo "<table>
            <tr>
            <th>locationID</th>
            <th>locationName</th>
            <th>latitude</th>
            <th>longitude</th>
            </tr>";
            while($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" . $row['locationID'] . "</td>";
                echo "<td>" . $row['locationName'] . "</td>";
                echo "<td>" . $row['latitude'] . "</td>";
                echo "<td>" . $row['longitude'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";*/
            mysqli_close($con);
        //if($something){
        
        //}
        ?>
    </body>
</html>