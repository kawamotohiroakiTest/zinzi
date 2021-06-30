@include('parts.header')

print({{$employees}})


<header>
    <h1>Toggle Menu</h1>
</header>
<nav class="relative">
    <button type="button" class="btn btn-primary toggle-button">Primary</button>
    <ul>
        <li><a href="#">Menu1</a></li>
        <li><a href="#">Menu2</a></li>
        <li><a href="#">Menu3</a></li>
        <li><a href="#">Menu4</a></li>
    </ul>
</nav>

<header>
    <h1>Alert</h1>
</header>
<button id="click">Click Me</button>
<div id="bg">
    <div id="alertBox">
        <button id="ok">OK</button>
        <p>Good job</p>
    </div>
</div>

<header>
    <h1>Viewer</h1>
</header>
<figure>
    <img src="{{ asset('/img/javascript-960x504.png') }}">
</figure>
<ul class="viewerul">
    <li class="viewerli">
        <a href="{{ asset('/img/javascript-960x504.png') }}" alt="photo1" id="viewhref">
            <img src="{{ asset('/img/javascript-960x504.png') }}" class="viewer">
        </a>
    </li>
    <li class="viewerli">
        <a href="{{ asset('/img/PHP-logo.svg') }}" alt="photo2" id="viewhref">
            <img src="{{ asset('/img/PHP-logo.svg') }}" class="viewer">
        </a>
    </li>
    <li class="viewerli">
        <a href="{{ asset('/img/Python.png') }}" alt="photo3" id="viewhref">
            <img src="{{ asset('/img/Python.png') }}" class="viewer">
        </a>
    </li>
</ul>

<h1 class="mg200">タブ</h1>
<ul class="tab">
    <li><a href="#tab1" class="current">01</a></li>
    <li><a href="#tab2">02</a></li>
    <li><a href="#tab3">03</a></li>
    <li><a href="#tab4">04</a></li>
</ul>
<div id="contents" class="mg50">
    <div id="tab1" class="current_tab">１番目のコンテンツです</div>
    <div id="tab2">2番目のコンテンツです</div>
    <div id="tab3">3番目のコンテンツです</div>
    <div id="tab4">4番目のコンテンツです</div>
</div>


<h1 class="mg200">ドロップダウンメニュー</h1>
<ul id="navi">
    <li><a href="#">Menu1</a>
        <ul>
            <li><a href="#">Menu1a</a></li>
            <li><a href="#">Menu2b</a></li>
            <li><a href="#">Menu3c</a></li>
        </ul>
    </li>
    <li><a href="#">Menu2</a>
        <ul>
            <li><a href="#">Menu2a</a></li>
            <li><a href="#">Menu2b</a></li>
            <li><a href="#">Menu2c</a></li>
        </ul>
    </li>
    <li><a href="#">Menu3</a>
        <ul>
            <li><a href="#">Menu3a</a></li>
            <li><a href="#">Menu3b</a></li>
            <li><a href="#">Menu3c</a></li>
        </ul>
    </li>
    <li><a href="#">Menu4</a>
        <ul>
            <li><a href="#">Menu4a</a></li>
            <li><a href="#">Menu4b</a></li>
            <li><a href="#">Menu4c</a></li>
        </ul>
    </li>
</ul>

<h1 class="mg200" class="floatfloat">フローティングメニュー</h1>
<nav class="floating-relative" id="floating-relative">
    <ul>
        <li><a href="#">Menu1</a></li>
        <li><a href="#">Menu2</a></li>
        <li><a href="#">Menu3</a></li>
        <li><a href="#">Menu4</a></li>
        <li><a href="#">Menu5</a></li>
    </ul>
</nav>
<main class="floating-main">
    <div class="mg50">ここに文章が入ります。</div>
    <div class="mg50">ここに文章が入ります。</div>
    <div class="mg50">ここに文章が入ります。</div>
    <div class="mg50">ここに文章が入ります。</div>
    <div class="mg50">ここに文章が入ります。</div>
    <div class="mg50">ここに文章が入ります。</div>
    <div class="mg50">ここに文章が入ります。</div>
    <div class="mg50">ここに文章が入ります。</div>
    <div class="mg50">ここに文章が入ります。</div>
    <div class="mg50">ここに文章が入ります。</div>
    <div class="mg50">ここに文章が入ります。</div>
    <div class="mg50">ここに文章が入ります。</div>
    <div class="mg50">ここに文章が入ります。</div>
    <div class="mg50">ここに文章が入ります。</div>
    <div class="mg50">ここに文章が入ります。</div>
    <div class="mg50">ここに文章が入ります。</div>
    <div class="mg50">ここに文章が入ります。</div>
</main>

<h1>モーダルウィンドウ</h1>
    <ul id="modal-list">
        <li class="modalwindow">
            <a href="{{ asset('/img/javascript-960x504.png') }}" alt="photo1" id="modalwindow">
                <img src="{{ asset('/img/javascript-960x504.png') }}" class="modalwindow">
            </a>
        </li>
        <li class="modalwindow">
            <a href="{{ asset('/img/PHP-logo.svg') }}" alt="photo2" id="modalwindow">
                <img src="{{ asset('/img/PHP-logo.svg') }}" class="modalwindow">
            </a>
        </li>
        <li class="modalwindow">
            <a href="{{ asset('/img/Python.png') }}" alt="photo3" id="modalwindow">
                <img src="{{ asset('/img/Python.png') }}" class="modalwindow">
            </a>
        </li>
    </ul>

<h1 class="mg200">フィルタリング</h1>
<div id="buttons">
    <button value="all">ALL</button>
    <button value="javascript">javascript</button>
    <button value="php">PHP</button>
    <button value="python">Python</button>
</div>
<ul class="filter_list">
    <li class="javascript fileter_list_li"><img src="{{ asset('/img/javascript-960x504.png') }}" class="filter_img"></li>
    <li class="php fileter_list_li"><img src="{{ asset('/img/PHP-logo.svg') }}" class="filter_img"></li>
    <li class="python fileter_list_li"><img src="{{ asset('/img/Python.png') }}" class="filter_img"></li>
</ul>

<h1 class="mg200">バリデーション</h1>
<form method="POST" action="{{route('employee.toggle')}}">
    <div id="textSection">
        <p><label for="text">Text</label></p>
        <p class="alert">Alert: Text</p>
        <input type="text" id="text" name="text" value="">
    </div>
    <div id="radioSection">
        <p>Radio</p>
        <p class="alert">Alert: Radio</p>
        <input type="radio"  id="radio1" name="radio" value="Radio1">
        <p><label for="radio1">Radio1</label></p>
        <input type="radio"  id="radio2" name="radio" value="Radio2">
        <p><label for="radio2">Radio2</label></p>
        <input type="radio"  id="radio3" name="radio" value="Radio3">
        <p><label for="radio3">Radio3</label></p>
    </div>
    <div id="selectArea">
        <p>Select</p>
        <p class="alert">Alert: Select</p>
        <select>
            <option value="none" class="select_none">---</option>
            <option value="Select1">Select1</option>
            <option value="Select2">Select2</option>
            <option value="Select3">Select3</option>
        </select>
    </div>
    <input type="submit" id="submitBtn">
</form>


<h1 class="mg200">スライドメニュー</h1>
<button id="slide_nav">メニューがスライドする</button>
<nav class="slide_nav" id="slide_nav">
    <ul>
        <li><a href="#">Menu1</a></li>
        <li><a href="#">Menu2</a></li>
        <li><a href="#">Menu3</a></li>
        <li><a href="#">Menu4</a></li>
    </ul>
</nav>

</body>
</html>





