<?xml version="1.0"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>{$lang->get("village_groups")}</title>
<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1">
<link rel="stylesheet" type="text/css" href="stamm.css" />
<script src="script.js?1176997364" type="text/javascript"></script>
</head>

<body>
  <table class="main" width="100%">
    <tr>
      <td>
        <h3>{$lang->get("village_groups")}</h3>
        {if $mode == ''}
        <form method="post" action="groups.php?village={$village}&action=create">
          <table class="vis">
            <tr>
              <th>{$lang->get("found_group")}:</th>
              <td><input type="text" name="group_name" />
                  <input type="submit" value="{$lang->get('found')}" /></td>
            </tr>
              <table>
              <tbody>
        </form>
                <tr>
                  <td valign="top">
                    <table class="vis">
                    <tbody>
                      {foreach from=$groups item=g}
                      <tr>
                        <td {if $g.id == $group_id}class="selected"{/if} width="100" height="20">
                          <a href="groups.php?village={$village}&group_id={$g.id}">{$g.group_name}</a>
                        </td>
                      </tr>
                      {/foreach}
                    </tbody>
                    </table>
                  </td>
                  {if $amountGroups != 0}
                  <td valign="top">
                    <form method="post" action="groups.php?village={$village}&action=edit&group_id={$group.id}">
                      <table class="vis">
                        <tbody>
                          <tr>
                            <th>{$lang->get("change")}:</th>
                              <td>
                                <input value="{$group.group_name}" name="group_rename" />
                              </td>
                              <td rowspan="2">
                                <input type="submit" value="OK" />
                              </td>
                            </tr>
                            <tr>
                              <td colspan="2">
                                <label>
                                  <input type="checkbox" name="delete" />
                                    {$lang->get("delete_group")}
                                </label>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </form>
                    </td>
                  {/if}
                </tr>
              </tbody>
          </table>
          {else}
            {include file='../templates/game_groups_village.tpl'}
          {/if}
      </td>
    </tr>
  </table>
</body>
</html>