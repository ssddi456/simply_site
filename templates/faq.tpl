{#extends file='contents-page.tpl'#}
{#block name=content#}
  <h1>FAQ</h1><br><br style="line-height:11px;">
  {#foreach $faqs as $faq#}
	  <h2>{#$faq.title#}</h2><br style="line-height:16px;" /><p style="line-height:18px;">{#$faq.descript#}</p>
	  <br style="line-height:20px;" />
  {#/foreach#}
{#/block#}