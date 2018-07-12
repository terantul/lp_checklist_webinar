<!doctype html>
<!--[if lt IE 7]> <html class="ie6 oldie"> <![endif]-->
<!--[if IE 7]>    <html class="ie7 oldie"> <![endif]-->
<!--[if IE 8]>    <html class="ie8 oldie"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="">
<!--<![endif]--><head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Старт 3. Открой, изолируй и заставь сильные стороны работать на тебя и твой бизнес</title>

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

<!-- timer -->
<script language="javascript">
function setTimeReg()
{
	setTimeout('setRegButton();', 115000);
}
function setRegButton()
{document.getElementById('hidden').style.display ='block';}
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

  var dont_confirm_leave = 0; 
   var leave_message = 'Подожди, не уходи с этой страницы без своей информации для доступа!\n\nНажми «Остаться на этой странице!», чтобы получить детали доступа!'
  function goodbye(e) {
  
     if (!validNavigation) {

      if (dont_confirm_leave!==1) {
            
          if(!e) e = window.event;
          alert(e.type);

          // Скрыть текущее содержание
          /*$("#stophide").hide();
          $("#stopper_wrap").show();
          dont_confirm_leave = 1;*/
//          validNavigation = true;

        //e.cancelBubble is supported by IE - this will kill the bubbling process.
        e.cancelBubble = true;
        e.returnValue = leave_message;
       //e.stopPropagation works in Firefox.
        if (e.stopPropagation) {
          e.stopPropagation();
          e.preventDefault();
        }
        //return works for Chrome and Safari
        return leave_message;
      }
    }
  }
     if (!validNavigation) {
          window.onbeforeunload=goodbye;
     }
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

<script data-leadbox="146bd3cb3f72a2:14a417206b46dc" data-url="https://goldcoach.leadpages.co/leadbox/146bd3cb3f72a2%3A14a417206b46dc/5642118349455360/" data-config="%7B%7D" type="text/javascript" src="https://goldcoach.leadpages.co/leadbox-898.js"></script>
  
</head>
<body onLoad="setTimeReg();">
<header>
<section class="gridContainer clearfix">	
	<div class="row clearfix">          
      <div class="column fifth"> 
        <img src="images/logo.png" alt="logo" style="max-width: 140px; padding-top: 5px; padding-bottom: 5px;">
      </div>  
        <div class="column col_80">
        <p class="right">+7 495 133 82 24
          <br>
          +38 096 916 13 88
          <br>
          +38 044 221 32 24</p>
        </div>
	</div>
  </section>
</header>

<section class="gridContainer clearfix" style="max-width: 960px;">
	<h1 class="headH1" style=" margin: 0;overflow: hidden;">
    <span class="at" style="background-color: #e74536; color: #FFF;border-radius: 5px 0 0 5px;position: relative;"><strong>ВАЖНО:</strong></span> 
    <span style="border-radius: 0 5px 5px 0; padding: 0.5em 2em;"><strong>Смотри видео ниже ПЕРЕД ТЕМ, как изучить обзор "10 Горячих Ниш Для Старта Бизнеса в 2015-2016 году" (он будет доставлен тебе на почту через 5-10 минут)</strong></span></h1>
<!--    <br>    
    <h1 class="headH1 center" style=" margin: 0;overflow: hidden;font-size:1.2em;"><strong style="color: #e74536; font-size:1.6em;" >ВАЖНО:</strong> Смотри видео ниже ПЕРЕД ТЕМ, как изучить обзор "10 Горячих Ниш Для Старта Бизнеса в 2015-2016 году" (он будет доставлен тебе на почту через 5-10 минут)</h1>-->

</section>
<section class="gridContainer clearfix" style="padding-top: 0; padding-bottom: 0;">
    <div class="ipad">
    <div class="video-container">
    	<iframe src="https://player.vimeo.com/video/139587225?autoplay=1&title=0&byline=0&portrait=0" width="768" height="432" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
    </div>
    </div>
</section>

<div id="hidden">
<section class="gridContainer clearfix">
    <h2 class="center"><strong>Да!</strong> Я Хочу Открыть Свои Уникальные Сильные Стороны Для Бизнеса по специальному предложению СЕЙЧАС...</h2>
  <p class="center" style=""><a class="myButton" target="_blank" href="https://goldcoach.leadpages.co/leadbox/146bd3cb3f72a2%3A14a417206b46dc/5642118349455360/">Купить Видео-Тренинг Всего за $4.95! >></a></p>

</section>
<div style="background-color: #e6e7e8;">
<section class="gridContainer clearfix">	
    <h2 class="center">Успей Заказать Видео-Тренинг<strong> "Старт 3. Открой, Изолируй И Заставь Сильные Стороны Работать На Тебя И Твой Бизнес"</strong> По Специальной Цене!!!</h2>
    <p>Закажи Сейчас и Получи МГНОВЕННЫЙ Доступ к видео-тренингу и...</p>
    <ul class="check">
        <li>Найди свои Уникальные Сильные Стороны, практически <strong>гарантировав себе Успех</strong> (это реальный секрет)...</li>
        <li>Узнай, как играть на Сильных Сторонах и <strong>побеждать, играя по своим правилам</strong>...</li>
        <li>Узнай то, <strong>что знают УСПЕШНЫЕ бизнесмены</strong>, и не знают страдающие...</li>
        <li>Получи <strong>5 работающих техник</strong>, как гарантировано определить свои настоящие сильные стороны и победить...</li>
        <li>Начни <strong>успевать больше работая меньше</strong>, определив 20% тех действий, которые базируются на твоих сильных сторонах и уже сейчас дают 80% результатов...</li>
        <li>Прекрати постоянно откладывать и бороться с внутренним сопротивлением, чтобы <strong>лучше выглядеть, иметь больше сил и энергии</strong>...</li>
        <li>Узнай, что ни в коем случае <strong> нельзя делать при запуске своего бизнеса, </strong> но почти все это делают...</li>
    </ul> 
    <p class="center"><img src="images/i_1.png" alt="Старт 3"></p>
    <h2 class="center"><strong>Что Ты Получаешь В Этой Программе:</strong></h2>
    <ul class="check_b">
        <li>Пакет <strong>"Старт 3. Открой, Изолируй И Заставь Сильные Стороны Работать На Тебя И Твой Бизнес"</strong><br>
(Ценность $197)</li>
    </ul>
    <ul>
      <li>75 минут ценнейшего контента, как выбрать нишу, где задействованы твои сильные стороны</li>
      <li>10 пошаговых видео-инструкций, чтобы заставить сильные стороны работать на тебя и твой бизнес</li>
      <li>Простые и понятные задания, которые помогут тебе открыть свои сильные стороны, начать и улучшить свой бизнес</li>
      <li>Формы и шаблоны для легкого старта</li>
      <li>Наставника и возможность работать с персональным коучем</li>
      <li>24/7 доступ к материалам закрытого сайта...</li>
    </ul>
    <p class="center"><img src="images/i_2.png" alt="Бонусы"></p>

    <h3 class="center"><strong>Бонусы:</strong></h3>              
    <ul class="check_b">
        <li><img src="images/otcypn.png" alt="Отступники" class="right" style="max-width:100px;"><strong>Бонус 1:</strong> Новейшая Книга Ивана Зимбицкого <strong>«Отступники — Секретная система, создающая миллионеров, которая всегда работает»</strong><br>
      (такого ты еще не читал!!!)</li>
        <p class="dush"></p>
        <li><img src="images/k_2.png" alt="Старт 3" class="right" style="max-width:100px;"><strong>Бонус 2:</strong> Методическое Пособие К Видео-Тренингу "Старт 3"<br>
      <strong>(Ценность $97)</strong></li>
      <p class="dush"></p>
        <li><img src="images/k_2.png" alt="Специальный Тест по Определению Сильных Сторон По Видам Деятельности" class="right" style="max-width:100px;"><strong>Бонус 3:</strong> Специальный Тест по Определению Сильных Сторон По Видам Деятельности<br>
      <strong>(Ценность $29)</strong></li>
      <p class="dush"></p>
        <li><img src="images/k_2.png" alt="Специальная Форма Обратной Связи Для Работы Со Своим Окружением" class="right" style="max-width:100px;"><strong>Бонус 4:</strong> Специальная Форма Обратной Связи Для Работы Со Своим Окружением<br>
      <strong>(Ценность $29)</strong></li>
    </ul>      	
</section>
</div>
<div style=" background-color:#2c2d47;">
<section class="gridContainer clearfix">
    <h2 class="center" style="color:#FFF;">Жми на Кнопку и Получи Мгновенный Доступ!</h2>
    <p class="center" style="margin-bottom: 0;"><a class="myButton2" target="_blank" href="https://goldcoach.leadpages.co/leadbox/146bd3cb3f72a2%3A14a417206b46dc/5642118349455360/">Купить Видео-Тренинг Всего за $4.95! >></a></p>
  </section>
</div>
</div>
<footer>
  <section class="gridContainer clearfix">
	<p class="center">
	<a target="_blank" href="http://goldcoach.ru/agreement/">Пользовательское соглашение</a> | <a target="_blank" href="http://goldcoach.ru/agreement/agree.php">Соглашение об обработке персональных данных</a> | <a href="http://goldcoach.ru/otkaz/" target="_blank">Отказ от ответственности</a> | <a target="_blank" href="http://goldcoach.ru/kontakty.html">О компании GoldCoach</a>
 </p>
  </section>
</footer> 

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-38087671-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
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
<noscript><div><img src="//mc.yandex.ru/watch/19951501" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<!-- Office Auto Pilot Analytics -->
<script src='http://www1.moon-ray.com/v2.4/analytics/tracking.js' type='text/javascript'></script>
<script>
_mri = "9448_1_2";
mrtracking();
</script>          
</body>
</html>
