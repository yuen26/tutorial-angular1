<?php  
    $postdata = file_get_contents("php://input");
    $request = json_decode($postdata);
    $username = $request->username;
    $password = $request->password;
    if($username == "admin" && $password== "123456"){
        echo "Login successfully";
    }
    else {
        echo "Wrong username or password";
    }
 
?>
