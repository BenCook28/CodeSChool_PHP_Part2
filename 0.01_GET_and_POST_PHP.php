<!-- PHP Get requests start with .php? -->
<!-- We pass a query var containting the state. -->

php.dev/state.php?state=CA 

<!-- state is the query variable and CA is the 
variable value. -->

<!-- Posted data goes in the body of the request. -->

<!-- $_POST is a PHP superglobal variable. -->
<!-- To test if POST data exists, we use the below: -->

<?php 
    if(_SERVER['REQUEST_METHOD' === 'POST']{
        //echo each item in POST, or whatever
    })
?>