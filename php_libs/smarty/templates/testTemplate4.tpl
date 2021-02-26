{include "header.tpl" title="smarty section Test"}
{section name=person loop=$FirstName}
{$smarty.section.person.rownum} {$FirstName[person]} {$LastName[person]}<br>
{sectionelse}
    no data
{/section}

{include "footer.tpl"}