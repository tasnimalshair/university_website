@include('include.head')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>

    <head>
        <meta charset="utf-8">

        <title>My page title</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Sonsie+One" rel="stylesheet" type="text/css"> -->
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link rel="stylesheet" href="css/main.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <style>
            main {
                display: flex;
                font-size: 18px;
            }

            article {
                flex: 4;
            }

        </style>

    </head>

<body>
    <main>
        <article>
            <main>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">اسم المساق</th>
                            <th scope="col">رقم المساق</th>
                            <th scope="col"></th>
                            <th scope="col"></th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($courses as $course)
                            <tr>
                                <td>{{ $course['id'] }}</td>
                                <td>{{ $course['name'] }}</td>
                                <td>
                                    {{-- <form action="" method="POST">
                                        <input type="hidden" name="id" value={{$course['id']}}> --}}
                                        <button onclick="return confirm('Are you sure?')"  style="width: 100px; height: 40px; font-size: 18px;" type="submit" name="add" class="btn btn-success">ADD</button>
                                    {{-- </form> --}}
                                </td><td>
                                    {{-- <form action="" method="POST">
                                        <input type="hidden" name="id" value={{$course['id']}}> --}}
                                        <button onclick="return confirm('Are you sure?')" style="width: 100px; height: 40px; font-size: 18px;" type="submit" name="delete" class="btn btn-danger">DELETE</button>
                                    {{-- </form> --}}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>






            </main>

        </article>


    </main>
</body>

</html>
