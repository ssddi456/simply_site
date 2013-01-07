<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
  <title>Business Focus</title>
  <meta http-equiv="Content-Style-Type" content="text/css">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <LINK HREF="style.css" TYPE="text/css" REL="stylesheet">
  <LINK HREF="reset.css" TYPE="text/css" REL="stylesheet">
</head>
<body>
  <div  class="wraper">
    <div style="margin:0 144px;">
{#include file="head.tpl"#}
{#block name=body#}{#/block#}
{#include file="foot.tpl"#}
    </div>

    <div style="position:absolute;
        top:130px;left:0;
        width:120px;
        background:#fefefe">
      {#block name=leftslider#}
      <div style="line-height:20px;height:30px;padding:5px 10px;"> 
        Shortly about us
      </div><div style="padding:5px 15px;">
       {#$short_about_us#}
      </div>
      <div style="line-height:20px;height:30px;padding:5px 10px;"> 
        Company Profile
      </div><div style="padding:5px 15px;">
       {#$company_profile#}
      </div>
      <div> 
        <a href="{#$contact_page#}">book free courses</a>
      </div>
      {#/block#}
    </div>


    <div style="position:absolute;
        top:130px;right:0;
        width:120px;
        background:#fefefe">
      {#block name=rightslider#}
      <div style="line-height:20px;height:30px;padding:5px 10px;">
       why us
      </div><div style="padding:5px 15px;">
       {#$whyus#}
      </div>
      <div style="line-height:20px;height:30px;padding:5px 10px;">
       wait to add here
      </div><div style="padding:5px 15px;">
       {#$whyus#}
      </div>
      {#/block#}
    </div>
  </div>
</body>
</html>