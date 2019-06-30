@extends('layouts.app')

@section('content')
<div class="card card border-left-primary shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Order</h6>
                </div>
<div class="card-body">
 <form method="POST" action="{{route('orders.store')}}">
     <div class="col-2">
        <label for="price">Quantity</label>
        <input class="form-control" type="number" value="" onKeyDown="return false" name="quantity" id="QTY" min="1" max="{{$product->stock}}" onKeyUp="multiply()" onMouseUp="multiply()"/>
    </div>
     <div class="col-2">
        <label for="price">Price</label>
        <input class="form-control" type="text" name="rate" id="PRICE" value="{{$product->price}}" readonly/>
    </div>
     <div class="col-2">
        <label for="price">Total</label>
        <input class="form-control" type="text" name="total" id="TOTAL" readonly/>
    </div>

    <div class="col-2">
    <label for="payment_option">Payment Method</label>
        <select class="form-control" name="payment_option">
            <option value="esewa">Esewa</option>
            <option value="khalti">Khalti</option>
            <option value="paypal">Paypal</option>
        </select>
        </div>
        <input class="form-control" type="text" value="{{$product->id}}" name="product_id" hidden/>
    @csrf

    <button class="btn btn-primary btn-sm" type="submit">Order</button>
 </form>
 </div>
 {{-- <tr>
  <td>Bruschetta con Crema di Agliotoa</td>
  <td><input type="text" value="" name="QTY" id="QTY" onKeyUp="multiply()"/></td>
  <td><input type="text" name="PPRICE" id="PPRICE" value="8" /></td>
  <td><input type="text" name="TOTAL" id="TOTAL" /></td>
</tr> --}}
 </div>

 <script>
 function multiply()
{
    a = (document.getElementById('QTY').value);
    b = Number(document.getElementById('PRICE').value);
    c = a * b;

    document.getElementById('TOTAL').value = c;
}
 </script>
@endsection