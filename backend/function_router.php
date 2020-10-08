<?php 

include 'connect_medoo.php'; 

if((isset($_POST['function'])) && (isset($_POST['group'])))
{  
    
    if($_POST['group'] == 'vehicle')
    {
        include 'groups/vehicle.php';

             if($_POST['function'] == 'take_all_vehicles'){take_all_vehicles($database);}
        else if($_POST['function'] == 'take_all_vehicles'){add_vehicle($_POST , $database);}
        else if($_POST['function'] == 'take_categories'){take_categories($database);}
        else if($_POST['function'] == 'take_trans'){take_trans($database);}
        else if($_POST['function'] == 'take_fuel'){take_fuel($database);}
        else if($_POST['function'] == 'take_wherehouse'){take_wherehouse($database);}
        else if($_POST['function'] == 'take_shop'){take_shop($_POST , $database);}
        else if($_POST['function'] == 'take_all_vehicles'){take_all_vehicles($database);}
        else if($_POST['function'] == 'take_vehicle_id'){take_vehicle_id($_POST , $database);}
        else if($_POST['function'] == 'deactivate_withdraw'){deactivate_withdraw($_POST , $database);}
        else if($_POST['function'] == 'activate_withdraw'){activate_withdraw($_POST , $database);}
        else if($_POST['function'] == 'edit_vehicle'){edit_vehicle($_POST , $database);}
        else if($_POST['function'] == 'vehicle_transfare'){vehicle_transfare($_POST , $database);}
        else if($_POST['function'] == 'delete_vehicle'){delete_vehicle($_POST , $database);}
        else if($_POST['function'] == 'change_vehicle_km'){change_vehicle_km($_POST , $database);}
    }

    else if($_POST['group'] == 'general')
    {
        include 'groups/general.php';

        if($_POST['function'] == 'take_all_vehicles'){take_all_vehicles($database);}
        else if($_POST['function'] == 'take_all_vehicles'){add_vehicle($_POST , $database);}

    }
    
                  
}

?>