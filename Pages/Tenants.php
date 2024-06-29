<!DOCTYPE html>
<html>
<head>

</head>

<body>
<h1> Tenants Page </h1>

<h3>List All Tenants </h3>
<form action="../includes/allTenants.inc.php" method ="POST">
<button> GO </button>
</form>
<h3> Add a Tenant </h3>

<form action = "../includes/newTenant.inc.php" method = "POST" required>
<input type = "text" name = "tenantFirstName" placeholder="First Name" required>
<input type = "text" name = "tenantLastName" placeholder="Last Name" required>
<input type = "text" name = "tenantPhoneNumber" placeholder="(xxx)xxx-xxxx" required>
<input type = "email" name = "tenantEmail" placeholder="@Email" required>

<button> Add </button>
</form>

<form action = "" method = "POST">
<h3>Submit a payment </h3>
<input type = "number" name ="payment" min = "0" placeholder = "$" required>
<button> Submit Payment </button>
</form>

<form action = "../includes/newServiceRequest.php" method = "POST">
<h3>Service Request </h3>
<label for ="tenantRequesting"> Tenant: </label>
<input type = "number" min = "0" name = "tenantRequesting" placeholder="Tenant ID" required>
<br>
<label for ="serviceRequestDate"> Request Date: </label>
<input type = "date"  name = "serviceRequestDate" required>
<br>
<textarea id="serviceDescription" name ="serviceDescription" rows = "4" cols = "45"
placeholder= "Please describe the service you are requesting...." required>
</textarea>
<br>
<label for ="maintenanceEmployee"> Maintenance Employee </label>
<input type = "number" min="0" name="maintenanceEmployee"  required>
<br>
<label for ="serviceDate"> Service Date: </label>
<input type ="date" name="serviceDate" required>
<br>
<label for ="serviceTime"> Service Time: </label>
<input type= "time" name ="serviceTime" required>

<br><br>
<button> Submit Request </button>
</form>


</body>

</html>