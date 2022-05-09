<?php include 'cnx.php' ;?>

  <html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['id petition','Participants', 'Pour', 'Contre'],
          <?php 

          	$req = mysqli_query($link , "select id from petition") ; 
          	while ($data = mysqli_fetch_array($req)) {
          		$id_petition = $data['id'] ; 
          		$pour= nb_pour($id_petition) ; 
  				$contre = nb_contre($id_petition) ; 
  				$participants = nb_participants($id_petition) ; 

			?>

				['<?php echo $id_petition ;  ?> ' ,<?php echo $participants ;  ?>,<?php echo $pour ;  ?> , <?php echo $contre ;  ?> ],

			 <?php 
			   	}


          ?>
          
        ]);

        var options = {
          title: 'Statistiques Sur Les Petitions',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="curve_chart" style="width: 900px; height: 500px"></div>
  </body>
</html>