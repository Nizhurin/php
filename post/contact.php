<?php 
    echo 'Contact post';
    var_dump($_POST['name']);
    $_SESSION['message'] = 'Thank you your message has been sent.';
    header('Location: /');
?>