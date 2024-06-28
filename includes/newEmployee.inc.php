<?php


if($_SERVER["REQUEST_METHOD"] == "POST"){

    $EmployeeFirstName= $_POST["employeeFirstName"];
    $EmployeeLastName = $_POST["employeeLastName"];
    $EmployeeEmail = $_POST["employeeEmail"];
    $EmployeeType = $_POST["employeeType"];
    $EmployeePhoneNumber = $_POST["employeePhoneNumber"];


    try{

        require_once "dbh-inc.php";

        $query = "INSERT INTO Employee (EmployeeFirstName, EmployeeLastName, EmployeeEmail,
        EmployeeType, EmployeePhoneNumber) VALUES  (:EmployeeFirstName, :EmployeeLastName, :EmployeeEmail,
        :EmployeeType, :EmployeePhoneNumber);";


        $stmt = $pdo->prepare($query);

        $stmt->bindParam(":EmployeeFirstName" , $EmployeeFirstName);
        $stmt->bindParam(":EmployeeLastName" , $EmployeeLastName);
        $stmt->bindParam(":EmployeeEmail" , $EmployeeEmail);
        $stmt->bindParam(":EmployeeType" , $EmployeeType);
        $stmt->bindParam(":EmployeePhoneNumber" , $EmployeePhoneNumber);

        $stmt->execute();

        $pdo = NULL;
        $stmt = NULL;

        header("Location: ../index.php"); //send user back to home
        die();

    } catch(PDOException $e){
        die("Query failed: " . $e->getMessage()); //terminate script
        
    }
}else{
    header("Location: ../index.php");


}
