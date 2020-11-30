<?php
function connect() {
    return mysqli_connect("localhost","id15057569_ribamar","Joaodaviigor123-","id15057569_lincoln");
}

function protect($string) {
    return mysqli_real_escape_string(connect(),strip_tags(addslashes($string)));
}

?>