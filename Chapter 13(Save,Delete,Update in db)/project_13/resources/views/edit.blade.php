<h1>Edit Page</h1>
<form action="/edit" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{$data['id']}}"><br><br>
    <input type="text" name="name" value="{{$data['name']}}"><br><br>
    <input type="text" name="email" value="{{$data['email']}}"><br><br>
    <input type="text" name="address" value="{{$data['address']}}"><br><br>
    <button type="submit">Update</button>
</form>