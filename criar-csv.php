<?php
$pessoas = array(
    ["Nome","Idade","Cidade"],
    ["Guto","36","Santa Bárbara"],
    ["Bárbara","26","Americana"],
);
//echo, print ---> usados para string para usar no array precisa utilizar o print_r
// echo "<pre>";
// print_r($pessoas);
// echo "</pre>";
// $arquivo = fopen("dados.csv", "a+");

// for($i = 0; $i < count($pessoas); $i++){
//     fputcsv($arquivo,$pessoas[$i], ";");
// }
//fclose
$arquivo = fopen("dados.csv", "a+");

foreach($pessoas as $uma_pessoa){
    fputcsv($arquivo, $uma_pessoa,";");
}

fclose($arquivo)
?>