<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<div class="container">
		<a class="navbar-brand" href="/"><?= SITENAME?></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a class="nav-link" href="/">Home </a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?=URLROOT?>/pages/about">About</a>
				</li>
			</ul>

			<ul class="navbar-nav ml-auto">
<?php if( isset($_SESSION['user_id']) ) : ?>
				<li class="nav-item">
				<?=$_SESSION['user_name']?>
					<a class="nav-link" href="<?=URLROOT?>/users/logout">Logout</a>
				</li>
<?php else : ?>
				<li class="nav-item">
					<a class="nav-link" href="<?=URLROOT?>/users/register">Register</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?=URLROOT?>/users/login">Login</a>
				</li>
<?php endif ; ?>
			</ul>
		</div>
	</div>
</nav>
