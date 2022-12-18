<?php

class Category extends Controller
{
    /**
     * show category admin page
     * @return void
     */
    public function index(): void
    {
        $data['page_title'] = "Category";

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $category = $this->load_model("Category");
            $category->create($_POST);
        }

        $this->view("admin/category", $data);
    }
}
