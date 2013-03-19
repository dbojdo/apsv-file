<?php
namespace Webit\Parser\Apsv\Parser;

use Webit\Parser\Apsv\File\Apsv;
use Webit\Parser\Sps\Parser\Parser as SpsParser;
use Webit\Parser\Sps\Parser\RowParserProviderInterface;

class Parser extends SpsParser {
	public function __construct(RowParserProviderInterface $rowParserProvider = null) {
		$this->rowParserProvider = $rowParserProvider ?: new RowParserProvider();
	}
	
	protected function createSps($type, $pathname) {
		switch($type) {
			case Apsv::SPS_TYPE_APSV:
				$apsv = new Apsv($pathname, $this->rowParserProvider->getApsvVersion());
				return $apsv;
				break;
		}
	
		return null;
	}
}
?>
