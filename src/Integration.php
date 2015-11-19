<?php

class Pronamic_WP_Pay_Gateways_FrieslandBank_IDealZakelijk_Integration extends Pronamic_WP_Pay_Gateways_IDealBasic_AbstractIntegration {
	public function __construct() {
		$this->id         = 'frieslandbank-ideal-zakelijk';
		$this->name       = 'Friesland Bank - iDEAL Zakelijk';
		$this->provider   = 'frieslandbank';
		$this->deprecated = true;
	}
}
