[{
    "Academic" : 
    {
        <?php
            include '../connect.php';
            $q = mysql_query("SELECT * FROM `syt_sub_sucategory` where `grand_parent_id`=1 order by `sub_subcate` asc LIMIT 0,26");
            $v = 1;
            while($rr2 = mysql_fetch_assoc($q))
            {
        ?>
                "id_pk<?php echo $v++; ?>" : "<?php echo $rr2['sub_subcate']; ?>", 
        <?php
            }
        ?>
                "id_pk27" : "Web design Trainer" 
    },
    "Language Experts" : 
    {
        <?php
            $q = mysql_query("SELECT * FROM `syt_sub_sucategory` where `grand_parent_id`=2 order by `sub_subcate` asc LIMIT 0,11");
            $v1 = 1;
            while($rr2 = mysql_fetch_assoc($q))
            {
        ?>
                "id_pk<?php echo $v1++; ?>" : "<?php echo $rr2['sub_subcate']; ?>", 
        <?php
            }
        ?>
                "id_pk12" : "Spanish Tutor" 
    },
    "Performance Arts" : 
    {
        <?php
            $q = mysql_query("SELECT * FROM `syt_sub_sucategory` where `grand_parent_id`=3 order by `sub_subcate` asc LIMIT 0,19");
            $v1 = 1;
            while($rr2 = mysql_fetch_assoc($q))
            {
        ?>
                "id_pk<?php echo $v1++; ?>" : "<?php echo $rr2['sub_subcate']; ?>", 
        <?php
            }
        ?>
                "id_pk20" : "Zumba Dance" 
    },
    "Sports & Recreation" : 
    {
        <?php
            $q = mysql_query("SELECT * FROM `syt_sub_sucategory` where `grand_parent_id`=4 order by `sub_subcate` asc LIMIT 0,26");
            $v1 = 1;
            while($rr2 = mysql_fetch_assoc($q))
            {
        ?>
                "id_pk<?php echo $v1++; ?>" : "<?php echo $rr2['sub_subcate']; ?>", 
        <?php
            }
        ?>
                "id_pk27" : "Yoga" 
    },
    "Occupational" :
    {
        <?php
            $q = mysql_query("SELECT * FROM `syt_sub_sucategory` where `grand_parent_id`=5 order by `sub_subcate` asc LIMIT 0,13");
            $v1 = 1;
            while($rr2 = mysql_fetch_assoc($q))
            {
        ?>
                "id_pk<?php echo $v1++; ?>" : "<?php echo $rr2['sub_subcate']; ?>", 
        <?php
            }
        ?>
                "id_pk14" : "Supply chain Software Coach" 
    },
    "Arts & Craft" : 
    {
        <?php
            $q = mysql_query("SELECT * FROM `syt_sub_sucategory` where `grand_parent_id`=6 order by `sub_subcate` asc LIMIT 0,19");
            $v1 = 1;
            while($rr2 = mysql_fetch_assoc($q))
            {
        ?>
                "id_pk<?php echo $v1++; ?>" : "<?php echo $rr2['sub_subcate']; ?>", 
        <?php
            }
        ?>
                "id_pk20" : "Vaastu" 
    },
    "IT" : 
    {
        <?php
            $q = mysql_query("SELECT * FROM `syt_sub_sucategory` where `grand_parent_id`=8 order by `sub_subcate` asc LIMIT 0,15");
            $v1 = 1;
            while($rr2 = mysql_fetch_assoc($q))
            {
        ?>
                "id_pk<?php echo $v1++; ?>" : "<?php echo $rr2['sub_subcate']; ?>", 
        <?php
            }
        ?>
                "id_pk16" : "Web Design & Development" 
    },
    "Marketing" : 
    {
        <?php
            $q = mysql_query("SELECT * FROM `syt_sub_sucategory` where `grand_parent_id`=9 order by `sub_subcate` asc LIMIT 0,9");
            $v1 = 1;
            while($rr2 = mysql_fetch_assoc($q))
            {
        ?>
                "id_pk<?php echo $v1++; ?>" : "<?php echo $rr2['sub_subcate']; ?>", 
        <?php
            }
        ?>
                "id_pk10" : "Social Media Marketing" 
    }
}]