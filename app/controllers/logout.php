<?php

class Logout extends Controller
{
    /**
     * logout function
     * @return void
     */
    public function index()
    {

        $User = $this->load_model('User');
        $User->logout();
    }
}
