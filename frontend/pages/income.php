<<<<<<< HEAD:frontend/pages/income.php
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Vet Clinic Dashboard</title>
    <link rel="stylesheet" href="../style/styledash.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
    />
  </head>
  <body>
    <div class="container">
      <nav>
        <ul>
          <li>
            <a href="dashboard.php" class="logo">
              <img src="../banners/Logo.jpg" />
              <span class="nav-item">PetZone</span>
            </a>
          </li>
          <li>
            <a href="dashboard.php">
              <i class="material-symbols-rounded">dashboard</i>
              <span class="nav-item">Dashboard</span>
            </a>
          </li>
          <li>
            <a href="message.php">
              <i class="material-symbols-rounded">chat</i>
              <span class="nav-item">Message</span>
            </a>
          </li>
          <li>
            <a href="income.php">
              <i class="material-symbols-rounded">payments</i>
              <span class="nav-item">Income</span>
            </a>
          </li>
          <li>
            <a href="services.php">
              <i class="material-symbols-rounded">medical_services</i>
              <span class="nav-item">Services</span>
            </a>
          </li>
          <li>
            <a href="setting.php">
              <i class="material-symbols-rounded">settings</i>
              <span class="nav-item">Setting</span>
            </a>
          </li>

          <li>
            <a href="../../backend/signout.php" class="logout">
              <i class="material-symbols-rounded">logout</i>
              <span class="nav-item">Log out</span>
            </a>
          </li>
        </ul>
      </nav>

      <section class="main">
        <div class="main-top">
          <h1>Income</h1>
          <i class="material-symbols-rounded">account_circle</i>
        </div>
        <div class="users">
          <div class="card">

            <i class="material-symbols-rounded">trending_up</i>
            <span class="nav-item">Income</span>
            <h4>9380$</h4>
            <p>Objective Income</p>
            <div class="per">
              <table>
                <tr>
                  <td><span>55%</span></td>
                  <td><span>27%</span></td>
                </tr>
                <tr>
                  <td>Monthly</td>
                  <td>Yearly</td>
                </tr>
              </table>
            </div>
            <button>View</button>
        </div>

        <div class="card">

          <i class="material-symbols-rounded">payments</i>
          <span class="nav-item">Net Worth</span>
          <h4>4000$</h4>
          <p>Net Worth Objective</p>
          <div class="per">
            <table>
              <tr>
                <td><span>95%</span></td>
                <td><span>37%</span></td>
              </tr>
              <tr>
                <td>Monthly</td>
                <td>Yearly</td>
              </tr>
            </table>
          </div>
          <button>View</button>
        </div>
        
        <div class="card">

          <i class="material-symbols-rounded">trending_down</i>
          <span class="nav-item">Expences</span>
          <h4>5380$</h4>
          <p>Expences: Normal </p>
          <div class="per">
            <table>
              <tr>
                <td><span>25%</span></td>
                <td><span>7%</span></td>
              </tr>
              <tr>
                <td>Lower Than last Month</td>
                <td>Lower Than last Yeat</td>
              </tr>
            </table>
          </div>
          <button>View</button>
        </div>
        
      </div>
        <section class="transcations">
          <div class="transcations-list">
            <h1>Transaction List</h1>
            <table class="table">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Transaction Name</th>
                  <th>Depart</th>
                  <th>Date</th>
                  <th>Time</th>
                  <th>Details</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>01</td>
                  <td>Dr. Amar Yousif</td>
                  <td>Examinations</td>
                  <td>03-24-22</td>
                  <td>8:00AM</td>
                  <td><button>View</button></td>
                </tr>
                <tr>
                  <td>02</td>
                  <td>Dr. Hassan Ahmed</td>
                  <td>Medications</td>
                  <td>03-24-22</td>
                  <td>9:00AM</td>
                  <td><button>View</button></td>
                </tr>
                <tr>
                  <td>03</td>
                  <td>Dr. Amr Ali</td>
                  <td>Surgeries</td>
                  <td>03-24-22</td>
                  <td>8:00AM</td>
                  <td><button>View</button></td>
                </tr>
                <tr>
                  <td>04</td>
                  <td>Dr. Mohamed Ahmed</td>
                  <td>Vaccinations</td>
                  <td>03-24-22</td>
                  <td>8:00AM</td>
                  <td><button>View</button></td>
                </tr>
                <tr>
                  <td>05</td>
                  <td>Dr. Omar Ali</td>
                  <td>Castrations</td>
                  <td>03-24-22</td>
                  <td>9:00AM</td>
                  <td><button>View</button></td>
                </tr>
                <tr>
                  <td>06</td>
                  <td>Dr. Omar Ali</td>
                  <td>Castrations</td>
                  <td>03-24-22</td>
                  <td>9:00AM</td>
                  <td><button>View</button></td>
                </tr>
                <tr>
                  <td>07</td>
                  <td>Dr. Omar Ali</td>
                  <td>Castrations</td>
                  <td>03-24-22</td>
                  <td>9:00AM</td>
                  <td><button>View</button></td>
                </tr>
                <tr>
                  <td>08</td>
                  <td>Dr. Omar Ali</td>
                  <td>Castrations</td>
                  <td>03-24-22</td>
                  <td>9:00AM</td>
                  <td><button>View</button></td>
                </tr>              
              </tbody>
            </table>
          </div>
        </section>
  </body>
</html>
=======
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Vet Clinic Dashboard</title>
    <link rel="stylesheet" href="style/styledash.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
    />
  </head>
  <body>
    <div class="container">
      <nav>
        <ul>
          <li>
            <a href="dashboard.php" class="logo">
              <img src="banners/Logo.jpg" />
              <span class="nav-item">PetZone</span>
            </a>
          </li>
          <li>
            <a href="dashboard.php">
              <i class="material-symbols-rounded">dashboard</i>
              <span class="nav-item">Dashboard</span>
            </a>
          </li>
          <li>
            <a href="message.php">
              <i class="material-symbols-rounded">chat</i>
              <span class="nav-item">Message</span>
            </a>
          </li>
          <li>
            <a href="income.php">
              <i class="material-symbols-rounded">payments</i>
              <span class="nav-item">Income</span>
            </a>
          </li>
          <li>
            <a href="services.php">
              <i class="material-symbols-rounded">medical_services</i>
              <span class="nav-item">Services</span>
            </a>
          </li>
          <li>
            <a href="setting.php">
              <i class="material-symbols-rounded">settings</i>
              <span class="nav-item">Setting</span>
            </a>
          </li>

          <li>
            <a href="logout.php" class="logout">
              <i class="material-symbols-rounded">logout</i>
              <span class="nav-item">Log out</span>
            </a>
          </li>
        </ul>
      </nav>

      <section class="main">
        <div class="main-top">
          <h1>Income</h1>
          <i class="material-symbols-rounded">account_circle</i>
        </div>
        <div class="users">
          <div class="card">

            <i class="material-symbols-rounded">trending_up</i>
            <span class="nav-item">Income</span>
            <h4>9380$</h4>
            <p>Objective Income</p>
            <div class="per">
              <table>
                <tr>
                  <td><span>55%</span></td>
                  <td><span>27%</span></td>
                </tr>
                <tr>
                  <td>Monthly</td>
                  <td>Yearly</td>
                </tr>
              </table>
            </div>
            <button>View</button>
        </div>

        <div class="card">

          <i class="material-symbols-rounded">payments</i>
          <span class="nav-item">Net Worth</span>
          <h4>4000$</h4>
          <p>Net Worth Objective</p>
          <div class="per">
            <table>
              <tr>
                <td><span>95%</span></td>
                <td><span>37%</span></td>
              </tr>
              <tr>
                <td>Monthly</td>
                <td>Yearly</td>
              </tr>
            </table>
          </div>
          <button>View</button>
        </div>
        
        <div class="card">

          <i class="material-symbols-rounded">trending_down</i>
          <span class="nav-item">Expences</span>
          <h4>5380$</h4>
          <p>Expences: Normal </p>
          <div class="per">
            <table>
              <tr>
                <td><span>25%</span></td>
                <td><span>7%</span></td>
              </tr>
              <tr>
                <td>Lower Than last Month</td>
                <td>Lower Than last Yeat</td>
              </tr>
            </table>
          </div>
          <button>View</button>
        </div>
        
      </div>
        <section class="transcations">
          <div class="transcations-list">
            <h1>Transaction List</h1>
            <table class="table">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Transaction Name</th>
                  <th>Depart</th>
                  <th>Date</th>
                  <th>Time</th>
                  <th>Details</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>01</td>
                  <td>Dr. Amar Yousif</td>
                  <td>Examinations</td>
                  <td>03-24-22</td>
                  <td>8:00AM</td>
                  <td><button>View</button></td>
                </tr>
                <tr>
                  <td>02</td>
                  <td>Dr. Hassan Ahmed</td>
                  <td>Medications</td>
                  <td>03-24-22</td>
                  <td>9:00AM</td>
                  <td><button>View</button></td>
                </tr>
                <tr>
                  <td>03</td>
                  <td>Dr. Amr Ali</td>
                  <td>Surgeries</td>
                  <td>03-24-22</td>
                  <td>8:00AM</td>
                  <td><button>View</button></td>
                </tr>
                <tr>
                  <td>04</td>
                  <td>Dr. Mohamed Ahmed</td>
                  <td>Vaccinations</td>
                  <td>03-24-22</td>
                  <td>8:00AM</td>
                  <td><button>View</button></td>
                </tr>
                <tr>
                  <td>05</td>
                  <td>Dr. Omar Ali</td>
                  <td>Castrations</td>
                  <td>03-24-22</td>
                  <td>9:00AM</td>
                  <td><button>View</button></td>
                </tr>
                <tr>
                  <td>06</td>
                  <td>Dr. Omar Ali</td>
                  <td>Castrations</td>
                  <td>03-24-22</td>
                  <td>9:00AM</td>
                  <td><button>View</button></td>
                </tr>
                <tr>
                  <td>07</td>
                  <td>Dr. Omar Ali</td>
                  <td>Castrations</td>
                  <td>03-24-22</td>
                  <td>9:00AM</td>
                  <td><button>View</button></td>
                </tr>
                <tr>
                  <td>08</td>
                  <td>Dr. Omar Ali</td>
                  <td>Castrations</td>
                  <td>03-24-22</td>
                  <td>9:00AM</td>
                  <td><button>View</button></td>
                </tr>              
              </tbody>
            </table>
          </div>
        </section>
  </body>
</html>
>>>>>>> 589f849e8cb19b3603cd8030b36c3ffb498405c6:income.php
