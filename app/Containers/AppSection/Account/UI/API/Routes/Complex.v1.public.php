<?php

/**
 * @apiGroup           Account
 * @apiName            complex
 *
 * @api                {GET} /v1/complex Endpoint title here..
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

Route::get('complex', [Controller::class, 'complex'])
    ->name('api_account_complex')
    ->middleware(['auth:api']);

