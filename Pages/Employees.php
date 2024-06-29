<!DOCTYPE html>
<html>
<head>

</head>

<body>

<h1> Employee Page </h1>

<h3> Add an Employee </h3>

<form action = "../includes/newEmployee.inc.php" method = "POST">
<input type = "text" name = "employeeFirstName" placeholder="First Name" required>
<input type = "text" name = "employeeLastName" placeholder="Last Name" required>
<input type = "text" name = "employeePhoneNumber" placeholder="(xxx)-xxx-xxxx" required>
<input type = "email" name = "employeeEmail" placeholder="@Email" required>
<input type = "text" name = "employeeType" placehoder = "Employee position" required>

<button> Add </button>
</form>

<form action="../includes/allEmployees.inc.php" method ="POST">
<p>List All Employees </p>
<button> GO </button>
</form>
</body>
</html>