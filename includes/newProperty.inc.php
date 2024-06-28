<?php


if($_SERVER["REQUEST_METHOD"] == "POST"){

    $PropertyStreet= $_POST["street"];
    $PropertyCity = $_POST["city"];
    $PropertyState = $_POST["state"];
    $PropertyZip = $_POST["zip"];
    $NumberOfBedrooms = $_POST["bedrooms"];
    $NumberOfBathrooms = $_POST["bathrooms"];
    $SquareFt = $_POST["squareFt"];
    $Vacancy = $_POST["vacancy"];
    $EmployeeID =$_POST["manager"];


    try{

        require_once "dbh-inc.php";

        $query = "INSERT INTO Property (PropertyStreet, PropertyCity, PropertyState,
        PropertyZip, NumberOfBedrooms, NumberOfBathrooms, SquareFt, Vacancy, EmployeeID) VALUES  
        (:PropertyStreet, :PropertyCity, :PropertyState,
        :PropertyZip, :NumberOfBedrooms, :NumberOfBathrooms, :SquareFt, :Vacancy, :EmployeeID);";


        $stmt = $pdo->prepare($query);

        $stmt->bindParam(":PropertyStreet" , $PropertyStreet);
        $stmt->bindParam(":PropertyCity" , $PropertyCity);
        $stmt->bindParam(":PropertyState" , $PropertyState);
        $stmt->bindParam(":PropertyZip" , $PropertyZip);
        $stmt->bindParam(":NumberOfBedrooms" , $NumberOfBedrooms);
        $stmt->bindParam(":NumberOfBathrooms" , $NumberOfBathrooms);
        $stmt->bindParam(":SquareFt" , $SquareFt);
        $stmt->bindParam(":Vacancy" , $Vacancy);
        $stmt->bindParam(":EmployeeID" , $EmployeeID);


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
