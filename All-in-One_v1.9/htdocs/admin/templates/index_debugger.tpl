<h2>{$lang->grab("admin_debugger", "debugger")}</h2>
{$lang->grab("admin_debugger", "info")}<br /><br />
	
{if $done=='attacks'}
{$lang->grab("admin_debugger", "attacks_done")}
{else}
	<a href="index.php?screen=debugger&action=attacks">{$lang->grab("admin_debugger", "attacks")}</a><br />
    {$lang->grab("admin_debugger", "attacks_info")}
{/if}