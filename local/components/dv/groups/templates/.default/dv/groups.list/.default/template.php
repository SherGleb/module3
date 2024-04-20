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
        <th>Name</th>
        <th>Link</th>
    </tr>

    <?foreach ($arResult['GROUPS'] as $group){ ?>
        <tr>
            <td><?echo $group["NAME"];?></td>
            <td><a href="<?= $group['ID'] . "/"?>"><?echo htmlspecialcharsbx("module3" . $APPLICATION -> GetCurPage() . $group['ID'] . "/");?></a></td>
        </tr>
    <?
        }
    ?>
</table>
