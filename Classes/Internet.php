<?php
namespace TYPO3\Faker;

/*                                                                        *
 * This script belongs to the FLOW3 package "Faker".                      *
 *                                                                        *
 * It is free software; you can redistribute it and/or modify it under    *
 * the terms of the GNU Lesser General Public License as published by the *
 * Free Software Foundation, either version 3 of the License, or (at your *
 * option) any later version.                                             *
 *                                                                        *
 * This script is distributed in the hope that it will be useful, but     *
 * WITHOUT ANY WARRANTY; without even the implied warranty of MERCHAN-    *
 * TABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU Lesser       *
 * General Public License for more details.                               *
 *                                                                        *
 * You should have received a copy of the GNU Lesser General Public       *
 * License along with the script.                                         *
 * If not, see http://www.gnu.org/licenses/lgpl.html                      *
 *                                                                        *
 * The TYPO3 project - inspiring people to share!                         *
 *                                                                        */

/**
 * Internet class for the Faker package
 *
 * The Faker package is based on http://faker.rubyforge.org/
 *
 * @license http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License', version 3 or later
 */
class Internet extends Faker {

	/**
	 * Some common freemailer domains.
	 * @var array
	 */
	static protected $freemailerDomains = array('gmail.com', 'yahoo.com', 'hotmail.com', 'gmx.net');

	/**
	 * Some top level domains.
	 * @var array
	 */
	static protected $topLevelDomains = array('co.uk', 'com', 'us', 'uk', 'ca', 'biz', 'info', 'name', 'de', 'fr', 'lv', 'tv', 'ly');

	/**
	 * Return a fake email.
	 *
	 * @param string $name
	 * @return string
	 * @author Karsten Dambekalns <karsten@typo3.org>
	 */
	static public function email($name = NULL) {
		return self::userName($name) . '@' . self::domainName();
	}

	/**
	 * Return a fake freemailer email.
	 *
	 * @param string $name
	 * @return string
	 * @author Karsten Dambekalns <karsten@typo3.org>
	 */
	static public function freeEmail($name = NULL) {
		return self::userName($name) . '@' . self::$freemailerDomains[array_rand(self::$freemailerDomains)];
	}

	/**
	 * Return a fake username.
	 *
	 * @param string $name
	 * @return string
	 * @author Karsten Dambekalns <karsten@typo3.org>
	 */
	static public function userName($name = NULL) {
		if ($name === NULL) {
			if (rand(1, 10) > 5) {
				$name = \TYPO3\Faker\Name::firstName() . ' ' . \TYPO3\Faker\Name::lastName();
			} else {
				$name = \TYPO3\Faker\Name::firstName();
			}
		}

		$glue = array('.', '_');
		shuffle($glue);
		$nameParts = explode(' ', $name);
		shuffle($nameParts);
		$userName = implode($glue[0], $nameParts);

		return strtolower($userName);
	}

	/**
	 * Return a fake domain name.
	 *
	 * @return string
	 * @author Karsten Dambekalns <karsten@typo3.org>
	 */
	static public function domainName() {
		return self::domainWord() . '.' . self::domainSuffix();
	}

	/**
	 * Return a fake domain name part.
	 *
	 * @return string
	 * @author Karsten Dambekalns <karsten@typo3.org>
	 */
	static protected function domainWord() {
		$words = explode(' ', \TYPO3\Faker\Company::name());
		shuffle($words);
		return strtolower(preg_replace('/\W/', '', current($words)));
	}

	/**
	 * Return a fake domain name suffix.
	 *
	 * @return string
	 * @author Karsten Dambekalns <karsten@typo3.org>
	 */
	static protected function domainSuffix() {
		return self::$topLevelDomains[array_rand(self::$topLevelDomains)];
	}

}
?>