<h1>Chỉnh Sửa Người Dùng</h1>

<form action="http://localhost:8000/users/{{$user->id}}" method="POST">
  <input type="hidden" name="_token" value="{{csrf_token()}}">
  <input type="hidden" name="_method" value="PATCH">
  <div>
    Ten:
    <input type="text" name="ten" value="{{$user->name}}">
  </div>
  <div>
    Thu Dien Tu:
    <input type="email" name="thuDienTu" value="{{$user->email}}" disabled>
  </div>
  <button type="submit">
    Chinh Sua
  </button>
</form>