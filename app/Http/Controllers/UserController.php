<?php
namespace App\Http\Controllers;
use App\Helper\JWTToken;
use App\Helper\ResponseHelper;
use App\Mail\OTPMail;
use App\Models\User;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{

    public function LoginPage()
    {
        return view('pages.login-page');
    }

    public function VerifyPage()
    {
        return view('pages.verify-page');
    }


    public function UserLogin(Request $request):JsonResponse
    {
        try {
            $UserEmail=$request->UserEmail;
            $OTP=rand (100000,999999);
            $details = ['code' => $OTP];
            Mail::to($UserEmail)->send(new OTPMail($details));
            User::updateOrCreate(['email' => $UserEmail], ['email'=>$UserEmail,'otp'=>$OTP]);
            return ResponseHelper::Out('success',"A 6 Digit OTP has been send to your email address",200);
        } catch (Exception $e) {
            return ResponseHelper::Out('fail',$e,200);
        }
    }


    public function VerifyLogin(Request $request):JsonResponse
    {
            $UserEmail=$request->UserEmail;
            $OTP=$request->OTP;

            $verification= User::where('email',$UserEmail)->where('otp',$OTP)->first();

            if($verification){
                  User::where('email',$UserEmail)->where('otp',$OTP)->update(['otp'=>'0']);
                  $user = User::where('email', $UserEmail)->first();
                $userRole = $user->role;
                $token=JWTToken::CreateToken($UserEmail,$verification->id, $userRole);
                return  ResponseHelper::Out('success',"",200)->cookie('token',$token,60*24*30);
            }
            else{
                return  ResponseHelper::Out('fail',null,401);
            }
    }

    function UserLogout(){
        return redirect('/')->cookie('token','',-1);
    }

    public function index() {
        $data = [];
        $users = User::latest('id')->paginate();
    $data['users'] = $users;
        return view('admin.layouts.userlist', $data);
    }
    public function edit($id) {
        $user = User::findOrFail($id);
        return view('admin.layouts.edit-user', compact('user'));
    }

    public function update(Request $request, $id) {
        $request->validate([
            'email' => 'required|email|unique:users,email,' . $id
        ]);

        $user = User::findOrFail($id);
        $user->email = $request->email;
        $user->save();

        return redirect()->route('user.list')->with('success', 'User email updated successfully!');
    }

}

