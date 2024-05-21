<html>
<?php include('head.php'); ?>
<body>
    <?php
    include('functions.php'); // include the functions file
    if (!empty($messages)) {
        echo '<div id="messages">';
        foreach ($messages as $message) {
            echo $message;
        }
        echo '</div>';
    }
    ?>
    <button id="Button">Открыть форму</button>
    <div id="Popup" class="Popup">
        <button id="Exit_Form" class="Exit_Form">X</button>
        <?php include('form_template.php'); // include the form template ?>
    </div>
</body>
</html>
