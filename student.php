<!DOCTYPE html>
<link rel="stylesheet" type="text/css" href="AnythingSlider-master/css/anythingslider.css">
<link rel="stylesheet" type="text/css" href="des_css.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
<script src="AnythingSlider-master/js/jquery.anythingslider.js"></script>

<script>
	// DOM Ready
	$(function(){
		$('#slider').anythingSlider();
	});
</script>

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
            Period 1: American History
        </option>
        <option>
            Period 2: Biology
        </option>
	<option>
            Period 3: Chemistry
        </option>
	<option>
            Period 4: Physics A
        </option>
	<option>
            Period 5: English 
        </option>
    </select>
    <button id="acc">Account Settings</button>
</div>

<br>
<br>    

<div class="left">
    <img src="student.png" id="prof" >
            
    <br>
    <br>
    
    <b id="points">Points: 213</b>
    
    <br>
    <br>
    
    <ul id="slider">
	<li><img src="vector_badges/PNG/vector_badgesbadges_1.png"></li>
	<li><img src="vector_badges/PNG/vector_badgesbadges_2.png"></li>
	<li><img src="vector_badges/PNG/vector_badgesbadges_3.png"></li>
	<li><img src="vector_badges/PNG/vector_badgesbadges_4.png"></li>
	<li><img src="vector_badges/PNG/vector_badgesbadges_5.png"></li>
    </ul>
    
    <br>
    <br>
    <br>
    
    <div id="top_group">
	Top Group: #5<br><br>
	<img class="tg" src="student.png" >&nbsp;&nbsp;&nbsp;
	<img class="tg" src="student.png" >&nbsp;&nbsp;&nbsp;
	<img class="tg" src="student.png" >&nbsp;&nbsp;&nbsp;
	<img class="tg" src="student.png" >
    </div>
</div>

<div class="right">
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
