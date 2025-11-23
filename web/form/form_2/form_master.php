<?php
// Initialize variables to empty strings to prevent errors on first load
$results = null;

// CHECK: Has the form been submitted?
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // --- 1. SIMPLE TEXT INPUTS ---
    // We use htmlspecialchars() to prevent security issues (XSS)
    $username = htmlspecialchars($_POST['username'] ?? '');
    $password = htmlspecialchars($_POST['password'] ?? ''); // In real apps, hash this!
    $bio      = htmlspecialchars($_POST['bio'] ?? '');

    // --- 2. SINGLE CHOICE INPUTS (Radio & Select) ---
    $gender   = htmlspecialchars($_POST['gender'] ?? 'Not selected');
    $country  = htmlspecialchars($_POST['country'] ?? 'Not selected');

    // --- 3. ARRAY INPUTS (Checkboxes & Multi-Select) ---
    // These return ARRAYS, not strings. We need to check if they exist first.
    
    // Checkbox Handling
    if (isset($_POST['hobbies'])) {
        // Join the array items into a string with commas
        $hobbies_display = implode(", ", $_POST['hobbies']);
        $hobbies_code    = '$_POST["hobbies"]'; // Just for display text
    } else {
        $hobbies_display = "None selected";
    }

    // Multi-Select Handling
    if (isset($_POST['tools'])) {
        $tools_display = implode(" & ", $_POST['tools']);
    } else {
        $tools_display = "None selected";
    }

    $results = true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete PHP Form Guide</title>
    <style>
        /* INTERNAL CSS */
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #f4f4f9; padding: 20px; line-height: 1.6; }
        .container { max-width: 900px; margin: 0 auto; display: flex; gap: 20px; flex-wrap: wrap; }
        
        /* Left and Right Columns */
        .form-box, .result-box { background: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); flex: 1; min-width: 300px; }
        
        h2 { color: #333; border-bottom: 2px solid #007BFF; padding-bottom: 10px; }
        h3 { margin-top: 20px; font-size: 1rem; color: #666; text-transform: uppercase; letter-spacing: 1px; }
        
        /* Form Elements Styling */
        label { display: block; margin-bottom: 5px; font-weight: bold; font-size: 0.9rem; }
        input[type="text"], input[type="password"], select, textarea { width: 100%; padding: 8px; margin-bottom: 10px; border: 1px solid #ddd; border-radius: 4px; box-sizing: border-box; }
        textarea { height: 80px; resize: vertical; }
        
        /* Radio & Checkbox grouping */
        .option-group { margin-bottom: 15px; }
        .option-group label { display: inline; font-weight: normal; margin-right: 15px; }
        
        button { width: 100%; padding: 10px; background-color: #28a745; color: white; border: none; border-radius: 5px; cursor: pointer; font-size: 1rem; }
        button:hover { background-color: #218838; }

        /* Result Styling */
        .result-item { margin-bottom: 15px; border-left: 4px solid #007BFF; padding-left: 10px; background: #f8f9fa; padding: 10px; }
        .code-badge { background: #eee; color: #d63384; font-family: monospace; padding: 2px 5px; border-radius: 4px; font-size: 0.9rem; }
        .value-display { font-weight: bold; color: #333; }
    </style>
</head>
<body>

<div class="container">
    
    <div class="form-box">
        <h2>📝 Input Form</h2>
        <form method="POST" action="">
            
            <h3>Simple Inputs</h3>
            <label>Username (Text):</label>
            <input type="text" name="username" placeholder="Enter name" required>

            <label>Password:</label>
            <input type="password" name="password" placeholder="******">

            <label>Bio (Textarea):</label>
            <textarea name="bio" placeholder="Tell us about yourself..."></textarea>

            <h3>Single Choice (Radio)</h3>
            <div class="option-group">
                <label>Gender:</label><br>
                <input type="radio" name="gender" value="Male" id="m"> <label for="m">Male</label>
                <input type="radio" name="gender" value="Female" id="f"> <label for="f">Female</label>
            </div>

            <label>Country (Select):</label>
            <select name="country">
                <option value="" disabled selected>Choose one...</option>
                <option value="Indonesia">Indonesia</option>
                <option value="USA">USA</option>
                <option value="Japan">Japan</option>
            </select>

            <h3>Multiple Choices (Array)</h3>
            <div class="option-group">
                <label>Hobbies (Checkbox - name="hobbies[]"):</label><br>
                <input type="checkbox" name="hobbies[]" value="Coding" id="c"> <label for="c">Coding</label>
                <input type="checkbox" name="hobbies[]" value="Gaming" id="g"> <label for="g">Gaming</label>
                <input type="checkbox" name="hobbies[]" value="Sleeping" id="s"> <label for="s">Sleeping</label>
            </div>

            <label>Tools (Select Multiple - hold Ctrl/Cmd):</label>
            <select name="tools[]" multiple size="3">
                <option value="VS Code">VS Code</option>
                <option value="Git">Git</option>
                <option value="Docker">Docker</option>
            </select>

            <br><br>
            <button type="submit">Submit Data</button>
        </form>
    </div>

    <?php if ($results): ?>
    <div class="result-box">
        <h2>🔍 How PHP Reads It</h2>
        
        <div class="result-item">
            <label>Text Input:</label>
            PHP Code: <span class="code-badge">$_POST['username']</span><br>
            Value: <span class="value-display"><?php echo $username; ?></span>
        </div>

        <div class="result-item">
            <label>Password Input:</label>
            PHP Code: <span class="code-badge">$_POST['password']</span><br>
            Value: <span class="value-display"><?php echo $password; ?></span>
        </div>

        <div class="result-item">
            <label>Textarea:</label>
            PHP Code: <span class="code-badge">$_POST['bio']</span><br>
            Value: <span class="value-display"><?php echo nl2br($bio); ?></span>
        </div>

        <div class="result-item">
            <label>Radio Button:</label>
            PHP Code: <span class="code-badge">$_POST['gender']</span><br>
            Value: <span class="value-display"><?php echo $gender; ?></span>
        </div>

        <div class="result-item">
            <label>Dropdown (Single):</label>
            PHP Code: <span class="code-badge">$_POST['country']</span><br>
            Value: <span class="value-display"><?php echo $country; ?></span>
        </div>

        <div class="result-item">
            <label>Checkbox Group (Crucial):</label>
            <p>Because we used <code>name="hobbies[]"</code>, PHP treats this as an <b>Array</b>.</p>
            PHP Code: <span class="code-badge">implode(', ', $_POST['hobbies'])</span><br>
            Value: <span class="value-display"><?php echo $hobbies_display; ?></span>
        </div>

        <div class="result-item">
            <label>Multi-Select Dropdown:</label>
            <p>Also returns an array. We must loop through it or implode it.</p>
            Value: <span class="value-display"><?php echo $tools_display; ?></span>
        </div>

    </div>
    <?php endif; ?>

</div>

</body>
</html>
