{include file='filter/filter-filter.tpl'}
<div class="row">
    <div class="col-sm-12">
        <div class="widget-box">
            <div class="widget-header">
                {locale path="locale" domain="lightmaster_en_US"}
                <h4>{t}CONTROLSTITLE{/t}</h4>
            </div>
<script>
    var lamps = {$controlsList|json_encode};
</script>
            <div class="widget-body">
                <div class="widget-main no-padding">
                    <table class="table table-hover table-bordered table-striped table-condensed">
                        <thead>
                        <tr>
                            {* <th>{t}IDCONTROL{/t}</th>*}
                            <th>{t}CONTROLNAME{/t}</th>
                            <th>{t}CONTROLENTER{/t}</th>
                            <th>{t}CONTROLEDIT{/t}</th>
                        </tr>
                        </thead>
                        {foreach $controlsList AS $it}
                            <tr id="item{$it.id}">

                                {*<td>{$it.ID_control}</td>*}
                                <td>{$it.control_name} {if $it.is_admin == 1 }<button class="btn disabled btn-minier btn-yellow">{t}ADMIN{/t}</button>{/if}{if $it.is_admin == 1 }<button class="btn disabled btn-minier btn-success">{t}MEMBER{/t}</button>{/if}</td>
                                <td>
                                    {if $rulesList.is_admin== 1 OR $rulesList.is_member== 1 }
                                        <div class="action-buttons">
                                            <a class="green" href="{$setup.adm.www}lamps/list.html?control={$it.ID_control}" title="{t}ENTERCONTROL{/t}">
                                                <i class="icon-check bigger-130"></i>
                                            </a>
                                        </div>
                                    {/if}
                                </td>
                                <td>
                                    {if $rulesList.is_admin == 1 OR ($rulesList.edit_control == 1 AND $rulesList.is_member == 1)}
                                    <div class="action-buttons">
                                        <a class="blue" href="{$setup.adm.www}controls/edit.html?control={$it.ID_control}" title="{t}EDIT{/t}">
                                            <i class="icon-edit bigger-130"></i>
                                        </a>
                                    </div>
                                    {/if}
                                </td>
                            </tr>
                            {foreachelse}
                            <tr>
                                <td class="center" colspan="5">{t}NOCONTROLSINDB{/t}</td>
                            </tr>
                        {/foreach}
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>