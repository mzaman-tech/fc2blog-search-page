{include file="header.tpl" title="Info"}

<h2>User Information:</h2>
<p>Name: {$name|capitalize}<br />
Address: {$address|escape}<br />
{if isset($id)}
	Id: {$id}</p>
{/if}


{include file="footer.tpl"}