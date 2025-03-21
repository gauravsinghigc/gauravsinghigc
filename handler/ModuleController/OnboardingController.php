<?php
require __DIR__ . "/../ModuleController.php";

//check Form will be accpeted only POST Methods
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    //onboardin entity selection
    if (isset($_POST["GSI_entity_type"])) {
        $GSI_Entity_Type_Session =  ReturnSessionalValues("GSI_entity_type", "GSI_SESSION_FOR_ENTITY_TYPE", "INDIVIDUAL", "POST");

        RESPONSE(true, $_POST['GSI_entity_type'], "No Selected");
    }
} else {
    RESPONSE(false, "", "<b>Warning:</b><br> System Received unknown controller request at the moment!<br><br> <b>Device Info: </b>" . SYSTEM_MORE_INFO . "<br><br> <b>IP_ADDRESS :</b> " . IP_ADDRESS . "<br><br> <b>Sent from:</b><br>" . $access_url);
}
