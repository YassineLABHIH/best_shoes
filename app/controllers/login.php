<?php

class Login extends Controller
{
    /**
     * show login page
     * @return void
     */
    public function index(): void
    {
        $data['page_title'] = "Login";

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $user = $this->load_model("User");
            $user->login($_POST);
        }

        $this->view("login", $data);
    }
}
