<?php
/* we cannot make the object of abstract class.
*/

abstract class BaseEmployee {
	protected $firstName;
	protected $lastName;

	public function getFullName(){
		return $this->firstName . " " . $this->lastName;
	}

	abstract public function getMonthlySalary();

	public function __construct($f,$l)
	{
		$this->firstName = $f;
		$this->lastName = $l;
	}
}

class FullTimeEmployee extends BaseEmployee{
	protected $annualSalary;

	public function getMonthlySalary()
	{
		return $this->annualSalary/12;
	}

}

class ContractEmploy extends BaseEmployee{
	protected $hourlyRate;
	protected $totalHours;

	public function getMonthlySalary()
	{
		return $this->hourlyRate * $this->totalHours;
	}
}

$fulltime = new FullTimeEmployee("pardeep", "kumar");
$ContractEmploy = new ContractEmploy("raman", "sinha");

echo $fulltime->getFullName();
echo $ContractEmploy->getFullName();