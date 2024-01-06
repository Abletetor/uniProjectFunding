<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uni Project Funding</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <br>
    <br>
<a class="nav nav-item text-decoration-none  text-muted" href="#"  onclick="history.back();">
            <i class="bi bi-arrow-left-square me-2"></i>Go back 
        </a>
    <div class="container">
        <!-- <div class="project-details">
            <h1>Project Details</h1>
            <h2><?php echo $_GET['post_title']; ?></h2>
            <img src="<?php echo $_GET['post_img']; ?>" alt="Project Image" class="project-image">
            <p><?php echo $_GET['post_content']; ?></p>
            <p>Min. Investment: <?php echo $_GET['project_cost']; ?>$</p>
        </div> -->
        <h1>Finance</h1>
        <form id="interest-form">
            <div class="form-group">
                <label for="principal">Min Investment (GHC 200)</label>
                <label for="principal">Enter Amount (GHC)</label>
                <input type="number" id="principal"placeholder="200 and above" Min="200" required>
            </div>
            <div class="form-group">
                <label for="years">Number of Years</label>
                <input type="number" id="years" placeholder="2 and above" Min="2" required>
            </div>
            <button type="submit">View Return</button>
            <a href="../Payment/pay.php" class="button-link">Invest Now</a>

        </form>
        <div id="result" class="hidden">
            <h3>Your Rate:</h3>
            <p id="interest-rate"></p>
            <h3>Your Return Amount:</h3>
            <p id="interest-amount"></p>
        </div>
    </div>

    <script src="./script.js"></script>
    <footer>
        <div style="text-align:center">
            <p>&copy; 2023 Uni Project Funding. All Rights Reserved.</p>
        </div>
    </footer>
</body>
</html>
