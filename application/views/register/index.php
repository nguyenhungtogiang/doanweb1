<?php
/**
 * Created by IntelliJ IDEA.
 * User: vishalkulkarni
 * Date: 4/29/17
 * Time: 11:15 PM
 */

$this->load->view('header');

?>
<hr>

<form class="form-horizontal" method="post" action="<?= base_url()?>register/">
    <fieldset>

        <!-- Form Name -->
        <legend>Đăng ký thành viên mới</legend>

        <? if (!$valid)
            {
                echo ("Invalid Registration details");
            }?>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">Tài khoản</label>
            <div class="col-md-4">
                <input id="username" name="username" type="text" placeholder="username" class="form-control input-md" required="">

            </div>
        </div>

        <!-- Password input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="password">Mật khẩu</label>
            <div class="col-md-4">
                <input id="password" name="password" type="password" placeholder="password" class="form-control input-md">

            </div>
        </div>

        <!-- Address input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">Địa chỉ</label>
            <div class="col-md-4">
                <input id="address" name="address" type="address" placeholder="address" class="form-control input-md">

            </div>
        </div>

        <!-- Email input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">Email</label>
            <div class="col-md-4">
                <input id="email" name="email" type="email" placeholder="email" class="form-control input-md">

            </div>
        </div>

        <!-- Phone Number input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">Số điện thoại</label>
            <div class="col-md-4">
                <input id="phonenumber" name="phonenumber" type="phonenumber" placeholder="phonenumber" class="form-control input-md">

            </div>
        </div>

        <!-- Button -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="submit"></label>
            <div class="col-md-4">
                <button id="submit" name="submit" class="btn btn-primary">Đăng kí</button>
            </div>
        </div>

    </fieldset>
</form>


<?php
$this->load->view('footer');
?>