<?php require_once APPROOT . '/views/includes/a_header.php';
//time format


?>
<div class="dash-content">
  <div class="activity">
    <div class="title">
      <i class="uil uil-gold"></i>
      <span class="text">Quản lí bình luận</span>
    </div>

    <table id="customers">
      <tr>
        <th><i class="uil uil-list-ol"></i> ID cmt</th>
        <th><i class="uil uil-paragraph"></i> ID user</th>
        <th><i class="uil uil-n-a"></i> Họ tên</th>
        <th><i class="uil uil-key-skeleton-alt"></i> Mã sản phẩm</th>
        <th><i class="uil uil-text-fields"></i> Nội dung</th>
        <th><i class="uil uil-clock"></i> Thời gian bl</th>
        <th> <i class="uil uil-file-edit-alt"></i> Action</th>
      </tr>
      <?php
  if (!empty($data['comment'])) :
    //view("index, data = ["product" => $product "got Comment From Model" ]")
    //$product = [""]
    foreach ($data['comment'] as $comment) : extract($comment); ?>
      <tr>
      <td><?= $ma_bl ?></td>
    <td></h2><?= $ma_kh ?><h2></td>
    <td><?= $ten_kh ?></td>
    <td><p><?= $ma_hh ?></p></td>
    <td><p><?= $noi_dung?></p></td>
    <td><p><?= $ngay_bl?></p></td>
        <td style="font-size: 30px;">
            <a onclick="return confirm('Bạn có chắc muốn xóa?')" href="<?= URLROOT ?>/a_comment/delete/<?= $ma_bl ?>"><i class="uil uil-trash"></i></a>
        </td>
      </tr>
  <?php endforeach;
  endif; ?>
    </table>
  </div>
</div>