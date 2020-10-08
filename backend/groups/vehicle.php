<?php


function take_categories($database)
{

    $datas = $database->select("category", "*", ["ORDER" => ["heavy_num" => "ASC"]]);

    if ($datas)
        echo json_encode($datas);
    else
        echo '0';
}
function take_trans($database)
{

    $datas = $database->select("transmission_type", "*");

    if ($datas)
        echo json_encode($datas);
    else
        echo '0';
}
function take_fuel($database)
{

    $datas = $database->select("fuel_type", "*");

    if ($datas)
        echo json_encode($datas);
    else
        echo '0';
}


function take_all_vehicles($database)
{

    $data =  $database->select(
        "vehicle",
        [
            "[>]category" => ["e_category_id" => "category_id"], "[>]fuel_type" => ["e_fuel_type_id" => "fuel_type_id"], "[>]transmission_type" => ["e_transmission_type_id" => "transmission_type_id"], "[>]shop" => ["e_shop_id" => "shop_id"]
        ],
        [
            "vehicle.vehicle_id",
            "vehicle.plate",
            "vehicle.brand",
            "vehicle.model",
            "vehicle.registration",
            "vehicle.active",
            "category.type(category)",
            "fuel_type.type(fuel_type)",
            "transmission_type.type(transmission_type)",
            "shop.shop_name"
        ],
        [
            "e_shop_id" => $_SESSION['user_shop_id'], "status" => 1

        ]
    );


    if ($data)
        echo json_encode($data);
    else
        echo '0';
}

function take_vehicle_id($post, $database)
{

    $data =  $database->select(
        "vehicle",
        [
            "[>]category" => ["e_category_id" => "category_id"], "[>]fuel_type" => ["e_fuel_type_id" => "fuel_type_id"], "[>]transmission_type" => ["e_transmission_type_id" => "transmission_type_id"], "[>]shop" => ["e_shop_id" => "shop_id"],

            "[>]wherehouse" => ["e_wherehouse_id" => "wherehouse_id"], "[>]v_kteo" => ["vehicle_id" => "e_vehicle_id", "status" => "status"], "[>]v_service" => ["vehicle_id" => "e_vehicle_id", "status" => "status"], "[>]v_safe_licence" => ["vehicle_id" => "e_vehicle_id", "status" => "status"]
        ],
        [
            "vehicle.vehicle_id", "vehicle.plate", "vehicle.brand", "vehicle.model", "vehicle.color", "vehicle.age", "vehicle.cc", "vehicle.people_max", "vehicle.fuel_max", "vehicle.hoursepower", "vehicle.mileage", "vehicle.chassis_number", "vehicle.active",
            "category.type(category)",
            "fuel_type.type(fuel_type)",
            "transmission_type.type(transmission_type)",
            "shop.shop_name",
            "wherehouse.name(wherehouse_name)",
            "v_kteo.exp_date(kteo_exp)",
            "v_safe_licence.exp_date(safty_exp)",
            "v_service.exp_km(service_exp)",
            "transmission_type.transmission_type_id",
            "category.category_id",
            "fuel_type.fuel_type_id",

        ],
        [
            "vehicle_id" => $post['id']

        ]
    );


    if ($data)
        echo json_encode($data);
    else
        echo '0';
}


function deactivate_withdraw($post, $database)
{

    $data = $database->update("vehicle", [
        "active" => 1
    ], [
        "vehicle_id" => $post['id']
    ]);


    if ($data->rowCount() > 0)
        echo '1';
    else
        echo '0';
}

function activate_withdraw($post, $database)
{
    $reset_reservation_counter = 0;


    $datas_res = $database->select("v_reservation", ["[>]reservation" => ["v_reservation_id" => "e_v_reservation_id"]], ["reservation.reservation_id", "v_reservation.v_reservation_id"], [
        "AND" => [
            "v_reservation.e_vehicle_id" => $post['id'],
            "v_reservation.reason" => 1,
            "v_reservation.status" => 1
        ]
    ]);



    for ($i = 0; $i < count($datas_res); $i++) {
        $reser = $database->select("reservation", '*', ["reservation_id" => $datas_res[$i]['reservation_id']]);



        $datas_up_2 = $database->insert("reservation_open", [
            "check_in_date" => $reser[0]['check_in_date'],
            "check_out_date" => $reser[0]['check_out_date'],
            "charge_type" => $reser[0]['charge_type'],
            "reservation_date" => $reser[0]['reservation_date'],
            "reservation_from" => 'Direct',
            "status" => '4',
            "comments" => $reser[0]['comments'],
            "discount" => $reser[0]['discount'],
            "e_check_in_shop_id" => $reser[0]['e_check_in_shop_id'],
            "e_check_out_shop_id" => $reser[0]['e_check_out_shop_id'],
            "e_init_reservation_shop_id" => $reser[0]['e_init_reservation_shop_id'],
            "e_charge_category_id" => $reser[0]['e_charge_category_id'],
            "e_category_id" => $reser[0]['e_category_id'],
            "e_agent_id" => $reser[0]['e_agent_id'],
            "e_gear_id_m" => $reser[0]['e_gear_id_m'],
            "e_customer_id_m" => $reser[0]['e_customer_id_m'],
            "e_customer_id" => $reser[0]['e_customer_id'],
            "e_price_id" => $reser[0]['e_price_id'],
            "km_charge" => $reser[0]['km_charge'],
            "km_charge_price" => $reser[0]['km_charge_price'],
            "user_price" => $reser[0]['user_price'],
            "clause_price" => $reser[0]['clause_price'],
            "custom_insurance_price" => $reser[0]['custom_insurance_price'],
            "total_rent_start" => $reser[0]['total_rent_start']

        ]);
        $datasds = $database->update("reservation", [
            "status" => -1
        ], [
            "reservation_id" => $reser[0]['reservation_id']
        ]);

        $reset_reservation_counter++;

        $datass = $database->update("v_reservation", [
            "status" => -1
        ], [
            "e_reservation_id" => $reser[0]['e_v_reservation_id']
        ]);
    }


    $data = $database->update("vehicle", [
        "active" => 0
    ], [
        "vehicle_id" => $post['id']
    ]);


    if ($data->rowCount() > 0) {
        if ($reset_reservation_counter > 0)
            echo '1-';
        else
            echo '1';
    } else
        echo '0';
}



function edit_vehicle($post, $database)
{


    $a1 = $_POST['field_1'];
    $a2 = $_POST['field_2'];
    $a3 = $_POST['field_3'];
    $a4 = $_POST['field_4'];
    $a5 = $_POST['field_5'];
    $a6 = $_POST['field_6'];
    $a7 = $_POST['field_7'];
    $a8 = $_POST['field_8'];
    $a9 = $_POST['field_9'];
    $a10 = $_POST['field_10'];
    $a11 = $_POST['field_11'];
    $a12 = $_POST['field_12'];
    $a13 = $_POST['field_13'];



    $data = $database->update("vehicle", [
        "plate" => $post['v_plate'],
        "brand" => $post['v_brand'],
        "model" => $post['v_model'],
        "color" => $post['v_color'],
        "age" => $post['v_v_date_dp'],
        "cc" => $post['v_cc'],
        "people_max" => $post['v_people_c'],
        "fuel_max" => $post['v_fuel_c'],
        "hoursepower" => $post['v_horse_p'],
        "e_category_id" => $post['v_category'],
        "e_fuel_type_id" => $post['v_fuel_t'],
        "e_transmission_type_id" => $post['v_trans_t']
    ], [
        "vehicle_id" => $post['vehicle_id']
    ]);



    if ($data->rowCount() > 0)
        echo '1';
    else
        echo '0';
}


function add_vehicle($post, $database)
{


    $count = $database->count("vehicle", [
        "plate" => $post['v_plate']
    ]);

    $ok = 0;


    if ($count == 0) {
        $data = $database->insert("vehicle", [
            "plate" => $post['v_plate'],
            "brand" => $post['v_brand'],
            "model" => $post['v_model'],
            "color" => $post['v_color'],
            "age" => $post['v_v_date_dp'],
            "cc" => $post['v_cc'],
            "people_max" => $post['v_people_c'],
            "fuel_max" => $post['v_fuel_c'],
            "hoursepower" => $post['v_horse_p'],
            "mileage" => $post['v_miles_b'],
            "e_category_id" => $post['v_category'],
            "e_shop_id" => $post['v_current_shop'],
            "e_wherehouse_id" => $post['v_current_wher'],
            "e_fuel_type_id" => $post['v_fuel_t'],
            "e_transmission_type_id" => $post['v_trans_t'],
            "status" => 1,
            "fuel" => '1/6',
            "price_priority" => 0,
            "chassis_number" => $post['v_chassis_number']
        ]);

        $ok += $data->rowCount();

        // Returns the number of rows affected by the last SQL statement
        if ($data->rowCount() > 0) {
            date_default_timezone_set('Europe/Athens');
            $start_time = date('Y-m-d 00:00:00');


            $vehicle_id = $database->id();

            //add service
            $data = $database->insert("v_service", [
                "start_km" => $post['v_miles_b'],
                "exp_km" => $post['v_next_serv'],
                "e_vehicle_id" => $vehicle_id,
                "status" => 1,
                "comments" => ''
            ]);

            $ok += $data->rowCount();
            //add kteo
            $data = $database->insert("v_kteo", [
                "start_date" => $start_time,
                "exp_date" => $post['v_next_kteo_dp'],
                "e_vehicle_id" => $vehicle_id,
                "status" => 1
            ]);

            $ok += $data->rowCount();
            //add asfalia
            $data = $database->insert("v_safe_licence", [
                "start_date" => $start_time,
                "exp_date" => $post['v_exp_safty_dp'],
                "e_vehicle_id" => $vehicle_id,
                "status" => 1
            ]);

            $ok += $data->rowCount();
        }

        if ($ok == 4)
            echo '1';
        else
            echo '0';
    } else
        echo '3'; //uparxei to oxoima

}



function vehicle_transfare($post, $database)
{
    $datas = $database->select("vehicle", "*", ["vehicle_id" => $post['id']]);



    $data = $database->select("shop", "*", ["shop_id[!]" => $datas[0]['e_shop_id']]);

    if ($data)
        echo json_encode($data);
    else
        echo '0';
}



function delete_vehicle($post, $database)
{

    $data = $database->update("vehicle", [
        "status" => -1
    ], [
        "vehicle_id" => $post['id']
    ]);


    if ($data->rowCount() > 0)
        echo '1';
    else
        echo '0';
}


function change_vehicle_km($post, $database)
{


    $data = $database->update("vehicle", [
        "mileage" => $post['vef_mileage'],
    ], [
        "vehicle_id" => $post['id']
    ]);


    if ($data->rowCount() > 0)
        echo '1';
    else
        echo '0';
}


?>