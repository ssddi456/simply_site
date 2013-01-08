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
    <div style="margin:0 184px;">
{#include file="head.tpl"#}
{#block name=body#}{#/block#}
{#include file="foot.tpl"#}
    </div>

    <div style="position:absolute;
        top:130px;left:0;
        width:180px;
        background:#fefefe">
      {#block name=leftslider#}

      <div class="slide-title"> 
        Shortly about us
      </div>
      <div class="slide-content">
       {#$short_about_us#}
      </div>

      <div class="slide-title"> 
        Company Profile
      </div>
      <div class="slide-content">
       {#$company_profile#}
      </div>
      <div class="slide-title"> 
        <a class="slide-title" href="{#$contact_page#}">book free courses</a>
      </div>
      {#/block#}
    </div>


    <div style="position:absolute;
        top:130px;right:0;
        width:180px;
        background:#fefefe">
      {#block name=rightslider#}
      <div class="slide-title">
       why us
      </div><div class="slide-content">
       {#$why_us#}
      </div>

      <div class="slide-title">
       testimonial
      </div>
      <div class="slide-content">
       {#$testimonial#}
      </div>
      {#/block#}
    </div>
  </div>
</body>
</html>