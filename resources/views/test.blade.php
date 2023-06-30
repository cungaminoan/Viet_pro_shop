@if($errors->any())
    @foreach($errors->all() as $errors)
        {{$errors}}
    @endforeach
@endif
    <form method="post" action="">
        <input type="text" name="email" value="{{old('email')}}">
        <input type="text" name="password" value="{{old('password')}}">
        <button type="submit" name="sbm"> Submit</button>
        @csrf
    </form>

{{session("alert")}}
