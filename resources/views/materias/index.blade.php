<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Admin Career</h1>
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
    <nav aria-label="Page navigation example " class="float-right">
        <ul class="pagination">
            <li class=" {{ $materias->currentPage() == 1 ? ' disabled' : '' }} page-item"><a class="page-link"
                    href="{{ $materias->url(1) }}">
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">Previous</span>
                </a>
            </li>
            @for ($i = 1; $i <= $materias->lastPage(); $i++)
                <li class="{{ $materias->currentPage() == $i ? ' seleccionar ' : '' }} page-item">
                    <a class=" page-link " href="{{ $materias->url($i) }}">{{ $i }}</a>
                </li>
            @endfor
            <li class="{{ $materias->currentPage() == $materias->lastPage() ? ' disabled' : '' }} page-item">
                <a href="{{ $materias->url($materias->currentPage() + 1) }}" class="page-link" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">Next</span>
                </a>
            </li>
        </ul>
    </nav>
</body>
</html>