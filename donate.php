<!-- donate.php -->
<div class="donate-box">
  <h2>Ủng hộ Stain Kagenou 💖</h2>
  <form id="donateForm">
    <label for="method">Phương thức:</label>
    <select id="method" name="method">
      <option value="bank">Chuyển khoản ngân hàng</option>
      <option value="card">Nạp thẻ</option>
    </select>

    <div id="bankFields">
      <input type="text" name="name" placeholder="Tên người gửi">
      <input type="number" name="amount" placeholder="Số tiền">
    </div>

    <div id="cardFields" style="display:none">
      <input type="text" name="card_type" placeholder="Loại thẻ (Viettel, Mobi...)">
      <input type="text" name="card_pin" placeholder="Mã thẻ">
      <input type="text" name="card_serial" placeholder="Số seri">
    </div>

    <button type="submit">Gửi ủng hộ</button>
  </form>
  <div id="donateResult"></div>
</div>
<script src="js/donate.js"></script>
