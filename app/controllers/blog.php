<?php

class Blog extends Controller
{
    /**
     * show blog page
     * @return void
     */
    public function index(): void
    {
        $data['page_title'] = "Blog";


        $this->view("blog", $data);
    }
}
