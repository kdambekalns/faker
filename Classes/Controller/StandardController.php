<?php
declare(ENCODING = 'utf-8');
namespace F3\Faker\Controller;

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
 * Standard controller for the Faker package
 *
 * @license http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class StandardController extends \F3\FLOW3\MVC\Controller\ActionController {

	/**
	 * Generate and assign some fake data.
	 *
	 * @return void
	 * @author Karsten Dambekalns <karsten@typo3.org>
	 */
	public function indexAction() {
		$this->view->assign('dates', array(
				\F3\Faker\Date::random(),
				\F3\Faker\Date::random('+ 1 hour'),
				\F3\Faker\Date::random('+ 10 minutes', '+ 6 weeks'),
				\F3\Faker\Date::random('+ 10 minutes', '+ 6 weeks', new \DateTime('- 1 year')),
			)
		);
		$this->view->assign('names', array(
				\F3\Faker\Name::fullName(),
				\F3\Faker\Name::fullName(),
				\F3\Faker\Name::fullName(),
				\F3\Faker\Name::fullName(),
				\F3\Faker\Name::fullName()
			)
		);
		$this->view->assign('emails', array(
				\F3\Faker\Internet::email(),
				\F3\Faker\Internet::email(),
				\F3\Faker\Internet::email(),
				\F3\Faker\Internet::email(),
				\F3\Faker\Internet::email(),
				\F3\Faker\Internet::freeEmail(),
				\F3\Faker\Internet::freeEmail(),
				\F3\Faker\Internet::freeEmail(),
				\F3\Faker\Internet::freeEmail(),
				\F3\Faker\Internet::freeEmail()
			)
		);
		$this->view->assign('domains', array(
				\F3\Faker\Internet::domainName(),
				\F3\Faker\Internet::domainName(),
				\F3\Faker\Internet::domainName(),
				\F3\Faker\Internet::domainName(),
				\F3\Faker\Internet::domainName()
			)
		);
		$this->view->assign('companies', array(
				\F3\Faker\Company::name(),
				\F3\Faker\Company::name(),
				\F3\Faker\Company::name(),
				\F3\Faker\Company::name(),
				\F3\Faker\Company::name(),
				\F3\Faker\Company::name()
			)
		);
		$this->view->assign('addresses', array(
				\F3\Faker\Address::streetAddress() . ', ' . \F3\Faker\Address::zipCode() . ' ' . \F3\Faker\Address::city() . ', ' . \F3\Faker\Address::usState(),
				\F3\Faker\Address::streetAddress() . ', ' . \F3\Faker\Address::zipCode() . ' ' . \F3\Faker\Address::city() . ', ' . \F3\Faker\Address::usStateCode(),
				\F3\Faker\Address::streetAddress() . ', ' . \F3\Faker\Address::zipCode() . ' ' . \F3\Faker\Address::city() . ', ' . \F3\Faker\Address::usState(),
				\F3\Faker\Address::streetAddress() . ', ' . \F3\Faker\Address::zipCode() . ' ' . \F3\Faker\Address::city() . ', ' . \F3\Faker\Address::usStateCode(),
				\F3\Faker\Address::streetAddress(TRUE) . ', ' . \F3\Faker\Address::zipCode() . ' ' . \F3\Faker\Address::city() . ', ' . \F3\Faker\Address::usState(),
				\F3\Faker\Address::streetAddress(TRUE) . ', ' . \F3\Faker\Address::zipCode() . ' ' . \F3\Faker\Address::city() . ', ' . \F3\Faker\Address::usState(),
				\F3\Faker\Address::streetAddress() . ', ' . \F3\Faker\Address::ukZipCode() . ' ' . \F3\Faker\Address::city() . ', ' . \F3\Faker\Address::ukCounty(),
				\F3\Faker\Address::streetAddress() . ', ' . \F3\Faker\Address::ukZipCode() . ' ' . \F3\Faker\Address::city() . ', ' . \F3\Faker\Address::ukCountry(),
				\F3\Faker\Address::streetAddress() . ', ' . \F3\Faker\Address::ukZipCode() . ' ' . \F3\Faker\Address::city() . ', ' . \F3\Faker\Address::ukCounty(),
				\F3\Faker\Address::streetAddress() . ', ' . \F3\Faker\Address::ukZipCode() . ' ' . \F3\Faker\Address::city() . ', ' . \F3\Faker\Address::ukCountry()
			)
		);
		$this->view->assign('phoneNumbers', array(
				\F3\Faker\Phone::number(),
				\F3\Faker\Phone::number(),
				\F3\Faker\Phone::number(),
				\F3\Faker\Phone::number(),
				\F3\Faker\Phone::number()
			)
		);
		$this->view->assign('lorem', array(
				\F3\Faker\Lorem::sentence(),
				\F3\Faker\Lorem::sentence(),
				\F3\Faker\Lorem::paragraph(),
				\F3\Faker\Lorem::paragraph()
			)
		);
		$this->view->assign('catchphrases', array(
				\F3\Faker\Company::catchPhrase(),
				\F3\Faker\Company::catchPhrase(),
				\F3\Faker\Company::catchPhrase(),
			)
		);
		$this->view->assign('bss', array(
				\F3\Faker\Company::bs(),
				\F3\Faker\Company::bs(),
				\F3\Faker\Company::bs(),
			)
		);
	}
}
?>