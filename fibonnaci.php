<?php

    //variable
    $num= 0;
    $num2=1;
    

        //aqui le diremos que tendra un valor y se imprimira hasta 20 digitos
    for ($i=0; $i < 20; $i++) { 
        //variable para alamcenar el numero de la primera variable
        $temp= $num;
        //la primera variable almacenara la segunda
        $num=$num2;
        $num2=$temp + $num2;
        //imprimimos
        echo $num. '<br>';
    }


?>