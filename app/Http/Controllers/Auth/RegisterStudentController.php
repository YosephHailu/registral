<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Stream;
use App\Providers\RouteServiceProvider;
use App\Models\Student;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\RedirectsUsers;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegisterStudentController extends Controller
{
    use RedirectsUsers;

    /**
     * Where to redirect students after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:student');
    }

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\View\View
     */
    public function showRegistrationForm()
    {
        $streams = Stream::all();
        return view('auth.register')->with('streams', $streams);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'stream_id' => ['required', 'exists:streams,id'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:students'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new student instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\student
     */
    protected function create(array $data)
    {
        $student = Student::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'stream_id' => $data['stream_id'],
            'password' => Hash::make($data['password']),
        ]);

        $student->identification_no = sprintf('%05d', $student->id);
        $student->save();

        return $student;
    }
    
    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\JsonResponse
     */
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($student = $this->create($request->all())));

        if ($response = $this->registered($request, $student)) {
            return $response;
        }

        return $request->wantsJson()
                    ? new JsonResponse([], 201)
                    : redirect($this->redirectPath());
    }

    /**
     * The user has been registered.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
     */
    protected function registered(Request $request, $user)
    {
        //
    }
    
}
