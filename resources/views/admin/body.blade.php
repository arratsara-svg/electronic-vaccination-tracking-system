<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Vaccination Dashboard</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<style>
  body {
    background: #f0f4f8;
    font-family: 'Segoe UI', sans-serif;
  }

  h2 {
    font-weight: 700;
    color: #333;
  }

  .stat-box {
    border-radius: 15px;
    padding: 25px 20px;
    margin-bottom: 20px;
    color: #fff;
    font-weight: 600;
    text-align: center;
    box-shadow: 0 8px 20px rgba(0,0,0,0.1);
    transition: transform 0.3s, box-shadow 0.3s;
  }

  .stat-box:hover {
    transform: translateY(-5px);
    box-shadow: 0 12px 25px rgba(0,0,0,0.2);
  }

  .stat-value {
    font-size: 36px;
    margin-top: 10px;
  }

  .stat1 { background: linear-gradient(135deg, #36A2EB, #1e3c72); }
  .stat2 { background: linear-gradient(135deg, #FF6384, #ff5e7e); }
  .stat3 { background: linear-gradient(135deg, #FFCE56, #f6b93b); color: #333; }
  .stat4 { background: linear-gradient(135deg, #4BC0C0, #0f4c5c); }

  canvas {
    max-width: 500px;
    margin: 30px auto;
    background: #fff;
    border-radius: 15px;
    padding: 20px;
    box-shadow: 0 8px 20px rgba(0,0,0,0.1);
  }

  .section-title {
    font-weight: 700;
    font-size: 24px;
    margin: 40px 0 15px;
    color: #333;
  }

  /* Editable Panel */
  #stats-form input {
    border-radius: 10px;
    box-shadow: inset 0 2px 5px rgba(0,0,0,0.1);
  }

  #stats-form button {
    border-radius: 10px;
    padding: 10px 25px;
  }
</style>
</head>
<body>
<div class="container py-5">

<h2 class="mb-4 text-center">📊 Vaccination Center Dashboard</h2>

<!-- Stats Row -->
<div class="row">
  <div class="col-md-3">
    <div class="stat-box stat1">
      <small>Available Vaccines</small>
      <div class="stat-value" id="stat1">1200</div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="stat-box stat2">
      <small>Vaccinated Children</small>
      <div class="stat-value" id="stat2">540</div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="stat-box stat3">
      <small>Today's Registrations</small>
      <div class="stat-value" id="stat3">92</div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="stat-box stat4">
      <small>Daily Visits</small>
      <div class="stat-value" id="stat4">310</div>
    </div>
  </div>
</div>

<!-- Pie Chart -->
<canvas id="pieChart"></canvas>

<!-- Editable Panel -->
<div class="section-title">🛠 Update Statistics</div>
<div class="stat-box text-dark" style="background: #fff; color:#333;">
  <form id="stats-form">
    <div class="form-row">
      <div class="form-group col-md-3">
        <label>Available Vaccines</label>
        <input type="number" class="form-control" id="input1">
      </div>
      <div class="form-group col-md-3">
        <label>Vaccinated Children</label>
        <input type="number" class="form-control" id="input2">
      </div>
      <div class="form-group col-md-3">
        <label>Today's Registrations</label>
        <input type="number" class="form-control" id="input3">
      </div>
      <div class="form-group col-md-3">
        <label>Daily Visits</label>
        <input type="number" class="form-control" id="input4">
      </div>
    </div>
    <button type="button" class="btn btn-primary mt-2" onclick="updateStats()">Update</button>
  </form>
</div>

</div>

<script>
const defaultStats = { stat1: 1200, stat2: 540, stat3: 92, stat4: 310 };

// Load stats from localStorage or defaults
function loadStats() {
  for (let i = 1; i <= 4; i++) {
    const saved = localStorage.getItem('stat' + i);
    const value = saved !== null ? saved : defaultStats['stat' + i];
    document.getElementById('stat' + i).innerText = value;
    document.getElementById('input' + i).value = value;
  }
}
// Initialize Pie Chart
let pieChart;
function createChart() {
  const ctx = document.getElementById('pieChart').getContext('2d');
  pieChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
      labels: ['Available Vaccines', 'Vaccinated Children', "Today's Registrations", 'Daily Visits'],
      datasets: [{
        data: [
          parseInt(document.getElementById('stat1').innerText),
          parseInt(document.getElementById('stat2').innerText),
          parseInt(document.getElementById('stat3').innerText),
          parseInt(document.getElementById('stat4').innerText)
        ],
        backgroundColor: ['#36A2EB', '#FF6384', '#FFCE56', '#4BC0C0'],
        borderWidth: 2
      }]
    },
    options: {
      responsive: true,
      plugins: { legend: { position: 'bottom', labels: { font: { size: 14 } } } }
    }
  });
}

// Update stats and chart
function updateStats() {
  for (let i = 1; i <= 4; i++) {
    const value = document.getElementById('input' + i).value;
    if (value.trim() !== "") {
      document.getElementById('stat' + i).innerText = value;
      localStorage.setItem('stat' + i, value);
    }
  }
  pieChart.data.datasets[0].data = [
    parseInt(document.getElementById('stat1').innerText),
    parseInt(document.getElementById('stat2').innerText),
    parseInt(document.getElementById('stat3').innerText),
    parseInt(document.getElementById('stat4').innerText)
  ];
  pieChart.update();
}

// On page load
window.onload = function() {
  loadStats();
  createChart();
};
</script>
</body>
</html>