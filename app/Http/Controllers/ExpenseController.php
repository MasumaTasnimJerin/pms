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
    $request->validate([
    'name'=> 'required',
    'amount' => 'required',
  ]);
    Expense::create([
      'name'=>$request->name,
       'amount'=>$request->amount,
    ]);
    return redirect()->route('add_expense')->with('message',' Expense Created Successfully.');
  }
  //Expense List
  public function expense_list()
  {

    $expenses = Expense::all();
      return view('expense.expense_list',compact('expenses'));
  }
  //Expense Update
  public function edit($id)
  {

    $expense = Expense::find($id);
      return view('expense.expense_update',compact('expense'));
  }
  public function update(Request $request,$id)
  {
    $expense = Expense::find($id);
      $expense->update([
          'name' =>$request->name,
          'amount' =>$request->amount,

      ]);
      return redirect()->route('expense_list')->with('message',' Expense Updated Successfully.');

  }
  //Expense Delete
  public function delete($id){
    $expenseDelete = Expense::find($id);
    $expenseDelete->delete();
    return redirect()->route('expense_list')->with('message','Expense Deleted Successfully.');
  }
}
