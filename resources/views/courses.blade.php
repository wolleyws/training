<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cursos</title>
</head>
<body>
    <h1>Lista de Cursos</h1>

    

    <table>
        <thead>
            <tr>
                <td>Nome</td>
                <td>Descrição</td>
                <td></td>
                <td></td>
            </tr>
        </thead>
        <tbody>
        @foreach ($courses as $course)
            <tr>
                <td>{{$course->name}}</td>
                <td>{{$course->description}}</td>
                <td><a href="{{ route('courses.edit',  $course->id) }}"> Editar </a></td>
                <td>
                    <form action="{{ route('courses.destroy', $course->id)}}" method="POST">
                        @csrf 
                        @method('DELETE')
                        <button>Excluir</button>
                    </form>
                
                </td>

            </tr>
        @endforeach
        
        </tbody>
    </table>
    
</body>
</html>