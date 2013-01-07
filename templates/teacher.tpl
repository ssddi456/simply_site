{#extends file='contents-page.tpl'#}
{#block name=content#}
  <h1>Teachers</h1><br>
  {#foreach $teachers as $teacher#}
    {#if $teacher@iteration is odd#}
    <div style="height:120px;">
      <div  style="width:190px; float:left;">
        <img src="{#$teacher.pic#}" alt="" align="left" 
             style="margin-right:15px" /><b>{#$teacher.name#}</b><br>{#$teacher.descript#}
      </div>
      <div  style="width:20px; float:left;">&nbsp;</div>
      {#if $teacher@last #}
        </div>
      {#/if#}
    {#else#}
      <div  style="width:190px; float:left;">
          <img src="{#$teacher.pic#}" alt="" align="left" 
          style="margin-right:15px" /><b>{#$teacher.name#}</b><br>{#$teacher.descript#}
      </div>
    </div>
    {#/if#}
  {#/foreach#}
{#/block#}
