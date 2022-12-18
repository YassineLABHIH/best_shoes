<?php

class Shop extends Controller
{
    /**
     * show shop page
     * @return void
     */
    public function index(): void
    {
        $data['page_title'] = "Shop";


        $this->view("shop", $data);
    }
}
