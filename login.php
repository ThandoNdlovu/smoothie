<!-- sweetalert js -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<?php
if(isset($_POST['login-btn']))
{

    $username=$_POST['reg-username'];
    $clearTextPassword=$_POST['reg-password'];

    try 
    {
        $user = $auth->getUserByEmail("$username");

        try {
            $signInResult = $auth->signInWithEmailAndPassword($email, $clearTextPassword);
            $idTokenString = $signInResult->idToken();


            try{
                $verifiedIdToken = $auth->verifyIdToken($idTokenString);
                $uid = $verifiedIdToken->claims()->get('sub');


                $_SESSION['verfied_user_id'] = $uid;
                $_SESSION['idTokenString'] = $idTokenString;

                //feedback message
                $_SESSION['status'] = "Logged in Successfully";
            
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
                header('location:main.php');
                exit();

            } 
            catch(InvalidToken $e)
            {
                echo 'The token is invalid: '.$e->getMessage();
            } 
            catch(\InvalidArgumentException $e) 
            {
                echo 'The token could not be parsed: '.$e->getMessage();
            }

        }
        catch(Exception $e){
            $_SESSION['status'] = "Invalid Password";
            
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
            header('location:index.php');
        }
    }
    catch (\Kreait\Firebase\Exception\Auth\UserNotFound $e)
    {
        //echo $e->getMessage();
        $_SESSION['status'] = "Invalid Username";
            
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
        header('location:index.php');
    }
}
else{
    $_SESSION['status'] = "Not Allowed";
            
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
        header('location:index.php');
}
?>