## AHow to Use the Api

- You can test all api route through Postmand



## Api Route

// Adding a new person
https://test-backend-21mn.onrender.com/api/

// Get the single user
Route::get('/{id}', [PersonController::class, 'single']);

// update the single user
Route::put('/{id}', [PersonController::class, 'update']);

// delete the single user
Route::delete('/{id}', [PersonController::class, 'delete']);



