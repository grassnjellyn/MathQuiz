<?php
ob_start();

class UserController
{
    private $userDao;
    private $roleDao;

    public function __construct()
    {
        $this->userDao = new UserDaoImpl();
        $this->roleDao = new RoleDaoImpl();
    }

    public function index(){
        $userDao = new UserDaoImpl();
        $loginPressed = filter_input(INPUT_POST, 'btnLogin');
        
        if (isset($loginPressed)){
            $username = filter_input(INPUT_POST, 'txtUsername');
            $password = filter_input(INPUT_POST, 'txtPassword');
            
           print_r($password);
            
            // Menggunakan password_hash untuk mengenkripsi password dengan bcrypt
            $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
            
            $result = $userDao->userLogin($username, $hashedPassword);
            
            if (isset($result) && $result != null && password_verify($password, $result[0]['password'])) {
                // Menggunakan password_verify untuk memverifikasi password
                $_SESSION['web_is_logged'] = true;
                $_SESSION['web_username'] = $result[0]['username'];
                $_SESSION['web_role'] = $result[0]['role_id_role'];
                header('location:index.php');
            } else {
                echo '<div class="bg-error">Invalid username or password</div>';
            }
        }
        
        include_once 'view/login-view.php';
    }
    
}

?>