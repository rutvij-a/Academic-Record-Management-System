<nav class="sidebar close">
    <header>
        <div class="image-text">
            <div class="text logo-text">
                <span class="name">Academic Record</span>
                <span class="profession">Management System</span>
            </div>
        </div>
        <i class='bx bx-chevron-right toggle'></i>
    </header>
    <div class="menu-bar">
        <div class="menu">
            <li class="search-box">
                <i class='bx bx-search icon'></i>
                <input type="text" placeholder="Search...">
            </li>
            <ul class="menu-links">
                <li class="nav-link">
                    <a href="<?php echo URL;?>/dashboard">
                        <i class='bx bx-home-alt icon'></i>
                        <span class="text nav-text">Home</span>
                    </a>
                </li>
                <li class="nav-link">
                    <a href="<?php echo URL;?>/user/<?php echo $_SESSION['user_id'];?>" >
                        <i class='bx bxs-user icon'></i>
                        <span class="text nav-text">User</span>
                    </a>
                </li>
                <li class="nav-link">
                    <a href="<?php echo URL;?>/academic_details/<?php echo $_SESSION['user_id'];?>">
                        <i class='bx bx-book icon'></i>
                        <span class="text nav-text">Academic Details</span>
                    </a>
                </li>
                <li class="nav-link">
                    <a href="<?php echo URL;?>/new_grade_issue/<?php echo $_SESSION['user_id'];?>">
                        <i class='bx bx-pie-chart-alt icon'></i>
                        <span class="text nav-text">Grades</span>
                    </a>
                </li>
                <li class="nav-link">
                    <a href="<?php echo URL;?>/project/<?php echo $_SESSION['user_id'];?>">
                        <i class='bx bx-heart icon'></i>
                        <span class="text nav-text">Projects</span>
                    </a>
                </li>
                <li class="nav-link">
                    <a href="<?php echo URL;?>/internship/<?php echo $_SESSION['user_id'];?>">
                        <i class='bx bx-wallet icon'></i>
                        <span class="text nav-text">Internships</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="bottom-content">
            <li class="">
                <a href="<?php echo URL;?>/logout">
                    <i class='bx bx-log-out icon'></i>
                    <span class="text nav-text">Logout</span>
                </a>
            </li>
            <li class="mode">
                <div class="sun-moon">
                    <i class='bx bx-moon icon moon'></i>
                    <i class='bx bx-sun icon sun'></i>
                </div>
                <span class="mode-text text">Dark mode</span>
                <div class="toggle-switch">
                    <span class="switch"></span>
                </div>
            </li>
        </div>
    </div>
</nav>
<script>
    const body = document.querySelector('body'),sidebar = body.querySelector('nav'),toggle = body.querySelector(".toggle"),searchBtn = body.querySelector(".search-box"),modeSwitch = body.querySelector(".toggle-switch"),modeText = body.querySelector(".mode-text");
    toggle.addEventListener("click", () => {
        sidebar.classList.toggle("close");
    });
    searchBtn.addEventListener("click", () => {
        sidebar.classList.remove("close");
    });
    modeSwitch.addEventListener("click", () => {
        body.classList.toggle("dark");
        if (body.classList.contains("dark")) {
            modeText.innerText = "Light mode";
        } else {
            modeText.innerText = "Dark mode";
        }
    });
</script>