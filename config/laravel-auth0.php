<?php

return array(

    /*
    |--------------------------------------------------------------------------
    |   Your auth0 domain
    |--------------------------------------------------------------------------
    |   As set in the auth0 administration page
    |
    */

     'domain'        => 'brucealgorithm.auth0.com',
    /*
    |--------------------------------------------------------------------------
    |   Your APP id
    |--------------------------------------------------------------------------
    |   As set in the auth0 administration page
    |
    */

     'client_id'     => 'o40P87swPitWFVb3bE1Kg5c1lMEpNSDP',

    /*
    |--------------------------------------------------------------------------
    |   Your APP secret
    |--------------------------------------------------------------------------
    |   As set in the auth0 administration page
    |
    */
     'client_secret' => '1nx9QxU5_FaQRumqZXdZPbsa6-GQBN_UFFbuqfvSQC03oCdaTWk5vRmDdS5zuN6K',


   /*
    |--------------------------------------------------------------------------
    |   The redirect URI
    |--------------------------------------------------------------------------
    |   Should be the same that the one configure in the route to handle the
    |   'Auth0\Login\Auth0Controller@callback'
    |
    */

     'redirect_uri'  => 'http://<host>/auth0/callback'

    /*
    |--------------------------------------------------------------------------
    |   Persistence Configuration
    |--------------------------------------------------------------------------
    |   persist_user            (Boolean) Optional. Indicates if you want to persist the user info, default true
    |   persist_access_token    (Boolean) Optional. Indicates if you want to persist the access token, default false
    |   persist_id_token        (Boolean) Optional. Indicates if you want to persist the id token, default false
    |
    */

    // 'persist_user' => true,
    // 'persist_access_token' => false,
    // 'persist_id_token' => false,

    /*
    |--------------------------------------------------------------------------
    |   The authorized token issuers
    |--------------------------------------------------------------------------
    |   This is used to verify the decoded tokens when using RS256
    |
    */
    // 'authorized_issuers'  => [ 'https://XXXX.auth0.com/' ],

    /*
    |--------------------------------------------------------------------------
    |   The authorized token audiences
    |--------------------------------------------------------------------------
    |
    */
    // 'api_identifier'  => '',

    /*
    |--------------------------------------------------------------------------
    |   The secret format
    |--------------------------------------------------------------------------
    |   Used to know if it should decode the secret when using HS256
    |
    */
    // 'secret_base64_encoded'  => true,

);
