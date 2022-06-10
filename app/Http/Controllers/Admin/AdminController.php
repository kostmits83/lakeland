<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Routing\Controller;
use App\Models\User;
use App\Models\Ticket;
use App\Models\Flight;
use App\Models\Passenger;
use App\Models\Transaction;
use DB;

class AdminController extends Controller
{
    // The information we send to the view
    protected $data = [];

    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware(backpack_middleware());
    }

    /**
     * Show the admin dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        $this->data['title'] = trans('backpack::base.dashboard');
        $this->data['breadcrumbs'] = [
            trans('backpack::crud.admin')     => backpack_url('dashboard'),
            trans('backpack::base.dashboard') => false,
        ];

        $this->data['ticketTotal'] = Ticket::count();
        $this->data['flightTotal'] = Flight::count();
        $this->data['passengerTotal'] = Passenger::count();
        $this->data['transactionTotal'] = Transaction::count();

        $adsPerDay = [];
        foreach ($adsPerDayRaw as $key => $value) {
            $adsPerDay[] = [
                'x' => $value->date,
                'y' => $value->adsPerDay,
            ];
        }

        return view(backpack_view('dashboard'), $this->data);
    }

    /**
     * Redirect to the dashboard.
     *
     * @return \Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse
     */
    public function redirect()
    {
        // The '/admin' route is not to be used as a page, because it breaks the menu's active state.
        return redirect(backpack_url('dashboard'));
    }
}
