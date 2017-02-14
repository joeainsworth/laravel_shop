<header>
	<nav class="navbar navbar-default navbar-static-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand">LaraShop</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li><a href="{{ route('index') }}">Shop</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="{{ route('cart.index') }}">Cart ({{ Cart::count() }})</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</nav>
</header>