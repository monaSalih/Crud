<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action='{{url('update/id/'.$update->id)}}' method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label >candy name</label>
          <input type="text" class="form-control" id="" value={{$update->candyName}} name="candyName" placeholder="Enter name">
    
        </div>
        <div class="form-group">
          <label for="">candy image</label>
          <input type="text" class="form-control" id="" value={{$update->candyImage}} name="candyImage" placeholder="image url">
        </div>

        <div class="form-group">
            <label for="">candy price</label>
            <input type="text" class="form-control" id="" name="candyPrice" value={{$update->candyPrice}} placeholder="candy price">
          </div>

          <div class="form-group">
            <label for="">candy quantity</label>
            <input type="text" class="form-control" id="" value={{$update->candyQuantity}} name="candyQuantity" placeholder="candy quantity">
          </div>
       
        <button type="submit" class="btn btn-primary">update</button>
      </form>
</body>
</html>