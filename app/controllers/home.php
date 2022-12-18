<?php
class Home extends Controller
{
    /**
     * show home page
     * @return void
     */
    public function index(): void
    {

        $User = $this->load_model('User');

        // a virer ?
        $user_data = $User->check_login();

        if (is_array($user_data)) {
            $data['user_data'] = $user_data;
        }

        $data['page_title'] = "Home";
        $this->view("index", $data);
    }
}
