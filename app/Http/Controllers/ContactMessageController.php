<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

use App\Models\ContactMessage;
class ContactMessageController extends Controller
{

    private $rules = [
        'from_name' => 'required|max:255',
        'from_email' => 'required|email|max:255',
        'topic' => 'required|max:255',
        'message' => 'required|max:255'
    ];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contactMessages = ContactMessage::all();
        return view('pages.contact-message.index', compact([
            'contactMessages'
        ]));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.contact-message.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), $this->rules);

        if ($validator->fails()) 
        {
            Session::flash('error-message', 'Something went wrong!'); 
            return redirect()->back()->withErrors($validator)->withInput();
        }

        try 
        {
            ContactMessage::create($request->all());
            Session::flash('success-message', 'Thank you!'); 
        } 
        catch (\Exception $e)
        {
            Session::flash('error-message', 'Something went wrong!'); 
            return redirect()->back();
        }
        return redirect()->route('contact-message.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('pages.contact-message.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('pages.contact-message.edit');
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
        $validator = Validator::make($request->all(), $this->rules);

        if ($validator->fails()) 
        {
            Session::flash('error-message', 'Something went wrong!'); 
            return redirect()->back()->withErrors($validator)->withInput();
        }
        
        $contactMessage = ContactMessage::findOrfail($id);
        try 
        {
            $contactMessage->update($request->all());
            Session::flash('success-message', 'Success!'); 
        } 
        catch (\Exception $e)
        {
            Session::flash('error-message', 'Something went wrong!'); 
            return redirect()->back();
        }
        return redirect()->route('contact-message.edit', ['id' => $contactMessage->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
