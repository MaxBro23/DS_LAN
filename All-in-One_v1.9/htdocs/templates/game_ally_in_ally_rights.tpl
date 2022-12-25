<script type="text/javascript">
function set_found_right() {ldelim}
  check_and_disable("lead", gid("found").checked);
  set_lead_right();
{rdelim}

function set_lead_right() {ldelim}
  var checked = gid("lead").checked;
  check_and_disable("invite", checked);
  check_and_disable("diplomacy", checked);
  check_and_disable("mass_mail", checked);
  check_and_disable("forum_mod", checked);
  check_and_disable("internal_forum", checked);
{rdelim}

function check_and_disable(name, check) {ldelim}
  gid(name).disabled = check;
  if(check == true) {ldelim}
    gid(name).checked = check;
  {rdelim}
{rdelim}
</script>

<h3>{$lang->grab("ally_rights", "change_rights")} {$rights.username}</h3>
<p>{$lang->grab("ally_rights", "rights_info")}</p>
<form action="game.php?village={$village.id}&amp;screen=ally&amp;mode=rights&amp;action=edit_rights&amp;player_id={$rights.id}&amp;h={$hkey}" method="post">

<label><h5><input type="checkbox" name="found" id="found" onchange="set_found_right()" {if $rights.ally_found==1}checked="checked"{/if} {if $user.ally_found==0}disabled="disabled"{/if}> <img src="graphic/ally_rights/found.png" alt="Stammesgründer" title="Stammesgründer" /> {$lang->grab("ally_rights", "found")} </h5></label>
<p>{$lang->grab("ally_rights", "found_text")}</p>

<label><h5><input type="checkbox" name="lead" id="lead" onchange="set_lead_right()" {if $rights.ally_found==1}disabled="disabled"{/if} {if $rights.ally_lead==1}checked="checked"{/if}> <img src="graphic/ally_rights/lead.png" alt="Stammesführung" title="Stammesführung" /> {$lang->grab("ally_rights", "lead")} </h5></label>
<p>{$lang->grab("ally_rights", "lead_text")}</p>

<label><h5><input type="checkbox" name="invite" id="invite" {if $rights.ally_found==1 || $rights.ally_lead==1}disabled="disabled"{/if} {if $rights.ally_invite==1}checked="checked"{/if}> <img src="graphic/ally_rights/invite.png" alt="Einladen" title="Einladen" /> {$lang->grab("ally_rights", "invite")} </h5></label>
<p>{$lang->grab("ally_rights", "invite_text")}</p>

<label><h5><input type="checkbox" name="diplomacy" id="diplomacy" {if $rights.ally_found==1 || $rights.ally_lead==1}disabled="disabled"{/if} {if $rights.ally_diplomacy==1}checked="checked"{/if}> <img src="graphic/ally_rights/diplomacy.png" alt="Diplomatie" title="Diplomatie" /> {$lang->grab("ally_rights", "diplomacy")} </h5></label>
<p>{$lang->grab("ally_rights", "diplomacy_text")}</p>

<label><h5><input type="checkbox" name="mass_mail" id="mass_mail" {if $rights.ally_found==1 || $rights.ally_lead==1}disabled="disabled"{/if} {if $rights.ally_mass_mail==1}checked="checked"{/if}> <img src="graphic/ally_rights/mass_mail.png" alt="Rundschreiben" title="Rundschreiben" /> {$lang->grab("ally_rights", "mass_mail")} </h5></label>
<p>{$lang->grab("ally_rights", "mass_mail_text")}</p>

<h3>{$lang->grab("ally_rights", "title")}</h3>
<p>{$lang->grab("ally_rights", "title_tribe")}: <input type="text" name="title" maxlength="24" value="{$rights.ally_titel}"></p>
<p><input type="submit" value="OK"></p>
</form>