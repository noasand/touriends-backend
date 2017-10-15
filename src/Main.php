<?php

namespace Touriends\Backend;

class Main {
	public $classes = [];
	public function main() {
		add_action('init', function() {
			AJAX\Table::init();
			AJAX\Member::init();
			AJAX\Tour::init();
			AJAX\Matching::init();
			AJAX\Like::init();
		});
	}
}
