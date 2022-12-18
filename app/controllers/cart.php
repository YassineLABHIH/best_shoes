<?php

class Cart extends Controller
{
    /**
     * show cart page
     * @return void
     */
    public function index(): void
    {
        $data['page_title'] = "Cart";


        $this->view("cart", $data);
    }
}
