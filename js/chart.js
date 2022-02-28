// PIE ENROLLEMENT
var x = ['Advising', 'Assesment', 'Payment', 'Enlistment'];
var y = [55, 49, 44, 24, 15];
var barColors = ['#b91d47', '#00aba9', '#2b5797', '#e8c3b9'];

new Chart('barStudents', {
   type: 'bar',
   data: {
      labels: x,
      datasets: [
         {
            backgroundColor: barColors,
            data: y,
         },
      ],
   },
   options: {
      legend: { display: false },
   },
});

// PIE STATUS

var xValues = ['Nursing', 'Education'];
var yValues = [50, 40];
var barColors = ['#ff8400', '#5a761d'];
new Chart('pieStatus', {
   type: 'pie',
   data: {
      labels: xValues,
      datasets: [
         {
            backgroundColor: barColors,
            data: yValues,
         },
      ],
   },
   options: {
      legend: { display: true },
   },
});
