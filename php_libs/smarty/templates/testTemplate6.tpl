{include file="header.tpl" title="smarty section test3"}
{section name=person loop=$FirstName}
    {$smarty.section.person.rownum}. {$FirstName[person]} {$LastName[person]}<br>
    {section name=contacts loop=$ContactNames[person]}
        {if $smarty.section.contacts.rownum is even}<b>{/if}
        {$ContactNames[person][contacts]} : {$ContactsVals[person][contacts]}<br>
        {if $smarty.section.contacts.rownum is even}</b>{/if}
    {/section}
{sectionelse}
    no Data
{/section}
{include file="footer.tpl"}
