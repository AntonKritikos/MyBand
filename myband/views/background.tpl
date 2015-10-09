		<style>
		body
		{
			{if $background == Overview || $background == Search}
				overflow-y:auto;
			{else}
				overflow:hidden;
			{/if}
			background-image:url("img/{$background}.png");
    		background-repeat: no-repeat;
    		background-attachment:fixed;
    		background-size: cover;
		}
		</style>
