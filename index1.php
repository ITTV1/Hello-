Пример PHP-программы


<?php
echo "Hello, world!";
?>

<body>
Hello, world!
</body>

$a = echo "100";
$b = echo "200";
$a + $b; // выведет "300"
$a . $b; // выведет "100200"

echo "<p>Текущая дата: ", $dat, " года</p>\n";


echo "<p>Текущая дата: $dat года</p>\n";

for ($i = 1; $i <= 5; $i++) {
echo "<li>$i в квадрате = " . ($i * $i);
echo ", $i в кубе = " . ($i * $i * $i) . "</li>\n";
}


 пример "внедрения" переменных непосредственно в строку:
$path = "c:/windows"; $name = "win"; $ext = "com";
$fullPath = "$path/$name.$ext";
 выглядит явно лучше, чем:
$path = "c:/windows"; $name = "win"; $ext = "com";
$fullPath = $path . "/" . $name . "." . $ext;

short_open_tag

