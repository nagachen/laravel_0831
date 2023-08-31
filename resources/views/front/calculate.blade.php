<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @dump($data['option'])
    @switch($data['option'])
        @case('+')
       
       加法結果是{{$data['num1']+$data['num2']}}
        @break
        @case('-')
       減法結果是{{$data['num1']-$data['num2']}}
        @break
        @case('*')
       乘法結果是{{$data['num1']*$data['num2']}}
        @break
        @case('/')
        除法結果是{{$data['num1']/$data['num2']}}
         @break
    @endswitch
    @foreach ($man as $item)
    <br>{{$item}}
    @endforeach
</body>
</html>