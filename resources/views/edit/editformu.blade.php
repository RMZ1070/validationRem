<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css">
<!-- Portfolio Section -->
<section class="page-section portfolio" id="portfolio">
   <div class="container">

     <!-- Portfolio Section Heading -->
     <h2 class="page-section-heading text-center text-uppercase text-secondary bg-primary pt-5 mb-0">Editer identifiant</h2>

     <!-- Icon Divider -->
     <div class="divider-custom">
       <div class="divider-custom-line"></div>
       <div class="divider-custom-icon">
         <i class="fas fa-star"></i>
       </div>
       <div class="divider-custom-line"></div>
     </div>
<div>
   <form class="d-flex flex-column  align-items-start mx-auto w-50" action="{{route('update',$formulaire->id)}}" method="POST">
       @csrf
       <label for="">Pseudo</label>
       <input class="w-50" type="text" name="pseudo" value="{{$livre->pseudo}}">
       <label for="">Email</label>
       <input class="w-50" type="text" name="email" value="{{$livre->email}}">
       <label for="">Mot de passe</label>
       <input class="w-50" type="text" name="motdepasse" value="{{$livre->motdepasse}}">
       <input class="w-50" type="submit" value='enregistrer'>
   </form>
</div>
</div>
</section>