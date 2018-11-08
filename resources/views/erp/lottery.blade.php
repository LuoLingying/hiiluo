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
        'probability1' => array('name' => '概率1', 'value' => 10),
        'probability2' => array('name' => '概率2', 'value' => 20),
        'probability3' => array('name' => '概率3', 'value' => 30),
        'probability4' => array('name' => '概率4', 'value' => 40),
    );
    if ($_POST) {
        $probability_total = 0;
        foreach ($probability as $k => $v) {
            $probability[$k]['value'] = intval($_POST[$k]);
            $probability_total +=$_POST[$k];
        }
        $award_line = array();
        $dot = 0;
        foreach ($probability as $k => $v) {
            $award_line[$k]['name'] = $v['name'];
            $award_line[$k]['start'] = $dot;
            $dot = $dot + $v['value'];
            $award_line[$k]['end'] = $dot;
        }
        $rand_num = mt_rand(1, $probability_total);
        $hit = 0;
        foreach ($award_line as $k => $v) {
            if ($rand_num > $v['start'] && $rand_num <= $v['end']) {//命中
                $hit = $v['name'];
                break;
            }
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