{#extends file='contents-page.tpl'#}
{#block name=content#}
  <h1>Courses</h1><br><br style="line-height:11px;">
  <p style="line-height:18px">We offer a wide range of communication skill courses. Our courses are designed with your unique requirements in mind – whether it be improving your email writing skills, presentation skills, negotiation skills, telephone skills, business socialising and networking or participating in meetings.</p><br style="line-height:11px;"><br style="line-height:11px;">
  <table>

  {#foreach $courses as $course#}
      <tr>
        <td>
        <p style="text-align:center"><img src="{#$course.pic#}" ></p>
        <br style="line-height:15px">
        <div class="course">
          <b>{#$course.name#}</b><br>
          <br style="line-height:11px">
          {#$course.descript#}<br>
          <br style="line-height:24px">
        </div>
      </td>
    </tr>
  {#/foreach#}
  </table>
{#/block#}