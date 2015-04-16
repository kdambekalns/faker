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
 * Date class for the Faker package
 *
 * The Faker package is based on http://faker.rubyforge.org/
 */
class Date extends Faker {

	/**
	 * Create a random date $before and $after around $base, which defaults to
	 * 'now'. $before and $after are taken to be relative date strings.
	 *
	 * $base can be string, integer or \DateTime, if given.
	 *
	 * @param string $before a relative date
	 * @param string $after a relative date
	 * @param mixed $base the base date to randomize around
	 * @return \DateTime
	 * @throws \InvalidArgumentException
	 */
	static public function random($before = '- 1 week', $after = '+ 1 week', $base = NULL) {
		if ($base === NULL) {
			$baseDateTime = new \DateTime();
		} elseif (is_integer($base)) {
			$baseDateTime = new \DateTime();
			$baseDateTime->setTimeStamp($base);
		} elseif (is_string($base)) {
			$baseDateTime = new \DateTime($base);
		} elseif ($base instanceof \DateTime) {
			$baseDateTime = $base;
		} else {
			throw new \InvalidArgumentException('$base was neither NULL, integer, string, DateTime nor NULL. Duh!', 1251365710);
		}

		$startTimeStamp = strtotime($before, $baseDateTime->getTimeStamp());
		$endTimeStamp = strtotime($after, $baseDateTime->getTimeStamp());

		$result = new \DateTime();
		$result->setTimeStamp(rand($startTimeStamp, $endTimeStamp));

		return $result;
	}
}