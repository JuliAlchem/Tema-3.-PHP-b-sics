<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP-bàsics-(Tema 3)</title>
    </head>
    <body>
        <?php
            $int=2021; // integer
            $str='Hello World!'; // string
            $f=99.9; //float or double
            
           
            
            echo '<h1>Nivell 1</h1>';
            echo '<h3>- Exercici 1</h3>';
            echo 'integer: '.$int;
            echo "<br>";
            echo 'double: '.$f; 
            echo "<br>";
            echo 'string: '.$str; 
            echo "<br>";
            
             // boolean
            $x=5; 
            $y=9;
			if($x>=$y){
				echo $x; 
			} else {
			echo $y;
			}
            
            
            echo '<h3>- Exercici 2</h3>';
            
            $str2='Hello, World!';
            echo $str2;
            echo "<br>";
            echo strtoupper($str2);
            echo "<br>";
            echo strlen($str2);
            echo "<br>";
            echo strrev($str2);
            echo "<br>";
            $str3='Aquest &eacute;s el curs de PHP';
            echo $str2.$str3;
            
            echo '<h3>- Exercici 3</h3>';
            define('name','Julia',false);
            echo '<h2><strong>'.name.'</strong></h2>';
            
            echo '<h3>- Exercici 4</h3>';
            $X=7;
            $Y=9;
            $N=5.7;
            $M=9.5;
            echo 'X='.$X.' y Y='.$Y;
            echo "<br>";
            echo 'La suma '.$X+$Y;
            echo "<br>";
            echo 'La resta '.$X-$Y;
            echo "<br>";
            // check producte!
            echo 'El producte '.$X*$Y;
            echo "<br>";
            echo 'El m&ograve;dul '.$X%$Y;
            echo "<br>";
            echo "<br>";
            echo 'N='.$N.' y M='.$M;
            echo "<br>";
            echo 'La suma '.$N+$M;
            echo "<br>";
            echo 'La resta '.$N-$M;
            echo "<br>";
            // check producte!
            echo 'El producte '.$N*$M;
            echo "<br>";
            echo 'El m&ograve;dul '.$N%$M;
            echo "<br>";
            echo "<br>";
            echo 'Per a totes les variables (X, Y, N, M)';
            echo "<br>";
            echo 'El doble de cada variable:';
            echo "<br>";
            echo 'El doble de X='.$X*2;
            echo "<br>";
            echo 'El doble de Y='.$Y*2;
            echo "<br>";
            echo 'El doble de N='.$N*2;
            echo "<br>";
            echo 'El doble de M='.$M*2; 
            echo "<br>";  
            echo 'La suma de totes les variables='.$X+$Y+$N+$M;
            echo "<br>";
            echo 'El producte de totes les variables='.$X*$Y*$N*$M;
            
            
            echo '<h3>- Exercici 5</h3>';
                        
            $firstArr = [1,3,5,7,9];
            $secondArr = array (4,6,2);
            array_push($secondArr, 8);
            
            echo 'El tamany de l\'array: '.count(array_merge($firstArr, $secondArr));
            echo "<br>";
            print_r(array_merge($firstArr, $secondArr));
        ?>
            
    </body>
</html>