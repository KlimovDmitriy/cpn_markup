<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Выгодно выкупим вашу квартиру в кратчайшие сроки. Выкуп недвижимости по хорошим ценам.");
$APPLICATION->SetPageProperty("keywords", "выкуп квартир спб");
$APPLICATION->SetPageProperty("title", "Выгодный выкуп квартир в Санкт-Петербурге");
//$realtyModuleIncluded = CModule::IncludeModule("citrus.arealty");
$APPLICATION->SetPageProperty("show_sidebar", "N");
$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");
$APPLICATION->SetTitle("Выкуп квартир в Санкт-Петербурге - Центр Продажи Недвижимости");
?>
<style>
/*--thank you pop starts here--*/
.thank-you-pop{
	width:100%;
 	padding:20px;
	text-align:center;
}
.thank-you-pop img{
	width:76px;
	height:auto;
	margin:0 auto;
	display:block;
	margin-bottom:25px;
}

.thank-you-pop h1{
	font-size: 42px;
    margin-bottom: 25px;
	color:#5C5C5C;
}
.thank-you-pop p{
	font-size: 20px;
    margin-bottom: 27px;
 	color:#5C5C5C;
}
.thank-you-pop h3.cupon-pop{
	font-size: 25px;
    margin-bottom: 40px;
	color:#222;
	display:inline-block;
	text-align:center;
	padding:10px 20px;
	border:2px dashed #222;
	clear:both;
	font-weight:normal;
}
.thank-you-pop h3.cupon-pop span{
	color:#03A9F4;
}
.thank-you-pop a{
	display: inline-block;
    margin: 0 auto;
    padding: 9px 20px;
    color: #fff;
    text-transform: uppercase;
    font-size: 14px;
    background-color: #8BC34A;
    border-radius: 17px;
}
.thank-you-pop a i{
	margin-right:5px;
	color:#fff;
}
#ignismyModal .modal-header{
    border:0px;
}
/*--thank you pop ends here--*/

#ff1 option{background:transparent !important;color:#000 !important;}

@media (max-width: 991px) and (min-width: 200px){
    
    h1{font-size:18px !important;}
    .title:not([class*="fs"]){font-size:16px !important;}
}

</style>
    <section class="intro-section intro-section-15">
          <div class="container">
               
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <?for($i=1;$i<=4;$i++){?>
       
                <div class="item <?if ($i==1){?>active<?}?>">
                    <img src="/local/templates/nedv/images/slider/slide_<?=$i;?>.jpg" alt="...">
                </div>
      
<?}?>
            </div>
            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div> </div>
       
    </section><!-- /.intro-section --><!-- team-section -->
    
      
   <section class="other-section other-section-common" id="author">
        <div class="container">
            <div class="flex-row middle-md mb20 row">
                
                
                 
                <div class="col-xs-12  sm-align-c">
                <h1>Выкуп квартир в Санкт-Петербурге</h1>
                    <h3 class="title">ДО 90% ОТ РЫНОЧНОЙ СТОИМОСТИ</h3>

          
   </div>
   <div class="col-xs-12 col-sm-6">
                   
      <p>&laquo;Центр Продажи Недвижимости&raquo; оказывает полный спектр услуг по <strong>выкупу</strong> квартир на <strong>выгодных</strong> для вас условиях.</p>
<p><em>При необходимости мы поможем восстановить и быстро оформить все необходимые документы.</em></p>
<p><strong>Проведем сделку за один день</strong> и в день обращения вы получаете до <strong>500 000</strong> рублей.<br />Наша компания специализируется на сложных сделках в области <strong>продажи квартир</strong> &mdash; обратившись к Нам Вы гарантированно продадите свою квартиру максимально выгодно.</p>
<p><span style="color: #ff0000;"><em><strong>Выкуп ипотечных квартир</strong></em></span></p>
<p><br /><a class="btn btn-info" href="/vykup-kvartir/">Узнать подробней</a></p>
   </div>
   <div class="col-xs-12 col-sm-6">
   <img src="/local/templates/nedv/images/1b.jpg" class="img-responsive">
   </div>
   </div>   </div>    </section>
    
    	
<!-- Form section -->
<section class="form-section form-section-4 pos-rel animated fadeInUp full-visible edit-item" data-animate-in="fadeInUp" style="animation-delay: 0s;" data-sandboxid="tmp-rgyny0">
	<div class="container align-c pos-rel z1 typo-light">
		<h2 class="title small sm-fs20 edit-item edit-content" data-sandboxid="tmp-rgZUP0" style="text-align: center;"><span class="ss1">СКОЛЬКО</span> МЫ ГОТОВЫ ПРЕДЛОЖИТЬ?</h2>
		<p class="title-sub small edit-item edit-content" data-sandboxid="tmp-rgBAL0">Заполните форму и узнайте сумму прямо сейчас</p>
		
		<form method="POST" class="form-widget" data-formtype="newsletter" data-msgpos="normal" id="sform" novalidate="novalidate">
			<ul class="form-inline-tbl align-t">
  	            <li><select name="type" id="ff1"  class="form-control large light">
                  <option selected="selected" disabled="disabled">Выберите тип недвижимости</option>
                  <option value="Квартира">Квартира</option>
                  <option value="Комната">Комната</option>
                  <option value="Дом">Дом</option>
                  <option value="Доля">Доля</option>
                  </select></li>
                <li><input id="ff2" class="form-control large light" data-label="Площадь, м2" required="" data-msg="Введите площадь" type="text" name="ploshad" placeholder="Площадь, м2" aria-required="true"></li>
				<li><input id="ff3" class="form-control large light" data-label="Имя" required="" data-msg="Введите имя" type="text" name="name" placeholder="Ваше имя" aria-required="true"></li>
				<li><input id="ff4" class="form-control large light" data-label="Телефон" required="" data-msg="Введите телефон" type="text" name="phone" placeholder="Ваш телефон" aria-required="true"></li>
			
			</ul>
            <button type="button" onclick="subm()"  class="btn btn-success btn-lg  edit-item edit-content"  data-sandboxid="tmp-rgS5H0">Рассчитать</button>
		</form> <!-- /form -->
        <small style="color: #fff;">Нажимая на кнопку «Рассчитать», я даю согласие на обработку персональных данных</small>

	</div>
	<div class="full-wh bg-cover bg-cc edit-item" data-parallax="scroll" data-image-src="/local/templates/nedv/images/bfd.jpg" data-sandboxid="tmp-rgKTn0"><b class="full-wh bg-dark1 op-07 edit-item" style="background-color: rgba(73, 76, 82, 0.8);" data-sandboxid="tmp-rgLJc0"></b></div>
</section><!-- /.form-section -->
    
       <section class="other-section other-section-common" id="author">
        <div class="container">
            <div class="flex-row middle-md mb20 row">
                
                
                 
                <div class="col-xs-12  sm-align-c">
                    <h4 class="title">Как мы работаем ?</h4>

          
   </div>
   
      <div class="col-xs-12 col-sm-5">
   <img src="/local/templates/nedv/images/2b.jpg" class="img-responsive">
   </div>
   <div class="col-xs-12 col-sm-7">
<ol>
<li>Оставьте заявку через форму обратной связи или по телефону вы оставляете заявку;</li>
<li>После ознакомления с вашей ситуацией мы связываемся с вами и проводим развернутую консультацию по сложившейся ситуации;</li>
<li>Наш специалист выезжает на место (если необходим осмотр недвижимости) или проводится встреча в офисе компании;</li>
<li>После заключения устной договоренности формируется договор купли-продажи и вам выплачивается часть денег, либо переводим на банковский счет. Аванс достигает 500 тысяч рублей;</li>
<li>После регистрации совершенной сделки в Росреестре вы получаете всю сумму за имущество.</li>
</ol>
   </div>

   </div>   </div>    </section>
    
     <section class="other-section other-section-common" id="author">
        <div class="container">
            <div class="flex-row middle-md mb20 row">
                
                
                 
                <div class="col-xs-12  sm-align-c">
                    <h2 class="title">ПОЧЕМУ В ВОПРОСАХ СРОЧНОГО ВЫКУПА НЕДВИЖИМОСТИ ВЫБИРАЮТ НАС</h2>

          
   </div>
   <div class="col-xs-12 col-sm-6">
                   
<ul>
<li>Более 5 лет наша компания на рынке занимается недвижимостью Санкт-Петербурга и Ленинградской области.</li>
<li>Мы специализируемся обычными квартирами, а также продажей квартир в залоге.</li>
<li>Повышенное внимание уделяем вопросам юридической чистоты сделок.</li>
<li>Выплачиваем до 500 тысяч и полная оплата сразу после завершения сделки.</li>
<li>Все спорные вопросы наши специалисты берут на себя, от клиента нужно только заявление</li>
</ul>
<div><em>В современных реалиях может понадобиться крупная сумма денег для решения сложившейся ситуации. Мы готовы предоставить вам необходимые средства уже в день обращения, звоните прямо сейчас!</em></div>
   </div>
   <div class="col-xs-12 col-sm-6">
   <img src="/local/templates/nedv/images/3b.jpg" class="img-responsive">
   </div>
   </div>   </div>    </section>

<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A24e6ba9af120fc793983bcbfd3f844c553588eaff2c10d9d03655d1472bdbe8d&amp;width=100%25&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
<div class="modal fade" id="ignismyModal" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label=""><span>×</span></button>
                     </div>
					
                    <div class="modal-body">
                       
						<div class="thank-you-pop">
					
							<h1>Спасибо за обращение !</h1>
							<p>Специалист свяжется с вами в ближайшее время</p>
		
							
 						</div>
                         
                    </div>
					
                </div>
            </div>
        </div>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>