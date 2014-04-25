<form name="form1" id="form1"  class="form-horizontal" action="" method="POST" >
<input type="hidden" id="mode" name="mode" value="">

    {assign var=key value="family_name"}
    <dt>   
    {$arrForm[$key]['disp_name']}{if isset($arrErr[$key]) }<span class="attention">{$arrErr[$key]}</span>{/if}
   	</dt>
   	<dd>
   	<input class="short" type="text" id="{$key}"  name="{$key}" value="{$arrForm[$key]['value']}" />
    </dd>
    
    {assign var=key value="first_name"}
	<dt> 
    {$arrForm[$key]['disp_name']}{if isset($arrErr[$key])}<span class="attention">{$arrErr[$key]}</span>{/if}
	   	</dt>
   	<dd>
	<input class="short" type="text" id="{$key}" name="{$key}" value="{$arrForm[$key]['value']}" />
    </dd>

    {assign var=key value="sex"}
	   <dt> 
	{$arrForm[$key]['disp_name']}{if isset($arrErr[$key]) }<span class="attention">{$arrErr[$key]}</span>{/if}
	   	</dt>
   	<dd>
	{html_radios name="{$key}"  options=$arrSex selected={$arrForm[$key]['value']} separator='<br />'}
	    </dd>
	    
        {assign var=key value="birth_year"}
        <select name="{$key}" id="{$key}" >
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
    
    {assign var=key1 value="zip1"}
    {assign var=key2 value="zip2"}
	   <dt> 
	   {$arrForm[$key1]['disp_name']}
      {if isset($arrErr[$key1])}<span class="attention">{$arrErr[$key1]}</span>{/if}
      {if isset($arrErr[$key2])}<span class="attention">{$arrErr[$key2]}</span>{/if}
       	</dt>
   	<dd>
	<input type="text" id="{$key1}" class="mini" name="{$key1}" value="{$arrForm[$key1]['value']}" />-<input type="text" id="{$key2}" class="mini" name="{$key2}" value="{$arrForm[$key2]['value']}" />
	    </dd>
	    
	    
    {assign var=key1 value="address1"}
    {assign var=key2 value="address2"}
	   <dt> {$arrForm[$key1]['disp_name']} {if isset($arrErr[$key]) }<span class="attention">{$arrErr[$key]}</span>{/if}
	   	</dt>
   	<dd>
     <input type="text" id="{$key1}" class="long" name="{$key1}" value="{$arrForm[$key1]['value']}" />
        </dd>
     
	   <dt> {$arrForm[$key2]['disp_name']}
	   	</dt>
   	<dd>
     <input type="text" id="{$key2}" class="long" name="{$key2}" value="{$arrForm[$key2]['value']}" /> 
        </dd>

    {assign var=key value="skill_language"}
	 <dt> 
	   {$arrForm[$key]['disp_name']} {if isset($arrErr[$key]) }<span class="attention">{$arrErr[$key]}</span>{/if}
	   	</dt>
   	<dd>
	{html_checkboxes name=$key options=$arrLanguage checked=$arrForm[$key]['value'] separator="<br />"}
    </dd>
</dl>


<input type="button" name="send" value="登録する" class="btn btn-success" id="submit_button" />

</form>
