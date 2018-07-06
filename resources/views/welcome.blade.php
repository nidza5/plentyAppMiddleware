<!DOCTYPE html>
<html>
    <head>
        <title></title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    </head>
    <body>
        <ul>

            @foreach ($tasks as $task)
                <li> {{$task->body}} </li>
            @endforeach
        </ul>

    </body>
</html>
