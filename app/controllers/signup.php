<?php

class Signup extends Controller
{
    /**
     * show signup page
     * @return void
     */
    public function index(): void
    {
        $data['page_title'] = "Signup";

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $user = $this->load_model("User");
            $user->signup($_POST);
        }

        $this->view("signup", $data);
    }
}
