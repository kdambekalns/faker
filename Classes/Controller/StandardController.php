<?php
namespace TYPO3\Faker\Controller;

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
class StandardController extends \TYPO3\FLOW3\MVC\Controller\ActionController {

	/**
	 * Generate and assign some fake data.
	 *
	 * @return void
	 * @author Karsten Dambekalns <karsten@typo3.org>
	 */
	public function indexAction() {
		$this->view->assign('dates', array(
				\TYPO3\Faker\Date::random(),
				\TYPO3\Faker\Date::random('+ 1 hour'),
				\TYPO3\Faker\Date::random('+ 10 minutes', '+ 6 weeks'),
				\TYPO3\Faker\Date::random('+ 10 minutes', '+ 6 weeks', new \DateTime('- 1 year')),
			)
		);
		$this->view->assign('names', array(
				\TYPO3\Faker\Name::fullName(),
				\TYPO3\Faker\Name::fullName(),
				\TYPO3\Faker\Name::fullName(),
				\TYPO3\Faker\Name::fullName(),
				\TYPO3\Faker\Name::fullName()
			)
		);
		$this->view->assign('emails', array(
				\TYPO3\Faker\Internet::email(),
				\TYPO3\Faker\Internet::email(),
				\TYPO3\Faker\Internet::email(),
				\TYPO3\Faker\Internet::email(),
				\TYPO3\Faker\Internet::email(),
				\TYPO3\Faker\Internet::freeEmail(),
				\TYPO3\Faker\Internet::freeEmail(),
				\TYPO3\Faker\Internet::freeEmail(),
				\TYPO3\Faker\Internet::freeEmail(),
				\TYPO3\Faker\Internet::freeEmail()
			)
		);
		$this->view->assign('domains', array(
				\TYPO3\Faker\Internet::domainName(),
				\TYPO3\Faker\Internet::domainName(),
				\TYPO3\Faker\Internet::domainName(),
				\TYPO3\Faker\Internet::domainName(),
				\TYPO3\Faker\Internet::domainName()
			)
		);
		$this->view->assign('companies', array(
				\TYPO3\Faker\Company::name(),
				\TYPO3\Faker\Company::name(),
				\TYPO3\Faker\Company::name(),
				\TYPO3\Faker\Company::name(),
				\TYPO3\Faker\Company::name(),
				\TYPO3\Faker\Company::name()
			)
		);
		$this->view->assign('addresses', array(
				\TYPO3\Faker\Address::streetAddress() . ', ' . \TYPO3\Faker\Address::zipCode() . ' ' . \TYPO3\Faker\Address::city() . ', ' . \TYPO3\Faker\Address::usState(),
				\TYPO3\Faker\Address::streetAddress() . ', ' . \TYPO3\Faker\Address::zipCode() . ' ' . \TYPO3\Faker\Address::city() . ', ' . \TYPO3\Faker\Address::usStateCode(),
				\TYPO3\Faker\Address::streetAddress() . ', ' . \TYPO3\Faker\Address::zipCode() . ' ' . \TYPO3\Faker\Address::city() . ', ' . \TYPO3\Faker\Address::usState(),
				\TYPO3\Faker\Address::streetAddress() . ', ' . \TYPO3\Faker\Address::zipCode() . ' ' . \TYPO3\Faker\Address::city() . ', ' . \TYPO3\Faker\Address::usStateCode(),
				\TYPO3\Faker\Address::streetAddress(TRUE) . ', ' . \TYPO3\Faker\Address::zipCode() . ' ' . \TYPO3\Faker\Address::city() . ', ' . \TYPO3\Faker\Address::usState(),
				\TYPO3\Faker\Address::streetAddress(TRUE) . ', ' . \TYPO3\Faker\Address::zipCode() . ' ' . \TYPO3\Faker\Address::city() . ', ' . \TYPO3\Faker\Address::usState(),
				\TYPO3\Faker\Address::streetAddress() . ', ' . \TYPO3\Faker\Address::ukZipCode() . ' ' . \TYPO3\Faker\Address::city() . ', ' . \TYPO3\Faker\Address::ukCounty(),
				\TYPO3\Faker\Address::streetAddress() . ', ' . \TYPO3\Faker\Address::ukZipCode() . ' ' . \TYPO3\Faker\Address::city() . ', ' . \TYPO3\Faker\Address::ukCountry(),
				\TYPO3\Faker\Address::streetAddress() . ', ' . \TYPO3\Faker\Address::ukZipCode() . ' ' . \TYPO3\Faker\Address::city() . ', ' . \TYPO3\Faker\Address::ukCounty(),
				\TYPO3\Faker\Address::streetAddress() . ', ' . \TYPO3\Faker\Address::ukZipCode() . ' ' . \TYPO3\Faker\Address::city() . ', ' . \TYPO3\Faker\Address::ukCountry()
			)
		);
		$this->view->assign('phoneNumbers', array(
				\TYPO3\Faker\Phone::number(),
				\TYPO3\Faker\Phone::number(),
				\TYPO3\Faker\Phone::number(),
				\TYPO3\Faker\Phone::number(),
				\TYPO3\Faker\Phone::number()
			)
		);
		$this->view->assign('lorem', array(
				\TYPO3\Faker\Lorem::sentence(),
				\TYPO3\Faker\Lorem::sentence(),
				\TYPO3\Faker\Lorem::paragraph(),
				\TYPO3\Faker\Lorem::paragraph()
			)
		);
		$this->view->assign('catchphrases', array(
				\TYPO3\Faker\Company::catchPhrase(),
				\TYPO3\Faker\Company::catchPhrase(),
				\TYPO3\Faker\Company::catchPhrase(),
			)
		);
		$this->view->assign('bss', array(
				\TYPO3\Faker\Company::bs(),
				\TYPO3\Faker\Company::bs(),
				\TYPO3\Faker\Company::bs(),
			)
		);
	}
}
?>