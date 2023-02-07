<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        return view('students.index',['students' => Student::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {

        $validated = $request->validate([
            'matricule' => 'required|max:15',
            'first_name' => 'required|max:15',
            'last_name' => 'required|max:15',
            'email' => 'required|email',
            'phone' => 'required|max:15',
        ]/*,
            [
                'matricule.required' => 'Le Matricule est obligatoire !',
                'first_name.required' => 'Veuillez renseigner un prénom svp',
                'last_name.required' => 'Le Nom est obligatoire',
                'email.required' => 'L\'Email est obligatoire',
                'email.email' => 'Veuillez renseigner un email valide',
                'phone.required' => 'Telephone obligatoire',

            ]*/);
      /*  return $validated;*/
      /*  Student::create([
              'matricule' => $request->get('matricule'),
              'first_name' => $request->get('prenom'),
              'last_name' => $request->get('nom'),
              'email' => $request->get('email'),
              'phone' => $request->get('tel')
          ]);*/

        return redirect()->back()->with('success','Student created successfully');
        // return response()->json(['message' => "Student created successfully"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Application|Factory|View
     */
    public function show($id)
    {
        $student = Student::find($id);

        return view('students.show',compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $student = Student::find($id);
        return view('students.edit',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        return $request->all();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();

        return response()->json(['m essage' => "Student deleted successfully"]);
    }
}
