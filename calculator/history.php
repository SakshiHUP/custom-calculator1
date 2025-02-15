<?php
$historyFile = "history.txt";
if (file_exists($historyFile)) {
    echo nl2br(file_get_contents($historyFile));
} else {
    echo "No history available.";
}
?>
