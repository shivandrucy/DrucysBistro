<?php
   $con = mysqli_connect("localhost","Shivan","Druscilla@157","foodweb");
   
?>


<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['chooseusername', 'amount_paid'],

         <?php
         $sql = "SELECT chooseusername, amount_paid FROM orders";

         $fire= mysqli_query($con,$sql);


         while($result = mysqli_fetch_assoc($fire)){
          echo"['".$result['chooseusername']."',".$result['amount_paid']."],";

         }

         ?>
        ]);

        var options = {
          title: 'Clients orders'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
  </body>
</html>

