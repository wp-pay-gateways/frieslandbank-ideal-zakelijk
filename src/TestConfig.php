<?php

/**
 * Title: Friesland Bank - iDEAL Zakelijk config test
 * Description:
 * Copyright: Copyright (c) 2005 - 2015
 * Company: Pronamic
 * @author Remco Tolsma
 * @version 1.0.0
 */
class Pronamic_WP_Pay_Gateways_FrieslandBank_IDealZakelijk_TestConfig extends Pronamic_WP_Pay_Gateways_FrieslandBank_IDealZakelijk_Config {
	public function get_payment_server_url() {
		return 'https://testidealkassa.frieslandbank.nl/ideal/mpiPayInitFriesland.do';
	}
}
