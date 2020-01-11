<h1>Tao Nguoi Dung Moi</h1>

<form action="http://localhost:8000/users/store" method="POST">
  <input type="hidden" name="_token" value="{{csrf_token()}}">
  <div>
    Ten:
    <input type="text" name="ten">
  </div>
  <div>
    Thu Dien Tu:
    <input type="email" name="thuDienTu">
  </div>
  <button type="submit">
    Tao Moi
  </button>
</form>