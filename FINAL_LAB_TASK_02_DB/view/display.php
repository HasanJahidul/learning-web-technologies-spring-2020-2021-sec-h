
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add Product</title>
</head>
<body>


        <tr>
            
            <td style="border:2px solid black; border-collapse: collapse;">
                
                <form action="loginCheck.php" method="post">
                    <br><br><br><br><br>
                    <fieldset style="width:25%; margin:  0px auto;"  >
                        
                        <legend align= "left"><b>Display</b></legend>
                        
    

    <div id="main_content">
        <table border="1">
            <tr>
                <td >Name</td>
                <td >Profit</td>
               
            </tr>
            
                <?php
                
                    $conn = mysqli_connect('localhost', 'root', '', 'product_db');
                $sql = "select * from products where display = 'yes'";
                $result = mysqli_query($conn, $sql);
                while($products=mysqli_fetch_array($result))
                {
                        echo "<tr>";
                        
                        echo "<td>"; echo $products["name"]; echo "</td>";
                        echo "<td>"; echo $products["profit"]; echo "</td>";
                        echo "<td>"; ?>

                        <td><a href=edit.php?name="<?php echo $products['name']?>">Edit</a></td>
                        <td><a href=../controller/delete.php?name="<?php echo $products['name']?>">Delete</a></td>
                         
                        <?php echo "</td>";
                         echo "</tr>";
                        
                }
                ?>
                
                
                     
                  
        </table>
    </div>


                    </fieldset>
                
                    <br><br><br><br><br>
                </form>
                
            </td>
            
        </tr>
 
    
</body>
</html>