<?php

namespace App\Http\Controllers;

use App\Models\Sell;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class SellController extends Controller
{

    //home page
    public function home(){
        $selling = Sell::where('user_id',Auth::user()->id)
                         ->get();
        $totalProfit = 0;
        foreach($selling as $c){
        $totalProfit += $c->profit;
        }
        $totalPrice = 0;
        foreach($selling as $c){
        $totalPrice += $c->sellPrice;
        }
        return view('home',compact('selling','totalPrice','totalProfit'));
    }

    //create
    public function create(Request $request){
        $this ->sellValidationCheck($request);
        $data = $this->requestInfo($request);
        Sell::create($data);
        return redirect()->route('sell#home');
    }

    //edit page
    public function editPage($id){
        $sell = Sell::where('id',$id)->first();
        return view('edit',compact('sell'));
    }

    public function delete($id){
        Sell::where('id',$id)->delete();
        return back();
    }


    //update
    public function update(Request $request){
        $this ->sellValidationCheck($request);
        $data = $this->requestInfo($request);
        Sell::where('id',$request->sellId)->update($data);
        return redirect()->route('sell#home');
    }


    private function requestInfo($request){
        return [
            'user_id' => $request->user_id,
            'accId' => $request->accId,
            'accDate' => $request->accDate,
            'accName' => $request->accName,
            'accType' => $request->accType,
            'takePrice' => $request->takePrice,
            'sellPrice' => $request->sellPrice,
            'profit' => $request->profit,
        ];
    }
        private function sellValidationCheck($request){
            Validator::make($request->all(),[
                'accId' => 'required'.$request->sellId,
                'accDate' => 'required',
                'accName' => 'required',
                'accType' => 'required',
                'takePrice' => 'required',
                'sellPrice' => 'required',
                'profit' => 'required',
           ])->validate();
        }
    }
