<?php error_reporting(-1);
//Из  всех  участков массива А(N), сплошь состоящих из нулей, выбрать самый 
//длинный и отметить индексы его начала и конца.     
$A = [1, 2, 4, 0, 0, 0, 2, 13, 7, 0, 0, 0, 0, 0, 19, 45, 11, 7 ,9];

echo("A(n):<br>");
print_r($A);
echo("<br>Result:<br>");
$a = get_zero_line_max($A);
echo("Самый длинный участок, состоящий из нулей начинается с {$a[1]} индекса и заканчивается {$a[2]} индексом. Длинна = {$a[0]}<br>");

function get_zero_line_max($array){
    $istart = 0;
    $istop = 0; 
    $countmax = 0;
    for($i = 0; $i < count($array); $i++){
        $count = 1;
        $start = 0;
        $stop = 0;
        if($array[$i] == 0){
            $start = $i;
            for($n = $i+1;$n < count($array); $n++){
                if($array[$n] != 0){
                    $stop = $n -1;
                    $i = $n;
                    $n = count($array);
                }else{
                    $count++;
                }
                
            }
            if($count > $countmax){
                $istart = $start;
                $istop = $stop;
                $countmax = $count;
            }
        }

    }
    return [$countmax, $istart, $istop];
}