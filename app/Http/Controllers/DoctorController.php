<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use App\Doctor;

class DoctorController extends Controller
{
    public function doctorList(){
        $data = Doctor::all();
        return view('client.doctorList')->with('data', $data);
    }
    public function list(){
        $data = Doctor::all();
        return view('server.doctors-list')->with('data', $data);
    }
    public function add(){
        return view('server.doctors-add');
    }
    public function edit($id){
        $data = Doctor::find($id);
        return view('server.doctors-add')->with('data', $data);
    }
    public function delete($id){
        $data = Doctor::where('id', $id)->delete();
        Session::flash('message', 'Deleted Successful.');
        Session::flash('type', 'alert-success');
        return back();
    }
    public function store(Request $request)
    {
        // Form validation
        $validator = Validator::make($request->all(), [
            'firstName' => 'required|max:25',
            'lastName' => 'max:25',
            'specialist' => 'required|max:60',
            'contact' => 'max:15',
            'degree' => 'required|max:100',
            'came_from' => 'max:100'
        ]);
        if ($validator->fails()) {
            return redirect('doctors/add')
                        ->withErrors($validator);
        }
        // Create Schema
        $doctor = new Doctor;
        $doctor->first_name = $request->firstName;
        $doctor->last_name = $request->lastName;
        $doctor->specialist = $request->specialist;
        $doctor->contact = $request->contact;
        $doctor->degree = $request->degree;
        $doctor->from = $request->came_from;
        $doctor->description = $request->description;

        // Store Data
        if($request->input('id')){
            $postData = [
                'first_name' => $request->firstName,
                'last_name' => $request->lastName,
                'specialist' => $request->specialist,
                'contact' => $request->contact,
                'degree' => $request->degree,
                'from' => $request->came_from,
                'description' => $request->description,
            ];
            $result = Doctor::where('id', $request->input('id'))->update($postData);
            Session::flash('message', 'Update Successful.');
            Session::flash('type', 'alert-success');
            return back();
        }else{
            $result = $doctor->save();
            Session::flash('message', 'Created Successful.');
            Session::flash('type', 'alert-success');
            return back();
        }
        if(!$result){
            Session::flash('message', 'Server to busy!');
            Session::flash('type', 'alert-error');
            return back();
        }
    }
}
