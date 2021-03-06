<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="generator" content="HTML Tidy for HTML5 for Windows version 5.4.0">
    <title>Definition demo</title>
		<?php include("includes/common-head-tags.php"); ?>
    <link rel="stylesheet" type="text/css" href="css/definition-term.css" />
</head>

<body>
    <?php include("includes/example-header.php"); ?>

    <main>
        <h1>Accessible Definition Lists</h1>

        <aside class="notes">

            <h2>Notes:</h2>
            <ul>
                <li>that the roles of
                    <code>definition</code> and
                    <code>term</code> and their relationship to the HTML
                    <code>dt</code>,
                    <code>dd</code>,
                    <code>dl</code> and
                    <code>dfn</code> tags
                    <a href="https://github.com/w3c/aria/issues/504">are being questioned</a>
                </li>
                <li>The screen reader user experience is better if you surround your <code>dt</code>/<code>dd</code> pairs with a <code>div</code>.</li>
                </li>
            </ul>
        </aside>

        <h2>A HTML example</h2>

        <p>This example reports that there is six items in the list (instead of three) by Voiceover for OSX</p>

        <dl>
            <dt>Gojira</dt>
            <dd>A japanese kaiju monster created in the 1960s.</dd>

            <dt>Frankenstein</dt>
            <dd>A fictional doctor that created a fictional being out of the spare parts of dead people.</dd>

            <dt>8-man</dt>
            <dd>A manga featuring a robot whose brain is filled of the memories of a cop gunned down in action. Predates Robocop
                by at least 20 years.</dd>
        </dl>

        <h2>Aria Roles example</h2>

        <div class="dl" role="list">
            <div role="listitem">
                <div role="term" id="def1">Gojira</div>
                <div role="definition" aria-labelledby="def1">A japanese kaiju monster created in the 1960s.</div>
            </div>

            <div role="listitem">
                <div role="term" id="def2">Frankenstein</div>
                <div role="definition" aria-labelledby="def2">A fictional doctor that created a fictional being out of the spare parts of dead people.</div>
            </div>

            <div role="listitem">
                <div role="term" id="def3">8-man</div>
                <div role="definition" aria-labelledby="def3">A manga featuring a robot whose brain is filled of the memories of a cop gunned down in action. Predates
                    Robocop by at least 20 years.</div>
            </div>
        </div>
    </main>

    <script src="js/role-checkbox.js"></script>
</body>

</html>