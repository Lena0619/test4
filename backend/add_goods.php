<h2 class="ct">新增管理者帳號</h2>
<form action="api/add_goods.php" method="post">
  <table class="all">
    <tr>
      <td class="tt">所屬大分類</td>
      <td class="pp"><input type="text" name="big" id="big"></td>
    </tr>
    <tr>
      <td class="tt">所屬中分類</td>
      <td class="pp"><input type="text" name="mid" id="mid"></td>
    </tr>
    <tr>
      <td class="tt">商品編號</td>
      <td class="pp"><input type="text" name="num"></td>
    </tr>
    <tr>
      <td class="tt">商品名稱</td>
      <td class="pp"><input type="text" name="name"></td>
    </tr>
    <tr>
      <td class="tt">規格</td>
      <td class="pp"><input type="text" name="spec"></td>
    </tr>
    <tr>
      <td class="tt">庫存量</td>
      <td class="pp"><input type="number" name="quota"></td>
    </tr>
    <tr>
      <td class="tt">商品圖片</td>
      <td class="pp"><input type="file" name=img></td>
    </tr>
    <tr>
      <td class="tt">產品介紹</td>
      <td class="pp"><textarea name="intro" style="width:98%;height:auto"></td>
    </tr>
    <tr>
      <td class="tt"></td>
      <td class="pp"><input type="text"></td>
    </tr>
  </table>
  <div class="ct">
      <input type="submit" value="新增">
      <input type="reset" value="重置">
      <!-- <input type="button" value="返回" onclick="history.go(-1)"> 另外一種寫法 -->
      <input type="button" value="返回" onclick="lof('?do=th')">
  </div>
</form>

