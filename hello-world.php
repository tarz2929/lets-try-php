This is before my PHP tag!


Note that these new-lines are real, and output in our response!

<?php // All PHP code must be inside the <?php tags!
// (Note: If we have an open tag, and reach the end of the file, we don't need to close it!)

// "Echo" and "print" are functions we can...
// use to output strings as a response.
echo "Hello, World!";

// There are two other styles of comment we can use in PHP. This (//) is single-line.

# This is also a single-line comment.

/* This is our
      (familiar)
          multi-line
  comment! */

// Variable names start with a dollar-sign ($).
// ***NOTE: They ARE case-sensitive.
// (Also, don't start them with numbers or special characters.)
$studentName = "\nFahad";
echo $studentName; // In "" we SEE an actual new-line!

$studentName2 = '\nDanish';
echo $studentName2; // In '' we see the literal \n string!

// Single quotes will NOT evalute special character escapes or
// variable values within the string.
echo '\n\n Two students in TECHCareers are:\n- $studentName\n- $studentName2.';

// Double quotes, WILL though! Careful which one you use for
// your current use-case!
echo "\n\nTwo students in TECHCareers are:\n$studentName\n$studentName2";

// The concatenation character in PHP is the period!
echo "\n\nThis string is being " . 'concatenated!';

// DATA-TYPES!

// Strings...
$string1 = 'I\'m a string!';
$string2 = "I'm ALSO a string!";

// Integers...
$int1 = -26;
$int2 = 0;
$int3 = 42;

// Floats / Doubles...
$float1 = 3.14;
$float2 = -29.6;

// Booleans...
$bool1 = TRUE; // Note... they are NOT case-sensitive!
$bool2 = false;

// Arrays...

// These are considered INDEXED arrays.
$array1 = [ 'First value', 17, 16.8, FALSE ]; // This syntax is identical in function to...
$array2 = array( 'First value', 17, 16.8, FALSE ); // this syntax!!!
echo $array1[1]; // outputs "17"

// There is also an ASSOCIATIVE array, where KEYS are defined as well!
// This is most comparable to a MAP in JS, or even a basic object.
$array3 = array(
  // Associative arrays have KEYS separated from VALUES by a fat arrow.
  'key'  => 'value',
  'name' => 'Hitesh',
  'age'  => 36
);
// echo $array3[1]; // Cannot find by index here!
echo $array3['name']; // Outputs "George".

//objects..

$object = new stdClass();
$object -> name = 'TECHCareers';
$object -> cohort = 4.2;
$object -> year = 2020;

echo "\n\n" . $object -> name. ' | ' . $object ->cohort . ' | ' . $object -> year ;


// Null..
$myNullVar = NULL; // this is CaSe InsenSitive.


//LOOPS!

for ( $iterator=0; $iterator < 10; $iterator +=1 )
{
    echo "\nOUR for loop is on ITERATIION: $iterator";
}

// Associative array
$students = [
    'Hitesh' => 'Cricket',
    'Ayesha' => 'Cooking',
    'Aaron' => 'Watching movies',
    'Tarun' => 'Cooking'
];

/// "foreach" lets us loop through a set list of
// values from an Array or Object!
// NOTE: We can grab an index/key AND the value by
//       using the fat arrow in our foreach!
//       ( ARRAY as KEY => VALUE )
// This is comparable to "for...of" and "for...in" from JS.

foreach( $students as $name => $hobby )
{
    echo "\n - HI, my name is $name! I like $hobby.";

}

// While Loop.

$i =12;
while ( $i > 2 )
{
    echo "\nWhile Iterator is at: $i";
    $i--; // This is the same as $i =$i -1;

}

// Function

function addition ( $num1, $num2 )
{
    return $num1 + $num2;
}

echo "\n Addition Result:" . addition(5, 10);
echo "\n Addition Result:" . addition("23", 10);
echo "\n Addition Result:" . addition("hey", 10);
echo "\n Addition Result:" . addition("-2", 10);
echo "\n Addition Result:" . addition("37trees5", 10);


