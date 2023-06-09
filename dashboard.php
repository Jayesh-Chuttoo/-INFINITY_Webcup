<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DASHBOARD</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="./assets/css/dashboard.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>

<body>
    <nav role="navigation">
        <div id="menuToggle">
            <input type="checkbox" />
            <div class="container">
                <div class="hamburgers">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <h2>TITLE</h2>
            </div>
            <ul id="menu">
                <a href="#">
                    <li><i class="bx bx-line-chart"></i>Dashboard</li>
                </a> 
                <a href="users.php">
                    <li><i class="bx bxs-user"></i>Users</li>
                </a>
                <a href="#">
                    <li><i class="bx bxs-id-card"></i>Admin</li>
                </a>
                <a href="#" target="_blank">
                    <li><i class="bx bx-message-dots"></i>Message</li>
                </a>
                <a href="logout.php" target="_blank">
                    <li><i class="bx bx-log-out"></i>Logout</li>
                </a>
            </ul>
        </div>
    </nav>
    <div class="header">
        <div class="item">
            <div class="search">
                <i class='bx bx-search-alt-2'></i>
                <input type="text" placeholder="Search">
            </div>
            <div class="profile">
                <i class='bx bx-bell'></i>
                <img src="https://i.pinimg.com/236x/60/0e/7e/600e7e589feab89d396258c5bcd85303.jpg" alt="d,p">
            </div>
        </div>
    </div>
    <div class="details">
        <div class="val-box">
            <div>
                <i class='bx bxs-user'></i>
            </div>
            <div>
                <h3>111111</h3>
                <span>Total Users</span>
            </div>
        </div>
        <div class="val-box">
            <i class='bx bxs-cart'></i>
            <div>
                <h3>222222</h3>
                <span>Total Orders</span>
            </div>
        </div>
        <div class="val-box">
            <i class='bx bx-data'></i>
            <div>
                <h3>333333</h3>
                <span>Total Products</span>
            </div>
        </div>
        <div class="val-box">
            <i class='bx bx-dollar'></i>
            <div>
                <h3>4444444</h3>
                <span>This Month</span>
            </div>
        </div>
    </div>

    <div class="charts">
        <div class="chart graph">
            <h2>Dreams (past 12 months)</h2>
            <canvas id="lineChart" width="5cm"></canvas>
        </div>
        <div class="chart" id="clock">
            <h2>Localtime (Mauritius)</h2>
            <div class="date">
                 <?php date_default_timezone_set("Indian/Mauritius");
                $hour = date('h');
                $minute = date('ia');
                $mydate = getdate(date("U"));
                $date = "$mydate[mday] $mydate[month] $mydate[year]";
                echo $date;
                ?> 
            </div>
            <div class="clock-container">
                <div class="clock">
                    <div class="hour">
                        <div class="hr" id="hr"></div>
                    </div>
                    <div class="min">
                        <div class="mn" id="mn"></div>
                    </div>
                    <div class="sec">
                        <div class="sc" id="sc"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="chart graph">
            <h2>Users (past 12 months)</h2>
            <canvas id="lineChart2" width="5cm"></canvas>
        </div>
        <div class="chart graph">
            <h2>Visit (past 12 months)</h2>
            <canvas id="lineChart3" width="5cm"></canvas>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.9.1/dist/chart.min.js"></script>
<script src="./assets/js/char1.js"></script>
<script type="text/javascript">
    const deg = 6;
    const hr = document.querySelector("#hr");
    const mn = document.querySelector("#mn");
    const sc = document.querySelector("#sc");
    setInterval(() => {
        let day = new Date();
        let hh = day.getHours() * 30;
        let mm = day.getMinutes() * deg;
        let ss = day.getSeconds() * deg;
        hr.style.transform = `rotateZ(${hh + (mm / 12)}deg)`;
        mn.style.transform = `rotateZ(${mm}deg)`;
        sc.style.transform = `rotateZ(${ss}deg)`;
    })
</script>
<script>
    $('#menu-btn').click(function () {
        $('#menu').toggleClass("active");
    })
</script>

</html>