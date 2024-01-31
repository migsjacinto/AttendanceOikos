<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "icon" href = "/assets/Oikos Logo.png">
    <link rel="stylesheet" href = "/CSS/student.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Oikos Student: Announcement</title>
</head>
<body>
    <div class="sidebar">
        <div class="top">
            <div class="logo">
                <i class="fa-solid fa-user-secret"></i>
                <span>Oikos</span>
            </div>
            <i class="fa-solid fa-bars" id = "btn"></i>
        </div>
        <div class="user">
            <img src ="" alt="secret-user" class = "user-img">
            <div class="">
                <p class = "bold">Kafelnikov Dela Rosa</p>
                <p>(Student)</p>
            </div>
        </div>
        <ul>
            <li>
                <a href = "home">
                    <i class="fa-solid fa-house"></i>
                    <span class="nav-item">Home</span>
                </a>
                <span class="tooltip">Home</span>
            </li>
            <li>
                <a href = "user">
                    <i class="fa-solid fa-user"></i>
                    <span class="nav-item">User</span>
                </a>
                <span class="tooltip">User</span>
            </li>
            <li>
                <a href = "announcement">
                    <i class="fa-solid fa-bullhorn"></i>
                    <span class="nav-item">Announcement</span>
                </a>
                <span class="tooltip">Announcement</span>
            </li>
            <li>
                <a href = "calendar">
                    <i class="fa-solid fa-calendar"></i>
                    <span class="nav-item">Calendar</span>
                </a>
                <span class="tooltip">Calendar</span>
            </li>
            <li>
                <a href = "time_record">
                    <i class="fa-solid fa-clock"></i>
                    <span class="nav-item" style="height:50px;">Time Record</span>
                </a>
                <span class="tooltip">Time Record</span>
            </li>
            
            <li>
                <a href = "/studentlogout">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    <span class="nav-item">Logout</span>
                </a>
                <span class="tooltip">Logout</span>
            </li>
        </ul>
    </div>

    <div class="main-content">
        <h1>Announcement</h1>
        <div class="container">
            <div class="announcement-logs">
                <div class="header">Announcement Logs
                    <div class="search">
                        <input type="text" id="search-bar" size="30" placeholder="Search...">
                    </div>
                </div>
                <ul id="announcement-list">
                    <li class="announcement">
                        <div class="sender-icon"><img src="" alt="user icon" class="sender-img"></div>
                        <div class="announcement-header"><h3>Welcome</h3><br>Announcement to New Students</div>
                        <div class="announcement-details">19/01/23<br>By: Amalee</div>
                    </li>
                    <li class="announcement">
                        <div class="sender-icon"><img src="" alt="user icon" class="sender-img"></div>
                        <div class="announcement-header"><h3>Reporting</h3><br>Math 101</div>
                        <div class="announcement-details">05/01/23<br>By: Cy Yu Tech</div>
                    </li>
                    <li class="announcement">
                        <div class="sender-icon"><img src="" alt="user icon" class="sender-img"></div>
                        <div class="announcement-header"><h3>Long Quiz</h3><br>Gen Math</div>
                        <div class="announcement-details">03/01/23<br>By: Kaela</div>
                    </li>
                    <li class="announcement">
                        <div class="sender-icon"><img src="" alt="user icon" class="sender-img"></div>
                        <div class="announcement-header"><h3>Short Quiz</h3><br>Purposive Communication</div>
                        <div class="announcement-details">03/01/23<br>By: Amalee</div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <script>
        let btn = document.querySelector('#btn');
        let sidebar = document.querySelector('.sidebar');

        btn.onclick = function () {
            sidebar.classList.toggle('active');
        }
    </script>


</body>
</html>