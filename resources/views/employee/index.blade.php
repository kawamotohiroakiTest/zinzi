@include('parts.header')


<body>
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
</body>
</html>