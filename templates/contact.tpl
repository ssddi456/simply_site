{#extends file='contents-page.tpl'#}
{#block name=content#}
  <h1>Mailing Address</h1><br />
  <img src="{#$company_pic#}" alt="" align="left" style="margin-top:2px; margin-right:14px">
  <strong>{#$company_name#}</strong><br>
  {#$company_address#}<br>
  <br style="line-height:12px">
  Phone:&nbsp;&nbsp;{#$company_phone#}<br>
  Fax:&nbsp;&nbsp;{#$company_fax#}<br>
  <br style="line-height:46px"> 
  <img src="images/px2_1.gif" alt="" style="margin-left:20px;"><br>
  <br style="line-height:24px"> 
  <h1>Contact Form</h1>
  <div class="form">
    Leave us a mesage if you are interested in us<br>
    <br style="line-height:14px"> 
    <form action="sendmail.php" method="post" enctype="multipart/form-data" id="form" target="form">
    <table class="form">
      <tr>
      <td  style="width:198px; height:128px">
        <table><tr>
          <td  style="height:27px"><input name="name" type="text" placeholder="your name:"></td>
          </tr><tr>
          <td  style="height:27px"><input name="company" type="text" placeholder="your company:"></td>
          </tr><tr>
          <td  style="height:27px"><input name="telephone" type="text" placeholder="telephone:"></td>
          </tr><tr>
          <td  style="height:27px"><input name="email" type="text" placeholder="e-mail"></td>
        </tr></table>
      </td>
      <td  style="width:202px; height:128px">
        <table><tr>
          <td  style="height:109px"><textarea name="content" cols="0" rows="0" placeholder="message:"></textarea></td>
          </tr><tr>
          <td  style="height:19px">
            <br style="line-height:14px"> 
            <img src="images/spacer.gif" alt="" width="116" height="1"><strong><a href="#" onClick="document.getElementById('form').reset()">reset</a></strong><img src="images/spacer.gif" alt="" width="15" height="1"><strong><a href="#" onClick="document.getElementById('form').submit()">send</a></strong>
          </td>
        </tr></table>
      </td>
      </tr>
    </table>
    </form>
  </div>
  <br style="line-height:24px"> 
  <img src="images/px2_1.gif" alt="" style="margin-left:20px;"><br>

{#/block#}