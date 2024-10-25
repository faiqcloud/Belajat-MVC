<?php
require_once 'app/models/User.php';
class userController
{
    private $userModel;
    public function __construct($dbConnnection)
    {
        $this->userModel = new user($dbConnnection);
    }

    public function show($id)
    {
        //mengambil data pengguna dari model
        $user = $this->userModel->getUserById($id);

        //memuat view dan meneruskan data pengguna
        require_once 'app/views/userView.php';
    }

    public function index()
    {
        $users = $this->userModel->getAllUsers();
        require_once 'app/views/userList.php'; // Ganti dengan path ke view yang sesuai
    }

    public function delete($id)
    {
        $user = $this->userModel->getDeleteId($id);
        header('location:index.php');
    }

    public function edit($id)
    {
        $user = $this->userModel->getUserById($id);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Mengambil data dari form
            $name = $_POST['name'];
            $email = $_POST['email'];
    
            // Memanggil metode updateUser dari model
            if ($this->userModel->getUpdateId($id, $name, $email)) {
                header("Location: index.php"); // Redirect setelah update
            } else {
                $error = "Gagal mengupdate data.";
            }
        }
    
        // Memuat view edit
        require_once 'app/views/formedit.php'; 
    }
}
?>