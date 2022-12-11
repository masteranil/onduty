<?php

function validateEvents($input_method, &$formdata, &$errors) {
    $formdata['eventname'] = filter_input($input_method, "eventname", FILTER_SANITIZE_STRING);
    $formdata['Department'] = filter_input($input_method, "Department", FILTER_SANITIZE_STRING);
    $formdata['Date'] = filter_input($input_method, "Date", FILTER_SANITIZE_STRING);
    $formdata['Time'] = filter_input($input_method, "Time", FILTER_SANITIZE_STRING);
    $formdata['venue'] = filter_input($input_method, "venue", FILTER_SANITIZE_STRING);
   

    if ($formdata['eventname'] === NULL ||
                    $formdata['eventname'] === FALSE ||
                    $formdata['eventname'] === "")
    {
        $errors['eventname'] = "eventname required";
    }
    
    if ($formdata['Department'] === NULL ||
                    $formdata['Department'] === FALSE ||
                    $formdata['Department'] === "")
    {
        $errors['Department'] = "Department required";
    }   
    
    if ($formdata['Date'] === NULL ||
                    $formdata['Date'] === FALSE ||
                    $formdata['Date'] === "")
    {
        $errors['Date'] = "Start Date  required";
    }
    
    if ($formdata['Time'] === NULL ||
                    $formdata['Time'] === FALSE ||
                    $formdata['Time'] === "")
    {
        $errors['Time'] = "End Date required";
    }
    if ($formdata['venue'] === NULL ||
                    $formdata['venue'] === FALSE ||
                    $formdata['venue'] === "")
    {
        $errors['venue'] = "venue required";
    }   
    
    
    
    
    
}
