<form name="form1" id="form1" action="" method="POST" >
<input type="hidden" id="mode" name="mode" value="">
<dl>
    {assign var=key value="family_name"}
	<dd>{$arrForm[$key]['disp_name']}{if isset($arrErr[$key]) }<span class="attention">{$arrErr[$key]}</span>{/if}</dd>
	<dt><input type="text" id="{$key}"  name="{$key}" value="{$arrForm[$key]['value']}" /></dt>
    
    {assign var=key value="first_name"}
	<dd>{$arrForm[$key]['disp_name']}{if isset($arrErr[$key])}<span class="attention">{$arrErr[$key]}</span>{/if}</dd>
	<dt><input type="text" id="{$key}" name="{$key}" value="{$arrForm[$key]['value']}" /></dt>

    {assign var=key value="sex"}
	<dd>{$arrForm[$key]['disp_name']}{if isset($arrErr[$key]) }<span class="attention">{$arrErr[$key]}</span>{/if}</dd>
	<dt>{html_radios name="{$key}"  options=$arrSex selected={$arrForm[$key]['value']} separator='<br />'}</dt>

	<dd>
        {assign var=key value="birth_year"}
        <select name="{$key}" id="{$key}">
        {html_options options=$arrYear selected=$arrForm[$key]['value']}  
        </select>年
        {assign var=key value="birth_month"}
        <select name="{$key}" id="{$key}">
        {html_options options=$arrMonth selected=$arrForm[$key]['value']}  
        </select>月
        {assign var=key value="birth_day"}
        <select name="{$key}" id="{$key}">
        {html_options options=$arrDay selected=$arrForm[$key]['value']}  
        </select>日
    </dd>

    {assign var=key1 value="zip1"}
    {assign var=key2 value="zip2"}
	<dd>{$arrForm[$key1]['disp_name']}-{$arrForm[$key2]['disp_name']}
      {if isset($arrErr[$key1])}<span class="attention">{$arrErr[$key1]}</span>{/if}
      {if isset($arrErr[$key2])}<span class="attention">{$arrErr[$key2]}</span>{/if}
    </dd>
	<dt><input type="text" id="{$key1}" name="{$key1}" value="{$arrForm[$key1]['value']}" />-<input type="text" id="{$key2}" name="{$key2}" value="{$arrForm[$key2]['value']}" /></dt>
	
    {assign var=key1 value="address1"}
    {assign var=key2 value="address2"}
	<dd>{$arrForm[$key1]['disp_name']} {if isset($arrErr[$key]) }<span class="attention">{$arrErr[$key]}</span>{/if}</dd>
	<dt>
     <input type="text" id="{$key1}" name="{$key1}" value="{$arrForm[$key1]['value']}" />
    </dt>
     
	<dd>{$arrForm[$key2]['disp_name']}</dd>
	<dt>
     <input type="text" id="{$key2}" name="{$key2}" value="{$arrForm[$key2]['value']}" /> 
    </dt>

    {assign var=key value="skill_language"}
	<dd>{$arrForm[$key]['disp_name']} {if isset($arrErr[$key]) }<span class="attention">{$arrErr[$key]}</span>{/if}</dd>
	<dt>{html_checkboxes name='{}' options=$arrSkillLanguage checked=$arrForm[$key]['value'] separator="<br />"}</dt>
</dl>


<input type="button" name="send" value="登録する" class="btn btn-success" id="submit_button" />
</form>
