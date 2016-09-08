<!DOCTYPE html>
<html>
    <head>
        <title>Form</title>
    </head>


<body>

               <table>  
                   
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Contact</th>
                        <th>Address</th>

    
    
    
    
    
    
          <?php
          
          //echo site_url('Form/select');
          
if(!empty($showData)){
	foreach($showData as $row)
	{ ?>
<tr>
 
    
<td><?php echo $row->id; ?></td>
<td><?php echo $row->name; ?></td>
<td><?php echo $row->email; ?></td>
<td><?php echo $row->contact; ?></td>
<td><?php echo $row->address; ?></td>
<td><a href="<?php echo site_url('Form/editData'); ?>">Edit</a></td> 
 
</tr>

    
    <?php }} ?>

</table>
    
</body>
</html>