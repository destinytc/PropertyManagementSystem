<?php


if($_SERVER["REQUEST_METHOD"] == "POST"){

    $TenantFirstName= $_POST["tenantFirstName"];
    $TenantLastName = $_POST["tenantLastName"];
    $TenantEmail = $_POST["tenantEmail"];
    $TenantPhoneNumber = $_POST["tenantPhoneNumber"];


    try{

        require_once "dbh-inc.php";

        $query = "INSERT INTO Tenant (TenantFirstName, TenantLastName, TenantEmail,
        TenantPhoneNumber) VALUES  (:TenantFirstName, :TenantLastName, :TenantEmail,
        :TenantPhoneNumber);";


        $stmt = $pdo->prepare($query);

        $stmt->bindParam(":TenantFirstName" , $TenantFirstName);
        $stmt->bindParam(":TenantLastName" , $TenantLastName);
        $stmt->bindParam(":TenantEmail" , $TenantEmail);
        $stmt->bindParam(":TenantPhoneNumber" , $TenantPhoneNumber);

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
