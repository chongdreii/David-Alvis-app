<form method="POST" action="/token">
    @csrf
    
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    search term: <input type="text" name="term" value="" />
    <button type="submit">Submit</button>
</form>
