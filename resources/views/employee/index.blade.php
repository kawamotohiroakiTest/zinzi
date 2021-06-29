@include('parts.header')

<body>
    <!-- ログイン機能 -->
    <div class="flex-center position-ref full-height">
                @if (Route::has('login'))
                    <div class="top-right links">
                        @auth
                            <a href="{{ url('/home') }}">Home</a>
                        @else
                            <a href="{{ route('login') }}">Login</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
    <!-- ログイン機能 -->


    </div>

    <h1>一覧表示</h1>
    <table class="table table-striped">
        <tr class="thead-dark">
            <th>ID</th>
            <th>名前</th>
            <th>電話番号</th>
            <th>メールアドレス</th>
            <th>詳細</th>
            <th>編集</th>
        </tr>
        @foreach($employees as $employee)
        <tr>
            <td>{{$employee->id}}</td>
            <td>{{$employee->name}}</td>
            <td>{{$employee->telephone}}</td>
            <td>{{$employee->email}}</td>
            <td><a href="{{route('employee.show',['id'=>$employee->id])}}">詳細</a></td>
            <td><a href="{{route('employee.edit',['id'=>$employee->id])}}">編集</a></td>
        </tr>
        @endforeach
    </table>
    {{$employees->links()}}
    <a href="{{ route('employee.create') }}">{{ __('新規作成') }}</a>
    <h2>jquery</h2>
    <div class="">
        <a href="{{route('employee.toggle')}}">トグルメニュー</a>
    </div>

</body>
</html>