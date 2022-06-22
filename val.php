<?php

    include('db.php');
            $user=$_POST['u'];
            $pass=$_POST['p'];
            $consulta="SELECT* FROM user where us='$user' and pass='$pass'";
            $resultado=mysqli_query($con,$consulta);

            $fila=mysqli_num_rows($resultado);
            if($fila){

                header("local:home.html");


            }
            else{

                ?>
                <h3>ACCESO DENEGADO</h3>
                <?php

            }
            mysqli_free_result($resultado);
            mysqli_close($con);
        

    
    
    

?>