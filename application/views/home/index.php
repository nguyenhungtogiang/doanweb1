<?php
/**
 * Created by IntelliJ IDEA.
 * User: vishalkulkarni
 * Date: 4/29/17
 * Time: 9:48 PM
 */

$this->load->view('header');

?>

    <hr>

    <div class="row">
        <div class="col-sm-8">
            <h2>Chúng tôi có thể làm được gì?</h2>
            <p>Chúng tôi cung cấp tốt nhất trong các dịch vụ đặt phòng khách sạn.</p>
            <p>
                <a class="btn btn-success" href="#">Liên hệ với chúng tôi</a>
            </p>
        </div>
    </div>
    <!-- /.row -->

    <hr>

<?php
$cnt = 0;
foreach ($hotels as $hotel) {
    $cnt++;
    if ($cnt % 3 == 0) {
        echo('<div class="row">');

    }
    ?>
    <div class="col-sm-4">
        <img class="img-circle img-responsive img-center" src="<?= base_url() ?>assets/img/<?=$cnt?>.png" alt="">
        <h2><a href="<?= base_url() ?>hotels/view/<?= $hotel->HotelID ?>"><?= $hotel->Street ?>
                , <?= $hotel->Zip ?> <?= $hotel->Country ?></a></h2>
        <a href="<?= base_url() ?>hotels/book/<?= $hotel->HotelID ?>" class="btn btn-success"> Đặt ngay </a>
        <p></p>
    </div>
    <?php
    if ($cnt % 3 == 0) {
        echo('</div>');
    }
}
?>


    <hr>

<?php
$this->load->view('footer');

?>