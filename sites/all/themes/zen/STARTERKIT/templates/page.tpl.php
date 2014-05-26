<?php
/**
 * @file
 * Returns the HTML for a single Drupal page.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728148
 */
?>
<a name="start"></a>

<div class="navbar navbar-fixed-top" id="blue_navbar">
  <div class="navbar-inner">
    <ul class="nav">
      <li class="first_li"><a href="#start">В начало</a></li>
      <li><a href="#rasch">Рассчет мощности охлаждения</a></li>
      <li><a href="#conditioners">Кондиционеры</a></li>
      <li><a href="#dop_usl">Дополнительные услуги</a></li>
      <li><a href="#how_work">Как мы работаем</a></li>
      <li><a href="#review">Отзывы</a></li>
      <li><a href="#contact">Контакты</a></li>
    </ul>
  </div>
</div>


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
                   <a name="rasch"></a>
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
<a name="conditioners"></a>  
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
        <img class="m_r" src="sites/all/themes/zen/STARTERKIT/images/airwell.jpg">
     </div>
     <div class="span4">
       <div class="cond_text">
        <p><div class="blue_text"><strong>Airwell AWAU-YGF009-H11</strong></div></p>
        <p>Обслуживаемая площадь до 26 кв.м.</p>
       <!-- <p><div class="blue_text"><strong>Цена:</strong> 16 000.00 руб.</div></p>-->
        <p><div id="podr_link1"><a href="javascript:void(0)" onclick="podr(1,1)">Подробнее</a></div></p>
       </div>
     </div>
     <div class="span3">
          <a href="#myModal_airwell" data-toggle="modal"  class="btn form-submit short2">ЗАКАЗАТЬ</a>
     </div>
   </div> 
   <div id="podr_text1">
     <div class="row-fluid">
       <p><strong>Кондиционер Airwell</strong></p>
       <p>Внутренний блок AWSI-HHF009-N11</p>
       <p>Наружный блок AWAU-YGF009-H11</p>
       <p>Охлаждение  Производительность кВт 2,5</p>
       <p>Потребляемая мощность кВт 0,82 </p>
       <p>EER А  3,21</p>
       <p>Эксплуатационные ограничения С 21/46</p>
       <p>Обогрев  Производительность кВт 2,8</p>
       <p>Потребляемая мощность кВт 0,78</p>
       <p>COP 3,61</p>
       <p>Эксплуатационные ограничения С -0,375</p>
       <p>Внутренний   Уровень звукогвого давления Дб  32/37 блок</p>
       <p>Уровень шума Дб  42/47</p>
       <p>Объем рециркулируемого воздуха м/ч 310/370</p>
       <p>Осушение л/ч  1</p>
       <p>Размеры (ШхВхГ) мм  730х255х174</p>
       <p>Масса кг 8</p>
       <p>Наружный блок  Уровень звукового давления Дб 50</p>
       <p>Уровень шума Дб  60</p>
       <p>Объем рециркулируемого воздуха м/ч 1500</p>
       <p>Тип компрессора  Роторный</p>
       <p>Размеры (ШхВхГ) мм  785х540х320</p>
       <p>Масса кг  31</p>
       <p>Питание  Подача питания на   Внутр. блок</p>
       <p>Сечение электрического кабеля  мм2  3х1,0</p>
       <p>Предохранитель А  10</p>
       <p>Электрическое соединение мм2  5х1,5</p>
       <p><a href="javascript:void(0)" onclick="podr(1,0)">Скрыть</a></p>
     </div>
   </div>                              





    <div class="row-fluid m_t">
     <div class="span5">
        <img class="m_r" src="sites/all/themes/zen/STARTERKIT/images/kentatsu.jpg">
     </div>
     <div class="span4">
       <div class="cond_text">
        <p><div class="blue_text"><strong>Kentatsu ksgc53hfan1</strong></div></p>
        <p>Обслуживаемая площадь 26-44 кв.м.</p>
       <!-- <p><div class="blue_text"><strong>Цена:</strong> 10 657.00 руб.</div></p>-->
       <p><div id="podr_link2"><a href="javascript:void(0)" onclick="podr(2,1)">Подробнее</a></div></p>
        
       </div>
     </div>
     <div class="span3">
         <a href="#myModal_akvilon" data-toggle="modal"  class="btn form-submit short2">ЗАКАЗАТЬ</a>
     </div>
   </div> 
    <div id="podr_text2">
     <div class="row-fluid">
       <p><strong>Кондиционер Kentatsu KSGC53HFAN1/KSRC53HFAN1 технические характеристики</strong></p>
       <p>Страна Япония</p>
       <p>Производитель Китай</p>
       <p>Инверторный нет</p>
       <p>Гарантия  3 года</p>
       <p>ВНУТРЕННИЙ БЛОК KSGC53HFAN1</p>
       <p>Холод, кВт  4,98</p>
       <p>Тепло, кВт  5,28</p>
       <p>Потребление при охлаждении, кВт 1,92</p>
       <p>Потребление при обогреве, кВт 2,03</p>
       <p>Энергоэффективность EER (Охлаждение)  2,6</p>
       <p>Энергоэффективность COP (Нагрев)  2,6</p>
       <p>Годовое энергопотребление, кВт/ч  1010</p>
       <p>Расход воздуха (Охлаждение), m³/ч 750/670/550</p>
       <p>Уровень шума вн.бл. (Охлаждение), дБа 40</p>
       <p>Уровень шума вн.бл. (Нагрев), дБа 40</p>
       <p>Max длина трассы/перепад высот, м 15 / 8</p>
       <p>d труб фреонопровода, ´´  6,35 / 12,7</p>
       <p>Габариты вн.бл. (ВхШхГ), мм 275x940x198</p>
       <p>Вес внутреннего блока, кг 10</p>
       <p>Площадь, m² 26~44</p>
       <p>НАРУЖНЫЙ БЛОК KSRC53HFAN1</p>
       <p>Габариты нар. бл. (ВхШхГ), мм 540x780x266</p>
       <p>Уровень шума нар.бл. (Нагрев), дБа  40</p>
       <p>Уровень шума нар.бл. (Охлаждение), дБа  40</p>
       <p>Диапазон температур (Нагрев), °C  -7~24 </p>
       <p>Диапазон температур (Охлаждение), °C  18~43</p>
       <p>Хладагент R410a</p>
       <p>Электропитание, V/W 220</p>
       <p><a href="javascript:void(0)" onclick="podr(2,0)">Скрыть</a></p>
     </div>
   </div>      

   <div class="row-fluid m_t">
     <div class="span5">
        <img class="m_r" src="sites/all/themes/zen/STARTERKIT/images/kraft2.jpg">
     </div>
     <div class="span4">
       <div class="cond_text">
        <p><div class="blue_text"><strong>Kraft kf-csp-12000-btu</strong></div></p>
        <p>Обслуживаемая площадь 35 кв.м.</p>
       <!-- <p><div class="blue_text"><strong>Цена:</strong> 10 657.00 руб.</div></p>-->
       <p><div id="podr_link3"><a href="javascript:void(0)" onclick="podr(3,1)">Подробнее</a></div></p>
       
       </div>
     </div>
     <div class="span3">
         <a href="#myModal_kraft1" data-toggle="modal"  class="btn form-submit short2">ЗАКАЗАТЬ</a>
     </div>
   </div>
    <div id="podr_text3">
     <div class="row-fluid">
       <p><strong>Kraft KF-CSP 12000 BTU - настенная сплит-система серии Art, обслуживаемая площадь - 35 кв. м, хладагент - R 410A, основные режимы - охлаждение / обогрев, bio фильтр, ночной режим, режим «Турбо», технология двух направлений воздушного потока, пульт дистанционного управления, класс энергосбережения - A
</strong></p><p>Тип: настенная сплит-система
</p><p>Основные режимы: охлаждение / обогрев
</p><p>Класс энергосбережения: A
</p><p>Самодиагностика неисправностей
</p><p>Ночной режим
</p><p>Режим «Турбо»
</p><p>Обслуживаемая площадь: 35 кв. м
</p><p>Тип хладагента: R 410A
</p><p>Пульт дистанционного управления
</p><p>Производительность в режиме охлаждения: 3400 Вт
</p><p>Производительность в режиме обогрева: 3500 Вт
</p><p>Уровень шума внутреннего блока: 40 дБ
</p><p>Циркуляция воздуха: 500 м³/ч
</p><p>Потребляемая мощность/ток на охлаждение (Вт): 1060/4,8
</p><p>Потребляемая мощность/ток на оборгев (Вт): 1025/4,9
</p><p>Рабочее напряжение: 220 В
</p><p>Рабочая частота: 50 Гц
</p><p>Гидрофильные алюминиевые пластины
</p><p>Антикоррозионный корпус
</p><p>Технология двух направлений воздушного потока
</p><p>Гидрофильные алюминиевые пластины
</p><p>Bio фильтр
</p><p>Габаритные размеры внутреннего блока: 745х250х195 мм
</p><p>Габаритные размеры наружного блока: 715х235х540 мм
</p><p>Вес внутренний блок / внешний блок: 9 / 28 кг
</p><p>Цвет: белый</p>
       <p><a href="javascript:void(0)" onclick="podr(3,0)">Скрыть</a></p>
     </div>
   </div>       

    <div class="row-fluid m_t">
     <div class="span5">
        <img class="m_r" src="sites/all/themes/zen/STARTERKIT/images/kraft.jpg">
     </div>
     <div class="span4">
       <div class="cond_text">
        <p><div class="blue_text"><strong>Kraft KF-GTS 9000 BTU</strong></div></p>
        <p>Обслуживаемая площадь 27 кв.м.</p>
       <!-- <p><div class="blue_text"><strong>Цена:</strong> 10 657.00 руб.</div></p>-->
       <p><div id="podr_link4"><a href="javascript:void(0)" onclick="podr(4,1)">Подробнее</a></div></p>
        
       </div>
     </div>
     <div class="span3">
         <a href="#myModal_kraft2" data-toggle="modal"  class="btn form-submit short2">ЗАКАЗАТЬ</a>
     </div>
   </div> 
   <div id="podr_text4">
     <div class="row-fluid">
      <p><strong>Kraft KF-GTS 9000 BTU - настенная сплит-система серии Econom, обслуживаемая площадь - 27 кв. м, хладагент - R 410A, основные режимы - охлаждение / обогрев, bio фильтр, ночной режим, технология двух направлений воздушного потока, пульт дистанционного управления, класс энергосбережения - B
</strong></p><p>Тип: настенная сплит-система
</p><p>Основные режимы: охлаждение / обогрев
</p><p>Класс энергосбережения: B
</p><p>Самодиагностика неисправностей
</p><p>Ночной режим
</p><p>Обслуживаемая площадь: 27 кв. м
</p><p>Тип хладагента: R 410A
</p><p>Пульт дистанционного управления
</p><p>Производительность в режиме охлаждения: 2650 Вт
</p><p>Производительность в режиме обогрева: 2700 Вт
</p><p>Уровень шума внутреннего блока: 34 дБ
</p><p>Циркуляция воздуха: 400 м³/ч
</p><p>Потребляемая мощность/ток на охлаждение (Вт): 820/4
</p><p>Потребляемая мощность/ток на оборгев (Вт): 840/3,8
</p><p>Рабочее напряжение: 220 В
</p><p>Рабочая частота: 50 Гц
</p><p>Гидрофильные алюминиевые пластины
</p><p>Антикоррозионный корпус
</p><p>Технология двух направлений воздушного потока
</p><p>Гидрофильные алюминиевые пластины
</p><p>Bio фильтр
</p><p>Габаритные размеры внутреннего блока: 800x290x196 мм
</p><p>Габаритные размеры наружного блока: 600x480x250 мм
</p><p>Вес внутренний блок / внешний блок: 10 / 26 кг
</p><p>Цвет: белый</p>
       <p><a href="javascript:void(0)" onclick="podr(4,0)">Скрыть</a></p>
     </div>
   </div>  

    <div class="row-fluid m_t">
     <div class="span5">
        <img class="m_r" src="sites/all/themes/zen/STARTERKIT/images/lessar.jpg">
     </div>
     <div class="span4">
       <div class="cond_text">
        <p><div class="blue_text"><strong>LESSAR LU-H09KFA2</strong></div></p>
        <p>Обслуживаемая площадь 25 кв.м.</p>
       <!-- <p><div class="blue_text"><strong>Цена:</strong> 10 657.00 руб.</div></p>-->
       <p><div id="podr_link5"><a href="javascript:void(0)" onclick="podr(5,1)">Подробнее</a></div></p>
       
       </div>
     </div>
     <div class="span3">
         <a href="#myModal_lessar" data-toggle="modal"  class="btn form-submit short2">ЗАКАЗАТЬ</a>
     </div>
   </div> 
<a name="dop_usl"></a>   
   <div id="podr_text5">
     <div class="row-fluid">
     <p><strong>НАСТЕННЫЙ КОНДИЦИОНЕР LESSAR LS/LU-H09KFA2</strong> 
</p><p>Мощность охлаждения: 2.63 кВт
</p><p>Уровень шума внутреннего блока: 32/38 дБ
</p><p>Уровень шума внешнего блока: 54 дБ
</p><p>Потребляемая мощность охлаждения: 0.82 кВт
</p><p>Потребляемая мощность обогрева: 0.77 кВт
</p><p>Габариты внутреннего блока (ШxВxГ): 710x250x190 мм
</p><p>Габариты внешнего блока (ШxВxГ): 700x535x235 мм
</p><p>Максимальная длина трассы: 20 м
</p><p>Размер труб - жидкость: 1.4 дюйм
</p><p>Размер труб - газ: 3.8 дюйм
</p><p>Вес внутреннего блока: 7.5 кг
</p><p>Вес внешнего блока: 24.5 кг
</p><p>Площадь помещения: 25 м2
</p><p>Мощность обогрева: 2.78 кВт
</p><p>Хладагент: R 410 
</p><p>Гарантия: 4 года 
</p><p>Статус товара: На заказ</p> 
       <p><a href="javascript:void(0)" onclick="podr(5,0)">Скрыть</a></p>
     </div>
   </div>  


</div>
<!-- -->

<div class="row-fluid white_block" id="dop_usl">
     <div class="container">
        <div class="big_black_text">Дополнительные услуги</div>
        <div class="row-fluid">
          <div class="span1" id="img1"></div>
          <div class="span3"><div class="dop_text">Монтаж кондиционеров, сплит систем</div></div>
          <div class="span1" id="img2"></div>
          <div class="span3"><div class="dop_text">Монтаж, обслуживание и ремонт любого холодильного оборудования.</div></div>
          <div class="span1" id="img3"></div>
          <div class="span3"><div class="dop_text">Заправка, ремонт автокондиционеров</div></div>
        </div>
     </div>
</div>        




<!-- -->
<a name="reg"></a>
<div class="row-fluid room_background2">
 <div class="alpha"></div>
  <div class="container">
     <div class="row-fluid block_text">
         <div class="span5 blue_block_text">
             <div class="big_blue_text">
                <p>Оставьте заявку</p>
                <p>и получите</p>
             </div>
             <div class="m_t">
             <p>консультацию наших специалистов</p>   
             <p>по всем видам</p>   
             <p>кондиционерного оборудования!</p>   
             </div>
         </div> 
        
         <div class="span2">
           <div class="strelka"></div>
         </div>
           <div class="span4 with_webform"> <div class="webform"><?php print render($page['webform2']); ?></div></div>
<a name="how_work"></a>           
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
<a name="review"></a>        
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
 
<a name="contact"></a>
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
          <div class="row-fluid white_number m_b">8 (8352) 21-07-66</div>
       </div>
       <div class="span1"></div>
       <div class="span4 m_t2"><a href="#myModal" data-toggle="modal" class="btn form-submit short w240">ЗАКАЗАТЬ ОБРАТНЫЙ ЗВОНОК</a></div>

     </div>

  </div>
</div>
<!-- -->

<div class="row-fluid black_banner">
   <div class="container">
      <div class="row-fluid margin_top10">
         <div class="span6 very_little_white_text">Copyright &copy 2014 Чебклимат</div>
         <div class="span2"></div>
         <div class="span4 very_little_white_text">Разработано <a href="http:\\sellingsites.pro"><img src="sites/all/themes/zen/STARTERKIT/images/sellingsites.png" class="sslogo"></a></div>
         
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
  <div class="modal hide fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Введите свои данные</h3>
      </div>
      <div class="modal-body">
        <div class="text_in_modal">
          <p>Отправьте свои контакты, и наши специалисты помогут Вам подобрать наиболее подходящий кондиционер.</p>
        </div>
        <?php print render($page['webform']); ?> 
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
  <!-- modal window myModal_airwell-->
  <div class="modal hide fade" id="myModal_airwell" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Введите контактные данные</h3>
      </div>
      <div class="modal-body">
        <p>Заказ кондиционера <strong>Airwell AWAU-YGF009-H11</strong></p>
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
        <p>Заказ кондиционера <strong>Kentatsu ksgc53hfan1</strong></p>
        <?php print render($page['webform_cond_akvilon']); ?> 
      </div>
      <div class="modal-footer">
       <!-- <button type="submit" class="btn btn-primary on_modal_btn" id="phone_order_sbm_btn">Отправить контакты</button>-->
         <button class="btn" data-dismiss="modal" aria-hidden="true">Закрыть</button> 
      </div>
    </div> 


<!-- -->

 <!-- modal window kraft1-->
  <div class="modal hide fade" id="myModal_kraft1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Введите контактные данные</h3>
      </div>
      <div class="modal-body">
        <p>Заказ кондиционера <strong>Kraft kf-csp-12000-btu</strong></p>
        <?php print render($page['webform_cond_kraft1']); ?> 
      </div>
      <div class="modal-footer">
       <!-- <button type="submit" class="btn btn-primary on_modal_btn" id="phone_order_sbm_btn">Отправить контакты</button>-->
         <button class="btn" data-dismiss="modal" aria-hidden="true">Закрыть</button> 
      </div>
    </div> 


<!-- -->
 <!-- modal window kraft2-->
  <div class="modal hide fade" id="myModal_kraft2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Введите контактные данные</h3>
      </div>
      <div class="modal-body">
        <p>Заказ кондиционера <strong>Kraft KF-GTS 9000 BTU</strong></p>
        <?php print render($page['webform_cond_kraft2']); ?> 
      </div>
      <div class="modal-footer">
       <!-- <button type="submit" class="btn btn-primary on_modal_btn" id="phone_order_sbm_btn">Отправить контакты</button>-->
         <button class="btn" data-dismiss="modal" aria-hidden="true">Закрыть</button> 
      </div>
    </div> 


<!-- -->
 <!-- modal window lessar-->
  <div class="modal hide fade" id="myModal_lessar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Введите контактные данные</h3>
      </div>
      <div class="modal-body">
        <p>Заказ кондиционера <strong>LESSAR LU-H09KFA2</strong></p>
        <?php print render($page['webform_cond_lessar']); ?> 
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
