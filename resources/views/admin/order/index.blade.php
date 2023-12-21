@extends('admin.master.main')
@section('content')

<style>
  h2 {
    margin-left: 100px;
    font-family: 'Times New Roman', Times, serif;
  }

  body {
    background-image: url(/img/staff_bg.jpg);
    background-size: 100% 790px;
    background-repeat: no-repeat;
    width: 100%;
    height: 790px;
  }

  .input {
    max-width: 190px;
    background-color: #f5f5f5;
    color: #242424;
    padding: .15rem .5rem;
    min-height: 30px;
    border-radius: 4px;
    outline: none;
    border: none;
    line-height: 1.15;
    box-shadow: 0px 10px 20px -18px;
  }

  input:focus {
    border-bottom: 2px solid #5b5fc7;
    border-radius: 4px 4px 2px 2px;
  }

  input:hover {
    outline: 1px solid lightgrey;
  }
</style>
<link rel="stylesheet" href="/css/bootstrap.min.css">
<link rel="stylesheet" href="/css/button.css">
<script src="/js/bootstrap.min.js"></script>
<script defer src="/js/bootstrap.bundle.min.js"></script>
<div class="menu">
  <h2 style="color: white;">Order's List</h2>
  <input style="margin-left: 100px;" class="input" name="keyword" placeholder="Search..." type="search">

  <div style="float: right" class="filter-div">

    <div>
      <select style="margin-left: 1000px;" class="input" onchange="javascript:handleSelect(this)">
        <option value='5' {{ $filter == 5 ? 'selected' : '' }}>Tất cả</option>
        <option value='0' {{ $filter == 0 ? 'selected' : '' }}>Mới tạo</option>
        <option value='1' {{ $filter == 1 ? 'selected' : '' }}>Vận chuyển</option>
        <option value='2' {{ $filter == 2 ? 'selected' : '' }}>Hoàn thành</option>
        <option value='3' {{ $filter == 3 ? 'selected' : '' }}>Đã hủy</option>
      </select>
    </div>

    <div style="margin-left: 30px; margin-top: 100px;">
      <table class="table table-hover table-dark">
        <tr>
          <th scope="col">ID_order</th>
          <th scope="col">Date</th>
          <th scope="col">ID_customer</th>
          <th scope="col">Name</th>
          <th scope="col">Phone number</th>
          <th scope="col">Address</th>
          <th scope="col">Payment</th>
          <th scope="col">Status</th>
          <th></th>
        </tr>

        @foreach($result as $order)
        @php
        if($order->status == 0) {
        $status = "Mới tạo";
        } elseif($order->status == 1) {
        $status = "Vận chuyển";
        } elseif($order->status == 2) {
        $status = "Hoàn thành";
        } else {
        $status = "Đã hủy";
        }
        @endphp

        <tr>
          <td>{{ $order->id }}</td>
          <td>{{ $order->updated_time }}</td>
          <td>{{ $order->id_customer }}</td>
          <td>{{ $order->name }}</td>
          <td>{{ $order->phone }}</td>
          <td>{{ $order->address }}</td>
          <td>{{ $order->name_payment }}</td>
          <td>{{ $status }}</td>
          <td>
            <a href="{{ route('order.edit', $order->id) }}">View detail</a>
          </td>
        </tr>
        @endforeach
      </table>
    </div>

    </table>
  </div>
</div>

<script type="text/javascript">
  function handleSelect(elm) {
    var filterValue = elm.value;
  window.location.href = "{{ route('order.index') }}?filter=" + filterValue;

  }
</script>

</body>

</html>
@stop()