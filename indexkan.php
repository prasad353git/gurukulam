<?php
 session_start();

 $_SESSION["staff"] = "staff";
 $_SESSION["student"] = "student";

 require_once "functions.php" ;
 $con=connect_my_db();
 $query=mysqli_query($con,"SELECT * FROM  kdetails WHERE id='1'");
 if($query && mysqli_num_rows($query)>0)      
 $info=mysqli_fetch_assoc($query);

 if(isset($_POST['user']))
  {
      $con=mysqli_connect($host,$user,$password,$db) or die("Sorry unable to connect");
  
  //	mysql_select_db($db,$con) or die("failed to select db");
    
      $uname=$_POST['user'];
      $pwd=$_POST['pass'];
      
    //if ($_POST['des']=='staff')
    $sql="select * from users where email='$uname' AND pwd='$pwd' limit 1";
   /* else
    $sql="select * from stureg where email='$uname' AND pwd='$pwd' limit 1"; */

    $result=mysqli_query($con,$sql);
    if(mysqli_error($con))
    echo "<br>Error = ".mysqli_error($con);
    if(mysqli_num_rows($result)==1&&(!preg_match('/([\'"])/', $_POST['pass'])))
      {
        $userinfo=mysqli_fetch_assoc($result);

        $_SESSION['userid']=$userinfo['id'];
        $_SESSION['user']=$_POST['des'];
        //if ($_POST['des']=='staff')
        header("location:dash.php");
       /*  else
        header("location:sdash.php"); */
        exit();
      } 
    else
      {
        $error="You Have Entered Incorrect Email/Password !!!";
      }
  }
  if(isset($_POST['contact']))
  {
      $name=$_POST['name'];
      $email=$_POST['email'];
      $message=$_POST['message'];

      $insert = "INSERT INTO messages(`name`,`email`,`message`) VALUES ('$name','$email','$message')";
      $insert=mysqli_query($con,$insert);
      if(!$insert)
      {
        echo mysqli_error($con);
      }
  }
?>
<html>
<head>
    <title>Gurukul</title>
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700i" rel="stylesheet">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
    <script src="jquery.easing.1.3.js" type="text/javascript"></script>
    <script src="jquery.booklet.1.1.0.min.js" type="text/javascript"></script>
    <link href="jquery.booklet.1.1.0.css" type="text/css" rel="stylesheet" media="screen" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
       /* @import url(http://fonts.googleapis.com/earlyaccess/notosanskannada.css);*/
        *{ margin:0; padding:0; }
        body,html{/*font-family: "Kannada";*/ margin:0; background-image:url('back.jpg'); background-repeat:no-repeat; background-size:cover;position:center; height:100%;width:100%;}
        input[type=text],input[type=password], select, textarea { width: 50%; padding: 12px; border: 1px rgb(255, 81, 0);box-shadow: 0px 1px 2px 0px rgba(0,0,0,1.0); border-radius: 4px; }
        .abs{position:absolute;} .fix{position:fixed;}
        .bg{position:fixed; overflow-y:scroll; background-image:url('back.jpg'); background-repeat:no-repeat; background-size:cover;position:center; height:100%;width:100%;}
        .bokon{position:absolute; font-size:20px; background-color:inherit; background-size:cover;position:center; height:100%;width:100%;}
        .box{position:absolute; padding:3%; width:94%; color:white; font-size:20px; background-color:rgba(000,000,000,0.700); box-shadow: 0px 8px 16px 0px rgba(0,0,0,1.0); border-radius:15px;}
        .btn{background-color:inherit; color:black; font-size:16px; border:inherit;}
        .booklet{ width:900px; height:607px; position:relative; margin:0 auto 10px; -moz-box-shadow:0px 0px 1px #fff; -webkit-box-shadow:0px 0px 1px #fff; box-shadow:0px 0px 1px #fff; -moz-border-radius:10px; -webkit-border-radius:10px; border-radius:10px; }
        .booklet .b-wrap-left{ background:#fff url(images/left_bg.jpg) no-repeat top left; -webkit-border-top-left-radius: 10px; -webkit-border-bottom-left-radius: 10px; -moz-border-radius-topleft:10px; -moz-border-radius-bottomleft: 10px; border-top-left-radius: 10px; border-bottom-left-radius: 10px; }
        .booklet .b-wrap-right{ background:#efefef url(images/right_bg.jpg) no-repeat top left; -webkit-border-top-right-radius: 10px; -webkit-border-bottom-right-radius: 10px; -moz-border-radius-topright: 10px; -moz-border-radius-bottomright: 10px; border-top-right-radius: 10px; border-bottom-right-radius: 10px; }
        .booklet .b-counter { bottom:10px; position:absolute; display:block; width:90%; height:20px; border-top:1px solid #ddd; color:#222; text-align:center; font-size:12px; padding:5px 0 0; background:transparent; -moz-box-shadow:0px -1px 1px #fff; -webkit-box-shadow:0px -1px 1px #fff; box-shadow:0px -1px 1px #fff; opacity:0.8; }
        .book_wrapper{ margin:0 auto;  padding-top:50px; width:905px; height:514px; position:relative; background:transparent url(images/bg.png) no-repeat 9px 27px; }
        .book_wrapper h1{ color:orange; margin:5px 5px 5px 15px; font-size:24px; padding-bottom:7px; text-transform: uppercase; font-weight: normal; }
        .book_wrapper img{ margin:10px 0px 5px 35px; width:300px; padding:4px; border:1px solid #ddd;  -moz-box-shadow:1px 1px 1px #fff; -webkit-box-shadow:1px 1px 1px #fff; box-shadow:1px 1px 1px #fff; }
        .booklet .b-wrap-right img{ border:1px solid #E6E3C2; }
        .book_wrapper p{ font-size:15px; margin:5px 5px 5px 15px; }
        .border{ border:1px solid #ddd; height:100%; }
        .br{ float:right; position:absolute; bottom:0;right:0; }
        .bl{ float:left; position:absolute; bottom:0; } 
        .card{float:left; width:15%; padding-left:5%; padding-right:10%; padding-top:5%;}
        .col-25 { float: left; width: 15%; margin-top: 10px; }
        .col-75 { float: left; width: 75%; margin-top: 6px; }
        .con{width:15%; padding:1%; background-color:rgb(255, 0, 0); color:white; border:none; border-radius:15px; box-shadow:0px 3px 8px 0px rgba(0,0,0,1.0);}
        .con:hover{width:20%; background-color:blue; font-size:16px; color:white; box-shadow: 0px 8px 16px 0px rgba(0,0,0,1.0);}
        .conhead{ color:red; border:15px;}
        .ic{ height:20%;width:80%; }
        .left{ float:left; }          .right{ float:right; }
        .loghead{padding:5%; color:red; border:15px;}
        .mybtn{width:25%; padding: 2%; background-color:rgb(255, 0, 0); color:white; border:none; border-radius:15px; box-shadow:0px 3px 8px 0px rgba(0,0,0,1.0);}
        .mybtn:hover{ background-color:blue; font-size:16px; color:white; box-shadow: 0px 8px 16px 0px rgba(0,0,0,1.0);}
        .padding{padding-left:5%; padding-top:5%;}         .padtop{ padding-top:30%; }   .padrit{padding-right:5%; padding-top:2%;}  .padleft{padding-left:5%; padding-top:2%;} 
        .padl{padding-left:40%; padding-top:20%; padding-right:15%;}
        .padnav{padding-left:2%; padding-top:5%;}
        .ritnil{right:0;} .lft{left:2%;} .top{top:1%;}
        .title{font-size:48px;padding-top:20%;color:orange;}
        .wall{position:fixed; overflow:scroll; overflow-x:hidden; background-image:url('wall.jpg'); background-repeat:no-repeat; background-size:cover;position:center; height:100%;width:100%;}
        .white{color:#fff;} .black{color:black;}  .blue{color:blue;} .blueb{background:blue;}  .yellow{color:yellow;}
        /*scrollbar */
        ::-webkit-scrollbar {width: 0px;} /* width */
        ::-webkit-scrollbar-track { box-shadow: inset 0 0 5px inherit; border-radius: 10px; }/* Track */
        ::-webkit-scrollbar-thumb { background: inherit; border-radius: 10px; }/* Handle */
        ::-webkit-scrollbar-thumb:hover { background: inherit; }/* Handle on hover */
        /*navbar */
        .sidenav{ height: 100%; width: 0; position: fixed; z-index:100; top:0; left:0;  background-color:rgba(000,000,000,0.700); box-shadow: 0px 8px 16px 0px rgba(0,0,0,1.0); border-radius:5px; overflow-x:hidden; transition:0.5s; padding-top:60px; }
        .sidenav a{ padding:8px 8px 8px 32px; text-decoration:none; font-size: 25px; color:#919191; display:block; transition: 0.3s; }
        .sidenav a:hover{ color: #f1f1f1; }
        .sidenav .closebtn{ position:absolute; top:0; right:25px; font-size:36px; margin-left:50px; }
        @media screen and (max-height: 450px) {.sidenav {padding-top: 15px;} .sidenav a {font-size: 18px;} }
    </style>	 
</head>
<body>
<div class="bg">
    <!-- -------------------------       index  start       ---------------------------    -->
    <div id="bokon" class="bokon tabs">
            <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a onclick="openTabs('contactus')">Contact Us</a>
                <a onclick="openTabs('login')">Login</a>
                <a onclick="openTabs('teachingfac')">Teaching Faculties </a>
                <a onclick="openTabs('staff')"> Staff Members </a> 
                <a onclick="openTabs('gallery')">Gallery</a>
                <a href="index.php">Read in English</a>
            </div>   
            <span class="fix lft top" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>
            <a href="index.php" class="ritnil fix padrit">English</a>

            <div class="book_wrapper">		 
                <div id="mybook" style="display:none;">
                    <div class="b-load">
                        <div class="padtop"><img src="nightmode.png" alt="image not found" /></div>
                        <div class="border title"><center><p><h2>&nbsp;</h2></p><p><h2> ಗುರುಕುಲ</h2></p></center></div>

                        <div class="padtop"><img src="daymode.png" alt="image not found" /></div>
                        <div class="border padnav"><center><h1>ಗುರುಕುಲಕ್ಕೆ ಸ್ವಾಗತ!</h1></center><p><?php echo $info['home'];?> </p> </div>

                        <div class="padtop"><img src="gallery/g22.jpg" alt="image not found" /></div>
                        <div class="border padnav"><center><h1>ಶಾಲೆಯ ಆವರಣ</h1></center><p><?php echo $info['campus'];?> </p> </div>

                        <div class="padtop"><img src="gm.jpg" alt="image not found" /></div>
                        <div class="border padnav"><center><h1>ಸಂದೇಶ</h1></center><p><?php echo $info['message'];?> </p> </div>

                        <div class="padtop"><img src="gallery/g7.jpg" alt="image not found" /></div>
                        <div class="border padnav"><center><h1>ದೃಷ್ಟಿ ಮತ್ತು ಗುರಿ</h1></center><p><?php echo $info['vision'];?> </p> </div>

                        <div class="padtop"><img src="gallery/g2.jpg" alt="image not found" /></div>
                        <div class="border padnav"><center><h1>ಗಣಕಯಂತ್ರ ಪ್ರಯೋಗಲಯ</h1></center><p><?php echo $info['computer'];?> </p> </div>

                        <div class="padtop"><img src="gallery/g20.jpg" alt="image not found" /></div>
                        <div class="border padnav"><center><h1>ವಿಜ್ಞಾನ ಪ್ರಯೋಗಾಲಯ</h1></center><p><?php echo $info['science'];?> </p> </div>

                        <div class="padtop"><img src="gallery/g16.jpg" alt="image not found" /></div>
                        <div class="border padnav"><center><h1> ಗ್ರಂಥಾಲಯ</h1></center><p><?php echo $info['library'];?> </p> </div>

                        <div class="padtop"><img src="gallery/g10.jpg" alt="image not found" /></div>
                        <div class="border padnav"><center><h1>ಸಭಾಂಗಣ</h1></center><p><?php echo $info['auditorium'];?> </p> </div>

                        <div class="padtop"><img src="gallery/g13.jpg" alt="image not found" /></div>
                        <div class="border padnav"><center><h1>ಕ್ರೀಡೆ</h1></center><p><?php echo $info['sports'];?> </p> </div>

                        <div class="padtop"><img src="gallery/g12.jpg" alt="image not found" /></div>
                        <div class="border padnav"><center><h1>ಪಠ್ಯೇತರ ಚಟುವಟಿಕೆಗಳು</h1></center><p><?php echo $info['extra'];?></div>

                        <div class="padtop"><img src="gallery/g17.jpg" alt="image not found" /></div>
                        <div class="border padnav"><center><h1>ಕೆಲಸದ ಸಮಯ</h1></center><p><?php echo $info['working'];?> </p> </div>
               
                        <div class="border"></div>
                        <div class="border title"><center><br><h1>ಈ ಪುಸ್ತಕದಲ್ಲಿ ನಿಮ್ಮ <br><br>ಸುವರ್ಣ ಪುಟವನ್ನು<br><br>ರಚಿಸುವ ಸಮಯವಿದು . . .</h1></center> </div>
                    </div>
                </div>
            </div>
        </div>  
    <!-- -------------------------        index  end        ---------------------------    --> 
    <center>
    <!-- -------------------------       login  start       ---------------------------    -->
        <div id="login" class="box tabs" style="display:none">
            <span class="left" onclick="closetabs();"> &#10060; </span>
            <header class="loghead">
                <h1>Log In</h1> 
            </header>  <hr class="hr">
            <form method="POST">
                <div class="padding">            
                    <label for="user">Username</label>            
                    <input type="text" id="user" name="user" placeholder="User Name" />
                </div>
                <div class="padding">
                    <label for="pass">Password</label>
                    <input type="password" id="pass" name="pass" placeholder="Password" />
                </div>
                <div class="padding">
                    <input type="submit" class="mybtn" value="Login" name="login">
                </div>
                <br>
            </form>    
        </div>
    <!-- -------------------------       login  end         ---------------------------    --> 
    <!-- -------------------------     contact us start     -----------------------------  -->
        <div id="contactus" class="box tabs" style="display:none">
            <span class="left" onclick="closetabs();"> &#10060; </span>
            <header class="conhead">
                <h1>Contact Us</h1>
            </header><BR>
            <label class="yellow"> Email : gurukul@gmail.com </label><br>
        <label class="yellow">Phno : 9876543210</label><br>
        <label class="yellow"> Address : Gurukul primary and high school,
        <br>Murudeshwar,Bhatkal tq,<br>Uttara Kannada,Karnataka-581350</label> <br><br>
            <hr class="hr">
        
            <form method="post"><br>
                <div class="row">
                    <div class="col-25">
                        <label for="name">Name</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="name" name="name" placeholder="Your name..">
                    </div>
                    
                </div><br><br><br>
                <div class="row">
                    <div class="col-25">
                        <label for="email">Email</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="email" name="email" placeholder="Your Email ID..">
                    </div>
                </div><br><br><br>                
                <div class="row">
                    <div class="col-25">
                        <label for="message">Message</label>
                    </div>
                    <div class="col-75">
                        <textarea id="message" name="message" placeholder="Write Message Here.." style="height:100px"></textarea>
                    </div>
                </div><br><br><br>            
                <div class="padding">
                    <input type="submit" class="con" style="float:left;" value="Submit" name="contact">
                </div>                
            </form>
        </div>    
    <!-- -------------------------      contact us end      -----------------------------  -->   
    <!-- -------------------------      gallery start       ------------------------------ -->
        <div id="gallery" class="box tabs" style="display:none">
            <span class="left" onclick="closetabs();"> &#10060; </span><br><br>
            <header class="conhead">
                <h1>Gallery</h1> 
            </header><br><br><hr class="hr">
            <?php
                $imagesDirectory = "gallery/";
                
                if(is_dir($imagesDirectory))
                {
                    $opendirectory = opendir($imagesDirectory);
                    
                    while (($image = readdir($opendirectory)) !== false)
                    {
                        if(($image == '.') || ($image == '..'))
                        {
                            continue;
                        }
                        
                        $imgFileType = pathinfo($image,PATHINFO_EXTENSION);
                        
                        if(($imgFileType == 'jpg') || ($imgFileType == 'png'))
                        {
                            echo "<img src='gallery/".$image."' width='200'> ";
                        }
            ?>  &nbsp; &nbsp;  &nbsp;  &nbsp; 
            <?php
                    }
                    closedir($opendirectory);
                }
            ?>
        </div>    
    <!-- -------------------------       gallery end        ------------------------------ --> 
    <!-- -------------------------  Teaching staff start    ------------------------------ -->

            <div id="teachingfac" class="box tabs" style="display:none">
                <span  onclick="closetabs();" class="left">&#10060;</span><br><br>   
                <header class="conhead">
                    <h1>Teaching Faculties</h1> 
                </header><br><br><hr class="hr">  
                <div>
                    <?php
                        $db = mysqli_connect("localhost","root","12345678","gurukulam");
                        if(!$db)
                        {
                            die("Connection failed: " . mysqli_connect_error());
                        }
                        $query=mysqli_query($db,"SELECT * FROM tfac");
                        if($query)
                        {
                            while($row = mysqli_fetch_assoc($query))
                            {
                                ?>
                                    <div class="card">
                                        <img src="./<?php echo $row['images']; ?>" width="260px" height="200px" alt="Faculty Images">
                                        <div>
                                        <center>
                                            <label style="font-weight:bold;"><?php echo $row['name']; ?></label><br>
                                            <label><?php echo $row['sdesg']; ?></label>&nbsp;
                                            <label><?php echo $row['desg']; ?></label><br>
                                        </center>    
                                        </div>
                                    </div>&nbsp;&nbsp;&nbsp;&nbsp;
                            <?php
                            }
                        }
                        else
                        {
                            echo "no faculty found";
                        }
                    ?>   
                </div>
            </div>
    <!-- -------------------------   Teaching staff end     ------------------------------ --> 
    <!-- -------------------------       staff start        ------------------------------ -->
        <div id="staff" class="box tabs" style="display:none">
        <span class="left" onclick="closetabs();"> &#10060; </span><br><br>   
            <header class="conhead">
                <h1>Staff Members</h1> 
            </header><br><br><hr class="hr">    
            <div>
                <?php
                    $query=mysqli_query($con,"SELECT * FROM Ntfac");
                    if($query)
                    {
                        while($row = mysqli_fetch_assoc($query))
                        {
                            ?>
                                <div class="card">
                                    <img src="./<?php echo $row['images']; ?>" width="260px" height="200px" alt="Faculty Images">
                                    <div>
                                    <center>
                                        <label style="font-weight:bold;"><?php echo $row['name']; ?></label><br>
                                        <label><?php echo $row['sdesg']; ?></label>&nbsp;
                                        <label><?php echo $row['desg']; ?></label><br>
                                    </center>    
                                    </div>
                                </div>&nbsp;&nbsp;&nbsp;&nbsp;
                        <?php
                        }
                    }
                    else
                    {
                        echo "no faculty found";
                    }
                ?>   
            </div>
        </div>
    <!-- -------------------------        staff end         ------------------------------ -->
    </center>  
</div>
</body>
<script type="text/javascript">

    //side navbar
    function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("Sidenav").style.display = "none";
    }

    function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("Sidenav").style.display = "block";
    }
    //book
    $(function() {
        var $mybook 		= $('#mybook');
        var $bttn_next		= $('#next_page_button');
        var $bttn_prev		= $('#prev_page_button');
        var $loading		= $('#loading');
        var $mybook_images	= $mybook.find('img');
        var cnt_images		= $mybook_images.length;
        var loaded			= 0;
            
        $mybook_images.each(function(){
            var $img 	= $(this);
            var source	= $img.attr('src');
            $('<img/>').load(function(){
                ++loaded;
                if(loaded == cnt_images){
                    $loading.hide();
                    $bttn_next.show();
                    $bttn_prev.show();
                    $mybook.show().booklet({
                        name:               null,                            //  
                        width:              800,                             //  
                        height:             500,                             //   
                        speed:              600,                             //  
                        direction:          'LTR',                           //  
                                                    //  
                        next:               $bttn_next,          			//  
                        prev:               $bttn_prev,          			//  
                                                
                    });
                    Cufon.refresh();
                }
            }).attr('src',source);
        });
        
    });

      // closable tabs 

      function closetabs(tabsName) 
      {
        var i;
        var x = document.getElementsByClassName("box");
        for (i = 0; i < x.length; i++) 
        {
          x[i].style.display = "none";  
        }
        document.getElementById("bokon").style.display = "block";
      }
      
      function openTabs(tabsName) 
      {
        var i;
        var x = document.getElementsByClassName("tabs");
        for (i = 0; i < x.length; i++) 
        {
          x[i].style.display = "none";  
        }
        document.getElementById(tabsName).style.display = "block"; 
      }

     // modal login 
     
        <?php 
        if ($error)
        {
          echo"alert('$error');";
        } ?>
</script>
</html>