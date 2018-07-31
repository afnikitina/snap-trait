<?php


class Instrument {
	private $instrumentName;
	private $instrumentFamily;
	private $instrumentDescription;

	public function __construct(string $newInstrumentName, string $newInstrumentFamily, string $newInstrumentDescription ) {
		try {
			$this->setInstrumentName($newInstrumentName);
			$this->setInstrumentFamily($newInstrumentFamily);
			$this->setInstrumentDescription($newInstrumentDescription);
		} catch(\InvalidArgumentException | \RangeException |\TypeError | \Exception $exception) {
			//determine what exception type was thrown
			$exceptionType = get_class($exception);
			throw(new $exceptionType($exception->getMessage(), 0, $exception));
		}
	}


















}
