<?php
namespace KDambekalns\Faker;

/*                                                                        *
 * This script belongs to the Flow package "Faker".                       *
 *                                                                        */

// define aliae for the legacy vendor namespace
class_alias('KDambekalns\\Faker\\Phone', 'TYPO3\\Faker\\Phone');

/**
 * Phone class for the Faker package
 *
 * The Faker package is based on http://faker.rubyforge.org/
 */
class Phone extends Faker {

	/**
	 * Phone number formats
	 *
	 * @var array
	 */
	static protected $numberFormats = array(
		'###-###-####',
		'(###)###-####',
		'1-###-###-####',
		'###.###.####',
		'###-###-####',
		'(###)###-####',
		'1-###-###-####',
		'###.###.####',
		'###-###-#### x###',
		'(###)###-#### x###',
		'1-###-###-#### x###',
		'###.###.#### x###',
		'###-###-#### x####',
		'(###)###-#### x####',
		'1-###-###-#### x####',
		'###.###.#### x####',
		'###-###-#### x#####',
		'(###)###-#### x#####',
		'1-###-###-#### x#####',
		'###.###.#### x#####'
	);

	/**
	 * Returns a fake phone number.
	 *
	 * @return string
	 */
	static public function number() {
		shuffle(self::$numberFormats);

		return self::numerify(current(self::$numberFormats));
	}
}