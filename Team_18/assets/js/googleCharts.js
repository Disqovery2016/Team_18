
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(temp1);

      function temp1() {
               var options1 = {
          title: 'Your Body Temperature',
	colors:['#ff0000'],
          legend: { position: 'bottom' }, min: 45,
max:90

        };

 var people = [];

   $.getJSON('assets/lib/temperatureData.json', function(data) {
       $.each(data, function(i, f) {
          people[i] = f.val0;
     });
j=0;
var time =[];
var temp = [];
plotData();

function plotData(){
var avg=0;
if(j>=50){
	j=1;
}else{
var sum=0;
for(i=0;i<12;i++){
	time[i]=i;
	temp[i]=people[j];
	j++;
	sum=sum+temp[i];
}
avg = sum/12;
document.getElementById('temperature1').innerHTML = avg.toFixed(2);

}

var Combined = new Array();
for (var i = 0; i < 12; i++){
  Combined[i] = [ time[i], temp[i] ];
}
console.log(Combined);
//second parameter is false because first row is headers, not data.
var table = google.visualization.arrayToDataTable(Combined, true);    

var Chart = new google.visualization.LineChart(document.getElementById('temp_chart'));

        Chart.draw(table, options1);
}setInterval(plotData, 5000);
});

      }

