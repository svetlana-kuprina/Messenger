<?php
$textStorage=[];
function add(&$textStorage,string $title,string $text) : void
{

    $textStorage[]=[
        'title'=> $title,
        'text' => $text
    ];

}

//function search($textStorage)
//{
//for ($i=0,i++)
//{
//    array_search ('Dell',$textStorage[$i]);
//}
//}


function remove(&$textStorage)
{

}

$i=0;
do{
    echo 'Введите заголовок';
    $userInputTitle = readline('Введите заголовок');
    echo 'Введите текст';
    $userInputText = readline('Введите текст');
    add($textStorage,$userInputTitle, $userInputText);
    $i++;
} while($i<2);

print_r($textStorage);
search ($textStorage);

