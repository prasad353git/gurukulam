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
          $insert = mysqli_query($con,"update details set home='$home' where id='1'");
          if(!$insert) {  echo mysqli_error($con);  }
        }
        elseif(isset($_POST['submit2']))
        {	
          $insert = mysqli_query($con,"update details set campus='$campus' where id='1'");
          if(!$insert) {  echo mysqli_error($con);  }
        }
        elseif(isset($_POST['submit3']))
        {	
          $insert = mysqli_query($con,"update details set trust = '$trust' where id='1'");
          if(!$insert) {  echo mysqli_error($con);  }
        }
        elseif(isset($_POST['submit4']))
        {	
          $insert = mysqli_query($con,"update details set message = '$message' where id='1'");
          if(!$insert) {  echo mysqli_error($con);  }
        }
        elseif(isset($_POST['submit5']))
        {	
          $insert = mysqli_query($con,"update details set vision = '$vision' where id='1'");
          if(!$insert) {  echo mysqli_error($con);  }
        }
        elseif(isset($_POST['submit6']))
        {	
          $insert = mysqli_query($con,"update details set computer = '$computer' where id='1'");
          if(!$insert) {  echo mysqli_error($con);  }
        } 
        elseif(isset($_POST['submit7']))
        {	
          $insert = mysqli_query($con,"update details set science = '$science' where id='1'");
          if(!$insert) {  echo mysqli_error($con);  }
        }
        elseif(isset($_POST['submit8']))
        {	
          $insert = mysqli_query($con,"update details set library = '$library' where id='1'");
          if(!$insert) {  echo mysqli_error($con);  }
        }
        elseif(isset($_POST['submit9']))
        {	
          $insert = mysqli_query($con,"update details set auditorium = '$auditorium' where id='1'");
          if(!$insert) {  echo mysqli_error($con);  }
        }
        elseif(isset($_POST['submit10']))
        {	
          $insert = mysqli_query($con,"update details set sports = '$sports' where id='1'");
          if(!$insert) {  echo mysqli_error($con);  }
        }
        elseif(isset($_POST['submit11']))
        {	
          $insert = mysqli_query($con,"update details set extra = '$extra' where id='1'");
          if(!$insert) {  echo mysqli_error($con);  }
        }
        elseif(isset($_POST['submit12']))
        {	
          $insert = mysqli_query($con,"update details set working = '$working' where id='1'");
          if(!$insert) {  echo mysqli_error($con);  }
        }
        elseif(isset($_POST['submit13']))
        {	
          $insert = mysqli_query($con,"update details set admission = '$admission' where id='1'");
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
                        <h1 class="h1">Enter School Details in English</h1>
                        <form method="post">
                            <div>
                                <br>
                                <input type="submit" value="Dashboard" name="dash" class="mybtn left" />
                                <input type="submit" value="logout" name="logout" class="mybtn right" />
                                <br><br><br><br>
                            </div>
                        </form>
                        <a href="kdetails.php">click here to edit details in kannada</a>
                        <center>
                            <fieldset>
                                <legend>Details</legend>
                                <div class="container">
                                <h3>Enter each details using less than 1000 characters</h3>
                                    <form method="post" >          
                                        <div class="row">
                                            <div class="col-15">
                                                <label for="home">Home</label>
                                            </div>
                                            <div class="col-65">
                                                <textarea id="home" name="home" placeholder="home" style="height:100px"value="<?php echo $info['home'];?>"></textarea>
                                            </div>
                                            <div class="right">
                                                <input type="submit" id="edit1" name="submit1" value="Update" />
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-15">
                                                <label for="campus">campus</label>
                                            </div>
                                            <div class="col-65">
                                                <textarea id="campus" name="campus" placeholder="campus" style="height:100px"value="<?php echo $info['campus'];?>"></textarea>
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
                                                <label for="message">Message</label>
                                            </div>
                                            <div class="col-65">
                                                <textarea id="message" name="message" placeholder="message" style="height:100px"value="<?php echo $info['message'];?>"></textarea>
                                            </div>
                                            <div class="right">
                                                <input type="submit" id="edit4" name="submit4" value="Update" />
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-15">
                                                <label for="vision">Vision & Mission</label>
                                            </div>
                                            <div class="col-65">
                                                <textarea id="vision" name="vision" placeholder="vision & Mission" style="height:100px"value="<?php echo $info['vision'];?>"></textarea>
                                            </div>
                                            <div class="right">
                                                <input type="submit" id="edit5" name="submit5" value="Update" />
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-15">
                                                <label for="computer">Computer Lab</label>
                                            </div>
                                            <div class="col-65">
                                                <textarea id="computer" name="computer" placeholder="computer" style="height:100px"value="<?php echo $info['computer'];?>"></textarea>
                                            </div>
                                            <div class="right">
                                                <input type="submit" id="edit6" name="submit6" value="Update" />
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-15">
                                                <label for="science">Science Lab</label>
                                            </div>
                                            <div class="col-65">
                                                <textarea id="science" name="science" placeholder="science lab" style="height:100px"value="<?php echo $info['science'];?>"></textarea>
                                            </div>
                                            <div class="right">
                                                <input type="submit" id="edit7" name="submit7" value="Update" />
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-15">
                                                <label for="library">Library</label>
                                            </div>
                                            <div class="col-65">
                                                <textarea id="library" name="library" placeholder="library" style="height:100px"value="<?php echo $info['library'];?>"></textarea>
                                            </div>
                                            <div class="right">
                                                <input type="submit" id="edit8" name="submit8" value="Update" />
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-15">
                                                <label for="auditorium">Auditorium</label>
                                            </div>
                                            <div class="col-65">
                                                <textarea id="auditorium" name="auditorium" placeholder="auditorium" style="height:100px"value="<?php echo $info['auditorium'];?>"></textarea>
                                            </div>
                                            <div class="right">
                                                <input type="submit" id="edit9" name="submit9" value="Update" />
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-15">
                                                <label for="sports">Sports</label>
                                            </div>
                                            <div class="col-65">
                                                <textarea id="sports" name="sports" placeholder="sports" style="height:100px"value="<?php echo $info['sports'];?>"></textarea>
                                            </div>
                                            <div class="right">
                                                <input type="submit" id="edit10" name="submit10" value="Update" />
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-15">
                                                <label for="extra">Extra Actiities</label>
                                            </div>
                                            <div class="col-65">
                                                <textarea id="extra" name="extra" placeholder="extra curricular activities" style="height:100px"value="<?php echo $info['extra'];?>"></textarea>
                                            </div>
                                            <div class="right">
                                                <input type="submit" id="edit11" name="submit11" value="Update" />
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-15">
                                                <label for="working">Working Hours</label>
                                            </div>
                                            <div class="col-65">
                                                <textarea id="working" name="working" placeholder="working" style="height:100px"value="<?php echo $info['working'];?>"></textarea>
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
                                    </form><hr>
                                    <!-- -----------------------------------  teaching staff -----------------------------------  --> 
                                    <form method="post" enctype="multipart/form-data">
                                        <h2>Teaching Staff</h2>  
                                        <div class="row">
                                            <div class="col-15">
                                                <label for="tname">Enter Name</label>
                                            </div>
                                            <div class="col-65">
                                                <input type="text" name="tname" id="tname" placeholder="Enter Name" />
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-15">
                                                <label for="tdesg">Designation</label>
                                            </div>
                                            <div class="col-65">
                                                <input type="text" name="tdesg" id="tdesg" placeholder="Enter Designation" />
                                            </div>
                                        </div>  
                                        <div class="row">
                                            <div class="col-15">
                                                <label for="sdesg">subject</label>
                                            </div>
                                            <div class="col-65">
                                                <input type="text" name="sdesg" id="sdesg" placeholder="Enter Subject" />
                                            </div>
                                        </div> 
                                        <div class="row">
                                            <div class="col-15">
                                                <label for="timage">Select Image</label>
                                            </div>
                                            <div class="col-65"><br>
                                                <input type="file" name="timages" id="timage" />
                                            </div>
                                            <div class="right">
                                                <input type="submit" name="tsubmit" value="Upload" />			
                                            </div>
                                        </div>      
                                        <!-- --------------------------------- non teaching staff ----------------------------------- --> 
                                        <h2>Non-Teaching Staff</h2>  
                                        <div class="row">
                                            <div class="col-15">
                                                <label for="ntname">Enter Name</label>
                                            </div>
                                            <div class="col-65">
                                                <input type="text" name="ntname" id="ntname" placeholder="Enter Name" />
                                            </div>
                                        </div>   
                                        <div class="row">
                                            <div class="col-15">
                                                <label for="ntdesg">Designation</label>
                                            </div>
                                            <div class="col-65">
                                                <input type="text" name="ntdesg" id="ntdesg" placeholder="Enter Designation" />
                                            </div>
                                        </div>  
                                        <div class="row">
                                            <div class="col-15">
                                                <label for="ntimage">Select Image</label>
                                            </div>
                                            <div class="col-65"><br>
                                                <input type="file" name="ntimages" id="ntimage" />
                                            </div>
                                            <div class="right">
                                                <input type="submit" name="ntsubmit" value="Upload" />			
                                            </div>
                                        </div> 
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