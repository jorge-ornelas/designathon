<!DOCTYPE html>
<link rel="stylesheet" type="text/css" href="des_css.css">
<html>
<head>
    <title>Designathon</title>
</head>

<body>

<header>
    Flipper
    <span id="user_name">Bobby</span>
</header>

<div id="curr_class">
    Period 6: Algebra
    <select id="class_chooser">
        <option>Change class:</option>
        <option>
            Period 5: Algebra
        </option>
        <option>
            Period 2: Trigonometry
        </option>
    </select>
    <button id="acc">Account Settings</button>
</div>

<br>
<br>    

<div id="left">
    <img src="student.png" id="prof" >
            
    <br>
    <br>
    
    Points: 213
    
    
</div>

<div id="right">
    <button>Lessons</button>
    <button></button>
    <button>Lesson work</button>
    
    <br>
        
    <table id="students">
    
        <?php
        //
        //session_start();
        //    $dbc = mysql_connect('sql.mit.edu', 'joor2992', 'mames475')
        //            or die('Error connecting to MySQL server.');
        //
        //    mysql_select_db('joor2992+flipper', $dbc);
        //
        //            
        //    $query="SELECT * FROM Students";
        //    $result=mysql_query($query);
        //    
        //    $num=mysql_numrows($result);
        //
        //    $i=0;
        //    while ($i < $num) {
        //            
        //            $name=mysql_result($result,$i,"Name");
        //            $hw_avg=mysql_result($result,$i,"HW_Average");
        //            $class_avg=mysql_result($result,$i,"Class_Average");
        //            $quarter_avg=mysql_result($result,$i,"Quarter_Average");
        //            $year_avg=mysql_result($result,$i,"Year_Average");
        //            
        //            echo'<tr> <td> $name </td> <td> $hw_avg </td> <td> $class_avg </td> <td> $quarter_avg </td> <td> $year_avg </td> </tr>';
        //            
        //            $i++;
        //    }
        //    
        //    mysql_close($dbc);
        //?>
    
</div>



</body>
</html>
