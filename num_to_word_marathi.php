<?php

error_reporting(1);

$num = 123418;

$num1 = '1,23,418';

echo "Input - " . $num1;
echo "<br> Output - ";
echo getNumIntoWord($num);

function getNumIntoWord($number) {

	$digits_length = strlen($number);
	$str = array();
	$words = [0 => '', 1 => 'एक', 2 => 'दोन', 3 => 'तीन', 4 => 'चार', 5 => 'पाच', 6 => 'सहा', 7 => 'सात', 8 => 'आठ', 9 => 'नऊ', 10 => 'दहा',
		11 => 'अकरा', 12 => 'बारा', 13 => 'तेरा', 14 => 'चौदा', 15 => 'पंधरा', 16 => 'सोळा', 17 => 'सतरा', 18 => 'अठरा', 19 => 'एकोणीस', 20 => 'वीस',
		21 => 'एकवीस', 22 => 'बावीस', 23 => 'तेवीस', 24 => 'चोवीस', 25 => 'पंचवीस', 26 => 'सव्वीस', 27 => 'सत्तावीस', 28 => 'अठ्ठावीस', 29 => 'एकोणतीस', 30 => 'तीस',
		31 => 'एकतीस', 32 => 'बत्तीस', 33 => 'तेहतीस', 34 => 'चौतीस', 35 => 'पस्तीस', 36 => 'छत्तीस', 37 => 'सदोतीस', 38 => 'अडतीस', 39 => 'एकोणचाळीस', 40 => 'चाळीस',
		41 => 'एक्केचाळीस', 42 => 'बेचाळीस', 43 => 'त्रेचाळीस', 44 => 'चव्वेचाळीस', 45 => 'पंचेचाळीस', 46 => 'शेहेचाळीस', 47 => 'सत्तेचाळीस', 48 => 'अठ्ठेचाळीस', 49 => 'एकोण पन्नास', 50 => 'पन्नास',
		51 => 'एकावन्न', 52 => 'बाव्वन्न', 53 => 'त्रेपन्न', 54 => 'चौपन्न', 55 => 'पंचावन्न', 56 => 'छपन्न', 57 => 'सत्तावन्न', 58 => 'अठ्ठावन्न', 59 => 'एकोणसाठ', 60 => 'साठ',
		61 => 'एकसष्ट', 62 => 'बासष्ट', 63 => 'तेसष्ट', 64 => 'चौसष्ट', 65 => 'पासष्ट', 66 => 'सहासष्ठ', 67 => 'सदुसष्ट', 68 => 'अडुसष्ठ', 69 => 'एकोण सत्तर', 70 => 'सत्तर',
		71 => 'एकाहत्तर', 72 => 'बहात्तर', 73 => 'त्र्याहत्तर', 74 => 'चौऱ्याहत्तर', 75 => 'पंच्याहत्तर', 76 => 'शहात्तर', 77 => 'सत्याहत्तर', 78 => 'अठ्ठ्यात्तर', 79 => 'एकोणऐंशी', 80 => 'ऐंशी',
		81 => 'एक्याऐंशी', 82 => 'ब्याऐंशी', 83 => 'त्र्याऐंशी', 84 => 'चौऱ्याऐंशी', 85 => 'पंच्याऐशी', 86 => 'शहाऐंशी', 87 => 'सत्याऐंशी', 88 => 'अठ्ठ्याऐंशी', 89 => 'एकोण नव्वद', 90 => 'नव्वद',
		91 => 'एक्याण्णव', 92 => 'ब्याण्णव', 93 => 'त्र्याण्णव', 94 => 'चौऱ्याण्णव', 95 => 'पंच्याण्णव', 96 => 'शहाण्णव', 97 => 'सत्त्याण्णव', 98 => 'अठ्ठ्याण्णव', 99 => 'नव्यान्नव', 100 => 'शंभर',
	];
	$arrLoop = [2, 1, 2, 2, 2];
	$digits = array('', 'शे', 'हजार', 'लाख', 'कोटी');
	$strRuppes = 'रुपये';

	if ($number <= 100) {
		return $words[$number] . ' ' . $strRuppes;
	}

	$loop = 0;
	while (1) {
		$digit = $arrLoop[$loop];
		if ($digit == 2) {
			$num = $number % 100;
			$number = floor($number / 100);
		} else {
			$num = $number % 10;
			$number = floor($number / 10);
		}
		$space = $loop == 1 ? '' : ' ';
		if (($loop == 1 || $loop == 2) && $num == 0) {
			$loop++;
			continue;
		}

		$str[] = $words[$num] . $space . $digits[$loop];
		$loop++;
		if ($number == 0) {
			break;
		}
	}
	return implode(' ', array_reverse($str)) . ' ' . $strRuppes;
}
?>