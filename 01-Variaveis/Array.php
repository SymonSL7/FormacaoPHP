<?php

    $cursos = array("PHP", "JAVA", "TYPESCRIPT", "JAVASCRIPT", "LOGICA DE PROGRAMAÇÃO" );

    print_r( $cursos );

    for ( $i = 0 ; $i < count( $cursos ) ; $i++ ) {
        print_r( "$cursos[$i]\n" );
    }

?>