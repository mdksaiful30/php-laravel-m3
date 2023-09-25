<?php
function generatePassword($length) {
// Define the character sets for different types of characters
$lowercaseChars = 'abcdefghijklmnopqrstuvwxyz';
$uppercaseChars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
$numberChars = '0123456789';
$specialChars = '!@#$%^&*()_+';

// Combine all character sets
$allChars = $lowercaseChars . $uppercaseChars . $numberChars . $specialChars;

// Initialize an empty password string
$password = '';

// Generate the password
for ($i = 0; $i < $length; $i++) {
// Randomly select a character from the combined character set
$randomChar = $allChars[rand(0, strlen($allChars) - 1)];

// Append the randomly selected character to the password
$password .= $randomChar;
}

return $password;
}

// Generate a password with a length of 12 characters
$password = generatePassword(12);

// Print the generated password
echo "Generated Password: $password";
?>


