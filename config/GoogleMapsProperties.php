<?php
/**
 * This file is part of CMSGears Framework. Please view License file distributed
 * with the source code for license details.
 *
 * @link https://www.cmsgears.org/
 * @copyright Copyright (c) 2015 VulpineCode Technologies Pvt. Ltd.
 */

namespace cmsgears\google\maps\config;

/**
 * GoogleMapsProperties provide methods to access the properties specific to Google Analytics.
 *
 * The global code will be used if Google Analytics is enabled on global level.
 *
 * @since 1.0.0
 */
class GoogleMapsProperties extends \cmsgears\core\common\config\Properties {

	// Variables ---------------------------------------------------

	// Globals ----------------

	const CONFIG_GOOGLE_MAPS = 'google-maps';

	const PROP_ACTIVE = 'active';

	const PROP_KEY = 'key';

	// Public -----------------

	// Protected --------------

	// Private ----------------

	private static $instance;

	// Traits ------------------------------------------------------

	// Constructor and Initialisation ------------------------------

	/**
	 * Return Singleton instance.
	 */
	public static function getInstance() {

		if( !isset( self::$instance ) ) {

			self::$instance	= new GoogleMapsProperties();

			self::$instance->init( self::CONFIG_GOOGLE_MAPS );
		}

		return self::$instance;
	}

	// Instance methods --------------------------------------------

	// Yii interfaces ------------------------

	// Yii parent classes --------------------

	// CMG interfaces ------------------------

	// CMG parent classes --------------------

	// GoogleMapsProperties ------------------

	/**
	 * Check whether Google Maps is enabled.
	 *
	 * @return boolean
	 */
	public function isActive() {

		return $this->properties[ self::PROP_ACTIVE ];
	}

	/**
	 * Returns the key.
	 *
	 * @return boolean
	 */
	public function getKey() {

		return $this->properties[ self::PROP_KEY ];
	}

}
