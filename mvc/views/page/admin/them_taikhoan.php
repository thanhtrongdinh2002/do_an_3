<div class="nendanhmuc">
    <form class="them-dm" action="./them_taikhoan" method="POST">
        <div>
            <label style="margin-right: 50px; margin-left: 100px;" for="">Nhập tài khoản: </label>
            <input type="text" name="username">
        </div>
        <div>
            <label style="margin-right: 50px; margin-left: 100px;" for="">Nhập mật khẩu: </label>
            <input type="text" name="pass">
        </div>
        <div>
            <label style="margin-right: 50px; margin-left: 100px;" for="">Quyền:</label>
            <select name="quyen">
                <option value="admin">admin</option>
                <option value="khachhang">khachhang</option>
            </select>
        </div>
        <button type="submit" name="them_taikhoan">Thêm tài khoản</button>
    </form>
</div>