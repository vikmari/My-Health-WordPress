<?php

add_action('wpforms_process_complete', 'custom_wpforms_api_request', 10, 4);

function custom_wpforms_api_request($fields, $entry, $form_data, $entry_id) {
    // The form ID
    if ($form_data['id'] == 57) { 

        // Prepare the API request
        $api_url = 'https://regression.pabau.me/'; // URL
        $api_key = 'MTIzMDgbd283795c5e51d3b7efd4aefbc404fb8'; //  API key

        // Prepare the data to send
        $data = array(
            'field1' => $fields['#0'], 
            'field2' => $fields['#1'],
            'field3' => $fields['#7'],
            // Add more fields as needed
        );

        $response = wp_remote_post($api_url, array(
            'body'    => json_encode($data),
            'headers' => array(
                'Content-Type'  => 'application/json',
                'Authorization' => 'Bearer ' . $api_key,
            ),
        ));

        // Response
        if (is_wp_error($response)) {
            $error_message = $response->get_error_message();
            
        } else {
            $response_body = wp_remote_retrieve_body($response);
            
        }
    }
}
