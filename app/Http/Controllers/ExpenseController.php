<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Expense;

class ExpenseController extends Controller
{
  public function add_expense()
  {
    return view('expense.add_expense');

}
public function create_expense(Request $request)
{
  Expense::create([
    'expense'=>$request->expense,
     'amount'=>$request->amount,
  ]);
  return redirect()->route('add_expense')->with('message',' Expense Created Successfully.');
}
}
