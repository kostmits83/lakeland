<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->

<li class="nav-item nav-dropdown {{ (Request::is('admin/country/*')) ? 'open' : '' }}">
	<a class="nav-link nav-dropdown-toggle" href="{{ backpack_url('country') }}"><i class='nav-icon la la-lg la-angle-right'></i> Countries</a>
	<ul class="nav-dropdown-items">
		<li class="nav-item"><a class="nav-link" href="{{ backpack_url('country/create') }}"><i class='nav-icon la la-lg la-minus'></i> Create</a></li>
		<li class="nav-item"><a class="nav-link" href="{{ backpack_url('country') }}"><i class='nav-icon la la-lg la-minus'></i> All</a></li>
	</ul>
</li>
<li class="nav-item nav-dropdown {{ (Request::is('admin/city/*')) ? 'open' : '' }}">
	<a class="nav-link nav-dropdown-toggle" href="{{ backpack_url('city') }}"><i class='nav-icon la la-lg la-angle-right'></i> Cities</a>
	<ul class="nav-dropdown-items">
		<li class="nav-item"><a class="nav-link" href="{{ backpack_url('city/create') }}"><i class='nav-icon la la-lg la-minus'></i> Create</a></li>
		<li class="nav-item"><a class="nav-link" href="{{ backpack_url('city') }}"><i class='nav-icon la la-lg la-minus'></i> All</a></li>
	</ul>
</li>
<li class="nav-item nav-dropdown {{ (Request::is('admin/airline/*')) ? 'open' : '' }}">
	<a class="nav-link nav-dropdown-toggle" href="{{ backpack_url('airline') }}"><i class='nav-icon la la-lg la-angle-right'></i> Airlines</a>
	<ul class="nav-dropdown-items">
		<li class="nav-item"><a class="nav-link" href="{{ backpack_url('airline/create') }}"><i class='nav-icon la la-lg la-minus'></i> Create</a></li>
		<li class="nav-item"><a class="nav-link" href="{{ backpack_url('airline') }}"><i class='nav-icon la la-lg la-minus'></i> All</a></li>
	</ul>
</li>
<li class="nav-item nav-dropdown {{ (Request::is('admin/airport/*')) ? 'open' : '' }}">
	<a class="nav-link nav-dropdown-toggle" href="{{ backpack_url('airport') }}"><i class='nav-icon la la-lg la-angle-right'></i> Airports</a>
	<ul class="nav-dropdown-items">
		<li class="nav-item"><a class="nav-link" href="{{ backpack_url('airport/create') }}"><i class='nav-icon la la-lg la-minus'></i> Create</a></li>
		<li class="nav-item"><a class="nav-link" href="{{ backpack_url('airport') }}"><i class='nav-icon la la-lg la-minus'></i> All</a></li>
	</ul>
</li>
<li class="nav-item nav-dropdown {{ (Request::is('admin/aircraft_type/*')) ? 'open' : '' }}">
	<a class="nav-link nav-dropdown-toggle" href="{{ backpack_url('aircraft_type') }}"><i class='nav-icon la la-lg la-angle-right'></i> Aircraft Types</a>
	<ul class="nav-dropdown-items">
		<li class="nav-item"><a class="nav-link" href="{{ backpack_url('aircraft_type/create') }}"><i class='nav-icon la la-lg la-minus'></i> Create</a></li>
		<li class="nav-item"><a class="nav-link" href="{{ backpack_url('aircraft_type') }}"><i class='nav-icon la la-lg la-minus'></i> All</a></li>
	</ul>
</li>
<li class="nav-item nav-dropdown {{ (Request::is('admin/aircraft/*')) ? 'open' : '' }}">
	<a class="nav-link nav-dropdown-toggle" href="{{ backpack_url('aircraft') }}"><i class='nav-icon la la-lg la-angle-right'></i> Aircraft</a>
	<ul class="nav-dropdown-items">
		<li class="nav-item"><a class="nav-link" href="{{ backpack_url('aircraft/create') }}"><i class='nav-icon la la-lg la-minus'></i> Create</a></li>
		<li class="nav-item"><a class="nav-link" href="{{ backpack_url('aircraft') }}"><i class='nav-icon la la-lg la-minus'></i> All</a></li>
	</ul>
</li>
<li class="nav-item nav-dropdown {{ (Request::is('admin/seat_class/*')) ? 'open' : '' }}">
	<a class="nav-link nav-dropdown-toggle" href="{{ backpack_url('seat_class') }}"><i class='nav-icon la la-lg la-angle-right'></i> Seat Classes</a>
	<ul class="nav-dropdown-items">
		<li class="nav-item"><a class="nav-link" href="{{ backpack_url('seat_class/create') }}"><i class='nav-icon la la-lg la-minus'></i> Create</a></li>
		<li class="nav-item"><a class="nav-link" href="{{ backpack_url('seat_class') }}"><i class='nav-icon la la-lg la-minus'></i> All</a></li>
	</ul>
</li>
<li class="nav-item nav-dropdown {{ (Request::is('admin/route_type/*')) ? 'open' : '' }}">
	<a class="nav-link nav-dropdown-toggle" href="{{ backpack_url('route_type') }}"><i class='nav-icon la la-lg la-angle-right'></i> Route Type</a>
	<ul class="nav-dropdown-items">
		<li class="nav-item"><a class="nav-link" href="{{ backpack_url('route_type/create') }}"><i class='nav-icon la la-lg la-minus'></i> Create</a></li>
		<li class="nav-item"><a class="nav-link" href="{{ backpack_url('route_type') }}"><i class='nav-icon la la-lg la-minus'></i> All</a></li>
	</ul>
</li>
<li class="nav-item nav-dropdown {{ (Request::is('admin/aircraft_route_type/*')) ? 'open' : '' }}">
	<a class="nav-link nav-dropdown-toggle" href="{{ backpack_url('aircraft_route_type') }}"><i class='nav-icon la la-lg la-angle-right'></i> Aircraft Route Type</a>
	<ul class="nav-dropdown-items">
		<li class="nav-item"><a class="nav-link" href="{{ backpack_url('aircraft_route_type/create') }}"><i class='nav-icon la la-lg la-minus'></i> Create</a></li>
		<li class="nav-item"><a class="nav-link" href="{{ backpack_url('aircraft_route_type') }}"><i class='nav-icon la la-lg la-minus'></i> All</a></li>
	</ul>
</li>
<li class="nav-item nav-dropdown {{ (Request::is('admin/route_type_seat_class/*')) ? 'open' : '' }}">
	<a class="nav-link nav-dropdown-toggle" href="{{ backpack_url('route_type_seat_class') }}"><i class='nav-icon la la-lg la-angle-right'></i> Route Type|Seat Classes</a>
	<ul class="nav-dropdown-items">
		<li class="nav-item"><a class="nav-link" href="{{ backpack_url('route_type_seat_class/create') }}"><i class='nav-icon la la-lg la-minus'></i> Create</a></li>
		<li class="nav-item"><a class="nav-link" href="{{ backpack_url('route_type_seat_class') }}"><i class='nav-icon la la-lg la-minus'></i> All</a></li>
	</ul>
</li>
<li class="nav-item nav-dropdown {{ (Request::is('admin/route_generic/*')) ? 'open' : '' }}">
	<a class="nav-link nav-dropdown-toggle" href="{{ backpack_url('route_generic') }}"><i class='nav-icon la la-lg la-angle-right'></i> Route Generics</a>
	<ul class="nav-dropdown-items">
		<li class="nav-item"><a class="nav-link" href="{{ backpack_url('route_generic/create') }}"><i class='nav-icon la la-lg la-minus'></i> Create</a></li>
		<li class="nav-item"><a class="nav-link" href="{{ backpack_url('route_generic') }}"><i class='nav-icon la la-lg la-minus'></i> All</a></li>
	</ul>
</li>
<li class="nav-item nav-dropdown {{ (Request::is('admin/route/*')) ? 'open' : '' }}">
	<a class="nav-link nav-dropdown-toggle" href="{{ backpack_url('route') }}"><i class='nav-icon la la-lg la-angle-right'></i> Routes</a>
	<ul class="nav-dropdown-items">
		<li class="nav-item"><a class="nav-link" href="{{ backpack_url('route/create') }}"><i class='nav-icon la la-lg la-minus'></i> Create</a></li>
		<li class="nav-item"><a class="nav-link" href="{{ backpack_url('route') }}"><i class='nav-icon la la-lg la-minus'></i> All</a></li>
	</ul>
</li>
<li class="nav-item nav-dropdown {{ (Request::is('admin/route_part/*')) ? 'open' : '' }}">
	<a class="nav-link nav-dropdown-toggle" href="{{ backpack_url('route_part') }}"><i class='nav-icon la la-lg la-angle-right'></i> Routes Parts</a>
	<ul class="nav-dropdown-items">
		<li class="nav-item"><a class="nav-link" href="{{ backpack_url('route_part/create') }}"><i class='nav-icon la la-lg la-minus'></i> Create</a></li>
		<li class="nav-item"><a class="nav-link" href="{{ backpack_url('route_part') }}"><i class='nav-icon la la-lg la-minus'></i> All</a></li>
	</ul>
</li>
<li class="nav-item nav-dropdown {{ (Request::is('admin/flight/*')) ? 'open' : '' }}">
	<a class="nav-link nav-dropdown-toggle" href="{{ backpack_url('flight') }}"><i class='nav-icon la la-lg la-angle-right'></i> Flights</a>
	<ul class="nav-dropdown-items">
		<li class="nav-item"><a class="nav-link" href="{{ backpack_url('flight/create') }}"><i class='nav-icon la la-lg la-minus'></i> Create</a></li>
		<li class="nav-item"><a class="nav-link" href="{{ backpack_url('flight') }}"><i class='nav-icon la la-lg la-minus'></i> All</a></li>
	</ul>
</li>
<li class="nav-item nav-dropdown {{ (Request::is('admin/flight_to_seat_class/*')) ? 'open' : '' }}">
	<a class="nav-link nav-dropdown-toggle" href="{{ backpack_url('flight_to_seat_class') }}"><i class='nav-icon la la-lg la-angle-right'></i> Flights|Seat Classes</a>
	<ul class="nav-dropdown-items">
		<li class="nav-item"><a class="nav-link" href="{{ backpack_url('flight_to_seat_class/create') }}"><i class='nav-icon la la-lg la-minus'></i> Create</a></li>
		<li class="nav-item"><a class="nav-link" href="{{ backpack_url('flight_to_seat_class') }}"><i class='nav-icon la la-lg la-minus'></i> All</a></li>
	</ul>
</li>
<li class="nav-item nav-dropdown {{ (Request::is('admin/ticket_basis/*')) ? 'open' : '' }}">
	<a class="nav-link nav-dropdown-toggle" href="{{ backpack_url('ticket_basis') }}"><i class='nav-icon la la-lg la-angle-right'></i> Ticket Basis</a>
	<ul class="nav-dropdown-items">
		<li class="nav-item"><a class="nav-link" href="{{ backpack_url('ticket_basis/create') }}"><i class='nav-icon la la-lg la-minus'></i> Create</a></li>
		<li class="nav-item"><a class="nav-link" href="{{ backpack_url('ticket_basis') }}"><i class='nav-icon la la-lg la-minus'></i> All</a></li>
	</ul>
</li>
<li class="nav-item nav-dropdown {{ (Request::is('admin/ticket_agent_type/*')) ? 'open' : '' }}">
	<a class="nav-link nav-dropdown-toggle" href="{{ backpack_url('ticket_agent_type') }}"><i class='nav-icon la la-lg la-angle-right'></i> Ticket Agent Types</a>
	<ul class="nav-dropdown-items">
		<li class="nav-item"><a class="nav-link" href="{{ backpack_url('ticket_agent_type/create') }}"><i class='nav-icon la la-lg la-minus'></i> Create</a></li>
		<li class="nav-item"><a class="nav-link" href="{{ backpack_url('ticket_agent_type') }}"><i class='nav-icon la la-lg la-minus'></i> All</a></li>
	</ul>
</li>
<li class="nav-item nav-dropdown {{ (Request::is('admin/ticket_agent/*')) ? 'open' : '' }}">
	<a class="nav-link nav-dropdown-toggle" href="{{ backpack_url('ticket_agent') }}"><i class='nav-icon la la-lg la-angle-right'></i> Ticket Agents</a>
	<ul class="nav-dropdown-items">
		<li class="nav-item"><a class="nav-link" href="{{ backpack_url('ticket_agent/create') }}"><i class='nav-icon la la-lg la-minus'></i> Create</a></li>
		<li class="nav-item"><a class="nav-link" href="{{ backpack_url('ticket_agent') }}"><i class='nav-icon la la-lg la-minus'></i> All</a></li>
	</ul>
</li>
<li class="nav-item nav-dropdown {{ (Request::is('admin/passenger/*')) ? 'open' : '' }}">
	<a class="nav-link nav-dropdown-toggle" href="{{ backpack_url('passenger') }}"><i class='nav-icon la la-lg la-angle-right'></i> Passengers</a>
	<ul class="nav-dropdown-items">
		<li class="nav-item"><a class="nav-link" href="{{ backpack_url('passenger/create') }}"><i class='nav-icon la la-lg la-minus'></i> Create</a></li>
		<li class="nav-item"><a class="nav-link" href="{{ backpack_url('passenger') }}"><i class='nav-icon la la-lg la-minus'></i> All</a></li>
	</ul>
</li>
<li class="nav-item nav-dropdown {{ (Request::is('admin/seat/*')) ? 'open' : '' }}">
	<a class="nav-link nav-dropdown-toggle" href="{{ backpack_url('seat') }}"><i class='nav-icon la la-lg la-angle-right'></i> Seats</a>
	<ul class="nav-dropdown-items">
		<li class="nav-item"><a class="nav-link" href="{{ backpack_url('seat/create') }}"><i class='nav-icon la la-lg la-minus'></i> Create</a></li>
		<li class="nav-item"><a class="nav-link" href="{{ backpack_url('seat') }}"><i class='nav-icon la la-lg la-minus'></i> All</a></li>
	</ul>
</li>
<li class="nav-item nav-dropdown {{ (Request::is('admin/reservation/*')) ? 'open' : '' }}">
	<a class="nav-link nav-dropdown-toggle" href="{{ backpack_url('reservation') }}"><i class='nav-icon la la-lg la-angle-right'></i> Reservations</a>
	<ul class="nav-dropdown-items">
		<li class="nav-item"><a class="nav-link" href="{{ backpack_url('reservation/create') }}"><i class='nav-icon la la-lg la-minus'></i> Create</a></li>
		<li class="nav-item"><a class="nav-link" href="{{ backpack_url('reservation') }}"><i class='nav-icon la la-lg la-minus'></i> All</a></li>
	</ul>
</li>
<li class="nav-item nav-dropdown {{ (Request::is('admin/ticket/*')) ? 'open' : '' }}">
	<a class="nav-link nav-dropdown-toggle" href="{{ backpack_url('ticket') }}"><i class='nav-icon la la-lg la-angle-right'></i> Tickets</a>
	<ul class="nav-dropdown-items">
		<li class="nav-item"><a class="nav-link" href="{{ backpack_url('ticket/create') }}"><i class='nav-icon la la-lg la-minus'></i> Create</a></li>
		<li class="nav-item"><a class="nav-link" href="{{ backpack_url('ticket') }}"><i class='nav-icon la la-lg la-minus'></i> All</a></li>
	</ul>
</li>
<li class="nav-item nav-dropdown {{ (Request::is('admin/department/*')) ? 'open' : '' }}">
	<a class="nav-link nav-dropdown-toggle" href="{{ backpack_url('department') }}"><i class='nav-icon la la-lg la-angle-right'></i> Departments</a>
	<ul class="nav-dropdown-items">
		<li class="nav-item"><a class="nav-link" href="{{ backpack_url('department/create') }}"><i class='nav-icon la la-lg la-minus'></i> Create</a></li>
		<li class="nav-item"><a class="nav-link" href="{{ backpack_url('department') }}"><i class='nav-icon la la-lg la-minus'></i> All</a></li>
	</ul>
</li>
<li class="nav-item nav-dropdown {{ (Request::is('admin/employee/*')) ? 'open' : '' }}">
	<a class="nav-link nav-dropdown-toggle" href="{{ backpack_url('employee') }}"><i class='nav-icon la la-lg la-angle-right'></i> Employees</a>
	<ul class="nav-dropdown-items">
		<li class="nav-item"><a class="nav-link" href="{{ backpack_url('employee/create') }}"><i class='nav-icon la la-lg la-minus'></i> Create</a></li>
		<li class="nav-item"><a class="nav-link" href="{{ backpack_url('employee') }}"><i class='nav-icon la la-lg la-minus'></i> All</a></li>
	</ul>
</li>
<li class="nav-item nav-dropdown {{ (Request::is('admin/checkin_desk/*')) ? 'open' : '' }}">
	<a class="nav-link nav-dropdown-toggle" href="{{ backpack_url('checkin_desk') }}"><i class='nav-icon la la-lg la-angle-right'></i> Checkin Desks</a>
	<ul class="nav-dropdown-items">
		<li class="nav-item"><a class="nav-link" href="{{ backpack_url('checkin_desk/create') }}"><i class='nav-icon la la-lg la-minus'></i> Create</a></li>
		<li class="nav-item"><a class="nav-link" href="{{ backpack_url('checkin_desk') }}"><i class='nav-icon la la-lg la-minus'></i> All</a></li>
	</ul>
</li>
<li class="nav-item nav-dropdown {{ (Request::is('admin/Checkin_desk_to_flights/*')) ? 'open' : '' }}">
	<a class="nav-link nav-dropdown-toggle" href="{{ backpack_url('Checkin_desk_to_flights') }}"><i class='nav-icon la la-lg la-angle-right'></i> Checkin Desks | Flights</a>
	<ul class="nav-dropdown-items">
		<li class="nav-item"><a class="nav-link" href="{{ backpack_url('Checkin_desk_to_flights/create') }}"><i class='nav-icon la la-lg la-minus'></i> Create</a></li>
		<li class="nav-item"><a class="nav-link" href="{{ backpack_url('Checkin_desk_to_flights') }}"><i class='nav-icon la la-lg la-minus'></i> All</a></li>
	</ul>
</li>
<li class="nav-item nav-dropdown {{ (Request::is('admin/checkin/*')) ? 'open' : '' }}">
	<a class="nav-link nav-dropdown-toggle" href="{{ backpack_url('checkin') }}"><i class='nav-icon la la-lg la-angle-right'></i> Checkins</a>
	<ul class="nav-dropdown-items">
		<li class="nav-item"><a class="nav-link" href="{{ backpack_url('checkin/create') }}"><i class='nav-icon la la-lg la-minus'></i> Create</a></li>
		<li class="nav-item"><a class="nav-link" href="{{ backpack_url('checkin') }}"><i class='nav-icon la la-lg la-minus'></i> All</a></li>
	</ul>
</li>
<li class="nav-item nav-dropdown {{ (Request::is('admin/seat_block_reason/*')) ? 'open' : '' }}">
	<a class="nav-link nav-dropdown-toggle" href="{{ backpack_url('seat_block_reason') }}"><i class='nav-icon la la-lg la-angle-right'></i> Seat Block Reasons</a>
	<ul class="nav-dropdown-items">
		<li class="nav-item"><a class="nav-link" href="{{ backpack_url('seat_block_reason/create') }}"><i class='nav-icon la la-lg la-minus'></i> Create</a></li>
		<li class="nav-item"><a class="nav-link" href="{{ backpack_url('seat_block_reason') }}"><i class='nav-icon la la-lg la-minus'></i> All</a></li>
	</ul>
</li>
<li class="nav-item nav-dropdown {{ (Request::is('admin/seat_blocked/*')) ? 'open' : '' }}">
	<a class="nav-link nav-dropdown-toggle" href="{{ backpack_url('seat_blocked') }}"><i class='nav-icon la la-lg la-angle-right'></i> Seat Blocked</a>
	<ul class="nav-dropdown-items">
		<li class="nav-item"><a class="nav-link" href="{{ backpack_url('seat_blocked/create') }}"><i class='nav-icon la la-lg la-minus'></i> Create</a></li>
		<li class="nav-item"><a class="nav-link" href="{{ backpack_url('seat_blocked') }}"><i class='nav-icon la la-lg la-minus'></i> All</a></li>
	</ul>
</li>
<li class="nav-item nav-dropdown {{ (Request::is('admin/seating_plan/*')) ? 'open' : '' }}">
	<a class="nav-link nav-dropdown-toggle" href="{{ backpack_url('seating_plan') }}"><i class='nav-icon la la-lg la-angle-right'></i> Seating Plan</a>
	<ul class="nav-dropdown-items">
		<li class="nav-item"><a class="nav-link" href="{{ backpack_url('seating_plan/create') }}"><i class='nav-icon la la-lg la-minus'></i> Create</a></li>
		<li class="nav-item"><a class="nav-link" href="{{ backpack_url('seating_plan') }}"><i class='nav-icon la la-lg la-minus'></i> All</a></li>
	</ul>
</li>
<li class="nav-item nav-dropdown {{ (Request::is('admin/boarding_card/*')) ? 'open' : '' }}">
	<a class="nav-link nav-dropdown-toggle" href="{{ backpack_url('boarding_card') }}"><i class='nav-icon la la-lg la-angle-right'></i> Boarding Card</a>
	<ul class="nav-dropdown-items">
		<li class="nav-item"><a class="nav-link" href="{{ backpack_url('boarding_card/create') }}"><i class='nav-icon la la-lg la-minus'></i> Create</a></li>
		<li class="nav-item"><a class="nav-link" href="{{ backpack_url('boarding_card') }}"><i class='nav-icon la la-lg la-minus'></i> All</a></li>
	</ul>
</li>
<li class="nav-item nav-dropdown {{ (Request::is('admin/baggage/*')) ? 'open' : '' }}">
	<a class="nav-link nav-dropdown-toggle" href="{{ backpack_url('baggage') }}"><i class='nav-icon la la-lg la-angle-right'></i> Baggage</a>
	<ul class="nav-dropdown-items">
		<li class="nav-item"><a class="nav-link" href="{{ backpack_url('baggage/create') }}"><i class='nav-icon la la-lg la-minus'></i> Create</a></li>
		<li class="nav-item"><a class="nav-link" href="{{ backpack_url('baggage') }}"><i class='nav-icon la la-lg la-minus'></i> All</a></li>
	</ul>
</li>
<li class="nav-item nav-dropdown {{ (Request::is('admin/seat_flight_price/*')) ? 'open' : '' }}">
	<a class="nav-link nav-dropdown-toggle" href="{{ backpack_url('seat_flight_price') }}"><i class='nav-icon la la-lg la-angle-right'></i> Seat Flight Prices</a>
	<ul class="nav-dropdown-items">
		<li class="nav-item"><a class="nav-link" href="{{ backpack_url('seat_flight_price/create') }}"><i class='nav-icon la la-lg la-minus'></i> Create</a></li>
		<li class="nav-item"><a class="nav-link" href="{{ backpack_url('seat_flight_price') }}"><i class='nav-icon la la-lg la-minus'></i> All</a></li>
	</ul>
</li>
<li class="nav-item nav-dropdown {{ (Request::is('admin/transaction/*')) ? 'open' : '' }}">
	<a class="nav-link nav-dropdown-toggle" href="{{ backpack_url('transaction') }}"><i class='nav-icon la la-lg la-angle-right'></i> Transactions</a>
	<ul class="nav-dropdown-items">
		<li class="nav-item"><a class="nav-link" href="{{ backpack_url('transaction/create') }}"><i class='nav-icon la la-lg la-minus'></i> Create</a></li>
		<li class="nav-item"><a class="nav-link" href="{{ backpack_url('transaction') }}"><i class='nav-icon la la-lg la-minus'></i> All</a></li>
	</ul>
</li>
<li class="nav-item nav-dropdown {{ (Request::is('admin/lakeland_premier_club_type/*')) ? 'open' : '' }}">
	<a class="nav-link nav-dropdown-toggle" href="{{ backpack_url('lakeland_premier_club_type') }}"><i class='nav-icon la la-lg la-angle-right'></i> Premier Types</a>
	<ul class="nav-dropdown-items">
		<li class="nav-item"><a class="nav-link" href="{{ backpack_url('lakeland_premier_club_type/create') }}"><i class='nav-icon la la-lg la-minus'></i> Create</a></li>
		<li class="nav-item"><a class="nav-link" href="{{ backpack_url('lakeland_premier_club_type') }}"><i class='nav-icon la la-lg la-minus'></i> All</a></li>
	</ul>
</li>
<li class="nav-item nav-dropdown {{ (Request::is('admin/lakeland_premier_club_member/*')) ? 'open' : '' }}">
	<a class="nav-link nav-dropdown-toggle" href="{{ backpack_url('lakeland_premier_club_member') }}"><i class='nav-icon la la-lg la-angle-right'></i> Premier Members</a>
	<ul class="nav-dropdown-items">
		<li class="nav-item"><a class="nav-link" href="{{ backpack_url('lakeland_premier_club_member/create') }}"><i class='nav-icon la la-lg la-minus'></i> Create</a></li>
		<li class="nav-item"><a class="nav-link" href="{{ backpack_url('lakeland_premier_club_member') }}"><i class='nav-icon la la-lg la-minus'></i> All</a></li>
	</ul>
</li>
<li class="nav-item nav-dropdown {{ (Request::is('admin/lakeland_premier_club_movement/*')) ? 'open' : '' }}">
	<a class="nav-link nav-dropdown-toggle" href="{{ backpack_url('lakeland_premier_club_movement') }}"><i class='nav-icon la la-lg la-angle-right'></i> Premier Movements</a>
	<ul class="nav-dropdown-items">
		<li class="nav-item"><a class="nav-link" href="{{ backpack_url('lakeland_premier_club_movement/create') }}"><i class='nav-icon la la-lg la-minus'></i> Create</a></li>
		<li class="nav-item"><a class="nav-link" href="{{ backpack_url('lakeland_premier_club_movement') }}"><i class='nav-icon la la-lg la-minus'></i> All</a></li>
	</ul>
</li>
