<?php

if ($_SERVER["REQUEST_METHOD"]=="POST"){
   

    try{
        require_once "dbh-inc.php";
        $query= "SELECT * FROM ServiceRequest;";

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

<h3>Service List: </h3>

    <?php
        if(empty($result)){
            echo "No Results";
            echo "<br>";
        }

            echo "<br>";
            echo '<table>
                <tr>
                    <th>Tenant </th>
                    <th>Service Description</th>
                    <th>Request Date</th>
                    <th>Assigned Maintenance</th>
                    <th>Service Date</th>
                    <th>Service Time </th>
                    
                </tr>' ;
          
            foreach($result as $row):?>
              <tr>
        <td><?= htmlspecialchars($row['TenantID']) ?></td>
        <td><?= htmlspecialchars($row['ServiceDescription']) ?></td>
        <td><?= htmlspecialchars($row['RequestDate']) ?></td>
        <td><?= htmlspecialchars($row['EmployeeID']) ?></td>
        <td><?= htmlspecialchars($row['ServiceDate']) ?></td>
        <td><?= htmlspecialchars($row['ServiceTime']) ?></td>
    
    
         </tr>
        
         <?php endforeach ?>
         <?php echo "</table>";?>
        


</body>





</html>