{#extends file='contents-page.tpl'#}
{#block name=content#}
  <h1>Courses</h1><br>
  <table>

  {#foreach $courses as $course#}
    {#if $course@iteration is odd#}
    <tr>
      <td style="width:201px; min-height:120px;">
        <img src="{#$course.pic#}" ><br>
        <br style="line-height:15px">
        <b>{#$course.name#}</b><br>
        <br style="line-height:11px">
        {#$course.descript#}<br>
        <br style="line-height:4px">
      </td>
      {#if $course@last #}
        <td>
        </td>
      </tr>
      {#/if#}
    {#else#}
      <td style="width:201px;min-height:120px;">
        <img src="{#$course.pic#}" alt=""><br>
        <br style="line-height:15px">
        <b>{#$course.name#}</b><br>
        <br style="line-height:11px">
        {#$course.descript#}<br>
        <br style="line-height:4px">
      </td>
    </tr>
    {#/if#}
  {#/foreach#}
  </table>
{#/block#}