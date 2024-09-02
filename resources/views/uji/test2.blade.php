<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom Word Positioning</title>
    <link rel="stylesheet" href="styles.css">
</head>
<style>
    p {
        font-family: Arial, sans-serif;
    }

    .word-one {
        margin-right: 10px;
        /* Spacing after "This" */
    }

    .word-two {
        margin-right: 30px;
        /* Spacing after "is" */
    }

    .word-three {
        margin-right: 15px;
        /* Spacing after "an" */
    }

    .word-four {
        margin-right: 5px;
        /* Spacing after "example" */
    }

    .word-five {
        margin-right: 20px;
        /* Spacing after "of" */
    }

    .word-six {
        margin-right: 25px;
        /* Spacing after "custom" */
    }
</style>

<body>
    <p>
        <span class="word-one">This</span>
        <span class="word-two">is</span>
        <span class="word-three">an</span>
        <span class="word-four">example</span>
        <span class="word-five">of</span>
        <span class="word-six">custom</span>
        <span class="word-seven">spacing.</span>
    </p>
</body>

</html>
