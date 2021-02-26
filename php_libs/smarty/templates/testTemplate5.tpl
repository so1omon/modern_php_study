{include file="header.tpl" title="smarty section Test2"}
    {section name="person" loop=$personInfo} 
        {($smarty.section.person.index)+1}. 
        {$personInfo[person].FirstName}
        {$personInfo[person].LastName}<br>
    {sectionelse}
        no Data
    {/section}
{include file="footer.tpl"}