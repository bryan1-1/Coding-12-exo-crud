<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
     <form action="/Services/{{$Service->id}}/update " method="POST">
    @csrf
    <div class="form-group">
        <input type="text" name="title" value="{{$Service->serviceTitle}}" class="form-control" id="" placeholder="Enter name">
        <input type="text" name="description" value="{{$Service->sDescription}}" class="form-control" id="" placeholder="Enter name">
       
  
    </div> 
    
 
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</body>
</html>