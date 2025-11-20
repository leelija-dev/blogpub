<?php
namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserMailHistory;

class MailController extends Controller
{
public function mailHistory($id)
{
    // Decrypt the incoming ID
    $userId = decrypt($id);

    // Fetch mail history for the user with pagination
    $mails = UserMailHistory::where('user_id', $userId)->orderBy('created_at', 'desc')->paginate(10);

    // Pass to the view
    return view('web.mail-history', compact('mails'));
}
public function viewMail($id){
    $id=decrypt($id);
    $mail=UserMailHistory::find($id);
    return view('web.view-mail',compact('mail'));
}
}
