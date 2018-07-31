<?php


class Instrument {
	protected $instrumentName;
	protected $instrumentFamily;
	protected $instrumentDescription;
	protected $instrumentHasOwner;

	public function __construct(string $newInstrumentName, string $newInstrumentFamily, string $newInstrumentDescription,
											bool $newInstrumentHasOwner = false) {
		try {
			$this->setInstrumentName($newInstrumentName);
			$this->setInstrumentFamily($newInstrumentFamily);
			$this->setInstrumentDescription($newInstrumentDescription);
			$this->setInstrumentHasOwner($newInstrumentHasOwner);
		} catch(\InvalidArgumentException | \RangeException |\TypeError | \Exception $exception) {
			//determine what exception type was thrown
			$exceptionType = get_class($exception);
			throw(new $exceptionType($exception->getMessage(), 0, $exception));
		}
	}

	public function getInstrumentName() : string {
		return ($this->instrumentName);
	}

	public function setInstrumentName(string $newInstrumentName) {
		//validate instrument name here
		$this->instrumentName = $newInstrumentName;
	}

	public function getInstrumentFamily() : string {
		return ($this->instrumentFamily);
	}

	public function setInstrumentFamily(string $newInstrumentFamily) {
		//validate instrument family here
		$this->instrumentFamily = $newInstrumentFamily;
	}

	public function getInstrumentDescription() : string {
		return ($this->instrumentDescription);
	}

	public function setInstrumentDescription(string $newInstrumentDescription) {
		//validate instrument description here
		$this->instrumentDescription = $newInstrumentDescription;
	}














}
