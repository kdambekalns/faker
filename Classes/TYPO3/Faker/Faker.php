<?php
namespace TYPO3\Faker;

/*                                                                        *
 * This script belongs to the Flow package "Faker".                       *
 *                                                                        *
 * It is free software; you can redistribute it and/or modify it under    *
 * the terms of the GNU Lesser General Public License, either version 3   *
 * of the License, or (at your option) any later version.                 *
 *                                                                        *
 * The TYPO3 project - inspiring people to share!                         *
 *                                                                        */

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
	 * @author Karsten Dambekalns <karsten@typo3.org>
	 */
	static public function numerify($string) {
		return preg_replace('/#/e', 'rand(0,9)', $string);
	}

	/**
	 * Replace all ? characters in $string with a random char (a-z).
	 *
	 * @param string $string
	 * @return string
	 * @author Karsten Dambekalns <karsten@typo3.org>
	 */
	static public function letterify($string) {
		return preg_replace('/\?/e', 'chr(rand(97,122))', $string);
	}

	/**
	 * Return the combined result of letterify() and numerify().
	 *
	 * @param string $string
	 * @return string
	 * @author Karsten Dambekalns <karsten@typo3.org>
	 */
	static public function bothify($string) {
		return self::letterify(self::numerify($string));
	}

}