<p>Vyberte oprávnění pro, které budete povolovat moduly, které bude moci využívat.</p>
<ul class="nav nav-pills">
    {foreach $opravneni AS $it}
        <li{if $smarty.get.perm == $it.id} class="active"{/if}>
            <a href="{$setup.adm.www}nastaveni/opravneniModul.html?perm={$it.id}">{$it.nazev}</a>
        </li>
    {/foreach}
</ul>

{if $smarty.get.perm}
    <div class="row">
        <div class="col-sm-6">
            <div class="dd dd-draghandle" id="nestable">
                <ol class="dd-list">
                    {foreach $list AS $it}
                        <li class="dd-item dd2-item" data-id="{$it.id}">
                            <div class="dd-handle dd2-handle">
                                <i class="normal-icon {$it.icon|default:'icon-circle'} bigger-130"></i>

                                <i class="drag-icon icon-move bigger-125"></i>
                            </div>
                            <div class="dd2-content">
                                {$it.nazev}
                                <div class="pull-right">
                                    <input class="ace ace-switch ace-switch-6" type="checkbox" name="modul[{$it.id}]" data-id="{$it.id}" data-typ="modul" value="2"{if $smarty.post}{if $smarty.post.def.zobraz=='2'} checked="checked"{/if}{elseif $it.id|in_array:$checked} checked="checked"{/if} title="Přiřadit" />
                                    <span class="lbl"></span>
                                </div>
                            </div>
                            {if $it.submodul}
                                <ol class="dd-list">
                                    {foreach $it.submodul AS $it2}
                                        <li class="dd-item dd2-item" data-id="{$it2.id}" title="Vybrat jako výchozí modul">
                                            <div class="dd-handle dd2-handle">
                                                <i class="normal-icon {$it2.icon|default:'icon-circle'}{if $opravneni[$smarty.get.perm]['vychoziModul'] == $it2.id} orange{/if} bigger-130"></i>

                                                <i class="drag-icon icon-move bigger-125"></i>
                                            </div>
                                            <div class="dd2-content {if $it2.zobraz=='0'}red{/if}">
                                                {$it2.nazev} <span class="lighter grey">{$it2.url}</span>

                                                <div class="pull-right">
                                                    <input class="ace ace-switch ace-switch-6" type="checkbox" name="modul[{$it2.id}]" data-id="{$it2.id}" data-typ="modul" value="2"{if $smarty.post}{if $smarty.post.def.zobraz=='2'} checked="checked"{/if}{elseif $it2.id|in_array:$checked} checked="checked"{/if} title="Přiřadit" />
                                                    <span class="lbl"></span>
                                                </div>
                                            </div>
                                        </li>
                                    {/foreach}
                                </ol>
                            {/if}
                        </li>
                    {/foreach}
                </ol>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="widget-box">
                <div class="widget-header">
                    <h4>Nastavení pro vybrané oprávnění</h4>
                </div>
                <div class="widget-body">
                    <div class="widget-main form-horizontal">
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right">SuperAdmin:</label>
                            <div class="col-sm-9">
                                <label>
                                    <input name="switch-field-1" data-id="admin" data-typ="opravneni" class="ace ace-switch ace-switch-6" type="checkbox"{if $perm.admin==2} checked="checked"{/if} />
                                    <span class="lbl"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{/if}