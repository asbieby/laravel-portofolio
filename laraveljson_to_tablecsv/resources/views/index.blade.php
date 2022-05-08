<html>
    <head>
        <title>Tarik Json</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </head>
    <body>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">title</th>
                    <th scope="col">body</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $dataok)
                <tr>
                    <td>{{ $dataok['id']}}</td>
                    <td>{{ $dataok['judul']}}</td>
                    <td>{{ $dataok['penulis']}}</td>
                </tr>
                @endforeach
            </tbody>
            </table>

            
    </body>
</html>