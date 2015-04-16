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