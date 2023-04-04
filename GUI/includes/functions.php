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
?>