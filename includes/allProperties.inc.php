<?php

if ($_SERVER["REQUEST_METHOD"]=="POST"){
   // $allEmployees = $_POST["usersearch"];
  

    try{
        require_once "dbh-inc.php";
        $query= "SELECT * FROM Property;";

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
<link rel = "stylesheet"  href="../pagesStyle.css" />
</head>


<body>

<h3>Property List: </h3>

    <?php
        if(empty($result)){
            echo "No Results";
            echo "<br>";
        }

            echo "<br>";
            echo '<table>
                <tr>
                    <th>Street </th>
                    <th>City</th>
                    <th>State</th>
                    <th>Zip</th>
                    <th>Bedrooms</th>
                    <th>Bathrooms </th>
                    <th>Square Ft. </th>
                    <th>Vacant? </th>
                </tr>' ;
          
            foreach($result as $row):?>
              <tr>
        <td><?= htmlspecialchars($row['PropertyStreet']) ?></td>
        <td><?= htmlspecialchars($row['PropertyCity']) ?></td>
        <td><?= htmlspecialchars($row['PropertyState']) ?></td>
        <td><?= htmlspecialchars($row['PropertyZip']) ?></td>
        <td><?= htmlspecialchars($row['NumberOfBedrooms']) ?></td>
        <td><?= htmlspecialchars($row['NumberOfBathrooms']) ?></td>
        <td><?= htmlspecialchars($row['SquareFt']) ?></td>
        <td><?= htmlspecialchars($row['Vacancy']) ?></td>
         </tr>
        
         <?php endforeach ?>
         <?php echo "</table>";?>
        


</body>





</html>
