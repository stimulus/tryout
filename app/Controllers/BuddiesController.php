<?php

namespace app\Controllers;
use app\Models\buddies\Buddies;
use app\Models\buddies\Buddy_scheme;

class BuddiesController Extends Controller {
	
	function __construct() {
	}

	public function index() {
		// Get all buddies from Database
		$this->data["buddies"]      = Buddies::all();
		$this->data["main_content"] = "buddies/overview";
		return \View::make("buddies/buddies", $this->data);
	}

	public function time_management($id) {
		$this->data["time_schedule"] = Buddy_scheme::where('buddy_id','=',$id)
		->orderBy('start','asc')
		->get();
		return \View::make('buddies/buddies_schedule', $this->data);
	}
}