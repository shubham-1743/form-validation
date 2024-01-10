<?php
function printDiamond($n) {
    // Upper part of the diamond
    for ($i = 1; $i <= $n; $i++) {
        // Print spaces
        for ($j = 1; $j <= $n - $i; $j++) {
            echo "&nbsp;"; // You can also use spaces instead of &nbsp; for HTML output
        }
        
        // Print stars
        for ($j = 1; $j <= 2 * $i - 1; $j++) {
            echo "*";
        }
        
        echo "<br>"; // Move to the next line
    }
    
    // Lower part of the diamond
    for ($i = $n - 1; $i >= 1; $i--) {
        // Print spaces
        for ($j = 1; $j <= $n - $i; $j++) {
            echo "&nbsp;"; // You can also use spaces instead of &nbsp; for HTML output
        }
        
        // Print stars
        for ($j = 1; $j <= 2 * $i - 1; $j++) {
            echo "*";
        }
        
        echo "<br>"; // Move to the next line
    }
}

// Call the function and specify the number of rows for the diamond
printDiamond(6); // You can change the number to adjust the size of the diamond
?>
