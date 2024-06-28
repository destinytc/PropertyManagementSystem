<?php

if ($_SERVER["REQUEST_METHOD"]=="POST"){
   // $allEmployees = $_POST["usersearch"];
  

    try{
        require_once "dbh-inc.php";
        $query= "SELECT * FROM Employee;";

        $stmt = $pdo->prepare($query);

      //  $stmt->bindParam(":usersearch",$userSearch);
        

        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $pdo =null;
        $stmt=null;


        

    }catch(PDOException $e){
        die("Query failed: " . $e->getMessage());
    }
}else{
    header("Location: index.php");

}

?>

<!DOCTYPE html>
<html lang ="en">

<html>
<head>
    
</head>


<body>

<h3>Search Results: </h3>

    <?php
        if(empty($result)){
            echo "No Results";
            echo "<br>";
        }else{
            echo "<br>";
           // var_dump($result); print all comments in array formate
            foreach($result as $row){
                //sanitize data using htmlspecialchars when outputing data
                echo  htmlspecialchars($row["EmployeeFirstName"]);
                echo htmlspecialchars("  " .$row["EmployeeLastName"]);
                echo htmlspecialchars("  " .$row["EmployeeEmail"]);
                echo "<br>";
            }

        }

    ?>

    



</body>





</html>