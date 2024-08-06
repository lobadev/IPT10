<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AUF Student Registration</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group input, .form-group textarea, .form-group select {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }
        .form-group input[type="radio"] {
            width: auto;
        }
        .form-group button {
            padding: 10px 15px;
            background-color: #5cb85c;
            border: none;
            color: #fff;
            cursor: pointer;
        }
        .form-group button[type="reset"] {
            background-color: #d9534f;
        }
        .form-group button:hover {
            opacity: 0.9;
        }
        img.logo {
            display: block;
            margin: 0 auto 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="tf2.jgp" alt="AUF Logo" class="logo">
        <h2>AUF Student Registration</h2>
        <form action="summary.php" method="post">
            <div class="form-group">
                <label for="name">Name *</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="dob">Date of Birth</label>
                <input type="date" id="dob" name="dob">
            </div>
            <div class="form-group">
                <label>Sex</label>
                <input type="radio" id="male" name="sex" value="Male">
                <label for="male">Male</label>
                <input type="radio" id="female" name="sex" value="Female">
                <label for="female">Female</label>
            </div>
            <div class="form-group">
                <label for="email">Email *</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <textarea id="address" name="address"></textarea>
            </div>
            <div class="form-group">
                <label for="department">College Department</label>
                <select id="department" name="department">
                    <option value="CBAA">CBAA</option>
                    <option value="CCJE">CCJE</option>
                    <option value="COE">COE</option>
                    <!-- Add more options as needed -->
                </select>
            </div>
            <div class="form-group">
                <label for="program">Program</label>
                <input type="text" id="program" name="program">
            </div>
            <div class="form-group">
                <label for="mobile">Mobile Number</label>
                <input type="text" id="mobile" name="mobile">
            </div>
            <div class="form-group">
                <button type="reset">Reset</button>
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>
