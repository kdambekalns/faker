<?php
declare(ENCODING = 'utf-8');
namespace F3\Faker;

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
 * Address class for the Faker package
 *
 * The Faker package is based on http://faker.rubyforge.org/
 *
 * @version $Id$
 * @license http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License', version 3 or later
 */

class Address extends Faker {

	static protected $zipCodeFormats = array('#####', '#####-####');

	static protected $usStates = array('Alabama', 'Alaska', 'Arizona', 'Arkansas', 'California', 'Colorado', 'Connecticut', 'Delaware', 'Florida', 'Georgia', 'Hawaii', 'Idaho', 'Illinois', 'Indiana', 'Iowa', 'Kansas', 'Kentucky', 'Louisiana', 'Maine', 'Maryland', 'Massachusetts', 'Michigan', 'Minnesota', 'Mississippi', 'Missouri', 'Montana', 'Nebraska', 'Nevada', 'New Hampshire', 'New Jersey', 'New Mexico', 'New York', 'North Carolina', 'North Dakota', 'Ohio', 'Oklahoma', 'Oregon', 'Pennsylvania', 'Rhode Island', 'South Carolina', 'South Dakota', 'Tennessee', 'Texas', 'Utah', 'Vermont', 'Virginia', 'Washington', 'West Virginia', 'Wisconsin', 'Wyoming');

	static protected $usStateCodes = array('AL', 'AK', 'AS', 'AZ', 'AR', 'CA', 'CO', 'CT', 'DE', 'DC', 'FM', 'FL', 'GA', 'GU', 'HI', 'ID', 'IL', 'IN', 'IA', 'KS', 'KY', 'LA', 'ME', 'MH', 'MD', 'MA', 'MI', 'MN', 'MS', 'MO', 'MT', 'NE', 'NV', 'NH', 'NJ', 'NM', 'NY', 'NC', 'ND', 'MP', 'OH', 'OK', 'OR', 'PW', 'PA', 'PR', 'RI', 'SC', 'SD', 'TN', 'TX', 'UT', 'VT', 'VI', 'VA', 'WA', 'WV', 'WI', 'WY', 'AE', 'AA', 'AP');

	static protected $cityPrefixes = array('North', 'East', 'West', 'South', 'New', 'Lake', 'Port');

	static protected $citySuffixes = array('town', 'ton', 'land', 'ville', 'berg', 'burgh', 'borough', 'bury', 'view', 'port', 'mouth', 'stad', 'furt', 'chester', 'mouth', 'fort', 'haven', 'side', 'shire');

	static protected $cityFormats = array(
		array('format' => '%s %s%s', 'parts' => array(array('F3\Faker\Address','cityPrefix'), array('F3\Faker\Name','firstName'), array('F3\Faker\Address','citySuffix'))),
		array('format' => '%s %s', 'parts' => array(array('F3\Faker\Address','cityPrefix'), array('F3\Faker\Name','firstName'))),
		array('format' => '%s%s', 'parts' => array(array('F3\Faker\Name','firstName'), array('F3\Faker\Address','citySuffix'))),
		array('format' => '%s%s', 'parts' => array(array('F3\Faker\Name','lastName'), array('F3\Faker\Address','citySuffix')))
	);

	static protected $streetSuffixes = array('Alley', 'Avenue', 'Branch', 'Bridge', 'Brook', 'Brooks', 'Burg', 'Burgs', 'Bypass', 'Camp', 'Canyon', 'Cape', 'Causeway', 'Center', 'Centers', 'Circle', 'Circles', 'Cliff', 'Cliffs', 'Club', 'Common', 'Corner', 'Corners', 'Course', 'Court', 'Courts', 'Cove', 'Coves', 'Creek', 'Crescent', 'Crest', 'Crossing', 'Crossroad', 'Curve', 'Dale', 'Dam', 'Divide', 'Drive', 'Drive', 'Drives', 'Estate', 'Estates', 'Expressway', 'Extension', 'Extensions', 'Fall', 'Falls', 'Ferry', 'Field', 'Fields', 'Flat', 'Flats', 'Ford', 'Fords', 'Forest', 'Forge', 'Forges', 'Fork', 'Forks', 'Fort', 'Freeway', 'Garden', 'Gardens', 'Gateway', 'Glen', 'Glens', 'Green', 'Greens', 'Grove', 'Groves', 'Harbor', 'Harbors', 'Haven', 'Heights', 'Highway', 'Hill', 'Hills', 'Hollow', 'Inlet', 'Inlet', 'Island', 'Island', 'Islands', 'Islands', 'Isle', 'Isle', 'Junction', 'Junctions', 'Key', 'Keys', 'Knoll', 'Knolls', 'Lake', 'Lakes', 'Land', 'Landing', 'Lane', 'Light', 'Lights', 'Loaf', 'Lock', 'Locks', 'Locks', 'Lodge', 'Lodge', 'Loop', 'Mall', 'Manor', 'Manors', 'Meadow', 'Meadows', 'Mews', 'Mill', 'Mills', 'Mission', 'Mission', 'Motorway', 'Mount', 'Mountain', 'Mountain', 'Mountains', 'Mountains', 'Neck', 'Orchard', 'Oval', 'Overpass', 'Park', 'Parks', 'Parkway', 'Parkways', 'Pass', 'Passage', 'Path', 'Pike', 'Pine', 'Pines', 'Place', 'Plain', 'Plains', 'Plains', 'Plaza', 'Plaza', 'Point', 'Points', 'Port', 'Port', 'Ports', 'Ports', 'Prairie', 'Prairie', 'Radial', 'Ramp', 'Ranch', 'Rapid', 'Rapids', 'Rest', 'Ridge', 'Ridges', 'River', 'Road', 'Road', 'Roads', 'Roads', 'Route', 'Row', 'Rue', 'Run', 'Shoal', 'Shoals', 'Shore', 'Shores', 'Skyway', 'Spring', 'Springs', 'Springs', 'Spur', 'Spurs', 'Square', 'Square', 'Squares', 'Squares', 'Station', 'Station', 'Stravenue', 'Stravenue', 'Stream', 'Stream', 'Street', 'Street', 'Streets', 'Summit', 'Summit', 'Terrace', 'Throughway', 'Trace', 'Track', 'Trafficway', 'Trail', 'Trail', 'Tunnel', 'Tunnel', 'Turnpike', 'Turnpike', 'Underpass', 'Union', 'Unions', 'Valley', 'Valleys', 'Via', 'Viaduct', 'View', 'Views', 'Village', 'Village', '', 'Villages', 'Ville', 'Vista', 'Vista', 'Walk', 'Walks', 'Wall', 'Way', 'Ways', 'Well', 'Wells');

	static protected $streetNameFormats = array(
		array('format' => '%s %s', 'parts' => array(array('F3\Faker\Name','lastName'), array('F3\Faker\Address','streetSuffix'))),
		array('format' => '%s %s', 'parts' => array(array('F3\Faker\Name','firstName'), array('F3\Faker\Address','streetSuffix')))
	);

	static protected $ukCounties = array('Avon', 'Bedfordshire', 'Berkshire', 'Borders', 'Buckinghamshire', 'Cambridgeshire', 'Central', 'Cheshire', 'Cleveland', 'Clwyd', 'Cornwall', 'County Antrim', 'County Armagh', 'County Down', 'County Fermanagh', 'County Londonderry', 'County Tyrone', 'Cumbria', 'Derbyshire', 'Devon', 'Dorset', 'Dumfries and Galloway', 'Durham', 'Dyfed', 'East Sussex', 'Essex', 'Fife', 'Gloucestershire', 'Grampian', 'Greater Manchester', 'Gwent', 'Gwynedd County', 'Hampshire', 'Herefordshire', 'Hertfordshire', 'Highlands and Islands', 'Humberside', 'Isle of Wight', 'Kent', 'Lancashire', 'Leicestershire', 'Lincolnshire', 'Lothian', 'Merseyside', 'Mid Glamorgan', 'Norfolk', 'North Yorkshire', 'Northamptonshire', 'Northumberland', 'Nottinghamshire', 'Oxfordshire', 'Powys', 'Rutland', 'Shropshire', 'Somerset', 'South Glamorgan', 'South Yorkshire', 'Staffordshire', 'Strathclyde', 'Suffolk', 'Surrey', 'Tayside', 'Tyne and Wear', 'Warwickshire', 'West Glamorgan', 'West Midlands', 'West Sussex', 'West Yorkshire', 'Wiltshire', 'Worcestershire');

	static public function zipCode() {
		return self::numerify(self::$zipCodeFormats[array_rand(self::$zipCodeFormats)]);
	}

	static public function usState() {
		return self::$usStates[array_rand(self::$usStates)];
	}

	static public function usStateCode() {
		return self::$usStateCodes[array_rand(self::$usStateCodes)];
	}

	static public function cityPrefix() {
		return self::$cityPrefixes[array_rand(self::$cityPrefixes)];
	}

	static public function citySuffix() {
		return self::$citySuffixes[array_rand(self::$citySuffixes)];
	}

	static public function city() {
		$format = self::$cityFormats[array_rand(self::$cityFormats)];

		$parts = array();
		foreach ($format['parts'] as $function) {
			$parts[] = call_user_func($function);
		}

		return vsprintf($format['format'], $parts);
	}

	static public function streetSuffix() {
		return self::$streetSuffixes[array_rand(self::$streetSuffixes)];
	}

	static public function streetName() {
		$format = self::$streetNameFormats[array_rand(self::$streetNameFormats)];

		$parts = array();
		foreach ($format['parts'] as $function) {
			$parts[] = call_user_func($function);
		}

		return vsprintf($format['format'], $parts);
	}

	static public function streetAddress($withSecondary = FALSE) {
		$formats = array('##### %s', '#### %s', '### %s');
		shuffle($formats);
		$streetAddress = self::numerify(sprintf(current($formats), self::streetName()));
		if ($withSecondary) {
			$streetAddress .= ' ' . self::secondaryAddress();
		}
		return $streetAddress;
	}

	static public function secondaryAddress() {
		$format = array('Apt. ###', 'Suite ###');
		shuffle($format);
		return self::numerify(current($format));
	}

	static public function ukCounty() {
		return self::$ukCounties[array_rand(self::$ukCounties)];
	}

	static public function ukCountry() {
		$country = array('England', 'Scotland', 'Wales', 'Northern Ireland');
		shuffle($country);
		return current($country);
	}

	static public function ukZipcode() {
		$format = array('??# #??', '??## #??');
		shuffle($format);
		return strtoupper(self::bothify(current($format)));
	}

}
?>