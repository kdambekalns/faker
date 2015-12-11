<?php
namespace KDambekalns\Faker;

/*                                                                        *
 * This script belongs to the Flow package "Faker".                       *
 *                                                                        */

/**
 * Internet class for the Faker package
 *
 * The Faker package is based on http://faker.rubyforge.org/
 */
class Internet extends Faker
{
    /**
     * Some common freemailer domains.
     *
     * @var array
     */
    protected static $freemailerDomains = array('gmail.com', 'yahoo.com', 'hotmail.com', 'gmx.net');

    /**
     * Some top level domains.
     *
     * @var array
     */
    protected static $topLevelDomains = array('co.uk', 'com', 'us', 'uk', 'ca', 'biz', 'info', 'name', 'de', 'fr', 'lv', 'tv', 'ly');

    /**
     * Return a fake email.
     *
     * @param string $name
     * @return string
     */
    public static function email($name = null)
    {
        return self::userName($name) . '@' . self::domainName();
    }

    /**
     * Return a fake freemailer email.
     *
     * @param string $name
     * @return string
     */
    public static function freeEmail($name = null)
    {
        return self::userName($name) . '@' . self::$freemailerDomains[array_rand(self::$freemailerDomains)];
    }

    /**
     * Return a fake username.
     *
     * @param string $name
     * @return string
     */
    public static function userName($name = null)
    {
        if ($name === null) {
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
    public static function domainName()
    {
        return self::domainWord() . '.' . self::domainSuffix();
    }

    /**
     * Return a fake domain name part.
     *
     * @return string
     */
    protected static function domainWord()
    {
        $words = explode(' ', Company::name());
        shuffle($words);

        return strtolower(preg_replace('/\W/', '', current($words)));
    }

    /**
     * Return a fake domain name suffix.
     *
     * @return string
     */
    protected static function domainSuffix()
    {
        return self::$topLevelDomains[array_rand(self::$topLevelDomains)];
    }
}
