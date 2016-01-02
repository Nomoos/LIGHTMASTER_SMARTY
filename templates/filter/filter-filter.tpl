
<div class="row">
    <div class="col-xs-12">
<div id="filter" style="height: 115px;display: table;width: 100%;">
    <h4 for="form-field-select-3">{t}FILTER{/t}</h4>

    <div class="col-sm-3">
    <select class="chosen-select form-control"id="form-field-select-1" data-placeholder="Choose a company..." style="display: none;"  onchange="window.location=window.location.origin+window.location.pathname+'?company='+this.value" >
        <option value="">  </option>
        {foreach $companiesList AS $it}
            <option value="{$it.ID_company}" {if isset($smarty.session.filter.company)}{if $smarty.session.filter.company == $it.ID_company}selected{/if}{/if}>{$it.company_name}</option>
        {/foreach}
    </select>

        {*buttons*}
        <a title="{t}CREATENEWCOMPANY{/t}" href="{$setup.adm.www}companies/new.html" class=" btn btn-primary no-radius btn-info">
            <i class="icon-plus"></i>
            {*{t}CREATENEWCOMPANY{/t}*}
        </a>
        {if isset($smarty.session.filter.company)}

            <a title="{t}EDITCOMPANY{/t}" href="{$setup.adm.www}companies/edit.html?id={$smarty.session.filter.company}" class=" btn btn-primary no-radius btn-success">
                <i class="icon-pencil"></i>
                {*{t}EDITCOMPANY{/t}*}
            </a>
            <a title="{t}DELETECOMPANY{/t}" href="{$setup.adm.www}companies/delete.html?id={$smarty.session.filter.company}" class=" btn btn-primary no-radius btn-danger disabled">
                <i class="icon-trash"></i>
                {*{t}DELETECOMPANY{/t}*}
            </a>
        {/if}

    </div>

    <div class="col-sm-3">
    {if isset($smarty.session.filter.company)}
    <select class="chosen-select form-control disabled" id="form-field-select-2" data-placeholder="Choose a area..." style="display: none;"  onchange="window.location=window.location.origin+window.location.pathname+'?area='+this.value+'{if $page.main.name != 'map' or $page.sub.name != 'map'}#filter{else}#map{/if}'" >
        <option value="">  </option>
        {foreach $areasList AS $it}
            <option value="{$it.ID_area}"  {if isset($smarty.session.filter.area)}{if $smarty.session.filter.area == $it.ID_area}selected{/if}{/if}>{$it.area_name}</option>
        {/foreach}
    </select>
        {*buttons*}
        <button title="{t}CREATENEWAREA{/t}" onclick="{if $page.main.name != 'map' or $page.sub.name != 'map'}window.location='{$setup.adm.www}map/map.html?newarea=1'{else}newarea(){/if}" class="btn btn-primary no-radius btn-info">
            <i class="icon-plus"></i>
            {*{t}CREATENEWAREA{/t}*}
        </button>
        {if isset($smarty.session.filter.area)}

            <button title="{t}EDITAREA{/t}" onclick="{if $page.main.name != 'map' or $page.sub.name != 'map'}window.location='{$setup.adm.www}map/map.html?editarea=1'{else}editarea(){/if}" class="btn btn-primary no-radius btn-success">
                <i class="icon-pencil"></i>
                {*{t}EDITAREA{/t}*}
            </button>
            <a title="{t}DELETEAREA{/t}" href="{$setup.adm.www}areas/delete.html?id={$smarty.session.filter.area}" class="btn btn-primary no-radius btn-danger disabled">
                <i class="icon-trash"></i>
                {*{t}DELETEAREA{/t}*}
            </a>
        {/if}

    {/if}
    </div>

    <div class="col-sm-3">
    {if isset($smarty.session.filter.area)}
    <select class="chosen-select form-control" id="form-field-select-3" data-placeholder="Choose a control..." style="display: none;"  onchange="window.location=window.location.origin+window.location.pathname+'?control='+this.value" >
        <option value="">  </option>
        {foreach $controlsList AS $it}
            <option value="{$it.ID_control}"  {if isset($smarty.session.filter.control)}{if $smarty.session.filter.control == $it.ID_control}selected{/if}{/if}>{$it.control_name}</option>
        {/foreach}
    </select>
        {*buttons*}
        <button title="{t}CREATENEWCONTROL{/t}" onclick="window.location='{$setup.adm.www}controls/new.html'" class="btn btn-primary no-radius btn-info">
            <i class="icon-plus"></i>
            {*{t}CREATENEWCONTROL{/t}*}
        </button>
        {if isset($smarty.session.filter.control)}

            <button title="{t}EDITCONTROL{/t}" onclick="window.location='{$setup.adm.www}controls/edit.html?control={$smarty.session.filter.control}'" class="btn btn-primary no-radius btn-success">
                <i class="icon-pencil"></i>
                {*{t}EDITCONTROL{/t}*}
            </button>
            <a title="{t}DELETECONTROL{/t}" href="{$setup.adm.www}controls/delete.html?id={$smarty.session.filter.control}" class="btn btn-primary no-radius btn-danger disabled">
                <i class="icon-trash"></i>
                {*{t}DELETECONTROL{/t}*}
            </a>
        {/if}
    {/if}
    </div>

    <div class="col-sm-3">
    {if isset($smarty.session.filter.company)}
        <select class="chosen-select form-control" id="form-field-select-4" data-placeholder="Choose a lamp..." style="display: none;"  onchange="window.location=window.location.origin+window.location.pathname+'?lamp='+this.value" >
            <option value="">  </option>
            {foreach $lampsList AS $it}
                <option value="{$it.id}"  {if isset($smarty.session.filter.lamp)}{if $smarty.session.filter.lamp == $it.id}selected{/if}{/if}>{$it.iplamp}</option>
            {/foreach}
        </select>
    {/if}
        {if isset($smarty.session.filter.area)}
        {*buttons*}
        <button title="{t}CREATENEWCLAMP{/t}" onclick="{if $page.main.name != 'map' or $page.sub.name != 'map'}window.location='{$setup.adm.www}lamps/new.html'{else}newlamponclick(){/if}" class="btn btn-primary no-radius btn-info">
            <i class="icon-plus"></i>
            {*{t}CREATENEWCONTROL{/t}*}
        </button>
        {if isset($smarty.session.filter.lamp)}

            <button title="{t}EDITLAMP{/t}" onclick="window.location='{$setup.adm.www}lamps/edit.html?lamp={$smarty.session.filter.lamp}'" class="btn btn-primary no-radius btn-success">
                <i class="icon-pencil"></i>
                {*{t}EDITCONTROL{/t}*}
            </button>
            <a title="{t}DELETELAMP{/t}" href="{$setup.adm.www}lamps/delete.html?lamp={$smarty.session.filter.lamp}" class="btn btn-primary no-radius btn-danger disabled">
                <i class="icon-trash"></i>
                {*{t}DELETECONTROL{/t}*}
            </a>
        {/if}
        {/if}

    </div>

</div>
</div>
</div>

<script>
    jQuery(".chosen-select").chosen({ldelim}allow_single_deselect:true,width: "100%"{rdelim});
    // load lamps
    var lamps = {$lampsList|json_encode};
</script>
