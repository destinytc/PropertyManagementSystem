<?php


if($_SERVER["REQUEST_METHOD"] == "POST"){

    $LeaseStartDate= $_POST["leaseStart"];
    $LeaseEndDate = $_POST["leaseEnd"];
    $MonthlyAmount = $_POST["rent"];
    $TenantID = $_POST["lessee"];
    $PropertyID = $_POST["leaseProperty"];
   


    try{

        require_once "dbh-inc.php";

        $query = "INSERT INTO Lease (LeaseStartDate, LeaseEndDate, MonthlyAmount) 
        VALUES  (:LeaseStartDate, :LeaseEndDate, :MonthlyAmount, :TenantID, ;PropertyID);";


        $stmt = $pdo->prepare($query);

        $stmt->bindParam(":LeaseStartDate" , $LeaseStartDate);
        $stmt->bindParam(":LeaseEndDate" , $LeaseEndDate);
        $stmt->bindParam(":MonthlyAmount" , $MonthlyAmount);
        $stmt->bindParam(":TenantID" , $TenantID);
        $stmt->bindParam(":PropertyID" , $PropertyID);



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
