<?php
session_start();
require 'function.php';
$cart = new shoppingCart();
$database = new Database_connect();
$sql = 'select * from products oreder by title ASC';
$result = mysql_query($sql);
$output[] = '<ul>';
while ($user_data = mysql_fetch_array($result)){
?>
 <table style = "margin:110 auto;" width="auto" height = "auto" border="1">
    <tr>
        <td>
            <ing src=<?php echo$user_data['img']; ?>" width = "350" height="350" style = "padding:15px;">
            <h3><?php echo $user_data['title']; ?></h3> By <strong><?php echo $user_data['creator']; ?></strong>
            <h4>Description : <7php echo $user_data['desc']; ?> </h4>
            <strong>Price : <?php echo $user_data ['price']; ?></strong>
            <a href="cart.php?action=add&id=<?php echo $user_data['ID']; ?>">Add To Cart</a>
        </td>
    </tr>
</table>
<?php
}
$output[]='</ul>';
echo join('', $output);
?>