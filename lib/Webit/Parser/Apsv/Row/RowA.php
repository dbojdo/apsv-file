<?php
namespace Webit\Parser\Apsv\Row;
use Webit\Parser\Sps\Row\RowS;
use Webit\Parser\Sps\Row\RowDataAbstract;

class RowA extends RowDataAbstract {
	protected $lineName;

	protected $pointNumber;

	protected $pointIndex;

	protected $fleetNumber;

	protected $vibratorNumber;

	protected $vibratorDriveLevel;

	protected $averagePhase;

	protected $peakPhase;

	protected $averageDistortion;

	protected $peadDistortion;

	protected $averageForce;

	protected $peakForce;

	protected $averageGroundStiffness;

	protected $averageGroundViscosity;

	protected $positionEasting;

	protected $positionNorthing;

	protected $positionElevation;

	protected $shotNb;

	protected $acquisitionNb;

	protected $twoDigitsFleetNumber;

	protected $vibStatusCode;

	protected $mass1Warning;

	protected $mass2Warning;

	protected $mass3Warning;

	protected $plate1Warning;

	protected $plate2Warning;

	protected $plate3Warning;

	protected $plate4Warning;

	protected $plate5Warning;

	protected $plate6Warning;

	protected $forceOverload;

	protected $pressureOverload;

	protected $massOverload;

	protected $valveOverload;

	protected $excitationOverload;

	protected $stackingFold;

	protected $computationDomain;

	protected $ve432Version;

	protected $dayOfYear;

	protected $time;

	protected $hdop;

	protected $tbDate;

	public function getLineName() {
		return $this->lineName;
	}

	public function setLineName($lineName) {
		$this->lineName = $lineName;
	}

	public function getPointNumber() {
		return $this->pointNumber;
	}

	public function setPointNumber($pointNumber) {
		$this->pointNumber = $pointNumber;
	}

	public function getPointIndex() {
		return $this->pointIndex;
	}

	public function setPointIndex($pointIndex) {
		$this->pointIndex = $pointIndex;
	}

	public function getFleetNumber() {
		return $this->fleetNumber;
	}

	public function setFleetNumber($fleetNumber) {
		$this->fleetNumber = $fleetNumber;
	}

	public function getVibratorNumber() {
		return $this->vibratorNumber;
	}

	public function setVibratorNumber($vibratorNumber) {
		$this->vibratorNumber = $vibratorNumber;
	}

	public function getVibratorDriveLevel() {
		return $this->vibratorDriveLevel;
	}

	public function setVibratorDriveLevel($vibratorDriveLevel) {
		$this->vibratorDriveLevel = $vibratorDriveLevel;
	}

	public function getAveragePhase() {
		return $this->averagePhase;
	}

	public function setAveragePhase($averagePhase) {
		$this->averagePhase = $averagePhase;
	}

	public function getPeakPhase() {
		return $this->peakPhase;
	}

	public function setPeakPhase($peakPhase) {
		$this->peakPhase = $peakPhase;
	}

	public function getAverageDistortion() {
		return $this->averageDistortion;
	}

	public function setAverageDistortion($averageDistortion) {
		$this->averageDistortion = $averageDistortion;
	}

	public function getPeadDistortion() {
		return $this->peadDistortion;
	}

	public function setPeadDistortion($peadDistortion) {
		$this->peadDistortion = $peadDistortion;
	}

	public function getAverageForce() {
		return $this->averageForce;
	}

	public function setAverageForce($averageForce) {
		$this->averageForce = $averageForce;
	}

	public function getPeakForce() {
		return $this->peakForce;
	}

	public function setPeakForce($peakForce) {
		$this->peakForce = $peakForce;
	}

	public function getAverageGroundStiffness() {
		return $this->averageGroundStiffness;
	}

	public function setAverageGroundStiffness($averageGroundStiffness) {
		$this->averageGroundStiffness = $averageGroundStiffness;
	}

	public function getAverageGroundViscosity() {
		return $this->averageGroundViscosity;
	}

	public function setAverageGroundViscosity($averageGroundViscosity) {
		$this->averageGroundViscosity = $averageGroundViscosity;
	}

	public function getPositionEasting() {
		return $this->positionEasting;
	}

	public function setPositionEasting($positionEasting) {
		$this->positionEasting = $positionEasting;
	}

	public function getPositionNorthing() {
		return $this->positionNorthing;
	}

	public function setPositionNorthing($positionNorthing) {
		$this->positionNorthing = $positionNorthing;
	}

	public function getPositionElevation() {
		return $this->positionElevation;
	}

	public function setPositionElevation($positionElevation) {
		$this->positionElevation = $positionElevation;
	}

	public function getShotNb() {
		return $this->shotNb;
	}

	public function setShotNb($shotNb) {
		$this->shotNb = $shotNb;
	}

	public function getAcquisitionNb() {
		return $this->acquisitionNb;
	}

	public function setAcquisitionNb($acquisitionNb) {
		$this->acquisitionNb = $acquisitionNb;
	}

	public function getTwoDigitsFleetNumber() {
		return $this->twoDigitsFleetNumber;
	}

	public function setTwoDigitsFleetNumber($twoDigitsFleetNumber) {
		$this->twoDigitsFleetNumber = $twoDigitsFleetNumber;
	}

	public function getVibStatusCode() {
		return $this->vibStatusCode;
	}

	public function setVibStatusCode($vibStatusCode) {
		$this->vibStatusCode = $vibStatusCode;
	}

	public function getMass1Warning() {
		return $this->mass1Warning;
	}

	public function setMass1Warning($mass1Warning) {
		$this->mass1Warning = $mass1Warning;
	}

	public function getMass2Warning() {
		return $this->mass2Warning;
	}

	public function setMass2Warning($mass2Warning) {
		$this->mass2Warning = $mass2Warning;
	}

	public function getMass3Warning() {
		return $this->mass3Warning;
	}

	public function setMass3Warning($mass3Warning) {
		$this->mass3Warning = $mass3Warning;
	}

	public function getPlate1Warning() {
		return $this->plate1Warning;
	}

	public function setPlate1Warning($plate1Warning) {
		$this->plate1Warning = $plate1Warning;
	}

	public function getPlate2Warning() {
		return $this->plate2Warning;
	}

	public function setPlate2Warning($plate2Warning) {
		$this->plate2Warning = $plate2Warning;
	}

	public function getPlate3Warning() {
		return $this->plate3Warning;
	}

	public function setPlate3Warning($plate3Warning) {
		$this->plate3Warning = $plate3Warning;
	}

	public function getPlate4Warning() {
		return $this->plate4Warning;
	}

	public function setPlate4Warning($plate4Warning) {
		$this->plate4Warning = $plate4Warning;
	}

	public function getPlate5Warning() {
		return $this->plate5Warning;
	}

	public function setPlate5Warning($plate5Warning) {
		$this->plate5Warning = $plate5Warning;
	}

	public function getPlate6Warning() {
		return $this->plate6Warning;
	}

	public function setPlate6Warning($plate6Warning) {
		$this->plate6Warning = $plate6Warning;
	}

	public function getForceOverload() {
		return $this->forceOverload;
	}

	public function setForceOverload($forceOverload) {
		$this->forceOverload = $forceOverload;
	}

	public function getPressureOverload() {
		return $this->pressureOverload;
	}

	public function setPressureOverload($pressureOverload) {
		$this->pressureOverload = $pressureOverload;
	}

	public function getMassOverload() {
		return $this->massOverload;
	}

	public function setMassOverload($massOverload) {
		$this->massOverload = $massOverload;
	}

	public function getValveOverload() {
		return $this->valveOverload;
	}

	public function setValveOverload($valveOverload) {
		$this->valveOverload = $valveOverload;
	}

	public function getExcitationOverload() {
		return $this->excitationOverload;
	}

	public function setExcitationOverload($excitationOverload) {
		$this->excitationOverload = $excitationOverload;
	}

	public function getStackingFold() {
		return $this->stackingFold;
	}

	public function setStackingFold($stackingFold) {
		$this->stackingFold = $stackingFold;
	}

	public function getComputationDomain() {
		return $this->computationDomain;
	}

	public function setComputationDomain($computationDomain) {
		$this->computationDomain = $computationDomain;
	}

	public function getVe432Version() {
		return $this->ve432Version;
	}

	public function setVe432Version($ve432Version) {
		$this->ve432Version = $ve432Version;
	}

	public function getDayOfYear() {
		return $this->dayOfYear;
	}

	public function setDayOfYear($dayOfYear) {
		$this->dayOfYear = $dayOfYear;
	}

	public function getTime() {
		return $this->time;
	}

	public function setTime($time) {
		$this->time = $time;
	}

	public function getHdop() {
		return $this->hdop;
	}

	public function setHdop($hdop) {
		$this->hdop = $hdop;
	}

	public function getTbDate() {
		return $this->tbDate;
	}

	public function setTbDate($tbDate) {
		$this->tbDate = $tbDate;
	}
	
	/**
	 * 
	 * @param RowS $rowS
	 * @return boolean
	 */
	public function isRelatedTo(RowS $rowS) {
		return $rowS->getLineName() == $this->getLineName()
			&& $rowS->getPointNumber() == $this->getPointNumber()
			&& $rowS->getPointIndex() == $this->getPointIndex();
	}
}
?>
