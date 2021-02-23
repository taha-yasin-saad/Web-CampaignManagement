<?php

namespace App\Http\Controllers;

use App\Source;
use Illuminate\Http\Request;
use App\Workplace;
use App\Product;

/**
 * @group 2.5 Users Lead Sources management
 *
 * Page Group To manage Single Lead Sources For The Manager Control Panel And Give him full access for its all features.
 *
 * - Add lead sources for every product in the workplace.
 *
 * - Every lead sources With its Stats Ex. Leads Source Name, Leads count, Contacted Leads Count & Management pages forevery lead source Ex. View , Add & Edit.
 *
 * - Filter Search to go through every table data.
 *
 * - manage every lead source from the Edit Widget page.
 *
 * - View Widget lead source from the view Widget page.
 *
 * - Add Widget lead source from the Add Widget page.
 *
 * <p><img src="images/users/lead_sources/users-lead_sources-view.png" width="100%"></p>
 *
 * @authenticated
 *
 */
class SourceController extends Controller
{
    /**
     * Single Lead Source Info View Page
     *
     * Page Group To manage Single Lead Sources For The Manager Control Panel And Give him full access for its all features.
     *
     * - Add lead sources for every product in the workplace.
     * - Every lead sources With its Stats Ex. Leads Source Name, Leads count, Contacted Leads Count & Management pages forevery lead source Ex. View , Add & Edit.
     * - Filter Search to go through every table data.
     * - Add Widget lead source from the Add Widget page.
     * - View Widget lead source from the view Widget page.
     * - manage every lead source from the Edit Widget page.
     * <p><img src="images/users/lead_sources/users-lead_sources-view.png" width="100%"></p>
     *
     * @authenticated
     *
     * @response {
     * "id":1,
     * "workplace_id":7,
     * "user_id":2,
     * "name":"demo",
     * "country_id":1,
     * "website":"https://demo.com",
     * "widget_type":"icon",
     * "alignment":"right",
     * "primary":"#a83434",
     * "secondary":"#ffffff",
     * "icon_type":"mdi mdi-headset fa-fw",
     * "bubble":"on",
     * "bubble_line_1":"Want to talk to an expert?",
     * "bubble_line_2":"Our Team is 60 Second Away From You!",
     * "bubble_bg_color":"#000000",
     * "bubble_text_color":"#ffffff",
     * "text_text":"Talk to an expert!",
     * "text_round":10,
     * "custom_lable_1":"phone",
     * "custom_lable_2":"age",
     * "created_at":"2020-02-14 23:08:32",
     * "updated_at":"2020-06-21 07:21:07"
     * }
     */
    public function index()
    {
        $workplace_id = session('workplace')->id;
        $query['workplace'] = Workplace::with('users')->where('id', $workplace_id)->first();
        $query['data'] = Source::where('workplace_id', $workplace_id)->get();
        // dd($query['data']);
        return view('sources.index', $query);
    }
    /**
     * Lead Source Create Page
     *
     * Is An Control Panel Manager Page That Creates Lead Source To Manage It later on the site by the manager and his team.
     *
     * <p><img src="images/users/lead_sources/users-lead_sources-create.png" width="100%"></p>
     * <p><img src="images/users/lead_sources/users-lead_sources-create1.png" width="100%"></p>
     * <p><img src="images/users/lead_sources/users-lead_sources-create2.png" width="100%"></p>
     *
     * @authenticated
     *
     * @bodyParam  workplace_id string required The workplace_id selected to add lead source to workplace. Example: 7
     * @bodyParam  name string required The name of the lead source. Example: demo
     * @bodyParam  website string required The website of the lead source. Example: https://demo.com
     * @bodyParam  widget_type string The widget_type selected to icon Widget. Example: icon
     * @bodyParam  alignment string The alignment selected to right Widget. Example: right
     * @bodyParam  primary string The primary Pick to color to Widget. Example: #a83434
     * @bodyParam  secondary string The secondary Pick to color to Widget. Example: #ffffff
     * @bodyParam  icon_type string The icon_type style to Widget. Example: mdi mdi-headset fa-fw
     * @bodyParam  bubble string The bubble selected to on Widget. Example: on
     * @bodyParam  bubble_line_1 string The bubble_line_1 typed to on Widget. Example: Want to talk to an expert?
     * @bodyParam  bubble_line_2 string The bubble_line_2 typed to on Widget. Example: Our Team is 60 Second Away From You!
     * @bodyParam  bubble_bg_color string The bubble_bg_color Pick to color to Widget. Example: #000000
     * @bodyParam  bubble_text_color string The bubble_text_color Pick to color to Widget. Example: #ffffff
     * @bodyParam  text_text string The text_text typed to on Widget. Example: Talk to an expert!
     * @bodyParam  text_round string The text_round selected to on Widget. Example: 10
     * @bodyParam  custom_lable_1 string The custom_lable_1 typed to on Widget. Example: phone
     * @bodyParam  custom_lable_2 string The custom_lable_2 typed to on Widget. Example: age
     *
     *
     * @response  {
     * "success":"Added Successfully"
     * }
     */
    public function create()
    {
        $workplace_id = session('workplace')->id;
        $query['products'] = Product::with('users')->where('workplace_id', $workplace_id)->get();
        $query['workplace'] = Workplace::with('users')->where('id', $workplace_id)->first();
        // dd($query['products']);
        return view('sources.add', $query);
    }
    /**
     * Lead Source Store Data
     *
     * Is An Control Panel Manager Data Request That Stores Lead Sources Data To Database.
     *
     * <p><img src="images/users/added-successfully.png" width="100%"></p>
     *
     * @authenticated
     *
     * @bodyParam  workplace_id string required The workplace_id selected to add lead source to workplace. Example: 7
     * @bodyParam  name string required The name of the lead source. Example: demo
     * @bodyParam  website string required The website of the lead source. Example: https://demo.com
     * @bodyParam  widget_type string The widget_type selected to icon Widget. Example: icon
     * @bodyParam  alignment string The alignment selected to right Widget. Example: right
     * @bodyParam  primary string The primary Pick to color to Widget. Example: #a83434
     * @bodyParam  secondary string The secondary Pick to color to Widget. Example: #ffffff
     * @bodyParam  icon_type string The icon_type style to Widget. Example: mdi mdi-headset fa-fw
     * @bodyParam  bubble string The bubble selected to on Widget. Example: on
     * @bodyParam  bubble_line_1 string The bubble_line_1 typed to on Widget. Example: Want to talk to an expert?
     * @bodyParam  bubble_line_2 string The bubble_line_2 typed to on Widget. Example: Our Team is 60 Second Away From You!
     * @bodyParam  bubble_bg_color string The bubble_bg_color Pick to color to Widget. Example: #000000
     * @bodyParam  bubble_text_color string The bubble_text_color Pick to color to Widget. Example: #ffffff
     * @bodyParam  text_text string The text_text typed to on Widget. Example: Talk to an expert!
     * @bodyParam  text_round string The text_round selected to on Widget. Example: 10
     * @bodyParam  custom_lable_1 string The custom_lable_1 typed to on Widget. Example: phone
     * @bodyParam  custom_lable_2 string The custom_lable_2 typed to on Widget. Example: age
     *
     * @response  {
     * "success":"Added Successfully"
     * }
     *
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $product = Source::create($data);

        return redirect('sources')->with('success', 'Added Successfully');
    }

    /**
     * Lead Source Edit Page
     *
     * Is An Control Panel Manager Page That Edits Lead Source To Manage It later on the site by the manager and his team.
     *
     * <p><img src="images/users/lead_sources/users-lead_sources-create.png" width="100%"></p>
     * <p><img src="images/users/lead_sources/users-lead_sources-create1.png" width="100%"></p>
     * <p><img src="images/users/lead_sources/users-lead_sources-create2.png" width="100%"></p>
     *
     * @authenticated
     *
     * @bodyParam  workplace_id string required The workplace_id selected to add lead source to workplace. Example: 7
     * @bodyParam  name string required The name of the lead source. Example: demo
     * @bodyParam  website string required The website of the lead source. Example: https://demo.com
     * @bodyParam  widget_type string The widget_type selected to icon Widget. Example: icon
     * @bodyParam  alignment string The alignment selected to right Widget. Example: right
     * @bodyParam  primary string The primary Pick to color to Widget. Example: #a83434
     * @bodyParam  secondary string The secondary Pick to color to Widget. Example: #ffffff
     * @bodyParam  icon_type string The icon_type style to Widget. Example: mdi mdi-headset fa-fw
     * @bodyParam  bubble string The bubble selected to on Widget. Example: on
     * @bodyParam  bubble_line_1 string The bubble_line_1 typed to on Widget. Example: Want to talk to an expert?
     * @bodyParam  bubble_line_2 string The bubble_line_2 typed to on Widget. Example: Our Team is 60 Second Away From You!
     * @bodyParam  bubble_bg_color string The bubble_bg_color Pick to color to Widget. Example: #000000
     * @bodyParam  bubble_text_color string The bubble_text_color Pick to color to Widget. Example: #ffffff
     * @bodyParam  text_text string The text_text typed to on Widget. Example: Talk to an expert!
     * @bodyParam  text_round string The text_round selected to on Widget. Example: 10
     * @bodyParam  custom_lable_1 string The custom_lable_1 typed to on Widget. Example: phone
     * @bodyParam  custom_lable_2 string The custom_lable_2 typed to on Widget. Example: age
     *
     *
     * @response  {
     * "success":"Edited Successfully"
     * }
     */
    public function edit(Source $source)
    {
        $query['products'] = Product::with('users', 'workplace')->where('workplace_id', $source->workplace_id)->get();
        $query['data'] = $source;
        $custom_source_arr = array_diff($source->fields, array('name', 'email'));
        $query['custom_source'] = array_splice($custom_source_arr, 0);
        // dd($query['custom_source']);
        return view('sources.edit', $query);
    }

    /**
     * Lead Source Update Data
     *
     * Is An Control Panel Manager Data Request That Updates Lead Sources Data To Database.
     *
     * <p><img src="images/users/added-successfully.png" width="100%"></p>
     *
     * @authenticated
     *
     * @bodyParam  workplace_id string required The workplace_id selected to add lead source to workplace. Example: 7
     * @bodyParam  name string required The name of the lead source. Example: demo
     * @bodyParam  website string required The website of the lead source. Example: https://demo.com
     * @bodyParam  widget_type string The widget_type selected to icon Widget. Example: icon
     * @bodyParam  alignment string The alignment selected to right Widget. Example: right
     * @bodyParam  primary string The primary Pick to color to Widget. Example: #a83434
     * @bodyParam  secondary string The secondary Pick to color to Widget. Example: #ffffff
     * @bodyParam  icon_type string The icon_type style to Widget. Example: mdi mdi-headset fa-fw
     * @bodyParam  bubble string The bubble selected to on Widget. Example: on
     * @bodyParam  bubble_line_1 string The bubble_line_1 typed to on Widget. Example: Want to talk to an expert?
     * @bodyParam  bubble_line_2 string The bubble_line_2 typed to on Widget. Example: Our Team is 60 Second Away From You!
     * @bodyParam  bubble_bg_color string The bubble_bg_color Pick to color to Widget. Example: #000000
     * @bodyParam  bubble_text_color string The bubble_text_color Pick to color to Widget. Example: #ffffff
     * @bodyParam  text_text string The text_text typed to on Widget. Example: Talk to an expert!
     * @bodyParam  text_round string The text_round selected to on Widget. Example: 10
     * @bodyParam  custom_lable_1 string The custom_lable_1 typed to on Widget. Example: phone
     * @bodyParam  custom_lable_2 string The custom_lable_2 typed to on Widget. Example: age
     *
     * @response  {
     * "success":"Edited Successfully"
     * }
     *
     */
    public function update(Request $request, Source $source)
    {
        $source->update($request->all());
        return redirect('sources')->with('success', 'Edited Successfully');
    }
}
