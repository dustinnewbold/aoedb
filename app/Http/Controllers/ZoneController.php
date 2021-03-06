<?php

namespace App\Http\Controllers;

use App\Models\Zone;
use App\Models\Quest;

use Illuminate\Http\Request;
use App\Http\Requests;

class ZoneController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$zones = Zone::with('zoneType')->get();

		$world = array();
		$dungeons = array();

		// Arrange zones by type
		foreach ( $zones as $zone ) {
			switch ( $zone->zoneType->name ) {
				case 'World':
					$world[] = $zone;
					break;

				case 'Dungeon':
					$dungeons[] = $zone;
					break;
			}
		}

		return view('zones.index', [
			compact('zones'),
			'world' => $world,
			'dungeons' => $dungeons
		]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id, $name)
	{
		$zone = Zone::with(['quests', 'quests.npc'])->find($id);

		// TODO: Set up translation
		$zone->name = $zone->name_en;
		$zone->description = $zone->description_en;

		if ( $name != str_replace(' ', '_', strtolower($zone->name)) ) {
			dd('Wrong place, wrong time');
		}

		return view('zones.show', ['zone' => $zone]);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		//
	}
}
