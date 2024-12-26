<?php 
    session_start(); 
    require_once "functions.php" ;
    $con=connect_my_db();

    $result=mysqli_query($con,"SELECT * FROM users where id=".$_SESSION['userid']);

    if(mysqli_error($con))      
    echo "<br>Error = ".mysqli_error($con);

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
    <title>Wall of Fame</title>
    <style>       
        .rit{float:right; padding-right:8%; padding-top:2%;}
        body,html{margin:0; background-image:url('back.jpg'); background-repeat:no-repeat; background-size:cover;position:center; height:100%;width:100%;}
        fieldset{width:90%; border-radius:5px; border-color:#01FF00;}
        .bg{position:fixed; overflow-x:hidden; background-image:url('back.jpg'); background-repeat:no-repeat; background-size:cover;position:center; height:100%;width:100%;}
        .box{position:absolute; padding-left:3%;padding-right:3%;padding-bottom:3%; width:94%; color:white; font-size:20px; background-color:rgba(000,000,000,0.700); box-shadow: 0px 8px 16px 0px rgba(0,0,0,1.0); border-radius:15px;}
        .mybtn{width:10%; padding:1%; background-color:#7b3d11; color:white; border:none; border-radius:5px; box-shadow:0px 3px 8px 0px rgba(0,0,0,1.0);}
        .mybtn:hover{background-color:#F7642D; font-size:16px; color:white; box-shadow: 0px 8px 16px 0px rgba(0,0,0,1.0);}
        .h1{ color:white; border-radius:15px; text-align: center;}
        input[type=text],[type=number], select, textarea { width: 100%; padding: 12px; border: 1px solid #ccc; border-radius: 4px; resize: vertical; }
        label{ padding: 12px 12px 12px 0; display: inline-block; }
        input[type=submit] { background-color:#7b3d11; color: white; padding: 12px 20px; border: none; border-radius: 4px; }
        input[type=submit]:hover{background-color:#F7642D;}
        input[type=file], select { width: 50%; padding: 12px; border: 1px rgb(255, 81, 0);box-shadow: 0px 1px 2px 0px rgba(0,0,0,1.0); border-radius: 4px; }
        .col-15 { float: left; width: 15%; margin-top: 6px; }
        .col-65 { float: left; width: 65%; margin-top: 6px; }
        .row:after { content: ""; display: table; clear: both; }
        .right{float:right;} .left{float:left;}
        @media screen and (max-width: 600px) { .col-15, .col-65,input[type=submit] { width: 100%;  margin-top: 10; } select{height:20%;} }
        
        
    </style>
</head>
<body>
    <div class="bg">
        <div class="box">
            <?php    
                if($result && mysqli_num_rows($result)>0)
                {
                    $userinfo=mysqli_fetch_assoc($result);
                    
                    if($userinfo['desg']==3)
                    {
            ?>
                <h1 class="h1">Achiever's Details </h1>
                <form method="post">
                    <div>
                        <input type="submit" value="Dashboard" name="dash" class="mybtn left" />
                        <input type="submit" value="logout" name="logout" class="mybtn right" />
                    </div>
                </form>   
                <center>
                <fieldset>
                    <legend>Achievers</legend>
                    
                        <form method="post" enctype="multipart/form-data">
                            <h2>Enter Achiever's Details</h2>  
                            <div class="row">
                                <div class="col-15">
                                    <label for="aname">Enter Name</label>
                                </div>
                                <div class="col-65">
                                    <input type="text" name="aname" id="aname" placeholder="Enter Name" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-15">
                                    <label for="aach">Achievement</label>
                                </div>
                                <div class="col-65">
                                    <input type="text" name="aach" id="aach" placeholder="Enter Achievement" />
                                </div>
                            </div>  
                            <div class="row">
                                <div class="col-15">
                                    <label for="aclass">Class</label>
                                </div>
                                <div class="col-65">
                                    <input type="text" name="aclass" id="aclass" placeholder="Enter Class" />
                                </div>
                            </div> 
                            <div class="row">
                                <div class="col-15">
                                    <label for="ayear">Year</label>
                                </div>
                                <div class="col-65">
                                    <input type="text" name="ayear" id="ayear" placeholder="Enter Year" />
                                </div>
                            </div> 
                            <div class="row">
                                <div class="col-15">
                                    <label for="aimage">Select Image</label>
                                </div>
                                <div class="col-65"><br>
                                    <input type="file" name="aimage" id="timage" />
                                </div>
                                <div class="rit">
                                    <input type="submit" name="asubmit" value="Upload" class="left" />			
                                </div>
                            </div>      
                        
                        </form>
                    </div>     
                </fieldset>    
                </center>
            <?php
                        if(isset($_POST["asubmit"]))
                        {
                            $fnm = $_FILES["aimage"]["name"];
                            $dst_db = "wof/".$fnm;
                            move_uploaded_file($_FILES["aimage"]["tmp_name"],"./wof/".$fnm); 
                            $check = mysqli_query($con,"insert into wof(name,year,achv,class,image) values('$_POST[aname]','$_POST[ayear]','$_POST[aach]','$_POST[aclass]','$dst_db')");  // inserting into db
                            if($check)
                            {
                                echo '<script type="text/javascript"> alert("Data Inserted Seccessfully!"); </script>';  // alert message
                            }
                            else
                            {
                            echo '<script type="text/javascript"> alert("Error Uploading Data!"); </script>';  // when error occur
                            }
                        }
                    }
                }
            ?>
    </div>   
</body>
</html>