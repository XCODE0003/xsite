@extends('layout.content.main')
@section('content')
    <div id="right">
        <table width="100%" cellspacing="0" padding="0" border="0"><tr><td>
                    <div class="speedbar"><a href="/">Эротические сцены</a> » <a href="/category/{{$video['category']['id']}}">{{$video['category']['name']}}</a> » {{$video['name']}}</div>



                    <div class="story">
                        <div class="full-story">
                            <table width="100%" cellspacing="0" padding="0" border="0">
                                <tr>
                                    <td>
                                        <h1 class="post-title"><span id="news-title">{{$video['name']}}</span></h1>



                                        <div id="player"></div>
                                        <script>
                                            var player = new Playerjs({id:"player", file:"/storage/{{$video['file_video']}}", poster:"/video/"});
                                        </script>








                                        <div class="info"><br>Показ ограничен {{$video['second_locked']}} секундами!
                                            <br><br><a href="{{$video['full_video_link']}}">СМОТРЕТЬ ПРОДОЛЖЕНИЕ</a><br><br>

                                        </div>

                                        Русские подростки заманили девушку в квартиру и заставили танцевать голышом.

                                        <!--<br><br><div style="text-align: center;">



                                        <div class="clear"></div>
                                        </div>-->


                                        <br><br>
                                        <div class="post-info"><div class="info1">
                                                <span>Полное время: <b>{{$video['timeline']}}</b></span>

                                                <span>Название фильма: <b>{{$video['name']}}</b></span>

                                            </div><div class="clear"></div></div>



                                    </td>
                                </tr>
                                <tr>
                                    <td>  </td>
                                </tr>
                            </table>


                            <div align="center"></div>
                        </div>



                        <div class="related-block">
                            <div class="related-title">Похожие сцены из фильмов:</div>
                            @foreach($videos_15 as $video)
                                <div class="related">
                                    <a href="/video/{{$video['id']}}" title="{{$video['name']}}">
                                        <img src="/storage/{{$video['preview']}}" style="background:url('/storage/{{$video['preview']}}') no-repeat; background-size: cover;-webkit-background-size:cover; -o-background-size:cover; -moz-background-size: cover;filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='/video/podrostki-na-zavopodrostki-zamanili-devushku-na-zabroshennyj-zavod-i-iznasilovali-0de.jpg', sizingMethod='scale');
-ms-filter: "progid:DXImageTransform.Microsoft.AlphaImageLoader(src='/video/podrostki-na-zavopodrostki-zamanili-devushku-na-zabroshennyj-zavod-i-iznasilovali-0de.jpg', sizingMethod='scale')";">
                                        <div class="rltd">{{$video['name']}}</div>
                                    </a>
                                    <span class="rltd-cat">{{$video['timeline']}}</span>
                                </div>

                            @endforeach

                        </div>

                    </div>


                    <!--<div class="related-title">Рекомендуем:</div>
                    <div class="short-story">
                    <a href="https://x-sceny.net/shantazh/693-paren-prinuzhdaet-vzrosluyu-zhenschinu-razdetsya-i-perespat-s-nim.html" title="Парень принуждает взрослую женщину раздеться и переспать с ним" >
                    <img src="/templates/HotGirls/images/spacer.gif" style="background:url(/video/paren-prinuzhdaet-vzrosluyu-zhenshhinu-razdetsya-i-perespat-s-nim-00.jpg) no-repeat; background-size: cover;-webkit-background-size:cover; -o-background-size:cover; -moz-background-size: cover;filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='/video/paren-prinuzhdaet-vzrosluyu-zhenshhinu-razdetsya-i-perespat-s-nim-00.jpg', sizingMethod='scale');
                    -ms-filter: "progid:DXImageTransform.Microsoft.AlphaImageLoader(src='/video/paren-prinuzhdaet-vzrosluyu-zhenshhinu-razdetsya-i-perespat-s-nim-00.jpg', sizingMethod='scale')";" />
                    <h2 class="short-title">Парень принуждает взрослую женщину раздеться и переспать с ним</h2>
                    </a>
                    <div class="short-time">05:45</div>
                    <div class="clear"></div>
                    </div><div class="short-story">
                    <a href="https://x-sceny.net/iznasilovanie/677-plemya-dikarey-po-ocheredi-snoshayutsya-s-beloy-devushkoy.html" title="Племя дикарей по очереди насилуют белую девушку" >
                    <img src="/templates/HotGirls/images/spacer.gif" style="background:url(/video/plemya-dikarej-po-ocheredi-snoshayutsya-s-beloj-devushkoj-00.jpg) no-repeat; background-size: cover;-webkit-background-size:cover; -o-background-size:cover; -moz-background-size: cover;filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='/video/plemya-dikarej-po-ocheredi-snoshayutsya-s-beloj-devushkoj-00.jpg', sizingMethod='scale');
                    -ms-filter: "progid:DXImageTransform.Microsoft.AlphaImageLoader(src='/video/plemya-dikarej-po-ocheredi-snoshayutsya-s-beloj-devushkoj-00.jpg', sizingMethod='scale')";" />
                    <h2 class="short-title">Племя дикарей по очереди насилуют белую девушку</h2>
                    </a>
                    <div class="short-time">02:29</div>
                    <div class="clear"></div>
                    </div><div class="short-story">
                    <a href="https://x-sceny.net/incest/676-sestra-ispolzuet-mladshego-brata-kak-seks-igrushku.html" title="Сестра использует младшего брата как секс игрушку" >
                    <img src="/templates/HotGirls/images/spacer.gif" style="background:url(/video/sestra-ispolzuet-mladshego-brata-kak-seks-igrushku-00.jpg) no-repeat; background-size: cover;-webkit-background-size:cover; -o-background-size:cover; -moz-background-size: cover;filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='/video/sestra-ispolzuet-mladshego-brata-kak-seks-igrushku-00.jpg', sizingMethod='scale');
                    -ms-filter: "progid:DXImageTransform.Microsoft.AlphaImageLoader(src='/video/sestra-ispolzuet-mladshego-brata-kak-seks-igrushku-00.jpg', sizingMethod='scale')";" />
                    <h2 class="short-title">Сестра использует младшего брата как секс игрушку</h2>
                    </a>
                    <div class="short-time">10:02</div>
                    <div class="clear"></div>
                    </div><div class="short-story">
                    <a href="https://x-sceny.net/erotika-v-filmakh/842-podrostok-poprosil-odnoklassnicu-pomoch-emu-lishitsya-devstvennosti.html" title="Подросток попросил одноклассницу помочь ему лишится девственности" >
                    <img src="/templates/HotGirls/images/spacer.gif" style="background:url(/video/podrostok-poprosil-odnoklassnicu-pomoch-emu-lishitsya-devstvennosti-0.jpg) no-repeat; background-size: cover;-webkit-background-size:cover; -o-background-size:cover; -moz-background-size: cover;filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='/video/podrostok-poprosil-odnoklassnicu-pomoch-emu-lishitsya-devstvennosti-0.jpg', sizingMethod='scale');
                    -ms-filter: "progid:DXImageTransform.Microsoft.AlphaImageLoader(src='/video/podrostok-poprosil-odnoklassnicu-pomoch-emu-lishitsya-devstvennosti-0.jpg', sizingMethod='scale')";" />
                    <h2 class="short-title">Подросток попросил одноклассницу помочь ему лишится девственности</h2>
                    </a>
                    <div class="short-time">07:35</div>
                    <div class="clear"></div>
                    </div><div class="short-story">
                    <a href="https://x-sceny.net/seks-sceny/806-podrostok-razvel-na-pervyy-seks-13-letnyuyu-devchushku.html" title="Подросток развел на первый секс 13-летнюю девчушку" >
                    <img src="/templates/HotGirls/images/spacer.gif" style="background:url(/video/podrostok-razvel-na-pervyj-seks-13-letnyuyu-devchushku-0.jpg) no-repeat; background-size: cover;-webkit-background-size:cover; -o-background-size:cover; -moz-background-size: cover;filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='/video/podrostok-razvel-na-pervyj-seks-13-letnyuyu-devchushku-0.jpg', sizingMethod='scale');
                    -ms-filter: "progid:DXImageTransform.Microsoft.AlphaImageLoader(src='/video/podrostok-razvel-na-pervyj-seks-13-letnyuyu-devchushku-0.jpg', sizingMethod='scale')";" />
                    <h2 class="short-title">Подросток развел на первый секс 13-летнюю девчушку</h2>
                    </a>
                    <div class="short-time">03:43</div>
                    <div class="clear"></div>
                    </div><div class="short-story">
                    <a href="https://x-sceny.net/lesbiyanki/689-krasivaya-lesbiyskaya-scena-s-orgazmom.html" title="Красивая лесбийская сцена с оргазмом" >
                    <img src="/templates/HotGirls/images/spacer.gif" style="background:url(/video/krasivaya-lesbijskaya-scena-s-orgazmom-00.jpg) no-repeat; background-size: cover;-webkit-background-size:cover; -o-background-size:cover; -moz-background-size: cover;filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='/video/krasivaya-lesbijskaya-scena-s-orgazmom-00.jpg', sizingMethod='scale');
                    -ms-filter: "progid:DXImageTransform.Microsoft.AlphaImageLoader(src='/video/krasivaya-lesbijskaya-scena-s-orgazmom-00.jpg', sizingMethod='scale')";" />
                    <h2 class="short-title">Красивая лесбийская сцена с оргазмом</h2>
                    </a>
                    <div class="short-time">05:28</div>
                    <div class="clear"></div>
                    </div><div class="short-story">
                    <a href="https://x-sceny.net/vzroslye-s-yunymi/841-shlyuha-pomogaet-parnishke-lishitsya-devstvennosti.html" title="Шлюха помогает парнишке лишится девственности" >
                    <img src="/templates/HotGirls/images/spacer.gif" style="background:url(/video/shlyuha-pomogaet-parnishke-lishitsya-devstvennosti-0.jpg) no-repeat; background-size: cover;-webkit-background-size:cover; -o-background-size:cover; -moz-background-size: cover;filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='/video/shlyuha-pomogaet-parnishke-lishitsya-devstvennosti-0.jpg', sizingMethod='scale');
                    -ms-filter: "progid:DXImageTransform.Microsoft.AlphaImageLoader(src='/video/shlyuha-pomogaet-parnishke-lishitsya-devstvennosti-0.jpg', sizingMethod='scale')";" />
                    <h2 class="short-title">Шлюха помогает парнишке лишится девственности</h2>
                    </a>
                    <div class="short-time">04:32</div>
                    <div class="clear"></div>
                    </div><div class="short-story">
                    <a href="https://x-sceny.net/seks-sceny/690-ochnulas-v-morge-ot-togo-chto-ee-trahali.html" title="Очнулась в морге от того что ее трахали" >
                    <img src="/templates/HotGirls/images/spacer.gif" style="background:url(/video/ochnulas-v-morge-ot-togo-chto-ee-traxali-0.jpg) no-repeat; background-size: cover;-webkit-background-size:cover; -o-background-size:cover; -moz-background-size: cover;filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='/video/ochnulas-v-morge-ot-togo-chto-ee-traxali-0.jpg', sizingMethod='scale');
                    -ms-filter: "progid:DXImageTransform.Microsoft.AlphaImageLoader(src='/video/ochnulas-v-morge-ot-togo-chto-ee-traxali-0.jpg', sizingMethod='scale')";" />
                    <h2 class="short-title">Очнулась в морге от того что ее трахали</h2>
                    </a>
                    <div class="short-time">09:55</div>
                    <div class="clear"></div>
                    </div><div class="short-story">
                    <a href="https://x-sceny.net/vzroslye-s-yunymi/896-zhenschina-sdelala-malchiku-minet.html" title="Женщина сделала мальчику минет" >
                    <img src="/templates/HotGirls/images/spacer.gif" style="background:url(/video/zhenshchina-sdelala-malchiku-minet-0.jpg) no-repeat; background-size: cover;-webkit-background-size:cover; -o-background-size:cover; -moz-background-size: cover;filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='/video/zhenshchina-sdelala-malchiku-minet-0.jpg', sizingMethod='scale');
                    -ms-filter: "progid:DXImageTransform.Microsoft.AlphaImageLoader(src='/video/zhenshchina-sdelala-malchiku-minet-0.jpg', sizingMethod='scale')";" />
                    <h2 class="short-title">Женщина сделала мальчику минет</h2>
                    </a>
                    <div class="short-time">02:42</div>
                    <div class="clear"></div>
                    </div><div class="short-story">
                    <a href="https://x-sceny.net/incest/1113-film-ob-otce-pedofile.html" title="Фильм об отце-педофиле" >
                    <img src="/templates/HotGirls/images/spacer.gif" style="background:url(/video/film-ob-otce-pedofile-0.jpg) no-repeat; background-size: cover;-webkit-background-size:cover; -o-background-size:cover; -moz-background-size: cover;filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='/video/film-ob-otce-pedofile-0.jpg', sizingMethod='scale');
                    -ms-filter: "progid:DXImageTransform.Microsoft.AlphaImageLoader(src='/video/film-ob-otce-pedofile-0.jpg', sizingMethod='scale')";" />
                    <h2 class="short-title">Фильм об отце-педофиле</h2>
                    </a>
                    <div class="short-time">06:45</div>
                    <div class="clear"></div>
                    </div><div class="short-story">
                    <a href="https://x-sceny.net/unizhenie/297-mat-so-svoimi-synovyami-muchayut-i-nasiluyut-devushku.html" title="Мать со своими сыновьями мучают и насилуют девушку" >
                    <img src="/templates/HotGirls/images/spacer.gif" style="background:url(/video/priemnaya-mat-so-svoimi-synovyami-muchayut-devushku-0.jpg) no-repeat; background-size: cover;-webkit-background-size:cover; -o-background-size:cover; -moz-background-size: cover;filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='/video/priemnaya-mat-so-svoimi-synovyami-muchayut-devushku-0.jpg', sizingMethod='scale');
                    -ms-filter: "progid:DXImageTransform.Microsoft.AlphaImageLoader(src='/video/priemnaya-mat-so-svoimi-synovyami-muchayut-devushku-0.jpg', sizingMethod='scale')";" />
                    <h2 class="short-title">Мать со своими сыновьями мучают и насилуют девушку</h2>
                    </a>
                    <div class="short-time">09:43</div>
                    <div class="clear"></div>
                    </div><div class="short-story">
                    <a href="https://x-sceny.net/incest/673-roditeli-poprosili-tetushku-podrochit-synu.html" title="Родители попросили тетушку подрочить их сыну" >
                    <img src="/templates/HotGirls/images/spacer.gif" style="background:url(/video/roditeli-poprosili-tetushku-podrochit-synu-00.jpg) no-repeat; background-size: cover;-webkit-background-size:cover; -o-background-size:cover; -moz-background-size: cover;filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='/video/roditeli-poprosili-tetushku-podrochit-synu-00.jpg', sizingMethod='scale');
                    -ms-filter: "progid:DXImageTransform.Microsoft.AlphaImageLoader(src='/video/roditeli-poprosili-tetushku-podrochit-synu-00.jpg', sizingMethod='scale')";" />
                    <h2 class="short-title">Родители попросили тетушку подрочить их сыну</h2>
                    </a>
                    <div class="short-time">03:30</div>
                    <div class="clear"></div>
                    </div>
                      -->





                </td></tr></table>
    </div>

@endsection
