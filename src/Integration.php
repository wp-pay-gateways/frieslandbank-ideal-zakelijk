<?php

/**
 * Title: Friesland Bank - iDEAL Zakelijk integration
 * Description:
 * Copyright: Copyright (c) 2005 - 2015
 * Company: Pronamic
 * @author Remco Tolsma
 * @version 1.0.0
 */
class Pronamic_WP_Pay_Gateways_FrieslandBank_IDealZakelijk_Integration extends Pronamic_WP_Pay_Gateways_IDealBasic_AbstractIntegration {
	public function __construct() {
		parent::__construct();

		$this->id         = 'frieslandbank-ideal-zakelijk';
		$this->name       = 'Friesland Bank - iDEAL Zakelijk';
		$this->provider   = 'frieslandbank';
		$this->deprecated = true;
	}

	public function get_config_factory_class() {
		return 'Pronamic_WP_Pay_Gateways_FrieslandBank_IDealZakelijk_ConfigFactory';
	}
}
