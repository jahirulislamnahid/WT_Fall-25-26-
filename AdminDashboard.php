<!DOCTYPE html>
<html>
<head>

    <title>Office Management System Admin Dashboard</title>
    <style>
 * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
}

body {
    background: #ebe9e9ff;
}

.container {
    display: flex;
}

.sidebar {
    width: 230px;
    background: #e08ee6ff;
    height: 100vh;
    padding: 20px;
    border-right: 1px solid #0a0909ff;
}

.logo {
    color: #020201ff;
    font-size: 20px;
    margin-bottom: 30px;
}

.sidebar ul {
    list-style: none;
}

.sidebar ul li {
    padding: 12px;
    margin-bottom: 8px;
    cursor: pointer;
    border-radius: 6px;
    color: #333;
}

.sidebar ul li:hover,
.sidebar ul li.active {
    background: #482bafff;
    color: white;
}
/* Main Area */
.main {
    flex: 1;
    padding: 20px;
}


/* Top Bar */
.topbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 25px;
}

.top-actions .btn {
    padding: 8px 15px;
    border: none;
    border-radius: 6px;
    cursor: pointer;
    margin-left: 10px;
}

.btn.add {
    background: #ff7a00;
    color: white;
}

.btn.logout {
    background: #ff4d4d;
    color: white;
}

/* Cards */
.cards {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
    margin-bottom: 30px;
    margin-top: 60px;
}

.card {
    padding: 20px;
    border-radius: 10px;
    color: white;
}

.card h3 {
    font-size: 16px;
}

.card p {
    font-size: 28px;
    margin-top: 10px;
}

/* Card Colors */
.orange { background: #ff9f43; }
.purple { background: #5f27cd; }
.green  { background: #10ac84; }
.blue   { background: #1e90ff; }

/* Small Cards */
.small-cards {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
}

.small-card {
    background: white;
    padding: 15px;
    border-radius: 10px;
    border: 1px solid #ddd;
}

.small-card h4 {
    font-size: 14px;
    color: #555;
}

.small-card p {
    font-size: 22px;
    margin-top: 8px;
}
</style>
</head>
<body>

<div class="container">

    <!-- Sidebar -->
    <aside class="sidebar">
        <h2 class="logo">Neurobyte<br>Technologies<br>LTD</h2>
        <ul>
            <li class="active">Dashboard</li>
            <li>Employees</li>
            <li>Departments</li>
            <li>Leave Management</li>
            <li>Payroll</li>
            <li>Attendance</li>
            <li>Announcements</li>
        </ul>
    </aside>

    <!-- Main Content -->
    <main class="main">

        <!-- Top Bar -->
        <header class="topbar">
            <h2> Hello, Admin </h2>
            <h2>Here whats happening with your team today</h2>
            <div class="top-actions">
                <button class="btn add">+ Add New Employee</button>
                <button class="btn logout">Logout</button>
            </div>
        </header>

        <!-- Cards -->
        <section class="cards">
            <div class="card orange">
                <h3>Total Employees</h3>
            </div>

            <div class="card purple">
                <h3>On Leave Today</h3>
            </div>

            <div class="card green">
                <h3>Total Departments</h3>
            </div>

            <div class="card blue">
                <h3>Pending Approvals</h3>
            </div>
        </section>

        <!-- Small Cards -->
        <section class="small-cards">
            <div class="small-card">
                <h4>Present Today</h4>
                <p>0</p>
            </div>

            <div class="small-card">
                <h4>Total Announcements</h4>
                <p>0</p>
            </div>

            <div class="small-card">
                <h4>Approved Leave</h4>
                <p>0</p>
            </div>

            <div class="small-card">
                <h4>Pending Payrolls</h4>
                <p>0</p>
            </div>
        </section>

    </main>
</div>

</body>
</html>
