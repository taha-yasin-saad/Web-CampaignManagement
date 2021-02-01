<?php

namespace App\Http\Controllers\Admin;

use App\Country;
use App\Http\Requests\ZoneRequest;
use App\Zone;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DataTables;



/**
 * @group 1.4  Admin Zone management
 *
 * Page Group To manage Zone data For The Admin Control Panel .
 *
 * - View the Zone Data Ex. Name, Countries & MANAGE .
 * - Create New Zones .
 * - Edit an existing Zones from the Edit Button .
 * - Delete Zones From the delete Button .
 *
 * <p><img src="images/admin/zones/admin-zones-view.png" width="100%"></p>
 *
 * @authenticated
 *
 */
class ZoneController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Zones View Page
     *
     * Is An Admin-Panel Zone Page That Views Zones Data Info .
     *
     * <p><img src="images/admin/zones/admin-zones-view.png" width="100%"></p>
     *
     * View Zones Data Info
     *
     * - View the Zone Data Ex. Name, Countries & MANAGE .
     * - Create New Zones for the Site .
     * - Edit an existing Zones from the Edit Button .
     * - Delete Zones From the delete Button .
     *
     * @authenticated
     *
     * @response {
     *  "id":2,
     *  "name":"Test",
     *  "created_at":"2020-12-29 14:07:43",
     *  "updated_at":"2020-12-29 14:07:43",
     *  "countries":[
     *    {
     *       "id":2,
     *       "iso":"AL",
     *       "name":"ALBANIA",
     *       "nicename":"Albania",
     *       "iso3":"ALB",
     *       "numcode":8,
     *       "phonecode":355,
     *       "pivot":{
     *          "zone_id":2,
     *          "country_id":2
     *       }
     *    }
     * ]
     *}
     *
     */

    public function index(Request $request)
    {
        $query['data'] = Zone::with('countries')->get();

        if ($request->ajax()) {
            return Datatables::of($query['data'])
                ->addIndexColumn()
                ->addColumn('countries', function ($row) {
                    return $row;
                })
                ->addColumn('action', function ($row) {
                    return $row;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('admin.zones.index', $query);
    }

    /**
     * Zone Create Page
     *
     * Is An Admin-Panel Zone Page That Creates Zones To Manage The Web Site Generally .
     *
     * <p><img src="images/admin/zones/admin-zones-create.png" width="100%"></p>
     *
     * @authenticated
     *
     * @bodyParam  name string required The name of the zone. Example: demo
     * @bodyParam  Countries string required The Countries selected of the zone. Example: Alex
     *
     * @response {
     *   "id":2,
     *   "name":"Demo Mato",
     *   "countries":"ALBANIA"
     *   }
     *
     */
    public function create()
    {
        $query['countries'] = Country::all();

        return view('admin.zones.add', $query);
    }

    /**
     * Zone Store Data
     *
     * Is An Admin-Panel Zone Data Request That Stores Zones Data To Database .
     *
     * <p><img src="images/admin/added-successfully.png" width="100%"></p>
     *
     * @authenticated
     *
     * @response  {
     * "success":"Added Successfully"
     * }
     *
     */
    public function store(ZoneRequest $request)
    {
        $zone = Zone::create($request->all());
        $zone->countries()->sync($request->country_id);
        return  redirect('admin/zone')->with('success', 'Added Successfully');
    }


    /**
     * Zone Edit Page
     *
     * Is An Admin-Panel Zone Page That Edits Zones To Manage The Web Site Generally .
     *
     * <p><img src="images/admin/zones/admin-zones-edit.png" width="100%"></p>
     *
     * @authenticated
     *
     * @bodyParam  name string required The name of the zone. Example: demo
     * @bodyParam  Countries string required The Countries selected of the zone. Example: Alex
     *
     * @response {
     *   "id":2,
     *   "name":"Demo",
     *   "countries":"ALBANIA"
     *   }
     *
     */

    public function edit(Zone $zone)
    {
        $query['countries'] = Country::all();
        $query['single'] = $zone;
        return view('admin.zones.add', $query);
    }

    /**
     * Zone Update Data
     *
     * Is An Admin-Panel Zone Data Request That Updates Zones Data To Database .
     *
     * <p><img src="images/admin/zones/admin-zones-update.png" width="100%"></p>
     * <p><img src="images/admin/updated-successfully.png" width="100%"></p>
     *
     * @authenticated
     *
     * @response  {
     * "success":"Updated Successfully"
     * }
     *
     */

    public function update(ZoneRequest $request, Zone $zone)
    {
        $zone->update($request->all());
        $zone->countries()->sync($request->country_id);
        return  redirect('admin/zone')->with('success', 'Updated Successfully');
    }

    /**
     * Zone Delete Data
     *
     * Is An Admin-Panel Zone Data Request That Delete Zones Data From Database .
     *
     * <p><img src="images/admin/zones/admin-zones-delete.png" width="100%"></p>
     *
     * <p><img src="images/admin/deleted-successfully.png" width="100%"></p>
     *
     * @authenticated
     *
     * @response  {
     * "success":"Deleted Successfully"
     * }
     *
     */

    public function destroy(Zone $zone)
    {
        $zone->countries()->detach();
        $zone->delete();
        return  redirect('admin/zone')->with('success', 'Deleted Successfully');
    }
}
