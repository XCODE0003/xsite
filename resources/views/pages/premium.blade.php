@extends('layout.content.main')
@section('content')
    <div id="right">
        <table width="100%" cellspacing="0" padding="0" border="0"><tbody><tr><td>
                    <div class="speedbar"><a href="https://x-sceny.net/">Эротические сцены</a> » Регистрация посетителя</div>



                    <form method="post" name="registration" id="registration" action="">
                        <style>
                            .blink {
                                animation: blink 1s infinite;
                                color: red;
                            }
                            @keyframes blink {
                                from { opacity: 1;}
                                to { opacity: 0;}
                            }
                        </style>

                        <div class="tabs">
                            <input id="tab1" type="radio" name="tabs" checked="">
                            <label for="tab1" title="Вкладка 1">30 дней</label>

{{--                            <input id="tab2" type="radio" name="tabs">--}}
{{--                            <label for="tab2" title="Вкладка 2">3 месяца</label>--}}

{{--                            <input id="tab3" type="radio" name="tabs">--}}
{{--                            <label for="tab3" title="Вкладка 3">Безлимитный</label>--}}

                            <input id="tab4" type="radio" name="tabs">
                            <label for="tab4" title="Вкладка 4">Приватный канал ТГ<sup><span class="blink"><b>NEW</b></span></sup></label>


                            <section id="content-tab1">
                                <div class="story">
                                    <div class="full-story">
                                        <div class="info">
                                            <span style="font-size:18px;">Получение Премиум доступа на 30 дней</span><br><br>
                                            <a href="/user" target="_blank" style="font-size:22px;" class="button8"><b>Приобрести доступ за {{$settings['price']}} руб.</b></a>
                                            <br><span style="font-size:13px; color:#19B81F;">(Webmoney, Steam, Криптовалюты...) </span>

                                            <br><br><a href="{{$settings->tg_support}}" style="font-size:22px;" class="button8"><b>Приватный канал Телеграм</b></a>
                                            <br><span style="font-size:13px; color:#19B81F;">(СБП, Юмани, карты России, карты Украины, KZT, UZS, AZN, USDT)</span>


                                            <!--<a href="https://www.oplata.info/asp2/pay_wm.asp?id_d=4349739" target="_blank" style="font-size:22px;" class="button8"><b>Приобрести доступ 300 руб.</b></a>
                                            <br><span style="font-size:13px; color:#19B81F;">(Webmoney, Карты Казахстана, Steam, Криптовалюты...) </span>

                                             <br><br><br><a href="https://www.oplata.info/asp2/pay_fk.asp?id_d=3149445&id_po=0&cart_uid=&ai=&ain=&curr=FKA" target="_blank" style="font-size:19px; color:#FD3D3B;"><b> >>> Больше способов оплаты <<< </b></a>
                                              <br><span style="font-size:13px; color:#19B81F;">(СБП, карты России, карты Украины, ЮMoney, МИР, Онлайн банк, SteamPay, Perfect Money, Криптовалюты...) </span>  -->

                                            <!--<br><br><a href="/privat.html" style="font-size:22px;" class="button8"><b>Оплатить банковской картой</b></a>
                                            <br><span style="font-size:13px; color:#19B81F;">(Visa, MasterCard, МИР, Юмани)</span>-->

                                            <br><br><br><span style="font-size:19px; color:#FD3D3B;"><b> !!! Больше способов оплаты доступно для тарифа Безлимит !!! </b></span>
                                            <br><span style="font-size:13px; color:#19B81F;">(СБП, Онлайн банк, МИР, СБЕР Pay, ЮMoney, карты России, карты Украины, Webmoney, Steam, Криптовалюты...) </span>






                                            <br><br><br><span style="font-size:13px;">Затем войдите на сайт с помощью кнопки "<b>Войти</b>" справа в верху сайта, используя логин и пароль, полученый после оплаты</span>
                                        </div></div></div>
                            </section>



                            <section id="content-tab2">
                                <div class="story">
                                    <div class="full-story">
                                        <div class="info">
                                            <span style="font-size:18px;">Получение Премиум доступа на 3 месяца</span><br><br>
                                            <a href="https://www.oplata.info/asp2/pay_fk.asp?id_d=3163402&amp;id_po=0&amp;cart_uid=&amp;ai=&amp;ain=&amp;curr=FKA&amp;lang=ru-RU" target="_blank" style="font-size:22px;" class="button8"><b>Приобрести доступ за 500 руб.</b></a>
                                            <br><span style="font-size:13px; color:#19B81F;">(СБП, карты России, Онлайн банк, МИР, СБЕР Pay, Webmoney, Steam, Криптовалюты...) </span>

                                            <br><br><a href="/privat.html" style="font-size:22px;" class="button8"><b>Приватный канал Телеграм</b></a>
                                            <br><span style="font-size:13px; color:#19B81F;">(СБП, Юмани, карты России, карты Украины, KZT, UZS, AZN, USDT)</span>

                                            <br><br><a href="/boosty2.html" style="font-size:20px;" class="button8"><b>Оплатить картой другой страны (не РФ)</b></a>
                                            <br><span style="font-size:13px; color:#19B81F;">(bank cards all countries) </span>



                                            <!--    <a href="https://www.oplata.info/asp2/pay_wm.asp?id_d=4349719" target="_blank" style="font-size:22px;" class="button8"><b>Приобрести доступ за 500 руб.</b></a>
                                            <br><span style="font-size:13px; color:#19B81F;">(Webmoney, Карты Казахстана, Steam, Криптовалюты...) </span>

                                                <br><br><br><a href="https://www.oplata.info/asp2/pay_fk.asp?id_d=3163402&id_po=0&cart_uid=&ai=&ain=&curr=FKA&lang=ru-RU&digiuid=B902BAF4-D9B6-4B69-B205-88AE2E3B57A4&failpage=&_ow=&_ids_shop=0&item_cnt=1&promocode=" target="_blank" style="font-size:19px; color:#FD3D3B;"><b> >>> Больше способов оплаты <<< </b></a>
                                               <br><span style="font-size:13px; color:#19B81F;">(СБП, карты России, карты Украины, ЮMoney, МИР, Онлайн банк, SteamPay, Perfect Money, Криптовалюты...) </span> -->

                                            <!--<br><br><a href="/privat.html" style="font-size:22px;" class="button8"><b>Оплатить банковской картой</b></a>
                                            <br><span style="font-size:13px; color:#19B81F;">(Visa, MasterCard, МИР, Юмани)</span>-->

                                            <br><br><br><span style="font-size:19px; color:#FD3D3B;"><b> !!! Больше способов оплаты доступно для тарифа Безлимит !!! </b></span>
                                            <br><span style="font-size:13px; color:#19B81F;">(СБП, Онлайн банк, МИР, СБЕР Pay, ЮMoney, карты России, карты Украины, Webmoney, Steam, Криптовалюты...) </span>

                                            <br><br><br><span style="font-size:13px;">Затем войдите на сайт с помощью кнопки "<b>Войти</b>" справа в верху сайта, используя логин и пароль, полученый после оплаты</span>
                                        </div></div></div>
                            </section>



                            <section id="content-tab3">
                                <div class="story">
                                    <div class="full-story">
                                        <div class="info">
                                            <span style="font-size:18px;">Получение Безлимитного доступа (навсегда)</span><br><br>

                                            <a href="https://www.oplata.info/asp2/pay_fk.asp?id_d=3163404&amp;id_po=0&amp;cart_uid=&amp;ai=&amp;ain=&amp;curr=FKA" target="_blank" style="font-size:22px;" class="button8"><b>Приобрести Безлимитный доступ за 1000 руб.</b></a>
                                            <br><span style="font-size:13px; color:#19B81F;">(СБП, Онлайн банк, МИР, СБЕР Pay, ЮMoney, карты России, карты Украины, Webmoney, Steam, Криптовалюты...) </span>

                                            <br><br><a href="/boosty2.html" style="font-size:20px;" class="button8"><b>Оплатить картой другой страны (не РФ)</b></a>
                                            <br><span style="font-size:13px; color:#19B81F;">(bank cards other countries) </span>

                                            <!--   <a href="https://www.oplata.info/asp2/pay_wm.asp?id_d=4349720" target="_blank" style="font-size:22px;" class="button8"><b>Приобрести Безлимитный доступ 700 руб.</b></a>
                                           <br><span style="font-size:13px; color:#19B81F;">(СБП, карты России, карты Украины, ЮMoney, МИР, Онлайн банк, SteamPay, Perfect Money, Криптовалюты...) </span>

                                               <br><br><br><a href="https://www.oplata.info/asp2/pay_fk.asp?id_d=3163404&id_po=0&cart_uid=&ai=&ain=&curr=FKA&lang=ru-RU&digiuid=443AAF0E-CE67-4FA4-8C9F-A32D9025A028&failpage=&_ow=&_ids_shop=0&item_cnt=1&promocode=" target="_blank" style="font-size:19px; color:#FD3D3B;"><b> Приобрести Безлимитный доступ за 1000 руб. </b></a>
                                               <br><span style="font-size:13px; color:#19B81F;">(СБП, карты России, карты Украины, ЮMoney, МИР, Онлайн банк, SteamPay, Perfect Money, Криптовалюты...) </span>


                                               <br><br><a href="/privat.html" style="font-size:22px;" class="button8"><b>Оплатить банковской картой</b></a>
                                           <br><span style="font-size:13px; color:#19B81F;">(Visa, MasterCard, МИР, Юмани)</span>-->

                                            <br><br><br><span style="font-size:13px;">Затем войдите на сайт с помощью кнопки "<b>Войти</b>" справа в верху сайта, используя логин и пароль, полученый после оплаты</span>
                                        </div></div></div>
                            </section>

                            <section id="content-tab4">
                                <div class="story">
                                    <div class="full-story">
                                        <div class="info">
                                            <span style="font-size:18px;">Приватный канал в Телеграм</span><br><br>
                                            <p><img src="/video/privat.gif" alt="Секс сцены из фильмов приватный канал в Телеграм" style="width:100%; max-width:280px; height:auto; margin:0 auto;"></p><br>
                                            <span style="font-size:16px; color:#19B81F;">ЭроСцены Приват</span> – это приватный канал в Телеграм, полный аналог нашего сайта, содержащий все его видео + видео, которых нет на сайте.

                                            <br><br><a href="https://t.me/ESPodpiska_bot" target="_blank" style="font-size:22px;" class="button8"><b>Перейти в бот оплаты</b></a>
                                            <br><span style="font-size:13px; color:#19B81F;">(СБП, Юмани, карты России, карты Украины, KZT, UZS, AZN, USDT) </span>

                                            <br><br><br><span style="font-size:13px;">После оплаты, Вы автоматически получите приглашение в приватный канал.</span>

                                        </div></div></div>
                            </section>


                        </div>
                        <br><br>
                        <center><span style="font-size:18px;color:#19B81F;">После оплаты Премиум доступа вы получаете:</span></center>
                        <span style="font-size:16px;">
&nbsp; - Полнометражный просмотр всех сцен
<br>&nbsp; - Просмотр названия фильма и года выхода
<br>&nbsp; - Просмотр всех сцен из этого фильма
<br>&nbsp; - Просмотр на большой скорости
<br>&nbsp; - Ссылку на торрент полной версии фильма
<br>&nbsp; - +10 дней за положительный отзыв на digiseller.ru (не позднее 3 дней с момента покупки)
</span>
                        <br><br>&nbsp; <span style="font-size:15px;">При возникновении каких-либо проблем сообщите через <a href="/index.php?do=feedback" style="color:#D62727">форму обратной связи</a>, обязательно указав e-mail указанный при оплате.</span><br><br>

                        <input name="submit_reg" type="hidden" id="submit_reg" value="submit_reg">
                        <input name="do" type="hidden" id="do" value="register">
{{--                    </form><script>--}}
{{--                        function check_reg_daten () {--}}

{{--                            if(document.forms.registration.name.value == '') {--}}

{{--                                DLEalert('Имя пользователя не может быть пустым!', dle_info);return false;--}}

{{--                            }--}}

{{--                            if(document.forms.registration.password1.value.length < 6) {--}}

{{--                                DLEalert('Длина пароля должна быть не менее 6 символов!', dle_info);return false;--}}

{{--                            }--}}

{{--                            if(document.forms.registration.password1.value != document.forms.registration.password2.value) {--}}

{{--                                DLEalert('Оба введённых пароля должны быть идентичны!', dle_info);return false;--}}

{{--                            }--}}

{{--                            if(document.forms.registration.email.value == '') {--}}

{{--                                DLEalert('Введён неверный e-mail адрес!', dle_info);return false;--}}

{{--                            }--}}

{{--                            return true;--}}

{{--                        };--}}
{{--                    </script>--}}



                </td></tr></tbody></table>
    </div>


@endsection
