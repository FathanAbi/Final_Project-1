<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    body {
      background-color: #E6E6E6;
    }
    .container {
      max-width: 1200px;
      margin: 0 auto;
      overflow-x: auto;
      padding: 20px;
    }
    .info {
      margin: 20px 0;
    }
    .btn-primary {
      background-color: #007BFF;
    }
    .btn-secondary {
      background-color: #6C757D;
    }
    .custom-btn {
      font-size: 1rem;
      width: 40px;
      height: 40px;
      padding: 0.3rem 0.7rem;
      line-height: 1.5;
    }
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #606E7C;">
    <a class="navbar-brand text-light" href="#">10NopemberCinema</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" style="border-width: 4px;">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item d-lg-none">
          <a class="nav-link text-light" href="/riwayat">Riwayat</a>
        </li>
        <li class="nav-item d-lg-none">
          <a class="nav-link text-light" href="/dashboard">Dashboard</a>
        </li>
        <li class="nav-item d-lg-none">
          <a class="nav-link text-light" href="/detail">Account</a>
        </li>
      </ul>
    </div>
    <div class="ml-auto d-none d-lg-block">
      <a class="nav-link text-light" href="/riwayat">Riwayat</a>
    </div>
    <div class="ml-auto d-none d-lg-block">
      <a class="nav-link text-light" href="/dashboard">Dashboard</a>
    </div>
    <div class="ml-auto d-none d-lg-block">
      <a class="nav-link text-light" href="/detail">Account</a>
    </div>
  </nav>

  <div class="container" style="margin-top: 40px;">
    <div class="row">
      <div class="row">
        <div class="info">
          <h2>Pilih Kursi Anda</h2>
        </div>
      </div>
      <div class="row text-center">
        <hr style="width: 95%; border: 1px solid #000;">
        <div class="col-12">
          <div style="display: inline-block; background-color: #FFFF; padding: 5px;">
            <p style="margin: 0;">Posisi Layar</p>
          </div>
        </div>
      </div>
      <div class="row">
      </div>
      <div class="row">
        <div class="col-12">
          <div class="text-left">
            <a href="" class="d-inline-block">
              <button class="btn btn-primary" id="button01" onclick="checkButtons()">Lanjut</button>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

  

  <script>
  let activeButtons = [];

function toggleButtonColor(button) {
  if (!activeButtons.includes(button)) {
    button.classList.remove("btn-primary");
    button.classList.add("btn-secondary");
    activeButtons.push(button);
  } else {
    button.classList.remove("btn-secondary");
    button.classList.add("btn-primary");
    activeButtons = activeButtons.filter(b => b !== button);
  }
}

function checkButtons() {
  if (activeButtons.length === 0) {
    // Show an alert if no button is selected
    alert("Mohon setidaknya memilih satu kursi sebelum menekan 'Lanjut'");
  } else {
    const totalSeats = activeButtons.length;
    const confirmation = confirm(`Apakah Anda yakin ingin memesan ${totalSeats} kursi?`);

    if (confirmation) {
      // User confirmed the reservation, you can take further action here
      // For example, you can send the selected seats to the server or perform other tasks.
      alert("Konfimasi pesanan. Periksa kembali detail pesanan sebelum konfirmasi");
    }
  }
}

const spanLetters = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R'];

for (let i = 0; i < 6; i++) {
  const row = document.createElement('div');
  row.className = 'row';

  const info = document.createElement('div');
  info.className = 'info';

  for (let j = 1; j <= 18; j++) {
    const buttonId = `button${i * 20 + j}`;
    const spanText = j === 10 ? spanLetters[i] : '';

    // Create button
    const button = document.createElement('button');
    button.className = 'custom-btn btn btn-primary m-2 col-1';
    button.id = buttonId;
    button.textContent = j;

    button.addEventListener('click', function() {
      toggleButtonColor(this);
    });

    if (j === 10) {
      const span = document.createElement('span');
      span.className = 'text-center col-1';
      span.textContent = spanText;
      info.appendChild(span);
    }

    // Append the button to the info div
    info.appendChild(button);
  }

  // Append info div to the row
  row.appendChild(info);

  // Append the row to the info div
  document.querySelector('.info').appendChild(row);
}
  </script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</html>
