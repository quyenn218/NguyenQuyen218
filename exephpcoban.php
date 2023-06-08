<?php
echo "Viết chương trình PHP để kiểm tra xem một số có phải là số chẵn hay không.". "<br/>";
function isEven($number)
{
    return $number % 2 === 0;
}

$number = 6;
$result = isEven($number);

if ($result) {
    echo "$number là số chẵn"."<br/>";
} else {
    echo "$number không là số chẵn"."<br/>";
}

echo "Viết chương trình PHP để tính tổng của các số từ 1 đến n."."<br/>";
function calculateSum($n)
{
    $sum = 0;
    for ($i = 1; $i <= $n; $i++) {
        $sum += $i;
    }
    return $sum;
}

$n = 10;
$result = calculateSum($n);

echo "Tổng của các số từ 1 đến $n là: $result"."<br/>";


echo "Viết chương trình PHP để in ra bảng cửu chương từ 1 đến 10."."<br/>";
function printMultiplicationTable($start, $end)
{
    for ($i = $start; $i <= $end; $i++) {
        echo "Bảng cửu chương của $i:"."<br/>";
        for ($j = 1; $j <= 10; $j++) {
            $result = $i * $j;
            echo "$i x $j = $result"."<br/>";
        }
        echo "<br/>";
    }
}

$start = 1;
$end = 10;
printMultiplicationTable($start, $end);


echo "Viết chương trình PHP để kiểm tra xem một chuỗi có chứa một từ cụ thể hay không."."<br/>";
function containsWord($string, $word)
{
    $pattern = "/\b" . preg_quote($word) . "\b/i";
    return preg_match($pattern, $string) === 1;
}

$string = "This is a sample string.";
$word = "sample";
$result = containsWord($string, $word);

if ($result) {
    echo "Chuỗi '$string' chứa từ '$word'"."<br/>";
} else {
    echo "Chuỗi '$string' không chứa từ '$word'"."<br/>";
}


echo "Viết chương trình PHP để tìm giá trị lớn nhất và nhỏ nhất trong một mảng."."<br/>";
function findMinMax($array)
{
    $min = $array[0];
    $max = $array[0];

    foreach ($array as $value) {
        if ($value < $min) {
            $min = $value;
        }

        if ($value > $max) {
            $max = $value;
        }
    }

    return [
        'min' => $min,
        'max' => $max
    ];
}

$array = [5, 10, 3, 8, 1];
$result = findMinMax($array);

echo "Giá trị nhỏ nhất trong mảng là: " . $result['min'] ."<br/>";
echo "Giá trị lớn nhất trong mảng là: " . $result['max'] ."<br/>";


echo "Viết chương trình PHP để sắp xếp một mảng theo thứ tự tăng dần."."<br/>";
function sortArray($array)
{
    $length = count($array);

    for ($i = 0; $i < $length - 1; $i++) {
        for ($j = $i + 1; $j < $length; $j++) {
            if ($array[$i] > $array[$j]) {
                $temp = $array[$i];
                $array[$i] = $array[$j];
                $array[$j] = $temp;
            }
        }
    }

    return $array;
}

$array = [5, 10, 3, 8, 1];
$sortedArray = sortArray($array);

echo "Mảng sau khi sắp xếp: "."<br/>";
foreach ($sortedArray as $value) {
    echo $value . " ";
}
echo "<br/>";

echo "Viết chương trình PHP để tính giai thừa của một số nguyên dương."."<br/>";
function factorial($n)
{
    if ($n === 0 || $n === 1) {
        return 1;
    }

    $result = 1;

    for ($i = 2; $i <= $n; $i++) {
        $result *= $i;
    }

    return $result;
}

$n = 5;
$factorial = factorial($n);

echo "Giai thừa của số $n là: $factorial"."<br/>";



echo "Viết chương trình PHP để tìm số nguyên tố trong một khoảng cho trước."."<br/>";
function isPrime($number)
{
    if ($number <= 1) {
        return false;
    }

    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }

    return true;
}

function findPrimes($start, $end)
{
    $primes = [];

    for ($number = $start; $number <= $end; $number++) {
        if (isPrime($number)) {
            $primes[] = $number;
        }
    }

    return $primes;
}

$start = 1;
$end = 50;
$primeNumbers = findPrimes($start, $end);

echo "Các số nguyên tố trong khoảng từ $start đến $end là: ";
foreach ($primeNumbers as $prime) {
    echo $prime . " ";
}
echo "<br/>";

echo "Viết chương trình PHP để tính tổng của các số trong một mảng."."<br/>";
function calculateSumArray($array)
{
    $sum = 0;

    foreach ($array as $number) {
        $sum += $number;
    }

    return $sum;
}

$numbers = [1, 2, 3, 4, 5];
$total = calculateSumArray($numbers);

echo "Tổng của các số trong mảng là: $total"."<br/>";


echo "Viết chương trình PHP để in ra các số Fibonacci trong một khoảng cho trước."."<br/>";
function generateFibonacci($n)
{
    $fibonacci = [];

    $fibonacci[0] = 0;
    $fibonacci[1] = 1;

    for ($i = 2; $i <= $n; $i++) {
        $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }

    return $fibonacci;
}

$start = 0;
$end = 10;
$fibonacciNumbers = generateFibonacci($end);

echo "Các số Fibonacci trong khoảng từ $start đến $end là: "."<br/>"   ;
foreach ($fibonacciNumbers as $number) {
    if ($number > $end) {
        break;
    }
    echo $number . " ";
}
echo "<br/>";
echo "Viết chương trình PHP để kiểm tra xem một số có phải là số Armstrong hay không."."<br/>";
function isArmstrongNumber($number)
{
    $sum = 0;
    $temp = $number;

    while ($temp != 0) {
        $digit = $temp % 10;
        $sum += $digit ** 3;
        $temp = (int)($temp / 10);
    }

    if ($number == $sum) {
        return true;
    } else {
        return false;
    }
}

$number = 153;

if (isArmstrongNumber($number)) {
    echo "$number là số Armstrong";
} else {
    echo "$number không là số Armstrong";
}
echo "<br/>";

echo "Viết chương trình PHP để chèn một phần tử vào một mảng ở vị trí bất kỳ."."<br/>";
function insertElement($array, $element, $position)
{
    $result = [];

    for ($i = 0; $i < count($array); $i++) {
        if ($i === $position) {
            $result[] = $element;
        }

        $result[] = $array[$i];
    }

    return $result;
}

$array = [1, 2, 3, 4, 5];
$element = "new element";
$position = 2;

$newArray = insertElement($array, $element, $position);

echo "Mảng mới sau khi chèn phần tử: "."<br/>";
print_r($newArray);
echo "<br/>";


echo "Viết chương trình PHP để loại bỏ các phần tử trùng lặp trong một mảng."."<br/>";
function removeDuplicates($array)
{
    $result = array();

    foreach ($array as $element) {
        if (!in_array($element, $result)) {
            $result[] = $element;
        }
    }

    return $result;
}

$array = array(1, 2, 3, 4, 2, 3, 5, 6, 4);

$uniqueArray = removeDuplicates($array);

echo "Mảng ban đầu: "."<br/>";
print_r($array);
echo "<br/>";

echo "Mảng sau khi loại bỏ phần tử trùng lặp: "."<br/>";
print_r($uniqueArray);
echo "<br/>";

echo "Viết chương trình PHP để tìm vị trí của một phần tử trong một mảng."."<br/>";
function findElementPosition($array, $element)
{
    $positions = array();

    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] === $element) {
            $positions[] = $i;
        }
    }

    return $positions;
}

$array = array(1, 2, 3, 4, 2, 3, 5, 6, 4);
$element = 2;

$elementPositions = findElementPosition($array, $element);

echo "Mảng: "."<br/>";
print_r($array);
echo "<br/>";
echo "Phần tử: $element"."<br/>";

if (count($elementPositions) > 0) {
    echo "Vị trí của phần tử: " . implode(", ", $elementPositions)."<br/>";
} else {
    echo "Phần tử không tồn tại trong mảng."."<br/>";
}


echo "Viết chương trình PHP để đảo ngược một chuỗi."."<br/>";
function reverseString($string)
{
    $reversedString = '';

    for ($i = strlen($string) - 1; $i >= 0; $i--) {
        $reversedString .= $string[$i];
    }

    return $reversedString;
}

$string = 'Hello, world!';

$reversedString = reverseString($string);

echo "Chuỗi ban đầu: $string"."<br/>";
echo "Chuỗi đảo ngược: $reversedString"."<br/>";


echo "Viết chương trình PHP để tính số lượng phần tử trong một mảng."."<br/>";
function countElements($array)
{
    $count = 0;

    foreach ($array as $element) {
        $count++;
    }

    return $count;
}

$array = array(1, 2, 3, 4, 5);

$elementCount = countElements($array);

echo "Số lượng phần tử trong mảng: $elementCount"."<br/>";


echo "Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi Palindrome hay không."."<br/>";
function isPalindrome($string)
{
    // Loại bỏ khoảng trắng và chuyển đổi thành chữ thường
    $string = strtolower(str_replace(' ', '', $string));

    // Đảo ngược chuỗi
    $reversedString = strrev($string);

    // So sánh chuỗi ban đầu và chuỗi đảo ngược
    if ($string === $reversedString) {
        return true;
    } else {
        return false;
    }
}

$string = 'Madam';

if (isPalindrome($string)) {
    echo "$string là chuỗi Palindrome";
} else {
    echo "$string không là chuỗi Palindrome";
}
echo "<br/>";

echo "Viết chương trình PHP để đếm số lần xuất hiện của một phần tử trong một mảng."."<br/>";
function countOccurrences($array, $element)
{
    $count = 0;

    foreach ($array as $value) {
        if ($value === $element) {
            $count++;
        }
    }

    return $count;
}

$array = array(1, 2, 3, 2, 4, 2, 5);
$element = 2;

$occurrences = countOccurrences($array, $element);

echo "Số lần xuất hiện của phần tử $element trong mảng: $occurrences"."<br/>";


echo "Viết chương trình PHP để sắp xếp một mảng theo thứ tự giảm dần."."<br/>";
function sortDescending($array)
{
    $length = count($array);

    for ($i = 0; $i < $length - 1; $i++) {
        for ($j = $i + 1; $j < $length; $j++) {
            if ($array[$i] < $array[$j]) {
                $temp = $array[$i];
                $array[$i] = $array[$j];
                $array[$j] = $temp;
            }
        }
    }

    return $array;
}

$array = array(5, 2, 8, 1, 9);

$sortedArray = sortDescending($array);

echo "Mảng sau khi sắp xếp theo thứ tự giảm dần: "."<br/>";
foreach ($sortedArray as $element) {
    echo $element . " ";
}
echo "<br/>";

echo "Viết chương trình PHP để thêm một phần tử vào đầu hoặc cuối của một mảng."."<br/>";
function addToEnd($array, $element)
{
    $array[] = $element;
    return $array;
}

$array = [1, 2, 3, 4];
$element = 5;

$newArray = addToEnd($array, $element);

print_r($newArray);
echo "<br/>";

echo "Viết chương trình PHP để tìm số lớn thứ hai trong một mảng."."<br/>";
function findSecondLargest($array)
{
    $max = $array[0];
    $secondMax = $array[0];

    for ($i = 1; $i < count($array); $i++) {
        if ($array[$i] > $max) {
            $secondMax = $max;
            $max = $array[$i];
        } elseif ($array[$i] > $secondMax && $array[$i] < $max) {
            $secondMax = $array[$i];
        }
    }

    return $secondMax;
}

$array = [5, 2, 8, 1, 9, 7];

$secondLargest = findSecondLargest($array);

echo "Số lớn thứ hai trong mảng là: " . $secondLargest;
echo "<br/>";

echo "Viết chương trình PHP để tìm ước số chung lớn nhất và bội số chung nhỏ nhất của hai số nguyên dương."."<br/>";
function findUSCLN($a, $b)
{
    while ($b != 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }

    return $a;
}

function findBSCNN($a, $b)
{
    $uscln = findUSCLN($a, $b);
    $bscnn = ($a * $b) / $uscln;

    return $bscnn;
}

$num1 = 24;
$num2 = 36;

$uscln = findUSCLN($num1, $num2);
$bscnn = findBSCNN($num1, $num2);

echo "Ước số chung lớn nhất của $num1 và $num2 là: " . $uscln . "<br>";
echo "Bội số chung nhỏ nhất của $num1 và $num2 là: " . $bscnn ."<br/>";


echo "Viết chương trình PHP để kiểm tra xem một số có phải là số hoàn hảo hay không."."<br/>";
function isPerfectNumber($number)
{
    if ($number <= 0) {
        return false;
    }

    $sum = 0;

    for ($i = 1; $i <= $number / 2; $i++) {
        if ($number % $i == 0) {
            $sum += $i;
        }
    }

    if ($sum == $number) {
        return true;
    } else {
        return false;
    }
}

$number = 28;

if (isPerfectNumber($number)) {
    echo "$number là số hoàn hảo";
} else {
    echo "$number không là số hoàn hảo";
}
echo "<br/>";

echo "Viết chương trình PHP để tìm số lẻ lớn nhất trong một mảng."."<br/>";
function findLargestOdd($array)
{
    $largestOdd = null;

    foreach ($array as $number) {
        if ($number % 2 != 0) { // Kiểm tra số lẻ
            if ($largestOdd === null || $number > $largestOdd) {
                $largestOdd = $number;
            }
        }
    }

    return $largestOdd;
}

$numbers = [2, 5, 8, 13, 10, 7, 6, 9];

$largestOdd = findLargestOdd($numbers);

if ($largestOdd !== null) {
    echo "Số lẻ lớn nhất trong mảng là: " . $largestOdd;
} else {
    echo "Không có số lẻ trong mảng";
}
echo "<br/>";

echo "Viết chương trình PHP để kiểm tra xem một số có phải là số nguyên tố hay không."."<br/>";
function isPrimeNumber($number)
{
    if ($number <= 1) {
        return false;
    }

    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }

    return true;
}

$number = 17;

if (isPrimeNumber($number)) {
    echo "$number là số nguyên tố";
} else {
    echo "$number không là số nguyên tố";
}
echo "<br/>";

echo "Viết chương trình PHP để tìm số dương lớn nhất trong một mảng."."<br/>";
function findLargestPositive($array)
{
    $largestPositive = null;

    foreach ($array as $number) {
        if ($number > 0) { // Kiểm tra số dương
            if ($largestPositive === null || $number > $largestPositive) {
                $largestPositive = $number;
            }
        }
    }

    return $largestPositive;
}

$numbers = [-5, 10, -3, 15, 0, 8, 7];

$largestPositive = findLargestPositive($numbers);

if ($largestPositive !== null) {
    echo "Số dương lớn nhất trong mảng là: " . $largestPositive;
} else {
    echo "Không có số dương trong mảng";
}
echo "<br/>";

echo "Viết chương trình PHP để tìm số âm lớn nhất trong một mảng."."<br/>";
function findLargestNegative($array)
{
    $largestNegative = null;

    foreach ($array as $number) {
        if ($number < 0) { // Kiểm tra số âm
            if ($largestNegative === null || $number > $largestNegative) {
                $largestNegative = $number;
            }
        }
    }

    return $largestNegative;
}

$numbers = [-5, 10, -3, 15, 0, -8, -7];

$largestNegative = findLargestNegative($numbers);

if ($largestNegative !== null) {
    echo "Số âm lớn nhất trong mảng là: " . $largestNegative;
} else {
    echo "Không có số âm trong mảng";
}
echo "<br/>";

echo "Viết chương trình PHP để tính tổng các số lẻ từ 1 đến n.". "<br/>";
function sumOfOddNumbers($n)
{
    $sum = 0;

    for ($i = 1; $i <= $n; $i++) {
        if ($i % 2 != 0) { // Kiểm tra số lẻ
            $sum += $i;
        }
    }

    return $sum;
}

$n = 10;
$sum = sumOfOddNumbers($n);

echo "Tổng các số lẻ từ 1 đến $n là: " . $sum;
echo "<br/>";

echo "Viết chương trình PHP để tìm số chính phương trong một khoảng cho trước.". "<br/>";
function findPerfectSquares($start, $end)
{
    $result = [];

    for ($i = $start; $i <= $end; $i++) {
        if (isPerfectSquare($i)) {
            $result[] = $i;
        }
    }

    return $result;
}

function isPerfectSquare($number)
{
    $sqrt = sqrt($number);

    return ($sqrt * $sqrt == $number);
}

$start = 1;
$end = 100;
$squares = findPerfectSquares($start, $end);

echo "Các số chính phương trong khoảng từ $start đến $end là: ";
foreach ($squares as $square) {
    echo $square . " ";
}
echo "<br/>";

echo "Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi con của một chuỗi khác hay không.". "<br/>";
function isSubstring($string, $substring)
{
    $stringLength = strlen($string);
    $substringLength = strlen($substring);

    // Duyệt qua các vị trí trong chuỗi
    for ($i = 0; $i <= $stringLength - $substringLength; $i++) {
        $j = 0;
        // Kiểm tra từng ký tự trong chuỗi con
        while ($j < $substringLength && $string[$i + $j] === $substring[$j]) {
            $j++;
        }
        // Nếu tất cả các ký tự trong chuỗi con khớp với chuỗi ban đầu, trả về true
        if ($j === $substringLength) {
            return true;
        }
    }

    // Nếu không tìm thấy chuỗi con, trả về false
    return false;
}

$string = "Hello, world!";
$substring = "world";
$isSubstring = isSubstring($string, $substring);

if ($isSubstring) {
    echo "Chuỗi \"$substring\" là chuỗi con của chuỗi \"$string\"";
} else {
    echo "Chuỗi \"$substring\" không là chuỗi con của chuỗi \"$string\"";
}

?>