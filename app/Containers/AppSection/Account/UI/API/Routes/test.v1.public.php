<?php

/**
 * @apiGroup           Account
 * @apiName            test
 *
 * @api                {GET} /v1/test Endpoint title here..
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

use App\Containers\AppSection\Account\UI\API\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::get('test', [Controller::class, 'test'])
    ->name('api_account_test');

