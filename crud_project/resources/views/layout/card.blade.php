@extends('layout.master')
@section('content')

<div class="container">
    <a href="{{url('addData')}}" class="btn btn-primary">add item</a>
<div class="row">
@foreach ($data as $item)

<div class="col-lg-4">
<div class="card" style="width: 18rem;">
    <img class="card-img-top" name="candyImage" src='{{$item->candyImage}}' alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title" name="candyName">Candy title:'{{$item->candyName}}'</h5>
      <p class="card-text" name="candyPrice">Cand price:'{{$item->candyPrice}}'</p>
      <p  >Cand quantity:'{{$item->candyQuantity}}</p>
    </div>
    <a href="{{url('delete/id/'.$item->id)}}" class="btn btn-primary" >delet</a>
    <a href="{{url('update/id/'.$item->id)}}"class="btn btn-primary">update</a>
</div>
</div>
</div>
 @endforeach
</div>

@endsection