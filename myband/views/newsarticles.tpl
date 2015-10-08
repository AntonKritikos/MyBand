{include file="pagination.tpl"}

<section>

{foreach from=$result item=newsItem}

<div class="article" style="background-image:url(img/{$newsItem.image}); background-repeat:no-repeat; background-size:cover;">
<h1 class="articletitle linktext">{$newsItem.title|upper }</h1>
<p class="articletext">{$newsItem.content}</p>
<p class="articletext">{$newsItem.content2}</p>
<p class="articletext">{$newsItem.content3}</p>
<p class="articletext">{$newsItem.content4}</p>
</div>

{/foreach}
</section>
