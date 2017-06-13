@extends('layouts.data.full')

@section('header-info')
	<h2>
		Zones
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

@section('js')
	<script src="/js/tabs.js"></script>
@endsection

@section('content')
	<ul class="menu">
		<li class="active">
			<a href="#world">
				World
			</a>
		</li>
		<li>
			<a href="#dungeons">
				Dungeons
			</a>
		</li>
		<li>
			<a href="#raid8">
				Raids (8)
			</a>
		</li>
		<li>
			<a href="#raid24">
				Raids (24)
			</a>
		</li>
	</ul>

	<div class="content">
		<table class="data active" cellpadding="0" cellspacing="0" id="content-world">
			<thead>
				<tr>
					<th>
						Name
					</th>
					<th>
						Continent
					</th>
				</tr>
			</thead>
			<tbody>
				@foreach ( $world as $zone )
					<tr>
						<td>
							<a href="/zones/{{ $zone->id }}/{{ str_replace(' ', '_', strtolower($zone->name_en)) }}/">
								{{ $zone->name_en }}
							</a>
						</td>
						<td>
							Some Continent
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>

		<table class="data hide" cellpadding="0" cellspacing="0" id="content-dungeons">
			<thead>
				<tr>
					<th>
						Name
					</th>
					<th>
						Continent
					</th>
				</tr>
			</thead>
			<tbody>
				@foreach ( $dungeons as $zone )
					<tr>
						<td>
							<a href="/zones/{{ $zone->id }}/{{ str_replace(' ', '_', strtolower($zone->name_en)) }}/">
								{{ $zone->name_en }}
							</a>
						</td>
						<td>
							Some Continent
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>

		<table class="data hide" cellpadding="0" cellspacing="0" id="content-raid8">
			<thead>
				<tr>
					<th>
						Name
					</th>
					<th>
						Continent
					</th>
				</tr>
			</thead>
			<tbody>
				@foreach ( $world as $zone )
					<tr>
						<td>
							<a href="/zones/{{ $zone->id }}/{{ str_replace(' ', '_', strtolower($zone->name_en)) }}/">
								{{ $zone->name_en }}
							</a>
						</td>
						<td>
							Some Continent
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>

		<table class="data hide" cellpadding="0" cellspacing="0" id="content-raid24">
			<thead>
				<tr>
					<th>
						Name
					</th>
					<th>
						Continent
					</th>
				</tr>
			</thead>
			<tbody>
				@foreach ( $world as $zone )
					<tr>
						<td>
							<a href="/zones/{{ $zone->id }}/{{ str_replace(' ', '_', strtolower($zone->name_en)) }}/">
								{{ $zone->name_en }}
							</a>
						</td>
						<td>
							Some Continent
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@endsection