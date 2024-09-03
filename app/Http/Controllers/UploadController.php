<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Upload;
use Illuminate\Support\Facades\Mail;
use App\Mail\UploadAcceptedNotification;
use App\Mail\UploadDeclinedNotification;
class UploadController extends Controller
{
    public function index()
    {
        $uploads = Upload::all();
        return view('upload.index', compact('uploads'));
    }

    public function showForm()
    {
        $upload= Upload::all();
        return view('upload.index', compact('upload'));
    }

    public function store(Request $request)
{
    // Dump request data to inspect if files are being received correctly
    // dd($request->all());

    $request->validate([
        'image_path' => 'required|image|max:20480',
        'name' => 'required|string|max:255',
        'description' => 'required|string',
        'price' => 'required|numeric',
        'contact' => 'required|string|max:255',
        'amenities' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'fullname' => 'required|string|max:255',
        'id_image' => 'required|image|max:20480',
        'video_path' => 'required|mimes:mp4,mov,avi|max:204800', // Adjust maximum file size as needed
    ]);

    // Check if all required files are present in the request
    if ($request->hasFile('image_path') && $request->hasFile('id_image') && $request->hasFile('video_path')) {
        $imageName = time() . '_' . uniqid() . '.' . $request->image_path->extension();
        $idImageName = time() . '_' . uniqid() . '.' . $request->id_image->extension();
        $videoName = time() . '_' . uniqid() . '.' . $request->video_path->extension();

        // Move uploaded files to appropriate directories
        $request->image_path->move(public_path('images/uploads'), $imageName);
        $request->id_image->move(public_path('images/uploads'), $idImageName);
        $request->video_path->move(public_path('videos/uploads'), $videoName);
    } else {
        // Redirect back if any of the required files are missing
        return redirect()->back()->with('error', 'All fields are required: image_path, id_image, and video_path.');
    }

    // Create a new Upload instance
    $upload = new Upload();

    // Populate model attributes with form data
    $upload->name = $request->name;
    $upload->description = $request->description;
    $upload->price = $request->price;
    $upload->contact = $request->contact;
    $upload->amenities = $request->amenities;
    $upload->email = $request->email;
    $upload->fullname = $request->fullname;
    $upload->image_path = $imageName;
    $upload->id_image = $idImageName;
    $upload->video_path = $videoName;
    $upload->save();

    // Redirect back or to a specific route after successful upload
    return redirect()->back()->with('success', 'Upload successful!');
}


public function accept($id)
{
    $upload = Upload::findOrFail($id);
    $upload->status = 'Accepted';
    $upload->save();


    $ticketNumber = $this->generateTicketNumber();
    $message = 'Ticket number: ' . $ticketNumber . '. Your upload has been accepted.';
    Mail::to($upload->email)->send(new UploadAcceptedNotification($upload, $message));

    return redirect()->back()->with('success', 'Upload accepted successfully.');
}

public function decline($id)
{
    $upload = Upload::findOrFail($id);
    $upload->status = 'Declined';
    $upload->save();


    $ticketNumber = $this->generateTicketNumber();
    $message = 'Ticket number: ' . $ticketNumber . '. Sorry, we regret to inform you that your upload has been declined.';
    Mail::to($upload->email)->send(new UploadDeclinedNotification($upload, $message));

    return redirect()->back()->with('success', 'Upload declined successfully.');
}

private function generateTicketNumber()
{

    return 'TICKET-' . mt_rand(100000, 999999);
}
}
