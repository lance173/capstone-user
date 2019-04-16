<?php  

require_once('MysqlConnect.php');

function loadMenuItems(){
   $conn = myConnect();
   $sql = "SELECT menu.MenuItemID, menu.Position, menu.Type, menu.PageLink, menu.WebPageID, IF(webpages.WebPageID IS NOT NULL, webpages.PageTitle, menu.ItemName) AS ItemName  FROM menu  left join webpages on webpages.WebPageID = menu.WebPageID ORDER BY menu.Position ASC";
   $result = mysqli_query($conn, $sql);

   while($row=mysqli_fetch_array($result)){
      //do something as long as there's a remaining row.
      $rows[] = $row;
   }
   return $rows;  
}

function loadMenuDropdown(){
   $conn = myConnect();
   $sql = "SELECT menu_dropdown.DropItemID, menu_dropdown.PageLink,menu_dropdown.MenuID,menu_dropdown.WebPageID,  IF(webpages.WebPageID IS NOT NULL, webpages.PageTitle, menu_dropdown.DropItemName) AS DropItemName FROM menu_dropdown  left join webpages on webpages.WebPageID = menu_dropdown.WebPageID ";
   $result = mysqli_query($conn, $sql);

   while($row=mysqli_fetch_array($result)){
      //do something as long as there's a remaining row.
      $rows[] = $row;
   }
   return $rows;  
}