<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
     <form action="/Intros/{{$Intro->id}}/update " method="POST">
    @csrf
    <div class="form-group">
        <input type="text" name="imageName" value="{{$Intro->imageName}}" class="form-control" id="" placeholder="Enter name">
        <input type="text" name="image" value="{{$Intro->img_path}}" class="form-control" id="" placeholder="Enter name">
      <label for="">name</label>
    <img name="image" src="{{$Intro->img_path}}" alt="">
    </div> 
    
 
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</body>
</html>