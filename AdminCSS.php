 <!DOCTYPE html>
<html>
<head>
 <style>
 * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
}

body {
    background: #f4f6f9;
}

.container {
    display: flex;
}

/* Sidebar */
.sidebar {
    width: 230px;
    background: #ffffff;
    height: 100vh;
    padding: 20px;
    border-right: 1px solid #ddd;
}

.logo {
    color: #ff7a00;
    font-size: 18px;
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
    background: #ff7a00;
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
    margin-bottom: 25px;
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
</html>