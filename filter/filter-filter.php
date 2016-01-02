<?php

if(isset($_GET['company'])){

    unset($_SESSION['filter']);

    if($_GET['company']!=''){
        $_SESSION['filter']['company'] = $_GET['company'];
    }
}
if(isset($_GET['area'])){

    unset($_SESSION['filter']['area']);
    unset($_SESSION['filter']['control']);
    unset($_SESSION['filter']['lamp']);

    if($_GET['area']!=''){
        $_SESSION['filter']['area'] = $_GET['area'];
    }
}
if(isset($_GET['control'])){

    unset($_SESSION['filter']['control']);
    unset($_SESSION['filter']['lamp']);

    if($_GET['control']!=''){
        $_SESSION['filter']['control'] = $_GET['control'];
    }
}
if(isset($_GET['lamp'])){

    unset($_SESSION['filter']['lamp']);

    if($_GET['lamp']!=''){
        $_SESSION['filter']['lamp'] = $_GET['lamp'];
    }
}


//choice rules
if (isset($_SESSION['filter']['company'])) {
    $list_sql = query("
    SELECT  rule_access.is_admin,rule_access.is_member,rule_access.edit_company,rule_access.edit_area,rule_access.edit_control,rule_access.edit_lamp FROM `users`
    LEFT OUTER JOIN rule_access ON rule_access.users_id = users.id
    LEFT OUTER JOIN company ON company.ID_company = rule_access.company_ID_company
    WHERE users.id=".$_SESSION['user']['id']." AND rule_access.company_ID_company=".$_SESSION['filter']['company'].";");

    if ($_SESSION['user']['admin'] == '2') {
        $rules = array('is_admin','is_member','edit_company','edit_area','edit_control','edit_lamp');
        foreach($rules as $id => $rule) {
            $rulesList[$rule] = "1";
        }
    }else {
        $rulesList = fetch_array($list_sql);
    }
}

$smarty->assign("rulesList", $rulesList);

//choice companies
if ($_SESSION['user']['admin'] == '2') {
    $list_sql = query("
    SELECT  company.ID_company,
    company.company_name
    FROM `company`
        ");
} elseif($_SESSION['user']['admin'] == '1'){
    $list_sql = query("
    SELECT  rule_access.is_admin,rule_access.is_member,company.ID_company,company.company_name FROM `users`
LEFT OUTER JOIN rule_access ON rule_access.users_id = users.id
LEFT OUTER JOIN company ON company.ID_company = rule_access.company_ID_company
WHERE users.id=".$_SESSION['user']['id'].";
        ");
}
$companiesList = fetch_array($list_sql);
if ($_SESSION['user']['admin'] == '2') {
    foreach($companiesList as $key => $value){
        $companiesList[$key]['is_admin']=1;
        $companiesList[$key]['is_member']=1;
    }
}

$smarty->assign("companiesList", $companiesList);


if (isset($_SESSION['filter']['company'])) {
    $list_sql = query("
    SELECT * FROM area WHERE company_ID_company =" . $_SESSION['filter']['company']
    );
}


$areasList = fetch_array($list_sql,'ID_area');
$smarty->assign("areasList", $areasList);


//choice control
if (isset($_SESSION['filter']['area'])) {
    $list_sql = query("
    SELECT * FROM control_gateway WHERE area_ID_area =" . $_SESSION['filter']['area']
    );
}
$controlsList = fetch_array($list_sql);
$smarty->assign("controlsList", $controlsList);



//choise lamp
if (isset($_SESSION['filter']['company'])){
    if (isset($_SESSION['filter']['area'])){
        if (isset($_SESSION['filter']['control'])){
            $list_sql = query("
        SELECT lamp.lat,lamp.lng,lamp.id,lamp.iplamp,area.area_name,control_gateway.control_name,lamp.is_enabled,workload_plan.ID_plan,workload_plan.plan_name,lamp.set_workload FROM `company`
        LEFT OUTER JOIN area ON area.company_ID_company = company.ID_company
        LEFT OUTER JOIN control_gateway ON control_gateway.area_ID_area = area.ID_area
        LEFT OUTER JOIN lamp ON lamp.control_gateway_ID_control = control_gateway.ID_control
        LEFT OUTER JOIN workload_plan ON workload_plan.ID_plan = lamp.workload_plan_default_ID_plan
        WHERE company.ID_company= ".$_SESSION['filter']['company']."
        AND area.ID_area = ".$_SESSION['filter']['area']."
        AND control_gateway.ID_control = ".$_SESSION['filter']['control']."
        AND lamp.x_deleted = '0';
        ");
        }else{
            $list_sql = query("
        SELECT lamp.lat,lamp.lng,lamp.id,lamp.iplamp,area.area_name,control_gateway.control_name,lamp.is_enabled,workload_plan.ID_plan,workload_plan.plan_name,lamp.set_workload FROM `company`
        LEFT OUTER JOIN area ON area.company_ID_company = company.ID_company
        LEFT OUTER JOIN control_gateway ON control_gateway.area_ID_area = area.ID_area
        LEFT OUTER JOIN lamp ON lamp.control_gateway_ID_control = control_gateway.ID_control
        LEFT OUTER JOIN workload_plan ON workload_plan.ID_plan = lamp.workload_plan_default_ID_plan
        WHERE company.ID_company= ".$_SESSION['filter']['company']."
        AND area.ID_area = ".$_SESSION['filter']['area']."
        AND lamp.x_deleted = '0';
        ");
        }
    }else{
        $list_sql = query("
        SELECT lamp.lat,lamp.lng,lamp.id,lamp.iplamp,area.area_name,control_gateway.control_name,lamp.is_enabled,workload_plan.ID_plan,workload_plan.plan_name,lamp.set_workload FROM `company`
        LEFT OUTER JOIN area ON area.company_ID_company = company.ID_company
        LEFT OUTER JOIN control_gateway ON control_gateway.area_ID_area = area.ID_area
        LEFT OUTER JOIN lamp ON lamp.control_gateway_ID_control = control_gateway.ID_control
        LEFT OUTER JOIN workload_plan ON workload_plan.ID_plan = lamp.workload_plan_default_ID_plan
        WHERE company.ID_company= ".$_SESSION['filter']['company']."
        AND lamp.x_deleted = '0';
        ");
    }
}else{
//go($setup['adm']['www'].'companies/list.html');
}

$lampsList = fetch_array($list_sql);

$smarty->assign("lampsList", $lampsList);

//choice default plan
$list_sql = query("SELECT * FROM workload_plan_default ORDER BY ID_plan");
$defaultPlansList = fetch_array($list_sql,'ID_plan');
$smarty->assign("defaultPlansList", $defaultPlansList);

//choice plan
$list_sql = query("SELECT * FROM workload_plan WHERE company_ID_company=".$_SESSION['filter']['company']." ORDER BY ID_plan");
$plansList = fetch_array($list_sql,'ID_plan');
$smarty->assign("plansList", $plansList);

?>
