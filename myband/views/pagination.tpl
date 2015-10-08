<ul id="pagination">
  <h1 id="paginationtext">PAGE</h1>
  {for $i = 1 to $pages}
  <li class="links">
    <a href="?page={$page}&number={$i}" id="page{$i}">{$i}</a>
  </li>
  {/for}
</ul>
