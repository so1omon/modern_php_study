{include file="header.tpl" title="smarty foreach Test1"}
<ul>
    {foreach $contacts as $contact}
        {foreach $contact as $value}
            {$value@key} : {$value}
        {/foreach}
        <br>
    {/foreach}
    <br>
    {foreach $contacts as $contact}
        {foreach $contact as $key=>$value}
            {$key} : {$value}
        {/foreach}
        <br>
    {/foreach}

</ul>
{include file="footer.tpl"}