<!doctype html>
<!--[if lt IE 7]> <html class="ie6 oldie"> <![endif]-->
<!--[if IE 7]>    <html class="ie7 oldie"> <![endif]-->
<!--[if IE 8]>    <html class="ie8 oldie"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="">
<!--<![endif]--><head>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TX9W5WB');</script>
<!-- End Google Tag Manager -->

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Сила Фокуса: 5 шагов к притягиванию ДЕНЕГ с помощью силы мышления</title>

<!-- Facebook Conversion Code for 10 niches -->
<script>(function() {
var _fbq = window._fbq || (window._fbq = []);
if (!_fbq.loaded) {
var fbds = document.createElement('script');
fbds.async = true;
fbds.src = '//connect.facebook.net/en_US/fbds.js';
var s = document.getElementsByTagName('script')[0];
s.parentNode.insertBefore(fbds, s);
_fbq.loaded = true;
}
})();
window._fbq = window._fbq || [];
window._fbq.push(['track', '6025715370449', {'value':'0.00','currency':'USD'}]);
</script>
<noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?ev=6025715370449&amp;cd[value]=0.00&amp;cd[currency]=USD&amp;noscript=1" /></noscript>

<link href="boilerplate.css" rel="stylesheet" type="text/css">
<link href="style.css" rel="stylesheet" type="text/css">
<!-- 
Дополнительные сведения об условных комментариях вокруг HTML-тегов в верхней части файла:
paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/

Выполните следующие действия, если вы используете модифицированную сборку modernizr (http://www.modernizr.com/):
* вставьте здесь ссылку на свой javascript;
* удалите ссылку ниже на html5shiv;
* добавьте класс no-js в HTML-теги в верхней части;
* вы также можете удалить ссылку на respond.min.js, если MQ Polyfill входит в сборку modernizr. 
-->
<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script src="respond.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<style>
  body {
    height: 100vh;
    position: relative;
    min-height: 1000px;
  }
  footer {
    position: absolute;
    left: 0;
    bottom: 0;
    width: 100%;
  }
  .footer-active{
    position: relative;
    bottom:auto;
    left: auto;
  }
</style>
<!-- timer -->
<script language="javascript">
function setTimeReg()
{
	setTimeout(setRegButton, 360000);
}
function setRegButton()
{document.getElementById('hidden').style.display ='block';
$('footer').addClass('footer-active');}
</script>
<!--Стоппер-->
<!--<script language="javascript">
      (function() {
        setTimeout(function() {

        var _tags = ['button', 'input', 'a'], _els, _i, _i2;
        for(_i in _tags) {
          _els = document.getElementsByTagName(_tags[_i]);
          for(_i2 in _els) {
            if((_tags[_i] == 'input' && _els[_i2].type != 'button' && _els[_i2].type != 'submit' && _els[_i2].type != 'image') || _els[_i2].target == '_blank') continue;
            _els[_i2].onclick = function() {window.onbeforeunload = function(){};}
          }
        }

        window.onbeforeunload = function() {
          setTimeout(function() {
            window.onbeforeunload = function() {};
            setTimeout(function() {
              document.location.href = __redirect_to;
            }, 500);
          },5);
          return 'Подожди, не уходи с этой страницы без своей информации для доступа!\n\nНажми «Остаться на этой странице!», чтобы получить детали доступа!';
		  $('input[type=submit]').click(function() {
		  $(window).off('beforeunload');
  });
		  $('button[type=submit]').click(function() {
		  $(window).off('beforeunload');
  });  
  		  $('#leadpages-submit-button').click(function() {
		  $(window).off('beforeunload');
  });
  
        }
      }, 500);
      })();
</script>-->

<!--Стоппер-->
<script type="text/javascript">
$(document).ready(function() {
     wireUpEvents(); 
});


var validNavigation = false;
function wireUpEvents() {

  // var dont_confirm_leave = 0; 
  //  var leave_message = 'Подожди, не уходи с этой страницы без своей информации для доступа!\n\nНажми «Остаться на этой странице!», чтобы получить детали доступа!'
  // function goodbye(e) {
  
  //    if (!validNavigation) {

  //     if (dont_confirm_leave!==1) {
            
  //         if(!e) e = window.event;
  //         alert(e.type);

          ////////////////
          // Скрыть текущее содержание
          /*$("#stophide").hide();
          $("#stopper_wrap").show();
          dont_confirm_leave = 1;*/
//          validNavigation = true;
			/////////////

        //e.cancelBubble is supported by IE - this will kill the bubbling process.

        
        // e.cancelBubble = true;
        // e.returnValue = leave_message;

        
       //e.stopPropagation works in Firefox.
        // if (e.stopPropagation) {
        //   e.stopPropagation();
        //   e.preventDefault();
        // }
        //return works for Chrome and Safari
  //       return leave_message;
  //     }
  //   }
  // }
  //    if (!validNavigation) {
  //         window.onbeforeunload=goodbye;
  //    }
  // Attach the event submit for all forms in the page
  $("#form").bind("submit", function() {
    validNavigation = true;
  });

  $("form").bind("submit", function() {
    validNavigation = true;
  });
  // Attach the event click for all inputs in the page
  $("input[type=submit]").bind("click", function() {
  validNavigation = true;
  });
  
  $("button[type=submit]").bind("click", function() {
  validNavigation = true;
  });
  
  $("iframe").bind("click", function() {
  validNavigation = true;
  });
  
  
  $(".myButton").bind("click", function() {
	  validNavigation = true;
  });
  
  $(".myButton2").bind("click", function() {
	  validNavigation = true;
  });  
}


  </script>

   <style>
 .download-book {
  border-radius: 5px;
  background-color: #f0f9fd;
  -webkit-box-shadow: 0 1px 2px gray;
  box-shadow: 0 1px 2px gray;
  width: 932px;
  position: relative;
  margin: 0 auto 10px;
}


.logo-img > img {
  float: left;
  margin-top: 17px;
  margin-left: 15px;
}
.logo-img ul {
  list-style-type: none;
  float: right;
  width: 320px;
  margin: 5px 0;
}
.logo-img li {
  font-size: 14px;
  padding: 2px 0;
  font-weight: bold;
}
.logo-img li span {
  font-size: 12px;
  color: #000;
  font-weight: normal;
}
.logo-img li img {
  display: inline;
  margin: 0;
  margin-right: 5px;
  position: relative;
  top: -1px;
}
.clearfix {
  content: '';
  clear: both;
}
.download-book  {
  font-size: 0;
  color: #8e4c70;
  -webkit-box-shadow: inset 0 0 0 2px #fbcde7;
  box-shadow: inset 0 0 0 2px #fbcde7;
  background-color: #fbe8f3;
}
.download-book > img {
  position: absolute;
  display: inline;
  right: 30px;
  bottom: 0;
}
.vashno {
  position: relative;
  display: inline-block;
  vertical-align: top;
  margin-right: 15px;
}
.dow-content {
  display: inline-block;
  width: 580px;
  font-size: 14px;
  vertical-align: top;
}
.dow-content p {
  position: relative;
}
.dow-content a {
  position: absolute;
  right: 47px;
  bottom: -4px;
  outline: none;
}
.dow-content a span{
  position: absolute;
  width: 100%;
  top: 13px;
  font-weight: bold;
  text-align: center;
  left: 0;
  display: inline-block;
  font-size: 16px;
  text-transform: uppercase;
  color: #fff;
}
.vashno img {
  display: inline;
}
.vashno span {
  font-size: 36px;
  font-weight: bold;
  text-transform: uppercase;
  position: absolute;
  left: 0;
  text-align: center;
  top: 40px;
  display: inline-block;
  width: 100%;
  color: #fff;
}
@media only screen and (max-width: 980px) {
  .download-book {
    width: 742px;
  }
  .download-book > img {
    width: 176px;
    right: 12px;
  }
  
  .top-span {
    font-size: 14px;
  }
  .bottom-span {
    font-size: 13px;
  }
  .vashno img {
    width: 162px;
  }
  .vashno span {
    font-size: 28px;
  }
  .dow-content {
    width: 498px;
    font-size: 12px;
  }
  .dow-content a img{
    width: 230px;
  }
  .dow-content a {
    right: 60px;
  }
  .dow-content a span {
    top: 9px;
  }
}
@media only screen and (min-width: 767px) {
  .hidden-sm {
    display: none;
  }
}
@media only screen and (max-width: 767px) {
  .hidden-xs {
    display: none;
  }
  .download-book {
    width: 98%;
    margin: 0 1% 20px;
    padding: 0;
}}
@media only screen and (max-width: 1065px) {
  .logo-img {
    width: 740px;
  }
}
@media only screen and (max-width: 767px) {
  .hidden-xs {
    display: none!important;
  }
  .logo-img {
    width: 100%;
    text-align: center;
  }
  .download-book {
    width: 100%;
    margin-right: 0;
    margin-left: 0;
  }
  .logo-wrap {
    height: 130px;
    text-align: center;
  }
  .vashno {
    display: block;
    margin-right: 0;
    background-color: #9d547c;
    float: none;
  }
  .vashno span {
    font-size: 28px;
    position: relative;
    left: auto;
    padding: 10px 0;
    top: auto;
  }
  .dow-content {
    width: 100%;
  }
  .download-book > img {
    position: relative;
    right: auto;
    bottom: auto;
    display: block;
    margin: 0 auto;
  }

  .dow-content p {
    padding-left: 15px;
    padding-right: 15px;
  }
  .dow-content a {
    width: 130px;
    right: 15px;
  }
  .dow-content a img {
    width: 100%;
  }
  .dow-content a span {
    font-size: 12px;
    top: 4px;
  }
}
</style>

<script data-leadbox="146bd3cb3f72a2:14a417206b46dc" data-url="https://goldcoach.leadpages.co/leadbox/146bd3cb3f72a2%3A14a417206b46dc/5642118349455360/" data-config="%7B%7D" type="text/javascript" src="https://goldcoach.leadpages.co/leadbox-898.js"></script>
  <style>
    body > iframe {
      top: 50px!important;
    }
    .top-line-wrap {
      position: relative;
      min-height:70px;
      border-bottom: 1px solid rgba(0,0,0,0.3);
    }
    .top-line {
      flex-wrap: wrap;
    }
    .container {
    width: 100%;
    margin: 0 auto;
    box-sizing: border-box;
    padding: 0 15px;
    max-width: 1170px;
}
    .container,
.main-section {
    -webkit-box-sizing: border-box
}
.flex {
    display: flex;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: justify;
    -webkit-justify-content: space-between;
    -ms-flex-pack: justify;
    justify-content: space-between;
}
.flex,
.flex-jcc {
    display: -webkit-flex;
    display: -moz-flex;
    display: -ms-flex;
    display: -o-flex;
    display: -webkit-box;
    display: -ms-flexbox;
    -webkit-box-align: center
}
ul {
    padding: 0;
    margin: 0;
    list-style-type: none
}
.top-line {
    min-height: 70px;
    -webkit-flex-wrap: wrap;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap
}
.top-line img {
  margin:0;
}
.top-line li {
    font-size: 11px;
    line-height: 1.4;
    margin:0;
}

.top-line li img {
    margin-right: 5px;
    font-size: 0
}

.top-line .phone {
    font-size: 13px;
    width: 136px
}

  </style>

</head>
<body onLoad="setTimeReg();">
<div class="top-line-wrap">
      <div class="top-line flex container">
        <img  src="images/logo1.png" alt="">
        <ul>
          <li class="phone flex"><img src="images/rus.png" alt="">+7   495-133-82-24 </li>
          <li class="phone flex"><img src="images/ukr.png" alt="">+38 096-916-13-88</li>
          <li>Мы работаем с Пн. по Пт. с 9-00 до 18-00 (МСК)</li>
        </ul>
      </div>
    </div>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TX9W5WB" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="head">
  <h1 class="center" style="margin: 0 auto;padding: 15px 0;"><strong> <span style="color: red;">ВАЖНО:</span> Смотрите видео ниже ПРЕЖДЕ чем начать использовать Медитацию ФОКУС (Пожалуйста подождите 10-15 минут для доставки) </strong></h1>    

</div>

<div class="download-book" style="margin: 30px auto;">

  <div class="vashno">
    <span>Важно!</span>
    <img class="hidden-xs" src="http://goldcoach.ru/vsl/focus-financial-termostat/images/vashno.png" alt="">
  </div>
    
  <div class="dow-content">
    <p>Перед тем как приступить к медитации смотрите видео сейчас и откройте секретную силу фокуса, узнав которую <b>Вы навсегда измените свое финансовое будущее к лучшему.</b> </p>
    <p><b>Скачайте медитацию тут:</b> <a href="https://s3.eu-central-1.amazonaws.com/gcprimary/2017/06/29.06.2017/Mental-Clairity.mp3" target="_black"><img src="http://goldcoach.ru/vsl/focus-financial-termostat/images/download.png" alt=""><span>Скачать тут</span></a></p>
    <p>Также медитация придет к Вам на почту в письме</p>
  </div>
  
  <img src="http://goldcoach.ru/vsl/focus-financial-termostat/images/product.png" alt="">

</div>

<section class="gridContainer clearfix" style="padding-top: 0; padding-bottom: 0;">
    <div class="ipad">
    <div class="video-container">
    	<iframe src="https://player.vimeo.com/video/214861899?autoplay=1&title=0&byline=0&portrait=0" width="768" height="432" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
    </div>
    </div>
</section>

<div id="hidden">
<section class="gridContainer clearfix">
    <h2 class="center"><strong>Да!</strong> Я хочу перестать терять деньги из-за расфокуса и обрести силу притягивать деньги в твою жизнь с помощью силы мышления СЕЙЧАС…</h2>
  <p class="center" style=""><a class="myButton" target="_blank" href="https://goldcoach.lpages.co/leadbox/147ee4493f72a2%3A14a417206b46dc/5638165721251840/">Купить Видео-Тренинг Всего за $7! >></a></p>

</section>
<div style="background-color: #e6e7e8;">
<section class="gridContainer clearfix">  
    <h2 class="center">Успей Заказать Видео-Тренинг<strong> "Сила Фокуса: 
5 шагов к притягиванию ДЕНЕГ с помощью силы мышления"</strong> По Специальной Цене!!!</h2>
    <p>Закажи Сейчас и Получи МГНОВЕННЫЙ Доступ к видео-тренингу и ты…</p>
    <ul class="check">
        <li>Совершишь прорыв, оставив позади те блоки, которые мешают твоему прогрессу...</li>
        <li>Начнешь легче и проще достигать целей...</li>
        <li>Начнешь зарабатывать больше, совершая большее количество правильных действий...</li>
        <li>Будешь испытывать меньшее сопротивление, начав получать лучшие результаты...</li>
        <li>Некоторые страхи уйдут, ты получишь больше свободы, больше радости...</li>
        <li>Обретешь больше ясности, понимая себя, дисциплинируя себя и принимая больше верных решений...</li>
        <li>Создашь пространство, начав притягивать больше денег в свою жизнь...</li>
    </ul> 
    <p class="center"><img src="images/i_1.png" alt="Старт 3"></p>
    <h2 class="center"><strong>Что Ты Получаешь В Этой Программе:</strong></h2>
    <ul class="check_b">
        <li>Пакет <strong>"Сила Фокуса: 5 шагов к притягиванию ДЕНЕГ с помощью силы мышления"</strong><br>
(Ценность $197)</li>
    </ul>
    <ul>
      <li>Практические техники управления фокусом, чтобы оставаться в фокусе в любых условиях</li>
      <li>«Точка Фокуса» — инструмент, как открыть 1%, который дает 99% денег и успеха</li>
      <li>5-шаговый процесс для притягивания денег с помощью силы фокуса</li>
      <li>Убеждения и привычки сверхпродуктивных богатых людей для достижения денежных целей</li>
    </ul>
    <p class="center"><img src="images/i_2.png" alt="Бонусы"></p>

    <h3 class="center"><strong>Бонусы:</strong></h3>              
    <ul class="check_b">
       
        <li><img src="http://goldcoach.ru/focus/product/images/audio.png" alt="" class="right" style="max-width:84px;padding-left: 5px;"><img src="images/k_2.png" alt="" class="right" style="max-width:100px;"><strong>Бонус 1:</strong> Телекласс <b>«ТОП-3 Причины, Которые Не Дают Тебе Получать Желаемых Результатов»</b> от автора видеотренинга Андрея Выдрика <b>(Ценность $97)</b><br>
      <strong>(Ценность $97)</strong></li>
      <p class="dush"></p>
        <li><img src="http://goldcoach.ru/focus/product/images/audio.png" alt="" class="right" style="max-width:84px;padding-left: 5px;"><img src="images/k_2.png" alt="" class="right" style="max-width:100px;"><strong>Бонус 2:</strong> Телекласс <b>«Как Обрести Мышление Хозяина И Заставить Его Работать На Твой Бизнес»</b> с ведущим коучем GOLD COACH Ириной Коробской <b>(Ценность $97)</b><br>
      <strong>(Ценность $29)</strong></li>
      <p class="dush"></p>
        <li><img src="http://goldcoach.ru/focus/product/images/audio.png" alt="Специальная Форма Обратной Связи Для Работы Со Своим Окружением" class="right" style="max-width:100px;"><strong>Бонус 3:</strong> Телекласс <b>«Как Направить Энергию Чакр На Рост Доходов В Бизнесе»</b> с Иваном Зимбицким и приглашенным экспертом Вячеславом Немцовым <b>(Ценность $97)</b></li>
        <p class="dush"></p>

        <li><img src="http://goldcoach.ru/focus/oplata/images/free.png" alt="Отступники" class="right" style="max-width:100px;"><strong>Бонус 4:</strong> Книга Ивана Зимбицкого с Системой Сверх-Продуктивности Без Стресса <strong>«Освободи Свой Мозг»</strong><br>
      (такого ты еще не читал!!!)</li>

       <li><img src="images/otcypn.png" alt="Отступники" class="right" style="max-width:100px;"><strong>Бонус 5:</strong> Книга Ивана Зимбицкого «Отступники — <strong>секретная Система Создающая Миллионеров</strong> которая Всегда Работает»<br></li>

      <li><img src="http://goldcoach.ru/images/book40.png" alt="Отступники" class="right" style="max-width:82px;margin-right: 8px;"><strong>Бонус 6:</strong> Книга Ивана Зимбицкого “Анатомия Безденежья” - благодаря которой он прошел путь от коуча-одиночки до владельца трех стабильно растущих даже в кризис бизнесов<br></li>

      <li><img src="http://goldcoach.ru/focus/product/images/audio-med.png" alt="Отступники" class="right" style="max-width:100px;"><strong>Бонус 7: </strong> <b>Медитации Джона Ассарафа</b> - ежедневное прослушивание медитаций поможет тебе обрести фокус внутри себя и получить ответы на самые важные вопросы.</li>
      
    </ul>       
</section>
</div>
<div style=" background-color:#2c2d47;">
<section class="gridContainer clearfix">
    <h2 class="center" style="color:#FFF;">Жми на Кнопку и Получи Мгновенный Доступ!</h2>
    <p class="center" style="margin-bottom: 0;"><a class="myButton2" target="_blank" href="https://goldcoach.lpages.co/leadbox/147ee4493f72a2%3A14a417206b46dc/5638165721251840/">Купить Видео-Тренинг Всего за $7! >></a></p>
  </section>
</div>
</div>

<footer class='main-footer'>
  <div class="footer-content">
    <img src="images/foot-logo.png" alt="">
    <a href="http://goldcoach.ru/agreement/" target="_blank">Пользовательское соглашение |</a>
    <a href="http://goldcoach.ru/agreement/agree.php" target="_blank"> Соглашение об обработке персональных данных |</a>
    <a href="http://goldcoach.ru/otkaz/" target="_blank"> Отказ от ответственности</a>
  </div>
</footer>  

<!-- <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-38087671-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script> -->

<!-- Yandex.Metrika counter -->
<!-- <script type="text/javascript">
(function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter19951501 = new Ya.Metrika({id:19951501,
                    webvisor:true,
                    clickmap:true,
                    trackLinks:true});
        } catch(e) { }
    });

    var n = d.getElementsByTagName("script")[0],
        s = d.createElement("script"),
        f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

    if (w.opera == "[object Opera]") {
        d.addEventListener("DOMContentLoaded", f, false);
    } else { f(); }
})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="//mc.yandex.ru/watch/19951501" style="position:absolute; left:-9999px;" alt="" /></div></noscript> -->
<!-- /Yandex.Metrika counter -->
<!-- Office Auto Pilot Analytics -->
<script src='http://www1.moon-ray.com/v2.4/analytics/tracking.js' type='text/javascript'></script>
<script>
_mri = "9448_1_2";
mrtracking();
</script>          
</body>
</html>
