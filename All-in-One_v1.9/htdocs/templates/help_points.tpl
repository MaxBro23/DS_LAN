<h3>{$lang->get("points")}</h3>
<p>{$lang->get("points_text")}</p>

<p>{$lang->get("all_points")}</p>

<table class="vis">
	<tr>
		<th>{$lang->get("stage")}</th>
		{foreach from=$builds item=f_dbname key=f_id}
			<th><img src="graphic/buildings/{$f_dbname}.png"></th>
		{/foreach}
	</tr>
		{section name=foo start=1 loop=$max_stage+1 step=1}
			<tr>
				<td>{$smarty.section.foo.index}</td>
				{foreach from=$builds item=f_dbname key=f_id}
					{if $cl_builds->get_maxstage($f_dbname)<$smarty.section.foo.index}
						<td></td>
					{else}
						<td>{$cl_builds->get_points($f_dbname,$smarty.section.foo.index)}</td>
					{/if}
				{/foreach}
			</tr>
		{/section}
</table>
