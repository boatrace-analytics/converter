# Boatrace Analytics Converter

[![Build Status](https://github.com/boatrace-analytics/converter/workflows/tests/badge.svg)](https://github.com/boatrace-analytics/converter/actions?query=workflow%3Atests)
[![Coverage Status](https://coveralls.io/repos/github/boatrace-analytics/converter/badge.svg?branch=master)](https://coveralls.io/github/boatrace-analytics/converter?branch=master)
[![Latest Stable Version](https://poser.pugx.org/boatrace-analytics/converter/v/stable)](https://packagist.org/packages/boatrace-analytics/converter)
[![Latest Unstable Version](https://poser.pugx.org/boatrace-analytics/converter/v/unstable)](https://packagist.org/packages/boatrace-analytics/converter)
[![License](https://poser.pugx.org/boatrace-analytics/converter/license)](https://packagist.org/packages/boatrace-analytics/converter)

## Installation
```
$ composer require boatrace-analytics/converter
```

## Usage
```php
<?php

require __DIR__ . '/vendor/autoload.php';

use Boatrace\Analytics\Converter;

var_dump(Converter::convertToClassId('A1')); // int(1)
var_dump(Converter::convertToClassId('A2')); // int(2)
var_dump(Converter::convertToClassId('B1')); // int(3)
var_dump(Converter::convertToClassId('B2')); // int(4)

var_dump(Converter::convertToClassName(1)); // string(2) "A1"
var_dump(Converter::convertToClassName(2)); // string(2) "A2"
var_dump(Converter::convertToClassName(3)); // string(2) "B1"
var_dump(Converter::convertToClassName(4)); // string(2) "B2"

var_dump(Converter::convertToPlaceId('1')); // int(1)
var_dump(Converter::convertToPlaceId('2')); // int(2)
var_dump(Converter::convertToPlaceId('3')); // int(3)
var_dump(Converter::convertToPlaceId('4')); // int(4)
var_dump(Converter::convertToPlaceId('5')); // int(5)
var_dump(Converter::convertToPlaceId('6')); // int(6)
var_dump(Converter::convertToPlaceId('妨')); // int(7)
var_dump(Converter::convertToPlaceId('エ')); // int(8)
var_dump(Converter::convertToPlaceId('転')); // int(9)
var_dump(Converter::convertToPlaceId('落')); // int(10)
var_dump(Converter::convertToPlaceId('沈')); // int(11)
var_dump(Converter::convertToPlaceId('不')); // int(12)
var_dump(Converter::convertToPlaceId('失')); // int(13)
var_dump(Converter::convertToPlaceId('F')); // int(14)
var_dump(Converter::convertToPlaceId('L')); // int(15)
var_dump(Converter::convertToPlaceId('欠')); // int(16)

var_dump(Converter::convertToPlaceName(1)); // string(1) "1"
var_dump(Converter::convertToPlaceName(2)); // string(1) "2"
var_dump(Converter::convertToPlaceName(3)); // string(1) "3"
var_dump(Converter::convertToPlaceName(4)); // string(1) "4"
var_dump(Converter::convertToPlaceName(5)); // string(1) "5"
var_dump(Converter::convertToPlaceName(6)); // string(1) "6"
var_dump(Converter::convertToPlaceName(7)); // string(3) "妨"
var_dump(Converter::convertToPlaceName(8)); // string(3) "エ"
var_dump(Converter::convertToPlaceName(9)); // string(3) "転"
var_dump(Converter::convertToPlaceName(10)); // string(3) "落"
var_dump(Converter::convertToPlaceName(11)); // string(3) "沈"
var_dump(Converter::convertToPlaceName(12)); // string(3) "不"
var_dump(Converter::convertToPlaceName(13)); // string(3) "失"
var_dump(Converter::convertToPlaceName(14)); // string(1) "F"
var_dump(Converter::convertToPlaceName(15)); // string(1) "L"
var_dump(Converter::convertToPlaceName(16)); // string(3) "欠"

var_dump(Converter::convertToPrefectureId('北海道')); // int(1)
var_dump(Converter::convertToPrefectureId('青森')); // int(2)
var_dump(Converter::convertToPrefectureId('岩手')); // int(3)
var_dump(Converter::convertToPrefectureId('宮城')); // int(4)
var_dump(Converter::convertToPrefectureId('秋田')); // int(5)
var_dump(Converter::convertToPrefectureId('山形')); // int(6)
var_dump(Converter::convertToPrefectureId('福島')); // int(7)
var_dump(Converter::convertToPrefectureId('茨城')); // int(8)
var_dump(Converter::convertToPrefectureId('栃木')); // int(9)
var_dump(Converter::convertToPrefectureId('群馬')); // int(10)
var_dump(Converter::convertToPrefectureId('埼玉')); // int(11)
var_dump(Converter::convertToPrefectureId('千葉')); // int(12)
var_dump(Converter::convertToPrefectureId('東京')); // int(13)
var_dump(Converter::convertToPrefectureId('神奈川')); // int(14)
var_dump(Converter::convertToPrefectureId('新潟')); // int(15)
var_dump(Converter::convertToPrefectureId('富山')); // int(16)
var_dump(Converter::convertToPrefectureId('石川')); // int(17)
var_dump(Converter::convertToPrefectureId('福井')); // int(18)
var_dump(Converter::convertToPrefectureId('山梨')); // int(19)
var_dump(Converter::convertToPrefectureId('長野')); // int(20)
var_dump(Converter::convertToPrefectureId('岐阜')); // int(21)
var_dump(Converter::convertToPrefectureId('静岡')); // int(22)
var_dump(Converter::convertToPrefectureId('愛知')); // int(23)
var_dump(Converter::convertToPrefectureId('三重')); // int(24)
var_dump(Converter::convertToPrefectureId('滋賀')); // int(25)
var_dump(Converter::convertToPrefectureId('京都')); // int(26)
var_dump(Converter::convertToPrefectureId('大阪')); // int(27)
var_dump(Converter::convertToPrefectureId('兵庫')); // int(28)
var_dump(Converter::convertToPrefectureId('奈良')); // int(29)
var_dump(Converter::convertToPrefectureId('和歌山')); // int(30)
var_dump(Converter::convertToPrefectureId('鳥取')); // int(31)
var_dump(Converter::convertToPrefectureId('島根')); // int(32)
var_dump(Converter::convertToPrefectureId('岡山')); // int(33)
var_dump(Converter::convertToPrefectureId('広島')); // int(34)
var_dump(Converter::convertToPrefectureId('山口')); // int(35)
var_dump(Converter::convertToPrefectureId('徳島')); // int(36)
var_dump(Converter::convertToPrefectureId('香川')); // int(37)
var_dump(Converter::convertToPrefectureId('愛媛')); // int(38)
var_dump(Converter::convertToPrefectureId('高知')); // int(39)
var_dump(Converter::convertToPrefectureId('福岡')); // int(40)
var_dump(Converter::convertToPrefectureId('佐賀')); // int(41)
var_dump(Converter::convertToPrefectureId('長崎')); // int(42)
var_dump(Converter::convertToPrefectureId('熊本')); // int(43)
var_dump(Converter::convertToPrefectureId('大分')); // int(44)
var_dump(Converter::convertToPrefectureId('宮崎')); // int(45)
var_dump(Converter::convertToPrefectureId('鹿児島')); // int(46)
var_dump(Converter::convertToPrefectureId('沖縄')); // int(47)

var_dump(Converter::convertToPrefectureName(1)); // string(9) "北海道"
var_dump(Converter::convertToPrefectureName(2)); // string(6) "青森"
var_dump(Converter::convertToPrefectureName(3)); // string(6) "岩手"
var_dump(Converter::convertToPrefectureName(4)); // string(6) "宮城"
var_dump(Converter::convertToPrefectureName(5)); // string(6) "秋田"
var_dump(Converter::convertToPrefectureName(6)); // string(6) "山形"
var_dump(Converter::convertToPrefectureName(7)); // string(6) "福島"
var_dump(Converter::convertToPrefectureName(8)); // string(6) "茨城"
var_dump(Converter::convertToPrefectureName(9)); // string(6) "栃木"
var_dump(Converter::convertToPrefectureName(10)); // string(6) "群馬"
var_dump(Converter::convertToPrefectureName(11)); // string(6) "埼玉"
var_dump(Converter::convertToPrefectureName(12)); // string(6) "千葉"
var_dump(Converter::convertToPrefectureName(13)); // string(6) "東京"
var_dump(Converter::convertToPrefectureName(14)); // string(9) "神奈川"
var_dump(Converter::convertToPrefectureName(15)); // string(6) "新潟"
var_dump(Converter::convertToPrefectureName(16)); // string(6) "富山"
var_dump(Converter::convertToPrefectureName(17)); // string(6) "石川"
var_dump(Converter::convertToPrefectureName(18)); // string(6) "福井"
var_dump(Converter::convertToPrefectureName(19)); // string(6) "山梨"
var_dump(Converter::convertToPrefectureName(20)); // string(6) "長野"
var_dump(Converter::convertToPrefectureName(21)); // string(6) "岐阜"
var_dump(Converter::convertToPrefectureName(22)); // string(6) "静岡"
var_dump(Converter::convertToPrefectureName(23)); // string(6) "愛知"
var_dump(Converter::convertToPrefectureName(24)); // string(6) "三重"
var_dump(Converter::convertToPrefectureName(25)); // string(6) "滋賀"
var_dump(Converter::convertToPrefectureName(26)); // string(6) "京都"
var_dump(Converter::convertToPrefectureName(27)); // string(6) "大阪"
var_dump(Converter::convertToPrefectureName(28)); // string(6) "兵庫"
var_dump(Converter::convertToPrefectureName(29)); // string(6) "奈良"
var_dump(Converter::convertToPrefectureName(30)); // string(9) "和歌山"
var_dump(Converter::convertToPrefectureName(31)); // string(6) "鳥取"
var_dump(Converter::convertToPrefectureName(32)); // string(6) "島根"
var_dump(Converter::convertToPrefectureName(33)); // string(6) "岡山"
var_dump(Converter::convertToPrefectureName(34)); // string(6) "広島"
var_dump(Converter::convertToPrefectureName(35)); // string(6) "山口"
var_dump(Converter::convertToPrefectureName(36)); // string(6) "徳島"
var_dump(Converter::convertToPrefectureName(37)); // string(6) "香川"
var_dump(Converter::convertToPrefectureName(38)); // string(6) "愛媛"
var_dump(Converter::convertToPrefectureName(39)); // string(6) "高知"
var_dump(Converter::convertToPrefectureName(40)); // string(6) "福岡"
var_dump(Converter::convertToPrefectureName(41)); // string(6) "佐賀"
var_dump(Converter::convertToPrefectureName(42)); // string(6) "長崎"
var_dump(Converter::convertToPrefectureName(43)); // string(6) "熊本"
var_dump(Converter::convertToPrefectureName(44)); // string(6) "大分"
var_dump(Converter::convertToPrefectureName(45)); // string(6) "宮崎"
var_dump(Converter::convertToPrefectureName(46)); // string(9) "鹿児島"
var_dump(Converter::convertToPrefectureName(47)); // string(6) "沖縄"

var_dump(Converter::convertToStadiumId('桐生')); // int(1)
var_dump(Converter::convertToStadiumId('戸田')); // int(2)
var_dump(Converter::convertToStadiumId('江戸川')); // int(3)
var_dump(Converter::convertToStadiumId('平和島')); // int(4)
var_dump(Converter::convertToStadiumId('多摩川')); // int(5)
var_dump(Converter::convertToStadiumId('浜名湖')); // int(6)
var_dump(Converter::convertToStadiumId('蒲郡')); // int(7)
var_dump(Converter::convertToStadiumId('常滑')); // int(8)
var_dump(Converter::convertToStadiumId('津')); // int(9)
var_dump(Converter::convertToStadiumId('三国')); // int(10)
var_dump(Converter::convertToStadiumId('びわこ')); // int(11)
var_dump(Converter::convertToStadiumId('住之江')); // int(12)
var_dump(Converter::convertToStadiumId('尼崎')); // int(13)
var_dump(Converter::convertToStadiumId('鳴門')); // int(14)
var_dump(Converter::convertToStadiumId('丸亀')); // int(15)
var_dump(Converter::convertToStadiumId('児島')); // int(16)
var_dump(Converter::convertToStadiumId('宮島')); // int(17)
var_dump(Converter::convertToStadiumId('徳山')); // int(18)
var_dump(Converter::convertToStadiumId('下関')); // int(19)
var_dump(Converter::convertToStadiumId('若松')); // int(20)
var_dump(Converter::convertToStadiumId('芦屋')); // int(21)
var_dump(Converter::convertToStadiumId('福岡')); // int(22)
var_dump(Converter::convertToStadiumId('唐津')); // int(23)
var_dump(Converter::convertToStadiumId('大村')); // int(24)

var_dump(Converter::convertToStadiumName(1)); // string(6) "桐生"
var_dump(Converter::convertToStadiumName(2)); // string(6) "戸田"
var_dump(Converter::convertToStadiumName(3)); // string(9) "江戸川"
var_dump(Converter::convertToStadiumName(4)); // string(9) "平和島"
var_dump(Converter::convertToStadiumName(5)); // string(9) "多摩川"
var_dump(Converter::convertToStadiumName(6)); // string(9) "浜名湖"
var_dump(Converter::convertToStadiumName(7)); // string(6) "蒲郡"
var_dump(Converter::convertToStadiumName(8)); // string(6) "常滑"
var_dump(Converter::convertToStadiumName(9)); // string(3) "津"
var_dump(Converter::convertToStadiumName(10)); // string(6) "三国"
var_dump(Converter::convertToStadiumName(11)); // string(9) "びわこ"
var_dump(Converter::convertToStadiumName(12)); // string(9) "住之江"
var_dump(Converter::convertToStadiumName(13)); // string(6) "尼崎"
var_dump(Converter::convertToStadiumName(14)); // string(6) "鳴門"
var_dump(Converter::convertToStadiumName(15)); // string(6) "丸亀"
var_dump(Converter::convertToStadiumName(16)); // string(6) "児島"
var_dump(Converter::convertToStadiumName(17)); // string(6) "宮島"
var_dump(Converter::convertToStadiumName(18)); // string(6) "徳山"
var_dump(Converter::convertToStadiumName(19)); // string(6) "下関"
var_dump(Converter::convertToStadiumName(20)); // string(6) "若松"
var_dump(Converter::convertToStadiumName(21)); // string(6) "芦屋"
var_dump(Converter::convertToStadiumName(22)); // string(6) "福岡"
var_dump(Converter::convertToStadiumName(23)); // string(6) "唐津"
var_dump(Converter::convertToStadiumName(24)); // string(6) "大村"

var_dump(Converter::convertToTechniqueId('逃げ')); // int(1)
var_dump(Converter::convertToTechniqueId('差し')); // int(2)
var_dump(Converter::convertToTechniqueId('まくり')); // int(3)
var_dump(Converter::convertToTechniqueId('まくり差し')); // int(4)
var_dump(Converter::convertToTechniqueId('抜き')); // int(5)
var_dump(Converter::convertToTechniqueId('恵まれ')); // int(6)

var_dump(Converter::convertToTechniqueName(1)); // string(6) "逃げ"
var_dump(Converter::convertToTechniqueName(2)); // string(6) "差し"
var_dump(Converter::convertToTechniqueName(3)); // string(9) "まくり"
var_dump(Converter::convertToTechniqueName(4)); // string(15) "まくり差し"
var_dump(Converter::convertToTechniqueName(5)); // string(6) "抜き"
var_dump(Converter::convertToTechniqueName(6)); // string(9) "恵まれ"

var_dump(Converter::convertToWeatherId('晴')); // int(1)
var_dump(Converter::convertToWeatherId('曇り')); // int(2)
var_dump(Converter::convertToWeatherId('雨')); // int(3)
var_dump(Converter::convertToWeatherId('雪')); // int(4)
var_dump(Converter::convertToWeatherId('霧')); // int(5)

var_dump(Converter::convertToWeatherName(1)); // string(3) "晴"
var_dump(Converter::convertToWeatherName(2)); // string(6) "曇り"
var_dump(Converter::convertToWeatherName(3)); // string(3) "雨"
var_dump(Converter::convertToWeatherName(4)); // string(3) "雪"
var_dump(Converter::convertToWeatherName(5)); // string(3) "霧"
```

## License
The Boatrace Analytics Converter is open source software licensed under the [MIT license](LICENSE).
