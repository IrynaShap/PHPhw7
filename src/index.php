<?php
$numbers = [];
for ($i = 0; $i < 10; $i++) {
	$numbers[] = rand(1, 100);
}

sort($numbers);

$min = $numbers[0];
$max = $numbers[count($numbers) - 1];

echo "Найменший елемент: $min\n";
echo "Найбільший елемент: $max\n";

echo "Відсортований масив: \n";
print_r($numbers);