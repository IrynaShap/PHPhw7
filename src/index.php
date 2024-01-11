<?php
function getArrayOfRandomNumbers(int $arrayLen): array
{
	$numbers = [];
	for ($i = 0; $i < $arrayLen; $i++) {
		$numbers[] = rand(1, 100);
	}
	return $numbers;
}

$numbers = getArrayOfRandomNumbers(10);

echo "Найменший елемент: " . min($numbers) . "\n";
echo "Найбільший елемент: " . max($numbers) . "\n";

sort($numbers);


echo "Відсортований масив: \n";
print_r($numbers);