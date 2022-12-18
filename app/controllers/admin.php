<?php
class Admin extends Controller
{
    /**
     * show admin dashboard page
     * @return void
     */
    public function index(): void
    {

        if ($_SESSION['rank'] != 'admin') {
            header("Location:" . ROOT . "home");
        }

        $User = $this->load_model('User');


        $user_data = $User->check_login();

        if (is_array($user_data)) {
            $data['user_data'] = $user_data;
        }

        $data['page_title'] = "Admin";
        $this->view("admin/index", $data);
    }

    public function category()
    {

        $data['page_title'] = "Category";

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $category = $this->load_model("Category");
            $category->create($_POST);
        }

        $this->view("admin/category", $data);
    }
}
