<?php
namespace TYPO3\Faker\Controller;

/*                                                                        *
 * This script belongs to the Flow package "Faker".                       *
 *                                                                        *
 * It is free software; you can redistribute it and/or modify it under    *
 * the terms of the GNU Lesser General Public License, either version 3   *
 * of the License, or (at your option) any later version.                 *
 *                                                                        *
 * The TYPO3 project - inspiring people to share!                         *
 *                                                                        */

use TYPO3\Faker\Address;
use TYPO3\Faker\Company;
use TYPO3\Faker\Date;
use TYPO3\Faker\Internet;
use TYPO3\Faker\Lorem;
use TYPO3\Faker\Name;
use TYPO3\Faker\Phone;

/**
 * Standard controller for the Faker package
 */
class StandardController extends \TYPO3\Flow\Mvc\Controller\ActionController {

	/**
	 * Generate and assign some fake data.
	 *
	 * @return void
	 * @author Karsten Dambekalns <karsten@typo3.org>
	 */
	public function indexAction() {
		$this->view->assign('dates', array(
				Date::random(),
				Date::random('+ 1 hour'),
				Date::random('+ 10 minutes', '+ 6 weeks'),
				Date::random('+ 10 minutes', '+ 6 weeks', new \DateTime('- 1 year')),
			)
		);
		$this->view->assign('names', array(
				Name::fullName(),
				Name::fullName(),
				Name::fullName(),
				Name::fullName(),
				Name::fullName()
			)
		);
		$this->view->assign('emails', array(
				Internet::email(),
				Internet::email(),
				Internet::email(),
				Internet::email(),
				Internet::email(),
				Internet::freeEmail(),
				Internet::freeEmail(),
				Internet::freeEmail(),
				Internet::freeEmail(),
				Internet::freeEmail()
			)
		);
		$this->view->assign('domains', array(
				Internet::domainName(),
				Internet::domainName(),
				Internet::domainName(),
				Internet::domainName(),
				Internet::domainName()
			)
		);
		$this->view->assign('companies', array(
				Company::name(),
				Company::name(),
				Company::name(),
				Company::name(),
				Company::name(),
				Company::name()
			)
		);
		$this->view->assign('addresses', array(
				Address::streetAddress() . ', ' . Address::zipCode() . ' ' . Address::city() . ', ' . Address::usState(),
				Address::streetAddress() . ', ' . Address::zipCode() . ' ' . Address::city() . ', ' . Address::usStateCode(),
				Address::streetAddress() . ', ' . Address::zipCode() . ' ' . Address::city() . ', ' . Address::usState(),
				Address::streetAddress() . ', ' . Address::zipCode() . ' ' . Address::city() . ', ' . Address::usStateCode(),
				Address::streetAddress(TRUE) . ', ' . Address::zipCode() . ' ' . Address::city() . ', ' . Address::usState(),
				Address::streetAddress(TRUE) . ', ' . Address::zipCode() . ' ' . Address::city() . ', ' . Address::usState(),
				Address::streetAddress() . ', ' . Address::ukZipCode() . ' ' . Address::city() . ', ' . Address::ukCounty(),
				Address::streetAddress() . ', ' . Address::ukZipCode() . ' ' . Address::city() . ', ' . Address::ukCountry(),
				Address::streetAddress() . ', ' . Address::ukZipCode() . ' ' . Address::city() . ', ' . Address::ukCounty(),
				Address::streetAddress() . ', ' . Address::ukZipCode() . ' ' . Address::city() . ', ' . Address::ukCountry()
			)
		);
		$this->view->assign('phoneNumbers', array(
				Phone::number(),
				Phone::number(),
				Phone::number(),
				Phone::number(),
				Phone::number()
			)
		);
		$this->view->assign('lorem', array(
				Lorem::sentence(),
				Lorem::sentence(),
				Lorem::paragraph(),
				Lorem::paragraph()
			)
		);
		$this->view->assign('catchphrases', array(
				Company::catchPhrase(),
				Company::catchPhrase(),
				Company::catchPhrase(),
			)
		);
		$this->view->assign('bss', array(
				Company::bs(),
				Company::bs(),
				Company::bs(),
			)
		);
	}
}