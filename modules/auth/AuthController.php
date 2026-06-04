<?php
class AuthController extends Controller
{
    public function login()
    {
        if($_POST)
        {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $user = $this->model("auth")->findUser($email);

            if($user && password_verify($password, $user['password']))
            {
                Session::set("user", $user);
                header("Location:index.php?url=dashboard");
            }
        }

        $this->view(
            "auth/views/login"
        );
    }

    public function logout()
    {
        Session::destroy();
        header("Location:index.php?url=auth/login");
    }
} ?>