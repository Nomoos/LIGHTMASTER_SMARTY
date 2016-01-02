{include file='plans/plans-filter.tpl'}
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<div class="row">

    <div class="col-xs-12">
    <div id="chart" class="chart"></div>
    </div>
    <div id="slider_container" style="width: 500px;height: 300px;margin-left: 112px;margin-top: 50px;position: absolute;">
    </div>
</div>


<script>

    google.load("visualization", "1", {ldelim}packages: ["corechart"]{rdelim});

    {if isset($data)}
    var data = {$data};
    {else}
    var data = [
        [  60,      20],
        [  240,       60],
        [  360,      0],
        [  1200,      100]
    ];
    {/if}
    var bdata = [
        ['Čas(HH:MM)', 'Vytíženi(%)'],
        [  0,      20],
        [  50,      20],
        [  50,      30],
        [  660,      30],
        [   660,       0],
        [  1030,      0],
        [  1030,      60],
        [  1400,      60],
        [  1400,      20],
        [  1440,      20]
    ];
    {literal}
    var default_chart_option = {
        backgroundColor: 'hsla(0,0%,97%,1)',
        title: 'Nastavené vytížení',
        vAxis: {title: 'Vytíženi(%)', ticks: [0, 25, 50, 75, 100]},
        hAxis: {title: 'Čas(HH:MM)', ticks: [{v: 0, f: '0:00'}, {v: 720, f: '12:00'}, {v: 1440, f: '24:00'}]},
        chartArea:{width:'500',height:'300'},
        'width': 700,
        'height': 400,
        isStacked: true,
        colors:['red'],
        legend: {position: 'none'}
    };


    var default_chart;
    {/literal}

    function setWorkload(block,workload) {ldelim}

        if(1 <= block && block <= data.length) {ldelim}
            data[block-1][1] = workload;
        }else{ldelim}
            if(0 == block) {ldelim}
                data[data.length-1][1] = workload;
            }else{ldelim}
            console.log(block);
            console.log(data.length);
            console.log('out of limits');
                {rdelim}
            {rdelim}

        drawChart();
        addInput();
        {rdelim}



    function setTime(block,time) {ldelim}

        if(1 <= block && block <= data.length) {ldelim}
            data[block-1][0] = time;
        }else{ldelim}
            if(0 == block) {ldelim}
                data[data.length-1][0] = time;
            }else{ldelim}
                console.log(block);
                console.log(data.length);
                console.log('out of limits');
                {rdelim}
            {rdelim}

        drawChart();
        {rdelim}

    function compare(a, b) {ldelim}
        return a[0] - b[0];
    {rdelim}

    function buildData() {ldelim}
        bdata=[[default_chart_option.vAxis.title,default_chart_option.hAxis.title]];
        data.sort(compare);
        var endworkload = data[data.length-1].slice();
        var startworkload = data[data.length-1].slice();
        endworkload[0] = 1440;
        startworkload[0] = 0;
        bdata.push(startworkload);
        for (row in data) {ldelim}
            if(row==0) {
                bdata.push([data[row][0],startworkload[1]]);
            }else{
                bdata.push([data[row][0],data[row-1][1]]);
            }
            bdata.push(data[row]);
        {rdelim}
        bdata.push(endworkload);
        {rdelim}

    function drawChart() {ldelim}
        buildData();
        var chart_data = google.visualization.arrayToDataTable(bdata);
        default_chart = new google.visualization.AreaChart(document.getElementById('chart'));
        default_chart.draw(chart_data, default_chart_option);
    {rdelim}

    function addInput() {ldelim}
        var sliders = [];
        var sliders_html = '';
        for (i = 0; i < data.length+1; i++) {
            sliders[i] = "slider-vertical_"+i;
            sliders_html+='<div id="'+sliders[i]+'" style="height:300px;display: inline-block; background: transparent;"></div>'
        }
        sliders_html += '<div id="slider-horizontal" style="width: 500px;height: 0px;display: block;background: transparent;position: absolute;margin-top: -10px;"></div>';
        document.getElementById('slider_container').innerHTML = sliders_html;
        var endworkload = data[data.length-1].slice();
        var startworkload = data[data.length-1].slice();
        endworkload[0] = 1440;
        startworkload[0] = 0;
        for (row in sliders) {ldelim}
            if(row==0) {ldelim}
                jQuery('#'+sliders[row]).slider(
                        {ldelim}
                            orientation: "vertical",
                            step: 5,
                            range: "min",
                            min: 0,
                            max: 100,
                            value: startworkload[1],
                            slide: function( event, ui ) {ldelim}
                                setWorkload(jQuery(this).attr('id').split('slider-vertical_')[1], ui.value);
                                {rdelim},
                            create: function(event, ui){ldelim}
                                jQuery(this).css('width',((data[0][0]-startworkload[0])*0.347)+'px');
                                jQuery(this).children().css('display','none');

                                {rdelim}
                            {rdelim});
            {rdelim}else if(row==data.length){ldelim}
                jQuery('#'+sliders[row]).slider(
                        {ldelim}
                            orientation: "vertical",
                            step: 5,
                            range: "min",
                            min: 0,
                            max: 100,
                            value: data[row-1][1],
                            slide: function( event, ui ) {ldelim}
                                setWorkload(jQuery(this).attr('id').split('slider-vertical_')[1],ui.value);
                                {rdelim},
                            create: function(event, ui){ldelim}
                                jQuery(this).css('width',((endworkload[0]-data[row-1][0])*0.347)+'px');

                                jQuery(this).css('height','300px');
                                jQuery(this).children().css('display','none');
                                jQuery(this).css('display','inline-block');
                                jQuery(this).css('background','transparent');
                                {rdelim}
                            {rdelim});
                {rdelim}else{ldelim}
                jQuery('#'+sliders[row]).slider(
                        {ldelim}
                            orientation: "vertical",
                            step: 5,
                            range: "min",
                            min: 0,
                            max: 100,
                            value: data[row-1][1],
                            slide: function( event, ui ) {ldelim}
                                setWorkload(jQuery(this).attr('id').split('slider-vertical_')[1],ui.value);
                                {rdelim},
                            create: function(event, ui){ldelim}
                                jQuery(this).css('width',((data[row][0]-data[row-1][0])*0.347)+'px');

                                jQuery(this).css('height','300px');
                                jQuery(this).children('div').css('display','none');
                                jQuery(this).children('a').css('margin-left','40%');
                                jQuery(this).children('a').css('margin-right','40%');
                                jQuery(this).children('a').css('height','3px');
                                jQuery(this).children('a').css('margin-bottom','-1px');
                                jQuery(this).children('a').css('background','black');

                                jQuery(this).css('display','inline-block');
                                jQuery(this).css('background','transparent');
                                {rdelim}
                            {rdelim});
            {rdelim}
        {rdelim}
        addTimeInput();
    {rdelim}

    function addTimeInput() {ldelim}
        $("#slider-horizontal").slider({ldelim}
            min: 0,
            max: 1439,
            step: 5,
            values: getTimes(),
            start: function (event, ui) {ldelim}
                var hIndex = $(ui.handle).index();
                $("#slider").slider("option", "step", 1);

                {rdelim},
            slide: function (event, ui) {ldelim}

                for (row = 0; row < data.length; row++) {ldelim}
                    newValue = parseInt(ui.values[row]);
                    if(data[row][0] != newValue){ldelim}
                        if(0<row && row < data.length-1){ldelim}
                            if(data[row-1][0] < newValue-5 && newValue+5 < data[row+1][0]){ldelim}

                                data[row][0] = newValue;

                            {rdelim}else{ldelim}
                                return false;
                            {rdelim}

                        {rdelim}
                    {rdelim}
                {rdelim}

            {rdelim},
            stop: function (event, ui) {ldelim}
                    drawChart();
                    addInput();
                {rdelim}
        {rdelim});
    {rdelim}

    function getTimes(){ldelim}
        var times = [];
        for (row in data){ldelim}
            times.push(data[row][0]);
            {rdelim}
        return times;
    }

    jQuery( document ).ready(function() {

        drawChart();
    });
</script>

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