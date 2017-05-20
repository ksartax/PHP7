<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php

        // ================================= TYPY

        function suma(int $a, int $b): int {
            return $a + $b;
        }

        echo suma(1, 2);

        function sumaFloat(float $a, float $b): float {
            return $a + $b;
        }

        echo '<br/>' . sumaFloat(1.2, 2);

        // ================================= /TYPY
        // 
        // ================================= Ciekawy sposób na null
        echo $_GET['nic'] ?? '<br/>' . 'nic nie ma';

        echo "<br/>";

        echo $_GET['nic'] ?? $_GET['nica'] ?? "NIc nie ma";

        echo "<br/>";

        // ================================= Ciekawy sposób na null/
        // ================================= Kosmiczny operator
        echo 1 <=> 1;

        echo "<br/>";

        echo 2 <=> 1;

        echo "<br/>";

        echo 1 <=> 2;

        echo "<br/>";

// ================================= Kosmiczny operator/
        // ================================= Stałe tablice
        define('tablica', [
            'jedne' => 'Cies',
            'dwa' => 'Cies',
            'trzy' => 'Cies'
        ]);

        echo "<br/>" . tablica['jedne'];

        // ================================= Stałe tablice/
        // ================================= Klasy anonimowe

        echo "<br/>";

        class Glowna {

            private $test;

            public function getTest() {
                return $this->test;
            }

            public function setTest($test) {
                $this->test = $test;
            }

        }

        $a = new Glowna();
        $a->setTest(new class {

            public function wypis() {
                echo "Siema";
            }
        });
        $a->getTest()->wypis();


        echo "<br/>";

        interface Test {

            public function wypis();
        }

        class Glownav2 {

            private $test;

            public function getTest(): Test {
                return $this->test;
            }

            public function setTest(Test $test) {
                $this->test = $test;
            }

        }

        $a = new Glowna();
        $a->setTest(new class implements Test {

            public function wypis() {
                echo "Siema v 2";
            }
        });
        $a->getTest()->wypis();

        // ================================= Klasy anonimowe/

        echo "<br/>";

        class Tes {

            private $x = 1;

        }

        $getValue = function() {
            return $this->x;
        };

        $a = $getValue->bindTo(new Tes, 'Tes');

        echo $a();

        echo "<br/>";

        echo $getValue->call(new Tes);

        echo "<br/>";


        $randomByte = random_bytes(5);
        echo bin2hex($randomByte);
        echo "<br/>";
        $randomInt = random_int(0, 10);
        echo $randomInt;
        echo "<br/>";

        use test\{
            ClassA,
            ClassB,
            ClassC as C
        };
        use function test\{
            fn_a,
            fn_b,
            fn_c
        };
        use const test\{
            ConstA,
            ConstB,
            ConstC
        };

        echo intdiv(10, 3);
        
        
        ?>


    </body>
</html>
