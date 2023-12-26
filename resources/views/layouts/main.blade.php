<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VehicleOrder | {{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/f1a06f399e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  </head>
  <body>
    @include('partials/navbar')
    <div class="container my-text-dark">
        @yield('container')
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script>
      var ctx = document.getElementById('myChart').getContext('2d');
      fetch('/chart-data')
          .then(response => response.json())
          .then(data => {
              var myChart = new Chart(ctx, {
                  type: 'bar',
                  data: {
                      labels: data.map(item => item.vehicle_name),
                      datasets: [{
                          label: 'Grafik jumlah penggunaan BBM kendaraan per liter',
                          data: data.map(item => item.total_bbm),
                          backgroundColor: '#F3ECC8',
                          borderColor: '#FDBE34',
                          borderWidth: 1
                      }]
                  },
                  options: {
                      scales: {
                          y: {
                              beginAtZero: true
                          }
                      }
                  }
              });
          });
  </script>
    
  </body>
</html>