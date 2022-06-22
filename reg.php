<?php
    
    include('db.php');

    if(isset($_POST['r'])){

        if(strlen($_POST['u'])>=1 && strlen($_POST['p'])>=1){
            $user=trim($_POST['u']);
            $pass=trim($_POST['p']);
            $reg = "INSERT INTO user( us, pass) VALUES ('$user','$pass')";
            $reg= mysqli_query($con,$reg);

            if($reg){
                ?>
                <h3 class="ok"> registro exitoso </h3>
                
                <?php
                include("index.html");
                
            }
               
            
            else{

                ?>
                <h3 class="bad"> Error de registro </h3>
                
                <?php

                

            }


            
                
                
                
            

        }


    }
    
   
?>