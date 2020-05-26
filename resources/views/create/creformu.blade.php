@extends('layouts/master')

@section('content')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css">
 <!-- Portfolio Section -->
 <section class="page-section portfolio" id="portfolio">
    <div class="container">

      <!-- Portfolio Section Heading -->
      <h2 class="page-section-heading text-center text-uppercase text-secondary bg-primary pt-5 mb-0">identifiant</h2>

      <!-- Icon Divider -->
      <div class="divider-custom">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>
<div>
    <form class="d-flex flex-column  align-items-start mx-auto w-50" action="{{route('save')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="">pseudo</label>
    <input class="w-50 form-control @error('pseudo') is-invalid @enderror" type="text" value="@if($errors->first('pseudo')) @else{{old('pseudo')}} @endif" name="pseudo">
        @error('pseudo')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
        <label for="">email</label>
        <input class="w-50 form-control @error('email') is-invalid @enderror" type="text" value="@if($errors->first('email')) @else{{old('email')}} @endif" name="email">
        @error('email')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
        <label for="">mot de passe</label>
        <input class="w-50 form-control @error('motdepasse') is-invalid @enderror" type="password" value="@if($errors->first('motdepasse'))@else{{old('motdepasse')}}@endif" name="motdepasse" name="motdepasse">
        @error('motdepasse')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <label for="">image</label>
    <input class="w-50 form-control @error('img') is-invalid @enderror" type="file" value="@if($errors->first('img'))@else{{old('img')}}@endif" name="img">
    @error('img')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
       
        <input class="w-50" type="submit" value='enregistrer'>

    </form>
</div>

</div>
</section>
@endsection