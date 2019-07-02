<html>
<head>
<title>Login Form Design</title>
    <link rel="stylesheet" type="text/css" href="getTime.css">
    <link rel="stylesheet" type="text/css" href="../res/res.css">
    <link rel="stylesheet" type="text/css" href="../res/res.js">
    
<body>
    
    <?php
    $email="'".$_POST["email1"]."'";
    $date="'".$_POST["date1"]."'";
    $aTime="'".$_POST["arrivalTime1"].":00'";
    $sTime="'".$_POST["stayTime1"]."'";

            $con = mysqli_connect('localhost','root','','Sociothon');
            if (!$con) {
                die('Could not connect: ' . mysqli_error($con));
            }
            $sql="SELECT * FROM Registration where email=".$email;
            $result = mysqli_query($con,$sql);
            //$row = mysqli_fetch_array($result);
            $flag=0;
            global $login,$custid;
            while($row = mysqli_fetch_array($result)) {
                $login=$row['checkLogin'];
                 $custid=$row['custID'];
                $flag=1;
            }
            //mysqli_select_db($con,"ajax_demo");
            $sql1="INSERT INTO booking (`custID`, `locationID`, `slotID`, `arrivingTime`, `actualArrivingTime`, `stayTime`, `leaveTime`, `bookingDate`) VALUES ($custid, 'A0', 'A00', $aTime, NULL, $sTime, NULL, $date)";
            if ($con->query($sql1) === FALSE) {
                echo "Error: " . $sql1 . "<br>" . $con->error;
            }
            else{
                        echo "Successful ";
                    }
            
            if($flag==0){
                ?>
                <script>
                    window.alert('You are not registered!');
                    window.location.replace('../signup/signup.html');
                </script>
                <?php
            }
            else if($flag==1){
                if($login   ==1){
                    ?>
                    <script>
                        window.location.replace('../receipt/receipt.php');
                    </script>
                    <?php
                }
                else{
                    ?>
                    <script>
                        window.alert('Please Log In!');
                        window.location.replace('../login/login.html');
                    </script>
                    <?php
                }
            }
            
            /*echo "<table>";
                echo "<tr>";
                echo "<td>" . $row['locationID'] . "</td>";
                echo "<td>" . $row['locationName'] . "</td>";
                echo "<td>" . $row['address'] . "</td>";
                echo "<td>" . $row['emptySlot'] . "</td>";
                echo "</tr>";
            echo "</table>";*/
            mysqli_close($con);
    ?>
    
</body>
</head>
</html>
