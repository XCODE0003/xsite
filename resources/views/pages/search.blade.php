@extends('layout.content.main')
@section('content')

    <div id="right">
        <table width="100%" cellspacing="0" padding="0" border="0"><tbody><tr><td>
                    <div class="speedbar"><a href="https://x-sceny.net/">Эротические сцены</a> » Поиск по сайту</div>



                    <form name="fullsearch" id="fullsearch" action="/search" method="get">
                        <input type="hidden" name="do" id="do" value="search">
                        <input type="hidden" name="subaction" id="subaction" value="search">
                        <input type="hidden" name="search_start" id="search_start" value="0">
                        <input type="hidden" name="full_search" id="full_search" value="0">
                        <input type="hidden" name="result_from" id="result_from" value="1">
                        <div class="story">
                            <div class="full-story">
                                <div class="post-title">Поиск на сайте</div>
                                <div class="category">Расширенный поиск</div>

                                <table style="width:100%;">
                                    <tbody><tr>
                                        <td class="search">
                                            <form action="/search" style="margin:10px;">
                                                <input type="text" name="story" id="searchinput" value="{{$search}}" class="textin" style="width:250px" ><br><br>
                                                <input type="submit" class="bbcodes" name="dosearch" id="dosearch" value="Начать поиск">
                                            </form>

                                        </td>
                                    </tr>
                                    </tbody></table>

                                <br>
                                <div><span class="sresult">По Вашему запросу найдено {{count($videos)}} ответов (Результаты запроса 1 - 30) :</span></div>

                            </div>
                            @if(count($videos) === 0)
                                <div class="info">Введено пустое поле для поиска или строка поиска содержит менее 4 символов, в связи с чем поиск был приостановлен.</div>
                            @endif
                           </div>
                        <script>
                            function clearform(frmname){
                                var frm = document.getElementById(frmname);
                                for (var i=0;i<frm.length;i++) {
                                    var el=frm.elements[i];
                                    if (el.type=="checkbox" || el.type=="radio") {
                                        if (el.name=='showposts') {document.getElementById('rb_showposts_0').checked=1; } else {el.checked=0; }
                                    }
                                    if ((el.type=="text") || (el.type=="textarea") || (el.type == "password")) { el.value=""; continue; }
                                    if ((el.type=="select-one") || (el.type=="select-multiple")) { el.selectedIndex=0; }
                                }

                                if( document.getElementById('replylimit') ) {
                                    document.getElementById('replylimit').value = 0;
                                }

                                document.getElementById('search_start').value = 0;
                                document.getElementById('result_from').value = 1;
                            }
                            function list_submit(prm){
                                var frm = document.getElementById('fullsearch');
                                if (prm == -1) {
                                    prm=0;
                                    frm.result_from.value=1;
                                } else {
                                    frm.result_from.value=(prm-1) * 30 + 1;
                                }
                                frm.search_start.value=prm;

                                frm.submit();
                                return false;
                            }
                            function full_submit(prm){
                                document.getElementById('fullsearch').full_search.value=prm;
                                list_submit(-1);
                            }
                        </script>
                    </form>

                    @foreach($videos as $video)

                        <div class="short-story">
                            <a href="/video/{{$video->id}}"
                               title="Первая интимная близость подростков">
                                <img src="/storage/{{$video->preview}}" style="background:url(video/pervaya-intimnaya-blizost-podrostkov-0.jpg) no-repeat; background-size: cover;-webkit-background-size:cover; -o-background-size:cover; -moz-background-size: cover;filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='/video/pervaya-intimnaya-blizost-podrostkov-0.jpg', sizingMethod='scale');
-ms-filter: " progid:DXImageTransform.Microsoft.AlphaImageLoader(src='/video/pervaya-intimnaya-blizost-podrostkov-0.jpg'
                                     , sizingMethod='scale' )";" />
                                <h2 class="short-title">{{$video->name}}</h2>
                            </a>
                            <div class="short-time">{{$video->timeline}}</div>
                            <div class="clear"></div>
                        </div>

                    @endforeach



                    <div class="navigation" align="center">
                        {{ $videos->links('vendor.pagination.custom') }}
                    </div>


                </td></tr></tbody></table>
    </div>

@endsection
