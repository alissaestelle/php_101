<?php 

interface Provider {
    function authorize();
}

class GitHub {
    function login(Provider $provider)
    {
        $provider->authorize();
    }

}

?>