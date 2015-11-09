<?php
namespace KDambekalns\Faker;

/*                                                                        *
 * This script belongs to the Flow package "Faker".                       *
 *                                                                        */

/**
 * Lorem class for the Faker package
 *
 * The Faker package is based on http://faker.rubyforge.org/
 */
class Lorem extends Faker {

	/**
	 * Some words to choose from.
	 *
	 * @var array
	 */
	static protected $words = array('alias', 'consequatur', 'aut', 'perferendis', 'sit', 'voluptatem', 'accusantium', 'doloremque', 'aperiam', 'eaque', 'ipsa', 'quae', 'ab', 'illo', 'inventore', 'veritatis', 'et', 'quasi', 'architecto', 'beatae', 'vitae', 'dicta', 'sunt', 'explicabo', 'aspernatur', 'aut', 'odit', 'aut', 'fugit', 'sed', 'quia', 'consequuntur', 'magni', 'dolores', 'eos', 'qui', 'ratione', 'voluptatem', 'sequi', 'nesciunt', 'neque', 'dolorem', 'ipsum', 'quia', 'dolor', 'sit', 'amet', 'consectetur', 'adipisci', 'velit', 'sed', 'quia', 'non', 'numquam', 'eius', 'modi', 'tempora', 'incidunt', 'ut', 'labore', 'et', 'dolore', 'magnam', 'aliquam', 'quaerat', 'voluptatem', 'ut', 'enim', 'ad', 'minima', 'veniam', 'quis', 'nostrum', 'exercitationem', 'ullam', 'corporis', 'nemo', 'enim', 'ipsam', 'voluptatem', 'quia', 'voluptas', 'sit', 'suscipit', 'laboriosam', 'nisi', 'ut', 'aliquid', 'ex', 'ea', 'commodi', 'consequatur', 'quis', 'autem', 'vel', 'eum', 'iure', 'reprehenderit', 'qui', 'in', 'ea', 'voluptate', 'velit', 'esse', 'quam', 'nihil', 'molestiae', 'et', 'iusto', 'odio', 'dignissimos', 'ducimus', 'qui', 'blanditiis', 'praesentium', 'laudantium', 'totam', 'rem', 'voluptatum', 'deleniti', 'atque', 'corrupti', 'quos', 'dolores', 'et', 'quas', 'molestias', 'excepturi', 'sint', 'occaecati', 'cupiditate', 'non', 'provident', 'sed', 'ut', 'perspiciatis', 'unde', 'omnis', 'iste', 'natus', 'error', 'similique', 'sunt', 'in', 'culpa', 'qui', 'officia', 'deserunt', 'mollitia', 'animi', 'id', 'est', 'laborum', 'et', 'dolorum', 'fuga', 'et', 'harum', 'quidem', 'rerum', 'facilis', 'est', 'et', 'expedita', 'distinctio', 'nam', 'libero', 'tempore', 'cum', 'soluta', 'nobis', 'est', 'eligendi', 'optio', 'cumque', 'nihil', 'impedit', 'quo', 'porro', 'quisquam', 'est', 'qui', 'minus', 'id', 'quod', 'maxime', 'placeat', 'facere', 'possimus', 'omnis', 'voluptas', 'assumenda', 'est', 'omnis', 'dolor', 'repellendus', 'temporibus', 'autem', 'quibusdam', 'et', 'aut', 'consequatur', 'vel', 'illum', 'qui', 'dolorem', 'eum', 'fugiat', 'quo', 'voluptas', 'nulla', 'pariatur', 'at', 'vero', 'eos', 'et', 'accusamus', 'officiis', 'debitis', 'aut', 'rerum', 'necessitatibus', 'saepe', 'eveniet', 'ut', 'et', 'voluptates', 'repudiandae', 'sint', 'et', 'molestiae', 'non', 'recusandae', 'itaque', 'earum', 'rerum', 'hic', 'tenetur', 'a', 'sapiente', 'delectus', 'ut', 'aut', 'reiciendis', 'voluptatibus', 'maiores', 'doloribus', 'asperiores', 'repellat');

	/**
	 * Return some random words.
	 *
	 * @param integer $count How many words to return.
	 * @return array
	 */
	static public function words($count = 3) {
		if ($count === 1) {
			return self::$words[array_rand(self::$words, $count)];
		} else {
			return array_intersect_key(self::$words, array_flip(array_rand(self::$words, $count)));
		}
	}

	/**
	 * Return a sentence.
	 *
	 * @param integer $wordCount How many words to use, is varied with 0 to 6 more
	 * @return string
	 */
	static public function sentence($wordCount = 4) {
		return ucfirst(implode(' ', self::words($wordCount + rand(0, 6)))) . '.';
	}

	/**
	 * Return some sentences.
	 *
	 * @param integer $count How many sentences to return.
	 * @return array
	 */
	static public function sentences($count = 3) {
		$sentences = array();
		for ($i = 0; $i < $count; $i++) {
			$sentences[] = self::sentence();
		}

		return $sentences;
	}

	/**
	 * Return a paragraph.
	 *
	 * @param integer $sentenceCount How many words to use, is varied with 0 to 3 more
	 * @return string
	 */
	static public function paragraph($sentenceCount = 3) {
		return implode(' ', self::sentences($sentenceCount + rand(0, 3)));
	}

	/**
	 * Return some paragraphs.
	 *
	 * @param integer $count How many paragraphs to return.
	 * @return array
	 */
	static public function paragraphs($count = 3) {
		$paragraphs = array();
		for ($i = 0; $i < $count; $i++) {
			$paragraphs[] = self::paragraph();
		}

		return $paragraphs;
	}
}