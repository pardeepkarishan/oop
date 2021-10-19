<?php
// interface is like the abstract classed the only differnce is
// we can inherit multiple interfaces.
// we cannot declare variables in interfaces only functions can be declared.
// functions can only be public.

interface a {
	public function calculateSalary($value='');
}

interface B {
	public function calculatePackages($value='');
}

class process implements a, B{
	protected $salary;
}