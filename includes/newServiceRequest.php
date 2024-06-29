<?php


if($_SERVER["REQUEST_METHOD"] == "POST"){

    $ServiceDescription= $_POST["serviceDescription"];
    $RequestDate = $_POST["serviceRequestDate"];
    $ServiceDate = $_POST["serviceDate"];
    $ServiceTime = $_POST["serviceTime"];
    $EmployeeID = $_POST["maintenanceEmployee"];
    $TenantID = $_POST["tenantRequesting"];


    try{

        require_once "dbh-inc.php";

        $query = "INSERT INTO ServiceRequest (ServiceDescription, RequestDate, ServiceDate,
        ServiceTime, EmployeeID, TenantID) VALUES  (:ServiceDescription, :RequestDate, :ServiceDate,
        :ServiceTime, :EmployeeID, :TenantID);";


        $stmt = $pdo->prepare($query);

        $stmt->bindParam(":ServiceDescription" , $ServiceDescription);
        $stmt->bindParam(":RequestDate" , $RequestDate);
        $stmt->bindParam(":ServiceDate" , $ServiceDate);
        $stmt->bindParam(":ServiceTime" , $ServiceTime);
        $stmt->bindParam(":EmployeeID" , $EmployeeID);
        $stmt->bindParam(":TenantID" , $TenantID);



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