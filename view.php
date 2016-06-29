<!DOCTYPE html>
<html>
<head>
  <title>Insert Data in MySQL using PHP MVC</title>
</head>

<body>
<?php 
 echo $result;
 
 //var_dump($result);

?>
<form action="" method="POST">
  <p>
   <label>Name</label>
   <input id="name" value="" name="name" type="text" required="required" /><br />
  </p>

  <p>
   <label>Age</label>
   <input id="age" name="age" type="text" required="required" /><br />
  </p>

   <p>
   <label>City</label>
   <input id="city" value="" name="city" type="text" required="required" /><br>
  </p>
   <br />
  <p>

      <button type="submit" class="green big" name="submit"></button>
  </p>
 </form>

</body>
</html>