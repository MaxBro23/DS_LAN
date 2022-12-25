<table>
	<tr>
		<td>
			<img src="{$cl_builds->getGraphic("main", $village.main)}" title="Hauptgebäude" alt="" />
		</td>
		<td>
			<h2>{$cl_builds->get_name("main")} ({$village.main|stage})</h2>
			{$description}
		</td>
	</tr>
</table>
<br />
{if $mode == 'destroy'}
{include file='game_main_destroy.tpl'}
{else}
{* ALLE GEBÄUDE IN DER BAUSCHLEIFE AUSLESEN *}
{if $num_do_build>0}
	<table class="vis">
	<tr><th width="250">{$lang->get("doBuild")}</th><th width="100">{$lang->get("duration")}</th><th width="150">{$lang->get("time_finished")}</th><th>{$lang->get("cancel")}</th></tr>
	{foreach from=$do_build item=item key=id}
		{assign var="buildname" value=$do_build.$id.build}
			{if $id==0}
				<tr class="lit">
			{else}
				<tr>
			{/if}
					<td>{$cl_builds->get_name($buildname)} ({$lang->get("stage")} {$do_build.$id.stage})</td>
					{if $id==0}
						{if $do_build.$id.finished<$time}
							<td>{$do_build.$id.dauer|format_time}</td>
						{else}
							<td><span class="timer">{$do_build.$id.dauer|format_time}</span></td>
						{/if}
					{else}
						<td>{$do_build.$id.dauer|format_time}</td>
					{/if}
					<td>{$do_build.$id.finished|format_date}</td>
					<td><a href="javascript:ask('{$lang->get("cancel_confirm")}', 'game.php?village={$village.id}&amp;screen=main&amp;action=cancel&amp;id={$do_build.$id.r_id}&amp;mode=build&amp;h={$hkey}')">{$lang->get("doCancel")}</a></td>
				</tr>
	{/foreach}
	{* ZUSATZKOSTEN FÜR DEN NÄCHSTEN AUFTRAG*}
	{if $num_do_build>2}
		<tr>
			<td colspan="4">{$costs_plus}%<br />
			<small>{$lang->get("plus_costs_cancel")}</small></td>
		</tr>
	{/if}
	</table>
	<br />
{/if}

{if !empty($error)}
	<font class="error">{$error}</font>
{/if}
{if $village.main >= 15 AND $village.agreement == 100}
<table class="vis">
<tbody>
<tr>
{if $mode == 'destroy'}
<td width="100">
{else}
<td class="selected" width="100">
{/if}
<a href="game.php?village={$village.id}&screen=main">{$lang->get("build")}</a>
</td>
{if $mode == 'destroy'}
<td class="selected" width="100">
{else}
<td width="100">
{/if}
<a href="game.php?village={$village.id}&screen=main&mode=destroy">{$lang->get("destroy")}</a>
</td>
</tr>
</tbody>
</table>
{/if}
<table class="vis">
<tr>
<th width="220">{$lang->get("building")}</th><th colspan="4">{$lang->grab("main", "need")}</th><th width="100">{$lang->get("build_time")}<br /> (hh:mm:ss)</th><th width="200">{$lang->get("build")}</th>
</tr>

		{foreach from=$fulfilled_builds item=dbname key=id}
			<tr>
				<td><a href="game.php?village={$village.id}&screen={$dbname}"><img src="graphic/buildings/{$dbname}.png"> {$cl_builds->get_name($dbname)}</a> ({$village.$dbname|stage})</td>
				{if $cl_builds->get_maxstage($dbname)<=$build_village.$dbname}
					<td colspan="6" align="center" class="inactive">{$lang->grab("error", "full_build")}</td>
				{else}
					<td><img src="graphic/holz.png" title="Holz" alt="" />{$cl_builds->get_wood($dbname,$build_village.$dbname+1)}</td>
					<td><img src="graphic/lehm.png" title="Holz" alt="" />{$cl_builds->get_stone($dbname,$build_village.$dbname+1)}</td>
					<td><img src="graphic/eisen.png" title="Holz" alt="" />{$cl_builds->get_iron($dbname,$build_village.$dbname+1)}</td>
					<td>{if $cl_builds->get_bh($dbname,$build_village.$dbname+1)>0}<img src="graphic/face.png" title="Holz" alt="" />{$cl_builds->get_bh($dbname,$build_village.$dbname+1)}{/if}</td>
					<td>{$cl_builds->get_time($village.main,$dbname,$build_village.$dbname+1)|format_time}</td>
					{$cl_builds->build($village,$id,$build_village,$plus_costs)}
					{if $cl_builds->get_build_error2()=='not_enough_ress'}
						<td class="inactive"><span>{$lang->grab("error", "ress_available_in")} <span class="timer_replace">{$cl_builds->get_build_error()}</span></span><span style="display:none">
                            {if $build_village.$dbname < 1}
                                {if count($do_build)>2 && $user.confirm_queue==1}
                                    <a href="javascript:ask('{$lang->get("build_confirm")}', 'game.php?village={$village.id}&amp;screen=main&amp;action=build&amp;id={$dbname}&amp;force&amp;h={$hkey}')">{$lang->get("build")}</a>
                                {else}
                                    <a href="game.php?village={$village.id}&screen=main&action=build&id={$dbname}&h={$hkey}">{$lang->get("build")}
                                {/if}
                            {else}
                                {if count($do_build)>2 && $user.confirm_queue==1}
                                    <a href="javascript:ask('{$lang->get("build_confirm")}', 'game.php?village={$village.id}&amp;screen=main&amp;action=build&amp;id={$dbname}&amp;force&amp;h={$hkey}')">{$lang->get("build_on_stage")} {$build_village.$dbname+1}</a>
                                {else}
                                    <a href="game.php?village={$village.id}&screen=main&action=build&id={$dbname}&h={$hkey}">{$lang->get("build_on_stage")} {$build_village.$dbname+1}</a>
                                {/if}
                            {/if}
                        </span></td>
					{elseif $cl_builds->get_build_error2()=='not_enough_ress_plus'}
						<td class="inactive">{$lang->grab("error", "not_enough_ress_plus")}</td>
					{elseif $cl_builds->get_build_error2()=='not_fulfilled'}
						<td class="inactive">{$lang->grab("error", "not_fulfilled")}</td>
					{elseif $cl_builds->get_build_error2()=='not_enough_bh'}
						<td class="inactive">{$lang->grab("error", "not_enough_bh")}</td>
					{elseif $cl_builds->get_build_error2()=='not_enough_storage'}
						<td class="inactive">{$lang->grab("error", "not_enough_storage")}</td>
					{else}
						{if $build_village.$dbname < 1}
							{if count($do_build)>2 && $user.confirm_queue==1}
								<td><a href="javascript:ask('{$lang->get("build_confirm")}', 'game.php?village={$village.id}&amp;screen=main&amp;action=build&amp;id={$dbname}&amp;force&amp;h={$hkey}')">{$lang->get("build")}</a></td>
							{else}
								<td><a href="game.php?village={$village.id}&screen=main&action=build&id={$dbname}&h={$hkey}">{$lang->get("build")}</td>
							{/if}
						{else}
							{if count($do_build)>2 && $user.confirm_queue==1}
								<td><a href="javascript:ask('{$lang->get("build_confirm")}', 'game.php?village={$village.id}&amp;screen=main&amp;action=build&amp;id={$dbname}&amp;force&amp;h={$hkey}')">{$lang->get("build_on_stage")} {$build_village.$dbname+1}</a></td>
							{else}
								<td><a href="game.php?village={$village.id}&screen=main&action=build&id={$dbname}&h={$hkey}">{$lang->get("build_on_stage")} {$build_village.$dbname+1}</a></td>
								<td><a href="game.php?village={$village.id}&screen=main&action=abriss&id={$dbname}&h={$hkey}">Abriss</a>	
							{/if}
						{/if}
					{/if}
				{/if}
			</tr>
		{/foreach}

</table>
{/if}

<form action="game.php?village={$village.id}&amp;screen=main&amp;action=change_name&amp;h={$hkey}" method="post">
<table>
<tr><th colspan="3">{$lang->get("change_village_name")}</th></tr>
<tr><td><input type="text" name="name" value="{$village.name}"></td><td><input type="submit" value="{$lang->get("change")}"></tr>
</table>
</form>
