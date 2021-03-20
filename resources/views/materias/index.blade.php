<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Lista de Materias</h1>
    <table style="text-align: center" class="table table-bordered table-hover table-responsive-xl">
        <thead class="thead-dark">
            <tr>
                <th>Nombre</th>
                <th>Estado</th>
                <th>Fecha Creación</th>
            </tr>
        </thead>
        <tbody>
    @foreach($materias as $cr)
    <tr>
        <td> {{$cr->name}}</td>
        <td>{{$cr->state}}</td>
        <td>{{$cr->created_at}}</td>
    </tr>
    @endforeach
    </tbody>
    </table>
</body>
</html>