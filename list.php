<style>
    .list-group .nav-link:hover {
        background-color: #348E38;
        color: #ffff;
    }
</style>
<ul class="list-group">
    <button type="button" class="list-group-item list-group-item-action active" aria-current="true">
        Category
    </button>

    <?php include("config/config.php");

    $sql_list = "SELECT * FROM  category ";
    $rs_group = mysql_query($sql_list);

    while ($row_list = mysql_fetch_array($rs_group)) { ?>
        <li class="list-group">

            <a class="nav-link" href="product.php?act=showtype&cate_id=<?php echo $row_list["cate_id"]  ?>"> <?php echo $row_list["cate_name"]  ?></a>

            <ul id="menu_item1">

                <?php 
                $cate_id = $row_list["cate_id"];
                $sql_sub = "SELECT p.*,c.* FROM  product  as p
                INNER JOIN category as c ON p.cate_id = c.cate_id
                WHERE c.cate_id=$cate_id";
                $rs_sub = mysql_query($sql_sub);
                ?>

                <?php while ($row_sub = mysql_fetch_array($rs_sub)) {  ?>
                    <li ><a class="nav-link " href="product.php?act=detail&cate_id=<?php echo $row_sub["cate_id"]; ?>&product_id=<?php echo $row_sub["product_id"]; ?>"><?php echo $row_sub["product_name"]  ?> </a></li>
                <?php } ?>

            </ul>
        </li>
    <?php } ?>
</ul>