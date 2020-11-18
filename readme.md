1) db dump file -booking.sql

2)controller used :BookingController.php

3)views used :requests.blade.php,payments.blade.php,services.blade

4)Routes :
Route::get('services', 'BookingController@services');
Route::get('payments', 'BookingController@payments');
Route::get('requests', 'BookingController@requests');


Route::post('/requestupdate', 'BookingController@request_update');
Route::post('/serviceupdate', 'BookingController@service_update');

5)load more option implemented in request page(http://localhost:8000/requests)

 first it will load 1 record .After every load more click it will add 1 record(for easy testing I have used 1 record per click)
 
 6)Also on clicking Accept request button state will change to service
 
7) services page http://localhost:8000/services  

 on clicking generate invoice button state will change to paid .
 
 8)used ajax for implementing load more and button click changes
 
 
