<?php

use PHPUnit\Framework\TestCase;

class StaffTest extends TestCase {
	public function testReturnFullName() {
	require("Staff.php");

	$staff = new Staff;

	$staff->first_name = "Lam";
	$staff->last_name = "Huynh";
	
	$this->assertEquals("Lam Huynh", $staff->getFullName());
}

public function testFullNameIsEmptyByDefault() {
	$staff = new Staff;
	$this->assertEquals("", $staff->getFullName());
}

/**
* @test
*/
public function only_first_name() {
	$staff = new Staff;
	$staff->first_name = "HeoCon";
	$this->assertEquals("Lam", $staff->getFullName());
}
}
