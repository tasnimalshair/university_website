@include('include.head')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <head>
        <meta charset="utf-8">

        <title>My page title</title>
        <style>
            main {
                display: flex;
                font-size: 18px;
            }

            section {
                flex: 4;
                margin-left: 20px;
                margin-right: 20px;

            }

        </style>

    </head>

<body>

    <main>
        <section>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Course NO</th>
                        <th scope="col">Course</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($courses as $course)
                        <tr>
                            <td>{{ $course['id'] }}</td>
                            <td>{{ $course['name'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </section>
        @include('include.aside')



    </main>

</body>

</html>
