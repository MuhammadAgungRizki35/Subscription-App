<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subscribe</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        input, select, button {
            width: 100%;
            margin: 8px 0;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            background-color: #007bff;
            color: white;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
        h1, label {
            color: #333;
        }
        a {
            color: #007bff;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Choose Your Subscription Package</h1>

        @if($errors->any())
            <div style="color: red;">
                @foreach($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <form action="{{ url('/subscribe') }}" method="POST">
            @csrf
            <label for="user_id">User ID:</label>
            <input type="number" name="user_id" required min="1" placeholder="Enter your User ID"><br>

            <label for="package">Package:</label>
            <select name="package" required>
                <option value="A">Package A (30 days)</option>
                <option value="B">Package B (60 days)</option>
                <option value="C">Package C (90 days)</option>
            </select><br>

            <button type="submit">Subscribe</button>
        </form>

        <a href="{{ url('/') }}">Back to Home</a>
    </div>
</body>
</html>
