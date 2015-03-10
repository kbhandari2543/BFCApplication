<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/themes/my-custom-theme.css" />
    <link rel="stylesheet" href="css/themes/jquery.mobile.icons.min.css" />
     <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
    <link rel="stylesheet" type="text/css" href="css/index.css" />
    <script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
    <title>Bratford Flight Club</title>
</head>

<body>
    <div data-role="page" id="Home" data-theme="d">
        <!--Home page-->
        <div id="header" data-role="header" >
            <div id="logo" class="clearfix">
                <a href="#Home">
                    <img id="imglogo" class="img-responsive" src="img/bfclogo.gif" alt="BrantFord Flight Center" />
                </a>
            </div>
            <div id="navbar" data-role="navbar" data-theme="b">
                <ul>
                    <li><a href="#Home" class="ui-btn ui-corner-all ui-shadow ui-icon-home ui-btn-icon-left ui-btn-active">Home</a>
                    </li>
                    <li> <a href="#Register" class="ui-btn ui-corner-all ui-shadow ui-icon-user ui-btn-icon-left ui-btn-active">Register</a>
                    </li>
                    <li><a href="#Login" class="ui-btn ui-corner-all ui-shadow ui-icon-lock ui-btn-icon-left ui-btn-active">Login</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /header -->

        <div data-role="content">

            <ul data-role="listview">
                <li>
                    <a href="#About" data-transition="fade">
                        About Us</a>
                </li>
                <li>
                    <a href="#Licence" data-transition="fade">
                        Pilot Licence Course</a>
                </li>
                <li>
                    <a href="#Ground" data-transition="fade">
                        Ground School</a>
                </li>
                <li>
                    <a href="#Rental" data-transition="fade">
                        AirCraft Rental</a>
                </li>
                <li>
                    <a href="#Sight" data-transition="fade" >
                        SightSeeing Flights</a>
                </li>
                <li>
                    <a href="#Chat" data-transition="fade">
                        Member Chat</a>
                </li>
                <li>
                    <a href="#Blog" data-transition="fade">
                        Blog</a>
                </li>
                <li>
                    <a href="#Contact" data-transition="fade" >
                        Contact Us</a>
                </li>
            </ul>
        </div>
        <!-- /main -->

        <div id="footer" data-role="footer" data-theme="b">
              <p>
                        <span>
                            <a href="https://www.facebook.com/flybfc" target="_blank"><img class="img-responsive" width="35" height="35" src="img/fb_large.png" alt="Facebook" /></a>
                        </span>

                        <span>
                            <a href="https://twitter.com/BrantfordFC/media" target="_blank"><img class="img-responsive"width="35" height="35" src="img/tw_large.png" alt="Twitter" /></a>
                        </span>

                        <span>
                            <a href="https://www.youtube.com/watch?v=pZDvY_NGsvQ" target="_blank"><img class="img-responsive" width="35" height="35" src="img/yt_large.png" alt="You tube" /></a>
                        </span>
                    </p>
                
            <P style="font-size:75%; color:green;">Designed by:<i>Krishna, Zia, Vadim</i></P>
        </div>
    </div>
    <!--/ home page-->

    <!--Login page-->
<div data-role="page" id="Login" data-theme="d">
       
        <div id="header" data-role="header">
            <div id="logo" class="clearfix">
                <a href="#Home">
                    <img id="imglogo" class="img-responsive" src="img/bfclogo.gif" alt="BrantFord Flight Center" />
                </a>
            </div>
            <div id="navbar" data-role="navbar" data-theme="b">
                <ul>
                    <li><a href="#Home" class="ui-btn ui-corner-all ui-shadow ui-icon-home ui-btn-icon-left ui-btn-active">Home</a>
                    </li>
                    <li> <a href="#Register" class="ui-btn ui-corner-all ui-shadow ui-icon-user ui-btn-icon-left ui-btn-active">Register</a>
                    </li>
                    <li><a href="#Login" class="ui-btn ui-corner-all ui-shadow ui-icon-lock ui-btn-icon-left ui-btn-active">Login</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /header -->

        <div data-role="content">

            <h1>BFC student Login</h1>
            <form class="form" method="post" action="login.php">
               
                <label>User id </label>
                <input type="text" name="user" id="user">
                <label>Password </label>
                <input type="password" name="pw" id="pw">
                <input type="button" name="login" id="login" value="Login">
            </form>
        </div>
        <!-- /content -->
       
    </div>
    <!--/ login page-->


    <!--Register page-->

    <div data-role="page" id="Register" data-theme="d">
        <!--Home page-->
        <div id="header" data-role="header" data-theme="b">
            <div id="logo" class="clearfix">
                <a href="#Home">
                    <img id="imglogo" class="img-responsive" src="img/bfclogo.gif" alt="BrantFord Flight Center" />
                </a>
            </div>
            <div id="navbar" data-role="navbar" data-theme="b">
                <ul>
                    <li><a href="#Home" class="ui-btn ui-corner-all ui-shadow ui-icon-home ui-btn-icon-left ui-btn-active">Home</a>
                    </li>
                    <li> <a href="#Register" class="ui-btn ui-corner-all ui-shadow ui-icon-user ui-btn-icon-left ui-btn-active">Register</a>
                    </li>
                    <li><a href="#Login" class="ui-btn ui-corner-all ui-shadow ui-icon-lock ui-btn-icon-left ui-btn-active">Login</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /header -->

        <div data-role="content">

            <h1>BFC Register</h1>
            <form class="form" id="myForm" method="post" action="conn.php">
               
                <label>First Name </label>
                <input type="text" name="firstName" id="firstName">
                <label>Last Name </label>
                <input type="text" name="lastName" id="lastName">
                <label>User id </label>
                <input type="text" name="userId" id="userId">
                <label>Password </label>
                <input type="password" name="password" id="password">
                <input type="submit" name="register" id="register" value="Register">
                <span id="result"></span>
            </form>
        </div>
        <!-- /content -->
    </div>
    <!--/ Register page-->

    <!--About Us page-->

    <div data-role="page" id="About" data-theme="d">
    
        <div id="header" data-role="header">
            <div id="logo" class="clearfix">
                <a href="#Home">
                    <img id="imglogo" class="img-responsive" src="img/bfclogo.gif" alt="BrantFord Flight Center" />
                </a>
            </div>
            <div id="navbar" data-role="navbar" data-theme="b">
                <ul>
                    <li><a href="#Home" class="ui-btn ui-corner-all ui-shadow ui-icon-home ui-btn-icon-left ui-btn-active">Home</a>
                    </li>
                    <li> <a href="#Register" class="ui-btn ui-corner-all ui-shadow ui-icon-user ui-btn-icon-left ui-btn-active">Register</a>
                    </li>
                    <li><a href="#Login" class="ui-btn ui-corner-all ui-shadow ui-icon-lock ui-btn-icon-left ui-btn-active">Login</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /header -->
        <div data-role="content" class="ui-content">
            <h1>About Us</h1> 
            <p>
               ✈ &nbsp; The Brantford Flight Training Unit is registered under The Ontario Private Careers College Act and offers approved flight training courses for Private, Commercial, and Airline Transport Licenses.&nbsp; ✈

            </p>
        </div>
        <!-- /content -->
    </div>
      
    <!--/About Us page-->
   <!--Licence page-->
    <div data-role="page" id="Licence" data-theme="d">
    
        <div id="header" data-role="header">
            <div id="logo" class="clearfix">
                <a href="#Home">
                    <img id="imglogo" class="img-responsive" src="img/bfclogo.gif" alt="BrantFord Flight Center" />
                </a>
            </div>
            <div id="navbar" data-role="navbar" data-theme="b">
                <ul>
                    <li><a href="#Home" class="ui-btn ui-corner-all ui-shadow ui-icon-home ui-btn-icon-left ui-btn-active">Home</a>
                    </li>
                    <li> <a href="#Register" class="ui-btn ui-corner-all ui-shadow ui-icon-user ui-btn-icon-left ui-btn-active">Register</a>
                    </li>
                    <li><a href="#Login" class="ui-btn ui-corner-all ui-shadow ui-icon-lock ui-btn-icon-left ui-btn-active">Login</a>
                    </li>
                </ul>
            </div>
        </div>
        <div data-role="content" class="ui-content">
            <h1>Pilot License</h1> 
            <p>The course times and costs shown below are based on the minimum hours required by Transport Canada to obtain a particular category of pilot license. Actual hours required are dependant upon individual ability and frequency of instruction periods. If additional hours are required to successfully complete the course, they will be charged at the published Dual and Solo rates currently in effect. </p>

<p>The size of the Brantford Flight Centre allows training to be tailored to a student&#8217;s time table and rate of progress. Unlike certain larger training facilities, training is carried out on an individual basis, with an assigned instructor. This personalized instruction system encourages more questions and personal dialogue, resulting in the student developing a substantially improved learning curve. </p>

<p>Students pay as they fly, by cash, debit or credit card after each flight. <br />
24 hours notice is requested to cancel a lesson.</p>

<p>Prices quoted in the Course Descriptions are in Canadian Dollars and are subject to change without notice.</p>

<p>The following courses and ratings are offered at Brantford Flight Centre. Just click on one that is of interest<br> Download the appropriate PDF for more information.</p>

<ul>
	<li><a href="http://www.flybfc.com/pdf/BFC_Flight_Training_Program_Outline_-_RPP2.pdf" target="_blank">Recreational Pilot Permit</a></li>
	<li><a href="http://www.flybfc.com/pdf/BFC_Flight_Training_Program_Outline_-_PPL1.pdf" target="_blank">Private Pilot License</a></li>
	<li><a href="http://www.flybfc.com/pdf/BFC_Flight_Training_Program_Outline_-_CPL1.pdf" target="_blank">Commercial Pilot License</a></li>
</ul>

<p>For licensed pilots we offer a range of <a href="http://www.flybfc.com/index.php/site/learn_to_fly/06_licence_ratings">ratings to add onto your license</a>. </p>

<p><strong>The Brantford Flight Centre is proud to be: </strong>
<ul>
<li>Workplace Safety and Insurance Board approved private education and training provider</li>
<li><b>Registered as a private career college under the Private Career College Act, 2005</b></li>
</ul>
        </div>
        <!-- /content -->
    </div>
    <!--/ License page-->
    
  
        <!--Ground School page-->

    <div data-role="page" id="Ground" data-theme="d">
    
        <div id="header" data-role="header" >
            <div id="logo" class="clearfix">
                <a href="#Home">
                    <img id="imglogo" class="img-responsive" src="img/bfclogo.gif" alt="BrantFord Flight Center" />
                </a>
            </div>
            <div id="navbar" data-role="navbar"  data-theme="b">
                <ul>
                    <li><a href="#Home" class="ui-btn ui-corner-all ui-shadow ui-icon-home ui-btn-icon-left ui-btn-active">Home</a>
                    </li>
                    <li> <a href="#Register" class="ui-btn ui-corner-all ui-shadow ui-icon-user ui-btn-icon-left ui-btn-active">Register</a>
                    </li>
                    <li><a href="#Login" class="ui-btn ui-corner-all ui-shadow ui-icon-lock ui-btn-icon-left ui-btn-active">Login</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /header -->
        <div data-role="content" class="ui-content">
           <h1>Ground School</h1>

    <p>Our ground school classes are conducted by qualified instructors making use of PowerPoint, Audio Visual aids and flight simulators.</p>
    <p>There are two Ground School sessions each year, each running on Monday nights from 7pm till 10pm.&nbsp; Average class size is 15 - 30 students.</p>
    <p>The course runs for 20 weeks and covers the topics required to write the Transport Canada Private Pilot written examination</p>
    <p>Should the need arise, we may add a second night for additional students, or may even run a class in Hamilton.</p>
    <p>
        <br>
    </p>

    <h2>Location</h2>
    <p>Brantford Flying Club
        <br> 110 Aviation Avenue
        <br> Brantford Municipal Airport Brantford, ON</p>

    <h2>Costs</h2>
    <p>Course: $325.00 + HST
        <br> Books, &amp; Materials: $210.00 + HST </p>
    <p>Private Pilot course students can re-visit any portion of the ground school <strong>AT NO COST</strong> for up to 5 years, and Commercial Pilot students may re-visit for up to 2 years. It is our way to help you keep current.</p>

    <h2>NEXT CLASS STARTS</h2>
    <p>Monday Feb 16th , 2015</p>

            </p>
        </div>
        <!-- /content -->
    </div>
      
    <!-Ground School page-->
    
    
     <div data-role="page" id="Rental" data-theme="d">
        <!--Rental page-->
        <div id="header" data-role="header">
            <div id="logo" class="clearfix">
                <a href="#Home">
                    <img id="imglogo" class="img-responsive" src="img/bfclogo.gif" alt="BrantFord Flight Center" />
                </a>
            </div>
            <div id="navbar" data-role="navbar" data-theme="b">
                <ul>
                    <li><a href="#Home" class="ui-btn ui-corner-all ui-shadow ui-icon-home ui-btn-icon-left ui-btn-active">Home</a>
                    </li>
                    <li> <a href="#Register" class="ui-btn ui-corner-all ui-shadow ui-icon-user ui-btn-icon-left ui-btn-active">Register</a>
                    </li>
                    <li><a href="#Login" class="ui-btn ui-corner-all ui-shadow ui-icon-lock ui-btn-icon-left ui-btn-active">Login</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /header -->

        <div data-role="content">
<h1>Aircraft Rentals</h1>
<p>The club&#8217;s airplanes may be rented by licensed pilots at the following rates.</p>

<p><strong>NO FUEL SURCHARGES<br />
NO INSURANCE SURCHARGES<br />
NO HEADSET CHARGE<br />
NO HIDDEN FEES</strong>
</p>

<table border="0">
    <tr>
        <th>Aircraft Type</th>
        <th>Solo Wet</th>
    </tr>
    <tr>
        <td>Cessna 152</td>
        <td>$130/Hr.</td>
    </tr>
    <tr>
        <td>Cessna 172 (160hp)</td>
        <td>$145/Hr.</td>
    </tr>
    <tr>
        <td>Cessna 172 (180hp)</td>
        <td>$150/Hr.</td>
    </tr>
    <tr>
        <td>Cessna 172RG</td>
        <td>$160/Hr.</td>
    </tr>
    <tr>
        <td>PFC-1 Simulator</td>
        <td>$35/Hr.</td>
    </tr>
    <tr>
        <td>Private Instruction</td>
        <td>$55/Hr.</td>
    </tr>
    <tr>
        <td>Commercial Instruction</td>
        <td>$60/Hr.</td>
    </tr>
    <tr>
        <td>Instructor Rating Instruction</td>
        <td>$65/Hr.</td>
    </tr>
</table>


<p>5% Discount on Recreational Flights 1 hour or more.</p>
<p>HST is applicable</p>
<p>Prices current as of Jan 7, 2014</p>
<p>Prices subject to change without notice</p>
      
</div>
        <!-- /main -->

    </div>
    <!--end page-->
    
    
    <!-Sight Seeing  page-->
     <div data-role="page" id="Sight"  data-theme="d">
        <!--Rental page-->
        <div id="header" data-role="header">
            <div id="logo" class="clearfix">
                <a href="#Home">
                    <img id="imglogo" class="img-responsive" src="img/bfclogo.gif" alt="BrantFord Flight Center" />
                </a>
            </div>
            <div id="navbar" data-role="navbar" data-theme="b">
                <ul>
                    <li><a href="#Home" class="ui-btn ui-corner-all ui-shadow ui-icon-home ui-btn-icon-left ui-btn-active">Home</a>
                    </li>
                    <li> <a href="#Register" class="ui-btn ui-corner-all ui-shadow ui-icon-user ui-btn-icon-left ui-btn-active">Register</a>
                    </li>
                    <li><a href="#Login" class="ui-btn ui-corner-all ui-shadow ui-icon-lock ui-btn-icon-left ui-btn-active">Login</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /header -->

        <div data-role="content">
         <h1>Sightseeing Flights</h1>
				<p>Gift certificates are available from the Brantford Flight Centre.</p>
<!--<h2>Sightseeing Flights:</h2>-->

<ul>
	<li>Customizable to anywhere in the local area!
	<li>Bring your camera!</li>
	<li>Take 2 friends with you!</li>
</ul>

<h2>Flight Suggestions:</h2>

<table border="0">
	<tr>
		<th>Popular Destinations:</th>
		<th>Flight Time:</th>
		<th>Cost:</th>
	</tr>
	<tr>
		<td>Brantford and Area</td>
		<td>30 Minutes</td>
		<td>$102.50</td>
	</tr>
	<tr>
		<td>Long Point & Lake Erie</td>
		<td>60 Minutes</td>
		<td>$205.00</td>
	</tr>
	<tr>
		<td>Niagara Falls</td>
		<td>90 Minutes</td>
		<td>$307.50</td>
	</tr>
	<tr>
		<td>Downtown Toronto</td>
		<td>90 Minutes</td>
		<td>$307.50</td>
	</tr>
</table>

<p>Final cost is dependant on engine running time, billed at the 1/10 of an hour. <br />HST is applicable. Prices are subject to change</p>
<p>To book a sightseeing flight - please call us and arrange a time. <strong>(519) 753-2521</strong>.</p>
<h2>Familiarization Flight:</h2>
<ul>
	<li>30 minute flight around the Brantford, Burford, Paris area</li>
	<li>See your house from the air!</li>
	<li>Bring your camera!</li>
	<li>A chance to fly the aircraft!</li>
	<li>An excellent way to begin flying lessons!</li>
	<li>The perfect Birthday, Anniversary, Father's Day, Mother's Day, Valentine's Day or Christmas present!</li>
	<li>Take 2 friends with you!</li>
	<li>Only $105.00</li>
</ul>
        </div>
        <!-- /main -->

    </div>
    <!--end page-->   
    
    
    <!--UpComming Event page-->
    <div data-role="page" id="Chat"  data-theme="d">
        <div id="header" data-role="header">
            <div id="logo" class="clearfix">
                <a href="#Home">
                    <img id="imglogo" class="img-responsive" src="img/bfclogo.gif" alt="BrantFord Flight Center" />
                </a>
            </div>
            <div id="navbar" data-role="navbar" data-theme="b">
                <ul>
                    <li><a href="#Home" class="ui-btn ui-corner-all ui-shadow ui-icon-home ui-btn-icon-left ui-btn-active">Home</a>
                    </li>
                    <li> <a href="#Register" class="ui-btn ui-corner-all ui-shadow ui-icon-user ui-btn-icon-left ui-btn-active">Register</a>
                    </li>
                    <li><a href="#Login" class="ui-btn ui-corner-all ui-shadow ui-icon-lock ui-btn-icon-left ui-btn-active">Login</a>
                    </li>
                </ul>
            </div>
        </div>
        <div data-role="content">
           <p>Page under construction.Will be up once integrated with Node.js</p> 
        </div>
        <!-- /content -->
    </div>
    <!--/ Chat page-->
    
     <!--UpComming Event page-->
    <div data-role="page" id="Blog"  data-theme="d">
        <div id="header" data-role="header">
            <div id="logo" class="clearfix">
                <a href="#Home">
                    <img id="imglogo" class="img-responsive" src="img/bfclogo.gif" alt="BrantFord Flight Center" />
                </a>
            </div>
            <div id="navbar" data-role="navbar" data-theme="b">
                <ul>
                    <li><a href="#Home" class="ui-btn ui-corner-all ui-shadow ui-icon-home ui-btn-icon-left ui-btn-active">Home</a>
                    </li>
                    <li> <a href="#Register" class="ui-btn ui-corner-all ui-shadow ui-icon-user ui-btn-icon-left ui-btn-active">Register</a>
                    </li>
                    <li><a href="#Login" class="ui-btn ui-corner-all ui-shadow ui-icon-lock ui-btn-icon-left ui-btn-active">Login</a>
                    </li>
                </ul>
            </div>
        </div>
        <div data-role="content">
           <p>Page under construction.Will be up once integrated with Ember.js</p> 
        </div>
        <!-- /content -->
    </div>
    <!--/ Chat page-->
    
    
    <!--Contact Us page-->

    <div data-role="page" id="Contact"  data-theme="d">
        <!--Home page-->
        <div id="header" data-role="header">
            <div id="logo" class="clearfix">
                <a href="#Home">
                    <img id="imglogo" class="img-responsive" src="img/bfclogo.gif" alt="BrantFord Flight Center" />
                </a>
            </div>
            <div id="navbar" data-role="navbar" data-theme="b">
                <ul>
                    <li><a href="#Home" class="ui-btn ui-corner-all ui-shadow ui-icon-home ui-btn-icon-left ui-btn-active">Home</a>
                    </li>
                    <li> <a href="#Register" class="ui-btn ui-corner-all ui-shadow ui-icon-user ui-btn-icon-left ui-btn-active">Register</a>
                    </li>
                    <li><a href="#Login" class="ui-btn ui-corner-all ui-shadow ui-icon-lock ui-btn-icon-left ui-btn-active">Login</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /header -->

        <div data-role="content">
            <h1>Contact Us</h1>
    
      
		<form method="post" action="mail.php">
		  Name: <input type="text" id="name" name="name" value="" placeholder="Name" required/><br>
		  E-mail: <input type="email" id="email" name="email" value="" placeholder="E-mail" required/><br>
		  Phone Number: <input type="tel" id="telePhone" name="telePhone" value="" placeholder="Phone"/><br>
		  Subject: <input type="text" value="" placeholder="Subject" required/><br>
		  Message:<br>
		  <textarea style="height:100px;" id="message" name="message" placeholder="Enter your message here..." required></textarea> <br />
		  <input type="submit" value="Send" name="submit" data-role="button" >
		 </form>
            
            <div id="contact_infos">
                    <div class="address" data-role="collapsible">
                        <h3> Contact us</h3>
                        <p>110 Aviation Avenue</p>
                        <p>Brantford, Ontario,N3T 5S1</p>
                    </div>

                    </div>

                    <div>
                        <p><a href="http://www.flybfc.com/" rel="external" data-role="button"> visit full website</a>
                        </p>
                    </div>

                  
		</div>
        <!-- /content -->
    </div>
    <!--/ Register page-->
    
    
    <script type="text/javascript" src="cordova.js"></script>
        <script type="text/javascript" src="js/index.js"></script>
        <script type="text/javascript">
            app.initialize();
        </script>
</body>

</html>
