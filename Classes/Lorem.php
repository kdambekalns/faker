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
 * Lorem class for the Faker package
 *
 * The Faker package is based on http://faker.rubyforge.org/
 *
 * @version $Id$
 * @license http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License', version 3 or later
 */

class Lorem extends Faker {

	static protected $words = array('alias', 'consequatur', 'aut', 'perferendis', 'sit', 'voluptatem', 'accusantium', 'doloremque', 'aperiam', 'eaque', 'ipsa', 'quae', 'ab', 'illo', 'inventore', 'veritatis', 'et', 'quasi', 'architecto', 'beatae', 'vitae', 'dicta', 'sunt', 'explicabo', 'aspernatur', 'aut', 'odit', 'aut', 'fugit', 'sed', 'quia', 'consequuntur', 'magni', 'dolores', 'eos', 'qui', 'ratione', 'voluptatem', 'sequi', 'nesciunt', 'neque', 'dolorem', 'ipsum', 'quia', 'dolor', 'sit', 'amet', 'consectetur', 'adipisci', 'velit', 'sed', 'quia', 'non', 'numquam', 'eius', 'modi', 'tempora', 'incidunt', 'ut', 'labore', 'et', 'dolore', 'magnam', 'aliquam', 'quaerat', 'voluptatem', 'ut', 'enim', 'ad', 'minima', 'veniam', 'quis', 'nostrum', 'exercitationem', 'ullam', 'corporis', 'nemo', 'enim', 'ipsam', 'voluptatem', 'quia', 'voluptas', 'sit', 'suscipit', 'laboriosam', 'nisi', 'ut', 'aliquid', 'ex', 'ea', 'commodi', 'consequatur', 'quis', 'autem', 'vel', 'eum', 'iure', 'reprehenderit', 'qui', 'in', 'ea', 'voluptate', 'velit', 'esse', 'quam', 'nihil', 'molestiae', 'et', 'iusto', 'odio', 'dignissimos', 'ducimus', 'qui', 'blanditiis', 'praesentium', 'laudantium', 'totam', 'rem', 'voluptatum', 'deleniti', 'atque', 'corrupti', 'quos', 'dolores', 'et', 'quas', 'molestias', 'excepturi', 'sint', 'occaecati', 'cupiditate', 'non', 'provident', 'sed', 'ut', 'perspiciatis', 'unde', 'omnis', 'iste', 'natus', 'error', 'similique', 'sunt', 'in', 'culpa', 'qui', 'officia', 'deserunt', 'mollitia', 'animi', 'id', 'est', 'laborum', 'et', 'dolorum', 'fuga', 'et', 'harum', 'quidem', 'rerum', 'facilis', 'est', 'et', 'expedita', 'distinctio', 'nam', 'libero', 'tempore', 'cum', 'soluta', 'nobis', 'est', 'eligendi', 'optio', 'cumque', 'nihil', 'impedit', 'quo', 'porro', 'quisquam', 'est', 'qui', 'minus', 'id', 'quod', 'maxime', 'placeat', 'facere', 'possimus', 'omnis', 'voluptas', 'assumenda', 'est', 'omnis', 'dolor', 'repellendus', 'temporibus', 'autem', 'quibusdam', 'et', 'aut', 'consequatur', 'vel', 'illum', 'qui', 'dolorem', 'eum', 'fugiat', 'quo', 'voluptas', 'nulla', 'pariatur', 'at', 'vero', 'eos', 'et', 'accusamus', 'officiis', 'debitis', 'aut', 'rerum', 'necessitatibus', 'saepe', 'eveniet', 'ut', 'et', 'voluptates', 'repudiandae', 'sint', 'et', 'molestiae', 'non', 'recusandae', 'itaque', 'earum', 'rerum', 'hic', 'tenetur', 'a', 'sapiente', 'delectus', 'ut', 'aut', 'reiciendis', 'voluptatibus', 'maiores', 'doloribus', 'asperiores', 'repellat');

	static public function words($count = 3) {
		return array_intersect_key(self::$words, array_flip(array_rand(self::$words, $count)));
	}

	static public function sentence($wordCount = 4) {
		return ucfirst(implode(' ', self::words($wordCount + rand(0, 6)))) . '.';
	}

	static public function sentences($count = 3) {
		$sentences = array();
		for ($i = 0; $i < $count; $i++) {
			$sentences[] = self::sentence();
		}
		return $sentences;
	}

	static public function paragraph($sentenceCount = 3) {
		return implode(' ', self::sentences($sentenceCount + rand(0,3)));
	}

	static public function paragraphs($count = 3) {
		$paragraphs = array();
		for ($i = 0; $i < $count; $i++) {
			$paragraphs[] = self::paragraph();
		}
		return $paragraphs;
	}

}
?>