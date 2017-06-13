<ul class="menu">
	@if ( count($zones) )
		<li>
			<a href="#">
				Zones
			</a>
		</li>
	@endif
	<li>
		<a href="#">
			Items
		</a>
	</li>
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