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

@section('content')
	<ul class="menu">
		<li>
			<a href="#">
				World
			</a>
		</li>
		<li>
			<a href="#">
				Dungeons
			</a>
		</li>
		<li>
			<a href="#">
				Raids (8)
			</a>
		</li>
		<li>
			<a href="#">
				Raids (24)
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
						Continent
					</th>
				</tr>
			</thead>
			<tbody>
				@foreach ( $zones as $zone )
					<tr>
						<td>
							<a href="/zones/{{ $zone->id }}/{{ str_replace(' ', '_', $zone->name_en) }}/">
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