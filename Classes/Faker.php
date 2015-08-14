<?php
namespace KDambekalns\Faker;

/*                                                                        *
 * This script belongs to the Flow package "Faker".                       *
 *                                                                        */

// define aliae for the legacy vendor namespace
class_alias('KDambekalns\\Faker\\Faker', 'TYPO3\\Faker\\Faker');

/**
 * Faker class for the Faker package
 *
 * The Faker package is based on http://faker.rubyforge.org/
 */
class Faker {

	/**
	 * Replace all # characters in $string with a random digit.
	 *
	 * @param string $string
	 * @return string
	 */
	static public function numerify($string) {
		return preg_replace('/#/e', 'rand(0,9)', $string);
	}

	/**
	 * Replace all ? characters in $string with a random char (a-z).
	 *
	 * @param string $string
	 * @return string
	 */
	static public function letterify($string) {
		return preg_replace('/\?/e', 'chr(rand(97,122))', $string);
	}

	/**
	 * Return the combined result of letterify() and numerify().
	 *
	 * @param string $string
	 * @return string
	 */
	static public function bothify($string) {
		return self::letterify(self::numerify($string));
	}
}