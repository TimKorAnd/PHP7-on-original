<form action="warn.php" method="post">
<input type="submit" name="doGo" value="Click!" >
</form>
<?php ## Константа с динамическим именем.
  // Формируем случайное число от 1 до 10
  $index = mt_rand(1, 10);
  // Формируем имя константы
  $name = "VALUE{$index}";

  // Определяем константу с динамическим именем
  define($name, 777);

  // Получаем значение константы
/*  echo constant($name);*/
$pwd = "\$PWD";
$a = `echo \$PWD`;
  echo " {$name} jhdfjdhf {$a}";

//===========================================
function cmp ($a, $b)
{
  if ($a == $b) return 0;
  if ($a < $b) return -1;
  return 1;
}
$cmpName = 'cmp';
$arr = array(3, 1, 7, 6, 9, 4);
usort ($arr, $cmpName);
usort ($arr, function ($a, $b){return $a <=> $b;});
print_r($arr); // 1, 3, 4, 6, 7, 9

//===========================================
if ($_REQUEST [ 'doGo' ] ) echo "B!ol HaJEaJilol KHOnKy ! ";


?>
