@foreach($users as $user)
<h1>
  <a href="http://localhost:8000/users/{{$user->id}}">
    {{$user->email}}
  </a>
</h1>
@endforeach