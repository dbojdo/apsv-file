<?php
namespace Webit\Parser\Apsv\Parser;

use Webit\Parser\Sps\Parser\RowParserProvider as SpsRowParserProvider;
use Webit\Parser\Sps\Parser\RowParser;
use Webit\Parser\Sps\Parser\RowHParser;
use Webit\Parser\FixedWidth\Parser\Parser as FixedWidthParser;

use Webit\Parser\FixedWidth\RowConfig\YamlDriver;

class RowParserProvider extends SpsRowParserProvider {
	public function __construct($definitionsDir = null, $apsvVersion = Apsv::VERSION_428) {
		parent::__construct($definitionsDir);
		$this->apsvVersion = $apsvVersion;
	}
	
	protected function buildParsers() {
		$hParser = new RowHParser($this->fwParser);
			$rowDef = $this->driver->buildRow($this->definitionsDir.'/RowH.yml');
			$hParser->registerRowDefinition($rowDef, 'H');
		
			$rowDef = $this->driver->buildRow($this->definitionsDir.'/RowH26.yml');
			$hParser->registerRowDefinition($rowDef, 'H26');
		$this->parsers['H'] = $hParser;
		
		$aParser = new RowParser($this->fwParser);
			if($this->apsvVersion == Apsv::VERSION_428) {
				$rowDef = $this->driver->buildRow($this->definitionsDir.'/RowA.yml');
			} else {
				$rowDef = $this->driver->buildRow($this->definitionsDir.'/RowA_'.$this->apsvVersion.'.yml');
			}
			$aParser->registerRowDefinition($rowDef, 'A');
		
		$this->parsers['A'] = $aParser;
	}
}
?>
