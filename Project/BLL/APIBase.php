<?php

//namespace BLL;

/**
 * Description of APIBase
 *
 * @author Atrimeloni
 */
class APIBase extends Tonic\Resource {
    function json() {
        $this->before(function ($request) {
            //echo "got it thanks";
            if ($request->contentType == "application/json") {
                $request->data = json_decode($request->data);
            }
        });
        
        /*
        $this->after(function ($response) {
            if ($response->contentType == 'application/json')
            {
                $response->contentType = "application/json";
                $response->body = json_encode($response->body);
            }
        });
         */
        
    }
}

?>
