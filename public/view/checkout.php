<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check out</title>
    <!-- <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/checkout.css"> -->
    <base href="/">
    <style>
        body {
            background: url(https://i.pinimg.com/736x/cc/09/ab/cc09ab35f1d4d4b9011af5709a39344f.jpg);
            background-size: cover;
            height: 100vh;
            font-family: "Poppins", sans-serif;
        }

        .container {
            display: grid !important;
            grid-template-columns: 1fr 2fr;
            gap: 20px;
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
        }

        .form-container {
            min-width: 400px;
            max-height: 400px;
            background: rgba(255, 255, 255, 0.7);
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            backdrop-filter: blur(10px);
        }

        .form-container h2 {
            text-align: center;
            font-size: 24px;
            margin-bottom: 20px;
            color: #EB662B;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 8px;
            font-size: 14px;
            color: #555;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"] {
            box-sizing: border-box;
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
            box-shadow: inset 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="tel"]:focus {
            border-color: #EB662B;
            box-shadow: 0 0 8px rgba(235, 102, 43, 0.5);
            outline: none;
        }

        .submit-btn {
            width: 100%;
            padding: 12px;
            background-color: #EB662B;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            text-transform: uppercase;
            transition: all 0.3s ease;
            margin-bottom: 5px;
        }

        .submit-btn:hover {
            background-color: #d25421;
            box-shadow: 0 5px 15px rgba(235, 102, 43, 0.2);
        }

        .tour-info {
            background: rgba(255, 255, 255, 0.7);
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            backdrop-filter: blur(10px);
        }

        .tour-info h2 {
            text-align: center;
            font-size: 24px;
            margin-bottom: 20px;
            color: #EB662B;
        }

        .tour-card {
            padding: 15px;
            border-radius: 10px;
            background: #FFF4E6;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            margin-bottom: 20px;
        }

        .tour-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .tour-card img {
            width: 100%;
            max-height: 400px;
            object-fit: cover;
            border-radius: 10px;
            margin-bottom: 15px;
        }

        .tour-card h3 {
            font-size: 20px;
            margin-bottom: 10px;
            color: #333;
        }

        .tour-card p {
            font-size: 16px;
            line-height: 1.6;
            color: #555;
            margin-bottom: 10px;
        }

        .row {
            display: flex;
            gap: 50px;
            margin: 10px 0;
        }

        .row p {
            min-width: 150px;
            margin: 0;
            font-size: 16px;
            color: #555;
        }

        .row p strong {
            color: #333;
        }


        @media (max-width: 768px) {
            .container {
                grid-template-columns: 1fr;
            }

            .form-container,
            .tour-info {
                margin-bottom: 20px;
            }
        }
    </style>
</head>

<body>
    <div class="book-tour-background">
        <div class="overlay"></div>
    </div>
    <div class="container">
        <!-- Booking Form -->
        <div class="form-container">
            <h2>Book a Tour</h2>
            <form action="/pay" method="post">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email" required>
                </div>
                <div class="form-group">
                    <label for="fullname">Full Name</label>
                    <input type="text" id="fullname" name="fullname" placeholder="Enter your full name" maxlength="50" required>
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="tel" id="phone" name="phone" pattern="[0-9]{10,15}" placeholder="Enter your phone number" required>
                </div>
                <input type="number" name="totalCost" id="totalCost" style="display: none">
                <input type="text" name="tour_name" id="tourName" style="display: none">
                <input type="text" name="tour_id" id="tourId" style="display: none">
                <button style="display: none" type="submit" class="submit-btn">Submit</button>
                <button type="submit" class="submit-btn" name="payUrl">Pay now</button>
            </form>

        </div>


        <!-- Tour Information -->
        <div class="tour-info">
            <h2>Tour Details</h2>
            <div class="tour-card" id="tour-card">
            </div>
        </div>
    </div>
    <script type="module" src="scripts/checkout.js"></script>
</body>

</html>