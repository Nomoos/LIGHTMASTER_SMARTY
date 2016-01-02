{message msg=$msg type="info"}
{message msg=$err type="error"}

<div class="row">
    <div class="col-sm-12">
        <div class="widget-box">
            <div class="widget-header">
                <h4>{t}COMPANIESTITLE{/t}</h4>
            </div>
<script>
    var lamps = {$companiesList|json_encode};
</script>
            <div class="widget-body">
                <div class="widget-main no-padding">
                    <table class="table table-hover table-bordered table-striped table-condensed">
                        <thead>
                        <tr>
                            {* <th>{t}IDCOMPANY{/t}</th>*}
                            <th>{t}COMPANYNAME{/t}</th>
                            <th>{t}COMPANYAREAS{/t}</th>
                            <th>{t}COMPANYONMAP{/t}</th>
                            <th>{t}COMPANYSTATS{/t}</th>
                            <th>{t}COMPANYPLANS{/t}</th>
                            <th>{t}COMPANYEDIT{/t}</th>
                        </tr>
                        </thead>
                        {foreach $companiesList AS $it}
                            <tr id="item{$it.id}">

                                {*<td>{$it.ID_company}</td>*}
                                <td>{$it.company_name} {if $it.is_admin == 1 }<button class="btn disabled btn-minier btn-yellow">{t}ADMIN{/t}</button>{/if}{if $it.is_member == 1 }<button class="btn disabled btn-minier btn-success">{t}MEMBER{/t}</button>{/if}</td>
                                <td>
                                    {if $it.is_admin== 1 OR $it.is_member== 1 }
                                        <div class="action-buttons">
                                            <a class="light-blue" href="{$setup.adm.www}areas/list.html?company={$it.ID_company}" title="{t}COMPANYAREAS{/t}">
                                                <i class="icon-globe bigger-130"></i>
                                            </a>
                                        </div>
                                    {/if}
                                </td>
                                <td>
                                    {if $it.is_admin== 1 OR $it.is_member== 1 }
                                        <div class="action-buttons">
                                            <a class="light-green" href="{$setup.adm.www}map/map.html?company={$it.ID_company}" title="{t}COMPANYONMAP{/t}">
                                                <i class="icon-picture bigger-130"></i>
                                            </a>
                                        </div>
                                    {/if}
                                </td>

                                <td>
                                    {if $it.is_admin== 1 }
                                        <div class="action-buttons">
                                            <a class="light-red" href="{$setup.adm.www}stats/stats.html" title="{t}COMPANYSTATS{/t}">
                                                <i class="icon-camera bigger-130"></i>
                                            </a>
                                        </div>
                                    {/if}
                                </td>

                                <td>
                                    {if $it.is_admin== 1 }
                                        <div class="action-buttons">
                                            <a class="red disabled" href="{$setup.adm.www}planes/list.html" title="{t}COMPANYPLANS{/t}">
                                                <i class="icon-calendar bigger-130"></i>
                                            </a>
                                        </div>
                                    {/if}
                                </td>

                                <td>
                                    {if $it.is_admin== 1 }
                                    <div class="action-buttons">
                                        <a class="light-red" href="{$setup.adm.www}companies/edit.html?company={$it.ID_company}" title="{t}EDIT{/t}">
                                            <i class="icon-edit bigger-130"></i>
                                        </a>
                                    </div>
                                    {/if}
                                </td>

                            </tr>
                            {foreachelse}
                            <tr>
                                <td class="center" colspan="5">{t}NOCOMPANIESINDB{/t}</td>
                            </tr>
                        {/foreach}
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>