<div class="row">
    <div class="col-sm-12">
        <div class="widget-box">
            <div class="widget-header">
                {locale path="locale" domain="lightmaster_en_US"}
                <h4>{t}AREASTITLE{/t}</h4>
            </div>
<script>
    var areas = {$areasList|json_encode};
</script>
            <div class="widget-body">
                <div class="widget-main no-padding">
                    <table class="table table-hover table-bordered table-striped table-condensed">
                        <thead>
                        <tr>
                            {* <th>{t}IDAREA{/t}</th>*}
                            <th>{t}AREANAME{/t}</th>
                            <th>{t}AREAENTER{/t}</th>
                            <th>{t}AREAEDIT{/t}</th>
                        </tr>
                        </thead>
                        {foreach $areasList AS $it}
                            <tr id="item{$it.id}">

                                {*<td>{$it.ID_area}</td>*}
                                <td>{$it.area_name}</td>
                                <td>
                                    {if $rulesList.is_admin== 1 OR $rulesList.is_member== 1 }
                                        <div class="action-buttons">
                                            <a class="green" href="{$setup.adm.www}controls/list.html?area={$it.ID_area}" title="{t}ENTERCOMPANY{/t}">
                                                <i class="icon-check bigger-130"></i>
                                            </a>
                                        </div>
                                    {/if}
                                </td>
                                <td>
                                    {if $ruleList.is_admin == 1 OR ($rulesList.edit_area == 1 AND $rulesList.is_member == 1)}
                                    <div class="action-buttons">
                                        <a class="blue" href="{$setup.adm.www}areas/edit.html?area={$it.ID_area}" title="{t}EDIT{/t}">
                                            <i class="icon-edit bigger-130"></i>
                                        </a>
                                    </div>
                                    {/if}
                                </td>
                            </tr>
                            {foreachelse}
                            <tr>
                                <td class="center" colspan="5">{t}NOAREASINDB{/t}</td>
                            </tr>
                        {/foreach}
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>