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

@section('js')
	<script src="/js/tabs.js"></script>
@endsection

@section('content')
	<ul class="menu">
		<li class="active">
			<a href="#quests">
				Quests
			</a>
		</li>
		<li>
			<a href="#npcs">
				NPCs
			</a>
		</li>
		<li>
			<a href="#gathering">
				Gathering Points
			</a>
		</li>
		<li>
			<a href="#currents">
				Aether Currents
			</a>
		</li>
	</ul>

	<div class="content">
		<table class="data active" cellpadding="0" cellspacing="0" id="content-quests">
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
							<a href="/quests/{{ $quest->id }}/{{ str_replace(' ', '_', strtolower($quest->name_en)) }}">
								{{ $quest->name_en }}
							</a>
						</td>
						<td>
							<a href="/npcs/{{ $quest->npc->id }}/{{ str_replace(' ', '_', strtolower($quest->npc->name)) }}">
								{{ $quest->npc->name }}
							</a>
						</td>
						<td>
							[ ] [ ] [ ] 2000 gil
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>

		<table class="data hide" cellpadding="0" cellspacing="0" id="content-npcs">
			<thead>
				<tr>
					<th>
						&nbsp;
					</th>
					<th>
						Name
					</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>
						<img src="/images/npc_example.png" height="80px" />
					</td>
					<td>
						Example NPC Name
					</td>
				</tr>
			</tbody>
		</table>

		<table class="data hide" cellpadding="0" cellspacing="0" id="content-gathering">
			<thead>
				<tr>
					<th>
						Icon
					</th>
					<th>
						Name
					</th>
					<th>
						Level
					</th>
					<th>
						Map
					</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>
						[icon]
					</td>
					<td>
						Unspoiled something something
					</td>
					<td>
						60
					</td>
					<td>
						12, 7
					</td>
				</tr>
			</tbody>
		</table>

		<table class="data hide" cellpadding="0" cellspacing="0" id="content-currents">
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
							<a href="/quests/{{ $quest->id }}/{{ str_replace(' ', '_', strtolower($quest->name_en)) }}">
								{{ $quest->name_en }}
							</a>
						</td>
						<td>
							<a href="/npcs/{{ $quest->npc->id }}/{{ str_replace(' ', '_', strtolower($quest->npc->name)) }}">
								{{ $quest->npc->name }}
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