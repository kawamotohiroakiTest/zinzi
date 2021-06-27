@include('parts.header')
<h1>詳細表示</h1>

<div>
名前
{{$employee->name}}
</div>

<div>
電話番号
{{$employee->telephone}}
</div>

<div>
メールアドレス
{{$employee->email}}
</div>

<form method="POST" action="{{route('employee.destroy',['id'=>$employee->id])}}">
  @csrf
  <button type="submit">削除</button>
</form>

<a href="{{ route('employee.index') }}">{{ __('一覧に戻る') }}</a>
