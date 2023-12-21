<link rel="stylesheet" href="/css/bootstrap.min.css">
<script src="/js/bootstrap.bundle.min.js"></script>

<table class="table table-hover">
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Brand</th>
    <th>Category</th>
    <th>Category</th>
    <th>Price</th>
    <th>Sale_price</th>
  </tr>
  <tr>
        <td>{{ $products->id_product }}</td>
        <td>{{ $products->name}}</td>
        <td>{{ $products->name_brand}}</td>
        <td>{{ $products->parent}}</td>
        <td>{{ $products->child}}</td>
        <td>{{ $products->price}}</td>
        <td>{{ $products->sale_price}}</td>
  </tr>
</table>
<table>
<td> <img src="/img/{{ $products->img}}" alt="" width="300px" height="300px"> </td>
@foreach($image as $img)
<td>
        @if(isset($img->name_image))
            <img src="/upload/{{ $img->name_image }}" alt="" width="300px" height="300px">
        @else
            <!-- Xử lý trường hợp không có giá trị cho 'name_image' -->
        @endif
    </td>
@endforeach
</table>