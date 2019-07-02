<!DOCTYPE html>
<html>
    <head>
        <title>HomePage</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link rel="stylesheet" href="receipt.css"/>
        <link rel="stylesheet" href="../res/res.css"/>
        <link href='https://fonts.googleapis.com/css?family=Aclon' rel='stylesheet'/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="../res/res.js"></script>
        <script src="receipt.js"></script>
    </head>
    <body class="body1">
        <div class="container" style="margin-top:80px;">
            <div class="row">
                <p style="text-align:center; font-variant: small-caps;font-weight:bold;font-size:50px;color:white;">Your Details</p>
            </div>
            <div class="row">
                <div class="col-lg-2">
                </div>
                <div class="col-lg-8" style="background-color: black;color:white;">
                    <div style="border: 2px solid black; padding:70px;;margin-top:30px;">
                        <h3>
                        <ul>
                            <li style="list-style-type:none;margin-top:30px;">E-Mail : </li>
                            <li style="list-style-type:none;margin-top:30px;">Account No. : </li>
                            <li style="list-style-type:none;margin-top:30px;">Date : </li>
                            <li style="list-style-type:none;margin-top:30px;">Arrival Time : </li>
                            <li style="list-style-type:none;margin-top:30px;">Stay Time : </li>
                        </ul>
                        </h3>
                        <h4><center><button class="btn11">CONFIRM BOOKING</button></center></h4>
                    </div>
                </div>
            </div>
        </div>
        <?php
            /*//$q = intval($_GET['q']);

            $con = mysqli_connect('localhost','root','','Sociothon');
            if (!$con) {
                die('Could not connect: ' . mysqli_error($con));
            }

            //mysqli_select_db($con,"ajax_demo");

            $sql="SELECT * FROM slots";
            $result = mysqli_query($con,$sql);

            echo "<table>
            <tr>
            <th>locationID</th>
            <th>locationName</th>
            <th>latitude</th>
            </tr>";
            while($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" . $row['locationID'] . "</td>";
                echo "<td>" . $row['slotID'] . "</td>";
                echo "<td>" . $row['confirmBooking'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
            mysqli_close($con);*/
        ?>
        
    </body>
</html> 