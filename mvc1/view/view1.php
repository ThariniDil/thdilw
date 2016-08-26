<?php

//echo $result;

?>



<html>

<table align="center">
    <tr>
   
    </tr>
    <tr>
    <th>Name</th>
    <th>Age</th>
    <th>City</th>
    </tr>
    <?php
 while($row=mysql_fetch_row($result))
 {
   ?>
            <tr>
            <td><?php echo $row[name]; ?></td>
            <td><?php echo $row[age]; ?></td>
            <td><?php echo $row[city]; ?></td>
            </tr>
            <?php
 }
 ?>
    </table>
</html>
