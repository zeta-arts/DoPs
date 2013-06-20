<?php
class Core{
	static function generateRandom($length, $numbers = true, $letters = true, $otherChars = ''){
		$chars = '';
		$chars .= ($numbers) ? '0123456789' : '';
		$chars .= ($letters) ? 'QWERTYUIOPASDFGHJKLLZXCVBNMqwertyuiopasdfghjklzxcvbnm' : '';
		$chars .= $otherChars;

		$str = '';
		$c = 0;
		while ($c < $length){ 
			$str .= substr($chars, rand(0, strlen($chars) -1), 1);
			$c++;
		}
		
		return $str;
	}
}
?>