<style>
    .feed-form {
        margin-top: 36px;
        margin-left: 100px;
        display: flex;
        flex-direction: column;
        width: 1300px;
    }

    .feed-form input {
        height: 54px;
        border-radius: 5px;
        background: white;
        margin-bottom: 15px;
        border: 1px solid black;
        padding: 0 20px;
        font-weight: bold;
        font-size: 14px;
        color: #4B4B4B;
    }

    .feed-form label {
        height: 30px;
        font-size: 20px;
    }

    .feed-form select {
        height: 50px;
        font-weight: bold;
        font-size: 14px;
        color: #4B4B4B;
    }

    .button_submit:hover,
    .feed-form input:hover {
        transform: scale(1.009);
        box-shadow: 0px 0px 3px 0px #212529;
    }

    .button_submit {
        width: 100%;
        height: 54px;
        font-size: 14px;
        color: white;
        background: red;
        border-radius: 5px;
        border: none;
        font-weight: 500;
        text-transform: uppercase;
    }

    .order {
        margin-left: 100px;
    }
</style>
<link rel="stylesheet" href="/css/bootstrap.min.css">


<h2 style="margin-left: 100px;">Information of order {{ $order->id}} </h2>
<section class="section_form">
    <form id="consultation-form" class="feed-form" action="#" method="post">
        <label for="">Date</label>
        <input placeholder="Datetime" type="text" name="date" value=" {{ $order->updated_time}}">
        <label>ID</label>
        <input placeholder="ID" type="text" value=" {{ $order->id_customer }}">
        <label for="">Name</label>
        <input name="name" placeholder="Name" value=" {{ $order->name }}">
        <label for="">Phone</label>
        <input name="phone" placeholder="Phone" type="text" value=" {{ $order->phone}}">
        <label for="">Address</label>
        <input name="address" placeholder="Address" type="text" value=" {{ $order->address}}">
        <label for="">Payment</label>
        <select name="payment">
            <option value=" {{ $order->id_payment}}"> {{ $order->name_payment }}</option>
            <option value="0">--------------</option>

            @foreach($payment as $pay)

            <option value=" {{ $pay->id_payment }}"> {{ $pay->name_payment }}</option>
            @endforeach
        </select>
        <br>
        <label for="">Status</label>

        <select name="status">
            <option value="0" {{ $order->status == 0 ? 'selected' : '' }}>Mới tạo</option>
            <option value="1" {{ $order->status  == 1 ? "selected" : "" }}>Vận chuyển</option>
            <option value="2" {{ $order->status  == 2 ? "selected" : "" }}>Hoàn thành</option>
            <option value="3" {{ $order->status  == 3 ? "selected" : "" }}>Đã hủy</option>
        </select>
        <br>
        <label for="">Note</label>

        <textarea placeholder="Enter your note" name="note" id="note">{{ $order->note }}</textarea>
        <button class="button_submit" name="submit" type="submit">SUBMIT</button>
    </form>
</section>

<div class="order">
    <h2>Order detail</h2>
    <table class="table table-hover">
        <tr>
            <th>STT</th>
            <th>Product</th>
            <th>Quantity</th>
            <th>Size</th>
            <th>Price</th>
            <th>Total</th>
        </tr>
        @php
        $i = 1;
        @endphp

        @foreach($order_detail as $od)
        <tr>
            <td>{{ $i++ }}</td>
            <td>{{ $od->name }}</td>
            <td>{{ $od->quantity }}</td>
            <td>{{ $od->size }}</td>
            <td>{{ $od->price }}$</td>
            <td>{{ $od->quantity * $od->price }}$</td>
        </tr>
        @endforeach
    </table>
</div>


</body>

</html>