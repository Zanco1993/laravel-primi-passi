<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <h1>Hello World</h1> 

    </header>    
   
        {{-- prima prova passando $listNav --}}
        {{-- <ul>
            <li>{{ $home }}</li>
            <li>{{ $chiSiamo }}</li>
            <li>{{ $Contatti }}</li>
        </ul> --}}

        {{-- se invece passiamo un array --}}
        {{-- <ul>
            <li>{{ $list['home'] }}</li>
            <li>{{ $list['chiSiamo'] }}</li>
            <li>{{ $list['Contatti'] }}</li>
        </ul> --}}

        {{-- applico un foreach per scorrere le informazioni dell'array --}}
            @foreach ($list as $key => $value)
            <a>{{ $key }} : {{ $value }} </a> <br>
                
            @endforeach

</body>
</html>