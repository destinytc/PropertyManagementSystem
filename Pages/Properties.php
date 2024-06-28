<!DOCTYPE html>
<html>
<head>

</head>

<body>

<h1> Properties </h1>

<h3> Add a Property </h3>

<form action = "../includes/newProperty.inc.php" method = "POST">
<input type = "text" name = "street" placeholder = "Street">
<input type = "text" name = "city" placeholder = "City">
<input type = "text" name = "state" placeholder = "State">
<input type = "text" name = "zip" placeholder = "Zip">
<br>
<input type = "number" name = "bedrooms" placeholder = "Number of Bedrooms">
<input type = "number" name = "bathrooms" placeholder = "Number of Bathrooms">
<input type = "number" name = "squareFt" placeholder = "Square Feet">

<p> Is the property vacant? </p>
<input type="text" name = "vacancy">
<input type = "number" name ="manager" placeholder = "Property Manager">
<!--
<input type = "radio" name = "vacancy" value= "1" />
<label for = "vacancy">Yes</label>
-->
<br>
<button> Add </button>
</form>

<h3> Initiate Lease </h3>
<form action = "../includes/newLease.inc.php" method = "POST">
<input type = "number" name = "leaseProperty" placeholder ="Property">
<input type = "number" name = "lessee" placeholder= "Lessee">
<input type= "date" name = "leaseStart" placeholder ="Start Date">
<input type = "date" name = "leaseEnd" placeholder = "End Date">
<input type = "number" name = "rent"  placeholder = "Rent Amount">
<button> Create Lease </button>

</form>

<form action="../includes/allProperties.inc.php" method ="POST">
<p>List All Properties </p>
<button> GO </button>
</form>
</body>

</html>