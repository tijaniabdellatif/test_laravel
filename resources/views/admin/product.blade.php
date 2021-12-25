<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Title </title>
</head>
<body>


    @if(Session::has('message'))

<p> {{Session::get('message')}} </p>
    @endif
    <h1>this is product page</h1>

   
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laudantium voluptas ad error ea optio facilis doloribus consequuntur ut ipsa adipisci, nihil mollitia assumenda eveniet maxime ducimus placeat at necessitatibus? Excepturi?</p>
    
  
</body>
</html>