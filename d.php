<!DOCTYPE html>
<html>
<head>
    <title>BMI Calculator</title>
    <style>
        body 
        {
  background-color: lime;
}
        {
            font-family: Arial, sans-serif;
        }
        
        #container {
            width: 300px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f4f4f4;
            border: 1px solid #ccc;
        }
        
        h1 {
            text-align: center;
        }
        
        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 5px;
            margin-bottom: 10px;
        }
        
        input[type="submit"] {
            width: 100%;
            padding: 5px;
            background-color: #4caf50;
            color: white;
            border: none;
            cursor: pointer;
        }
        
        .result {
            margin-top: 20px;
            text-align: center;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div id="container">
        <h1>BMI Calculator</h1>
        <form method="post">
            <label for="weight">Weight (kg):</label>
            <input type="number" step="0.01" name="weight" id="weight" required>
            
            <label for="height">Height (cm):</label>
            <input type="number" step="0.01" name="height" id="height" required>
            
            <input type="submit" value="Calculate">
        </form>
        
        <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $weight = $_POST["weight"];
            $height = $_POST["height"] / 100; // Convert height from cm to meters
            
            $bmi = $weight / ($height * $height);
            $bmi = round($bmi, 2); // Round BMI to 2 decimal places
            
            echo '<div class="result">BMI ของคุณคือ: ' . $bmi . '</div>';
        }
        ?>
    </div>
</body>
</html>
