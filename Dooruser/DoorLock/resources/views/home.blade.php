<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Door Lock System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #d0e7ff, #8ebbf0); /* Light blue gradient */
            color: #001f3f;
            margin: 0;
            padding: 0;
        }
        .navbar {
            background-color: #004b8d; /* Deep blue */
        }
        .navbar-brand, .nav-link {
            color: #ffffff !important;
        }
        .logo-container {
            text-align: center;
            margin: 20px 0;
        }
        .logo-container img {
            max-width: 150px;
            height: auto;
        }
        .hero-section {
            background: linear-gradient(135deg, #cce6ff, #99ccff); /* Light blue gradient */
            color: #003366;
            padding: 50px 20px;
            border-radius: 10px;
            text-align: center;
            margin-bottom: 30px;
        }
        .button-container {
            margin-top: 30px;
            display: flex;
            justify-content: center;
            gap: 20px;
        }
        .btn-custom {
            padding: 15px 30px;
            font-size: 18px;
            background-color: #007bff; /* Bootstrap blue */
            border: none;
            color: #fff;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .btn-custom:hover {
            background-color: #3399ff; /* Lighter blue */
        }
        .features-section {
            margin-top: 40px;
        }
        .feature-card {
            background: #cce6ff; /* Light blue */
            border: none;
            border-radius: 10px;
            color: #003366;
            text-align: center;
            padding: 20px;
            margin-bottom: 20px;
        }
        footer {
            background-color: #004b8d;
            text-align: center;
            padding: 10px 0;
            color: #ffffff;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">Smart Lock</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#features">Features</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Logo -->
    <div class="logo-container">
        <img src="{{ asset('image/logo2.png') }}" alt="Smart Lock Logo">
    </div>

    <!-- Hero Section -->
    <section class="hero-section">
        <h1>Welcome to Staff Panel Smart Door Lock System</h1>
        <p>Enhance your security with cutting-edge smart locks that provide convenience and safety.</p>
        
        <!-- Separate Buttons for Admin and Staff -->
        <div class="button-container">
            <a href="{{ url('/login') }}" class="btn btn-custom">Login</a>
            <a href="{{ url('/register') }}" class="btn btn-custom">Register</a>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="features-section container">
        <div class="row">
            <div class="col-md-4">
                <div class="feature-card">
                    <h3>RFID & Remote Control</h3>
                    <p>Allow the door to be controlled via web interfaces</p>
                    <p>Users can unlock the door using an RFID card or tag</p>                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-card">
                    <h3>Monitoring & Logging</h3>
                    <p>Record every door access attemp</p>
                    <p>Can be viewed via dashboard for monitoring the door status and exported the report into PDF file</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-card">
                    <h3>IoT Platform Integration (ThingSpeak)</h3>
                    <p>Real-time data streaming and visualization</p>
                </div>
            </div>
        </div>
    </section>

    <div class="logo-container"></div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 Smart Door Lock System. All rights reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
