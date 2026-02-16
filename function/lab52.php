<?php
class bike{
    function model()
    {
        $model_name = "Royal Enfield";
        echo "Bike model:" . $model_name;
    }
}
$obj= new bike();
$obj->model();
?>
