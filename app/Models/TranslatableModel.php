<?php

namespace App\Models;

trait TranslatableModel {
	function getName() {
		if ( ! isset($this->name_en) ) {
			throw new Exception('No name associated with this model');
		}

		return $this->name_en;
	}

	function getDescription() {
		if ( ! isset($this->description_en) ) {
			throw new Exception('No description associated with this model');
		}

		return $this->description_en;
	}
}