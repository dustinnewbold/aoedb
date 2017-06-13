@extends('layouts.data.sidebar')

@section('header-info')
	<h2>
		Coerthas Western Highlands
	</h2>
	<p>
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
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
				<tr>
					<td>
						Example Quest A
					</td>
					<td>
						Some Moogle
					</td>
					<td>
						[ ] [ ] [ ] 2000 gil
					</td>
				</tr>
				<tr>
					<td>
						Example Quest A
					</td>
					<td>
						Some Moogle
					</td>
					<td>
						[ ] [ ] [ ] 2000 gil
					</td>
				</tr>
				<tr>
					<td>
						Example Quest A
					</td>
					<td>
						Some Moogle
					</td>
					<td>
						[ ] [ ] [ ] 2000 gil
					</td>
				</tr>
				<tr>
					<td>
						Example Quest A
					</td>
					<td>
						Some Moogle
					</td>
					<td>
						[ ] [ ] [ ] 2000 gil
					</td>
				</tr>
				<tr>
					<td>
						Example Quest A
					</td>
					<td>
						Some Moogle
					</td>
					<td>
						[ ] [ ] [ ] 2000 gil
					</td>
				</tr>

			</tbody>
		</table>
	</div>
@endsection