<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/main.css" />
    <script src="js/jquery-3.6.0.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <style>
        html {
            height: 100%;
        }

        aside {
            flex: 1;
            margin-left: 10px;
            background-color: #32C8E3;
            /* float: inline-end; */
            margin-right: 5px;
            width: 250px;
            float: right;
            height: 670px;
            margin-top: 10px;
        }

        h2 {
            text-align: center;

        }

        aside li {
            padding-bottom: 10px;
            list-style-type: none;
        }

        aside li a {
            color: #215385;
            font-weight: bold;
            font-size: 20px;
            text-decoration: none;
        }

        .btn {
            color: #215385;
            font-weight: bold;
            font-size: 20px;
            text-decoration: none;
            border: none;
            background-color: inherit;
            padding: 14px 28px;
            cursor: pointer;
            display: inline-block;
        }

        /* On mouse-over */
        .btn:hover {
            background: #eee;
        }

        /* article{
                flex: 4;
            } */

    </style>
</head>

<body>
    <!-- <article></article> -->
    <aside>
        <h2>الكليات</h2>

        <ul>
            <form action="" method="POST">
                @foreach ($courses as $course)
                    <li>
                        <input type="hidden" name="hidden" value={{ $course['id'] }}>
                        <button name="btn" class="btn success">{{ $course['name'] }}</button>
            </form>
            </li>
            @endforeach

        </ul>
    </aside>
</body>

</html>
