<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body> 
    <div class="container mt-4">
        <h2 class="text-danger text-center">Has Through Relationship</h2>
        <form action="{{route('country')}}" method="get">
        <select class="form-select form-control" aria-label="Default select example">
           <option selected>Open this select menu</option>
            @foreach ($countries as $country)
              <option value="{{$country->id}}">{{$country->name}}</option>     
            @endforeach    
        </select>
        <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </form>
        @isset($cities)
            <table class="table table-bordered mt-4">
               <thead>
                   <tr>
                       <th>#</th>
                       <th>Cityname</th>
                   </tr>
               </thead>
               <tbody>
                   <td>1</td>
                   <td>{{$cities->city}}</td>
               </tbody>
            </table   
        @endisset
    </div>
</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</html>