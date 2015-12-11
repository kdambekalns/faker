<?php
namespace KDambekalns\Faker;

/*                                                                        *
 * This script belongs to the Flow package "Faker".                       *
 *                                                                        */

/**
 * Phone class for the Faker package
 *
 * The Faker package is based on http://faker.rubyforge.org/
 */
class Phone extends Faker
{
    /**
     * Phone number formats
     *
     * @var array
     */
    protected static $numberFormats = array(
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
    public static function number()
    {
        shuffle(self::$numberFormats);

        return self::numerify(current(self::$numberFormats));
    }
}
