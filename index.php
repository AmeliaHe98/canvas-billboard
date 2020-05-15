<?php
require_once 'global.php';

print <<<EOF

<!doctype html>
<html>
<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/7.11.0/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.11.0/firebase-firestore.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="index.js?version=$VERSION"></script>

<style>
    body {
        background-color: #fff;
    }
    h1{
        margin: 0.5em;
        padding: 0em;
        font-family: "Work Sans", sans-serif;
        letter-spacing: 0.035em;
        font-size: 25px;
        font-weight: 200;
        line-height: 1.25;
        color: rgb(27, 27, 27);
        text-align: center;
    }

    #mycanvas {
        border: 1px #000 solid;
        background-color: #fff;
        cursor: pointer;
        margin-inline-start: 20em;
	    margin-inline-end: 20em;
    }

    #mycanvasWrapper {
        position: relative;
    }

    #selectedBox {
        border: 1px rgba(10, 79, 57, 0.5) solid;
        background-color: rgba(10, 79, 57, 0.25);
        position: absolute;
        pointer-events: none;
        margin-inline-start: 20em;
        margin-inline-end: 20em;
    }
</style>
<script>
    let DIMENSION = $DIMENSION;
</script>

<body>
    <h1>Canvas Billbord</h1><BR>
    <h1><a href=>Article walkthrough</a></h1>
    <h1><a href=>Source code</a></h1>

    <div id=mycanvasWrapper>
        <canvas id=mycanvas></canvas>
    </div>

</body>

</html>
EOF;
