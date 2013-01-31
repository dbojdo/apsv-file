<?php 
namespace Webit\Parser\Apsv\File;
use Webit\Parser\Sps\File\SpsAbstract;

class Apsv extends SpsAbstract {
	const SPS_TYPE_APSV = 'A';
	
	/**
	 * 
	 * @return string
	 */
	public function getSpsType() {
		return self::SPS_TYPE_APSV;
	}
	
	
	/**
	 *
	 * @return DateTime|NULL
	 */
	public function getSurveyDateFrom() {	
		return null;
	}
	
	/**
	 *
	 * @return DateTime|NULL
	 */
	public function getSurveyDataTo() {
		return null;
	}
	
	/**
	 *
	 * @return DateTime|NULL
	 */
	public function getIssueDate() {
		return null;
	}
}
?>
