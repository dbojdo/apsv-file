<?php
namespace Webit\Parser\Apsv\File;

use Webit\Tools\FileSystem\FileReader;

class ApsvVersionGuesser {
	static public function guessVersion($file) {
		$line = trim(FileReader::readLastLine($file,true));
		switch(true) {
			case strlen($line) > 130:
				return Apsv::VERSION_428;
			break;
			default:
				return Apsv::VERSION_408;
		}
	}
}