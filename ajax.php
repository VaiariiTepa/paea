<?php
    include 'class/classService.php';

    $service = new service();
    $service_id = $_POST['service_id'];
    $result = $service->AjaxGetServiceType($service_id);

    echo $result;

?>