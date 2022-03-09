<?php

/**
 * @apiGroup           DDFDetails
 * @apiName            getAllDDF
 *
 * @api                {GET} /v1/ddfs Endpoint title here..
 * @apiDescription     Endpoint description here..
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiParam           {String}  parameters here..
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
  // Insert the response of the request here...
}
 */

use App\Containers\AppSection\DDFDetails\UI\API\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::get('ddfs', [Controller::class, 'getAllDDF'])
    ->name('api_ddfdetails_get_all_d_d_f');

