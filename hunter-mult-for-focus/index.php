<?php
$firstname = $_GET['firstname'];
$phone = $_GET['cell_phone'];
$email = $_GET['email'];

$price = 7;
$price_rub = $price * 55;


$order_id = "69_" . date("d/m/Y-H:i:s");
$order_id2 = "50_" . date("d/m/Y-H:i:s");

?>
<!doctype html>
<!--[if lt IE 7]> <html class="ie6 oldie"> <![endif]-->
<!--[if IE 7]>    <html class="ie7 oldie"> <![endif]-->
<!--[if IE 8]>    <html class="ie8 oldie"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="">
<!--<![endif]-->
<head>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TX9W5WB');</script>
<!-- End Google Tag Manager -->

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Спасибо за заказ. Забери свое специальное предложение</title>

<!-- Facebook Conversion Code for Регистрация на Старт3 -->
<!-- <script>(function() {
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
window._fbq.push(['track', '6027601119049', {'value':'0.00','currency':'USD'}]);
</script>
<noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?ev=6027601119049&amp;cd[value]=0.00&amp;cd[currency]=USD&amp;noscript=1" /></noscript> -->

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

<!-- utm -->
<script>
function setTid() {
  var utm_source =  getParam("utm_source"); 
  var utm_medium = getParam("utm_medium"); 
  var utm_campaign = getParam("utm_campaign"); 
  var utm_special = getParam("utm_special");
  //alert (utm_source);
if(utm_source != 0 ) document.forms[0].elements["utmsource_223"].value=utm_source;
if(utm_medium != 0 ) document.forms[0].elements["utmmedium_225"].value=utm_medium;
if(utm_campaign != 0 ) document.forms[0].elements["utmcampaig_224"].value=utm_campaign;
if(utm_special != 0 ) document.forms[0].elements["utmspecial_428"].value=utm_special;
  //    alert (100);
  //alert (utm_source);
}
function getParam(sParamName)
{
  var Params = location.search.substring(1).split("&"); // отсекаем "?" и вносим переменные и их значения в массив
  var variable = "";
  for (var i = 0; i < Params.length; i++)
  { // пробегаем весь массив
  
    if (Params[i].split("=")[0] == sParamName)
    { // если это искомая переменная
      // если значение параметра задано, то возвращаем его
      if (Params[i].split("=").length > 1) variable = Params[i].split("=")[1];      
      return variable;
    }
  }
  return "0";
}

</script>
<!-- timer -->
<script language="javascript">
function setTimeReg()
{
  setTimeout('setRegButton();', 336000 ); //336000 - 5min:36sec, 150000,190000
  setTid();
}
function setRegButton()
{
document.getElementById('hidden1').style.display ='block';
document.getElementById('hidden2').style.display ='block';
document.getElementById('hidden3').style.display ='block';
 }
</script>

</head>
<body onLoad="setTimeReg();">

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TX9W5WB" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<header>
<section class="gridContainer clearfix">  
  <div class="row clearfix">          
      <div class="column fifth"> 
        <img src="images/new-logo.png" alt="logo" style="max-width: 140px; padding-top: 13px; padding-bottom: 5px;">
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
<!--  <h1 class="headH1" style=" margin: 0;overflow: hidden;">
    <span class="at" style="background-color: #e74536; color: #FFF;border-radius: 5px 0 0 5px;position: relative;"><strong>ВАЖНО:</strong></span> 
    <span style="border-radius: 0 5px 5px 0; padding: 0.5em 2em;"><strong>Смотри видео ниже ПЕРЕД ТЕМ, как изучить обзор "10 Горячих Ниш Для Старта Бизнеса в 2015-2016 году" (он будет доставлен тебе на почту через 5-10 минут)</strong></span></h1>-->
    
  <h1 class="headH1 center" style=" margin: 0;overflow: hidden;font-size:1.5em;color: #e74536;"><strong>Пожалуйста Не Закрывайте Эту Страницу!</strong></h1>

</section>
<section class="gridContainer clearfix" style="padding-top: 0;">
    <div class="ipad">
    <div class="video-container">
    <!-- Новое видео от 14.06 -->
    <iframe src="https://player.vimeo.com/video/221540194?autoplay=1&title=0&byline=0&portrait=0" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
<!-- Старое видео -->
    <!--   <iframe src="https://player.vimeo.com/video/219475054?autoplay=1&title=0&byline=0&portrait=0" width="768" height="432" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> -->
    </div>
    </div>
</section>

<div>
  <div style="background-color: #e6e7e8;">
  <section class="gridContainer clearfix">  

<!--  <div id="OAP_obraz" style="display: block;">
 
<script language="javascript" type="text/javascript" src="http://goldcoach.ru/js/url.js"></script>
 
<script language="javascript" type="text/javascript" src="http://goldcoach.ru/js/jquery.form.validate.js"></script>
<script language="javascript" type="text/javascript" src="http://goldcoach.ru/js/form.validate.css"></script>
 <style>
   #myOAP_form2 {
    max-width: 320px;
    margin:0 auto !important;
   }
 </style>
 
 
 
<div class="moonray-form-p2c9448f193">
<div class="moonray-form moonray-form-label-pos-stacked">
 
 
 
 
 
<form id="myOAP_form2" name="payment" action="http://goldcoach.ru/focus/oplata/" method="get" enctype="application/x-www-form-urlencoded" accept-charset="cp1251" onclick="return validate_form ( );" novalidate="novalidate">
 
 
<p>Проверь правильность введённых данных и нажми кнопку "Приобрести"</p>
<div class="moonray-form-element-wrapper moonray-form-element-wrapper-alignment-left moonray-form-input-type-text">
<div class="icon icon-name center">
<input name="firstname" class="firstname moonray-form-input oap-form-input OAP_input" type="text" id="mr-field-element-63133734976" required="" value="" placeholder="Введите своё имя" style="background-image: url(images/ik_1.png);
background-repeat: no-repeat;
background-position: 1% 50%;" aria-required="true"></div></div>
<div class="moonray-form-element-wrapper moonray-form-element-wrapper-alignment-left moonray-form-input-type-email center">
<div class="icon icon-email">
<input name="cps_email" class="email moonray-form-input oap-form-input OAP_input" type="email" id="mr-field-element-468219433212" required="" value="" placeholder="Введите свой e-mail" style="background-image: url(images/ik_2.png);
background-repeat: no-repeat;
background-position: 1% 50%;" aria-required="true"></div></div>
<div class="moonray-form-element-wrapper moonray-form-element-wrapper-alignment-left moonray-form-input-type-tel center">
<div class="icon icon-phone">
<input name="cps_phone" class="phone moonray-form-input oap-form-input OAP_input" type="tel" id="mr-field-element-179898614529" required="" value="" placeholder="Введите свой номер телефона" style="background-image: url(images/ik_3.png);
background-repeat: no-repeat;
background-position: 1% 50%;" aria-required="true"></div></div>
<div class="moonray-form-element-wrapper moonray-form-element-wrapper-alignment-center moonray-form-input-type-image center">
<input type="submit" name="submit-button" value="Купить" class="moonray-form-input myButton" id="mr-field-element-880753027508"></div>
<script>
$().ready(function(){
$(".phone").keydown(function(event){
  if(event.keyCode==46||event.keyCode==8||event.keyCode==9||event.keyCode==27||(event.keyCode==65&&event.ctrlKey===true)||(event.keyCode>=35&&event.keyCode<=39)){
    return;
  }else{
    if((event.keyCode<48||event.keyCode>57)&&(event.keyCode<96||event.keyCode>105)){
      event.preventDefault();
    } 
  }
 });
$().ready(function(){
  $("#myOAP_form2").validate({
    rules:{
      firstname:"required",
      lastname:"required",
      cell_phone:{
        required:true,
        minlength:10
      },
      email:{
        required:true,
        email:true
      },
    },
    messages:{
      firstname:"Введи своё имя",
      lastname:"Введи свою фамилию",
      email:"Введи свой E-mail",
      cps_phone:{
        required:"Введи номер телефона",
        digits:"Номер должен содержать только цифры",
        minlength:"Номер должен содержать минимум 10 символов"
      },
    }
  });
});
});
</script>
</form>
</div>
</div>
</div> -->


<!-- РЕДАКТИРОВАНИЕ ФОМРЫ ОНТРАПОРТА  -->

<p style="text-align:center;">Проверь правильность введённых данных и нажми кнопку "Приобрести"</p>

<link rel="stylesheet" href="//app.ontraport.com/js/formeditor/moonrayform/paymentplandisplay/production.css" type="text/css" />
<link rel="stylesheet" href="//forms.ontraport.com/formeditor/formeditor/css/form.default.css" type="text/css" />
<link rel="stylesheet" href="//forms.ontraport.com/formeditor/formeditor/css/form.publish.css" type="text/css" />
<link rel="stylesheet" href="//forms.ontraport.com/v2.4/include/minify/?g=moonrayCSS" type="text/css" />
<link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/themes/smoothness/jquery-ui.min.css" type="text/css" />
<link rel="stylesheet" href="//forms.ontraport.com/v2.4/include/formEditor/gencss.php?uid=p2c9448f736" type="text/css" />
<script type="text/javascript" src="//forms.ontraport.com/v2.4/include/formEditor/genjs-v3.php?html=false&uid=p2c9448f736"></script>

<div class="moonray-form-p2c9448f736 ussr">
<div class="moonray-form moonray-form-label-pos-stacked">

<!-- ФОРМА ЗДЕСЬ -->

<form class="moonray-form-clearfix" action="https://forms.ontraport.com/v2.4/form_processor.php?" method="post" accept-charset="UTF-8">
<!-- ИНПУТ ИМЕНИ -->

<div class="moonray-form-element-wrapper moonray-form-element-wrapper-alignment-left moonray-form-input-type-text">
  <input name="firstname" value="<?php echo $firstname ?>" type="text" class="moonray-form-input" id="mr-field-element-95374479738" required placeholder="Введите своё имя" style="background-image: url(images/ik_1.png);
background-repeat: no-repeat;
background-position: 1% 50%;"/></div>

<!-- ИНПУТ ПОЧТЫ -->

<div class="moonray-form-element-wrapper moonray-form-element-wrapper-alignment-left moonray-form-input-type-email">
  <input name="email" value="<?php echo $email ?>" type="email" class="moonray-form-input" id="mr-field-element-676728474811" required placeholder="Введите свой e-mail" style="background-image: url(images/ik_2.png);
background-repeat: no-repeat;
background-position: 1% 50%;" aria-required="true"/></div>

<!-- ИНПУТ ТЕЛЕФОНА -->

<div class="moonray-form-element-wrapper moonray-form-element-wrapper-alignment-left moonray-form-input-type-text">
  <input name="cell_phone" value="<?php echo $phone ?>" required type="text" class="moonray-form-input" id="mr-field-element-63370032059" placeholder="Введите свой номер телефона" style="background-image: url(images/ik_3.png);
background-repeat: no-repeat;
background-position: 1% 50%;" aria-required="true"/></div>

<!-- ИНПУТ САБМИТ -->

<div class="moonray-form-element-wrapper moonray-form-element-wrapper-alignment-left moonray-form-input-type-submit" id="hidden1">
  <input type="submit" name="submit-button" value="Купить" class="moonray-form-input" id="mr-field-element-365474406701"/></div>




<div class="moonray-form-element-wrapper moonray-form-input-type-hidden"><input name="afft_" type="hidden" value=""/></div>
<div class="moonray-form-element-wrapper moonray-form-input-type-hidden"><input name="aff_" type="hidden" value=""/></div>
<div class="moonray-form-element-wrapper moonray-form-input-type-hidden"><input name="sess_" type="hidden" value=""/></div>
<div class="moonray-form-element-wrapper moonray-form-input-type-hidden"><input name="ref_" type="hidden" value=""/></div>
<div class="moonray-form-element-wrapper moonray-form-input-type-hidden"><input name="own_" type="hidden" value=""/></div>
<div class="moonray-form-element-wrapper moonray-form-input-type-hidden"><input name="oprid" type="hidden" value=""/></div>
<div class="moonray-form-element-wrapper moonray-form-input-type-hidden"><input name="contact_id" type="hidden" value=""/></div>
<div class="moonray-form-element-wrapper moonray-form-input-type-hidden"><input name="utm_source" type="hidden" value=""/></div>
<div class="moonray-form-element-wrapper moonray-form-input-type-hidden"><input name="utm_medium" type="hidden" value=""/></div>
<div class="moonray-form-element-wrapper moonray-form-input-type-hidden"><input name="utm_term" type="hidden" value=""/></div>
<div class="moonray-form-element-wrapper moonray-form-input-type-hidden"><input name="utm_content" type="hidden" value=""/></div>
<div class="moonray-form-element-wrapper moonray-form-input-type-hidden"><input name="utm_campaign" type="hidden" value=""/></div>
<div class="moonray-form-element-wrapper moonray-form-input-type-hidden"><input name="referral_page" type="hidden" value=""/></div>
<div class="moonray-form-element-wrapper moonray-form-input-type-hidden"><input name="uid" type="hidden" value="p2c9448f648"/></div>

          </form>
        </div>
      </div>
<style>
.moonray-form-element-wrapper.moonray-form-element-wrapper-alignment-left {
  padding:1px 0px !important;
}

.moonray-form.moonray-form-label-pos-stacked {
  background-color:transparent;
  border:none;
}

.moonray-form-p2c9448f648, .moonray-form-p2c9448f193,
.moonray-form-p2c9448f736 {
    max-width: 320px !important;
    margin:0 auto !important;
}

.moonray-form-p2c9448f648  .moonray-form.moonray-form-label-pos-stacked,
.moonray-form-p2c9448f736  .moonray-form.moonray-form-label-pos-stacked {
    border: none;
    background: transparent;

  }

.moonray-form-p2c9448f648 .moonray-form-input,
.moonray-form-p2c9448f193 .moonray-form-input,
.moonray-form-p2c9448f736 .moonray-form-input
 {
    width: 100%;
    height: 30px;
    margin: 2px 0;
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    border-radius: 5px;
    border: 1px solid #949494;
        font-family: Tahoma,Geneva,sans-serif;
            -webkit-appearance: textfield;
    background-color: white;
    -webkit-rtl-ordering: logical;
    user-select: text;
    cursor: auto;
    padding: 1px 0px !important;
   }
.moonray-form-p2c9448f193 .moonray-form-input,
.moonray-form-p2c9448f736 .moonray-form-input {
  height:40px;
}

.moonray-form-p2c9448f648 #mr-field-element-63370032059,
.moonray-form-p2c9448f648 #mr-field-element-676728474811,
.moonray-form-p2c9448f648 #mr-field-element-95374479738,
.moonray-form-p2c9448f648 #mr-field-element-63133734976,
.moonray-form-p2c9448f648 #mr-field-element-468219433212,
.moonray-form-p2c9448f648 #mr-field-element-179898614529,
.moonray-form-p2c9448f736 #mr-field-element-63370032059,
.moonray-form-p2c9448f736 #mr-field-element-676728474811,
.moonray-form-p2c9448f736 #mr-field-element-95374479738,
.moonray-form-p2c9448f736 #mr-field-element-63133734976,
.moonray-form-p2c9448f736 #mr-field-element-468219433212,
.moonray-form-p2c9448f736 #mr-field-element-179898614529 {
 text-indent: 35px !important;
  font-size: 14px !important;
}

.moonray-form-element-wrapper.moonray-form-element-wrapper-alignment-left.moonray-form-input-type-submit 
{
  text-align:center;
  font-size: 22px !important;
  text-indent: 0px !important;
}

.moonray-form #mr-field-element-365474406701,
.moonray-form #mr-field-element-880753027508 {
        -moz-box-shadow: 0px 3px 0px 0px #b6140f;
    -webkit-box-shadow: 0px 3px 0px 0px #b6140f;
    box-shadow: 0px 3px 0px 0px #b6140f;
    background-color: #e74536 !important;
    border: 1px solid #b6140f !important;
    -moz-border-radius: 5px !important;
    -webkit-border-radius: 5px !important;
    border-radius: 5px !important;
    display: inline-block !important;
    cursor: pointer;
    color: #ffffff;
    font-size: 22px;
    font-weight: normal;
    padding:14px 6px;
    text-decoration: none;
    margin: 10px auto;
    width: 100% !important;
    height:55px !important;
    border: none;
   }

   @media only screen and (min-width: 481px) {

.moonray-form-p2c9448f648 #mr-field-element-63370032059,
.moonray-form-p2c9448f648 #mr-field-element-676728474811,
.moonray-form-p2c9448f648 #mr-field-element-95374479738,
.moonray-form-p2c9448f736 #mr-field-element-95374479738,
.moonray-form-p2c9448f736 #mr-field-element-676728474811,
.moonray-form-p2c9448f736 #mr-field-element-63370032059 {
  font-size: 16px !important;
   height: 40px !important;
    margin: 4px 0 !important;
}

   }


</style>




</section>
</div>
<div id="hidden2">
  <div style="background-color: #e6e7e8;">
  <section class="gridContainer clearfix" style="padding-top:0;">
<!--    <p class="center" style=""><a class="myButton" target="_blank" href="#">Да, Иван, Я Хочу Дополнить Свой Заказ Сейчас! >></a></p>-->
  <h2 class="center" style="margin: 1.2em 0;">Я забираю свое специальное предложение и приобретаю себе место среди участников он-лайн программы <span style="color: #ff6600; font-weight:bold;">«Мультипликатор 10х»</span> <span style="font-weight:bold;">и персональную 40-минутную коуч-сессию <span style="color: #ff6600;">«ОХОТНИК НА ДЕМОНОВ»</span> в одном пакете всего за <span style="color: #ff6600;">$47</span> прямо СЕЙЧАС”</span></h2>
    
    <p style="text-align: center;"><img src="images/hunter_logo.png" class="center" style="margin: 0 20px;display: inline-block;width: 169px;"><img src="images/mult_logo.png" class="center" style="margin: 0 20px;display: inline-block;max-width: 200px;"></p>
    <h2 class="center"><strong><span style="color: #ff6600;">«Мультипликатор 10х»</span> - Это 3 Недельный
 Интерактивный <span style="color: #ff6600;">Он-Лайн ворк-шоп</span>
        <br>
    Ты Получаешь:</strong></h2>
    <ul class="check">
      <li>4 основных модуля (групповые коучинговые созвоны от 90-120 минут каждый)</li>
      <li>1 групповой коучинг-звонок «Ответы на вопросы» с экспертом по предназначению (90 минут)</li>
      <li>4 практических пошаговых задания, чтобы взорвать <b>невидимые барьеры к успеху, которые блокируют прилив денег в твою жизнь</b></li>
      <li>Наставника и сообщество целеустремленных людей (вместе веселее и не так страшно)</li>
      <li>Практические задания по достижению целей на автопилоте</li>
      <li>24/7 доступ к архивам, чтобы ты смог в любой момент вернуться к материалам</li>
      <li>Формы и шаблоны для легкого старта</li>
      <li>3 дополнительных супер ценных бонуса (<b>Онлайн-тренинг «Внутренние Демоны Антисвободы», Запись телекласса «Психология Денег», 90 дневная программа визуализаций «Моя Жизнь На Вершине Успеха»</b>) ценностью более $191</li>
      <li>Поддержку группы еще 200 предпринимателей и людей приверженных цели создать прибыльный бизнес</li>
    </ul>
    
    <div class="row clearfix">
        <div class="column fourth center">
            <img src="images/image.png">
            <p>Модуль 1: 
«Джин Фактор: Узнай, Получи и Отпусти на Свободу Внутреннего Финансового Джина»<br><br><b>(ценность $197)</b></p>
        </div>
        <div class="column fourth center">
            <img src="images/image.png">
            <p>Модуль 2: «Квантовая Лаборатория: Секретные Триггеры Денег и Стратегии Переустановки Финансового Термостата»<br><br><b>(ценность $197)</b></p>
        </div>
        <div class="column fourth center">
            <img src="images/image.png">
            <p>Модуль 3: 
«Твой Мастер-План: Взорви Любое Препятствие, Стоящее На Твоем Пути Прямо Сейчас»<br><br><b>(ценность $197)</b></p>
        </div>
        <div class="column fourth center">
            <img src="images/image.png">
            <p>Модуль 4: 
«Система Успеха, Которая Всегда Работает (презентует Иван Зимбицкий)»<br><br><b>(ценность $197)</b></p>
        </div>
    </div>

    <h2 class="center"><strong><span style="color: #ff6600;">«Охотник на Демонов»</span> - это 40-минутная индивидуальная консультация со специально обученным коучем для Освобождения вас от <span style="color: #ff6600;">Разрушающих Ограничивающих Блоков</span>
        <br>
    Регистрируйся сейчас, чтобы:</strong></h2>
    <ul class="check">
      <li>Совершишь прорыв, оставив позади те блоки, которые мешают твоему прогрессу...</li>
      <li>Начнешь легче и проще достигать целей</li>
      <li><b>Начнешь зарабатывать больше, совершая большее количество правильных действий</b></li>
      <li>Будешь испытывать меньшее сопротивление, начав получать лучшие результаты</li>
      <li><b>Некоторые страхи уйдут, ты получишь больше свободы, больше радости</b></li>
      <li>Обретешь больше ясности, понимая себя, дисциплинируя себя и принимая больше верных решений</li>
      <li>Создашь пространство, <b>начав притягивать больше денег в свою жизнь</b></li>
    </ul>
    <p class="center"><img src="images/b_i.png"></p>
    <h2 class="center" style="margin: 1em 0;"><strong>Дополнительные Бонусы Тем Кто Действует Сейчас:</strong></h2>
        <table>
            <tr><td width="60"><img src="images/c_1.png"></td>
            <td>Бонус 1: <strong>Онлайн-тренинг «Внутренние Демоны Антисвободы»</strong><br>
(ценность $97)
      </td></tr>
        </table>    
            <div class="row clearfix">
                <div class="column fourth flow-opposite">
                  <img src="images/bonus1.png">
                </div>
              <div class="column three-fourth">
                  <ul style="margin-bottom: 43px;" class="check point">
                  <li>узнай, как увеличить свой доход без изучения тысяч тактик и фишек</li>
                  <li><b>осознай одну простую правду, чтобы победить рутину и гарантировано стать свободным</b></li>
                  <li>измени свое мышление, чтобы перестать страдать и автоматически поднять свои результаты</li>
                  <li><b>узнай стратегии масштабирования бизнеса, если ты уже давно застрял на одном уровне</b></li></ul>
                </div>        
          </div>
          
          <table>
            <tr>
              <td width="60"><img src="images/c_2.png"></td>
            <td>Бонус 2: <strong>Запись телекласса «Психология Денег»</strong><br>
(ценность $47)
      </td></tr>
        </table>    
            <div class="row clearfix">
                <div class="column fourth flow-opposite">
                  <img style="width: 144px;top: -46px;position: relative;" src="images/bonus2.png">
                </div>
              <div class="column three-fourth">
                  <ul class="check point">                  
                  <li>найди и устрани самые опасные убеждения о деньгах</li>
                  <li><b>избавься от главных источников ограничивающих убеждений</b></li>
                  </ul>
                </div>        
          </div>
      
          <table>
            <tr>
              <td width="60"><img src="images/c_3.png"></td>
            <td>Бонус 3: <strong>90 дневная программа визуализаций «Моя Жизнь На Вершине Успеха»</strong><br>
(ценность $47)
      </td></tr>
        </table>    
            <div class="row clearfix">
                <div class="column fourth flow-opposite">
                  <img src="images/bonus3.png">
                </div>
              <div class="column three-fourth">
                  <ul class="check point">
                  <li>Получи пошаговую инструкцию создания твоей идеальной жизни</li>
                  <li><b>Начни привлекать успех, достигая поставленные цели и получая лучшие результаты при меньших усилиях.</b></li>
                  </ul>
                </div>        
          </div>      



<p style="text-align:center;">Проверь правильность введённых данных и нажми кнопку "Приобрести"</p>

<!-- <link rel="stylesheet" href="//app.ontraport.com/js/formeditor/moonrayform/paymentplandisplay/production.css" type="text/css" />
<link rel="stylesheet" href="//forms.ontraport.com/formeditor/formeditor/css/form.default.css" type="text/css" />
<link rel="stylesheet" href="//forms.ontraport.com/formeditor/formeditor/css/form.publish.css" type="text/css" />
<link rel="stylesheet" href="//forms.ontraport.com/v2.4/include/minify/?g=moonrayCSS" type="text/css" />
<link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/themes/smoothness/jquery-ui.min.css" type="text/css" />
<link rel="stylesheet" href="//forms.ontraport.com/v2.4/include/formEditor/gencss.php?uid=p2c9448f736" type="text/css" />
<script type="text/javascript" src="//forms.ontraport.com/v2.4/include/formEditor/genjs-v3.php?html=false&uid=p2c9448f736"></script> -->

<div class="moonray-form-p2c9448f736 ussr">
<div class="moonray-form moonray-form-label-pos-stacked">

<!-- ФОРМА ЗДЕСЬ -->

<form class="moonray-form-clearfix" action="https://forms.ontraport.com/v2.4/form_processor.php?" method="post" accept-charset="UTF-8">
<!-- ИНПУТ ИМЕНИ -->

<div class="moonray-form-element-wrapper moonray-form-element-wrapper-alignment-left moonray-form-input-type-text">
  <input name="firstname" value="<?php echo $firstname ?>" type="text" class="moonray-form-input" id="mr-field-element-95374479738" required placeholder="Введите своё имя" style="background-image: url(images/ik_1.png);
background-repeat: no-repeat;
background-position: 1% 50%;"/></div>

<!-- ИНПУТ ПОЧТЫ -->

<div class="moonray-form-element-wrapper moonray-form-element-wrapper-alignment-left moonray-form-input-type-email"><input name="email" value="<?php echo $email ?>" type="email" class="moonray-form-input" id="mr-field-element-676728474811" required placeholder="Введите свой e-mail" style="background-image: url(images/ik_2.png);
background-repeat: no-repeat;
background-position: 1% 50%;" aria-required="true"/></div>

<!-- ИНПУТ ТЕЛЕФОНА -->

<div class="moonray-form-element-wrapper moonray-form-element-wrapper-alignment-left moonray-form-input-type-text"><input name="cell_phone" value="<?php echo $phone ?>" required type="text" class="moonray-form-input" id="mr-field-element-63370032059" placeholder="Введите свой номер телефона" style="background-image: url(images/ik_3.png);
background-repeat: no-repeat;
background-position: 1% 50%;" aria-required="true"/></div>

<!-- ИНПУТ САБМИТ -->

<div class="moonray-form-element-wrapper moonray-form-element-wrapper-alignment-left moonray-form-input-type-submit" id="hidden3"><input type="submit" name="submit-button" value="Купить" class="moonray-form-input" id="mr-field-element-365474406701"/></div>




<div class="moonray-form-element-wrapper moonray-form-input-type-hidden"><input name="afft_" type="hidden" value=""/></div>
<div class="moonray-form-element-wrapper moonray-form-input-type-hidden"><input name="aff_" type="hidden" value=""/></div>
<div class="moonray-form-element-wrapper moonray-form-input-type-hidden"><input name="sess_" type="hidden" value=""/></div>
<div class="moonray-form-element-wrapper moonray-form-input-type-hidden"><input name="ref_" type="hidden" value=""/></div>
<div class="moonray-form-element-wrapper moonray-form-input-type-hidden"><input name="own_" type="hidden" value=""/></div>
<div class="moonray-form-element-wrapper moonray-form-input-type-hidden"><input name="oprid" type="hidden" value=""/></div>
<div class="moonray-form-element-wrapper moonray-form-input-type-hidden"><input name="contact_id" type="hidden" value=""/></div>
<div class="moonray-form-element-wrapper moonray-form-input-type-hidden"><input name="utm_source" type="hidden" value=""/></div>
<div class="moonray-form-element-wrapper moonray-form-input-type-hidden"><input name="utm_medium" type="hidden" value=""/></div>
<div class="moonray-form-element-wrapper moonray-form-input-type-hidden"><input name="utm_term" type="hidden" value=""/></div>
<div class="moonray-form-element-wrapper moonray-form-input-type-hidden"><input name="utm_content" type="hidden" value=""/></div>
<div class="moonray-form-element-wrapper moonray-form-input-type-hidden"><input name="utm_campaign" type="hidden" value=""/></div>
<div class="moonray-form-element-wrapper moonray-form-input-type-hidden"><input name="referral_page" type="hidden" value=""/></div>
<div class="moonray-form-element-wrapper moonray-form-input-type-hidden"><input name="uid" type="hidden" value="p2c9448f648"/></div>

          </form>
        </div>
      </div>



   <!--  <!-- OAP form -->

<!-- <div id="OAP_obraz" style="display: block;">
 
<script language="javascript" type="text/javascript" src="http://goldcoach.ru/js/url.js"></script>
 
<script language="javascript" type="text/javascript" src="http://goldcoach.ru/js/jquery.form.validate.js"></script>
<script language="javascript" type="text/javascript" src="http://goldcoach.ru/js/form.validate.css"></script>
 
 
 
 
<div class="moonray-form-p2c9448f193">
<div class="moonray-form moonray-form-label-pos-stacked">
 
 
 
 
 <form id="myOAP_form2" name="payment" action="http://goldcoach.ru/focus/oplata/" method="get" enctype="application/x-www-form-urlencoded" accept-charset="cp1251" onclick="return validate_form ( );" novalidate="novalidate"> 
 
 
<p>Проверь правильность введённых данных и нажми кнопку "Приобрести"</p>
<div class="moonray-form-element-wrapper moonray-form-element-wrapper-alignment-left moonray-form-input-type-text">
<div class="icon icon-name center">
<input name="firstname" class="firstname moonray-form-input oap-form-input OAP_input" type="text" id="mr-field-element-63133734976" required=""  value="<?php echo $firstname ?>" placeholder="Введите своё имя" style="background-image: url(images/ik_1.png);
background-repeat: no-repeat;
background-position: 1% 50%;" aria-required="true"></div></div>
<div class="moonray-form-element-wrapper moonray-form-element-wrapper-alignment-left moonray-form-input-type-email center">
<div class="icon icon-email">
<input name="cps_email" class="email moonray-form-input oap-form-input OAP_input" type="email" id="mr-field-element-468219433212" required=""  value="<?php echo $email ?>" placeholder="Введите свой e-mail" style="background-image: url(images/ik_2.png);
background-repeat: no-repeat;
background-position: 1% 50%;" aria-required="true"></div></div>
<div class="moonray-form-element-wrapper moonray-form-element-wrapper-alignment-left moonray-form-input-type-tel center">
<div class="icon icon-phone">
<input name="cps_phone" class="phone moonray-form-input oap-form-input OAP_input" type="tel" id="mr-field-element-179898614529" required=""  value="<?php echo $phone ?>" placeholder="Введите свой номер телефона" style="background-image: url(images/ik_3.png);
background-repeat: no-repeat;
background-position: 1% 50%;" aria-required="true"></div></div>
<div class="moonray-form-element-wrapper moonray-form-element-wrapper-alignment-center moonray-form-input-type-image center">
<input type="submit" name="submit-button" value="Купить" class="moonray-form-input myButton" id="mr-field-element-880753027508"></div>
<script>
$().ready(function(){
$(".phone").keydown(function(event){
  if(event.keyCode==46||event.keyCode==8||event.keyCode==9||event.keyCode==27||(event.keyCode==65&&event.ctrlKey===true)||(event.keyCode>=35&&event.keyCode<=39)){
    return;
  }else{
    if((event.keyCode<48||event.keyCode>57)&&(event.keyCode<96||event.keyCode>105)){
      event.preventDefault();
    } 
  }
 });
$().ready(function(){
  $("#myOAP_form2").validate({
    rules:{
      firstname:"required",
      lastname:"required",
      cell_phone:{
        required:true,
        minlength:10
      },
      email:{
        required:true,
        email:true
      },
    },
    messages:{
      firstname:"Введи своё имя",
      lastname:"Введи свою фамилию",
      email:"Введи свой E-mail",
      cps_phone:{
        required:"Введи номер телефона",
        digits:"Номер должен содержать только цифры",
        minlength:"Номер должен содержать минимум 10 символов"
      },
    }
  });
});
});
</script>
</form>
</div>
</div>
</div> --> 

   <!--  <p class="center" style=""><a href="http://goldcoach.ru/page_selling/strength/" target="_blank">Узнать подробнее о программе "ЭКСТРЕМАЛЬНЫЙ СТАРТ"</a></p> -->
  </section>
</div>

<section class="gridContainer clearfix">
    <p class="center" style="margin-bottom: 0;margin-top: 0;"><a class="myButton2" href="http://goldcoach.ru/ets/oplata/oplata.php?email=<?php echo $email ?>"><span style="color: #B6140F; font-weight:bold;">&times;</span> Нет, спасибо. Аннулируйте Мой Доступ К Специальному Предложению >></a></p>
    <p style="margin-bottom:0;"> <span style="font-size:1.7em;color: #B6140F; font-weight:bold;">&times;</span> Я отказываюсь от своего места в воркшопе «Мультипликатор 10х» и на консультации с коучем... Пусть его займет кто-нибудь другой. Я приобретаю только программу <strong> «Сила Фокуса: 5 шагов к притягиванию ДЕНЕГ с помощью силы мышления"</strong> за $<?php echo $price ?></p>
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
