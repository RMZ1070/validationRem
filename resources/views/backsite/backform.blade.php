<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css">
<h2> formulaire</h2>
<div class="table-wrapper"> 
   
        <a href="{{route('create')}}" class="btn btn-danger scrollto">create</a></td>


            <a href="{{route('home')}}" class="btn btn-primary scrollto">home</a></td>

    <table class="fl-table">
        
        <thead>
        <tr>
            <th>id</th>
            <th>pseudo</th>
            <th>mot de passe</th>
            <th>email</th>
            <th>edit/delete</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($Formulaires as $item)
        <tr>
            <td colspan="">{{$item->id}}</td>
        <td colspan="">{{$item->pseudo}}</td>
        <td colspan="">{{$item->motdepasse}}</td>
        <td colspan=""><img class="w-25" src="{{asset($item->email)}}"></td>
            <td colspan="">
                {{-- <a href="{{route('show',$item->id)}}" class="btn btn-primary scrollto">Show</a> --}}
                <a href="{{route('Formulairech',$item->id)}}" class="btn btn-warning scrollto">Edit</a>
                <a href="{{route('delete',$item->id)}}" class="btn btn-danger scrollto">Delete</a>

            </td>
                

        </tr>
        
            
        @endforeach
       
        <tbody>
            
    </table>

     
</div>