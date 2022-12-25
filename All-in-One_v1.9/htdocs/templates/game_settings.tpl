<table width="100%" align="center">
	<tr>
		<td>
			<h2>{$lang->grab("settings_profile", "settings")}</h2>
			{if !empty($error)}
				<h2 class="error">{$error}</h2>
			{/if}
				<table width="100%">
					<tr>
						<td valign="top" width="120">
							<table class="vis">
                                {foreach from=$links item=f_mode key=f_name}
									{if $f_mode==$mode}

								<tr>
                        			<td class="selected" width="120">
										<a href="game.php?village={$village.id}&amp;screen=settings&amp;mode={$f_mode}">{$f_name}</a>
									</td>
                    			</tr>

									{else}
                    			<tr>
                        		<td width="120">
									<a href="game.php?village={$village.id}&amp;screen=settings&amp;mode={$f_mode}">{$f_name}</a>
								</td>
							</tr>
									{/if}
								{/foreach}
								
								{if $mode == 'userdelete'}
								<tr>
                        			<td class="selected" width="120">
										<a href="game.php?village={$village.id}&amp;screen=settings&amp;mode=userdelete">Account löschen</a>
									</td>
                    			</tr>

									{else}
                    			<tr>
                        		<td width="120">
									<a href="game.php?village={$village.id}&amp;screen=settings&amp;mode=userdelete">Account löschen</a>
								</td>
							</tr>
									{/if}
                		</table>
            		</td>
					<td valign="top" align="left">

							{include file="game_settings_$mode.tpl" title=foo}

            		</td>
				</tr>
			</table>
		</td>
	</tr>
</table>
