{include file='filter/filter-filter.tpl'}

<div class="row">
    <div class="col-sm-12">
        <div class="widget-box">
            <div class="widget-header">
                {locale path="./locale" domain="lightmaster_en_US"}
                <h4>{t}LAMPSTITLE{/t}</h4>
            </div>
<script>
    var lamps = {$lampsList|json_encode};
</script>
            <div class="widget-body">
                <div class="widget-main no-padding">
                    <table class="table table-hover table-bordered table-striped table-condensed">
                        <thead>
                        <tr>
                            <th>IPLAMP</th>
                            <th>LATITUDE</th>
                            <th>LONGITUDE</th>
                            {if !isset($smarty.session.filter.area)}<th>AREANAME</th>{/if}
                            {if !isset($smarty.session.filter.control)}<th>CONTROLNAME</th>{/if}
                            <th>Value 4</th>
                            <th>Value 5</th>
                            <th>Value 6</th>
                        </tr>
                        </thead>
                        {foreach $lampsList AS $it}
                            <tr id="item{$it.id}">

                                <td>{$it.iplamp}</td>
                                <td>{$it.lat}</td>
                                <td>{$it.lng}</td>
                                {if !isset($smarty.session.filter.area)}<td>{$it.area_name}</td>{/if}
                                {if !isset($smarty.session.filter.control)}<td>{$it.control_name}</td>{/if}
                                <td>
                                    {if $rulesList.is_admin== 1 OR $rulesList.is_member== 1 }
                                        <div class="action-buttons">
                                            <a class="green" href="{$setup.adm.www}map/map.html?lamp={$it.id}" title="{t}ENTERLAMP{/t}">
                                                <i class="icon-check bigger-130"></i>
                                            </a>
                                        </div>
                                    {/if}
                                </td>
                                <td>
                                    {if $rulesList.is_admin == 1 OR ($rulesList.edit_lamp == 1 AND $rulesList.is_member == 1)}
                                        <div class="action-buttons">
                                            <a class="blue" href="{$setup.adm.www}lamps/edit.html?lamp={$it.id}" title="{t}EDIT{/t}">
                                                <i class="icon-edit bigger-130"></i>
                                            </a>
                                        </div>
                                    {/if}
                                </td>
                            {foreachelse}
                            <tr>
                                <td class="center" colspan="5">{t}NOLAMPINDB{/t}</td>
                            </tr>
                        {/foreach}
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>