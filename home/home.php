<!DOCTYPE html>
<html>
    <head>
        <title>HomePage</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link rel="stylesheet" href="home.css"/>
        <link rel="stylesheet" href="../res/res.css"/>
        <link href='https://fonts.googleapis.com/css?family=Aclon' rel='stylesheet'/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="../res/res.js"></script>
        <script src="home.js"></script>
        <style>
		body, html {
  height: 100%;
}
.parallax {
  /* The image used  for parallax 1st*/
  background-image: url('../images/i5.jpg');

  /* Full height */
  height: 50%; 

  /* Create the parallax scrolling effect */
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

.parallax1 {
  /* The image used for parallax 2nd*/
  background-image: url('../images/park.jpg');

  /* Full height */
  height: 50%; 

  /* Create the parallax scrolling effect */
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

.parallax2 {
  /* The image used for parallax 3rd*/
  background-image: url('../images/i4.jpg');

  /* Full height */
  height: 50%; 

  /* Create the parallax scrolling effect */
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

/*for button to map*/
.button6 {
  background-color: #03a9f4;
  color: white;
  border: 2px solid #555555;
}

.button6:hover {
  background-color: white;
  color: #03a9f4;
   box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}

.textsome{
	/*for text on parallax*/
  position: absolute;
  z-index: 1000;
  
}

span.c {
  display: block;
  width: 300px;
  height: 300px;
  padding: 5px;
/*  border: 1px solid black;    
*/  background-color:#37474f ; 
}

span.c:hover {
	display: block;
  width: 300px;
  height: 300px;
  padding: 20px;	
  border: 1px solid #1e88e5;    
  background-color:#1e88e5;
 
}




	</style>
    </head>
    <body>
        <header>
        <div class="container-fluid  back1"> 
          <div class="row" style="line-height: 110px;">
            <div class="col-lg-6"><a href="../home/home.php" alt="Symbol"><img src="../images/car2.png" alt="Image" width="100" height="100"/></a>
              <span class="heading">Car Parking</span></div>
              <div class="col-lg-6">
              <ul class="nav nav-pills" style="float:right;">
                <li class="active"><a href="../home/home.php" class="pills-features">HOME</a></li>
                <li><a href="../map/map.php" class="pills-features">MAP</a></li>
                  <!--<li><a href="../feedback/feedback.html" class="pills-features">FEEDBACK</a></li>-->
                  <li><a href="../receipt/receipt.php" class="pills-features">RECEIPT</a>
                <li><a href="../login/login.html" class="pills-features">LOGIN</a></li>
                <li><a href="../signup/signup.html" class="pills-features">SIGN UP</a></li>
              </ul>
          </div>
           </div>
        </div>
        </header>
        <div style="height:1000px;background-color:#37474f;font-size:36px; position: relative; ">
						<h1 style="margin-top: 200px; text-align: center; position: absolute; margin-left: 400px; color: white;">WE HAVE THE BEST DEALS<br>FOR THE PARKING LOTS!</h1> 
						<h3 style="margin-top: 400px; text-align: center; position: absolute; margin-left: 600px; color: white;">Instantly BOOK your space today.</h3> 
						<a href="../map/map.html"><button class="button6" style="padding: 16px; border-radius: 12px; width: 800px; margin-top: 500px; margin-left: 600px;" ><h2>Let's Book</h2></button></a>

		</div>

		<div class="parallax">
			<h1 class="textsome" style="margin-top:220px; margin-left: 700px; color:#ffebee; font-size: 50px;">A STEP TOWARDS<br>SMART CITY</h1>
		</div>
        <div style="height:500px;background-color:#37474f;font-size:36px; position: relative;">
        <span class="c" style="margin-top: 90px; margin-left: 380px; position: absolute; color: white;" ><h3 style="font-size: 40px;"><center>Save Money</center></h3>
      <p style="font-size:25px;">Save up to 60% on our site Compared to the cost on-Airport Parking</p></span>
      <!-- <p style="font-size:25px;"></p></span> -->

        
      <span class="c" style="margin-top: 90px; margin-left: 730px; position: absolute; color: white;" ><h3 style="font-size: 40px;">Save Time</h3>
      <p style="font-size:25px;">It's easy to compare all parking places. Booking a reservation is quick & simple!</p></span>

      <span class="c" style="margin-top: 90px; margin-left: 1080px; position: absolute; color: white;" ><h3 style="font-size: 40px;">Save Stress</h3>
      <p style="font-size:25px;">Guarantee your parking spot by booking in advance. Can't make it? Cancellation are free.</p></span>
        </div>
		<div class="parallax1">
			<!-- <h1 class="textsome">hiiiii</h1> -->
			<h1 class="textsome" style="margin-top:220px; margin-left: 100px; color:black; font-size: 50px;">PARK WHERE YOU ARE,<br>NOT WHERE YOU AREN'T.</h1>
		</div>

		<div style="height:500px;background-color:#37474f;font-size:36px">
			
		</div>

		<div class="parallax2">
			<h1 class="textsome" style="margin-top:150px; margin-left: 550px; color:#ffebee; font-size: 40px;">WE DON'T KNOW WHAT THE<br> CAR OF THE FUTURE WILL<br> LOOK LIKE,<br>BUT WE DO KNOW WHERE<br> IT WILL BE PARKING.</h1>
		</div>

		<div style="height:500px;background-color:#37474f;font-size:36px">

		</div>
        <footer style="position:relative;bottom:0;width: 100%;margin-top:300px;">
            <div  class="footer1 container-fluid" style="position:absolute;bottom:0;width:100%">
            <div class="row">
                  <div class="col-lg-4">
                      <b class="foot-head"><div class='fa fa-thumb-tack'></div> LINKS</b>
                      <ul class="foot-text">
                          <li><a href="../home/home.php" class="linkFoot">HOME</a></li>
                          <li><a href="../map/map.php" class="linkFoot">MAP</a></li>
                          <li><a href="../receipt/receipt.php" class="linkFoot">RECEIPT</a></li>
                          <li><a href="../login/login.html" class="linkFoot">LOGIN</a></li>
                          <li><a href="../signup/signup.html" class="linkFoot">SIGN UP</a></li>
                      </ul>
                  </div>
                  <div class="col-lg-4">
                      <b class="foot-head"><div class='fa fa-thumb-tack'></div> JOIN US</b><br/>
                      <a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
                      <a href="https://twitter.com/login?lang=en"><i class="fa fa-twitter"></i></a>
                      <a href="https://plus.google.com/discover"><i class="fa fa-google"></i></a>
                      <a href="https://in.linkedin.com/"><i class="fa fa-linkedin"></i></a>
                  </div>
                  <div class="col-lg-4">
                      <b class="foot-head"><div class='fa fa-thumb-tack'></div> Frequently asked questions</b>
                      <ul class="foot-text">
                          <li><a href="../faq/faq.html" class="linkFoot">Why should I choose this blogging site?</a></li>
                          <li><a href="../faq/faq.html" class="linkFoot">How can quality content grow my audience?</a></li>
                          <li><a href="../faq/faq.html" class="linkFoot">How should I research blog topics and get information for my specific niche?</a></li>
                          <div style="float:right"><a href="../faq/faq.html" class="linkFoot">more.....</a></div>
                      </ul>
                  </div>
            </div>
            </div>
            </footer>
    </body>
</html> 
