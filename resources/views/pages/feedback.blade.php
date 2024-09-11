@extends('layout.content.main')
@section('content')

    <div id="right">
        <table width="100%" cellspacing="0" padding="0" border="0"><tbody><tr><td>
                    <div class="speedbar"><a href="https://x-sceny.net/">Эротические сцены</a> » Обратная связь</div>



                    <form method="post" id="sendmail" name="sendmail">
                        <div class="story">
                            <div class="full-story">
                                <div class="post-title"><h1>Обратная связь</h1></div>

                                <div style="font-size:18px;">Не получается войти, не пришло письмо, другая проблема! Вам <a style="font-size:18px;" href="/chasto-zadavaemye-voprosy.html">СЮДА</a></div><br>
                                <!--<div style="font-size:18px;"><span style="color:red; font-size:25px;">           </span> Вы неправильно указали свой e-mail, мы не можем с вами связаться! Напишите нам, указав СУЩЕСТВУЮЩИЙ e-mail, а лучше скопируйте его из почтового ящика!</div><br> -->


                                <div class="category">Написать сообщение администратору</div>


                                <div class="line">
                                    <div class="sline">Ваше имя:</div><input class="input3" maxlength="35" name="name" size="14">
                                </div>

                                <div class="line">
                                    <div class="sline">E-Mail:</div>
                                    <input class="input3" maxlength="35" name="email" size="14">
                                </div>



                                <div class="line">
                                    <div class="sline">Заголовок:</div>
                                    <input class="txsh" style="width:350px;  font-family:tahoma; font-size:12px;" maxlength="45" name="subject" size="14">
                                </div>

                                <div class="line">
                                    <div class="sline">Получатель:</div>
                                    <select name="recip"><option selected="selected" value="1">buranopr (Администраторы)</option>
                                    </select>
                                </div>

                                <div class="line">
                                    <div class="sline">Сообщение:</div>
                                    <textarea style="font-family:verdana; font-size:12px;  width:350px;height:100px;" name="message"></textarea>
                                </div>






                                <div class="line">
                                    <input name="send_btn" class="cbutton" type="submit" value="Отправить">
                                    <br>
                                    <br>

                                </div>
                            </div>
                        </div>


                        <input name="send" type="hidden" value="send">
                        <input name="mailtemplate" type="hidden" value="">
                        <input name="user_hash" type="hidden" value="818cc6bd6f00de136522a2fbc35f41e380590034">
                    </form>



                </td></tr></tbody></table>
    </div>

@endsection
