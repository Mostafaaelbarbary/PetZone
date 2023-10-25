<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Vet Clinic Dashboard</title>
    <link rel="stylesheet" href="styledash.css" />
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
            <a href="dashboard.html" class="logo">
              <img src="./pic/logo.jpg" />
              <span class="nav-item">PetZone</span>
            </a>
          </li>
          <li>
            <a href="dashboard.html">
              <i class="material-symbols-rounded">dashboard</i>
              <span class="nav-item">Dashboard</span>
            </a>
          </li>
          <li>
            <a href="message.html">
              <i class="material-symbols-rounded">chat</i>
              <span class="nav-item">Message</span>
            </a>
          </li>
          <li>
            <a href="income.html">
              <i class="material-symbols-rounded">payments</i>
              <span class="nav-item">Income</span>
            </a>
          </li>
          <li>
            <a href="services.html">
              <i class="material-symbols-rounded">medical_services</i>
              <span class="nav-item">Services</span>
            </a>
          </li>
          <li>
            <a href="setting.html">
              <i class="material-symbols-rounded">settings</i>
              <span class="nav-item">Setting</span>
            </a>
          </li>

          <li>
            <a href="logout.html" class="logout">
              <i class="material-symbols-rounded">logout</i>
              <span class="nav-item">Log out</span>
            </a>
          </li>
        </ul>
      </nav>

      <section class="main">
        <div class="main-top">
          <h1>Services</h1>
          <i class="material-symbols-rounded">account_circle</i>
        </div>
        <div class="users">
          <div class="card">
            <img src="./pic/examinations.jpg" />
            <h4>Examinations</h4>
            <p>Dr. Amar Yousif</p>
            <div class="per">
              <table>
                <tr>
                  <td><span>85%</span></td>
                  <td><span>87%</span></td>
                </tr>
                <tr>
                  <td>Month</td>
                  <td>Year</td>
                </tr>
              </table>
            </div>
            <button>View</button>
          </div>
          <div class="card">
            <img src="./pic/medications.jpg" />
            <h4>Medications</h4>
            <p>Dr. Hassan Ahmed</p>
            <div class="per">
              <table>
                <tr>
                  <td><span>82%</span></td>
                  <td><span>85%</span></td>
                </tr>
                <tr>
                  <td>Month</td>
                  <td>Year</td>
                </tr>
              </table>
            </div>
            <button>View</button>
          </div>
          <div class="card">
            <img src="./pic/surgeries.jpg" />
            <h4>Surgeries</h4>
            <p>Dr. Amr Ali</p>
            <div class="per">
              <table>
                <tr>
                  <td><span>94%</span></td>
                  <td><span>92%</span></td>
                </tr>
                <tr>
                  <td>Month</td>
                  <td>Year</td>
                </tr>
              </table>
            </div>
            <button>View</button>
          </div>
          <div class="card">
            <img src="./pic/vaccinations.jpg" />
            <h4>Vaccinations</h4>
            <p>Dr. Mohamed Ahmed</p>
            <div class="per">
              <table>
                <tr>
                  <td><span>85%</span></td>
                  <td><span>82%</span></td>
                </tr>
                <tr>
                  <td>Month</td>
                  <td>Year</td>
                </tr>
              </table>
            </div>
            <button>View</button>
          </div>

          <div class="card">
            <img src="./pic/castrations.jpg" />
            <h4>Castrations</h4>
            <p>Dr. Omar Ali</p>
            <div class="per">
              <table>
                <tr>
                  <td><span>85%</span></td>
                  <td><span>82%</span></td>
                </tr>
                <tr>
                  <td>Month</td>
                  <td>Year</td>
                </tr>
              </table>
            </div>
            <button>View</button>
          </div>
        </div>

        <section class="services">
          <div class="services-list">
            <h1>services List</h1>
            <table class="table">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Depart</th>
                  <th>Date</th>
                  <th>Join Time</th>
                  <th>Logout Time</th>
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
                  <td>3:00PM</td>
                  <td><button>View</button></td>
                </tr>
                <tr>
                  <td>02</td>
                  <td>Dr. Hassan Ahmed</td>
                  <td>Medications</td>
                  <td>03-24-22</td>
                  <td>9:00AM</td>
                  <td>4:00PM</td>
                  <td><button>View</button></td>
                </tr>
                <tr>
                  <td>03</td>
                  <td>Dr. Amr Ali</td>
                  <td>Surgeries</td>
                  <td>03-24-22</td>
                  <td>8:00AM</td>
                  <td>3:00PM</td>
                  <td><button>View</button></td>
                </tr>
                <tr>
                  <td>04</td>
                  <td>Dr. Mohamed Ahmed</td>
                  <td>Vaccinations</td>
                  <td>03-24-22</td>
                  <td>8:00AM</td>
                  <td>3:00PM</td>
                  <td><button>View</button></td>
                </tr>
                <tr>
                  <td>05</td>
                  <td>Dr. Omar Ali</td>
                  <td>Castrations</td>
                  <td>03-24-22</td>
                  <td>9:00AM</td>
                  <td>4:00PM</td>
                  <td><button>View</button></td>
                </tr>
              </tbody>
            </table>
          </div>
        </section>
      </section>
    </div>
  </body>
</html>
