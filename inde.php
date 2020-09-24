<?php

    //create function helli

    function hello()
    {
        echo "hello,world!";
    }

    hello(); //hello,world!

    $current_user="mike";

    function is_mike($current_user)
    {
        global $current_user;

        if($current_user=="mike")
        {
            echo "you is mike";
        }else
        {
            echo "nope, you not mike";
        }
    }
// is_mike(); //you is mike
echo PHP_EOL;

function helloName($name)
{
    if(is_array($name) && !empty($name))
    {
        foreach($name as $key)
        {
            echo "hello,$key \n";
        }
    }else
    {
        echo "hello friend !";
    }
}

helloName(["mike","mohede","hompton"]);

function get_info($name,$title=null)
{
    if($title)
    {
        echo "$name was arived,and came as $title";
    }else
    {
        echo "$name was arived,welcome";
    }
}

get_info("mike","frong");


function helloworld($word)
{
    return "\nhello world! $word";
}

$hello=helloworld("you soo good"); //helloworld!

echo $hello;

echo PHP_EOL;

function add_up($a,$b)
{
    return[$a,$b,$a+$b]; //array
}

print_r(add_up(2,4));

function sumArray($data)
{
    $result=0;
    foreach($data as $key);
    {
        $result+$key;
    }

    return $result;
}

echo sumArray([1,4,5,5]);

function answer()
{
    return "you answer the question";
}

$answer=answer(); //save n variable

echo PHP_EOL;

//colback function

$answer_cal= "answer";

echo $answer_cal()."!!"; //call the function

//anonymous function

$askName="what is your name";
$name="buddy";

echo PHP_EOL;

$ask=function()use($askName,$name)
{
  return "ask the question,$askName $name ?";
};
echo $ask();

function br()
{
    echo PHP_EOL;
}

br();

//built-in string function

$magang="magang top joss"; //15

echo strlen($magang);

br();

echo substr($magang,7); //top joss

br();

echo substr($magang,7,3); //top

br();

echo strpos($magang,"j"); //11

br();

echo $magang[11]; // J

$team=["mike"=>"developer","chris"=>"designer","hompton"=>"manager"];

print_r(array_keys($team));

var_dump(array_key_exists("jhon",$team));

if(array_key_exists("jhon",$team))
{
    echo "mike found in \$team";
}else
{
    echo "key not found in \$team";
}

br();

array_walk($team,function($key,$value){

    echo "$key is a $value \n";
});



?>