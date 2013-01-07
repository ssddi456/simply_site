{#extends file='contents-page.tpl'#}
{#block name=content#}
  <h1>Shortly about us</h1><br>
  <p><img src="{#$short_about_us_pic#}" alt="" align="left" style="margin-right:14px; margin-top:2px;float:left">{#$short_about_us#}</p>
  <img src="images/px2_1.gif" alt="" style="margin-left:29px; margin-top:20px"><br>
  <br style="line-height:11px"> 
  <h1>Company Profile</h1><br>
  <br style="line-height:11px">  
 <p>{#$company_profile#}</p>
  <img src="images/px2_1.gif" alt="" style="margin-left:29px; margin-top:20px"><br>
  <br style="line-height:11px"> 
  <h1>Some teachers</h1><br>
  <div style="overflow:auto;">
    <div  style="width:190px; float:left;min-height: 90px;">
      <img src="{#$teacher[0].pic#}" alt="" align="left" 
           style="margin-right:15px"><b>{#$teacher[0].name#}</b><br>{#$teacher[0].descript#}
    </div>
    <div  style="width:20px; float:left;">&nbsp;</div>
    <div  style="width:190px; float:left;min-height: 90px;">
        <img src="{#$teacher[1].pic#}" alt="" align="left" 
        style="margin-right:15px"><b>{#$teacher[1].name#}</b><br>{#$teacher[1].descript#}
    </div>
  </div>
{#/block#}
