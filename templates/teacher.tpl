{#extends file='contents-page.tpl'#}
{#block name=content#}
  <h1>Our Trainers</h1><br><br style="line-height:11px;">
  <p style="line-height:18px">Our highly skilled trainers have extensive experience in teaching business English and workplace English. They are selected as much for their diversity of experience in a wide range of businesses, as their expertise, professionalism and personal qualities. They have the qualifications and experience to deliver high quality Business English programmes. </p><br style="line-height:11px;"><br style="line-height:11px;">
  <table>
  {#foreach $teachers as $teacher#}
    {#if $teacher@iteration is odd#}
    <tr>
      <td style="padding-bottom:20px;" valign="top">
        <div style="padding-bottom:20px;padding-right:20px;line-height:14px;">
        <img src="{#$teacher.pic#}" alt="" align="left" 
             style="margin-right:10px;margin-bottom:5px" /><b>{#$teacher.name#}</b><br>{#$teacher.descript#}
          
        </div>
      </td>
      {#if $teacher@last #}
        </tr>
      {#/if#}
    {#else#}
      <td valign="top">
        <div style="padding-bottom:20px;line-height:14px;">
          <img src="{#$teacher.pic#}" alt="" align="left" 
          style="margin-right:10px;margin-bottom:5px" /><b>{#$teacher.name#}</b><br>{#$teacher.descript#}
        </div>
      </td>
    </tr>
    {#/if#}
  {#/foreach#}
  </table>
{#/block#}
