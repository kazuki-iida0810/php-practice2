<?php
// Q1 変数と文字列
$name = '飯田';
echo '私の名前は、' . $name . 'です！';

// Q2 四則演算
$x = 20;
var_dump($x);
$x /= 2;
var_dump($x);


// Q3 日付操作
$now = date('2026年10月30日 12時45分22秒');

echo '現在の時刻は ' . $now . ' です。';



// Q4 条件分岐-1 if文
$device = 'mac'; 

if ($device === 'windows'||$device === 'mac') {
    echo '使用OSは、' . $device . 'です！';
} else {
    echo 'どちらでもありません。';
}

// Q5 条件分岐-2 三項演算子
$age = 17;
$message = ($age > 18) ? '未成年です！' : '成人です！';

echo $message;

// Q6 配列
$kanto = ['東京都', '神奈川県', '千葉県', '栃木県', '茨城県', '埼玉県', '群馬県'];

echo "3番目の値: " . $kanto[2] . "\n";
echo "4番目の値: " . $kanto[3] . "\n";

// Q7 連想配列-1
$kanto_capitals = [
    "茨城県" => "水戸市",
    "栃木県" => "宇都宮市",
    "群馬県" => "前橋市",
    "埼玉県" => "さいたま市",
    "千葉県" => "千葉市",
    "東京都" => "新宿区",
    "神奈川県" => "横浜市"
];

var_dump($kanto_capitals);

// Q8 連想配列-2
$kanto_capitals = [
    "茨城県" => "水戸市",
    "栃木県" => "宇都宮市",
    "群馬県" => "前橋市",
    "埼玉県" => "さいたま市",
    "千葉県" => "千葉市",
    "東京都" => "新宿区",
    "神奈川県" => "横浜市"
];

if (isset($kanto_capitals['埼玉県'])) {
    echo '埼玉県の県庁所在地は、' . $kanto_capitals['埼玉県'] . 'です！';
}

// Q9 連想配列-3
$kanto_capitals = [
    "茨城県" => "水戸市",
    "栃木県" => "宇都宮市",
    "群馬県" => "前橋市",
    "埼玉県" => "さいたま市",
    "千葉県" => "千葉市",
    "東京都" => "新宿区",
    "神奈川県" => "横浜市",
    "愛知県" => "名古屋市",
    "大阪府" => "大阪市",
   
];

$prefecture = "埼玉県";

if ($prefecture ===  "埼玉県") {
    echo $prefecture . 'の県庁所在地は、' . $kanto_capitals[$prefecture] . 'です！';
} else {
    echo $prefecture .  "は関東地方ではありません。";
}

// Q10 関数-1
function sayHi($name = '大谷さん')
{
    echo 'こんにちは ' . $name;
}

sayHi('大谷さん');
sayHi('有倉さん');

// Q11 関数-2
$price = 1000;
function calcTaxInPrice ($price) {
    return $price * 1.1;
}

$taxlnprince = calcTaxInPrice($price);

   echo "1000円の商品の税込価格は{$taxlnprince}円です";

// Q12 関数とif文
function distinguishNum ($num) {
    if ($num % 2 === 1) {
        return $num . "は奇数です。";
    } else {
        return $num . "は偶数です。";
    }
}

$result1 = distinguishNum(11);
$result2 = distinguishNum(24);

echo $result1;
echo $result2;


// Q13 関数とswitch文
function evaluateGrade ($Grade) {
    switch ($Grade) {
        
        case "A":
        case "B":
        return "合格です。";
        
        case "C":
        return "合格ですが追加課題があります。";
        
        case "D":
         return "不合格です。";
         
        default:
        return "判定不明です。講師に問い合わせてください。";
    }
}

$result1 = evaluateGrade("A");
$result2 = evaluateGrade("E");

echo $result1;
echo $result2;

?>