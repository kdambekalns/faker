<?php
namespace KDambekalns\Faker;

/*                                                                        *
 * This script belongs to the Flow package "Faker".                       *
 *                                                                        */

/**
 * Address class for the Faker package
 *
 * The Faker package is based on http://faker.rubyforge.org/
 */
class Address extends Faker
{
    /**
     * Some zip code formats.
     *
     * @var array
     */
    protected static $zipCodeFormats = array('#####', '#####-####');

    /**
     * US states
     *
     * @var array
     */
    protected static $usStates = array('Alabama', 'Alaska', 'Arizona', 'Arkansas', 'California', 'Colorado', 'Connecticut', 'Delaware', 'Florida', 'Georgia', 'Hawaii', 'Idaho', 'Illinois', 'Indiana', 'Iowa', 'Kansas', 'Kentucky', 'Louisiana', 'Maine', 'Maryland', 'Massachusetts', 'Michigan', 'Minnesota', 'Mississippi', 'Missouri', 'Montana', 'Nebraska', 'Nevada', 'New Hampshire', 'New Jersey', 'New Mexico', 'New York', 'North Carolina', 'North Dakota', 'Ohio', 'Oklahoma', 'Oregon', 'Pennsylvania', 'Rhode Island', 'South Carolina', 'South Dakota', 'Tennessee', 'Texas', 'Utah', 'Vermont', 'Virginia', 'Washington', 'West Virginia', 'Wisconsin', 'Wyoming');

    /**
     * US state codes
     *
     * @var array
     */
    protected static $usStateCodes = array('AL', 'AK', 'AS', 'AZ', 'AR', 'CA', 'CO', 'CT', 'DE', 'DC', 'FM', 'FL', 'GA', 'GU', 'HI', 'ID', 'IL', 'IN', 'IA', 'KS', 'KY', 'LA', 'ME', 'MH', 'MD', 'MA', 'MI', 'MN', 'MS', 'MO', 'MT', 'NE', 'NV', 'NH', 'NJ', 'NM', 'NY', 'NC', 'ND', 'MP', 'OH', 'OK', 'OR', 'PW', 'PA', 'PR', 'RI', 'SC', 'SD', 'TN', 'TX', 'UT', 'VT', 'VI', 'VA', 'WA', 'WV', 'WI', 'WY', 'AE', 'AA', 'AP');

    /**
     * City name prefixes
     *
     * @var array
     */
    protected static $cityPrefixes = array('North', 'East', 'West', 'South', 'New', 'Lake', 'Port');

    /**
     * City name suffixes
     *
     * @var array
     */
    protected static $citySuffixes = array('town', 'ton', 'land', 'ville', 'berg', 'burgh', 'borough', 'bury', 'view', 'port', 'mouth', 'stad', 'furt', 'chester', 'mouth', 'fort', 'haven', 'side', 'shire');

    /**
     * City name formats
     *
     * @var array
     */
    protected static $cityFormats = array(
        array('format' => '%s %s%s', 'parts' => array(array('KDambekalns\Faker\Address', 'cityPrefix'), array('KDambekalns\Faker\Name', 'firstName'), array('KDambekalns\Faker\Address', 'citySuffix'))),
        array('format' => '%s %s', 'parts' => array(array('KDambekalns\Faker\Address', 'cityPrefix'), array('KDambekalns\Faker\Name', 'firstName'))),
        array('format' => '%s%s', 'parts' => array(array('KDambekalns\Faker\Name', 'firstName'), array('KDambekalns\Faker\Address', 'citySuffix'))),
        array('format' => '%s%s', 'parts' => array(array('KDambekalns\Faker\Name', 'lastName'), array('KDambekalns\Faker\Address', 'citySuffix')))
    );

    /**
     * Street name suffixes
     *
     * @var array
     */
    protected static $streetSuffixes = array('Alley', 'Avenue', 'Branch', 'Bridge', 'Brook', 'Brooks', 'Burg', 'Burgs', 'Bypass', 'Camp', 'Canyon', 'Cape', 'Causeway', 'Center', 'Centers', 'Circle', 'Circles', 'Cliff', 'Cliffs', 'Club', 'Common', 'Corner', 'Corners', 'Course', 'Court', 'Courts', 'Cove', 'Coves', 'Creek', 'Crescent', 'Crest', 'Crossing', 'Crossroad', 'Curve', 'Dale', 'Dam', 'Divide', 'Drive', 'Drive', 'Drives', 'Estate', 'Estates', 'Expressway', 'Extension', 'Extensions', 'Fall', 'Falls', 'Ferry', 'Field', 'Fields', 'Flat', 'Flats', 'Ford', 'Fords', 'Forest', 'Forge', 'Forges', 'Fork', 'Forks', 'Fort', 'Freeway', 'Garden', 'Gardens', 'Gateway', 'Glen', 'Glens', 'Green', 'Greens', 'Grove', 'Groves', 'Harbor', 'Harbors', 'Haven', 'Heights', 'Highway', 'Hill', 'Hills', 'Hollow', 'Inlet', 'Inlet', 'Island', 'Island', 'Islands', 'Islands', 'Isle', 'Isle', 'Junction', 'Junctions', 'Key', 'Keys', 'Knoll', 'Knolls', 'Lake', 'Lakes', 'Land', 'Landing', 'Lane', 'Light', 'Lights', 'Loaf', 'Lock', 'Locks', 'Locks', 'Lodge', 'Lodge', 'Loop', 'Mall', 'Manor', 'Manors', 'Meadow', 'Meadows', 'Mews', 'Mill', 'Mills', 'Mission', 'Mission', 'Motorway', 'Mount', 'Mountain', 'Mountain', 'Mountains', 'Mountains', 'Neck', 'Orchard', 'Oval', 'Overpass', 'Park', 'Parks', 'Parkway', 'Parkways', 'Pass', 'Passage', 'Path', 'Pike', 'Pine', 'Pines', 'Place', 'Plain', 'Plains', 'Plains', 'Plaza', 'Plaza', 'Point', 'Points', 'Port', 'Port', 'Ports', 'Ports', 'Prairie', 'Prairie', 'Radial', 'Ramp', 'Ranch', 'Rapid', 'Rapids', 'Rest', 'Ridge', 'Ridges', 'River', 'Road', 'Road', 'Roads', 'Roads', 'Route', 'Row', 'Rue', 'Run', 'Shoal', 'Shoals', 'Shore', 'Shores', 'Skyway', 'Spring', 'Springs', 'Springs', 'Spur', 'Spurs', 'Square', 'Square', 'Squares', 'Squares', 'Station', 'Station', 'Stravenue', 'Stravenue', 'Stream', 'Stream', 'Street', 'Street', 'Streets', 'Summit', 'Summit', 'Terrace', 'Throughway', 'Trace', 'Track', 'Trafficway', 'Trail', 'Trail', 'Tunnel', 'Tunnel', 'Turnpike', 'Turnpike', 'Underpass', 'Union', 'Unions', 'Valley', 'Valleys', 'Via', 'Viaduct', 'View', 'Views', 'Village', 'Village', '', 'Villages', 'Ville', 'Vista', 'Vista', 'Walk', 'Walks', 'Wall', 'Way', 'Ways', 'Well', 'Wells');

    /**
     * Street name formats
     *
     * @var array
     */
    protected static $streetNameFormats = array(
        array('format' => '%s %s', 'parts' => array(array('KDambekalns\Faker\Name', 'lastName'), array('KDambekalns\Faker\Address', 'streetSuffix'))),
        array('format' => '%s %s', 'parts' => array(array('KDambekalns\Faker\Name', 'firstName'), array('KDambekalns\Faker\Address', 'streetSuffix')))
    );

    /**
     * UK counties
     *
     * @var array
     */
    protected static $ukCounties = array('Avon', 'Bedfordshire', 'Berkshire', 'Borders', 'Buckinghamshire', 'Cambridgeshire', 'Central', 'Cheshire', 'Cleveland', 'Clwyd', 'Cornwall', 'County Antrim', 'County Armagh', 'County Down', 'County Fermanagh', 'County Londonderry', 'County Tyrone', 'Cumbria', 'Derbyshire', 'Devon', 'Dorset', 'Dumfries and Galloway', 'Durham', 'Dyfed', 'East Sussex', 'Essex', 'Fife', 'Gloucestershire', 'Grampian', 'Greater Manchester', 'Gwent', 'Gwynedd County', 'Hampshire', 'Herefordshire', 'Hertfordshire', 'Highlands and Islands', 'Humberside', 'Isle of Wight', 'Kent', 'Lancashire', 'Leicestershire', 'Lincolnshire', 'Lothian', 'Merseyside', 'Mid Glamorgan', 'Norfolk', 'North Yorkshire', 'Northamptonshire', 'Northumberland', 'Nottinghamshire', 'Oxfordshire', 'Powys', 'Rutland', 'Shropshire', 'Somerset', 'South Glamorgan', 'South Yorkshire', 'Staffordshire', 'Strathclyde', 'Suffolk', 'Surrey', 'Tayside', 'Tyne and Wear', 'Warwickshire', 'West Glamorgan', 'West Midlands', 'West Sussex', 'West Yorkshire', 'Wiltshire', 'Worcestershire');

    /**
     * Return a fake zip code.
     *
     * @return string
     */
    public static function zipCode()
    {
        return static::numerify(static::$zipCodeFormats[array_rand(static::$zipCodeFormats)]);
    }

    /**
     * Return a random US state.
     *
     * @return string
     */
    public static function usState()
    {
        return static::$usStates[array_rand(static::$usStates)];
    }

    /**
     * Return a random US state code.
     *
     * @return string
     */
    public static function usStateCode()
    {
        return static::$usStateCodes[array_rand(static::$usStateCodes)];
    }

    /**
     * Return a city name prefix.
     *
     * @return string
     */
    protected static function cityPrefix()
    {
        return static::$cityPrefixes[array_rand(static::$cityPrefixes)];
    }

    /**
     * Return a city name suffix.
     *
     * @return string
     */
    protected static function citySuffix()
    {
        return static::$citySuffixes[array_rand(static::$citySuffixes)];
    }

    /**
     * Return a fake city name.
     *
     * @return string
     */
    public static function city()
    {
        $format = static::$cityFormats[array_rand(static::$cityFormats)];

        $parts = array();
        foreach ($format['parts'] as $function) {
            $parts[] = call_user_func($function);
        }

        return vsprintf($format['format'], $parts);
    }

    /**
     * Return a street name suffix.
     *
     * @return string
     */
    protected static function streetSuffix()
    {
        return static::$streetSuffixes[array_rand(static::$streetSuffixes)];
    }

    /**
     * Return a fake street name.
     *
     * @return string
     */
    public static function streetName()
    {
        $format = static::$streetNameFormats[array_rand(static::$streetNameFormats)];

        $parts = array();
        foreach ($format['parts'] as $function) {
            $parts[] = call_user_func($function);
        }

        return vsprintf($format['format'], $parts);
    }

    /**
     * Return a fake street address.
     *
     * @param boolean $withSecondary Whether to include Apt/Suite in the address
     * @return string
     */
    public static function streetAddress($withSecondary = false)
    {
        $formats = array('##### %s', '#### %s', '### %s');
        shuffle($formats);
        $streetAddress = static::numerify(sprintf(current($formats), static::streetName()));
        if ($withSecondary) {
            $streetAddress .= ' ' . static::secondaryAddress();
        }

        return $streetAddress;
    }

    /**
     * Return a secondary address part.
     *
     * @return string
     */
    public static function secondaryAddress()
    {
        $format = array('Apt. ###', 'Suite ###');
        shuffle($format);

        return static::numerify(current($format));
    }

    /**
     * Return a UK county.
     *
     * @return string
     */
    public static function ukCounty()
    {
        return static::$ukCounties[array_rand(static::$ukCounties)];
    }

    /**
     * Return a UK country.
     *
     * @return string
     */
    public static function ukCountry()
    {
        $country = array('England', 'Scotland', 'Wales', 'Northern Ireland');
        shuffle($country);

        return current($country);
    }

    /**
     * Return a fake UK zip code.
     *
     * @return string
     */
    public static function ukZipcode()
    {
        $format = array('??# #??', '??## #??');
        shuffle($format);

        return strtoupper(static::bothify(current($format)));
    }
}
