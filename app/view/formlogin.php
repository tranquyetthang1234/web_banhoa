<div id="divhuongdan">
<p class="caption">ĐĂNG NHẬP</p>
<ul><li>Nếu bạn là khách hàng cũ, vui lòng đăng nhập trong form bên dưới.</li>
<li>Nếu quên mật khẩu, nhắp vào: <a href="<?=BASE_DIR?>/sanpham/quenpass">quên mật khẩu</a> để chúng tôi cấp lại mật khẩu cho bạn. </li>
<li>Nếu bạn là khách mới, vui lòng <a href="<?=BASE_DIR?>/sanpham/dangky">đăng ký</a> một tài khoản trước khi giao dịch.</li>
</ul>
<div id="divdangnhap">
<form id="formdangnhap" method="post" action="<?=BASE_URL?>sanpham/login_/">
<p><span>Email</span><input type="text" name="email" id="email" /></p>
<p><span>Pass</span><input type="password" name="password" id="password" /></p>
<p><span>&nbsp;</span>
   <input type="submit" name="btnLog" id="btnLog" value="Đăng nhập"/>&nbsp;
   <input type="checkbox" name="nho" id="nho" /> Ghi nhớ   
</p>
</form>
</div>
<h4 align="center" class="thongbao">
<?=$_SESSION['login_error']; unset($_SESSION['login_error']);?>
</h4>
</div>
