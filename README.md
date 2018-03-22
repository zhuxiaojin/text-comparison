# text-comparison
文本相似度比较
# 
```
//使用方法
$lcs = new TextComparison();
$first_word="党政教育的意义是为了让政府更好的服务人民";
$second_word="为了让政府更好的服务人民";
//返回相似度（如果设置了score会返回比较后的占比分数）
$data=$lcs->setScore(15)->getSimilar($first_word,$second_word);
//输出 Array ( [similar] => 0.75 [score] => 12 )
```
