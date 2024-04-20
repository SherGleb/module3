<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<style>
    table, td, th {
  border: 1px solid black;
}

td, th {
  padding: 10px 20px;
  text-align: center;
}
</style>
<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Description</th>
    </tr>

    
    <?
    echo "<tr>";
        echo "<td>" . $arResult["ID"] . "</td>";
         echo "<td>" . $arResult["NAME"] . "</td>";
        echo "<td>" . $arResult["DESCRIPTION"] . "</td>";
     echo "</tr>";
    ?>
</table>
