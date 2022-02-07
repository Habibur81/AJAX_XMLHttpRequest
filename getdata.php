<?php
    $val = $_GET['value'];

    $arr1 = array('laravel', 'symphony', 'codeline');
    $arr2 = array('React', 'angular', 'jquery');
    $arr3 = array('bottle', 'flash', 'django');

    switch ($val)
    {
        case "PHP" : foreach ($arr1 as $arr)
        {
            echo "<option>  $arr  </option>";
        }
        break;

        case "JAVASCRIPT" : foreach ($arr2 as $arr)
        {
            echo "<option>  $arr  </option>";
        }
        break;

        case "PYTHON" : foreach ($arr3 as $arr)
        {
            echo "<option>  $arr  </option>";
        }
        break;

        default : echo "No data found";
        break;

    }