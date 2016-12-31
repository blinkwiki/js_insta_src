<html lang="en-US" style="height: 100%;">
<head>
<title>Instant Search</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Keywords" content="">
<meta name="Description" content="">
<script src="js/insta_src.js"></script>
</head>
<body>
<?php
            
    // a list of fruits and vegetable items
    $table_values = array(
    'Apple - Fruits', 'Apricot - Vegetables', 'Asparagus - Vegetables', 'Aubergine - Fruits', 'Avocado - Fruits', 'Banana - Fruits', 'Beetroot - Roots', 'Black-Eye Bean - Legumes', 'Broad Bean - Legumes', 'Broccoli - Vegetables', 'Brussels Sprout - Vegetables', 'Butternut Squash - Vegetables', 'Carrots - Vegetables', 'Cherry - Fruits', 'Clementine - Fruits', 'Courgette - Vegetables', 'Date - Fruits', 'Elderberry - Fruits', 'Endive - Vegetables', 'Fennel - Vegetables', 'Fig - Fruits', 'Garlic - Vegetables', 'Grape - Fruits', 'Green Beans - Legumes', 'Guava - Fruits', 'Haricot Beans - Legumes', 'Honeydew Melon - Vegetables', 'Iceberg Lettuce - Vegetables', 'Jerusalem Artichoke - Vegetables', 'Kiwi Fruit - Fruits', 'Leek - Fruits', 'Lemon - Fruits', 'Mango - Fruits', 'Melon - Fruits', 'Mushroom - Vegetables', 'Nectarine - Fruits', 'Nut - Nuts', 'Olive - Fruits', 'Orange - Fruits', 'Pea - Vegetables', 'Peanut - Nuts', 'Pear - Fruits', 'Pepper - Spices', 'Pineapple - Fruits', 'Pumpkin - Vegetables', 'Quince - Fruits', 'Radish - Fruits', 'Raisins - Fruits', 'Rhubarb - Vegetables', 'Satsuma - Fruits', 'Strawberry - Fruits', 'Sweet Potato - Roots', 'Tomato - Vegetables', 'Turnip - Vegetables', 'Ugli Fruit - Fruits', 'Victoria Plum - Fruits', 'Vine Leaf - Vegetables', 'Watercress - Vegetables', 'Watermelon - Vegetables', 'Yam - Roots', 'Zucchini - Vegetables'
    );
            
?>
<h3>Instant Search</h3>
<table width="30%">
    <tr>
        <td width="70%">
            <b>
                Table of Food Items
            </b><br>
        </td>
        <td width="30%">
            <input id="txt_src" name="txt_src" placeholder="search table..." onkeyup="insta_src(this.value, 'tr_src');" />
            <br><b id="res_counter"></b>
        </td>
    </tr>
</table>
<br>
<table width="30%">
    <thead>
        <tr>
            <td width="10%"><b>SN</b></td>
            <td width="60%"><b>Food Name</b></td>
            <td width="30%"><b>Food Type</b></td>
        </tr>
    </thead>
    <tbody>
        <?php for ($i=0; $i<count($table_values); $i++) { ?>
        <tr name="tr_src">
            <td><?php echo $i + 1; ?></td>
            <td>
                <?php echo str_replace(' - ', '</td><td>', $table_values[$i]); ?>
            </td>
        </tr>
        <?php } ?>
    </tbody>
    <tfoot><tr><td colspan="3"></td></tr></tfoot>
</table>

    
    <hr>
    &copy; BlinkWIki
    
</body>
</html>