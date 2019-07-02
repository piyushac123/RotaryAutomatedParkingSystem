<!doctype html>
<html>
    <body>
        <?php
            $email= $_POST['email1'];
            $pass= $_POST['password1'];

            $con = mysqli_connect('localhost','root','','Sociothon');
            if (!$con) {
                die('Could not connect: ' . mysqli_error($con));
            }

            //mysqli_select_db($con,"ajax_demo");
            
            $sql="select email,password from Registration";
            $result = mysqli_query($con,$sql);
            $flag=0;
            while($row = mysqli_fetch_array($result)){
                if($row['email']==$email && $row['password']==$pass){
                    $flag=1;
                    {   $sql1="UPDATE `Registration` SET `checkLogin`=1 WHERE email='".$email."'";
                     $result1 = mysqli_query($con,$sql1);
                    ?>
                    <script>
                        alert("Logged In Successfully");
                        window.history.go(-2);
                    </script>
                    <?php
                        break;
                    }
                }
                
            }
            if($flag!=1)
                {
                ?>
                <script>
                    alert("Match not found");
                    window.history.go(-2);
                </script>
                <?php
                }
            //echo $email." ".$pass;

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
            //mysqli_close($con);
        ?>
    </body>
</html>