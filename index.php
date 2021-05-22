<?php

    header('Content-Type: aplication-json');

    // echo '<a href="https://www.php.net/manual/es/function.array-splice.php" target="_black">Visitar Manual</a><br>';
    $lista = (array) [
            (string) 'Miguel',
            (string) 'Juan', 
            (string) 'Jose',
            (string) 'Diana',
            (array) ['Jaime', 'Jiménez']];

    $devuelta = (array) array_splice(
        array: $lista, 
        offset: 1, 
        length: 3,
        replacement: ['Willian','Willian2','Willian3','José']
    );
    print_r($lista);    
    print_r($devuelta);


    // Metodo slice elimina de la lista principal los datos que no deseamos ver y devuel un array nuevo
    // echo '<a href="https://www.php.net/manual/es/function.array-slice" target="_black">Visitar Manual</a><br>';
    // $lista = (array) [
    //     (string) 'Miguel',
    //     (string) 'Juan', 
    //     (string) 'Jose',
    //     (string) 'Diana',
    //     (array) ['Jaime', 'Lopezs']];

    // $devuelta = (array) array_slice(
    //     array: (array) $lista, 
    //     offset: (int) -5, 
    //     length: (int) 4,
    //     preserve_keys: (bool) true
    // );

    // print_r($lista);    
    // print_r($devuelta);

    // function saludar(
    //     string $nombre,
    //     string $apellido,
    //     string $mensaje = 'Hola como estas'):string{
    //     return "$mensaje $nombre $apellido";
    // }
    
    // echo call_user_func('saludar', nombre: (string) 'Miguel Angel', mensaje: (string) 'Que tal', apellido: (string) 'Castro Escamilla');


    // Metodo shift elimina el primer dato y lo devuelve
    // echo '<a href="https://www.php.net/manual/es/function.array-shift.php" target="_black">Visitar Manual</a><br>';
    // $lista = (array) [
    //     (string) 'Miguel',
    //     (string) 'Juan',
    //     (string) 'Jose',
    //     (string) 'Diana',
    //     (array) ['Jaime', 'Lopez']];
    // $devuelta = array_shift($lista);
    // print_r($lista);
    // print_r($devuelta);



    // Metodo pop elimina el ultimo dato y lo devuelve
    // echo '<a href="https://www.php.net/manual/es/function.array-pop.php" target="_black">Visitar Manual</a><br>';
    // $lista = (array) [
    //     (string) 'Miguel',
    //     (string) 'Juan',
    //     (string) 'Jose',
    //     (string) 'Diana',
    //     (array) ['Jaime', 'Lopez']];
    // $devuelta = array_pop($lista);
    // print_r($lista);
    // print_r($devuelta);




    // Metodo unshift para insertar datos de forma acendente
    // echo '<a href="https://www.php.net/manual/es/function.array-unshift.php" target="_black">Visitar Manual</a><br>';
    // $lista = (array) [];
    // $arg = (array) [(string) 'Miguel'];
    // $arg2 = (array) [(string) 'Juan'];
    // $devuelta = (int) array_unshift($lista, ...$arg);
    // $devuelta = (int) array_unshift($lista, ...$arg2);
    // print_r($lista);
    // print_r($devuelta);


    // Metodo push para insertar datos de forma decedente
    // echo '<a href="https://www.php.net/manual/es/function.array-push.php" target="_black">Visitar Manual</a><br>';
    // $lista = (array) [];
    // $arg = (array) [(string) 'Miguel',(string) 'Juan',(string) 'Jose',(string) 'Diana',(string) 'Jaime'];
    // $devuelta = (int) array_push($lista, ...$arg);
    // // $devuelta = (int) array_push($lista, (string) 'Miguel',(string) 'Juan'); 
    // print_r($lista);
    // print_r($devuelta);




    // $lista = (array) [];
    // $lista['a'] = (string) 'Dato numero # 1';
    // $lista[1] = (string) 'Dato numero # 2';
    // $lista['DATOS_POSISION_3'] = (string) 'Dato numero # 3';
    // $lista[3] = (string) 'Dato numero # 4';
    // $lista[4] = (string) 'Dato numero # 5';
    // $lista['SALUDAR'] = (object) function () {
    //     return "Hola Como estas";
    // };
    // $lista[5] = ["a","b","c"];
    // // unset($lista[2]);
    // foreach ($lista as $indicises => $dato) {
    //     echo <<<DATOS
    //         ${!${''} = $indicises} : 
    //             ${!${''} = 
    //                 (gettype($dato) == "object") 
    //                 ? $dato() 
    //                     :((gettype($dato) == "array") 
    //                         ? join(' ', $dato) 
    //                 : $dato) 
    //             } <br>
    //     DATOS;        
    // }





    // $lista = (array) [
    //     (string) "Miguel",
    //     (string) "Juan",
    //     (string) "Pepito"
    // ];
    // print_r($lista);
    // $pocision = (int) count($lista)-2;
    // echo $lista[$pocision];
    




    // $array = [];
    // $array = array();
    // $array = (array) [];
    // $array = new ArrayIterator();

?>