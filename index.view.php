<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>

    <meta charset="utf-8">

    <title></title>

    <link rel="stylesheet" href="/stylesheets/bootstrap.min.css">
    <link rel="stylesheet" href="/stylesheets/style.css">

  </head>

  <body>
    <header>
        <h1>

                <!-- //another for writing and echoing php -->
           <?= 'Mukera' ?>
        
        </h1>
        <ul>
          <h3>task to finish</h3>
            <?php foreach($tasks as $task):?>
              <li>
                <?php if($task->completed):?>
                  <span class="icon" style="color:green"><?=$task->description?></span>
                <?php else:?>
                  <span style="color: red"><?=$task->description?></span>
                <?php endif; ?>
              </li>
            <?php endforeach ?>

        </ul>

    </header>
  </body>
</html>
