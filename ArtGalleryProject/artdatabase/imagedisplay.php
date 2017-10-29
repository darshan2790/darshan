<?php

$db = mysqli_connect('localhost', 'root', '', 'artdatabase');

$data = mysql_query("select * from user");
while($info = mysql_fetch_array($data)){
        // print "<tr bgcolor = red>";
        // print "<td>".$info['uname'];
        // print "<td>".$info['rollno'];
        // print "<td>".$info['city'];   
		print "tan";
        print "<img src=../images/".$info['image'].">";
    }	
?>