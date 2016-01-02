{include file='filter/filter-filter.tpl'}
<div class="row">

    <div class="col-xs-12">
<div id="map" class="map_container" style="height: 500px;"></div>
    </div>
</div>


{*Tile managment*}
<script>

    var map = L.map('map').setView([49.5939, 17.2655], 2);

    // add an OpenStreetMap tile layer
    L.tileLayer('http://{ldelim}s{rdelim}.tile.osm.org/{ldelim}z{rdelim}/{ldelim}x{rdelim}/{ldelim}y{rdelim}.png', {ldelim}attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'{rdelim}).addTo(map);
</script>

{*Icon managment*}
<script>
    //General icon
    var LeafIcon = L.Icon.extend(
    {ldelim}
        options:
        {ldelim}
            shadowUrl: '{$setup.adm.www}assets/img/LightBulb-512.png',
            iconSize: [15, 15],
            shadowSize: [0, 0],
            iconAnchor: [7, 7],
            shadowAnchor: [0, 0],
            popupAnchor: [0, -4]
        {rdelim}
    {rdelim}
    );

    //Current icons
    var lampIcon = new LeafIcon({ldelim}iconUrl: '{$setup.adm.www}assets/img/sviti.png'{rdelim});
    var lampIcon_nesviti = new LeafIcon({ldelim}iconUrl: '{$setup.adm.www}assets/img/nesviti.png'{rdelim});
    var lampIcon_oznacena = new LeafIcon({ldelim}iconUrl: '{$setup.adm.www}assets/img/oznacena.png'{rdelim});
    var lampIcon_edit = new LeafIcon({ldelim}iconUrl: '{$setup.adm.www}assets/img/edit.png'{rdelim});
</script>

{* messages*}

<script>

    {literal}
    function newlampinfo() {
        {/literal}
        document.getElementById('filter').innerHTML = '<div style="display: table-cell;vertical-align: bottom;">' +
                '<div class="col-sm-offset-3 col-sm-9">' +
                '<button class="btn btn-info" type="button" onclick="editlampdrawend()">' +
                '<i class="icon-ok bigger-110"></i>' +
                '{t}SAVE{/t}' +
                '</button>' +
                '&nbsp; &nbsp; &nbsp;' +
                '<button class="btn" type="button" onclick="window.location=\'{$setup.adm.request_url}\'">' +
                '<i class="icon-undo bigger-110"></i>' +
                '{t}CANCEL{/t}' +
                '</button>' +
                '</div>' +
                '</div>';
        {literal}
    }
    function newareainfo() {
        {/literal}
        document.getElementById('filter').innerHTML = '<div style="display: table-cell;vertical-align: bottom;">' +
                '<div class="col-sm-offset-3 col-sm-9">' +
                '<button class="btn btn-info" type="button" onclick="editareadrawend()">' +
                '<i class="icon-ok bigger-110"></i>' +
                '{t}SAVE{/t}' +
                '</button>' +
                '&nbsp; &nbsp; &nbsp;' +
                '<button class="btn" type="button" onclick="window.location=\'{$setup.adm.request_url}\'">' +
                '<i class="icon-undo bigger-110"></i>' +
                '{t}CANCEL{/t}' +
                '</button>' +
                '</div>' +
                '</div>';
        {literal}
    }
    {/literal}
</script>


{* layers *}
<script>
var polygons = new L.featureGroup().addTo(map);
var markers = new L.LayerGroup().addTo(map);
</script>

{*Map controler*}
<script>
drawControl = new L.Control.Draw({ldelim}
draw: {ldelim}
polygon: {ldelim}
//barva plochy
shapeOptions: {ldelim}color: '#FF55FF'{rdelim}
{rdelim},
polyline: false,
rectangle: false,
circle: false,
marker: false
{rdelim},
edit: {ldelim}
featureGroup: polygons
{rdelim},
position: 'topleft'
{rdelim});

map.on('draw:created', function (e) {
polygons.addLayer(e.layer);

var layer = e.layer;
var shape = layer.toGeoJSON();
var shape_for_db = getcoordsfordb(shape);
post('{$setup.adm.www}areas/new.html',{ldelim}'arealocation': shape_for_db{rdelim});
});

map.on('draw:drawstart', function (e) {
{* change filter to edit*}
console.log(e);
});

map.on('draw:edited', function (e) {
var layers = e.layers;
layers.eachLayer(function (layer) {
//do whatever you want, most likely save back to db
var shape = layer.toGeoJSON();
var shape_for_db = getcoordsfordb(shape);
console.log(shape_for_db);
post('{$setup.adm.www}areas/edit.html',{ldelim}location: shape_for_db{rdelim});
})
});

</script>


{*Markers managment*}
<script>

    {foreach $lampsList AS $it}
        console.log({$it.lat});
        console.log({$it.lng});
        {if $it.is_enabled}
            markerfordraw = L.marker([{$it.lat}, {$it.lng}],{ldelim}icon: lampIcon{rdelim});
        {else}
            markerfordraw = L.marker([{$it.lat}, {$it.lng}],{ldelim}icon: lampIcon{rdelim});
        {/if}
        markerfordraw.addTo(markers);
    {/foreach}
    markers.addTo(map);
</script>

{*Polygons managment*}
<script>
{if isset($areasList)}
{if isset($smarty.session.filter.area)}
        polygonfordraw = L.polygon({$areasList[$smarty.session.filter.area].location});
        polygonfordraw.addTo(polygons);
{else}
    {foreach $areasList AS $it}
        polygonfordraw = L.polygon({$it.location});
        polygonfordraw.on('click', function (e) {ldelim}
            window.location = window.location.origin+window.location.pathname+'?area={$it.ID_area}#map';
        {rdelim});
        polygonfordraw.addTo(polygons);
    {/foreach}
{/if}
map.fitBounds(polygons.getBounds());
editTool = new L.EditToolbar.Edit(map, {
    featureGroup: polygons
});
{/if}

</script>
<script>
{literal}

function newarea(){
    newareainfo();
    var newpolygon = new L.Draw.Polygon(map, drawControl.options.polygon);
    newpolygon.enable();
}

function newlamponclick(){
    newlampinfo();
    polygons.on('click', function (e) {
        polygons.off('click');
        newlamp = L.marker(e.latlng, {
            icon: lampIcon
        }).addTo(markers).setIcon(lampIcon_edit).on('dragend', function upradecords() {
            console.log(newlamp.getLatLng());
        });
        newlamp.dragging.enable()
    })
}

function editareadrawend(){
    {/literal}
        {if isset($smarty.session.filter.area)}
    {literal}
        var layer = polygons.getLayers()[0];
        //do whatever you want, most likely save back to db
        var shape = layer.toGeoJSON();
        var shape_for_db = getcoordsfordb(shape);
        console.log(shape_for_db);
        {/literal}
        post('{$setup.adm.www}areas/edit.html?area={$smarty.session.filter.area}',{ldelim}arealocation: shape_for_db{rdelim});

        {/if}
        {literal}

}

function editlampdrawend(){

    {/literal}
    {if isset($smarty.session.filter.lamp)}
    post('{$setup.adm.www}lamps/edit.html?lamp={$smarty.session.filter.lamp}',{ldelim}lat : newlamp.getLatLng().lat, lng : newlamp.getLatLng().lng{rdelim});
    {else}
    post('{$setup.adm.www}lamps/new.html',{ldelim}lat : newlamp.getLatLng().lat, lng : newlamp.getLatLng().lng{rdelim});
    {/if}
    {literal}

}


function editarea(){
    map.fitBounds(polygons.getBounds());
    newareainfo();
    editTool.enable();
}

function getcoordsfordb(actualarea){
    var text = "[";
    for (i = 0; i < actualarea.geometry.coordinates[0].length; i++) {
        text += "[" + actualarea.geometry.coordinates[0][i][1] + ","+ actualarea.geometry.coordinates[0][i][0] +"]";
        if(i+1 < actualarea.geometry.coordinates[0].length){
            text += ",";
        }
    }

    text += "]";
    console.log(text);
    return text
}
{/literal}


</script>

<script>
{* create objects on other page *}

{if isset($smarty.get.newarea)}
newarea();
{/if}
{if isset($smarty.get.editarea)}
editarea();
{/if}

{if isset($smarty.get.newlamp)}
newlamponclick();
{/if}
</script>


{* lamp managment*}




<script>
    {literal}
    function post(path, params, method) {
        method = method || "post"; // Set method to post by default if not specified.

        // The rest of this code assumes you are not using a library.
        // It can be made less wordy if you use one.
        var form = document.createElement("form");
        form.setAttribute("method", method);
        form.setAttribute("action", path);

        for(var key in params) {
            if(params.hasOwnProperty(key)) {
                var hiddenField = document.createElement("input");
                hiddenField.setAttribute("type", "hidden");
                hiddenField.setAttribute("name", key);
                hiddenField.setAttribute("value", params[key]);

                form.appendChild(hiddenField);
            }
        }

        document.body.appendChild(form);
        form.submit();
    }
    {/literal}
    </script>