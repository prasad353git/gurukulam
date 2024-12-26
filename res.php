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
    <title>Results</title>
    <style>
        table{border-radius:5px; border-color:blue; width:50%; color:white;}
th,td{border-radius:5px; text-align:center; padding:0.1%; color:white;}
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
        @media screen and (max-width: 600px) { .col-15, .col-65,input[type=submit] { width: 100%;  margin-top: 10; } select{height:20%;} }
    </style>
</head>
<body>
    <div class="bg">
        <div class="box">

        <div class="main">
            <center> <br>
                <h1 class="h1">Results</h1>
                <form method="post">
                    <div>
                        <br>
                        <input type="submit" value="Dashboard" name="dash" class="mybtn left" />
                        <input type="submit" value="logout" name="logout" class="mybtn right" />
                        <br><br><br><br>
                    </div>
                </form>  
            <?php    
            if($result && mysqli_num_rows($result)>0)
            {
                $userinfo=mysqli_fetch_assoc($result);
                
                if($userinfo['desg']==1)
                {
            ?>
                <fieldset>
                    <legend>Show Results</legend>
                    <form method="post">
                    <h4>Enter the class</h4>
            
                        <select name="class">
                        <option selected disabled>Select Class</option>
                            <option value="1">class1</option>
                            <option value="2">class2</option>
                            <option value="3">class3</option>
                            <option value="4">class4</option>
                            <option value="5">class5</option>
                            <option value="6">class6</option>
                            <option value="7">class7</option>
                            <option value="8">class8</option>
                            <option value="9">class9</option>
                            <option value="9">class10</option>
                        </select><br><br>
                    <input type="submit" name="result" value="Show Result" class="mybtn" /><br><br>
                <?php  
                    $class=$_POST['class'];
                    $result=mysqli_query($con,"SELECT `s1`, `s2`, `s3`, `s4`, `s5`, `s6`,`rno`, `total` FROM `result` WHERE `class`='$class'");
                    if(isset($_POST['result']))
                    {
                ?>
                        <table border=3>
                        <th>Roll No</th>
                        <th>subject 1</th>
                        <th>subject 2</th>
                        <th>subject 3</th>
                        <th>subject 4</th>
                        <th>subject 5</th>
                        <th>subject 6</th>
                        <th>Total Marks</th> 
                <?php
                        while($row = mysqli_fetch_assoc($result))
                        {
                            $s1 = $row['s1'];
                            $s2 = $row['s2'];
                            $s3 = $row['s3'];
                            $s4 = $row['s4'];
                            $s5 = $row['s5'];
                            $s6 = $row['s6'];
                            $rno = $row['rno'];
                            $total = $row['total'];
                ?>
                            <tr><td border=2><?php echo $rno;?></td>
                                <td border=2><?php echo $s1;?></td>
                                <td border=2><?php echo $s2;?></td>
                                <td border=2><?php echo $s3;?></td>
                                <td border=2><?php echo $s4;?></td>
                                <td border=2><?php echo $s5;?></td>
                                <td border=2><?php echo $s6;?></td>
                                <td border=2><?php echo $total;?></td>
                <?php 
                        }
                    } 
                ?>              
                            </tr>
                        </table>
                    </fieldset>
                </form>  
                <?php
                    if(mysqli_num_rows($result)==0)
                    {
                        echo "no results";
                    }
                }

                if($userinfo['desg']==4)
                {
            ?>
                    <form method="post">
                        <fieldset>
                            <legend>Show Result</legend>
                            <h4>Enter Roll Number</h4>
                            <input type="number" name="rno" placeholder="Roll No" /><br><br>
                            <input type="submit" name="show" value="Show Result" class="mybtn" />
                    <br><br>
            <?php  
                    $class = $userinfo['class'];
                    $rno=$_POST['rno'];
                    $result=mysqli_query($con,"SELECT `s1`, `s2`, `s3`, `s4`, `s5`, `s6`, `total` FROM `result` WHERE `rno`='$rno' and `class`='$class'");
                    while($row = mysqli_fetch_assoc($result))
                    {
                        $s1 = $row['s1'];
                        $s2 = $row['s2'];
                        $s3 = $row['s3'];
                        $s4 = $row['s4'];
                        $s5 = $row['s5'];
                        $s6 = $row['s6'];
                        $total = $row['total'];
                        if(isset($_POST['show']))
                        {
                        ?>
                            <p>  Roll No : <?php echo $rno;?></p><hr>
                            <p>Subject 1 : <?php echo $s1;?></p>
                            <p>Subject 2 : <?php echo $s2;?></p>
                            <p>Subject 3 : <?php echo $s3;?></p>
                            <p>Subject 4 : <?php echo $s4;?></p>
                            <p>Subject 5 : <?php echo $s5;?></p>
                            <p>Subject 6 : <?php echo $s6;?></p><hr>
                        <?php 
                            echo '<p>Total Marks:&nbsp'.$total.'</p>';
                        }
                    }
                ?>   
                    </fieldset>
                    </form>
                <?php
                    if(mysqli_num_rows($result)==0)
                    {
                        echo "no results";
                    }
                }
            }
            ?>
        </div>
    </div>
</body>
</html>            