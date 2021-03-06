<!DOCTYPE html>
<html lang="en">

<head>
    <title>ARIA Timer Role Examples</title>
		<?php include("includes/common-head-tags.php"); ?>
    <link rel="stylesheet" type="text/css" href="css/timer.css" />
    
</head>

<body>

    <?php include("includes/example-header.php"); ?>

    <main>



        <h1>ARIA Timer Role Examples</h1>



        <aside class="notes">
            <h2>Notes:</h2>

            <p>This page uses code from
                <a href="http://pauljadam.com/demos/ariacountdown.html">this demo</a> by
                <a href="http://pauljadam.com/">Paul J. Adam</a>.
            </p>
        </aside>

        <h2>Timer Example</h2>

        <div id="clock" role="timer" aria-live="polite"></div>

    </main>


    <script src="js/timer.js"></script>
</body>

</html>