<?php

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes

	Route::get('dashboard', 'AdminController@dashboard')->name('backpack.dashboard');

	Route::get('logout', 'Auth\LoginController@logout');
    Route::post('logout', 'Auth\LoginController@logout');
    Route::crud('country', 'CountryCrudController');
    Route::crud('city', 'CityCrudController');
    
    Route::crud('airline', 'AirlineCrudController');
    Route::crud('airport', 'AirportCrudController');
    Route::crud('aircraft_type', 'Aircraft_typeCrudController');
    Route::crud('aircraft', 'AircraftCrudController');
    Route::crud('seat_class', 'Seat_classCrudController');
    Route::crud('route_type', 'Route_typeCrudController');
    Route::crud('aircraft_route_type', 'Aircraft_route_typeCrudController');
    Route::crud('route_type_seat_class', 'Route_type_seat_classCrudController');
    Route::crud('route_generic', 'Route_genericCrudController');
    Route::crud('route', 'RouteCrudController');
    Route::crud('route_part', 'Route_partCrudController');
    Route::crud('flight', 'FlightCrudController');
    Route::crud('flight_to_seat_class', 'Flight_to_seat_classCrudController');
    Route::crud('ticket_basis', 'Ticket_basisCrudController');
    Route::crud('ticket_agent_type', 'Ticket_agent_typeCrudController');
    Route::crud('ticket_agent', 'Ticket_agentCrudController');
    Route::crud('passenger', 'PassengerCrudController');
    Route::crud('seat', 'SeatCrudController');
    Route::crud('reservation', 'ReservationCrudController');
    Route::crud('ticket', 'TicketCrudController');
    Route::crud('department', 'DepartmentCrudController');
    Route::crud('employee', 'EmployeeCrudController');
    Route::crud('checkin_desk', 'Checkin_deskCrudController');
    Route::crud('checkin_desk_to_flight', 'Checkin_desk_to_flightCrudController');
    Route::crud('checkin', 'CheckinCrudController');
    Route::crud('seat_block_reason', 'Seat_block_reasonCrudController');
    Route::crud('seat_blocked', 'Seat_blockedCrudController');
    Route::crud('seating_plan', 'Seating_planCrudController');
    Route::crud('boarding_card', 'Boarding_cardCrudController');
    Route::crud('baggage', 'BaggageCrudController');
    Route::crud('seat_flight_price', 'Seat_flight_priceCrudController');
    Route::crud('transaction', 'TransactionCrudController');
    Route::crud('lakeland_premier_club_type', 'Lakeland_premier_club_typeCrudController');
    Route::crud('lakeland_premier_club_member', 'Lakeland_premier_club_memberCrudController');
    Route::crud('lakeland_premier_club_movement', 'Lakeland_premier_club_movementCrudController');
}); // this should be the absolute last line of this file