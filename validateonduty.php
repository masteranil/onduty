<?php

function validateonduty($input_method, &$formdata, &$errors) {
    $formdata['studentname'] = filter_input($input_method, "studentname", FILTER_SANITIZE_STRING);
    $formdata['regno'] = filter_input($input_method, "regno", FILTER_SANITIZE_STRING);
    $formdata['eventname'] = filter_input($input_method, "eventname", FILTER_SANITIZE_STRING);
    $formdata['Department'] = filter_input($input_method, "Department", FILTER_SANITIZE_STRING);
    $formdata['Date'] = filter_input($input_method, "Date", FILTER_SANITIZE_STRING);
    $formdata['time'] = filter_input($input_method, "time", FILTER_SANITIZE_STRING);
    $formdata['venue'] = filter_input($input_method, "venue", FILTER_SANITIZE_STRING);
   
    $formdata['LocID'] = filter_input($input_method, "LocID", FILTER_SANITIZE_NUMBER_INT);
    
    if ($formdata['studentname'] === NULL ||
                    $formdata['studentname'] === FALSE ||
                    $formdata['studentname'] === "")
    {
        $errors['studentname'] = "studentname required";
    }
    if ($formdata['regno'] === NULL ||
                    $formdata['regno'] === FALSE ||
                    $formdata['regno'] === "")
    {
        $errors['regno'] = "regno required";
    }
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
        $errors['Date'] = " Date  required";
    }
    
    if ($formdata['time'] === NULL ||
                    $formdata['time'] === FALSE ||
                    $formdata['time'] === "")
    {
        $errors['time'] = "time required";
    }
    if ($formdata['venue'] === NULL ||
                    $formdata['venue'] === FALSE ||
                    $formdata['venue'] === "")
    {
        $errors['venue'] = "venue required";
    }
   
    
   
    
    
}
