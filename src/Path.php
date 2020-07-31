<?php

namespace ShakilAhmmed\Path;

class Path
{
	 static private $division = [
		 "dhaka" => [
			 "name" => "Dhaka" ,
			 "bn" => "ঢাকা" ,
		 ] ,
		 "barisal" => [
			 "name" => "Barisal" ,
			 "bn" => "বরিশাল" ,
		 ] ,
		 "chittagong" => [
			 "name" => "Chittagong" ,
			 "bn" => "চট্টগ্রাম" ,
		 ] ,
		 "khulna" => [
			 "name" => "Khulna" ,
			 "bn" => "খুলনা" ,
		 ] ,
		 "mymensingh" => [
			 "name" => "Mymensingh" ,
			 "bn" => "ময়মনসিংহ" ,
		 ] ,
		 "rajshahi" => [
			 "name" => "Rajshahi" ,
			 "bn" => "রাজশাহী" ,
		 ] ,
		 "sylhet" => [
			 "name" => "Sylhet" ,
			 "bn" => "সিলেট" ,
		 ] ,
		 "rangpur" => [
			 "name" => "Rangpur" ,
			 "bn" => "রংপুর" ,
		 ] ,
	 ];

	 static private $district = [
		 "dhaka" => [
			 "dhaka" => [
				 "name" => "Dhaka" ,
				 "bn" => "ঢাকা" ,
			 ] ,
			 "ghazipur" => [
				 "name" => "Ghazipur" ,
				 "bn" => "গাজীপুর" ,
			 ] ,
			 "kishoreganj" => [
				 "name" => "Kishoreganj" ,
				 "bn" => "কিশোরগঞ্জ" ,
			 ] ,
			 "manikganj" => [
				 "name" => "Manikganj" ,
				 "bn" => "মানিকগঞ্জ" ,
			 ] ,
			 "munshiganj" => [
				 "name" => "Munshiganj" ,
				 "bn" => "মুন্সিগঞ্জ" ,
			 ] ,
			 "narayanganj" => [
				 "name" => "Narayanganj" ,
				 "bn" => "নারায়ণগঞ্জ" ,
			 ] ,
			 "narsingdi" => [
				 "name" => "Narsingdi" ,
				 "bn" => "নরসিংদি" ,
			 ] ,
			 "tangail" => [
				 "name" => "Tangail" ,
				 "bn" => "টাঙ্গাইল" ,
			 ] ,
			 "faridpur" => [
				 "name" => "Faridpur" ,
				 "bn" => "ফরিদপুর" ,
			 ] ,
			 "gopalganj" => [
				 "name" => "Gopalganj" ,
				 "bn" => "গোপালগঞ্জ" ,
			 ] ,
			 "madaripur" => [
				 "name" => "Madaripur" ,
				 "bn" => "মাদারিপুর" ,
			 ] ,
			 "rajbari" => [
				 "name" => "Rajbari" ,
				 "bn" => "রাজবাড়ি" ,
			 ] ,
			 "shariatpur" => [
				 "name" => "Shariatpur" ,
				 "bn" => "শরিয়তপুর" ,
			 ] ,
		 ] ,
		 "barisal" => [
			 "barguna" => [
				 "name" => "Barguna" ,
				 "bn" => "বরগুনা" ,
			 ] ,
			 "barisal" => [
				 "name" => "Barisal" ,
				 "bn" => "বরিশাল" ,
			 ] ,
			 "bhola" => [
				 "name" => "Bhola" ,
				 "bn" => "ভোলা" ,
			 ] ,
			 "jhalokati" => [
				 "name" => "Jhalokati" ,
				 "bn" => "ঝালকাঠি" ,
			 ] ,
			 "patuakhali" => [
				 "name" => "Patuakhali" ,
				 "bn" => "পটুয়াখালি" ,
			 ] ,
			 "pirojpur" => [
				 "name" => "Pirojpur" ,
				 "bn" => "পিরোজপুর" ,
			 ] ,
		 ] ,
		 "chittagong" => [
			 "brahmanbaria" => [
				 "name" => "Brahmanbaria" ,
				 "bn" => "ব্রাহ্মণবাড়িয়া" ,
			 ] ,
			 "comilla" => [
				 "name" => "Comilla" ,
				 "bn" => "কুমিল্লা" ,
			 ] ,
			 "chandpur" => [
				 "name" => "Chandpur" ,
				 "bn" => "চাঁদপুর" ,
			 ] ,
			 "lakshmipur" => [
				 "name" => "Lakshmipur" ,
				 "bn" => "লক্ষ্মীপুর" ,
			 ] ,
			 "feni" => [
				 "name" => "Feni" ,
				 "bn" => "ফেনী" ,
			 ] ,
			 "khagrachhari" => [
				 "name" => "Khagrachhari" ,
				 "bn" => "খাগড়াছড়ি" ,
			 ] ,
			 "rangamati" => [
				 "name" => "Rangamati" ,
				 "bn" => "রাঙ্গামাটি" ,
			 ] ,
			 "bandarban" => [
				 "name" => "Bandarban" ,
				 "bn" => "বান্দরবান" ,
			 ] ,
			 "chittagong" => [
				 "name" => "Chittagong" ,
				 "bn" => "চট্টগ্রাম" ,
			 ] ,
			 "cox'sbazar" => [
				 "name" => "Cox's Bazar" ,
				 "bn" => "কক্সবাজার" ,
			 ] ,
			 "noakhali" => [
				 "name" => "Noakhali" ,
				 "bn" => "নোয়াখালি" ,
			 ] ,
		 ] ,
		 "khulna" => [
			 "jhenaidah" => [
				 "name" => "Jhenaidah" ,
				 "bn" => "ঝিনাইদহ" ,
			 ] ,
			 "khulna" => [
				 "name" => "Khulna" ,
				 "bn" => "খুলনা" ,
			 ] ,
			 "kushtia" => [
				 "name" => "Kushtia" ,
				 "bn" => "কুষ্টিয়া" ,
			 ] ,
			 "magura" => [
				 "name" => "Magura" ,
				 "bn" => "মাগুরা" ,
			 ] ,
			 "meherpur" => [
				 "name" => "Meherpur" ,
				 "bn" => "মেহেরপুর" ,
			 ] ,
			 "narail" => [
				 "name" => "Narail" ,
				 "bn" => "নড়াইল" ,
			 ] ,
			 "satkhira" => [
				 "name" => "Satkhira" ,
				 "bn" => "সাতক্ষীরা" ,
			 ] ,
			 "bagerhat" => [
				 "name" => "Bagerhat" ,
				 "bn" => "বাগেরহাট" ,
			 ] ,
			 "chuadanga" => [
				 "name" => "Chuadanga" ,
				 "bn" => "চুয়াডাঙ্গা" ,
			 ] ,
			 "jessore" => [
				 "name" => "Jessore" ,
				 "bn" => "যশোর" ,
			 ] ,
		 ] ,
		 "mymensingh" => [
			 "jamalpur" => [
				 "name" => "Jamalpur" ,
				 "bn" => "জামালপুর" ,
			 ] ,
			 "mymensingh" => [
				 "name" => "Mymensingh" ,
				 "bn" => "ময়মনসিংহ" ,
			 ] ,
			 "netrokona" => [
				 "name" => "Netrokona" ,
				 "bn" => "নেত্রকোনা" ,
			 ] ,
			 "sherpur" => [
				 "name" => "Sherpur" ,
				 "bn" => "শেরপুর" ,
			 ] ,
		 ] ,
		 "rajshahi" => [
			 "bogra" => [
				 "name" => "Bogra" ,
				 "bn" => "বগুড়া" ,
			 ] ,
			 "joypurhat" => [
				 "name" => "Joypurhat" ,
				 "bn" => "জয়পুরহাট" ,
			 ] ,
			 "naogaon" => [
				 "name" => "Naogaon" ,
				 "bn" => "নওগাঁ" ,
			 ] ,
			 "natore" => [
				 "name" => "Natore" ,
				 "bn" => "নাটোর" ,
			 ] ,
			 "chapainawabganj" => [
				 "name" => "Chapainawabganj" ,
				 "bn" => "চাঁপাইনবাবগঞ্জ" ,
			 ] ,
			 "pabna" => [
				 "name" => "Pabna" ,
				 "bn" => "পাবনা" ,
			 ] ,
			 "rajshahi" => [
				 "name" => "Rajshahi" ,
				 "bn" => "রাজশাহী" ,
			 ] ,
			 "sirajganj" => [
				 "name" => "Sirajganj" ,
				 "bn" => "সিরাজগঞ্জ" ,
			 ] ,
		 ] ,
		 "sylhet" => [
			 "habiganj" => [
				 "name" => "Habiganj" ,
				 "bn" => "হবিগঞ্জ" ,
			 ] ,
			 "moulvibazar" => [
				 "name" => "Moulvibazar" ,
				 "bn" => "মৌলভীবাজার" ,
			 ] ,
			 "sunamganj" => [
				 "name" => "Sunamganj" ,
				 "bn" => "সুনামগঞ্জ" ,
			 ] ,
			 "sylhet" => [
				 "name" => "Sylhet" ,
				 "bn" => "সিলেট" ,
			 ] ,
		 ] ,
		 "rangpur" => [
			 "dinajpur" => [
				 "name" => "Dinajpur" ,
				 "bn" => "দিনাজপুর" ,
			 ] ,
			 "gaibandha" => [
				 "name" => "Gaibandha" ,
				 "bn" => "গাইবান্ধা" ,
			 ] ,
			 "kurigram" => [
				 "name" => "Kurigram" ,
				 "bn" => "কুড়িগ্রাম" ,
			 ] ,
			 "lalmonirhat" => [
				 "name" => "Lalmonirhat" ,
				 "bn" => "লালমনিরহাট" ,
			 ] ,
			 "nilphamari" => [
				 "name" => "Nilphamari" ,
				 "bn" => "নীলফামারি" ,
			 ] ,
			 "panchagarh" => [
				 "name" => "Panchagarh" ,
				 "bn" => "পঞ্চগড়" ,
			 ] ,
			 "rangpur" => [
				 "name" => "Rangpur" ,
				 "bn" => "রংপুর" ,
			 ] ,
			 "thakurgaon" => [
				 "name" => "Thakurgaon" ,
				 "bn" => "ঠাকুরগাঁও" ,
			 ] ,
		 ] ,
	 ];

	 public static function getDivisions (string $type = null): array
	 {
		  if ($type) {
			   $_type = $type === 'en' ? 'name' : 'bn';
			   return array_column(self::$division , $_type , 'name');
		  }
		  return self::$division;
	 }

	 public static function getSingleDivision (string $division_name , string $type = "en"): string
	 {
		  $_type = $type === 'en' ? 'name' : 'bn';
		  return self::$division[$division_name][$_type];
	 }

	 public static function getDistricts (string $type = null): array
	 {
		  $_type = $type === 'en' ? 'name' : 'bn';
		  $_district_data = array_values(self::$district);
		  $_districts = [];
		  foreach ($_district_data as $district_value) {
			   foreach ($district_value as $key => $value) {
					$_districts[$key] = $value;
			   }
		  }
		  if ($type) {
			   return array_column(array_values($_districts) , $_type , "name");
		  }
		  return $_districts;
	 }

	 public static function getDivisionWiseDistrict (string $division , string $type = "en"): array
	 {
		  $_type = $type === 'en' ? 'name' : 'bn';
		  return array_column(self::$district[strtolower($division)] , $_type , "name");
	 }
}
