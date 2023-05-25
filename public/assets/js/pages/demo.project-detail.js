!function(l){"use strict";function t(){this.$body=l("body"),this.charts=[]}t.prototype.respChart=function(t,a,r,e){var o,s=Chart.controllers.line.prototype.draw,n=(Chart.controllers.line.prototype.draw=function(){s.apply(this,arguments);var t=this.chart.ctx,a=t.stroke;t.stroke=function(){t.save(),t.shadowColor="rgba(0,0,0,0.01)",t.shadowBlur=20,t.shadowOffsetX=0,t.shadowOffsetY=5,a.apply(this,arguments),t.restore()}},Chart.defaults.font.color="#8391a2",Chart.defaults.scale.grid.color="#8391a2",t.get(0).getContext("2d")),i=l(t).parent();switch(t.attr("width",l(i).width()),a){case"Line":o=new Chart(n,{type:"line",data:r,options:e});break;case"Doughnut":o=new Chart(n,{type:"doughnut",data:r,options:e});break;case"Pie":o=new Chart(n,{type:"pie",data:r,options:e});break;case"Bar":o=new Chart(n,{type:"bar",data:r,options:e});break;case"Radar":o=new Chart(n,{type:"radar",data:r,options:e});break;case"PolarArea":o=new Chart(n,{data:r,type:"polarArea",options:e})}return o},t.prototype.initCharts=function(){var t=[];return 0<l("#line-chart-example").length&&t.push(this.respChart(l("#line-chart-example"),"Line",{labels:["Mon","Tue","Wed","Thu","Fri","Sat","Sun"],datasets:[{label:"Completed Tasks",backgroundColor:"rgba(10, 207, 151, 0.3)",borderColor:"#0acf97",fill:!0,data:[32,42,42,62,52,75,62]},{label:"Plan Tasks",fill:!0,backgroundColor:"transparent",borderColor:"#727cf5",borderDash:[5,5],data:[42,58,66,93,82,105,92]}]},{maintainAspectRatio:!1,plugins:{filler:{propagate:!1},legend:{display:!1},tooltips:{intersect:!1},hover:{intersect:!0}},tension:.3,scales:{x:{grid:{color:"rgba(0,0,0,0.05)"}},y:{ticks:{stepSize:20},display:!0,borderDash:[5,5],grid:{color:"rgba(0,0,0,0)",fontColor:"#fff"}}}})),t},t.prototype.init=function(){var a=this;Chart.defaults.font.family='-apple-assets,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",sans-serif',a.charts=this.initCharts(),l(window).on("resize",function(t){l.each(a.charts,function(t,a){try{a.destroy()}catch(t){}}),a.charts=a.initCharts()})},l.ChartJs=new t,l.ChartJs.Constructor=t}(window.jQuery),function(){"use strict";window.jQuery.ChartJs.init()}();
