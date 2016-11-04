
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(temp1);

      function temp1() {
               var options1 = {
          title: 'Your Body Temperature',
          legend: { position: 'bottom' }, min: 95
        };

var temp = google.visualization.arrayToDataTable([
          ['Time', 'Temp'],
          ['10:00AM',  98.7],
          ['11:00AM',  98.6],
          ['12:00AM',  97],
          ['1:00PM',  98],
		['2:00PM',  98.8],
          ['3:00PM',  99],
          ['4:00PM',  97.9],
          ['5:00PM',  100],
		['6:00PM',  100.1],
          ['7:00PM',  100.2],
          ['8:00PM',  100.3],
          ['9:00PM',  100.6],
		['10:00PM',  100],
          ['11:00PM',  101],
          ['12:00PM',  101.4],
          ['1:00AM',  102],
		['2:00AM',  102.5],
          ['3:00AM',  102.5],
          ['4:00AM',  102.3],
          ['5:00AM',  103],
		['6:00AM',  102.8],
          ['7:00AM',  102],
          ['8:00AM',  101],
          ['9:00AM',  99]
        ]);
var Chart = new google.visualization.LineChart(document.getElementById('temp_chart'));

        Chart.draw(temp, options1);
      }

 google.charts.setOnLoadCallback(heartRate);

      function heartRate() {
               var options = {
          title: 'Your Heart Rate',
          legend: { position: 'bottom' }, min: 50
        };

var rate = google.visualization.arrayToDataTable([
          ['Year', 'Sales', 'Expenses'],
          ['2004',  1000,      400],
          ['2005',  1170,      460],
          ['2006',  660,       1120],
          ['2007',  1030,      540]
        ]);

var Chart = new google.visualization.ColumnChart(document.getElementById('curve_chart'));

        Chart.draw(rate, options);



      }

google.charts.setOnLoadCallback(bloodPressure);

      function bloodPressure() {
               var options = {
          title: 'Your Heart Rate',
          legend: { position: 'bottom' }, min: 50
        };

var rate = google.visualization.arrayToDataTable([
          ['Year', 'Sales', 'Expenses'],
          ['2004',  1000,      400],
          ['2005',  1170,      460],
          ['2006',  660,       1120],
          ['2007',  1030,      540]
        ]);

var Chart = new google.visualization.ColumnChart(document.getElementById('pressure_chart'));

        Chart.draw(rate, options);
      }

google.charts.setOnLoadCallback(bloodGlucose);

      function bloodGlucose() {
               var options = {
          title: 'Your Blood Glucose Level',
          legend: { position: 'bottom' }, min: 50
        };

var rate = google.visualization.arrayToDataTable([
          ['Year', 'Sales', 'Expenses'],
          ['2004',  1000,      400],
          ['2005',  1170,      460],
          ['2006',  660,       1120],
          ['2007',  1030,      540]
        ]);

var Chart = new google.visualization.ColumnChart(document.getElementById('pressure_chart'));

        Chart.draw(rate, options);
      }

google.charts.setOnLoadCallback(weight);

      function weight() {
               var options = {
          title: 'Your Heart Rate',
          legend: { position: 'bottom' }, min: 50
        };

var rate = google.visualization.arrayToDataTable([
          ['Year', 'Sales', 'Expenses'],
          ['2004',  1000,      400],
          ['2005',  1170,      460],
          ['2006',  660,       1120],
          ['2007',  1030,      540]
        ]);

var Chart = new google.visualization.ColumnChart(document.getElementById('pressure_chart'));

        Chart.draw(rate, options);
      }


