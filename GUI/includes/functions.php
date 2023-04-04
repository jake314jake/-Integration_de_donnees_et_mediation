<?php
function displayQueryResultAsTable($result) {
    echo "<table>";
    // Output table header
    echo "<tr>";
    for ($i = 0; $i < $result->columnCount(); $i++) {
      $columnMeta = $result->getColumnMeta($i);
      echo "<th>".$columnMeta['name']."</th>";
    }
    echo "</tr>";
    // Output table data
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
      echo "<tr>";
      foreach ($row as $cell) {
        echo "<td>".$cell."</td>";
      }
      echo "</tr>";
    }
    echo "</table>";
  }
  function insertToSrcThree($result,$connCaching){
    $rows = $result->fetchAll(PDO::FETCH_ASSOC);

    $insert_stmt = $connCaching->prepare("INSERT INTO table (NumEmp , Nom,Sal) VALUES (? , ? ,?)");
    
   
    foreach ($rows as $row) {
        $column1 = $row['NumEmp'];
        $column2 = $row['Nom'];
        $column3 = $row['Sal'];
        $insert_stmt->bindParam(1, $column1);
        $insert_stmt->bindParam(2, $column2);
        $insert_stmt->bindParam(3, $column3);
        $insert_stmt->execute();
    }
  }
?> 