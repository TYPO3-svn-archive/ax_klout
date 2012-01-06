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
 * The User model for the ax_klout package
 *
 * @version $Id:$
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License, version 2
 */
class Tx_AxKlout_Domain_Model_User extends Tx_ExtBase_DomainObject_AbstractEntity {
	/*
	 * @var string
	 */
	protected $twitter_screen_name = '';
	/*
	 * @var int
	 */
	protected $twitter_id = 0;
	/*
	 * @var int
	 */
	protected $kscore = 0;
	/*
	 * @var int
	 */
	protected $slope = 0;
	/*
	 * @var string
	 */
	protected $kscore_description = '';
	/*
	 * @var int
	 */
	protected $network_score = 0;
	/*
	 * @var int
	 */
	protected $amplification_score = 0;
	/*
	 * @var int
	 */
	protected $true_reach = 0;
	/*
	 * @var int
	 */
	protected $kclass = 0;
	/*
	 * @var string
	 */
	protected $kclass_description = '';
	/*
	 * @var int
	 */
	protected $delta_1day = 0;
	/*
	 * @var int
	 */
	protected $delta_5day = 0;
	
	/*
	 * Default constructor
	 *
	 * @param string $twitter_screen_name
	 * @param int $twitter_id
	 * @param int $kscore
	 * @param int $slope
	 * @param string $kscore_description
	 * @param int $network_score
	 * @param int $amplification_score = 0
	 * @param int $true_reach
	 * @param int $kclass = 0
	 * @param string $kclass_description
	 * @param int $delta_1day
	 * @param int $delta_5day
	 * 
	 * @return void
	 */
	public function __contruct($twitter_screen_name = '', $twitter_id = 0, $kscore = 0, $slope = 0, 
			$kscore_description = '', $network_score = 0, $amplification_score = 0, $true_reach = 0,
			$kclass = 0, $kclass_description = '', $delta_1day = 0, $delta_5day = 0) {
				
		$this->twitter_screen_name = $twitter_screen_name;
		$this->twitter_id = $twitter_id;
		$this->kscore = $kscore;
		$this->slope = $slope;
		$this->kscore_description = $kscore_description;
		$this->network_score = $network_score;
		$this->amplification_score = $amplification_score;
		$this->true_reach = $true_reach;
		$this->kclass = $kclass;
		$this->kclass_description = $kclass_description;
		$this->delta_1day = $delta_1day;
		$this->delta_5day = $delta_5day;
	}
			
	/*
	 * @param string $twitter_screen_name
	 */		
	public function setTwitterScreenName($twitter_screen_name) {
		$this->twitter_screen_name = (string)$twitter_screen_name;
	}
	
	/*
	 * @return string
	 */
	public function getTwitterScreenName() {
		return $this->twitter_screen_name;
	}
	/*
	 * @param int $twitter_id
	 */
	public function setTwitterId($twitter_id) {
		$this->twitter_id = (int)$twitter_id;
	}
	
	public function getTwitterId() {
		return $this->twitter_id;
	}
	
	/*
	 * @param int $kscore
	 */
	public function setKScore($kscore) {
		$this->kscore = (int)$kscore;
	}
	
	public function getKScore() {
		return $this->kscore;
	}
	
	/*
	 * @param int $slope
	 */
	public function setSlope($slope) {
		$this->slope = (int)$slope;
	}
	
	public function getSlope($slope) {
		return $this->slope;
	}
	
	/*
	 * @param string $kscore_description
	 */
	public function setKScoreDescription($kscore_description) {
		$this->kscore_description = (string)$kscore_description;
	}
	
	public function getKScoreDescription() {
		return $this->kscore_description;
	}
	
	/*
	 * @param int $network_score
	 */
	public function setNetworkScore($network_score) {
		$this->network_score = (int)$network_score;
	}
	
	public function getNetworkScore() {
		return $this->network_score;
	}
	
	/*
	 * @param int $amplification_score
	 */
	public function setAmplificationScore($amplification_score) {
		$this->amplification_score = (int)$amplification_score;
	}
	
	public function getAmplificationScore() {
		return $this->amplification_score;
	}
	
	/*
	 * @param int $true_reach
	 */
	public function setTrueReach($true_reach) {
		$this->true_reach = (int)$true_reach;
	}
	
	public function getTrueReach() {
		return $this->true_reach;
	}
	
	/*
	 * @param int $kclass
	 */
	public function setKclass($kclass) {
		$this->kclass = (int)$kclass;
	}
	
	public function getKclass() {
		return $this->kclass;
	}
	
	/*
	 * @param string $kclass_description
	 */
	public function setKclassDescription($kclass_description) {
		$this->kclass_description = (string)$kclass_description;
	}
	
	public function getKclassDescription() {
		return $this->kclass_description;
	}
	
	/*
	 * @param int $delta_1day
	 */
	public function setDelta1day($delta_1day) {
		$this->delta_1day = (int)$delta_1day;
	}
	
	public function getDelta1day() {
		return $this->delta_1day;
	}
	
	/*
	 * @param int $delta_5day
	 */
	public function setDelta5day($delta_5day) {
		$this->delta_5day = (int)$delta_5day;
	}
	
	public function getDelta5day() {
		return $this->delta_5day;
	}

}
