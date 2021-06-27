@include('parts.header')
<body>
    <h1>新規作成</h1>

    <form method="POST" action="{{route('employee.store')}}">
    @csrf

    <div>
        <label for="form-name">名前</label>
        <input type="text" name="name" id="form-name" value="{{old('name')}}">
    </div>

    @error('name')
        <div class="alert alert-danger" role="alert">
            {{$message}}
        </div>
    @enderror

    <div>
        <label for="form-tel">電話番号</label>
        <input type="tel" name="telephone" id="form-tel" value="{{old('telephone')}}">
    </div>

    @error('telephone')
        <div class="alert alert-danger" role="alert">
            {{$message}}
        </div>
    @enderror


    <div>
        <label for="form-email">メールアドレス</label>
        <input type="email" name="email" id="form-email" value="{{old('email')}}">
    </div>

    @error('email')
        <div class="alert alert-danger" role="alert">
            {{$message}}
        </div>
    @enderror


    <button type="submit">登録</button>

    </form>

    <a href="{{ route('employee.index') }}">{{ __('一覧へ戻る') }}</a>


</body>
</html>