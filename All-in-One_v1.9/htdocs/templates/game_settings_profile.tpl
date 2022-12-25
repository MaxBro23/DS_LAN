<form action="game.php?village={$village.id}&amp;screen=settings&amp;action=change_profile&amp;h={$hkey}" enctype="multipart/form-data" method="post">
	<table class="vis">
		<tr>
			<th colspan="2">
    {$lang->grab("settings_$mode", "properties")}
			</th>
		</tr>
        <tr>
			<td>
    {$lang->grab("settings_$mode", "birthday")}
			</td>
			<td>
				<input name="day" type="text" size="2" maxlength="2" value="{$profile.b_day}" />
                    <select name="month">
						<option label="{$lang->grab("settings_$mode", "january")}" value="1" {if $profile.b_month==1}selected{/if}>{$lang->grab("settings_$mode", "january")}</option>
						<option label="{$lang->grab("settings_$mode", "february")}" value="2" {if $profile.b_month==2}selected{/if}>{$lang->grab("settings_$mode", "february")}</option>
						<option label="{$lang->grab("settings_$mode", "march")}" value="3" {if $profile.b_month==3}selected{/if}>{$lang->grab("settings_$mode", "march")}</option>
						<option label="{$lang->grab("settings_$mode", "april")}" value="4" {if $profile.b_month==4}selected{/if}>{$lang->grab("settings_$mode", "april")}</option>
						<option label="{$lang->grab("settings_$mode", "may")}" value="5" {if $profile.b_month==5}selected{/if}>{$lang->grab("settings_$mode", "may")}</option>
						<option label="{$lang->grab("settings_$mode", "june")}" value="6" {if $profile.b_month==6}selected{/if}>{$lang->grab("settings_$mode", "june")}</option>
						<option label="{$lang->grab("settings_$mode", "juli")}" value="7" {if $profile.b_month==7}selected{/if}>{$lang->grab("settings_$mode", "juli")}</option>
						<option label="{$lang->grab("settings_$mode", "august")}" value="8" {if $profile.b_month==8}selected{/if}>{$lang->grab("settings_$mode", "august")}</option>
						<option label="{$lang->grab("settings_$mode", "september")}" value="9" {if $profile.b_month==9}selected{/if}>{$lang->grab("settings_$mode", "september")}</option>
						<option label="{$lang->grab("settings_$mode", "october")}" value="10" {if $profile.b_month==10}selected{/if}>{$lang->grab("settings_$mode", "october")}</option>
						<option label="{$lang->grab("settings_$mode", "november")}" value="11" {if $profile.b_month==11}selected{/if}>{$lang->grab("settings_$mode", "november")}</option>
						<option label="{$lang->grab("settings_$mode", "december")}" value="12" {if $profile.b_month==12}selected{/if}>{$lang->grab("settings_$mode", "december")}</option>
					</select>
				<input name="year" type="text" size="4" maxlength="4" value="{$profile.b_year}" />
			</td>
		</tr>
        <tr>
			<td>
    {$lang->grab("settings_$mode", "sex")}
			</td>
			<td>
			    <label>
					<input type="radio" name="sex" value="f" {if $profile.sex=='f'}checked="checked"{/if} />
      {$lang->grab("settings_$mode", "female")}
				</label>
				<label>
					<input type="radio" name="sex" value="m" {if $profile.sex=='m'}checked="checked"{/if} />
      {$lang->grab("settings_$mode", "male")}
				</label>
				<label>
					<input type="radio" name="sex" value="x" {if $profile.sex=='x'}checked="checked"{/if} />
      {$lang->grab("settings_$mode", "undefined")}
				</label>
			</td>
		</tr>
		<tr>
			<td>
    {$lang->grab("settings_$mode", "town")}
			</td>
			<td>
				<input name="home" type="text" size="24" maxlength="32" value="{$profile.home}" />
			</td>
		</tr>
		<tr>
			<td>
    {$lang->grab("settings_$mode", "avatar")}
			</td>
			<td>
			    {if !empty($user.image)}
					<img src="graphic/player/{$user.image}" alt="Wappen" />
					<br />
					<input name="del_image" type="checkbox" />
     {$lang->grab("settings_$mode", "delete_avatar")}
					<br />
				{/if}
	           	<input name="image" type="file" size="40" accept="image/*" maxlength="1048576" />
				<br />
				<span style="font-size: xx-small">max. 240x180, max. 120kByte, (jpg, jpeg, png, gif)</span>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<input type="submit" value="OK" />
			</td>
		</tr>
	</table>
	<br />
</form>

<form action="game.php?village={$village.id}&amp;screen=settings&amp;action=change_text&amp;h={$hkey}" method="post">
	<table class="vis">
		<tr>
			<th colspan="2">
        {$lang->grab("settings_$mode", "personal_text")}
			</th>
		</tr>
		<tr>
			<td colspan="2">
				<textarea name="personal_text" cols="50" rows="10">{$profile.personal_text}</textarea>
			</td>
		</tr>
		<tr>
			<td>
				<input type="submit" name="send" value="OK" />
			</td>
			<td align="right">

			</td>
		</tr>
	</table>
</form>