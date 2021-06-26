@include('parts.header')


<body>
    <ul class=".font-weight-bold">
    @foreach($employee as $key => $emp)
        <li>{{ $key }}　は　{{ $emp->name }}　です</li>
    @endforeach
    </ul>

    <div class="alert alert-primary" role="alert">
        A simple primary alert—check it out!
    </div>

</body>
</html>