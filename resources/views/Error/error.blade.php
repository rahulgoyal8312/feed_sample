@if(count($errors))
        <ul>
        @foreach ($errors->all() as $error)
         <li><p style="color: red;"  >* {{ $error }}</p></li>
        @endforeach
        </ul> 
@endif