<!DOCTYPE html>
<html>
<head>

</head>

<body>

<h1> Employee Page </h1>


<form action = "../includes/newEmployee.inc.php" method = "POST">
<input type = "text" name = "employeeFirstName" placeholder="First Name">
<input type = "text" name = "employeeLastName" placeholder="Last Name">
<input type = "text" name = "employeePhoneNumber" placeholder="(xxx)-xxx-xxxx">
<input type = "email" name = "employeeEmail" placeholder="@Email">
<input type = "text" name = "employeeType" placehoder = "Employee position">

<button> Add </button>
</form>

<form action="../includes/allEmployees.inc.php" method ="POST">
<p>List All Employees </p>
<button> GO </button>
</form>
</body>
</html>