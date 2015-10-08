
<header id="header">
	<div id="homepic">
		<a href="?page=Home" >
			<img src="	img/grw-logo_206277.png" id="image" />
		</a>
	</div>
	<div id="localnav">
		<a id='home' class="linktext" href="?page=Home">HOME</a>
		{if $location != Home}
			<div id='breaker'><h1 id="greater">></h1></div>
			<a id="location" class="linktext" href="?page={$location}">{$location|upper}</a>
		{/if}
	</div>
	<div class="line">
	</div>
</header>
<div id="margin"></div>
