{if isset($searchval)}
<h1 id="searchval">{$searchval|upper}</h1>
{/if}
<section style="width:100%; height:100%;">
{foreach from=$result item=newsItem}

<div class="article searcharticle" style="background-image:url(img/{$newsItem.image}); background-repeat:no-repeat; background-size:cover;">
<h1 class="articletitle linktext">{$newsItem.title|upper }</h1>
<p class="articletext">{$newsItem.content}</p>
<p class="articletext">{$newsItem.content2}</p>
<p class="articletext">{$newsItem.content3}</p>
<p class="articletext">{$newsItem.content4}</p>
</div>
{/foreach}
{if $searched < 4}
<style>
    body
    {
        overflow:hidden;
    }
</style>
{/if}
</section>
<div id="searchbuffer">
</div>