{include "header.tpl" title="smarty IF/ELSE Test"}
{if $Name eq ""}
    Hello, 아무개<br>
    {elseif $Name eq "김말똥" }
        Hello, 말똥<br>
    {else}
        Hello, {$Name}<br>
{/if}

{$FirstName}, {$LastName}<br>

주소 : {$Address}<br>
나이 : {$Age}<br>
{include "footer.tpl"}