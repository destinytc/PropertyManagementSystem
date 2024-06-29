<?php

if ($_SERVER["REQUEST_METHOD"]=="POST"){
   

    try{
        require_once "dbh-inc.php";
        $query= "SELECT * FROM Tenant;";

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

<h3>Tenant List: </h3>

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
                  
                    
                </tr>' ;
          
            foreach($result as $row):?>
              <tr>
        <td><?= htmlspecialchars($row['TenantFirstName']) ?></td>
        <td><?= htmlspecialchars($row['TenantLastName']) ?></td>
        <td><?= htmlspecialchars($row['TenantEmail']) ?></td>
        <td><?= htmlspecialchars($row['TenantPhoneNumber']) ?></td>
       
         </tr>
        
         <?php endforeach ?>
         <?php echo "</table>";?>
        


</body>





</html>
