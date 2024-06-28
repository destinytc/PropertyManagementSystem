<!DOCTYPE html>
<html>
<head>

</head>

<body>
<h1> Tenants Page </h1>


<form action = "../includes/newTenant.inc.php" method = "POST">
<input type = "text" name = "tenantFirstName" placeholder="First Name">
<input type = "text" name = "tenantLastName" placeholder="Last Name">
<input type = "text" name = "tenantPhoneNumber" placeholder="(xxx)xxx-xxxx">
<input type = "email" name = "tenantEmail" placeholder="@Email">

<button> Add </button>
</form>

<form action = "" method = "POST">
<h3>Submit a payment </h3>
<input type = "number" name ="payment" placeholder = "$">
<button> Submit Payment </button>
</form>

<form action = "" method = "POST">
<h3>Service Request </h3>
<input type = "text" name ="serviceDescription" placeholder = "Please explain the reason for your service request...">
<input type = "date"  name = "serviceRequestDate">
<button> Submit Request </button>
</form>
</body>

</html>