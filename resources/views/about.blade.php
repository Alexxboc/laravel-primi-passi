<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1 {
            text-align: center;
        }

        ul {
            list-style: none;
            display: flex;
            justify-content: center;
            column-gap: 1rem;
            padding-inline-start: 0;
        }

        a {
            text-decoration: none;
            color: blue;
        }
    </style>
</head>

<body>

    <header>
        <h1>About</h1>
    </header>


    <nav>
        <ul>
            @foreach($menuList as $menu)
            <li>
                <a href="">{{$menu}}</a>
            </li>
            @endforeach
        </ul>
    </nav>

</body>

</html>