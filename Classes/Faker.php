<?php
namespace KDambekalns\Faker;

/*                                                                        *
 * This script belongs to the Flow package "Faker".                       *
 *                                                                        */

/**
 * Faker class for the Faker package
 *
 * The Faker package is based on http://faker.rubyforge.org/
 */
class Faker
{
    /**
     * Replace all # characters in $string with a random digit.
     *
     * @param string $string
     * @return string
     */
    public static function numerify($string)
    {
        return preg_replace('/#/e', 'rand(0,9)', $string);
    }

    /**
     * Replace all ? characters in $string with a random char (a-z).
     *
     * @param string $string
     * @return string
     */
    public static function letterify($string)
    {
        return preg_replace('/\?/e', 'chr(rand(97,122))', $string);
    }

    /**
     * Return the combined result of letterify() and numerify().
     *
     * @param string $string
     * @return string
     */
    public static function bothify($string)
    {
        return self::letterify(self::numerify($string));
    }
}
