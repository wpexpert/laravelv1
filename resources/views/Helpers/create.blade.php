<form action="/helpers" method="POST">
    @csrf
    <input type="text" value="" name="author" />
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
            <li> {{ $error  }}</li>
            @endforeach
           
        </ul>
    @endif
    <input type="submit" value="save"/>
</form>