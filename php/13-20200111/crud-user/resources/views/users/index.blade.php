@foreach($users as $user)
<h1>
  <a href="http://localhost:8000/users/{{$user->id}}">
    {{$user->name}}
  </a>
  <a href="http://localhost:8000/users/{{$user->id}}/edit">Sửa</a>
  {{-- <a href="http://localhost:8000/users/{{$user->id}}/delete">Xóa</a> --}}
  <form action="http://localhost:8000/users/{{$user->id}}/delete" method="POST">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <input type="hidden" name="_method" value="DELETE">
    <button type="submit">Xoa</button>
  </form>
</h1>
@endforeach