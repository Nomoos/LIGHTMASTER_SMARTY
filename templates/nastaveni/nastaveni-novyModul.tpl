{message msg=$msg type="info"}
{message msg=$err type="error"}
<form class="form-horizontal" id="form-1" role="form" method="post">
    <div class="form-group col-sm-12">
        <label class="col-sm-4 control-label no-padding-right red" for="form-field-1"> Název:</label>
        <div class="col-sm-8">
            <input type="text" id="form-field-1" placeholder="Název modulu" name="def[nazev]" value="{$smarty.post.def.nazev}" />
        </div>
    </div>
    <div class="space-4"></div>
    <div class="form-group col-sm-12">
        <label class="col-sm-4 control-label no-padding-right red" for="form-field-2"> Odkazovaná stránka: </label>
        <div class="col-sm-8">
            <input type="text" id="form-field-2" placeholder="Stránka" name="def[page]" value="{$smarty.post.def.page}" />
        </div>
    </div>
    <div class="space-4"></div>
    <div class="form-group col-sm-12">
        <label class="col-sm-4 control-label no-padding-right" for="form-field-3"> Ikona: </label>
        <div class="col-sm-8">
            <input type="text" id="form-field-3" placeholder="Název ikony" name="def[icon]" value="{$smarty.post.def.icon}" />
        </div>
    </div>
    <div class="space-4"></div>
    <div class="form-group col-sm-12">
        <label class="col-sm-4 control-label no-padding-right" for="form-field-4"> Nadpis: </label>
        <div class="col-sm-8">
            <input type="text" id="form-field-4" placeholder="Nadpis" name="def[nadpis]" value="{$smarty.post.def.nadpis}" />
        </div>
    </div>
    <div class="space-4"></div>
    <div class="form-group col-sm-12">
        <label class="col-sm-4 control-label no-padding-right" for="form-field-select-1"> Nadřazený modul: </label>
        <div class="col-sm-8">
            <select id="form-field-select-1" name="modul_id">
                <option value="">Bez nadřazeného modulu</option>
                <optgroup label="Hlavní moduly">
                    {foreach $option.modul AS $it}
                        <option value="{$it.id}"{if $smarty.post.modul_id == $it.id} selected="selected"{/if}>{$it.nazev}</option>
                    {/foreach}
                </optgroup>
            </select>
        </div>
    </div>
    <div class="space-4"></div>
    <div class="form-group col-sm-12">
        <label class="col-sm-4 control-label no-padding-right" for="form-field-5"> Zobrazovat </label>
        <div class="col-sm-8">
            <input class="ace ace-switch ace-switch-6" type="checkbox" id="form-field-5" name="def[zobraz]" value="2" {if $smarty.post.def.zobraz=='2'}checked="checked"{/if} />
            <span class="lbl"></span>
        </div>
    </div>
    <div class="space-4"></div>
    <div class="clearfix form-actions col-sm-12">
        <div class="col-sm-offset-3 col-sm-9">
            <button class="btn btn-info" data-submitform="1" data-submitvalue="new" type="button">
                <i class="icon-ok bigger-110"></i>
                Uložit
            </button>
            &nbsp; &nbsp; &nbsp;
            <button class="btn" type="reset">
                <i class="icon-undo bigger-110"></i>
                Smazat
            </button>
        </div>
    </div>
    <input id="submitValue1" type="hidden" name="submitValue" value="" />
</form>