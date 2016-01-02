
<div class="row">
    <div class="col-xs-12">
<div id="filter" style="height: 115px;display: table;width: 100%;">
    <h4 for="form-field-select-3">{t}FILTER{/t}</h4>

    <div class="col-sm-3">
        <select class="chosen-select form-control"id="form-field-select-1" data-placeholder="{t}Choose a default plan...{/t}" style="display: none;"  onchange="window.location=window.location.origin+window.location.pathname+'?defaultplan='+this.value" >
            <option value="">  </option>
            {foreach $defaultPlansList AS $it}
                <option value="{$it.ID_plan}" {if isset($defaultPlan)}{if $defaultPlan == $it.ID_plan}selected{/if}{/if}>{$it.plan_name}</option>
            {/foreach}
        </select>

        {*buttons*}
        <a title="{t}CREATENEWPLAN{/t}" href="{$setup.adm.www}plans/edit.html?isdefaultplan=1" class=" btn btn-primary no-radius btn-info">
            <i class="icon-plus"></i>
            {*{t}CREATENEWCOMPANY{/t}*}
        </a>
        {if isset($defaultPlan)}

            <button title="{t}EDITPLAN{/t}" onclick='window.location = "{$setup.adm.www}plans/edit.html?defaultplan={$defaultPlan}"' class=" btn btn-primary no-radius btn-success">
                <i class="icon-dashboard"></i>
                {*{t}EDITPLANWORKLOAD{/t}*}
            </button>
            <button title="{t}DELETEPLAN{/t}" onclick='window.location = "{$setup.adm.www}plans/delete.html?defaultplan={$defaultPlan}"' class=" btn btn-primary no-radius btn-danger disabled">
                <i class="icon-trash"></i>
                {*{t}DELETECOMPANY{/t}*}
            </button>
        {/if}

    </div>


    <div class="col-sm-3">
    <select class="chosen-select form-control"id="form-field-select-1" data-placeholder="{t}Choose a company plan...{/t}" style="display: none;"  onchange="window.location=window.location.origin+window.location.pathname+'?plan='+this.value" >
        <option value="">  </option>
        {foreach $plansList AS $it}
            <option value="{$it.ID_plan}" {if isset($plan)}{if $plan == $it.ID_plan}selected{/if}{/if}>{$it.plan_name}</option>        {/foreach}
        </select>

        {*buttons*}
        <a title="{t}CREATENEWPLAN{/t}" href="{$setup.adm.www}plans/edit.html" class=" btn btn-primary no-radius btn-info">
            <i class="icon-plus"></i>
            {*{t}CREATENEWCOMPANY{/t}*}
        </a>
        {if isset($plan)}

            <button title="{t}EDITPLAN{/t}" onclick='window.location = "{$setup.adm.www}plans/edit.html?plan={$plan}"' class=" btn btn-primary no-radius btn-success">
                <i class="icon-dashboard"></i>
                {*{t}EDITPLANWORKLOAD{/t}*}
            </button>
            <button title="{t}DELETECOMPANY{/t}" onclick='window.location = "{$setup.adm.www}plans/delete.html?plan={$plan}"' class=" btn btn-primary no-radius btn-danger disabled">
                <i class="icon-trash"></i>
                {*{t}DELETECOMPANY{/t}*}
            </button>
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
