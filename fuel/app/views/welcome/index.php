<div class="container">
	<div class="jumbotron">
		<h1>Welcome?!</h1>
		<p>You have successfully installed the FuelPHP Framework.</p>
		<p><a class="btn btn-primary btn-lg" href="http://docs.fuelphp.com">Read the Docs</a></p>
	</div>
	<div class="row">
		<div class="col-md-12">
			<h2>TEAC DBの国一覧</h2>
			<ul>
				<?php foreach($countries as $v){ ?>
				<li><?php echo $v['name_jp']; ?></li>
				<?php } ?>
			</ul>
		</div>
	</div>
	<hr/>
	<footer>
		<p class="pull-right">Page rendered in {exec_time}s using {mem_usage}mb of memory.</p>
		<p>
			<a href="http://fuelphp.com">FuelPHP</a> is released under the MIT license.<br>
			<small>Version: <?php echo Fuel::VERSION; ?></small>
		</p>
	</footer>
</div>