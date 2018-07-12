<?php
$firstname = $_GET['firstname'];
$phone = $_GET['cell_phone'];
$email = $_GET['email'];

$price = 4.95;
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

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Спасибо за заказ. Забери свое специальное предложение</title>

<!-- Facebook Conversion Code for Регистрация на Старт3 -->
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
window._fbq.push(['track', '6027601119049', {'value':'0.00','currency':'USD'}]);
</script>
<noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?ev=6027601119049&amp;cd[value]=0.00&amp;cd[currency]=USD&amp;noscript=1" /></noscript>

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
	setTimeout('setRegButton();', 150000);
	setTid();
}
function setRegButton()
{document.getElementById('hidden').style.display ='block';
 document.getElementById('hidden2').style.display ='block';}
</script>

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
<!--	<h1 class="headH1" style=" margin: 0;overflow: hidden;">
    <span class="at" style="background-color: #e74536; color: #FFF;border-radius: 5px 0 0 5px;position: relative;"><strong>ВАЖНО:</strong></span> 
    <span style="border-radius: 0 5px 5px 0; padding: 0.5em 2em;"><strong>Смотри видео ниже ПЕРЕД ТЕМ, как изучить обзор "10 Горячих Ниш Для Старта Бизнеса в 2015-2016 году" (он будет доставлен тебе на почту через 5-10 минут)</strong></span></h1>-->
    
  <h1 class="headH1 center" style=" margin: 0;overflow: hidden;font-size:1.5em;color: #e74536;"><strong>Пожалуйста Не Закрывайте Эту Страницу!</strong></h1>

</section>
<section class="gridContainer clearfix" style="padding-top: 0;">
    <div class="ipad">
    <div class="video-container">
    	<iframe src="https://player.vimeo.com/video/139555962?autoplay=1&title=0&byline=0&portrait=0" width="768" height="432" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
    </div>
    </div>
</section>

<div>
  <div style="background-color: #e6e7e8;">
  <section class="gridContainer clearfix">	

    <!-- OAP form -->
<div id="OAP1">
	<!-- jquery url -->
	<script type="text/javascript" src="http://goldcoach.ru/js/url.js"></script>
	<!-- validate -->
	<script type="text/javascript" src="http://goldcoach.ru/js/jquery.form.validate.js"></script>
	<script type="text/javascript" src="http://goldcoach.ru/js/form.validate.css"></script>
<div class="moonray-form-p2c9448f439">
<div class="moonray-form moonray-form-label-pos-stacked">
<form id="myOAP_form" class="moonray-form-clearfix" action="https://forms.moon-ray.com/v2.4/form_processor.php?" method="post" accept-charset="UTF-8">

<div class="moonray-form-element-wrapper moonray-form-element-wrapper-alignment-left moonray-form-input-type-text center " style="max-width:320px;">
<input name="firstname" type="text" class="firstname moonray-form-input OAP_input" id="mr-field-element-386920408811" value="<?php echo $firstname ?>" required placeholder="Введи свое Имя" 
style="background-image: url(images/ik_1.png);
background-repeat: no-repeat;
background-position: 1% 50%;"/></div>

<div class="moonray-form-element-wrapper moonray-form-element-wrapper-alignment-left moonray-form-input-type-email center" style="max-width:320px;">
<input name="email" type="email" class="email moonray-form-input OAP_input" id="mr-field-element-129281638422" value="<?php echo $email ?>" required placeholder="Введи свой E-mail" 
style="background-image: url(images/ik_2.png);
background-repeat: no-repeat;
background-position: 1% 50%;"/></div>

<div class="moonray-form-element-wrapper moonray-form-element-wrapper-alignment-left moonray-form-input-type-tel center" style="max-width:320px;">
<input name="cell_phone" class="phone moonray-form-input OAP_input" type="tel" id="mr-field-element-636458509834" value="<?php echo $phone ?>" required placeholder="Введи свой Номер Телефона" 
style="background-image: url(images/ik_3.png);
background-repeat: no-repeat;
background-position: 1% 50%;"/><p style="margin: 0.4em 0; font-size:14px; text-align:left;">Только цифры: 380991234567</p></div>

<div class="moonray-form-element-wrapper moonray-form-element-wrapper-alignment-center moonray-form-input-type-image center" id="hidden">
<input type="submit" name="submit-button" value="Да, Иван, Я Хочу Дополнить Свой Заказ Сейчас! >>" class="moonray-form-input myButton" id="mr-field-element-888280956540"/></div>

<div class="moonray-form-element-wrapper moonray-form-input-type-hidden"><input name="afft_" type="hidden" value=""/></div>
<div class="moonray-form-element-wrapper moonray-form-input-type-hidden"><input name="aff_" type="hidden" value=""/></div>
<div class="moonray-form-element-wrapper moonray-form-input-type-hidden"><input name="sess_" type="hidden" value=""/></div>
<div class="moonray-form-element-wrapper moonray-form-input-type-hidden"><input name="ref_" type="hidden" value=""/></div>
<div class="moonray-form-element-wrapper moonray-form-input-type-hidden"><input name="own_" type="hidden" value=""/></div>
<div class="moonray-form-element-wrapper moonray-form-input-type-hidden"><input name="oprid" type="hidden" value=""/></div>
<div class="moonray-form-element-wrapper moonray-form-input-type-hidden"><input name="contact_id" type="hidden" value=""/></div>
<div class="moonray-form-element-wrapper moonray-form-input-type-hidden"><input name="uid" type="hidden" value="p2c9448f439"/></div>
<?php if($_GET['utm_medium']) echo '<div class=""><input name="utmmedium_225" class="moonray-form-input" type="hidden" id="mr-field-element-8685403979" value="" placeholder/></div>';?>
<?php if($_GET['utm_source']) echo '<div class=""><input name="utmsource_223" class="moonray-form-input" type="hidden" id="mr-field-element-614967786204" value="" placeholder/></div>';?>
<?php if($_GET['utm_campaign']) echo '<div class=""><input name="utmcampaig_224" class="moonray-form-input" type="hidden" id="mr-field-element-371338102498" value="" placeholder/></div>';?>

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
	$("#myOAP_form").validate({
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
			cell_phone:{
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
</div>
</section>
</div>
<div id="hidden2">
  <div style="background-color: #e6e7e8;">
  <section class="gridContainer clearfix" style="padding-top:0;">
<!--    <p class="center" style=""><a class="myButton" target="_blank" href="#">Да, Иван, Я Хочу Дополнить Свой Заказ Сейчас! >></a></p>-->
	<h2 class="center" style="margin: 1.2em 0;">Я забираю свое специальное предложение и приобретаю себе место среди участников он-лайн программы <span style="color: #e74536; font-weight:bold;">"Экстремальный Старт"</span> всего за <span style="color: #e74536; font-weight:bold;">$27</span> прямо СЕЙЧАС</h2>
    
    <p><img src="../../img/strength_logo.png" class="center" style="max-width: 200px;"></p>
    <h2 class="center"><strong>"Экстремальный Старт" - Это 3 Недельный
 Интерактивный Он-Лайн Курс 
        <br>
    Ты Получаешь:</strong></h2>
    <ul class="check">
      <li>4 основных модуля (от 90-120 минут каждый)</li>
      <li>1 групповой коучинг-звонок (90 минут)</li>
      <li>Пошаговые задания, которые помогут тебе найти свое дело, начать и улучшить свой бизнес</li>
      <li>Наставника и сообщество целеустремленных людей (вместе веселее и не так страшно)</li>
      <li>Доступ к к рекомендуемым ресурсам (это может сэкономить тебе месяцы поисков)</li>
      <li>24/7 доступ к архивам Q &amp; A</li>
      <li>Формы и шаблоны для легкого старта</li>
      <li>3 дополнительных супер ценных бонуса</li>
    </ul>
    
    <div class="row clearfix">
        <div class="column fourth center">
            <a href="http://goldcoach.ru/page_selling/strength/" target="_blank"><img src="images/4_modulia_1_1.png"></a>
            <p>(ценность $197)</p>
        </div>
        <div class="column fourth center">
            <a href="http://goldcoach.ru/page_selling/strength/" target="_blank"><img src="images/4_modulia_2_1.png"></a>
            <p>(ценность $197)</p>
        </div>
        <div class="column fourth center">
            <a href="http://goldcoach.ru/page_selling/strength/" target="_blank"><img src="images/4_modulia_3_1.png"></a>
            <p>(ценность $197)</p>
        </div>
        <div class="column fourth center">
            <a href="http://goldcoach.ru/page_selling/strength/" target="_blank"><img src="images/4_modulia_4_1.png"></a>
            <p>(ценность $197)</p>
        </div>
    </div>
    <p class="center"><img src="images/b_i.png"></p>
    <h2 class="center" style="margin: 1em 0;"><strong>Дополнительные Бонусы Тем Кто Действует Сейчас:</strong></h2>
        <table>
            <tr><td width="60"><img src="images/c_1.png"></td>
            <td>Супер Бонус 1: <strong>Вебинар "11 Токсичных Манер Поведения, Которые Сейчас Уничтожают Твой Бизнес и Разрушают Твое Финансовое Будущее"</strong><br>
(ценность $197)
		  </td></tr>
        </table>    
            <div class="row clearfix">
                <div class="column fourth flow-opposite">
                  <img src="images/b_1.png">
                </div>
              <div class="column three-fourth">
                  <ul class="check point">
                  <li>Открой, какие 11 вредных шаблонов поведения могут сейчас уничтожать твой бизнес и твою жизнь для того, чтобы начать достигать цели быстрее и зарядиться уверенностью, как никогда до этого</li>
                  <li>Узнай реальные секреты, как найти причины неудач в бизнесе и навсегда устранить их, чтобы освободить время на семью и любимое хобби</li>
                  <li>Получи специфические тактики и стратегии, которые поставят тебя на путь построения бизнеса твоей мечты и которые просто применять</li></ul>
                </div>        
       	  </div>
          
          <table>
            <tr>
              <td width="60"><img src="images/c_2.png"></td>
            <td>Супер Бонус 2: <strong>Курс "План Б Генератор Формула" - Первый и единственный курс по старту и развитию бизнеса в мире неопределенности </strong><br>
(ценность $197)
			</td></tr>
        </table>    
            <div class="row clearfix">
                <div class="column fourth flow-opposite">
                  <img src="images/b_2.png">
                </div>
              <div class="column three-fourth">
                  <p>Ты получишь мгновенный доступ к 90 минутам курса, методическое пособие, 11 аудио- и видео-презентаций, 11 PDF-файлов и 5 Бонусов</p>
                  <ul class="check point">                  
                  <li>Получи специфические тактики и стратегии, которые помогут составить бизнес-модель твоей идеи или уже существующего бизнеса, чтобы получить лайфстал, о котором ты мечтаешь.</li>
                  <li>Открой специально разработанную матрицу допущений, которая поможет в точности знать, какие действия тебе необходимо сделать и в каком порядке для того, чтобы получать желаемый результат быстрее.</li>
                  <li>Открой секрет создания продуктов-бестселлеров, чтобы получить силу умножить продажи и прибыль</li></ul>
                </div>        
       	  </div>
			
          <table>
            <tr>
              <td width="60"><img src="images/c_3.png"></td>
            <td>Супер Бонус 3: <strong>Легендарный тренинг "ТОП1% Старт" в записи - Система Поиска Сильных Сторон Для Предпринимателя</strong><br>
(ценность $500)
			</td></tr>
        </table>    
            <div class="row clearfix">
                <div class="column fourth flow-opposite">
                  <img src="images/b_3.png">
                </div>
              <div class="column three-fourth">
                  <ul class="check point">
                  <li>Узнай Большой секрет что значит быть реальным предпринимателем (модуль 1)</li>
                  <li>Обрети фокус и ментальную дисциплину</li>
                  <li>7 инсайдерских тактик нахождения ключевой компетенции</li>
                  <li>Найди конкурентное преимущество (модуль 2)</li>
                  </ul>
                </div>        
       	  </div>    

    <!-- OAP form -->
<div id="OAP1">
	<!-- jquery url -->
	<script type="text/javascript" src="http://goldcoach.ru/js/url.js"></script>
	<!-- validate -->
	<script type="text/javascript" src="http://goldcoach.ru/js/jquery.form.validate.js"></script>
	<script type="text/javascript" src="http://goldcoach.ru/js/form.validate.css"></script>
<div class="moonray-form-p2c9448f439">
<div class="moonray-form moonray-form-label-pos-stacked">
<form id="myOAP_form2" class="moonray-form-clearfix" action="https://forms.moon-ray.com/v2.4/form_processor.php?" method="post" accept-charset="UTF-8">

<div class="moonray-form-element-wrapper moonray-form-element-wrapper-alignment-left moonray-form-input-type-text center " style="max-width:320px;">
<input name="firstname" type="text" class="firstname moonray-form-input OAP_input" id="mr-field-element-386920408811" value="<?php echo $firstname ?>" required placeholder="Введи свое Имя" 
style="background-image: url(images/ik_1.png);
background-repeat: no-repeat;
background-position: 1% 50%;"/></div>

<div class="moonray-form-element-wrapper moonray-form-element-wrapper-alignment-left moonray-form-input-type-email center" style="max-width:320px;">
<input name="email" type="email" class="email moonray-form-input OAP_input" id="mr-field-element-129281638422" value="<?php echo $email ?>" required placeholder="Введи свой E-mail" 
style="background-image: url(images/ik_2.png);
background-repeat: no-repeat;
background-position: 1% 50%;"/></div>

<div class="moonray-form-element-wrapper moonray-form-element-wrapper-alignment-left moonray-form-input-type-tel center" style="max-width:320px;">
<input name="cell_phone" class="phone moonray-form-input OAP_input" type="tel" id="mr-field-element-636458509834" value="<?php echo $phone ?>" required placeholder="Введи свой Номер Телефона" 
style="background-image: url(images/ik_3.png);
background-repeat: no-repeat;
background-position: 1% 50%;"/><p style="margin: 0.4em 0; font-size:14px; text-align:left;">Только цифры: 380991234567</p></div>

<div class="moonray-form-element-wrapper moonray-form-element-wrapper-alignment-center moonray-form-input-type-image center">
<input type="submit" name="submit-button" value="Да, Иван, Я Хочу Дополнить Свой Заказ Сейчас! >>" class="moonray-form-input myButton" id="mr-field-element-888280956540"/></div>

<div class="moonray-form-element-wrapper moonray-form-input-type-hidden"><input name="afft_" type="hidden" value=""/></div>
<div class="moonray-form-element-wrapper moonray-form-input-type-hidden"><input name="aff_" type="hidden" value=""/></div>
<div class="moonray-form-element-wrapper moonray-form-input-type-hidden"><input name="sess_" type="hidden" value=""/></div>
<div class="moonray-form-element-wrapper moonray-form-input-type-hidden"><input name="ref_" type="hidden" value=""/></div>
<div class="moonray-form-element-wrapper moonray-form-input-type-hidden"><input name="own_" type="hidden" value=""/></div>
<div class="moonray-form-element-wrapper moonray-form-input-type-hidden"><input name="oprid" type="hidden" value=""/></div>
<div class="moonray-form-element-wrapper moonray-form-input-type-hidden"><input name="contact_id" type="hidden" value=""/></div>
<div class="moonray-form-element-wrapper moonray-form-input-type-hidden"><input name="uid" type="hidden" value="p2c9448f439"/></div>
<?php if($_GET['utm_medium']) echo '<div class=""><input name="utmmedium_225" class="moonray-form-input" type="hidden" id="mr-field-element-8685403979" value="" placeholder/></div>';?>
<?php if($_GET['utm_source']) echo '<div class=""><input name="utmsource_223" class="moonray-form-input" type="hidden" id="mr-field-element-614967786204" value="" placeholder/></div>';?>
<?php if($_GET['utm_campaign']) echo '<div class=""><input name="utmcampaig_224" class="moonray-form-input" type="hidden" id="mr-field-element-371338102498" value="" placeholder/></div>';?>

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
			cell_phone:{
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
</div>

    <p class="center" style=""><a href="http://goldcoach.ru/page_selling/strength/" target="_blank">Узнать подробнее о программе "ЭКСТРЕМАЛЬНЫЙ СТАРТ"</a></p>
  </section>
</div>

<section class="gridContainer clearfix">
    <p class="center" style="margin-bottom: 0;margin-top: 0;"><a class="myButton2" target="_blank" href="http://goldcoach.ru/start-3/oplata/oplata.php?email=<?php echo $email ?>"><span style="color: #B6140F; font-weight:bold;">&times;</span> Нет, спасибо. Аннулируйте Мой Доступ К Специальному Предложению >></a></p>
    <p style="margin-bottom:0;"> <span style="font-size:1.7em;color: #B6140F; font-weight:bold;">&times;</span> Я отказываюсь от своего места в он-лайн программе "Экстремальный Старт", пусть его займет кто-нибудь другой. Я приобретаю только видео-тренинг <strong>"Старт 3. Открой, изолируй и заставь свои сильные стороны работать на тебя и твой бизнес"</strong> за $<?php echo $price ?></p>
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
