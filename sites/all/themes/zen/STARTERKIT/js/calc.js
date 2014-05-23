function calculate(){
  var s = document.calc.ploshad.value,
  h = document.calc.vis_potolka.value,
  q = document.calc.osvesh.value,
  q2 = document.calc.kol_ludei.value,
  q3 = document.calc.kol_komp.value;

  var q1=(s*h*q)/1000;
  var q_obs=q1+(q2*0.1)+(q3*0.3);
  var q_r1=q_obs*0.95;
  var q_r2=q_obs*1.15;

 /* document.calc.write("Q="+q_obs);
  document.calc.write("Q_r"+q_r1+" "+q_r2);*/

if (isNaN(q_obs) || (q_obs==0)) {var power = document.getElementById("power");
                  power.innerHTML = "<div class='red-error-label'>Введены некорректные данные</div>"; 
              var power_delta = document.getElementById("power_delta");
               power_delta.innerHTML = "";
              }
	else {
var power = document.getElementById("power");
  power.innerHTML = "<div class='row-fluid left'><div class='span8'> Мощность охлаждения Q:</div><div class='span4 bold'>"+q_obs.toFixed(2)+" кВт </div></div>"; 
var power_delta = document.getElementById("power_delta");
  power_delta.innerHTML = "<div class='row-fluid left'><div class='span8'> Рекомендуемый диапазон Q<b class='undertext'>range</b>:</div><div class='span4 bold'>"+ q_r1.toFixed(1)+" - " + q_r2.toFixed(1) + "кВт </div></div>"; 
document.getElementById('edit-submitted-power').value = q_obs.toFixed(2)+" кВт";
$('#myModal1').modal();

 }

}

/*	
Q1 = S * h * q / 1000, где
S — площадь помещения (м²);
h — высота помещения (м);
q — коэффициент, равный 30 - 40 Вт/м³:*/