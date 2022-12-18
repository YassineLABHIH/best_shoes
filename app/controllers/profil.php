<?php
class Profil extends Controller
{
    /**
     * show profil page
     * @return void
     */
    public function index(): void
    {

        if ($_SESSION['is_connect'] == false) {
            header("Location:" . ROOT . "home");
        }

        $User = $this->load_model('User');


        $user_data = $User->check_login();

        if (is_array($user_data)) {
            $data['user_data'] = $user_data;
        }

        $data['page_title'] = "Admin";
        $this->view("profil", $data);
    }
}
