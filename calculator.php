<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $expression = $_POST["expression"];
    
    // Basic security: Remove unwanted characters
    $expression = preg_replace("/[^0-9+\-*/().]/", "", $expression);
    
    // Evaluate expression safely
    try {
        $result = eval("return ($expression);");
        
        // Save to history
        $historyFile = "history.txt";
        $historyEntry = $expression . " = " . $result . "\n";
        file_put_contents($historyFile, $historyEntry, FILE_APPEND);
        
        echo $result;
    } catch (Exception $e) {
        echo "Error";
    }
}
?>
