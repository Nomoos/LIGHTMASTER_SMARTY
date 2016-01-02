<?php
include '../filter/filter-filter.php';
if(!isset($_SESSION['filter']['company'])) {
    go($setup['adm']['www'].'companies/list.html');
}

if(isset($_GET['plan'])){
    if($_GET['plan']!=''){
        $_POST['plan'] = $_GET['plan'];
    }
}elseif(isset($_GET['defaultplan'])){
    if($_GET['defaultplan']!=''){
        $_POST['defaultplan'] = $_GET['defaultplan'];
        $default = 1;
    }
}elseif(isset($_POST['plan'])){

}elseif(isset($_POST['defaultplan'])){
    $default = 1;
}


$smarty->assign("plan", $_POST['plan']);
$smarty->assign("defaultPlan", $_POST['defaultplan']);

$new = 0;
$default = 0;

if (isset($_POST['plan'])) {

}elseif(isset($_POST['defaultplan'])){
    $default = 1;
}else{
    if(isset($_GET['isdefaultplan'])){
        $default = 1;
    }
    $new = 1;
}

if(isset($_GET['data'])){
    $data = $_GET['data'];

}elseif($_POST['data']){
    $data = $_POST['data'];
}else{
    if($default==0) {
        $list_sql = query("SELECT switch_time,switch_workload,workload_plan_ID_plan FROM plans WHERE workload_plan_ID_plan=".$_POST['plan']." ORDER BY switch_time;");
        $setingsList = fetch_array($list_sql);
        if(isset($setingsList) && !is_null($setingsList)) {
            $data = '[';
            foreach ($setingsList AS $key => $item) {
                $data = $data . '[' . $item['switch_time'] . ',' . $item['switch_workload'] . '],';
            }
            $data = substr($data, 0, -1) . ']';
        }else{

            $data = '[['.(6*60).',40],['.(8*60).',0],['.(16*60).',40],['.(18*60).',60],['.(20*60).',100],['.(22*60).',60]]';
        }
    }else{
        $list_sql = query("SELECT switch_time,switch_workload,workload_plan_default_ID_plan FROM plans WHERE workload_plan_default_ID_plan='".$_POST['defaultplan']."' ORDER BY switch_time;");
        $setingsList = fetch_array($list_sql);
        if(isset($setingsList) && !is_null($setingsList)) {
            $data = '[';
            foreach ($setingsList AS $key => $item) {
                $data = $data . '[' . $item['switch_time'] . ',' . $item['switch_workload'] . '],';
            }
            $data = substr($data, 0, -1) . ']';
        }else{

            $data = '[['.(6*60).',40],['.(8*60).',0],['.(16*60).',40],['.(18*60).',60],['.(20*60).',100],['.(22*60).',60]]';
        }
    }
}

$smarty->assign("data", $data);

?>
