
<?php
    session_start();
    

    if(isset($_POST['submit'])){
        

        $id =$_POST['id'];
        $password = $_POST['password'];
        $user= "user";
        $admin="admin";

         if($id == "" || $password == ""){
            echo "Please enter username and password";
            
        }else{
            //$user = $_SESSION['c_user'];
            $myfile= file_get_contents('../model/user.json');
            $current_data = json_decode($myfile,true);
            foreach ($current_data as $search)
            {
                


                if($search['id'] == $id && $search['password'] == $password){
                setcookie('flag', true, time()+3600, '/');


                
                $user_name=$search['name'];
                $user_id=$search['id'];
                $user_password=$search['password'];
                $user_type=$search['type'];
                
                $_SESSION['name']=$user_name;
                $_SESSION['password']=$user_password;
                $_SESSION['id']=$user_id;
                $_SESSION['type']=$user_type;

                if ($_SESSION['type']== $user)
                {
                	header('location: ../view/user_home.html');
                }
                else if ($_SESSION['type']== $admin)
                {
                	header('location: ../view/admin_home.html');
                }
               
                //header('location: ../view/dashboard.php');
                }else{
                    echo "Username or password is invalid";
                } 
            }
            
        }

    }
    else if(isset($_POST['signup']))
        {
            header('location:../view/registration.html');
        }
?>