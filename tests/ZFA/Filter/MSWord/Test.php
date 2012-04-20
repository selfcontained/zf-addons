<?php
//add vendor path for travis-ci zf export
set_include_path(implode(PATH_SEPARATOR, array(
	realpath(__DIR__.'/../../../../vendor/'),
	get_include_path()
)));
require_once('Zend/Filter/Interface.php');
require(realpath(__DIR__.'/../../../../lib/ZFA/Filter/MSWord.php'));

class ZFA_Filter_MSWord_Test extends PHPUnit_Framework_TestCase {

	public function testDoubleOpen() {
		$this->assertEquals('"', $this->convert('“'));
	}

	public function testDoubleClose() {
		$this->assertEquals('"', $this->convert('”'));
	}

	public function testSingleOpen() {
		$this->assertEquals("'", $this->convert("‘"));
	}

	public function testSingleClose() {
		$this->assertEquals("'", $this->convert("’"));
	}

	public function testEMDash() {
		$this->assertEquals('-', $this->convert('–'));
	}

	public function testNDash() {
		$this->assertEquals('-', $this->convert('—'));
	}

	public function testElipsis() {
		$this->assertEquals('...', $this->convert('…'));
	}

	protected function convert($val) {
		$filter = new ZFA_Filter_MSWord();
		return $filter->filter($val);
	}
}
