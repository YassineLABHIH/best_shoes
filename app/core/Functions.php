<?php

//check error and display
function check_error()
{
    if (isset($_SESSION['error']) && $_SESSION['error'] != "") 
    {
        echo $_SESSION['error'];
        unset($_SESSION['error']);
    }
} 

//check message and display
function check_message()
{
    if (isset($_SESSION['message'])) 
    {
        echo $_SESSION['message'];
        unset ($_SESSION['message']);
    }
} 