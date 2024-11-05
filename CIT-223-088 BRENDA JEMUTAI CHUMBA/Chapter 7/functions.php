<?php
function createHtmlTable($var1, $var2, $var3, $var4) {
    $table = "<table border='1'>";
    $table .= "<tr>";
    $table .= "<td>$var1</td>";
    $table .= "<td>$var2</td>";
    $table .= "<td>$var3</td>";
    $table .= "<td>$var4</td>";
    $table .= "</tr>";
    $table .= "</table>";
    
    return $table;
}

// Example usage
$htmlTable = createHtmlTable("Apple", "Banana", "Cherry", "Date");
echo $htmlTable;
?>
