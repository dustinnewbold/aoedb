<?php

namespace App\Http\Controllers;

use App\Models\Zone;
use App\Models\Quest;

use Illuminate\Http\Request;
use App\Http\Requests;

class SearchController extends Controller
{
	//
	public function search() {
		$query = $_GET['s'];

		$zones = Zone::where('name_en', 'LIKE', '%' . $query . '%')->get();
		$quests = Quest::where('name_en', 'LIKE', '%' . $query . '%')->get();

		$total = count($zones) + count($quests);

		return view('search.base', [
			'total' => $total,
			'query' => $query,
			'zones' => $zones,
			'quests' => $quests,
		]);
	}
}
