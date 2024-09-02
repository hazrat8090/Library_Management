<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Borrower;
use App\Models\updateBorrower;

class BorrowerController extends Controller
{
    public function showBorrower()
    {
        return view("backend.add-borrower");
    }

    public function addBorrower(Request $request)
    {
        $request->validate([
            'bookId' => 'required|integer',
            'stdId' => 'required|integer',
            'librnId' => 'required|integer',
        ]);

        $borrower = new Borrower();
        $borrower->bookId = $request->input('bookId');
        $borrower->studentId = $request->input('stdId');
        $borrower->librarianId = $request->input('librnId');
        $borrower->save();

        // Redirect or return response
        return redirect()->back()->with('success', 'Borrower added successfully!');
    }

    public function borrowerList()
    {
        $borrowerList = Borrower::all();
        return view('backend.borrower-list', ['borrowerList' => $borrowerList]);
    }

    public function updateReturn()
    {
        return view('backend.update-return');
    }

    public function updateBorrwer(Request $request)
    {
        $validatedData = $request->validate([
            'borrowerId' => 'required|integer',
        ]);

        $updateBorrower = new UpdateBorrower;
        $updateBorrower->borrowerId = $validatedData['borrowerId'];
        $updateBorrower->save();

        return redirect()->back()->with('success', 'Borrower status updated successfully!');
    }
}
