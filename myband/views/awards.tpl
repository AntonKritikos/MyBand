<div id="awards">
    <div id="awardheader">
        <h1 id="awardtitle">E3 AWARDS</h1> 
    </div>
    <div id"awardschild">
        {foreach from=$result item=award}
        <h2 class="subtitle">{$award.title}</h2>
        {$award.awards}
        {/foreach}
    </div>
</div>