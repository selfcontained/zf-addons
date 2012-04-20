<?php
/**
 *
 * @package ZFA_Filter
 */
class ZFA_Filter_MSWord implements Zend_Filter_Interface {

	/**
	 * Array of MS Word characters and replacements
	 * @var array
	 */
	protected static $replacements = array(
		'‘' => "'",
		'’' => "'",
		'“' => '"',
		'”' => '"',
		'–' => '-',
		'—' => '-',
		'…' => '...'
	);

	/**
	 * Convert MS Word special characters into utf8 equivalents
	 *
	 * @param string $value
	 * @return string
	 */
	public function filter($value) {
		return str_replace(
			array_keys(self::$replacements),
			array_values(self::$replacements), $value
		);
	}

}
