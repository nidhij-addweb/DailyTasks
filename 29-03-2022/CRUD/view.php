<?php

    $connection=mysqli_connect("localhost","root","","addweb_db_with_queries") or die("error in con");
    $query=mysqli_query($connection,"select * from student_info") or die('error in view');
    echo"<table border=2><tr><td>ID</td><td>NAME</td><td>DIVISION</td><td>ADDRESS</td></tr>";
    while($row=mysqli_fetch_array($query)){
       echo "<tr>";
       echo "<td>".$row['s_id']."</td>";
       echo "<td>".$row['s_name']."</td>";
       echo "<td>".$row['s_divison']."</td>";
       echo "<td>".$row['s_address']."</td>";
       echo "</tr>";

   }
   echo"</table>";

?>