<?php

function getInput($prompt) {
    echo $prompt;
    return trim(fgets(STDIN));
}

function calculate($num1, $operator, $num2) {
    switch ($operator) {
        case '+':
            return $num1 + $num2;
        case '-':
            return $num1 - $num2;
        case '*':
            return $num1 * $num2;
        case '/':
            if ($num2 == 0) {
                return "Error: Division by zero!";
            }
            return $num1 / $num2;
        default:
            return "Error: Invalid operator!";
    }
}

function runCalculator() {
    echo "\n=== Simple Calculator ===\n\n";
    
    // Get first number
    $num1 = getInput("Enter the first number: ");
    
    // Validate first number
    if (!is_numeric($num1)) {
        echo "Invalid input! Please enter a valid number.\n";
        return;
    }
    
    // Get operator
    $operator = getInput("Choose an operator (+, -, *, /): ");
    
    // Validate operator
    if (!in_array($operator, ['+', '-', '*', '/'])) {
        echo "Invalid operator! Please choose +, -, *, or /\n";
        return;
    }
    
    // Get second number
    $num2 = getInput("Enter the second number: ");
    
    // Validate second number
    if (!is_numeric($num2)) {
        echo "Invalid input! Please enter a valid number.\n";
        return;
    }
    
    // Calculate result
    $result = calculate($num1, $operator, $num2);
    
    // Display result
    echo "\nResult: $num1 $operator $num2 = $result\n\n";
}

// Main loop
do {
    runCalculator();
    $again = getInput("Do you want to perform another calculation? (y/n): ");
    $again = strtolower($again);
} while ($again === 'y' || $again === 'yes');

echo "\nThank you for using the calculator. Goodbye!\n";

?>