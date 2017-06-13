@extends('layouts.data.sidebar')

@section('header-info')
	<h2>
		{{ $zone->name }}
	</h2>
	<p>
		{{ $zone->description }}
	</p>
@endsection

@section('header-meta')
	<div class="map">
		<a href="/images/Coerthas_Western_Highlands_Map.jpg">
			<img src="/images/Coerthas_Western_Highlands_Map.jpg" width="100%">
		</a>
	</div>
@endsection

@section('content')
	<ul class="menu">
		<li>
			<a href="#">
				Quests
			</a>
		</li>
		<li>
			<a href="#">
				NPCs
			</a>
		</li>
		<li>
			<a href="#">
				Gathering Points
			</a>
		</li>
		<li>
			<a href="#">
				Flight Unlock Points
			</a>
		</li>
	</ul>

	<div class="content">
		<table class="data" cellpadding="0" cellspacing="0">
			<thead>
				<tr>
					<th>
						Name
					</th>
					<th>
						NPC
					</th>
					<th>
						Rewards
					</th>
				</tr>
			</thead>
			<tbody>
				@foreach ( $zone->quests as $quest)
					<tr>
						<td>
							<a href="/quests/{{ $quest->id }}/{{ $quest->name_en }}">
								{{ $quest->name_en }}
							</a>
						</td>
						<td>
							<a href="/npcs/1/npc_name">
								Some Moogle
							</a>
						</td>
						<td>
							[ ] [ ] [ ] 2000 gil
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@endsection