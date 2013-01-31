<?php
namespace Webit\Parser\Apsv\Parser;

use Webit\Parser\Apsv\File\Apsv;
use Webit\Parser\Sps\Parser\Parser as SpsParser;
use Webit\Parser\Sps\Parser\RowParserProviderInterface;

class Parser extends SpsParser {
	public function __construct(RowParserProviderInterface $rowParserProvider = null) {
		$this->rowParserProvider = $rowParserProvider ?: new RowParserProvider(__DIR__.'/../../../../../resources/row_definitions');
	}
	
	protected function createSps($type, $pathname) {
		switch($type) {
			case Apsv::SPS_TYPE_APSV:
				return new Apsv($pathname);
				break;
		}
	
		return null;
	}
}
?>
