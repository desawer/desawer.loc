<?
    error_reporting(E_ERROR|E_WARNING|E_PARSE|E_NOTICE);
    ini_set('display_errors', 1);
    // -1-
    $name = 'Азамат. ';
    $age = 21;
    
    echo 'Меня зовут '.$name.'';
    echo 'Мне '.$age.' лет. ';
    unset($name);
    unset($age);
    
    //-2-
    
    define('city','Уфа. ');
    
    if(city){
        echo city;
    }  
    
    //-3-
    
    $book = array();
    $book['tittle'] = 'Большая книга вранья';
    $book['author'] = 'Светлана Кузина';
    $book['pages'] = 1070;
    echo 'Недавно я прочитал книгу \'' . $book['tittle'] . '\' , написанную автором ' . $book['author'] . ', я осилил все ' .  $book['pages'] . ' страниц, мне она очень понравилась.';
    
    //-4-
    
    $book1 = array('title'=>'Большая книга вранья', 'author'=>'Светлана Кузина', 'pages'=>1070);
    $book2 = array('title'=>'Личный рост', 'author'=>'Дейл Карнеги', 'pages'=>754);
    $book = array($book1, $book2);
    //var_dump($book);
    echo 'Недавно я прочитал книги ' . $book[0]['title'] .  ' и ' . $book[1]['title'] .  ', написанные соответственно авторами ' . $book[0]['author'] . ' и ' . $book[1]['author'] . ", я осилил в сумме " . ($book[0]['pages']+$book[1]['pages']) .  ' страницы, не ожидал от себя подобного';
?>