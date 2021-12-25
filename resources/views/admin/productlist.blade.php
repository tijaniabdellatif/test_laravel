<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>Product List</h1>

    <ul>
     @forelse($product as $prod)

          <h5>{{ $prod }}</h5>
       @empty
       
       <h5>No product yet</h5>
     @endforelse
    </ul>
    <a href='{{ route('product.show') }}'> Product page </a>
    
</body>
</html>