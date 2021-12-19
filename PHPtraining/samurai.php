
<?php
/*１*/
print('Hello wordl!');
?>

<?php
/*2*/
$hello = "Hello, PHP\n";
$num = 42;
print($hello);
print($num);
?>

<?php
/*3*/
$costomers = ["a","b","c"];
foreach($costomers as &$costomer) {
    print($costomer."\n");
    print($costomers[0]);
    array_push($costomers, "d");
var_dump($costomers);
}
?>

<?php
/*4*/
$data = [
    "name"=>"黒木",
    "gender"=>"男性",
    "age"=>36
];
$data['address'] = "福岡";
$data['gender'] = "女性";
print($data['name']);
print($data['gender']);
print($data['age']);
?>

<?php
/*5関数*/
function hello ($str){
    print($str);
}
hello("Hello World");
?>

<?php
/*5引数*/
function number(){
    print(42);
}
number();
?>

<?php
/*5戻り値*/
function add ($a,$b){
    return $a + $b;
}
$num = add(2, 3);
print($num);
?>

<?php
/*6-1条件分岐*/
function check($num) {if($num = 42) {
    print("Answer to the Ultimate Question of Life, the Universe, and Everything");
}}
check(52);
?>

<?
/*6-2*/
/*グローバル変数を関数内で利用するには
関数内で使用するグローバル変数をあらかじめ
宣言しておく必要がある。
 */
$even_num = [];
$odd_num = [];

function sort_number($num){
    global $even_num, $odd_num;
    if($num%2 == 0){
        array_push($even_num, $num);
    }else {
        array_push($odd_num, $num);
    }
}
?>

<?
/*繰り返し処理7-1*/
for($i = 1; $i <= 30; $i++){
    print($i."\n");
}
?>

<?
/*7-2*/
for($i = 1; $i <=30; $i++){
    if($i%5 == 0){
        print("Buzz"."\n");
    }else{
        print($i."\n");
    }
}
?>

<?
/*7-3*/
for($i = 1; $i <=30; $i++){
    if($i%15 == 0){
        print("FizzBuzz"."\n");
    }elseif($i%5 == 0) {
        print("Buzz"."\n");

    }elseif($i%3 == 0) {
        print("Fizz"."\n");

    }else{
        print($i."\n");
    }
}
?>

<?
/*クラスモジュールパッケージ8-1*/
class Hoge{
    function hello(){
        print("Hello PHP!");
    }
}

$hoge = new Hoge();
$hoge->hello();
# => Hello PHP!と表示される
?>
