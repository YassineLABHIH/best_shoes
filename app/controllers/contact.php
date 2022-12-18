<?php

class Contact extends Controller
{
    /**
     * show blog page
     * @return void
     */
    public function index(): void
    {
        $data['page_title'] = "Contact";


        $this->view("contact", $data);
    }
}
