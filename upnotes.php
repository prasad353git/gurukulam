<html>
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
<head>
    <title>Notes</title>
    <style>
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
        @media screen and (max-width: 600px) { .col-15, .col-65,input[type=submit] { width: 100%;  margin-top: 10; } select{height:20%;} }
    </style>
</head>
<body>
    <div class="bg">
        <div class="box">
            <h1 class="h1">Notes</h1> 
            <form method="post">
                <div>
                    <br>
                    <input type="submit" value="Dashboard" name="dash" class="mybtn left" />
                    <input type="submit" value="logout" name="logout" class="mybtn right" />
                </div>
            </form>  
            <center>
                <fieldset>
                    <legend>Notes</legend>
                    <?php    
                        if($result && mysqli_num_rows($result)>0)
                        {
                            $userinfo=mysqli_fetch_assoc($result);
                            
                            if($userinfo['desg']==3)
                            {
                    ?>
                                <form method="POST" enctype="multipart/form-data">
                                <h4>Select Class & Subject Each Time While Displaying & Uploading Notes</h4>
                                    <select name="class">
                                        <option selected disabled>Select Class</option>
                                        <option name="class" value="1">class1</option>
                                        <option name="class" value="2">class2</option>
                                        <option name="class" value="3">class3</option>
                                        <option name="class" value="4">class4</option>
                                        <option name="class" value="5">class5</option>
                                        <option name="class" value="6">class6</option>
                                        <option name="class" value="7">class7</option>
                                        <option name="class" value="8">class8</option>
                                        <option name="class" value="9">class9</option>
                                        <option name="class" value="10">class10</option>
                                    </select><br><br>
                                    <select name="sub">
                                        <option selected disabled>Select subject</option>
                                        <option name="sub" value="sam">Samskrutam</option>
                                        <option name="sub" value="kan">Kannada</option>
                                        <option name="sub" value="hin">Hindi</option>
                                        <option name="sub" value="eng">English</option>
                                        <option name="sub" value="pe">Physical Education</option>
                                        <option name="sub" value="maths">Mathemetics</option>
                                        <option name="sub" value="science">Science</option>
                                        <option name="sub" value="ss">Social Science</option>
                                        <option name="sub" value="es">Environmental Science</option>
                                        <option name="sub" value="cs">Computer Science</option>
                                    </select><br><br>        
                                    <input type="submit" name="submit" value="Display" class="mybtn" /> <br><br><br>
                                    <input type="file" name="file"/>&nbsp;&nbsp;&nbsp;
                                    <input type="submit" name="upload" value="Upload" class="mybtn" /> &nbsp;&nbsp;&nbsp;
                                </form>
                            <?php  
                                if(isset($_POST['submit']))  
                                {   
                                    $class = $_POST['class'];  
                                    $sub = $_POST['sub'];  
                                    $dir =  $class.$sub;  
                                    $files = scandir($dir);
                                    for( $a = 2 ; $a < count($files); $a++)
                                        {
                            ?>
                                            <p>
                                                <a href="<?php echo $dir; ?>/<?php echo $files[$a];?>" ><?php echo $files[$a];?></a>&nbsp&nbsp&nbsp&nbsp
                                                <a href="<?php echo $dir; ?>/<?php echo $files[$a];?>"  download="<?php echo $files[$a]; ?>">Download</a>
                                                <a href="delete.php?name=<?php echo $dir; ?>/<?php echo $files[$a]; ?>" style="color: red;"> Delete</a>                               
                                            </p>
                            <?php
                                        } 
                                }

                                elseif(isset($_POST['upload']))
                                {
                                    $file = $_FILES["file"];
                                    $class = $_POST['class'];  
                                    $sub = $_POST['sub'];  
                                    $dir =  $class.$sub;  
                                    $files = scandir($dir);
                                    $res= move_uploaded_file($file["tmp_name"], "$dir/" . $file["name"]);
                                    
                                    if($res)
                                    {
                                        $files = scandir($dir);
                                        echo "<h1>Updated files list</h1>";
                                        for( $a = 2 ; $a < count($files); $a++)
                                        {
                            ?>
                                            <p>
                                                <a href="<?php echo $dir; ?>/<?php echo $files[$a];?>" ><?php echo $files[$a];?></a>&nbsp;&nbsp;&nbsp;&nbsp;
                                                <a href="<?php echo $dir; ?>/<?php echo $files[$a];?>"  download="<?php echo $files[$a]; ?>">Download</a>
                                                <a href="delete.php?name=<?php echo $dir; ?>/<?php echo $files[$a]; ?>" style="color: red;"> Delete</a>                               
                                            </p>
                            <?php
                                        }
                                    }
                                    else
                                    {
                                        echo '<script type="text/javascript"> alert("Error Uploading Data!"); </script>'; 
                                    }
                                }



                            }
                        }
                    ?>
                </fieldset>
            </center>
        </div>
    </div>

</body>
</html>
