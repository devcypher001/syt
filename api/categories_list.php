[{
    "Business Consultants": {
        <?php
        include '../connect.php';
            $v=1;
            $q1 = mysql_query("SELECT * FROM `syt_sub_sucategory` WHERE `ss_id` = 2 LIMIT 0,23");
            while ($rr = mysql_fetch_assoc($q1)) {
        ?>
                "id_pk<?php echo $v++; ?>": "<?php echo $rr['sub_subcate']; ?>",
        <?php
            }

        ?>
        "id_pk24": "Corporate Finance Consultant"
    },
    "Beauty and Wellness": {
        <?php
            include '../connect.php';
            $v1 = 1;
            $q1 = mysql_query("SELECT * FROM `syt_sub_sucategory` WHERE `ss_id` = 5 LIMIT 0,11");
            while ($rr = mysql_fetch_assoc($q1)) {
        ?>
                "id_pk<?php echo $v1++; ?>": "<?php echo $rr['sub_subcate']; ?>",
        <?php
            }

        ?>
        "id_pk12": "Maternity consultant"
    },
    "Home and Utility": {
        <?php
            include '../connect.php';
            $v2=1;
            $q1 = mysql_query("SELECT * FROM `syt_sub_sucategory` WHERE `ss_id` = 6 LIMIT 0,24");
            while ($rr = mysql_fetch_assoc($q1)) {
        ?>
                "id_pk<?php echo $v2++; ?>": "<?php echo $rr['sub_subcate']; ?>",
        <?php
            }

        ?>
        "id_pk25": "Kitchen Remodelling"
    },
    "Events & Entertainment": {
        <?php
            include '../connect.php';
            $v3=1;
            $q1 = mysql_query("SELECT * FROM `syt_sub_sucategory` WHERE `ss_id` = 7 LIMIT 0,24");
            while ($rr = mysql_fetch_assoc($q1)) {
        ?>
                "id_pk<?php echo $v3++; ?>": "<?php echo $rr['sub_subcate']; ?>",
        <?php
            }

        ?>
        "id_pk25": "Cards designers"
    },
    "Everything Else": {
        <?php
            include '../connect.php';
            $v4=1;
            $q1 = mysql_query("SELECT * FROM `syt_sub_sucategory` WHERE `ss_id` = 8 LIMIT 0,17");
            while ($rr = mysql_fetch_assoc($q1)) {
        ?>
                "id_pk<?php echo $v4++; ?>": "<?php echo $rr['sub_subcate']; ?>",
        <?php
            }

        ?>
        "id_pk18": "Pet care"
    },
    "Social Causes": {
        <?php
            include '../connect.php';
            $v5=1;
            $q1 = mysql_query("SELECT * FROM `syt_sub_sucategory` WHERE `ss_id` = 9 LIMIT 0,12");
            while ($rr = mysql_fetch_assoc($q1)) {
        ?>
                "id_pk<?php echo $v5++; ?>": "<?php echo $rr['sub_subcate']; ?>",
        <?php
            }

        ?>
        "id_pk13": "Others"
    },
    "Fashion and Lifestyle":
    {
        <?php
            include '../connect.php';
            $v6=1;
            $q1 = mysql_query("SELECT * FROM `syt_sub_sucategory` WHERE `ss_id` = 4 LIMIT 0,12");
            while ($rr = mysql_fetch_assoc($q1)) {
        ?>
                "id_pk<?php echo $v6++; ?>": "<?php echo $rr['sub_subcate']; ?>",
        <?php
            }

        ?>
        "id_pk13": "Wardrobe consultant"
    }
}]