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
          <h1>Dashboard</h1>
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
                  <td><span>85%</span></td>
                  <td><span>87%</span></td>
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
            <i class="material-symbols-rounded">chat</i>
            <span class="nav-item">Message</span>
            
            <h4>5 New Messages</h4>
            <div class="per">
              <table>
                <tr>
                    <td><span class="sender">Dr. Ayman Ali:</span></td>
                    <td><span class="message">Hi Doctor</span></td>
                </tr>
                <tr>
                    <td><span class="sender">Omar Ahmed:</span></td>
                    <td><span class="message">Hello Doctors, Thank you for the vaccination for my dog</span></td>
                </tr>
              </table>
            </div>
            <h4>+3 More</h4>
            <button>More Details</button>
        </div>
    </div>

    <section class="dashboard">
        <div class="dashboard-list">
          <h1>Admin
          </h1>
          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Users</th>
                <th >Edit Status</th>
                <th>Edit Status</th>
               <th>  <a href="profile.php">Edit User</a> </th>
                <th>Admins</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>01</td>
                <td>Dr. Amar Yousif</td>
                <td><button>Make Admin</button></td>
                <td><button>Make User</button></td>
                <td>Dr. Amar Yousif</td>
              </tr>
              <tr>
                <td>02</td>
                <td>Dr. Amar Yousif</td>
                <td><button>Make Admin</button></td>
                <td><button>Make User</button></td>
                <td>Dr. Amar Yousif</td>
              </tr>
              <tr>
                <td>03</td>
                <td>Dr. Amar Yousif</td>
                <td><button>Make Admin</button></td>
                <td><button>Make User</button></td>
                <td>Dr. Amar Yousif</td>
              </tr>
              <tr>
                <td>04</td>
                <td>Dr. Amar Yousif</td>
                <td><button>Make Admin</button></td>
                <td><button>Make User</button></td>
                <td>Dr. Amar Yousif</td>
              </tr>
              <tr>
                <td>04</td>
                <td>Dr. Amar Yousif</td>
                <td><button>Make Admin</button></td>
                <td>               </td>
                <td>               </td>
              </tr>
            </tbody>
          </table>
        </div>

    </section>

    
  </body>
</html>
