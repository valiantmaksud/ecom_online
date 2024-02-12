<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // return
        $data['users'] = User::query()->where('type', 'customer')->paginate(25);

        return view('admin.users.index', $data);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        try {
            $this->updateOrCreate($request);
        } catch (\Throwable $th) {
            return redirect()->back()->withError($th->getMessage());
        }
        return redirect()->route('users.index')->withMessage('User created success !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $data['user']    = User::find($id);


        if ($request->type == 'purchase') {

            return view('admin.users.purchase-details', $data);
        }

        if ($request->type == 'subscribe') {

            return view('admin.users.subscribe-details', $data);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $this->updateOrCreate($request, $id);
        } catch (\Throwable $th) {
            return redirect()->back()->withError($th->getMessage());
        }
        return redirect()->route('users.index')->withSuccess('User updated success !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            User::find($id)->delete();
        } catch (\Throwable $th) {
            return redirect()->back()->withError($th->getMessage());
        }
        return redirect()->back()->withSuccess('User deleted success !');
    }



    private function updateOrCreate($request, $id = null)
    {
        $data =  $request->validate([
            'name'                 => 'required|string',
            'mobile'               => 'required|unique:users,mobile,' . $id,
            'password'             => 'required',
            'email'                => 'nullable',
            'state'                => 'nullable',
            'city'                 => 'nullable',
            'date_of_birth'        => 'nullable',
            'status'               => 'nullable',
        ]);

        $data['user_type']  = 'admin';
        $data['password']  = Hash::make($request->password);


        if (isset($id)) {
            unset($data['user_type']);
        }

        User::updateOrCreate([
            'id'    => $id,
        ], $data);
    }



    public function purchaseUserCourse(User $user)
    {
        $data['user']       = $user;
        $data['courses']    = CourseClass::get();


        $data['purchasedClasses'] = CourseClass::whereHas('purchases', function ($q) use ($user) {
            $q->where('purchased_by', $user->id);
        })->get();


        return view('admin.users.purchase-course', $data);
    }



    public function storePurchaseUserCourse(Request $request,  User $user)
    {
        $request->validate(['courses' => 'required']);


        foreach ($request->courses as $key => $course_id) {

            $course = CourseClass::find($course_id);

            Purchase::create([

                'date'              => date('Y-m-d'),
                'course_class_id'   => $course_id,
                'purchased_by'      => $user->id,
                'amount'            => $course->price,
                'expire_date'       => $course->limit_day,
                // 'expire_date'       => Carbon::parse(now())->addDays($course->limit_day)->format('Y-m-d'),
            ]);
        }

        $message = count($request->courses) . ' classes purchased successfully!';

        return redirect()->back()->withMessage($message);
    }
}
