<?php
echo "hello world";
// ex 1

echo "<br>";
echo "<form method='post'>";
echo "<lable>year: </lable>";
echo "<input type='text' name='year'>";
echo "<button type='submit'>submit</button>";
echo "</form>";

$year = $_POST["year"];
// echo "Server Name: " . $_SERVER['SERVER_NAME'];
if ($year % 4 ==0 && $year % 100 != 0 || $year % 400 == 0)
{
	echo "<br> its a leap year";
}
else
{
	echo "<br>its not a leap year";
}

// ex2
echo "<br>";
echo "<form method='post'>";
echo "<lable>tempreture: </lable>";
echo "<input type='text' name='weather'>";
echo "<button type='submit'>submit</button>";
echo "</form>";


$weather = $_POST["weather"];
if ($weather <=20)
	{
		echo "<br>It is wintertime!";
	}
	else{
		echo "<br>It is summertime!";
	}

// ex3

echo "<br>";
echo "<form method='post'>";
echo "<lable>number1: </lable>";
echo "<input type='text' name='num1'>";
echo "<lable>number2: </lable>";
echo "<input type='text' name='num2'>";
echo "<button type='submit'>submit</button>";
echo "</form>";

$num1=$_POST["num1"];
$num2=$_POST["num2"];
$sum=0;
if ($num1 == $num2)
{
	$sum = ($num1+$num2) * 3;
}
else{
	$sum = $num1+$num2;
}
echo "$sum";

// ex4

echo "<br>";
echo "<form method='post'>";
echo "<lable>number1: </lable>";
echo "<input type='text' name='n1'>";
echo "<lable>number2: </lable>";
echo "<input type='text' name='n2'>";
echo "<button type='submit'>submit</button>";
echo "</form>";

$n1=$_POST["n1"];
$n2=$_POST["n2"];
// $sum=0;
if ($n1 + $n2 == 30)
{
	$sum = $n1+$n2;
	echo "$sum";
}
else{
	// $sum = $n1+$n2;
	echo 'false';
}
// echo "$sum"

// ex5

echo "<br>";
echo "<form method='post'>";
echo "<lable>number: </lable>";
echo "<input type='text' name='number'>";
echo "<button type='submit'>submit</button>";
echo "</form>";

$number=$_POST["number"];
// $sum=0;
if ($number % 3 == 0)
{
	// $sum = $number+$n2;
	echo "true";
}
else{
	// $sum = $n1+$n2;
	echo "false";
}
// echo "$sum"

// ex6

echo "<br>";
echo "<form method='post'>";
echo "<lable>number: </lable>";
echo "<input type='text' name='value'>";
echo "<button type='submit'>submit</button>";
echo "</form>";

$value=$_POST["value"];
// $sum=0;
if ($value >=20 && $value <= 50)
{
	// $sum = $number+$n2;
	echo "true";
}
else{
	// $sum = $n1+$n2;
	echo "false";
}
// echo "$sum"

// ex7
echo "<br>";
echo "<form method='post'>";
echo "<lable>number1: </lable>";
echo "<input type='text' name='nums1'>";
echo "<lable>number2: </lable>";
echo "<input type='text' name='nums2'>";
echo "<lable>number3: </lable>";
echo "<input type='text' name='nums3'>";
echo "<button type='submit'>submit</button>";
echo "</form>";

$nums1=$_POST["nums1"];
$nums2=$_POST["nums2"];
$nums3=$_POST["nums3"];

if ($nums1 > $nums2 && $nums1 > $nums3)
	{
		echo "$nums1";
	}
	else if ($nums2 > $nums1 && $nums2 > $nums3)
	{
		echo "$nums2";
	}
	else
		{
		echo "$nums3";
		}

// ex8

echo "<br>";
echo "<form method='post'>";
echo "<lable>units: </lable>";
echo "<input type='text' name='units'>";
echo "<button type='submit'>submit</button>";
echo "</form>";

$units=$_POST["units"];

$total=0;
if ($units <= 50)
	{
		$total += $units*2.50;
	}
	else if ($units > 50 && $units <=150)
		{
			$total += 50*2.50;
			$total += ($units - 50) * 5;
		}
		else if ($units > 150 && $units <=250)
			{
				$total += 50*2.50;
				$total += 100 * 5;
				$total += ($units - 150) * 6.20;
			}
			else
				{
					$total += 50*2.50;
					$total += 100 * 5;
					$total += 100 * 6.20;
					$total += ($units - 250) * 7.50;
				}
				echo "$total";

/*
a. For first 50 units – 2.50 JOD/Unit 
b. For next 100 units – 5.00 JOD/Unit 
c. For next 100 units – 6.20 JOD/Unit 
d. For units above 250 – 7.50 JOD/Unit 
*/

// ex9

echo "<br>";
echo "<form method='post'>";
echo "<lable>number1: </lable>";
echo "<input type='text' name='nums1'>";
echo "<lable>operation: </lable>";
echo "<input type='text' name='opp'>";
echo "<lable>number3: </lable>";
echo "<input type='text' name='nums3'>";
echo "<button type='submit'>submit</button>";
echo "</form>";

$nums1=$_POST["nums1"];
$opp=$_POST["opp"];
$nums3=$_POST["nums3"];
$res = 0;
if ($opp == "+")
	{
		$res = $nums1 + $nums2;
	}
	else if ($opp == "*")
	{
		$res = $nums1 * $nums2;
	}
	else if ($opp == "/")
	{
		$res = $nums1 / $nums2;
	}
	else if ($opp == "-")
	{
		$res = $nums1 - $nums2;
	}
	echo "$res";

// ex10

echo "<br>";
echo "<form method='post'>";
echo "<lable>age: </lable>";
echo "<input type='text' name='age'>";
echo "<button type='submit'>submit</button>";
echo "</form>";

$age=$_POST["age"];

if ($age>=18)
	{
		echo "is eligible to vote";
	}
	else{
		echo "is no eligible to vote";
	}


// ex11
echo "<br>";
echo "<form method='post'>";
echo "<lable>check_num: </lable>";
echo "<input type='text' name='check_num'>";
echo "<button type='submit'>submit</button>";
echo "</form>";

$check_num=$_POST["check_num"];

if ($check_num == 0)
	{
		echo "zero";
	}
	else if ($check_num <0)
		{
			echo "the numebr is negative";
		}
		else 
			{
				echo "the numebr is positive";
			}


// ex12
$array = [20 , 1 , 22, 44, 27];

$sum_array = array_sum($array);

$count = count($array);

$avg = $sum_array / $count;
echo"<br>this is the students avarage:";
echo "$avg";

// arrays
// ex1

$colors = array('white', 'green', 'red');

echo "<p>The memory of that scene for me is like a frame of film forever frozen at that 
moment: the $colors[2] carpet, the $colors[1] lawn, the $colors[0] house, the leaden sky. The new 
president and his first lady. - Richard M. Nixon</p>";

// ex2
echo "<ul>";
echo "<li>$colors[1]</li>";
echo "<li>$colors[2]</li>";
echo "<li>$colors[0]</li>";
echo "</ul>";

// ex3
$cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> 
"Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => 
"Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", 
"Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", 
"Portugal"=>"Lisbon", "Spain"=>"Madrid" );

asort($cities, SORT_NATURAL | SORT_FLAG_CASE);

foreach ($cities as $key => $value) {
	echo "The capital of $key is $value<br>";
}

// echo "The capital of $cities[0] is Amsterdam ";

// ex4
$color = array (4 => 'white', 6 => 'green', 11=> 'red'); 

// echo "$color[0]";

echo $color ['4'];

// ex5

$array = [1, 2, 3, 4, 5];

$location = 3;

$newItem = '$';

array_splice($array, $location, 0, $newItem);

echo "<br>";

echo implode(' ', $array);
echo "<br>";

// ex6

$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
asort($fruits, SORT_NATURAL | SORT_FLAG_CASE);

foreach ($fruits as $key => $value) {
	echo "$key = $value<br>";
}

// ex7

$temp = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72,
65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];

$temp_sum = array_sum($temp);

$count_temp = count($temp);

$avg_temp = $temp_sum / $count_temp;
echo"<br>this is the tempreture avarage:";
echo "$avg_temp";

sort($temp);

$min_five = array_slice($temp, 0, 5);

echo "<br>the min 5 numbers :". implode(', ', $min_five);;

rsort($temp);
$max_five = array_slice($temp, 0, 5);
echo "<br>the max 5 numbers :". implode(', ', $max_five);;

// ex8

$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);

$array_merge = array_merge($array1,$array2);

// echo implode($array_merge);
echo "<br>";

foreach ($array_merge as $key => $value) {
	echo "$key = $value<br>";
}
echo "<br>";

// ex9
$colors = array("red","blue", "white","yellow");

foreach ($colors as $key => $value)
{
		$colors[$key] = strtoupper($value);
		// echo "$value<br>";
}

foreach ($colors as $key => $value)
{
		// $colors[$key] = strtoupper($value);
		echo "$value<br>";
}

// ex10
$colors_low = array("RED","BLUE", "WHITE","YELLOW");
foreach ($colors_low as $key => $value)
{
		$colors_low[$key] = strtolower($value);
		// echo "$value<br>";
}

foreach ($colors_low as $key => $value)
{
		// $colors_low[$key] = strtoupper($value);
		echo "$value<br>";
}


// $i = 200;

// ex11


$arr=[];

for ($i = 200;$i<=250;$i++)
	{
		if ($i % 4 == 0)
			{
				$arr[]=$i;
			}
	}
	echo implode(', ', $arr);

// ex12

$words = array("abcd","abc","de","hjjj","g","wer");

$lengths = array_map('strlen', $words);

$shortest = min($lengths);
$longest = max($lengths);
echo "<br>";

echo "The shortest array length is $shortest. The longest array length is $longest";
echo "<br>";

// ex13
$nu1 = 11;
$nu2 = 20;

$numb = range($nu1, $nu2);

shuffle($numb);

echo implode(' ', $numb);

echo "<br>";

// ex14
$arr1 = array( 2, 0, 10, 12, 6);

sort($arr1);

// echo implode(', ', $arr1)

foreach($arr1  as $key => $value)
	{
		if ($value >= 1)
			{
				$val = $value;
				break;
			}
	}
	echo "$val";
echo "<br>";

// loops
// ex1

for ($i=1;$i<=10;$i++)
	{
		echo"$i";
		if ($i != 10)
			echo "-";
	}
echo "<br>";


// ex2
$tot = 0;
for ($i=0;$i<=30;$i++)
	{
		$tot = $tot + $i;
	}
	echo "$tot";

echo "<br>";

// ex3
// $char = 64

// for ($i=0;$<=5;$i++)
// 	{
// 		for($j=0;$j<=5;$j++)
// 			{
// 				if ($i<5-1)

// 			}
// 	}

?>

