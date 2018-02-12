<?php
namespace Yurun\Util;
require_once dirname(__DIR__) . '/vendor/autoload.php';
use \Yurun\Util\Chinese\Pinyin;
use \Yurun\Util\Chinese\PinyinSplit;
$info = Chinese::info();
// 信息
echo '总共收录 ', $info['chars'], ' 个汉字，', $info['scCount'], ' 个简体字，', $info['tcCount'], ' 个繁体字，', $info['otherCount'], ' 个其它汉字。', PHP_EOL;
// 汉字转拼音
$string = '恭喜發財！把我翻译成拼音看下？';
echo $string, PHP_EOL;
echo '所有结果:', PHP_EOL;
var_dump(Chinese::toPinyin($string));
echo '全拼:', PHP_EOL;
var_dump(Chinese::toPinyin($string, Pinyin::CONVERT_MODE_PINYIN));
echo '首字母:', PHP_EOL;
var_dump(Chinese::toPinyin($string, Pinyin::CONVERT_MODE_PINYIN_FIRST));
echo '读音:', PHP_EOL;
var_dump(Chinese::toPinyin($string, Pinyin::CONVERT_MODE_PINYIN_SOUND));
echo '读音数字:', PHP_EOL;
var_dump(Chinese::toPinyin($string, Pinyin::CONVERT_MODE_PINYIN_SOUND_NUMBER));
echo '自选:', PHP_EOL;
var_dump(Chinese::toPinyin($string, Pinyin::CONVERT_MODE_PINYIN | Pinyin::CONVERT_MODE_PINYIN_SOUND_NUMBER));
// 拼音分词
$string = 'xianggang';
echo '"', $string, '"的分词结果：', PHP_EOL;
var_dump(PinyinSplit::split($string));