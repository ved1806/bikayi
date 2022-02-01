<?php require 'connect.php';?>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

</style>
</head>
<body>

<h3>Shipping Details</h3>

<div class="container">
  <form action="connect.php" method="post">


    <label for="cname">Address</label>
    <input type="text" id="cname" name="CustomerName" placeholder="Address..." required>

    <label for="email">City</label>
    <input type="text" id="email" name="Email" placeholder="City.." required>

    <label for="Mnumber"> Pincode</label>
    <input type="text" id="Mnumber" name="MobileNumber" placeholder="Pincode..." required>

    





    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>
