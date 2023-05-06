<?php
$textStorage=[];
function add(&$textStorage,string $title,string $text) : void
{

    $textStorage[]=[
        'title'=> $title,
        'text' => $text
    ];
}

function search($textStorage)
{
foreach ($textStorage as $key =>$value)
{
if(in_array('Dell',$value))
{
    print_r("Ключ".$key);
    return($key);
}
}
}

function remove(&$textStorage)
{
    $key=search($textStorage);
    var_dump($key);
    if ($key!==NULL)
    {
        unset($textStorage[$key]);
        return true;
    }
    else
        return false;

}

function edit (&$textStorage,int $index,string $titleArr,string $textArr)
{
       if (array_key_exists ($index,$textStorage))
    {
        $textStorage[$index][$titleArr]=$textArr;
        return true;
    }
    else
        return false;
}

$i=0;
do
{
    echo 'Введите заголовок ';
    $userInputTitle = readline('Введите заголовок');
    echo 'Введите текст ';
    $userInputText = readline('Введите текст');
    add($textStorage,$userInputTitle, $userInputText);
    $i++;
}
while($i<2);

print_r($textStorage);
var_dump(remove($textStorage));
print_r($textStorage);
var_dump(edit($textStorage,5,'title','Привет'));
print_r($textStorage);