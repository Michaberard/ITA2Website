<?php
//Database
define('_svr','localhost');
define('_user','root');
define('_pass','');
define('_db','tutorial');
class Database_connect{
        function _construct(){
    $this->connection = mysql_connect(_svr,_user,_pass,_db);
    mysql_select_db(_db,$this->connection) or die(mysql_error());
        }
function disconnect(){
    mysql_close($this->connection);
}
      
        }
        class shoppingCart{
            function writeShoppingCart(){
            $cart = $_SESSION['cart'];
            if(!$cart){
                return '0 Items';
            }else{
                $items = explode(',',$cart);
                $number = (count($items)>1) ? 's' : '';
                return '<a href="cart.php">'.count($items).' Items'.$number.'';
           
            }
        }
        function showCart(){
         $database = new Database_connect();
         $cart = $_SESSION['cart'];
         if($cart){
             $items = explode(',', $cart);
             $contents = array();
             foreach($items as $item){
                 $contents[$item] = (isset($contents[$item])) ? $contents($item)*1 : 1;
             }
             $output[] = '<form action = "cart.php?action=update" method = "POST" id="cart"';
             $output[] = '<table';
             foreach ($contents as $id=>$qty){
                 $sql = 'select * from products where ID = '.$id;
                 $result = mysql_query($sql);
                 $user_data = mysql_fetch_array($result);
                 extract($user_data);
                 $output[]='<tr>';
                 $output[]='<td><a href="cart.php?action=delete&id='.$id.'"> Remove</a></td>';
                 $output[]='<td>'.$title.' By '.$creator. '</td>';
                 $output[]='<td>€'.$price.'</td>';
                 $output[]='<td><input type = "text" name = "qty'.$id.'" value='.$qty.' size="3" maxlength="3"/></td>';
                 $output[]='<td> €'.($price * $qty).'</td>';
                 $totalCost += $price * $qty;
                 $output[] = '</tr>';
             }
             $output[] = '</table>';
             $output[] = '<p> Total : <strong>€' .$totalCost.'</strong></p>';
             $output[] = '<button type = "submit">Update Cart</button>';
             $output[] = '</form>';
        }
        }else{
         $outpu[] = '<p>Cart is Empty.</p>'   
        }
        return join('',$output);
        }
        }
?>