{include file="header.tpl" title="smarty foreach Test1"}
<ul>
    {foreach $myColors as $color}
        <li>{$color}</li>
    {/foreach}
</ul>
{include file="footer.tpl"}