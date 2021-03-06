<!DOCTYPE html>
<html lang="en">

<head>
    <title>ARIA Group Role Examples</title>
		<?php include("includes/common-head-tags.php"); ?>
    <link rel="stylesheet" type="text/css" href="css/group.css" />

</head>

<body>

    <?php include("includes/example-header.php"); ?>

    <main>

        <aside class="notes">
            <h2>Notes:</h2>
            <ul>
                <li>The ARIA version doesn't report the correctly marked up
                    <code>aria-labelledby</code> of the group like the HTML fieldset version.</code>
                </li>
            </ul>
        </aside>

        <h1>ARIA Group Role Examples</h1>



        <h2>An example of using the ARIA group role to group form fields</h2>

        <form>
            <div class="aria-form-group" role="group" aria-labelledby="user-group">
                <span id="user-group" class="fieldset">Customer Information</span>

                <label for="name-group-ex">Customer Name:</label>
                <input type="text" id="name-group-ex" name="name" />

                <label for="address-group-ex">Customer Address:</label>
                <input type="text" id="address-group-ex" name="address" />

                <label for="email-group-ex">Email Address:</label>
                <input type="text" id="email-group-ex" name="email" />
            </div>
        </form>

        <h2>The above example using fieldsets to group fields</h2>

        <form>
            <fieldset>
                <legend>Customer Information</legend>

                <label for="name">Customer Name:</label>
                <input type="text" id="name" name="name" />

                <label for="address">Customer Address:</label>
                <input type="text" id="address" name="address" />

                <label for="email">Email Address:</label>
                <input type="text" id="email" name="email" />
            </fieldset>
        </form>
    </main>
</body>

</html>