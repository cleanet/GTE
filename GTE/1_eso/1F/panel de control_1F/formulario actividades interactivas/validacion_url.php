<?php
    $url = $_POST['artarea'];
    function url_exists($url) {
        $h = get_headers($url);
        $status = array();
        preg_match('/HTTP\/.* ([0-9]+) .*/', $h[0] , $status);
        return ($status[1] == 200);
    }
    echo url_exists($url)? 'existe' : 'no existe';
?>