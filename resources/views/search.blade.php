@extends('layouts.data.full')

@section('header-info')
	<h2>
		<?= $_GET['s']; ?> – Search Results
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
				Zones
			</a>
		</li>
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
				<tr>
					<td>
						<a href="/zones/12/Example Zone/">
							Example Zone A
						</a>
					</td>
					<td>
						Some Continent
					</td>
				</tr>
				<tr>
					<td>
						<a href="/zones/12/Example Zone/">
							Example Zone B
						</a>
					</td>
					<td>
						Some Continent
					</td>
				</tr>
				<tr>
					<td>
						<a href="/zones/12/Example Zone/">
							Example Zone C
						</a>
					</td>
					<td>
						Some Continent
					</td>
				</tr>
				<tr>
					<td>
						<a href="/zones/12/Example Zone/">
							Example Zone D
						</a>
					</td>
					<td>
						Some Continent
					</td>
				</tr>

				

			</tbody>
		</table>
	</div>
@endsection