@foreach($users as $user)
<h1>
  <a href="http://localhost:8000/users/{{$user->id}}">
    {{$user->name}}
  </a>
  <a href="http://localhost:8000/users/{{$user->id}}/edit">Sửa</a>
</h1>
@endforeach