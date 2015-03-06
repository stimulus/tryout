<?php

namespace app\Controllers;

class BuddiesController Extends Controller
{
    function __construct(){}

    public function index() {
        // Get all buddies from Database

        $this->data["buddies"]      = Buddies::all();
        $this->data["main_content"] = "buddies/overview";


        return View::make("master", $this->data);
    }

    public function time_management(){
			
			$this->data["time_schedule"] = Buddies::schedule(4);
    }
}