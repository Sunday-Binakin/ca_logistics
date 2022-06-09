<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $messages = Message::latest()->get();
        return view('admin.messages', compact('messages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //        $name = $request->name;
        //        $phone = $request->phone;
        //        $email = $request->email;
        //        $subject = $request->subject;
        //        $message = $request->mseeage;

        $newMessage = new Message();
        $newMessage->name = $request->name;
        $newMessage->phone = $request->phone;
        $newMessage->email = $request->email;
        $newMessage->subject = $request->subject;
        $newMessage->message = $request->message;

        \Mail::send(new Contact($newMessage));

        Message::create(
            $request->all()
        );

        return [
            'message' => 'success'
        ];
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function show(Message $message)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function edit(Message $message, $id)
    {
        $message = Message::where('id', $id)->first();
        return view('admin.message-view', compact('message'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request->all());
        $message = Message::where('id', $id)
            ->update([
                'status' => 'Attended to'
            ]);

        if ($message) {
            alert()->success('successful')->autoclose(3000);
            return redirect()->back();
        } else {
            return 'error';
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function destroy(Message $message, $id)
    {
        $messages = Message::findOrFail($id);
        $messages->delete();
        if ($messages) {
            alert()->success('Sucess')->autoclose(3000);
            return redirect()->back();
        } else {
            alert()->error('Error');
        }
    }
}
