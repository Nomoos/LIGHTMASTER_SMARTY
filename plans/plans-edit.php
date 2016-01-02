<?php
include '../plans/plans-filter.php';

if (isset($_POST['edit'])) {
    if (!$_POST['planname']) {
        $err[] = "NOTFILLPLANNAME";
    }
    if (!$_POST['data']) {
        $err[] = "NOTFILLDATA";
    }else{
        $data = json_decode($_POST['data']);
    }





    if (!$err) {
        if($new == 1){
            if($default==1){

                if (!query("INSERT workload_plan_default (`plan_name`) VALUES ('".$_POST['planname']."');")) {
                    $err[] = "FAULTINDBINSERT";
                    $smarty->assign("err", $err);
                }else {
                    $list_sql = query("SELECT ID_plan FROM workload_plan_default WHERE plan_name=".$_POST['planname']." ORDER BY ID_plan DESC  limit 1;");
                    $id = fetch_array($list_sql);
                    $id = $id[0]['id'];
                    foreach($data AS $key => $item) {
                        query("INSERT plan (`switch_time`, `switch_workload`, `workload_plan_default_ID_plan`) VALUES ('" . $item[0] . "', '" . $item[1] . "', '" . $id . "');");
                    }
                    go($setup['adm']['www'].'plans/show.html?defaultplan='.$id);
                }
            }else{

                if (!query("INSERT workload_plan (`plan_name`,`company_ID_company`) VALUES ('".$_POST['planname']."','".$_SESSION['filter']['company']."');")) {
                    $err[] = "FAULTINDBINSERT";
                    $smarty->assign("err", $err);
                }else {
                    $list_sql = query("SELECT ID_plan FROM workload_plan WHERE plan_name=".$_POST['planname']." ORDER BY ID_plan DESC  limit 1;");
                    $id = fetch_array($list_sql);
                    $id = $id[0]['id'];
                    foreach($data AS $key => $item) {
                        query("INSERT plans (`switch_time`, `switch_workload`, `workload_plan_ID_plan`) VALUES ('" . $item[0] . "', '" . $item[1] . "', '" . $id . "');");
                    }
                    go($setup['adm']['www'].'plans/show.html?plan='.$id);
                }
            }
        }elseif($default){
            query("UPDATE workload_plan_default SET `plan_name`='".$_POST['planname']."' WHERE `ID_plan`='".$_POST['defaultplan']."';");
            //clear switch times
            query("DELETE FROM `plans` WHERE `workload_plan_default_ID_plan`='".$_POST['defaultplan']."';");

            foreach($data AS $key => $item) {
                query("INSERT plans (`switch_time`, `switch_workload`, `workload_plan_default_ID_plan`) VALUES ('" . $item[0] . "', '" . $item[1] . "', '" . $_POST['defaultplan'] . "');");
            }
            go($setup['adm']['www'].'plans/show.html?defaultplan='.$_POST['defaultplan']);
        }else{
            query("UPDATE workload_plan SET `plan_name`='".$_POST['planname']."' WHERE `ID_plan`='".$_POST['plan']."';");
            //clear switch times
            query("DELETE FROM `plans` WHERE `workload_plan_ID_plan`='".$_POST['plan']."';");

            foreach($data AS $key => $item) {
                query("INSERT plans (`switch_time`, `switch_workload`, `workload_plan_ID_plan`) VALUES ('" . $item[0] . "', '" . $item[1] . "', '" . $_POST['plan'] . "');");
            }
            //go($setup['adm']['www'].'plans/show.html?plan='.$_POST['plan']);
        }
    } else {
        $smarty->assign("err", $err);
    }
}else{
    if($default==0) {
        $list_sql = query("SELECT plan_name FROM workload_plan WHERE ID_plan=".$_POST['plan']);
        $planName = fetch_array($list_sql);
    }else{
        $list_sql = query("SELECT plan_name FROM workload_plan_default WHERE ID_plan=".$_POST['defaultplan']);
        $planName = fetch_array($list_sql);
    }

    $_POST['planname'] = $planName[0]['plan_name'];
}

$smarty->assign("planname",$_POST['planname']);

$smarty->assign("STATUT-DEFAULT",$default);
$smarty->assign("STATUT-NEW",$new);
?>