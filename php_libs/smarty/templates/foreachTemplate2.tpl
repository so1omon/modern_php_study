{include file="header.tpl" title="smarty foreach Test1"}
<ul>
    {foreach $myPerson as $value}
        <li>{$value@key} : {$value}</li>
    {/foreach}
</ul>
{include file="footer.tpl"}