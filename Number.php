<?php

class Number
{
	const ENCRYPTION_TEXT = 'p4MtosJxWr9THgU-fu6nAVlqIOyPkEXNi/mzjGK0BF713QdYLCw25ca8RDZhevbS';
	const ENCRYPTION_NUMBER = 23047908131;
	
	/**
	 * 数値を暗号化する
	 *
	 * @param int
	 * @return string
	 */
	public static function encryption($v10)
	{
		$v2 = decbin($v10 + self::ENCRYPTION_NUMBER);
		$values = str_split(str_repeat('0', 6 - strlen($v2) % 6) . $v2, 6);

		$v64 = "";
		foreach ($values as $i => $v) {
			$v64 = self::ENCRYPTION_TEXT[bindec($v)] . $v64;
		}

		return $v64;
	}

	/**
	 * 文字列を復号化する
	 *
	 * @param string
	 * @return int
	 */
	public static function unencryption($v64)
	{
		$v64 = str_split($v64, 1);
		$encryption_text = array_flip(str_split(self::ENCRYPTION_TEXT, 1));

		$v10 = -self::ENCRYPTION_NUMBER;
		foreach ($v64 as $i => $v) {
			$v10 += ((int)$encryption_text[$v]) * 64 ** $i;
		}

		return $v10;
	}
}