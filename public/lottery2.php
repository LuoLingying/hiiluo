<?php 
/**
 * @desc 拼凑，获得Prob和Alias数组
 * @param array $data
 * @param array $prob
 * @param array $alias
 */
function init(array $data, array &$prob, array &$alias) {
    $nums = count($data);
    $small = $large = array();
    for ($i = 0; $i < $nums; ++$i) {
        $data[$i] = $data[$i] * $nums; // 扩大倍数，使每列高度可为1
         
        /** 分到两个数组，便于组合 */
        if ($data[$i] < 1) {
            $small[] = $i;
        } else {
            $large[] = $i;
        }
    }
 
    /** 将超过1的色块与原色拼凑成1 */
    while (!empty($small) && !empty($large)) {
        $n_index = array_shift($small);
        $a_index = array_shift($large);
         
        $prob[$n_index] = $data[$n_index];
        $alias[$n_index] = $a_index;
        // 重新调整大色块
        $data[$a_index] = ($data[$a_index] + $data[$n_index]) - 1;
         
        if ($data[$a_index] < 1) {
            $small[] = $a_index;
        } else {
            $large[] = $a_index;
        }
    }
     
    /** 剩下大色块都设为1 */
    while (!empty($large)) {
        $n_index = array_shift($large);
        $prob[$n_index] = 1;
    }
     
    /** 一般是精度问题才会执行这一步 */
    while (!empty($small)) {
        $n_index = array_shift($small);
        $prob[$n_index] = 1;
    }
}
 
/**
 * @desc 获取某种物品
 * @param array $prob
 * @param array $alias
 * @return int
 */
function generation($prob, $alias) {
    $nums = count($prob) - 1;
 
    $MAX_P = 100000; // 假设最小的几率是万分之一
    $coin_toss = rand(1, $MAX_P) / $MAX_P; // 抛出硬币
     
        $col = rand(0, $nums); // 随机落在一列
    $b_head = ($coin_toss < $prob[$col]) ? TRUE : FALSE; // 判断是否落在原色
     
    return $b_head ? $col : $alias[$col];
}
 
$data = array(0.1, 0.2, 0.3, 0.25, 0.15);
$prob = $alias = array();
 
init($data, $prob, $alias);
$result = generation($prob, $alias);


 

$count = array(0, 0, 0, 0, 0);
for ($i = 0; $i < 1000000; $i++) {
    $result = generation($prob, $alias);
    $count[$result]++;
}
echo '<pre>';
print_r($count);
echo '</pre>';