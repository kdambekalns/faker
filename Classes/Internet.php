<?php
namespace KDambekalns\Faker;

/*                                                                        *
 * This script belongs to the Flow package "Faker".                       *
 *                                                                        */

// define aliae for the legacy vendor namespace
class_alias('KDambekalns\\Faker\\Internet', 'TYPO3\\Faker\\Internet');

/**
 * Internet class for the Faker package
 *
 * The Faker package is based on http://faker.rubyforge.org/
 */
class Internet extends Faker {

	/**
	 * Some common freemailer domains.
	 *
	 * @var array
	 */
	static protected $freemailerDomains = array('gmail.com', 'yahoo.com', 'hotmail.com', 'gmx.net');

	/**
	 * Some top level domains.
	 *
	 * @var array
	 */
	static protected $topLevelDomains = array('co.uk', 'com', 'us', 'uk', 'ca', 'biz', 'info', 'name', 'de', 'fr', 'lv', 'tv', 'ly');

	/**
	 * Return a fake email.
	 *
	 * @param string $name
	 * @return string
	 */
	static public function email($name = NULL) {
		return self::userName($name) . '@' . self::domainName();
	}

	/**
	 * Return a fake freemailer email.
	 *
	 * @param string $name
	 * @return string
	 */
	static public function freeEmail($name = NULL) {
		return self::userName($name) . '@' . self::$freemailerDomains[array_rand(self::$freemailerDomains)];
	}

	/**
	 * Return a fake username.
	 *
	 * @param string $name
	 * @return string
	 */
	static public function userName($name = NULL) {
		if ($name === NULL) {
			if (rand(1, 10) > 5) {
				$name = Name::firstName() . ' ' . Name::lastName();
			} else {
				$name = Name::firstName();
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
	 */
	static public function domainName() {
		return self::domainWord() . '.' . self::domainSuffix();
	}

	/**
	 * Return a fake domain name part.
	 *
	 * @return string
	 */
	static protected function domainWord() {
		$words = explode(' ', Company::name());
		shuffle($words);

		return strtolower(preg_replace('/\W/', '', current($words)));
	}

	/**
	 * Return a fake domain name suffix.
	 *
	 * @return string
	 */
	static protected function domainSuffix() {
		return self::$topLevelDomains[array_rand(self::$topLevelDomains)];
	}
}