<?php
    session_start(); 
    require_once "functions.php" ;
    $con=connect_my_db();

    $result=mysqli_query($con,"SELECT * FROM users where id=".$_SESSION['userid']);
    
    if(mysqli_error($con))      
    echo "<br>Error = ".mysqli_error($con);
	
    $home=isset($_POST['home']) ? $_POST['home'] : '';
    $campus =isset($_POST['campus']) ? $_POST['campus'] : '';
    $trust = isset($_POST['trust']) ? $_POST['trust'] : '';
    $message = isset($_POST['message']) ? $_POST['message'] : '';
    $vision = isset($_POST['vision']) ? $_POST['vision'] : '';
    $computer =isset($_POST['computer']) ? $_POST['computer'] : '';
    $science = isset($_POST['science']) ? $_POST['science'] : '';
    $library =isset($_POST['library']) ? $_POST['library'] : '';
    $auditorium =isset($_POST['auditorium']) ? $_POST['auditorium'] : '';
    $sports = isset($_POST['sports']) ? $_POST['sports'] : '';
    $extra =isset($_POST['extra']) ? $_POST['extra'] : '';
    $working = isset($_POST['working']) ? $_POST['working'] : '';
    $admission =isset($_POST['admission']) ? $_POST['admission'] : '';        

        if(isset($_POST['submit1']))
        {	
          $insert = mysqli_query($con,"update kdetails set home='$home' where id='1'");
          if(!$insert) {  echo mysqli_error($con);  }
        }
        elseif(isset($_POST['submit2']))
        {	
          $insert = mysqli_query($con,"update kdetails set campus='$campus' where id='1'");
          if(!$insert) {  echo mysqli_error($con);  }
        }
        elseif(isset($_POST['submit3']))
        {	
          $insert = mysqli_query($con,"update kdetails set trust = '$trust' where id='1'");
          if(!$insert) {  echo mysqli_error($con);  }
        }
        elseif(isset($_POST['submit4']))
        {	
          $insert = mysqli_query($con,"update kdetails set message = '$message' where id='1'");
          if(!$insert) {  echo mysqli_error($con);  }
        }
        elseif(isset($_POST['submit5']))
        {	
          $insert = mysqli_query($con,"update kdetails set vision = '$vision' where id='1'");
          if(!$insert) {  echo mysqli_error($con);  }
        }
        elseif(isset($_POST['submit6']))
        {	
          $insert = mysqli_query($con,"update kdetails set computer = '$computer' where id='1'");
          if(!$insert) {  echo mysqli_error($con);  }
        } 
        elseif(isset($_POST['submit7']))
        {	
          $insert = mysqli_query($con,"update kdetails set science = '$science' where id='1'");
          if(!$insert) {  echo mysqli_error($con);  }
        }
        elseif(isset($_POST['submit8']))
        {	
          $insert = mysqli_query($con,"update kdetails set library = '$library' where id='1'");
          if(!$insert) {  echo mysqli_error($con);  }
        }
        elseif(isset($_POST['submit9']))
        {	
          $insert = mysqli_query($con,"update kdetails set auditorium = '$auditorium' where id='1'");
          if(!$insert) {  echo mysqli_error($con);  }
        }
        elseif(isset($_POST['submit10']))
        {	
          $insert = mysqli_query($con,"update kdetails set sports = '$sports' where id='1'");
          if(!$insert) {  echo mysqli_error($con);  }
        }
        elseif(isset($_POST['submit11']))
        {	
          $insert = mysqli_query($con,"update kdetails set extra = '$extra' where id='1'");
          if(!$insert) {  echo mysqli_error($con);  }
        }
        elseif(isset($_POST['submit12']))
        {	
          $insert = mysqli_query($con,"update kdetails set working = '$working' where id='1'");
          if(!$insert) {  echo mysqli_error($con);  }
        }
        elseif(isset($_POST['submit13']))
        {	
          $insert = mysqli_query($con,"update kdetails set admission = '$admission' where id='1'");
          if(!$insert) {  echo mysqli_error($con);  }
        }


    //teaching staff
    if(isset($_POST["tsubmit"]))
    {
        $fnm = $_FILES["timages"]["name"];
        $dst_db = "tfac/".$fnm;
        move_uploaded_file($_FILES["timages"]["tmp_name"],"./tfac/".$fnm); 
        $check = mysqli_query($con,"insert into tfac(name,desg,sdesg,images) values('$_POST[tname]','$_POST[tdesg]','$_POST[sdesg]','$dst_db')");  // inserting into db
        if($check)
        {
            echo '<script type="text/javascript"> alert("Data Inserted Seccessfully!"); </script>';  // alert message
        }
        else
        {
            echo '<script type="text/javascript"> alert("Error Uploading Data!"); </script>';  // when error occur
        }
    }
    
    //non teaching staff
        if(isset($_POST["ntsubmit"]))
        {
            $fnm = $_FILES["ntimages"]["name"];
            $dst_db = "ntfac/".$fnm;
            move_uploaded_file($_FILES["ntimages"]["tmp_name"],"./ntfac/".$fnm); 
            $check = mysqli_query($con,"insert into ntfac(name,desg,images) values('$_POST[ntname]','$_POST[ntdesg]','$dst_db')");  // inserting into db
            if($check)
            {
                echo '<script type="text/javascript"> alert("Data Inserted Seccessfully!"); </script>';  // alert message
            }
            else
            {
                echo '<script type="text/javascript"> alert("Error Uploading Data!"); </script>';  // when error occur
            }
        }
        mysqli_close($con);

        if(isset($_POST['dash'])) 
        {
            header('Location: dash.php');
        }
    
        if(isset($_POST['logout'])) 
        {
            session_destroy();
            header('Location: index.php');
        }

?>

<html>
<head>
    <title>Details</title>
    <style>
        @import url(http://fonts.googleapis.com/earlyaccess/notosanskannada.css);
        *{ margin:0; padding:0; }
        a{color:white;}
        body,html{margin:0; height:100%;width:100%; background-color:tan;}
    fieldset{width:90%; border-radius:5px; border-color:#01FF00;}
    .mybtn{width:10%; padding:1%; background-color:#7b3d11; color:white; border:none; border-radius:5px; box-shadow:0px 3px 8px 0px rgba(0,0,0,1.0);}
    .mybtn:hover{background-color:#F7642D; font-size:16px; color:white; box-shadow: 0px 8px 16px 0px rgba(0,0,0,1.0);}
    .h1{ color:white; border-radius:15px; text-align: center;}
    input[type=text],[type=number], select, textarea { width: 100%; padding: 12px; border: 1px solid #ccc; border-radius: 4px; resize: vertical; }
    label { padding: 12px 12px 12px 0; display: inline-block; color:black;}
    .container { border-radius: 5px; padding: 20px; padding-left: 5%; }
    .col-15 { float: left; width: 15%; margin-top: 6px; }
    .col-65 { float: left; width: 65%; margin-top: 6px; }
    .row:after { content: ""; display: table; clear: both; }
    .right{float:right;} .left{float:left;}
        input[type=submit] { background-color:#7b3d11; color: white; padding: 12px 20px; border: none; border-radius: 4px; }
        input[type=submit]:hover{background-color:#F7642D;}
    </style>
</head>
<body>
    <div class="bg">
        <div class="box">
            <?php    
                if($result && mysqli_num_rows($result)>0)
                {
                    $userinfo=mysqli_fetch_assoc($result);
                    
                    if($userinfo['desg']==1 || $userinfo['desg']==2)
                    {
            ?>
                <br><br>
                <h1 class="h1">ಕನ್ನಡದಲ್ಲಿ ಶಾಲಾ ವಿವರಗಳನ್ನು ನಮೂದಿಸಿ</h1>
                <form method="post">
                    <div>
                        <br>
                        <input type="submit" value="Dashboard" name="dash" class="mybtn left" />
                        <input type="submit" value="logout" name="logout" class="mybtn right" />
                        <br><br><br><br>
                    </div>
                </form>
                <a href="details.php">click here to edit details in English</a>
            <center>
                <fieldset>
                    <legend>Details</legend>
                    <div class="container">
                    <h3>ಪ್ರತಿಯೊಂದು ವಿವರಗಳನ್ನು 1000 ಕ್ಕಿಂತ ಕಡಿಮೆ ಅಕ್ಷರಗಳನ್ನು ಬಳಸಿಕೊಂಡು ನಮೂದಿಸಿ</h3>
                        <form method="post" >          
                            <div class="row">
                                <div class="col-15">
                                    <label for="home">ಸ್ವಾಗತ</label>
                                </div>
                                <div class="col-65">
                                    <textarea id="home" name="home" placeholder="ಸ್ವಾಗತ" style="height:100px"value="<?php echo $info['home'];?>"></textarea>
                                </div>
                                <div class="right">
                                    <input type="submit" id="edit1" name="submit1" value="Update" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-15">
                                    <label for="campus">ಶಾಲೆಯ ಆವರಣ</label>
                                </div>
                                <div class="col-65">
                                    <textarea id="campus" name="campus" placeholder="ಶಾಲೆಯ ಆವರಣ" style="height:100px"value="<?php echo $info['campus'];?>"></textarea>
                                </div>
                                <div class="right">
                                    <input type="submit" id="edit2" name="submit2" value="Update" />
                                </div>
                            </div>
                            <!-- <div class="row">
                                <div class="col-15">
                                    <label for="trust">Gurukul Trust</label>
                                </div>
                                <div class="col-65">
                                    <textarea id="trust" name="trust" placeholder="trust" style="height:100px"value="<?php echo $info['trust'];?>"></textarea>
                                </div>
                                <div class="right">
                                    <input type="submit" id="edit3" name="submit3" value="Update" />
                                </div>
                            </div> -->
                            <div class="row">
                                <div class="col-15">
                                    <label for="message">ಸಂದೇಶ</label>
                                </div>
                                <div class="col-65">
                                    <textarea id="message" name="message" placeholder="ಸಂದೇಶ" style="height:100px"value="<?php echo $info['message'];?>"></textarea>
                                </div>
                                <div class="right">
                                    <input type="submit" id="edit4" name="submit4" value="Update" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-15">
                                    <label for="vision">ದೃಷ್ಟಿ ಮತ್ತು ಗುರಿ</label>
                                </div>
                                <div class="col-65">
                                    <textarea id="vision" name="vision" placeholder="ದೃಷ್ಟಿ ಮತ್ತು ಗುರಿ" style="height:100px"value="<?php echo $info['vision'];?>"></textarea>
                                </div>
                                <div class="right">
                                    <input type="submit" id="edit5" name="submit5" value="Update" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-15">
                                    <label for="computer">ಗಣಕಯಂತ್ರ ಪ್ರಯೋಗಲಯ</label>
                                </div>
                                <div class="col-65">
                                    <textarea id="computer" name="computer" placeholder="ಗಣಕಯಂತ್ರ ಪ್ರಯೋಗಲಯ" style="height:100px"value="<?php echo $info['computer'];?>"></textarea>
                                </div>
                                <div class="right">
                                    <input type="submit" id="edit6" name="submit6" value="Update" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-15">
                                    <label for="science">ವಿಜ್ಞಾನ ಪ್ರಯೋಗಾಲಯ</label>
                                </div>
                                <div class="col-65">
                                    <textarea id="science" name="science" placeholder="ವಿಜ್ಞಾನ ಪ್ರಯೋಗಾಲಯ" style="height:100px"value="<?php echo $info['science'];?>"></textarea>
                                </div>
                                <div class="right">
                                    <input type="submit" id="edit7" name="submit7" value="Update" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-15">
                                    <label for="library">ಗ್ರಂಥಾಲಯ</label>
                                </div>
                                <div class="col-65">
                                    <textarea id="library" name="library" placeholder="ಗ್ರಂಥಾಲಯ" style="height:100px"value="<?php echo $info['library'];?>"></textarea>
                                </div>
                                <div class="right">
                                    <input type="submit" id="edit8" name="submit8" value="Update" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-15">
                                    <label for="auditorium">ಸಭಾಂಗಣ</label>
                                </div>
                                <div class="col-65">
                                    <textarea id="auditorium" name="auditorium" placeholder="ಸಭಾಂಗಣ" style="height:100px"value="<?php echo $info['auditorium'];?>"></textarea>
                                </div>
                                <div class="right">
                                    <input type="submit" id="edit9" name="submit9" value="Update" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-15">
                                    <label for="sports">ಕ್ರೀಡೆ</label>
                                </div>
                                <div class="col-65">
                                    <textarea id="sports" name="sports" placeholder="ಕ್ರೀಡೆ" style="height:100px"value="<?php echo $info['sports'];?>"></textarea>
                                </div>
                                <div class="right">
                                    <input type="submit" id="edit10" name="submit10" value="Update" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-15">
                                    <label for="extra">ಪಠ್ಯೇತರ ಚಟುವಟಿಕೆಗಳು</label>
                                </div>
                                <div class="col-65">
                                    <textarea id="extra" name="extra" placeholder="ಪಠ್ಯೇತರ ಚಟುವಟಿಕೆಗಳು" style="height:100px"value="<?php echo $info['extra'];?>"></textarea>
                                </div>
                                <div class="right">
                                    <input type="submit" id="edit11" name="submit11" value="Update" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-15">
                                    <label for="working">ಕೆಲಸದ ಸಮಯ</label>
                                </div>
                                <div class="col-65">
                                    <textarea id="working" name="working" placeholder="ಕೆಲಸದ ಸಮಯ" style="height:100px"value="<?php echo $info['working'];?>"></textarea>
                                </div>
                                <div class="right">
                                    <input type="submit" id="edit12" name="submit12" value="Update" />
                                </div>
                            </div>
                            <!-- <div class="row">
                                <div class="col-15">
                                    <label for="admission">Admission</label>
                                </div>
                                <div class="col-65">
                                    <textarea id="admission" name="admission" placeholder="admission" style="height:100px"value="<?php echo $info['admission'];?>"></textarea>
                                </div><div class="right">
                                    <input type="submit" id="edit13" name="submit13" value="Update" />
                                </div>
                            </div> -->
                        </form>
                    </div>     
                </fieldset>    
            </center>
            <?php
                    }
                }
            ?>
        </div>
    </div>        
</body>
</html>