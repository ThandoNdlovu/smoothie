<!-- sweetalert js -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<?php    
if(isset($_POST['submit-btn']))
{

    
    $fullname=$_POST['reg-name'];
    $username=$_POST['reg-username'];
    $password=$_POST['reg-password'];
    $Conpassword=$_POST['reg-Confirmpassword'];

    if($password === $Conpassword){
        $postData = [
            'Fullname' => $fullname,
            'Username' => $username,
            'Password' => $password,
            'Confirm Password' => $Conpassword,
        ];
    
        $ref_table = "Tbl_user";//reference table
        $postRef_result = $database->getReference($ref_table)->push($postData);
    
        if($postRef_result){
            $_SESSION['status'] = "Registered Successfully";
            
            ?>
            <script>
                swal({
                        title: "<?php
                            echo $_SESSION['status'];
                            ?>",
                        icon: "success",
                        button: "OK",
                    });
            </script>
            <?php
    
    
        }else{
            $_SESSION['status'] = "Could Not Register User!";
    
            ?>
            <script>
                swal({
                        title: "<?php
                            echo $_SESSION['status'];
                            ?>",
                        icon: "error",
                        button: "OK",
                    });
            </script>
            <?php
            unset($_SESSION['status']);
        }
    }else{
        $_SESSION['status'] = "Password does not match";
    
            ?>
            <script>
                swal({
                        title: "<?php
                            echo $_SESSION['status'];
                            ?>",
                        icon: "error",
                        button: "OK",
                    });
            </script>
            <?php
    }
    
}
?>