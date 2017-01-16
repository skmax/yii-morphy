<?php
/**
 * phpMophy binding for Yii
 * @author wapmorgan (wapmorgan@gmail.com)
 */
class Morphy extends CApplicationComponent {
	/**
	 * Dictionaries path.
	 * Extract downloaded dicts under this dir.
	 */
	public $dictsPath = 'ext.Morphy.dicts';
	/**
	 * phpMorphy instances
	 */
	private $instances = array();
	/**
	 * phpMorphy storage.
	 * Valid values: file, mem, shm;
	 */
	public $storage = 'file';

	/**
	 * Includes phpMorphy class
	 */
	public function init() {
		parent::init();
		require_once dirname(__FILE__).'/src/common.php';
	}

	/**
	 * Returns phpMorphy object of specific language
	 * @param string $lang Language
	 * @return phpMorphy
	 */
	public function getPhpMorphy($lang) {
		if (isset($this->instances[$lang]))
			return $this->instances[$lang];
		return ($this->instances[$lang] = new phpMorphy(Yii::getPathOfAlias($this->dictsPath).'/', $lang, array(
			'storage' => $this->storage,
		)));
	}
}
