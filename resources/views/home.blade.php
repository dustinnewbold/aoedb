@include('layouts.header')

<div class="container" style="text-align: center">
	<h1 class="title">
		<?php echo(config('app.name')); ?>
	</h1>
	<form method="get" action="/search">
		<input type="text" class="search" name="s">
	</form>
</div>

@include('layouts.footer')