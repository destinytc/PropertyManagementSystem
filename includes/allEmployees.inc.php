<?php

if ($_SERVER["REQUEST_METHOD"]=="POST"){
   

    try{
        require_once "dbh-inc.php";
        $query= "SELECT * FROM Employee;";

        $stmt = $pdo->prepare($query);

      

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
<link rel = "stylesheet"  href="../pagesStyle.css" />
</head>


<body>

<h3>Employee List: </h3>

    <?php
        if(empty($result)){
            echo "No Results";
            echo "<br>";
        }

            echo "<br>";
            echo '<table>
                <tr>
                    <th>First Name </th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Position</th>
                    
                </tr>' ;
          
            foreach($result as $row):?>
              <tr>
        <td><?= htmlspecialchars($row['EmployeeFirstName']) ?></td>
        <td><?= htmlspecialchars($row['EmployeeLastName']) ?></td>
        <td><?= htmlspecialchars($row['EmployeeEmail']) ?></td>
        <td><?= htmlspecialchars($row['EmployeePhoneNumber']) ?></td>
        <td><?= htmlspecialchars($row['EmployeeType']) ?></td>
    
         </tr>
        
         <?php endforeach ?>
         <?php echo "</table>";?>
        


</body>





</html>
