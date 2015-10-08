{foreach from=$result item=newsItem}

<div class="article" style="background-image:url(img/Home.png); background-repeat:no-repeat; background-size:cover;">
<h1 class="inttitle linktext">{$newsItem.question}</h1>
<p class="inttext">{$newsItem.answer}</p>
</div>

{/foreach}