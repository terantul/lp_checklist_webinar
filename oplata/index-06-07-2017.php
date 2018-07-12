<?php 
include $_SERVER["DOCUMENT_ROOT"].'/dev/functions.php';  
$id='85';
$price = 47;
$email = $_GET['email'];

$desc = "Оплата+предложения-пакета+Коуч-Сессия+Охотник+на+демонов+Мультипликатор+10x+$price\$+$email";

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
<title>Оплата предложения-пакета Коуч-Сессия "Охотник на демонов"+"Мультипликатор 10х"</title>
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
<script language="javascript">
function setTid() {
	var utm_source =  getParam("utm_source"); 
	var utm_medium = getParam("utm_medium"); 
	var utm_campaign = getParam("utm_campaign"); 
	//var utm_special = getParam("utm_special");
	//alert (utm_source);
	 document.forms[0].elements["utmsource_223"].value=utm_source;
	 document.forms[0].elements["utmmedium_225"].value=utm_medium;
	   document.forms[0].elements["utmcampaig_224"].value=utm_campaign;
	//  document.forms[0].elements["utmspecial_428"].value=utm_special;
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

<script type="text/javascript">
// $(document).ready(function(e) {
    // RBK
 //$('#my_email').focusout(function(e) {
 //    $('#user_email').val($('#my_email').val());
 //});
 // Yandex
 // $('#my_email').focusout(function(e) {
 //     $('input[name=customerNumber]').val($('#my_email').val());
 //   $('#user_email').val($('#my_email').val());
 // });
// });
</script>

<script>
function gurantee() {
    var myWindow = window.open("http://goldcoach.ru/guarantee/14days.html", "_blank", "width=600, height=250");  
}
</script>
<script type="text/javascript" src="http://goldcoach.ru/js/email.js?ver=2.7"></script>
<link rel="stylesheet" href="http://goldcoach.ru/js/email.css?ver=1.1" type="text/css">
<script>
	$(document).ready(function() {
		$("#my_email").keyup(function(){
			var email = $("#my_email").val();
				if(email != " ")	{
				if(isValidEmailAddress(email))
				{ $("#validEmail").css({	"background-image": "url('http://goldcoach.ru/js/validyes.png')"	});} 
				else 
				{ $("#validEmail").css({ "background-image": "url('http://goldcoach.ru/js/validno.png')" }); } } 
				else { $("#validEmail").css({ "background-image": "url('http://goldcoach.ru/js/validno.png')" }); } }); });
</script>
</head>
<body onLoad="setTid();">

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TX9W5WB" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<div class="head">
<div class="gridContainer clearfix">
  <div class="content" style="">	
	<div class="row clearfix" style="max-width:90%; margin-left:auto; margin-right:auto;">
        <div class="column fifth">        	
          <img src="http://goldcoach.ru/vsl/hunter-mult-for-ets/images/mult_logo.png" style="padding: 0;width: 84px;max-width: 165px;position: relative;margin: 0 auto;margin-bottom: 10px;">
          <img src="http://goldcoach.ru/vsl/hunter-mult-for-ets/images/hunter_logo.png" style="padding: 0;width: 70px;max-width: 165px;position: relative;margin: 0 auto;">
        </div>
        <div class="column col_80">
          <h2 style="margin: 0;">Оплата предложения-пакета Коуч-Сессия "Охотник на демонов"+"Мультипликатор 10х"</h2> 
            <h2><span style="color:#b42323;"><strong>«Охотник на демонов»</strong></span> - 40-минутная индивидуальная консультация со специально обученным коучем для освобождения вас от разрушающих ограничивающих блоков</h2>
            <h2><span style="color:#b42323;"><strong>«Мультипликатор 10х»</strong></span> - 3 недельный практический онлайн ворк-шоп по переустановке финансового термостата</h2>
        </div>
    </div>
       
  </div>  
</div>
</div>
<div class="color">
<div class="gridContainer clearfix">
	<div class="content">
        <div class="row clearfix">


          <div class="column half">
            <div class="oplata center">     


				<!-- <p class="center"><em style="color:#767070;">Выбери способ оплаты</em></p>
<strong><?php echo $_GET['email']; ?></strong> -->

<!-- <?php if (isset($_GET["email"]) && !empty($_GET["email"]))  { echo ""; }
	else { echo '<div class="email-input"><input type="text" placeholder=" Введи здесь свой Email" id="my_email2" name="my_email2"><span id="validEmail" class="error" style="margin-left: 3px;"></span></div>';}?> -->
<!-- <span id="validEmail" class="error"></span> -->
<!-- <strong><span style="font-weight: normal; padding: 14px 0px 0px; color: red;" id='err_email' class='error'></span></strong> -->
<p class="center"><em style="">Информация для доступа к продукту<br>
придет на твой E-mail: </em></p> 

<div class="center">

<!-- INTERKASSA -->
<!-- <form name="payment" action="https://www.interkassa.com/lib/payment.php" method="post" enctype="application/x-www-form-urlencoded" accept-charset="cp1251" onclick="return validate_form ( );">

<input type="hidden" name="ik_shop_id" value="7D526CFC-065C-0B15-6276-A841D31890FB">
<input type="hidden" name="ik_payment_amount" id="ik_payment_amount" value="<?php echo $price;?>">
<input type="hidden" name="ik_payment_id" value="59">
<input type="hidden" id="ik_payment_desc" name="ik_payment_desc" value="Оплата Коуч-Сессии Свидание С Судьбой. email: <?php echo $_GET['email'];?>">
<input type="hidden" id="ik_baggage_fields" name="ik_baggage_fields"  value="Оплата+Индивидуальной+Консультации+Свидание+С+Судьбой+Экстремальный+Старт+<?php echo $_GET['$price'];?>\$+<?php echo $_GET['$email'];?>" >

<input name="imageField" type="submit" class="myButton center" value="Интеркасса">
</form> -->


<!-- <form name="payment" action="https://rbkmoney.ru/acceptpurchase.aspx" method="post"  onClick="return validate_form ( );">
    <input name="eshopId" value="2036474" type="hidden" /> 
    <input id="user_email" name="user_email" value="<?php echo $email; ?>" type="hidden" /> 
    <input name="orderId" value="<?php echo $id;?>" type="hidden" /> 
    <input name="serviceName" value="Коуч-Сессия 'Охотник на демонов' + 'Мультипликатор 10х' email: <?php echo $email; ?>" type="hidden" />
    <input name="recipientAmount" value="<?php echo $price; ?>" type="hidden" />
    <input name="recipientCurrency" value="USD" type="hidden" /> 
    <input name="preference" value="bankcard" type="hidden" /> -->

 <form id="form10" name="payment" action="oplata.php" method="post" enctype="application/x-www-form-urlencoded"  onclick="return validate_form ( );">

<!-- <input type="hidden" name="ik_shop_id" value="7D526CFC-065C-0B15-6276-A841D31890FB">
<input type="hidden" name="ik_payment_amount" id="ik_payment_amount" value="<?php echo $price;?>">
<input type="hidden" name="ik_payment_id" value="<?php echo $id;?>">
<input type="hidden" id="ik_payment_desc" name="ik_payment_desc">
<input type="hidden" id="ik_baggage_fields" name="ik_baggage_fields">

<script>
$(document).ready(function(e) {
  $('#form10').submit(function(e) {
       e.preventDefault();
       if ($('#my_email').val() === 'd.v.litvin@gmail.com') {
          $('#ik_payment_amount').val('1');
       }
     $('#ik_baggage_fields').val("email: "+$('#my_email').val());
       $('#ik_payment_desc').val("Оплата предложения-пакета Коуч-Сессия 'Охотник на демонов'+'Мультипликатор 10х'. email: " + $('#my_email').val());
       console.log('ik_payment_desc: ' + $('#ik_payment_desc').val());
       console.log('ik_baggage_fields: ' + $('#ik_baggage_fields').val());
       this.submit();
  });
});
</script> -->

<div class="email-input">
<input type="text" placeholder="Введи здесь свой Email" id="my_email" name="email"  value="<?php echo $email; ?>" />
<span id="validEmail" class="error" style="margin-left: 3px;"></span></div>


<p class="center" style="margin-bottom: 10px; margin-top: 22px;"><em style="">Выбери самый удобный способ оплаты:</em></p>  

<input name="imageField" type="submit" class="myButton center" value="Оплата картой">
</form>



</div>
<div class="center">
	<table width="80%" border="0" class="center">
      <tr>
        <td class="center" width="75%"><img src="images/oplata.png"></td>
        <td class="center" width="25%"><p style="margin: 0;">Цена:</p>
        <h2 style="margin: 0;">$ <?php echo $price; ?></h2></td>
      </tr>
    </table>    
</div>

              <!-- <div class="center show"> --> <div class="center"><a style="font-size: 15px;" href="http://goldcoach.ru/oplata/oplata.pdf" target="_blank" class="myButton2" style="text-decoration:none;">Другие Способы Оплаты (pdf)</a></div>
                	
            </div>
            <p>&nbsp;</p>
            <img src="images/garantia.png" class="center">
            <p>Эта система сработала более чем 5 596 раз.
                Получение Результата Гарантированно
                </p>
            
            <p style="color:#797878;">Ты всегда можешь  написать на почту <a href="mailto:support@goldcoach.ru">support@goldcoach.ru</a> или <br>
              позвонить по следующим телефонам:<br>
Россия: <strong>+7 495 133 82 24</strong><br>
Украина: <strong>+38 096 916 13 88</strong></p>
            <p style="color:#797878;">02068, Украина, г. Киев, ул. А. Ахматовой, 13д, оф.298<br>
            Официальный адрес компании GoldCoach Ltd: Quijano Chambers, P.O.Box 3159, Road Town, Tortola, BVI</p>

          </div>
          <div class="column half">         
            <h2 class="center">Оплачивай сейчас, чтобы:</h2>
			
            <ul class="check">
                <li style="background-image: url(images/1.png);">Совершишь прорыв, оставив позади те блоки, которые мешают твоему прогрессу...</li>                
              <li style="background-image: url(images/2.png);">Начнешь легче и проще достигать целей</li>
              <li style="background-image: url(images/3.png);">Начнешь зарабатывать больше, совершая большее количество правильных действий</li>
              <li style="background-image: url(images/4.png);">Будешь испытывать меньшее сопротивление, начав получать лучшие результаты</li>
              <li style="background-image: url(images/5.png);">Обретешь больше ясности, понимая себя, дисциплинируя себя и принимая больше верных решений</li>
              <li style="background-image: url(images/6.png);">Создашь пространство, начав притягивать больше денег в свою жизнь</li>
            </ul>
			
            <h2 class="center">Отзывы:</h2>
            <img src="images/o_1.png" class="left" style="max-width:110px;">
            <p style="font-size:15px;"><em>"Спасибо Елене Грабчук за проведенную Охоту на демонов. Вместе мы смогли обнаружить отрицательные убеждения и заменить их новые положительные. Вскоре они станут моими родными и прочно закрепятся в моем мозге и сердце, что поможет мне достичь успеха."</em></p>
            <p style="font-size:15px;"><strong>Павел Каряпкин, г. Термитау</strong></p>
            <p class="dush_b"></p>
            <img src="images/o_2.png" class="right" style="max-width:110px;">
            <p style="font-size:15px;"><em>"За час удалось выявить мою основную проблему и определить дальнейшие действия для борьбы с моим "демоном". И отдельное спасибо за запись этой сессии в мp3."</em></p>
            <p style="font-size:15px;"><strong>Валентин Кривенко, г. Марьина Горка</strong></p>
             <p class="dush_b"></p>
            <img src="images/o_3.png" class="right" style="max-width:110px;">
            <p style="font-size:15px;"><em>За 3 недели занятий я чётко определился со своими целями, начал создавать команду, повысилась внутренняя уверенность, следствие чего повысилось количество и качество заказов, и самое главное, я открыл небольшое производство стеновых блоков. Чувствую впереди ещё много свершений! Лично для себя я совершил огромный шаг вперёд, к достижению</em></p>
            <p style="font-size:15px;"><strong>Дмитрий Мельников, г. Брянск</strong></p>
          </div>
          
        </div>

	</div>
</div>
</div>
<footer>
  <div class="gridContainer clearfix">
  <div class="content" style="  padding: 0;">
  <p class="center">
	<a href="http://goldcoach.ru/otkaz/" target="_blank">Отказ от ответственности</a> | 
	<a href="http://goldcoach.ru/agreement/" target="_blank">Пользовательское соглашение</a>
 </p>
  </div>
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
