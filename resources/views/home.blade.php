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

        .container {
            max-width: 800px;
            margin: auto;
        }

        .info {
            text-align: center;
        }
    </style>
</head>

<body>

    <header>
        <h1>HELLO WORLD</h1>
    </header>

    <nav>
        <ul>

            <li>
                <a href="/">Home</a>
            </li>
            <li>
                <a href="/about">About</a>
            </li>
            <li>
                <a href="/contacts">Contacts</a>
            </li>
            <li>
                <a href="/more">More</a>
            </li>
            <li>
                <a href="/address">Address</a>
            </li>

        </ul>
    </nav>

    <main>
        <div class="container">
            <div class="info">
               <ol>
                   @foreach($data as $course)
                   <li><a href="#">{{$course}}</a></li>
                   @endforeach
               </ol>
            </div>
        </div>
    </main>

</body>

</html>