<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        
    </title>
</head>
<body>
    @if ($projets->count()>0)
        @foreach ($projets as $projet)
           <a href="{{ route('afficherProjet',['id' => $projet->id])}}">{{$projet->projectName}}</a> 
        @endforeach
    @else
        <p>Aucun projet dans la base de données</p>
    @endif
</body>
</html>