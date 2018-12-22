<?php
    require 'function.php';
    require 'task.php';

    //connect to database 
    try {
    	$pdo = new PDO('mysql:host=127.0.0.1;dbname=mukera','root','');
    	echo "connected successfully";
    } catch (PDOException $e) {
    	die($e->getMessage());
    }

    // prepare the sql query and then
    $statement = $pdo->prepare('select * from todos');

    //fire or execute
    $statement->execute();

    //then fetch it
    $tasks = $statement->fetchAll(PDO::FETCH_CLASS,'Task');
    format($tasks[0]->complete());

    require 'index.view.php';

?>