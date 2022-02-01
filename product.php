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
  border: 1px solid #B1C1A5;
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

button[type=submit]:hover {
  background-color: #080808;
}

button[type=submit] {
  background-color: #DC1444;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #080808;
}



.container {
  border-radius: 5px;
  background-color: #B1C1A5;
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

<h3>Product Form</h3>

<div class="container">
  <form action="/action_page.php">


    <label for="pname">Product Name</label>
    <input type="text" id="pname" name="productname" placeholder="Product name..">

    <label for="quantity">Quantity </label>
    <input type="text" id="quantity" name="quantity" placeholder="Quantity..">

    <label for="Price">Price </label>
    <input type="text" id="Price" name="Price" placeholder="Price...">

    <label for="MRP">MRP</label>
    <input type="text" id="mrp" name="Mrp" placeholder="MRP...">


    <label for="cList">Customer List</label>
    <select id="list" name="list">
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select>


    <input type="submit" value="Submit">
    <button type="submit" value="Submit" formaction="customer.html">Go to previous page</button>

  </form>
</div>

</body>
</html>
