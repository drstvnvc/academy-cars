<html>
  <head>
    <title>About</title>
  </head>
  <body>
    <h1>Cars</h1>
    @foreach ($cars as $car)
      <div>
        {{$car->producer}} - {{$car->title}} ({{$car->number_of_doors}} doors)
      </div>
    @endforeach
  </body>
</html>