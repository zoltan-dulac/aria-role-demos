<!DOCTYPE html>
<html lang="en">

<head>
    <title>Aria Figure/Figcaption role examples</title>
		<?php include("includes/common-head-tags.php"); ?>
    <link rel="stylesheet" type="text/css" href="css/figure.css" />

</head>

<body>

    <?php include("includes/example-header.php"); ?>

    <main>

        <aside class="notes">
            <h2>Notes</h2>
            <ul>
                <li>This is new tech that most assistive technologies don't implement.</li>
                <li>These examples are from
                    <a href="https://developer.paciellogroup.com/blog/2011/08/html5-accessibility-chops-the-figure-and-figcaption-elements/">HTML5 Accessibility Chops: the figure and figcaption elements</a>
                    by
                    <a href="http://www.html5accessibility.com/">Steve Faulkner</a>
                </li>
                <li>The structure of HTML5 example is reported correctly in Voiceover.</li>
                <li>The structure of the ARIA example is
                    <strong>not</strong> reported correctly in Voiceover.</li>
            </ul>
        </aside>

        <h1>Aria Figure/Figcaption role examples</h1>



        <h2>HTML5 Example</h2>
        <figure>
            
            <code>
            function warning()
            {alert('Warning!')}
            </code>

            <figcaption>Figure 1. JavaScript alert code example</figcaption>


        </figure>


        <h2>ARIA Example</h2>
        <div role="figure">
            <code>
                function warning()
                {alert('Warning!')}
            </code>
            <span>Figure 1. JavaScript alert code example</span>

           

        </div>
    </main>

</body>

</html>