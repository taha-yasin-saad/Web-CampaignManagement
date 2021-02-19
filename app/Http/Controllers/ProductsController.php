<?php

namespace App\Http\Controllers;

use App\Log;
use App\Workplace;
use App\Product;
use App\User;
use App\UserProduct;
use App\WorkplaceUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

/**
 * @group 2.4 Users WorkPlace Products Management
 *
 * Page Group To manage Single WorkPlaces Individually For The Manager Control Panel And Give him full access for its all features.
 *
 * - add product for workplace.
 *
 * - Add Team members to the team that is working in the product.
 *
 * - manage team behavior From changing the role for every person on the team in the product Ex. owner , Sales Agent.
 *
 * - add lead sources for every product in the workplace.
 *
 * - Every Product In the WorkPlace With its Stats Ex. Leads Source Name, Leads count, Contacted Leads Count & Team Names That Assigned to this Product.
 *
 * - Filter Search to go through every table data.
 *
 * - manage every lead source from the Edit page.
 *
 * <p><img src="images/users/products/users-Products-view.png" width="100%"></p>
 *
 * @authenticated
 *
 */
class ProductsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Single Workplace Info View Page
     *
     * Is An Control Panel Manager Workplace Page That Views Workplace Products Info.
     *
     *
     * - View Products For the Workplace.
     *
     * - View The Team That Works For the Workplace At every Product Individually.
     *
     * - Manage The Team That Works For the Workplace At every Product Individually.
     *
     * - View Products Count For the Single Workplace.
     *
     * - Manage Single every Product Individually At The Workplace.
     *
     * - Every Product In the WorkPlace With its Stats Ex. Leads Source Name, Leads count, Contacted Leads Count & Team Names That Assigned to this Product.
     *
     * - Filter Search to go through every table data.
     *
     * <p><img src="images/users/products/users-Products-view.png" width="100%"></p>
     *
     * @response {
     * "id":1,
     * "admin_id":7,
     * "title":"Sherkat",
     * "created_at":"2020-02-14 23:08:32",
     * "updated_at":"2020-06-21 07:21:07",
     * "timezone":"Africa\/Cairo",
     * "website":null,
     * "startday":"Monday",
     * "products_count":5,
     * "users_count":5,
     * "leads_count":12
     * }
     */

    public function index($workplace_id)
    {
        $query['workplace'] = Workplace::with('users')->where('id', $workplace_id)->first();

        Session::put('workplace', $query['workplace']);
        $query['data'] = Product::with('users', 'source', 'source.lead')->where('workplace_id', $workplace_id)->get();
        foreach ($query['data'] as $value) {
            $selected_ids = array();
            foreach ($value->users as $val) {
                array_push($selected_ids, $val->id);
            }
            $value->selected_ids = $selected_ids;
        }
        // dd($query['data']);
        return view('products.index', $query);
    }
    /**
     * Product Create Page
     *
     * Is An Control Panel Manager Page That Creates Products To Manage It later on the site by the manager and his team.
     *
     * <p><img src="images/users/products/users-Products-create.png" width="100%"></p>
     *
     * @authenticated
     *
     * @bodyParam  title string required The title of the Product. Example: demo
     * @bodyParam  users string required The users selected to The Team Managing the product. Example: demo,test
     *
     * @response  {
     * "success":"Added Successfully"
     * }
     *
     */
    public function create($workplace_id)
    {
        $query['workplace'] = Workplace::where('id', $workplace_id)->first();
        return view('products.add', $query);
    }
    /**
     * Product Store Data
     *
     * Is An Control Panel Manager Data Request That Stores Products Data To Database.
     *
     * <p><img src="images/users/added-successfully.png" width="100%"></p>
     *
     * @authenticated
     *
     * @bodyParam  title string required The title of the Product. Example: demo
     * @bodyParam  users string required The users selected to The Team Managing the product. Example: demo,test
     *
     * @response  {
     * "success":"Added Successfully"
     * }
     *
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'workplace_id' => 'required'
        ]);
        $product = Product::create($data);
        // $save = new UserProduct;
        // $save->user_id = Auth::user()->id;
        // $save->product_id = $product->id;
        // $save->save();

        $product->users()->attach($request->users);

        return redirect($request->workplace_id . '/products')->with('success', 'Added Successfully');
    }

    /**
     * Single Product Info View Page
     *
     * Is An Control Panel Page For Single Product That Views Product Data Info.
     *
     * - View Members For The Team that is working in the product with info data of them Ex. Name,Email & Phone.
     *
     *
     * <p><img src="images/users/products/users-Products-single_product.png" width="100%"></p>
     *
     * @authenticated
     *
     * @response {
     * "id":9,
     * "name":"test",
     * "email":"test@demo.com",
     * "phone":"0123456789",
     * "created_at":"2020-02-14 23:08:32",
     * "updated_at":"2020-06-21 07:21:07"
     * }
     *
     */
    public function show(Product $product)
    {

        $query['product'] = $product;
        $query['data'] = Product::where('id', $product->id)->with('users', 'workplace')->first();
        return view('products.single', $query);
    }

    /**
     * Product Edit Page
     *
     * Is An Control Panel Manager Page That Edits Products To Manage It later on the site by the manager and his team.
     *
     * <p><img src="images/users/products/users-Products-edit.png" width="100%"></p>
     *
     * @authenticated
     *
     * @bodyParam  title string required The title of the Product. Example: Demo
     *
     * @response  {
     * "success":"Updated Successfully"
     * }
     *
     */

    public function edit(Product $product)
    {
        $query['data'] = $product;
        $query['workplace'] = Workplace::where('id', $product->workplace_id)->first();
        return view('products.add', $query);
    }

    /**
     * Product Update Data
     *
     * Is An Control Panel Manager Data Request That Updates Products Data To Database.
     *
     * <p><img src="images/users/products/users-Products-edit.png" width="100%"></p>
     * <p><img src="images/users/updated-successfully.png" width="100%"></p>
     *
     * @authenticated
     *
     * @bodyParam  title string required The title of the Product. Example: Demo
     *
     * @response  {
     * "success":"Updated Successfully"
     * }
     *
     */

    public function update(Request $request, Product $product)
    {
        $product->update([
            'title' => $request->title
        ]);
        return redirect('workplace/' . $request->workplace_id)->with('success', 'Edited Successfully');
    }

    /**
     * Product Delete Data
     *
     * Is An Control Panel Product Data Request That Delete Products Data From Database .
     *
     * <p><img src="images/users/deleted-successfully.png" width="100%"></p>
     *
     * @authenticated
     *
     * @response  {
     * "success":"Deleted Successfully"
     * }
     *
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return back()->with('success', 'Deleted Successfully');
    }
    /**
     * Product Invite Member Widget
     *
     * Is An Control Panel Product Data Widget That Invites Members To the team of the product To manage it later on .
     *
     * <p><img src="images/users/products/users-Products-invite_member.png" width="100%"></p>
     * <p><img src="images/users/products/users-Products-invite_member1.png" width="100%"></p>
     *
     * @authenticated
     *
     * @response  {
     * "success":"Member added Successfully"
     * }
     *
     */
    public function choose_members(Request $request)
    {

        $product = Product::find($request->product_id);

        $product->users()->sync($request->users);

        return back()->with('success', 'Member added Successfully');
    }
    /**
     * Product Invite Member Request
     *
     * Is An Control Panel Product Data Request That Invites Members To the team of the product To manage it later on .
     *
     * <p><img src="images/users/products/users-Products-invite_member.png" width="100%"></p>
     * <p><img src="images/users/products/users-Products-invite_member1.png" width="100%"></p>
     *
     * @authenticated
     *
     * @response  {
     * "success":"Member added Successfully"
     * }
     *
     */
    public function invite_member(Request $request)
    {

        //check if user can be existed
        $user = User::where('email', $request->email)->first();
        //save in Users if new Email
        if (!$user) {
            $user = new User;
            $user->email = $request->email;
            $user->save();
        }
        //save in UserProduct
        $invite = new UserProduct;
        $invite->user_id = $user->id;
        $invite->product_id = $request->product_id;
        // $invite->workplace_id = $request->workplace_id;
        $invite->save();

        $save = new WorkplaceUser;
        $save->workplace_id = $invite->workplace_id;
        $save->user_id = $invite->user_id;
        $save->status = 1;
        $save->save();



        //send invitation email
        $data['subject'] = 'CLOSOR Invitation';
        $data['email'] = $request->email;
        Log::create([
            'subject' => 'CLOSOR Invitation',
            'email' => $request->email
        ]);
        \Illuminate\Support\Facades\Mail::send('auth.email_invite', $data, function ($message) use ($data) {
            $message->from('support@closor.com', 'CLOSOR')->to($data['email'], 'CLOSOR')->subject($data['subject']);
        });
        return back()->with('success', 'Email invited Successfully');
    }

    /**
     * Invite Member To certain product
     *
     * Is An Control Panel Product Data Request That Invites Members To the team of the product To manage it later on .
     *
     * <p><img src="images/users/products/users-Products-add_product_to_user1.png" width="100%"></p>
     *
     * @authenticated
     *
     * @response  {
     * "success":"Product has been Added successfully"
     * }
     *
     */

    public function add_product_to_user(Request $request)
    {

        $user = User::find($request->user_id);
        $old_products = $user->products_workplace($request->workplace_id)->pluck('products.id')->toArray();
        $user->products()->detach($old_products);
        $user->products()->attach($request->products);


        return back()->with('success', 'Product has been Added successfully');
    }
}
