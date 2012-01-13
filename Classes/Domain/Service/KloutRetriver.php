<?php 
/***************************************************************
*  Copyright notice
*
*  (c) 2012 Tomita Militaru <tomita.militaru@gmail.com>
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/

/**
 * A simple klout data retriver
 */
class Tx_BlogExample_Domain_Service_BlogFactory implements t3lib_Singleton {
	
	/*
	 * @var string
	 */
	protected $apiKey = '';
	
	public function __contruct(string $apiKey) {
		$this->apiKey = $apiKey;
	}
	
	/*
	 * Get one or more Klout user profiles
	 * 
	 * @param string $twitter_screen_name One or more twitter screen names separated by 
	 * comma
	 * @return array Tx_Domain_Model_User
	 */	
	public function showUser($twitter_screen_names) {
		
		$apiUrl = 'http://api.klout.com/1/klout.xml?users=' . 
			$twitter_screen_names . '&key=' . $this->apiKey;
		$doc = new DOMDocument();
        $data = @file_get_contents($apiUrl);
        //debug($xmlFile); 
        $doc->loadXML($data);
	    $doc->saveXML();
		
		$users = $doc->getElementsByTagName('users')->item(0)->getElementsByTagName('user');
		$usersArr = array();
		foreach($users as $user) {
			$twitter_screen_name = $user->getElementsByTagName('twitter_screen_name')->item(0);
			$twitter_id = $user->getElementsByTagName('twitter_id')->item(0);
			$kscore = $user->getElementsByTagName('kscore')->item(0);
			$slope = $user->getElementsByTagName('slope')->item(0); 
			$kscore_description = $user->getElementsByTagName('kscore_description')->item(0);
			$network_score = $user->getElementsByTagName('network_description')->item(0);
			$amplification_score = $user->getElementsByTagName('amplification_score')->item(0);
			$true_reach = $user->getElementsByTagName('true_reach')->item(0);
			$kclass = $user->getElementsByTagName('kclass')->item(0);
			$kclass_description = $user->getElementsByTagName('kclass_description')->item(0);
			$delta_1day = $user->getElementsByTagName('delta_1day')->item(0);
			$delta_5day = $user->getElementsByTagName('delta_5day')->item(0);
			
			$usersArr[] = new Tx_AxKlout_Domain_Model_User();
 		}
		
	}

	public function kloutScore($twitter_screen_name) {
		
	}
	
	public function topics($twitter_screen_name) {
		
	}
	
	public function influencedBy($twitter_screen_name) {
		
	}
	
	public function influencerOf($twitter_screen_name) {
		
	}
}