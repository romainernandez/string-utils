<?php 

namespace StringUtils;

class Utils {
	public static function leftPad($string, $length, $pad_string = ' ') {
		return str_pad($string, $length, $pad_string, STR_PAD_LEFT);
	}

	public static function rightPad($string, $length, $pad_string = ' ') {
		return str_pad($string, $length, $pad_string);
	}
}