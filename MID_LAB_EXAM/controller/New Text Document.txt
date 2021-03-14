<?php 

if(isset($_POST['change'])){
    session_start();
    $current_password=$_POST['cpassword'];
    $new_password=$_POST['npassword'];
    $re_password=$_POST['rnpassword'];
    
   if($new_password == $current_password)
   {
    echo "Old password and new Password can not be same";
   }
   else
   {
        if($new_password!=$re_password)
            {
        echo "New password and Confirm password must have to be same";
       }
      
       else
       
        {
            $search_key = $_SESSION['id'];

            $myfile= file_get_contents('../model/user.json');
            $current_data = json_decode($myfile,true);

            foreach ($current_data as $search=>$val)
                if($val['id']== $search_key)
                {
                    $current_data[$search]['password']=$new_password;
                    
                    $writedata=json_encode($current_data);
                    if (file_put_contents('../model/user.json',$writedata))
                    {
                         header('location:../view/dashboard.php');
                    }
                    else
                    {
                        echo "error to update";
                    }
               }
   }
   
}
}
 else if(isset($_POST['back']))
        {
            header('location:../view/dashboard.php');
        }


?>