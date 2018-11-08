<!DOCTYPE html>
<head>
    <meta charset="utf-8"/>
    <title>
        使用随机数实现简单的概率抽奖demo
    </title>
</head>
<body>
    <?php
    $msg = '';
    $probability = array(
        'probability1' => array('name' => '靴子', 'value' => 10),
        'probability2' => array('name' => '披风', 'value' => 20),
        'probability3' => array('name' => '饰品', 'value' => 30),
        'probability4' => array('name' => '双手剑', 'value' => 25),
        'probability5' => array('name' => '金币袋', 'value' => 15)
    );
    if ($_POST) {
        $probability_total = 0;
        foreach ($probability as $k => $v) {
            $probability[$k]['value'] = intval($_POST[$k]);
            $probability_total +=$_POST[$k];
        }
        $dot = 0;
        foreach ($probability as $k => $v) {
            $award_line[$k]['name'] = $v['name'];
            $award_line[$k]['start'] = $dot;
            $dot = $dot + $v['value'];
            $award_line[$k]['end'] = $dot;
        }

        $count = array('靴子' => 0, '披风' => 0, '饰品' => 0, '双手剑' => 0, '金币袋' => 0);
        for ($i = 0; $i < 100; $i++) {
            $rand_num = mt_rand(1, $probability_total);
            $hit = 0;
            foreach ($award_line as $k => $v) {
                if ($rand_num > $v['start'] && $rand_num <= $v['end']) {//命中
                    $hit = $v['name'];
                    break;
                }
            }
            $count[$hit]++;
        }
        $msg = "随机数为{$rand_num}，命中{$hit}";
    }
    ?>
    <form method = "post" action = "">
        <?php foreach ($probability as $key => $value): ?>
            <p>
                <?php echo $value['name']; ?>
                <input type = "text" name = "<?php echo $key; ?>" value = "<?php echo $value['value']; ?>" />
            </p>
        <?php endforeach; ?>
        <input type = "submit" name = "submit" value = "提交" />
        <div><?php echo $msg; ?></div>
    </form>
</body>
</html>