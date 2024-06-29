<!DOCTYPE html>
<html>
<head>
<link rel = "stylesheet"  href="../style.css" />

</head>

<body>
<p class="title"> Property Management System<p>
    <br>
<h1> Properties </h1>

<h3> Add a Property </h3>

<form action = "../includes/newProperty.inc.php" method = "POST">
<input type = "text" name = "street" placeholder = "Street" required>
<input type = "text" name = "city" placeholder = "City" required>
<input type = "text" name = "state" placeholder = "State" required>
<input type = "text" name = "zip" placeholder = "Zip" required>
<br>
<input type = "number" name = "bedrooms" min = "0" placeholder = "Number of Bedrooms" required>
<input type = "number" name = "bathrooms" min ="0" placeholder = "Number of Bathrooms" required>
<input type = "number" name = "squareFt" min ="0" placeholder = "Square Feet" required>

<p> Is the property vacant? </p>
<input type="text" name = "vacancy" required>
<input type = "number" min ="0" name ="manager" placeholder = "Property Manager" required>
<!--
<input type = "radio" name = "vacancy" value= "1" />
<label for = "vacancy">Yes</label>
-->

<button> Add </button>
</form>

<h3> Initiate Lease </h3>
<form action = "../includes/newLease.inc.php" method = "POST">
<input type = "number"  min ="0" name = "leaseProperty" placeholder ="Property" required>
<input type = "number" min="0" name = "lessee" placeholder= "Lessee" required>
<input type= "date" name = "leaseStart" placeholder ="Start Date" required>
<input type = "date" name = "leaseEnd" placeholder = "End Date" required>
<input type = "number" min = "0" name = "rent"  placeholder = "Rent Amount" required>
<button> Create Lease </button>

</form>

<form action="../includes/allProperties.inc.php" method ="POST">
<p>List All Properties </p>
<button> Return </button>
</form>
</body>

</html>