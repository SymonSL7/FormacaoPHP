<?php

   $bool = true && false;
   var_dump($bool);
   
   $bool2 = (true and false);
   var_dump($bool2);


   var_dump( 7 === 7 || 9 < 7);

   var_dump( 7 !== 7 || 9 < 7);

   var_dump( 7 === 7 && 9 > 7);

   var_dump( 7 !== 7 && 9 < 7);

   var_dump( 7 === 7 xor 9 > 7);

   var_dump( 7 === 7 xor 9 < 7);

?>