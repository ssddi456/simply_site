{#extends file='contents-page.tpl'#}
{#block name=content#}
  <h1>FAQ</h1><br><br style="line-height:11px;">
  {#foreach $faqs as $faq#}
	  <p><strong>{#$faq.title#}</strong><br><br style="line-height:14px;">{#$faq.descript#}</p>
	  <br style="line-height:20px;">
  {#/foreach#}
{#/block#}