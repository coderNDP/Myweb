@include('nav')

<div class="container">
    <center>
        <h1 style="color: white;">Cập nhật thông tin</h1>
        <a href="{{ route('cap-nhat-thong-tin', ['userID' => $userID]) }}">Cập Nhật Thông Tin</a>
        <form class="form" action="{{ url('/cap-nhat-thong-tin', ['userID' => $customer->id]) }}" method="POST" style="margin-top: 190px;">
            @csrf
            @method('POST')

            <span class="input-span">
                <label for="username" class="label">Họ tên</label>
                <input type="text" name="username" id="username" value="{{ $customer->username }}">
            </span>
            <span class="input-span">
                <label for="email" class="label">Email</label>
                <input type="email" name="email" id="email" value="{{ $customer->email }}">
            </span>
            <button class="submit" type="submit" name="submit">Cập nhật thông tin</button>
            <a class="submit" style="text-decoration-line: none;" href="{{ url('/doi-mat-khau') }}">Đổi mật khẩu</a>
        </form>
    </center>
</div>