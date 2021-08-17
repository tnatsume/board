<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary static-top">
    <div class="container">
        <a class="navbar-brand" href="/>
            <img src="{{ asset('/assets/images/bootstrap_tmp/logo.svg') }}" alt="ゲイのための出会い掲示板">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/">{{__('TOP')}}
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/post/create/{{$block->pref_id}}">{{__('新規投稿')}}</a>
                </li>
                <li class="nav-item">
                    <a href="/style=0">ツリー表示</a>
                </li>
                <li class="nav-item">
                    <form method="GET">
                    <!-- <a class="nav-link" href="#">{{__('表示形式')}}</a> -->
                        <select name="style" size="5">
                            <option value="">表示形式</option>
                            <option value="0">
                                <a href="/styl=0">ツリー表示</a>
                                </option>
                            <option value="1">一覧表示</option>
                            <option value="2">投稿順表示</option>
                        </select>
                    </form>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?search">{{__('検索')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?setting">{{__('設定')}}</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- / Navigation -->