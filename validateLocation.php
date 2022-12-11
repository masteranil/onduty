<?php

function validateLocation($input_method, &$formdata, &$errors) {
    $formdata['Name'] = filter_input($input_method, "Name", FILTER_SANITIZE_STRING);
    $formdata['Address'] = filter_input($input_method, "Address", FILTER_SANITIZE_STRING);
    $formdata['managerFName'] = filter_input($input_method, "managerFName", FILTER_SANITIZE_STRING);
   
    $formdata['managerEmail'] = filter_input($input_method, "managerEmail", FILTER_SANITIZE_EMAIL);
    $formdata['managerNumber'] = filter_input($input_method, "managerNumber", FILTER_SANITIZE_NUMBER_INT);
    $formdata['maxCap'] = filter_input($input_method, "maxCap", FILTER_SANITIZE_NUMBER_INT);
   
    if ($formdata['Name'] === NULL ||
                    $formdata['Name'] === FALSE ||
                    $formdata['Name'] === "")
    {
        $errors['Name'] = "name required";
    }
    
    if ($formdata['Address'] === NULL ||
                    $formdata['Address'] === FALSE ||
                    $formdata['Address'] === "")
    {
        $errors['Address'] = "address required";
    }   
    
    if ($formdata['managerFName'] === NULL ||
                    $formdata['managerFName'] === FALSE ||
                    $formdata['managerFName'] === "")
    {
        $errors['managerFName'] = "first name required";
    }
    
   
    
    if ($formdata['managerEmail'] === NULL ||
                    $formdata['managerEmail'] === FALSE ||
                    $formdata['managerEmail'] === "")
    {
        $errors['managerEmail'] = "manager email required";
    }
    
    if ($formdata['managerNumber'] === NULL ||
                    $formdata['managerNumber'] === FALSE ||
                    $formdata['managerNumber'] === "")
    {
         $errors['managerNumber'] = "manager number required";
    }
    
    if ($formdata['maxCap'] === ""){
        $capacity = intval($formdata['maxCap']);
        if ($capacity < 0 || $capacity > 999999) {
    }
        $errors['maxCap'] = "capacity required. Cannot be a negative value";
    }
    
    
}
