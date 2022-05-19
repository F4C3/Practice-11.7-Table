<?php

setcookie('name', "", time() - 10);
unset($_COOKIE['name']);

$a = 0; // Запись в переменную
$b = 1;
$var1 = !$a; 
$var2 = !$a;
$var3 = !$b;
$var3_1 = (int)$var3; // Приведение к целому числу
$var4 = !$b;
$var4_1 = (int)$var4; 
$var5 = $a||$a;
$var5_1 = (int)$var5; 
$var6 = $a||$b;
$var7 = $b||$a;
$var8 = $b||$b;
$var9 = $a&$a;
$var10 = $a&$b;
$var11 = $b&$a;
$var12 = $b&$b;
$var13 = $a ^ $a;
$var14 = $a ^ $b;
$var15 = $b ^ $a;
$var16 = $b ^ $b;

echo
"
<table class='form1'>
<tr><td class='td1'>Таблица истинности PHP</td></tr>
</table>

<table class='form'>
<tr>
  <td> A </td>
  <td> B </td>
  <td> !A </td>
  <td> A || B </td>
  <td> A & B </td>
  <td> A xor B </td>
</tr> 
<tr>
  <td> $a </td> 
  <td> $a </td>
  <td> $var1 </td>
  <td> $var5_1 </td>
  <td> $var9 </td>
  <td> $var13 </td>
</tr> 
<tr>
  <td> $a </td>
  <td> $b </td>
  <td> $var2 </td>
  <td> $var6 </td>
  <td> $var10 </td>
  <td> $var14 </td>
</tr> 
<tr>
  <td> $b </td>
  <td> $a </td>
  <td> $var3_1 </td>
  <td> $var7 </td>
  <td> $var11 </td>
  <td> $var15 </td>
</tr> 
<tr>
  <td> $b </td>
  <td> $b </td>
  <td> $var4_1 </td>
  <td> $var8 </td>
  <td> $var12 </td>
  <td> $var16 </td>
</tr> 
<style>
.form {
  display: flex;
  align-items: center;
  justify-content: center;
}
td {
  width: 100px;
  border: 1px solid black;
  text-align: center
}
.form1 {
  display: flex;
  align-items: center;
  justify-content: center;
  Margin: 20px;
}
.td1 {
  width: 100%;
  padding: 4px 4px;
}

.note{
  display: flex;
  justify-content: space-around;
  border: solid 1px #634f36; 
  background: #f3f0e9; 
  padding: 7px; 
  margin: 50px 340px 1em 340px;
}
</style>";
?>

<?php

function result($val, $val1 = 1){
  $arr = array(true, false, 1, 0, -1, "1", null, 'php'); // Запись значений в массив
  for($z = 0; $z < count($arr); $z++){ 
   if($val1 == 1){ // Условие для ==
    $prom = ($val == $arr[$z])? true:false; 
   }
   if($val1 == 2){ // Условие для ===
    $prom = ($val === $arr[$z])? true:false;
   }
   if($prom == true){ // Преобразование bool в int
    $prom = 1;
   }else{ $prom = 0; };  
   $res[] = $prom; // Запись результата работы переменной $prom в новый массив при помощи push 
  }
   return $res;
};

$result1 = result(true); // Гибкое сравнение
$result2 = result(false);
$result3 = result(1);
$result4 = result(0);
$result5 = result(-1);
$result6 = result("1");
$result7 = result(null);
$result8 = result('php'); 

$result1_1 = result(true,2); // Жёсткое сравнение
$result2_1 = result(false,2);
$result3_1 = result(1,2);
$result4_1 = result(0,2);
$result5_1 = result(-1,2);
$result6_1 = result("1",2);
$result7_1 = result(null,2);
$result8_1 = result('php',2); 
echo
"
<table class='form1'>
<tr><td class='td1'>Гибкое сравнение в PHP</td></tr>
</table>

<table class='form'> 
<tr>
  <td> ... </td>
  <td> true </td>
  <td> false </td>
  <td> 1 </td>
  <td> 0 </td>
  <td> -1 </td>
  <td> '1' </td>
  <td> null </td>
  <td> 'php' </td>
</tr> 
<tr>
  <td> true </td>
  <td> $result1[0] </td>
  <td> $result1[1] </td>
  <td> $result1[2] </td>
  <td> $result1[3] </td>
  <td> $result1[4] </td>
  <td> $result1[5] </td>
  <td> $result1[6] </td>
  <td> $result1[7] </td>
</tr> 
<tr>
  <td> false </td>
  <td> $result2[0] </td>
  <td> $result2[1] </td>
  <td> $result2[2] </td>
  <td> $result2[3] </td>
  <td> $result2[4] </td>
  <td> $result2[5] </td>
  <td> $result2[6] </td>
  <td> $result2[7] </td>
</tr> 
<tr>
  <td> 1 </td>
  <td> $result3[0] </td>
  <td> $result3[1] </td>
  <td> $result3[2] </td>
  <td> $result3[3] </td>
  <td> $result3[4] </td>
  <td> $result3[5] </td>
  <td> $result3[6]</td>
  <td> $result3[7] </td>
</tr> 
<tr>
  <td> 0 </td>
  <td> $result4[0] </td>
  <td> $result4[1] </td>
  <td> $result4[2] </td>
  <td> $result4[3] </td>
  <td> $result4[4] </td>
  <td> $result4[5] </td>
  <td> $result4[6] </td>
  <td> $result4[7] </td>
</tr> 
<tr>
  <td> -1 </td>
  <td> $result5[0] </td>
  <td> $result5[1] </td>
  <td> $result5[2] </td>
  <td> $result5[3] </td>
  <td> $result5[4] </td>
  <td> $result5[5] </td>
  <td> $result5[6] </td>
  <td> $result5[7] </td>
</tr> 
<tr>
  <td> '1' </td>
  <td> $result6[0] </td>
  <td> $result6[1] </td>
  <td> $result6[2] </td>
  <td> $result6[3] </td>
  <td> $result6[4] </td>
  <td> $result6[5] </td>
  <td> $result6[6] </td>
  <td> $result6[7] </td>
</tr> 
<tr>
  <td> null </td>
  <td> $result7[0] </td>
  <td> $result7[1] </td>
  <td> $result7[2] </td>
  <td> $result7[3] </td>
  <td> $result7[4] </td>
  <td> $result7[5] </td>
  <td> $result7[6] </td>
  <td> $result7[7] </td>
</tr> 
<tr>
  <td> 'php' </td>
  <td> $result8[0] </td>
  <td> $result8[1] </td>
  <td> $result8[2] </td>
  <td> $result8[3] </td>
  <td> $result8[4] </td>
  <td> $result8[5] </td>
  <td> $result8[6] </td>
  <td> $result8[7] </td>
</tr> 
</table> 

<table class='form1'>
<tr><td class='td1'>Жёсткое сравнение в PHP</td></tr>
</table>

<table class='form'>
<tr>
  <td> ... </td>
  <td> true </td>
  <td> false </td>
  <td> 1 </td>
  <td> 0 </td>
  <td> -1 </td>
  <td> '1' </td>
  <td> null </td>
  <td> 'php' </td>
</tr> 
<tr>
  <td> true </td>
  <td> $result1_1[0] </td>
  <td> $result1_1[1] </td>
  <td> $result1_1[2] </td>
  <td> $result1_1[3] </td>
  <td> $result1_1[4] </td>
  <td> $result1_1[5] </td>
  <td> $result1_1[6] </td>
  <td> $result1_1[7] </td>
</tr> 
<tr>
  <td> false </td>
  <td> $result2_1[0] </td>
  <td> $result2_1[1] </td>
  <td> $result2_1[2] </td>
  <td> $result2_1[3] </td>
  <td> $result2_1[4] </td>
  <td> $result2_1[5] </td>
  <td> $result2_1[6] </td>
  <td> $result2_1[7] </td>
</tr> 
<tr>
  <td> 1 </td>
  <td> $result3_1[0] </td>
  <td> $result3_1[1] </td>
  <td> $result3_1[2] </td>
  <td> $result3_1[3] </td>
  <td> $result3_1[4] </td>
  <td> $result3_1[5] </td>
  <td> $result3_1[6] </td>
  <td> $result3_1[7] </td>
</tr> 
<tr>
  <td> 0 </td>
  <td> $result4_1[0] </td>
  <td> $result4_1[1] </td>
  <td> $result4_1[2] </td>
  <td> $result4_1[3] </td>
  <td> $result4_1[4] </td>
  <td> $result4_1[5] </td>
  <td> $result4_1[6] </td>
  <td> $result4_1[7] </td>
</tr> 
<tr>
  <td> -1 </td>
  <td> $result5_1[0] </td>
  <td> $result5_1[1] </td>
  <td> $result5_1[2] </td>
  <td> $result5_1[3] </td>
  <td> $result5_1[4] </td>
  <td> $result5_1[5] </td>
  <td> $result5_1[6] </td>
  <td> $result5_1[7] </td>
</tr> 
<tr>
  <td> '1' </td>
  <td> $result6_1[0] </td>
  <td> $result6_1[1] </td>
  <td> $result6_1[2] </td>
  <td> $result6_1[3] </td>
  <td> $result6_1[4] </td>
  <td> $result6_1[5] </td>
  <td> $result6_1[6] </td>
  <td> $result6_1[7] </td>
</tr> 
<tr>
  <td> null </td>
  <td> $result7_1[0] </td>
  <td> $result7_1[1] </td>
  <td> $result7_1[2] </td>
  <td> $result7_1[3] </td>
  <td> $result7_1[4] </td>
  <td> $result7_1[5] </td>
  <td> $result7_1[6] </td>
  <td> $result7_1[7] </td>
</tr> 
<tr>
  <td> 'php' </td>
  <td> $result8_1[0] </td>
  <td> $result8_1[1] </td>
  <td> $result8_1[2] </td>
  <td> $result8_1[3] </td>
  <td> $result8_1[4] </td>
  <td> $result8_1[5] </td>
  <td> $result8_1[6] </td>
  <td> $result8_1[7] </td>
</tr> 
</table> 
";

?>

<?php 

echo '<p class="note"> При гибком сравнение один тип переменной может равняться разным типам переменных, в то время как при жёстком сравнении один тип переменной равен исключительно себе  </p>';

?>

