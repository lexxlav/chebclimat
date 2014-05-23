<?php
/**
 * @file
 * Returns the HTML for a single Drupal page.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728148
 */
?>
<div id="page2">
    <!-- -->
       <div class="row-fluid room_background">
     <div class="container margin_top_header">
        <div class="span5">
          <div class="row-fluid logo_banner">
                
          </div>
          <div class="row-fluid">
            <div class="big_blue_label">
                  <p>Кондиционер с установкой</p>
                  <p>всего за 13 990 рублей</p>
                  <p>до 31 мая!</p>
                  <div class="row-fluid ">
                     <a href="#reg" class="btn form-submit short">ОСТАВИТЬ ЗАЯВКУ</a>
                  </div> 
            </div>
           </div> 
          </div>
          
        <div class="span7 numbers">
          <div class="row-fluid">
            <div class="span6 inline">
              <p><div class="mail_icon"></div>
              <a href="mailto:maks-k21@mail.ru">maks-k21@mail.ru</a></p>
            </div>
            <div class="span6">
              <p><div class="mail_icon2"></div>8 (8352) 22-07-66</p>
              <p><div class="mail_icon2"></div>8 (8352) 21-07-66</p>
              <p><div class="little_white_label"><a href="#myModal" data-toggle="modal">Заказать обратный звонок</a></div></p>
            </div>
          </div>
          <div class="row-fluid">
             <div class="span8 cond_img">
                
             </div>
          </div>
        </div>  

     </div>
     </div>
   </div> 

    <!-- -->
<!-- end of header -->
  
<!-- -->
 

  <div id="main">
  <!-- -->

  <!-- -->
<div class="container white_block">
 <div class="span2"></div>
 <div class="span8">
 <div class="blue_border_block">
     <div class="big_black_text">Расчет мощности охдаждения</div>
     <div class="row-fluid">
      <form name="calc" id="calc"> 
       <div class="row-fluid">
        <div class="span6">
          <div class="cond_label">
           Площадь помещения (м²): 
          </div> 
        </div>
        <div class="span6">
           <input type="text" name="ploshad" class="short_form" size="40" value="30">
        </div> 

       </div>

       <div class="row-fluid">
        <div class="span6">
           <div class="cond_label">
           Высота потолка (м):
           </div>
        </div>
        <div class="span6">
           <input type="text" name="vis_potolka" class="short_form" size="40" value="2.5">
        </div> 
        
       </div>

       <div class="row-fluid">
        <div class="span6">
           <div class="cond_label">
           Освещенность солнцем
           </div>
        </div>
        <div class="span6">
          <select name="osvesh" size="1">
            <option value="30">Малая</option>
            <option value="35" selected="selected">Средняя</option>
            <option value="40">Высокая</option>
           </select>
        </div> 
        
       </div>

       <div class="row-fluid">
        <div class="span6">
          <div class="cond_label">
           Количество людей:
          </div> 
        </div>
        <div class="span6">
          <div class="span5"> 
           <input type="text" name="kol_ludei" class="short_form" size="40" id="kol_vo" value="1">
          </div>
          <div class="span6">
           <div class="row-fluid">
            <input type="button" value="+" id="plus" onclick="if (!isNaN(document.calc.kol_ludei.value)){kol_vo.value = parseInt(kol_vo.value) + 1;} else {kol_vo.value=1;}">
           </div>
           <div class="row-fluid">
            <input type="button" value="-" id="minus" onclick="if (!isNaN(document.calc.kol_ludei.value) && (document.calc.kol_ludei.value>1)){kol_vo.value = parseInt(kol_vo.value) - 1;} else {kol_vo.value=1;}">
           </div>
          </div> 
        </div> 
        
       </div>

         <div class="row-fluid">
        <div class="span6">
          <div class="cond_label">
           Количество компьютеров:
          </div> 
        </div>
        <div class="span6">
          <div class="span5"> 
           <input type="text" name="kol_komp" class="short_form" size="40" id="komps" value="1">
          </div>
          <div class="span6">
           <div class="row-fluid">
            <input type="button" value="+" id="plus" onclick="if (!isNaN(document.calc.kol_komp.value)){komps.value = parseInt(komps.value) + 1;} else {komps.value=1;}">
           </div>
           <div class="row-fluid">
            <input type="button" value="-" id="minus" onclick="if (!isNaN(document.calc.kol_komp.value) && (document.calc.kol_komp.value>1)){komps.value = parseInt(komps.value) - 1;} else {komps.value=1;}">
           </div>
          </div> 
        </div>         
       </div>
      
      <div class="row-fluid">
        
      </div><div class="center m_t">
        <div class="span3"></div>
        <div class="span9">
         <p><span class="result" id="power"></span></p>
         <p><span class="result" id="power_delta"></span></p>
        </div> 
         <p><input type="button" onclick="calculate()" value="РАСЧИТАТЬ" class="btn form-submit short3"></p>
       </div>
      </form>
     </div>
 </div>
 </div>
 <div class="span2"></div>
</div>

  
<div class="container white_block">
   <?php if(arg(0)=="autorization" || arg(0)=="user"){print render($page['content']);}?> 
    
   <div class="row-fluid conditioners">
     <div class="span5">
        <img class="m_r" src="sites/all/themes/zen/STARTERKIT/images/zerten.jpg">
     </div>
     <div class="span4">
       <div class="cond_text">
        <p><div class="blue_text"><strong>Zerten CE-7</strong></div></p>
        <p>Обслуживаемая площадь 20.00 кв.м.</p>
        <p><div class="blue_text"><strong>Цена:</strong> 16 000.00 руб.</div></p>
       </div>
     </div>
     <div class="span3">
          <a href="#myModal_zerten" data-toggle="modal"  class="btn form-submit short2">ЗАКАЗАТЬ</a>
     </div>


   </div> 
    <div class="row-fluid m_t">
     <div class="span5">
        <img class="m_r" src="sites/all/themes/zen/STARTERKIT/images/akvilon.jpg">
     </div>
     <div class="span4">
       <div class="cond_text">
        <p><div class="blue_text"><strong>akvilon серия Comfort ASE-7</strong></div></p>
        <p>Обслуживаемая площадь 20.00 кв.м.</p>
        <p><div class="blue_text"><strong>Цена:</strong> 10 657.00 руб.</div></p>
       </div>
     </div>
     <div class="span3">
         <a href="#myModal_akvilon" data-toggle="modal"  class="btn form-submit short2">ЗАКАЗАТЬ</a>
     </div>


   </div> 

</div>

<!-- -->
<a name="reg"></a>
<div class="row-fluid room_background2">
 <div class="alpha"></div>
  <div class="container">
     <div class="row-fluid block_text">
         <div class="span4">
             <div class="big_blue_text">
                <p>Оставьте заявку</p>
                <p>и получите</p>
             </div>
             <p>консультацию наших специалистов</p>   
             <p>по всем видам</p>   
             <p>кондиционерного оборудования!</p>   

         </div> 
         <div class="span1">
         </div>
         <div class="span2">
           <div class="strelka"></div>
         </div>
           <div class="span4 with_webform"> <div class="webform"><?php print render($page['webform2']); ?></div></div>
     </div>
  </div>

 </div>
<!-- -->



 <!--- -->

<!-- -->
   
<!-- -->
 <div class="row-fluid white_block">
     <div class="container">
        <div class="big_black_text">Как мы работаем?</div>
        <div class="row-fluid">
          <div class="span1"></div>
          <div class="span10">
           <div class="work_image">
           </div>
          </div> 
        </div>
        <div class="row-fluid margin_top_30 bold">
          <div class="span1">
          </div>
          <div class="span2">
               Вы оставляете заявку
          </div>
          <div class="span1">
          </div>
          <div class="span2">
               Наш менеджер консультирует в выборе кондиционера
          </div>
            <div class="span1">
          </div>
          <div class="span2">
               Мы доставляем и устанавливаем
          </div>
          <div class="span1">
          </div>
          <div class="span2">
               Вы пользуютесь!
          </div>


        </div>
     </div>
  </div>
<!-- -->  
  <div class="row-fluid white_block">
     <div class="container">
        <div class="big_black_text green">Отзывы</div>
        <!-- -->
        <div class="row-fluid m_t">
          <div class="span2">
            <img src="sites/all/themes/zen/STARTERKIT/images/reviews-3.gif">
          </div>
          <div class="span1">
            <div class="strelka2"></div>
          </div>
          <div class="span9">
            <div class="m_l">
             <div class="bold cours name">Валерий</div>
             <div class="review_text">Заказал кондиционер утром. После обеда позвонили и обговорили условия монтажа кондиционера. Привезли. Через 4 часа кондиционер был установлен, гарантия выписана, пульт и инструкция вручены. Дует, холодит, жену радует. Что ещё надо? Ребятам спасибо!</div>
            </div>
          </div> 
        </div>  
        <!-- -->
        <!-- -->
        <div class="row-fluid m_t">
          <div class="span2">
            <img src="sites/all/themes/zen/STARTERKIT/images/reviews-1.gif">
          </div>
          <div class="span1">
            <div class="strelka2"></div>
          </div>
          <div class="span9">
            <div class="m_l">
             <div class="bold cours name">Михаил</div>
             <div class="review_text">Посоветовал фирму знакомый, сказал, что сделают как надо. Действительно, через 1,5 часа после приезда монтажников кондиционер уже заработал. Ребята старались выполнить работу чисто и аккуратно, забрали весь мусор и коробки. Осталось хорошее впечатление. Советую. Ребятам - успехов и процветания.</div>
            </div>
          </div> 
        </div>  
        <!-- -->
        <!-- -->
        <div class="row-fluid m_t">
          <div class="span2">
            <img src="sites/all/themes/zen/STARTERKIT/images/reviews-2.gif">
          </div>
          <div class="span1">
            <div class="strelka2"></div>
          </div>
          <div class="span9">
            <div class="m_l">
             <div class="bold cours name">Анастасия</div>
             <div class="review_text">Компанию нашла по рекламе в интернете, хоть фирма и маленькая, я не пожалела, что остановила свой выбор на этой компании. Помогли выбрать кондиционер, подходящий по цене и качеству. Все показали и объяснили. Ребята работают профессионально, установили все быстро, чисто и красиво. Посоветую эту компанию у себя на работе и друзьям!</div>
            </div>
          </div> 
        </div>  
        <!-- -->
     </div>
  </div>      
  <div class="row-fluid">
   <div class="container">
    <div class="span10">
      <div class="brends"></div>
    </div>
   </div> 
  </div>


<!-- -->
 

<div class="row-fluid white_block m_t m_b_none">
     <div class="container center">
       <div class="big_black_text">Контакты</div>
     </div>
</div>   
<div class="row-fluid">
  <script type="text/javascript" charset="utf-8" src="//api-maps.yandex.ru/services/constructor/1.0/js/?sid=BQ6Zi1y-oeEU2yiDgZ7Z4ueD8DHMj7N9&width=auto&height=450"></script>
</div>  

<div class="row-fluid white_block m_t">
     <div class="container center">
       <div class="span2"></div>
       <div class="span5 r_a">
        <div class="questions">У вас остались вопросы?</div>
       </div>
       <div class="span5"> 
        <div class="little_black_link"><a href="#myModal3" data-toggle="modal">Задайте их менеджеру</a></div>
       </div> 
     </div>   
</div>

<!-- -->

<!-- end -->
<div class="row-fluid grey_background">
  <div class="container">
     <div class="row-fluid">
       <div class="span6">
         
          <div class="row-fluid white_number">8 (8352) 22-07-66</div>
          <div class="row-fluid white_number">8 (8352) 21-07-66</div>
          <div class="row-fluid little_white_text"><a href="#myModal" data-toggle="modal">заказать звонок</a></div>
       </div>
      
     </div>

  </div>
</div>
<!-- -->

<div class="row-fluid black_banner">
   <div class="container">
      <div class="row-fluid margin_top10">
         <div class="span6 very_little_white_text">Copyright &copy 2014 Чебклимат</div>
         <div class="span2"></div>
         <div class="span4 very_little_white_text">Разработано <a href="http:\\sellingsites.pro"><img src="sites/all/themes/zen/STARTERKIT/images/sellingsites.png"></a></div>
         
      </div>
   </div>
</div>

<!-- -->


<!-- modal window-->
  <div class="modal hide fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Введите свои данные</h3>
      </div>
      <div class="modal-body">
        <?php print render($page['webform_call']); ?> 
      </div>
      <div class="modal-footer">
       <!-- <button type="submit" class="btn btn-primary on_modal_btn" id="phone_order_sbm_btn">Отправить контакты</button>-->
         <button class="btn" data-dismiss="modal" aria-hidden="true">Закрыть</button> 
      </div>
    </div>

   <!-- modal window-->
  <div class="modal hide fade width" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Задайте вопрос менеджеру</h3>
      </div>
      <div class="modal-body">
        <?php print render($page['webform_questions']); ?> 
      </div>
      <div class="modal-footer">
       <!-- <button type="submit" class="btn btn-primary on_modal_btn" id="phone_order_sbm_btn">Отправить контакты</button>-->
         <button class="btn" data-dismiss="modal" aria-hidden="true">Закрыть</button> 
      </div>
    </div> 


<!-- -->
  <!-- modal window zerten-->
  <div class="modal hide fade" id="myModal_zerten" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Введите контактные данные</h3>
      </div>
      <div class="modal-body">
        <p>Заказ кондиционера <strong>Zerten CE-7</strong></p>
        <?php print render($page['webform_cond_zerten']); ?> 
      </div>
      <div class="modal-footer">
       <!-- <button type="submit" class="btn btn-primary on_modal_btn" id="phone_order_sbm_btn">Отправить контакты</button>-->
         <button class="btn" data-dismiss="modal" aria-hidden="true">Закрыть</button> 
      </div>
    </div> 


<!-- -->
<!-- -->
  <!-- modal window akvilon-->
  <div class="modal hide fade" id="myModal_akvilon" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Введите контактные данные</h3>
      </div>
      <div class="modal-body">
        <p>Заказ кондиционера <strong>Akvilon Comfotr ASE-7</strong></p>
        <?php print render($page['webform_cond_akvilon']); ?> 
      </div>
      <div class="modal-footer">
       <!-- <button type="submit" class="btn btn-primary on_modal_btn" id="phone_order_sbm_btn">Отправить контакты</button>-->
         <button class="btn" data-dismiss="modal" aria-hidden="true">Закрыть</button> 
      </div>
    </div> 


<!-- -->



<?php 
if ($messages) {   
   
  echo"
      <div class='modal hide fade' id='myModal2' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
      <div class='modal-header'>
        <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button>
        <h3 id='myModalLabel'>Состояние отправления заявки</h3>
      </div>
      <div class='modal-body'>";
     print $messages;
       echo "   
      <div class='modal-footer'>
        <button class='btn' data-dismiss='modal' aria-hidden='true'>Закрыть</button> 
      </div>
    </div>

    <script> $('#myModal2').modal(); </script>";
}?>




  <!-- -->


 <div id="content" class="column hidden" role="main">
      
      <a id="main-content"></a>
      <?php print render($title_prefix); ?>
      
      <?php print render($title_suffix); ?>
      <?php print $messages; ?>
      <?php print render($tabs); ?>
      <?php print render($page['help']); ?>
      <?php if ($action_links): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <?php print $feed_icons; ?>
      <?php print render($page['content']); ?>
    </div>


  </div>

</div>

<!-- -->
