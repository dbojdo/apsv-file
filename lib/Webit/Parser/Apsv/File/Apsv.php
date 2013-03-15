<?php 
namespace Webit\Parser\Apsv\File;

use Webit\Parser\Sps\Row\RowS;
use Webit\Parser\Apsv\Row\RowA;
use Webit\Parser\Sps\File\SpsAbstract;

class Apsv extends SpsAbstract {
	const VERSION_408 = '408';
	const VERSION_428 = '428';
	
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
	
	/**
	 * 
	 * @param RowS $row
	 * @return array
	 */
	public function getRowsForRowS(RowS $row) {
		$arRows = array_filter($this->rows,function($rowA) use ($row) {
			if($rowA instanceof RowA) {
				return $rowA->isRelatedTo($row);
			}
				
			return false;
		});
		
		return $arRows;
	}
}
?>
