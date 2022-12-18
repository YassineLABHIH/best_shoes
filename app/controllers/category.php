<?php

class Category extends Controller
{
    public function index()
    {
        $data['page_title'] = "Category";

        if($_SERVER['REQUEST_METHOD'] == "POST")
        { 
            $category = $this->load_model("Category");
            $category->create($_POST);
            $category->affich();
        }

        $this->view("admin/category",$data);
    }

}