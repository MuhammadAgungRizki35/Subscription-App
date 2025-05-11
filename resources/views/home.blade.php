<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subscription App</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        h1, h2 {
            color: #333;
        }
        .container {
            max-width: 600px;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        a, button {
            color: white;
            background-color: #007bff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            text-decoration: none;
            margin: 5px;
            display: inline-block;
        }
        a:hover, button:hover {
            background-color: #0056b3;
        }
        p {
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to the Subscription App</h1>

        @if(session('success'))
            <p style="color: green;">{{ session('success') }}</p>
        @endif

        <div style="margin-bottom: 10px;">
            <h2>Manage Your Subscription</h2>
            <a href="{{ url('/subscribe') }}" class="btn">Subscribe to a Package</a>
            <a href="{{ url('/subscriptions') }}" class="btn">View Active Subscriptions</a>
        </div>
    </div>
</body>
</html>
