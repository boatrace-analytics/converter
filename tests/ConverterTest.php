<?php

namespace Boatrace\Analytics\Tests;

use Boatrace\Analytics\Converter;
use PHPUnit\Framework\TestCase as PHPUnitTestCase;

/**
 * @author shimomo
 */
class ConverterTest extends PHPUnitTestCase
{
    /**
     * @return void
     */
    public function testConvertToString(): void
    {
        $this->assertNull(Converter::convertToString(null));
        $this->assertSame('', Converter::convertToString(' '));
        $this->assertSame('', Converter::convertToString('　'));
        $this->assertSame('1', Converter::convertToString('1'));
        $this->assertSame('1', Converter::convertToString('１'));
    }

    /**
     * @return void
     */
    public function testConvertToInt(): void
    {
        $this->assertNull(Converter::convertToInt(null));
        $this->assertSame(1, Converter::convertToInt('1'));
        $this->assertSame(1, Converter::convertToInt('１'));
    }

    /**
     * @return void
     */
    public function testConvertToFloat(): void
    {
        $this->assertNull(Converter::convertToFloat(null));
        $this->assertSame(1.0, Converter::convertToFloat('1.0'));
        $this->assertSame(1.0, Converter::convertToFloat('１.０'));
    }

    /**
     * @return void
     */
    public function testConvertToName(): void
    {
        $this->assertNull(Converter::convertToName(null));
        $this->assertSame('中辻 博訓', Converter::convertToName('中辻 博訓'));
        $this->assertSame('中辻 博訓', Converter::convertToName('中辻　博訓'));
    }

    /**
     * @return void
     */
    public function testConvertToFlying(): void
    {
        $this->assertNull(Converter::convertToFlying(null));
        $this->assertSame(1, Converter::convertToFlying('F1'));
        $this->assertSame(1, Converter::convertToFlying('F１'));
    }

    /**
     * @return void
     */
    public function testConvertToLate(): void
    {
        $this->assertNull(Converter::convertToLate(null));
        $this->assertSame(1, Converter::convertToLate('L1'));
        $this->assertSame(1, Converter::convertToLate('L１'));
    }

    /**
     * @return void
     */
    public function testConvertToStartTiming(): void
    {
        $this->assertNull(Converter::convertToStartTiming(null));
        $this->assertSame(0.10, Converter::convertToStartTiming('.10'));
        $this->assertSame(0.10, Converter::convertToStartTiming('.１０'));
        $this->assertSame(1.0, Converter::convertToStartTiming('L'));
        $this->assertSame(-1.0, Converter::convertToStartTiming('F'));
    }

    /**
     * @return void
     */
    public function testConvertToWind(): void
    {
        $this->assertNull(Converter::convertToWind(null));
        $this->assertSame(1, Converter::convertToWind('1m'));
        $this->assertSame(1, Converter::convertToWind('１m'));
    }

    /**
     * @return void
     */
    public function testConvertToWave(): void
    {
        $this->assertNull(Converter::convertToWave(null));
        $this->assertSame(1, Converter::convertToWave('1cm'));
        $this->assertSame(1, Converter::convertToWave('１cm'));
    }

    /**
     * @return void
     */
    public function testConvertToTemperature(): void
    {
        $this->assertNull(Converter::convertToTemperature(null));
        $this->assertSame(1.0, Converter::convertToTemperature('1.0℃'));
        $this->assertSame(1.0, Converter::convertToTemperature('１.０℃'));
    }

    /**
     * @return void
     */
    public function testConvertToDate(): void
    {
        $this->assertNull(Converter::convertToDate(null));
        $this->assertSame('2019-07-01', Converter::convertToDate('20190701'));
    }

    /**
     * @return void
     */
    public function testConvertToDateTime(): void
    {
        $this->assertNull(Converter::convertToDateTime(null));
        $this->assertSame('2019-07-01 12:30:00', Converter::convertToDateTime('20190701 123000'));
    }

    /**
     * @return void
     */
    public function testConvertToClassId(): void
    {
        $this->assertNull(Converter::convertToClassId(null));
        $this->assertNull(Converter::convertToClassId('競艇'));
        $this->assertSame(1, Converter::convertToClassId('A1'));
        $this->assertSame(1, Converter::convertToClassId('A１'));
        $this->assertSame(2, Converter::convertToClassId('A2'));
        $this->assertSame(2, Converter::convertToClassId('A２'));
        $this->assertSame(3, Converter::convertToClassId('B1'));
        $this->assertSame(3, Converter::convertToClassId('B１'));
        $this->assertSame(4, Converter::convertToClassId('B2'));
        $this->assertSame(4, Converter::convertToClassId('B２'));
    }

    /**
     * @return void
     */
    public function testConvertToClassName(): void
    {
        $this->assertNull(Converter::convertToClassName(null));
        $this->assertNull(Converter::convertToClassName(0));
        $this->assertSame('A1', Converter::convertToClassName(1));
        $this->assertSame('A2', Converter::convertToClassName(2));
        $this->assertSame('B1', Converter::convertToClassName(3));
        $this->assertSame('B2', Converter::convertToClassName(4));
    }

    /**
     * @return void
     */
    public function testConvertToPlaceId(): void
    {
        $this->assertNull(Converter::convertToPlaceId(null));
        $this->assertNull(Converter::convertToPlaceId('競艇'));
        $this->assertSame(1, Converter::convertToPlaceId('1'));
        $this->assertSame(1, Converter::convertToPlaceId('１'));
        $this->assertSame(2, Converter::convertToPlaceId('2'));
        $this->assertSame(2, Converter::convertToPlaceId('２'));
        $this->assertSame(3, Converter::convertToPlaceId('3'));
        $this->assertSame(3, Converter::convertToPlaceId('３'));
        $this->assertSame(4, Converter::convertToPlaceId('4'));
        $this->assertSame(4, Converter::convertToPlaceId('４'));
        $this->assertSame(5, Converter::convertToPlaceId('5'));
        $this->assertSame(5, Converter::convertToPlaceId('５'));
        $this->assertSame(6, Converter::convertToPlaceId('6'));
        $this->assertSame(6, Converter::convertToPlaceId('６'));
        $this->assertSame(7, Converter::convertToPlaceId('妨'));
        $this->assertSame(8, Converter::convertToPlaceId('エ'));
        $this->assertSame(9, Converter::convertToPlaceId('転'));
        $this->assertSame(10, Converter::convertToPlaceId('落'));
        $this->assertSame(11, Converter::convertToPlaceId('沈'));
        $this->assertSame(12, Converter::convertToPlaceId('不'));
        $this->assertSame(13, Converter::convertToPlaceId('失'));
        $this->assertSame(14, Converter::convertToPlaceId('F'));
        $this->assertSame(15, Converter::convertToPlaceId('L'));
        $this->assertSame(16, Converter::convertToPlaceId('欠'));
    }

    /**
     * @return void
     */
    public function testConvertToPlaceName(): void
    {
        $this->assertNull(Converter::convertToPlaceName(null));
        $this->assertNull(Converter::convertToPlaceName(0));
        $this->assertSame('1', Converter::convertToPlaceName(1));
        $this->assertSame('2', Converter::convertToPlaceName(2));
        $this->assertSame('3', Converter::convertToPlaceName(3));
        $this->assertSame('4', Converter::convertToPlaceName(4));
        $this->assertSame('5', Converter::convertToPlaceName(5));
        $this->assertSame('6', Converter::convertToPlaceName(6));
        $this->assertSame('妨', Converter::convertToPlaceName(7));
        $this->assertSame('エ', Converter::convertToPlaceName(8));
        $this->assertSame('転', Converter::convertToPlaceName(9));
        $this->assertSame('落', Converter::convertToPlaceName(10));
        $this->assertSame('沈', Converter::convertToPlaceName(11));
        $this->assertSame('不', Converter::convertToPlaceName(12));
        $this->assertSame('失', Converter::convertToPlaceName(13));
        $this->assertSame('F', Converter::convertToPlaceName(14));
        $this->assertSame('L', Converter::convertToPlaceName(15));
        $this->assertSame('欠', Converter::convertToPlaceName(16));
    }

    /**
     * @return void
     */
    public function testConvertToPrefectureId(): void
    {
        $this->assertNull(Converter::convertToPrefectureId(null));
        $this->assertNull(Converter::convertToPrefectureId('競艇'));
        $this->assertSame(1, Converter::convertToPrefectureId('北海道'));
        $this->assertSame(2, Converter::convertToPrefectureId('青森'));
        $this->assertSame(3, Converter::convertToPrefectureId('岩手'));
        $this->assertSame(4, Converter::convertToPrefectureId('宮城'));
        $this->assertSame(5, Converter::convertToPrefectureId('秋田'));
        $this->assertSame(6, Converter::convertToPrefectureId('山形'));
        $this->assertSame(7, Converter::convertToPrefectureId('福島'));
        $this->assertSame(8, Converter::convertToPrefectureId('茨城'));
        $this->assertSame(9, Converter::convertToPrefectureId('栃木'));
        $this->assertSame(10, Converter::convertToPrefectureId('群馬'));
        $this->assertSame(11, Converter::convertToPrefectureId('埼玉'));
        $this->assertSame(12, Converter::convertToPrefectureId('千葉'));
        $this->assertSame(13, Converter::convertToPrefectureId('東京'));
        $this->assertSame(14, Converter::convertToPrefectureId('神奈川'));
        $this->assertSame(15, Converter::convertToPrefectureId('新潟'));
        $this->assertSame(16, Converter::convertToPrefectureId('富山'));
        $this->assertSame(17, Converter::convertToPrefectureId('石川'));
        $this->assertSame(18, Converter::convertToPrefectureId('福井'));
        $this->assertSame(19, Converter::convertToPrefectureId('山梨'));
        $this->assertSame(20, Converter::convertToPrefectureId('長野'));
        $this->assertSame(21, Converter::convertToPrefectureId('岐阜'));
        $this->assertSame(22, Converter::convertToPrefectureId('静岡'));
        $this->assertSame(23, Converter::convertToPrefectureId('愛知'));
        $this->assertSame(24, Converter::convertToPrefectureId('三重'));
        $this->assertSame(25, Converter::convertToPrefectureId('滋賀'));
        $this->assertSame(26, Converter::convertToPrefectureId('京都'));
        $this->assertSame(27, Converter::convertToPrefectureId('大阪'));
        $this->assertSame(28, Converter::convertToPrefectureId('兵庫'));
        $this->assertSame(29, Converter::convertToPrefectureId('奈良'));
        $this->assertSame(30, Converter::convertToPrefectureId('和歌山'));
        $this->assertSame(31, Converter::convertToPrefectureId('鳥取'));
        $this->assertSame(32, Converter::convertToPrefectureId('島根'));
        $this->assertSame(33, Converter::convertToPrefectureId('岡山'));
        $this->assertSame(34, Converter::convertToPrefectureId('広島'));
        $this->assertSame(35, Converter::convertToPrefectureId('山口'));
        $this->assertSame(36, Converter::convertToPrefectureId('徳島'));
        $this->assertSame(37, Converter::convertToPrefectureId('香川'));
        $this->assertSame(38, Converter::convertToPrefectureId('愛媛'));
        $this->assertSame(39, Converter::convertToPrefectureId('高知'));
        $this->assertSame(40, Converter::convertToPrefectureId('福岡'));
        $this->assertSame(41, Converter::convertToPrefectureId('佐賀'));
        $this->assertSame(42, Converter::convertToPrefectureId('長崎'));
        $this->assertSame(43, Converter::convertToPrefectureId('熊本'));
        $this->assertSame(44, Converter::convertToPrefectureId('大分'));
        $this->assertSame(45, Converter::convertToPrefectureId('宮崎'));
        $this->assertSame(46, Converter::convertToPrefectureId('鹿児島'));
        $this->assertSame(47, Converter::convertToPrefectureId('沖縄'));
    }

    /**
     * @return void
     */
    public function testConvertToPrefectureName(): void
    {
        $this->assertNull(Converter::convertToPrefectureName(null));
        $this->assertNull(Converter::convertToPrefectureName(0));
        $this->assertSame('北海道', Converter::convertToPrefectureName(1));
        $this->assertSame('青森', Converter::convertToPrefectureName(2));
        $this->assertSame('岩手', Converter::convertToPrefectureName(3));
        $this->assertSame('宮城', Converter::convertToPrefectureName(4));
        $this->assertSame('秋田', Converter::convertToPrefectureName(5));
        $this->assertSame('山形', Converter::convertToPrefectureName(6));
        $this->assertSame('福島', Converter::convertToPrefectureName(7));
        $this->assertSame('茨城', Converter::convertToPrefectureName(8));
        $this->assertSame('栃木', Converter::convertToPrefectureName(9));
        $this->assertSame('群馬', Converter::convertToPrefectureName(10));
        $this->assertSame('埼玉', Converter::convertToPrefectureName(11));
        $this->assertSame('千葉', Converter::convertToPrefectureName(12));
        $this->assertSame('東京', Converter::convertToPrefectureName(13));
        $this->assertSame('神奈川', Converter::convertToPrefectureName(14));
        $this->assertSame('新潟', Converter::convertToPrefectureName(15));
        $this->assertSame('富山', Converter::convertToPrefectureName(16));
        $this->assertSame('石川', Converter::convertToPrefectureName(17));
        $this->assertSame('福井', Converter::convertToPrefectureName(18));
        $this->assertSame('山梨', Converter::convertToPrefectureName(19));
        $this->assertSame('長野', Converter::convertToPrefectureName(20));
        $this->assertSame('岐阜', Converter::convertToPrefectureName(21));
        $this->assertSame('静岡', Converter::convertToPrefectureName(22));
        $this->assertSame('愛知', Converter::convertToPrefectureName(23));
        $this->assertSame('三重', Converter::convertToPrefectureName(24));
        $this->assertSame('滋賀', Converter::convertToPrefectureName(25));
        $this->assertSame('京都', Converter::convertToPrefectureName(26));
        $this->assertSame('大阪', Converter::convertToPrefectureName(27));
        $this->assertSame('兵庫', Converter::convertToPrefectureName(28));
        $this->assertSame('奈良', Converter::convertToPrefectureName(29));
        $this->assertSame('和歌山', Converter::convertToPrefectureName(30));
        $this->assertSame('鳥取', Converter::convertToPrefectureName(31));
        $this->assertSame('島根', Converter::convertToPrefectureName(32));
        $this->assertSame('岡山', Converter::convertToPrefectureName(33));
        $this->assertSame('広島', Converter::convertToPrefectureName(34));
        $this->assertSame('山口', Converter::convertToPrefectureName(35));
        $this->assertSame('徳島', Converter::convertToPrefectureName(36));
        $this->assertSame('香川', Converter::convertToPrefectureName(37));
        $this->assertSame('愛媛', Converter::convertToPrefectureName(38));
        $this->assertSame('高知', Converter::convertToPrefectureName(39));
        $this->assertSame('福岡', Converter::convertToPrefectureName(40));
        $this->assertSame('佐賀', Converter::convertToPrefectureName(41));
        $this->assertSame('長崎', Converter::convertToPrefectureName(42));
        $this->assertSame('熊本', Converter::convertToPrefectureName(43));
        $this->assertSame('大分', Converter::convertToPrefectureName(44));
        $this->assertSame('宮崎', Converter::convertToPrefectureName(45));
        $this->assertSame('鹿児島', Converter::convertToPrefectureName(46));
        $this->assertSame('沖縄', Converter::convertToPrefectureName(47));
    }

    /**
     * @return void
     */
    public function testConvertToStadiumId(): void
    {
        $this->assertNull(Converter::convertToStadiumId(null));
        $this->assertNull(Converter::convertToStadiumId('競艇'));
        $this->assertSame(1, Converter::convertToStadiumId('桐生'));
        $this->assertSame(2, Converter::convertToStadiumId('戸田'));
        $this->assertSame(3, Converter::convertToStadiumId('江戸川'));
        $this->assertSame(4, Converter::convertToStadiumId('平和島'));
        $this->assertSame(5, Converter::convertToStadiumId('多摩川'));
        $this->assertSame(6, Converter::convertToStadiumId('浜名湖'));
        $this->assertSame(7, Converter::convertToStadiumId('蒲郡'));
        $this->assertSame(8, Converter::convertToStadiumId('常滑'));
        $this->assertSame(9, Converter::convertToStadiumId('津'));
        $this->assertSame(10, Converter::convertToStadiumId('三国'));
        $this->assertSame(11, Converter::convertToStadiumId('びわこ'));
        $this->assertSame(12, Converter::convertToStadiumId('住之江'));
        $this->assertSame(13, Converter::convertToStadiumId('尼崎'));
        $this->assertSame(14, Converter::convertToStadiumId('鳴門'));
        $this->assertSame(15, Converter::convertToStadiumId('丸亀'));
        $this->assertSame(16, Converter::convertToStadiumId('児島'));
        $this->assertSame(17, Converter::convertToStadiumId('宮島'));
        $this->assertSame(18, Converter::convertToStadiumId('徳山'));
        $this->assertSame(19, Converter::convertToStadiumId('下関'));
        $this->assertSame(20, Converter::convertToStadiumId('若松'));
        $this->assertSame(21, Converter::convertToStadiumId('芦屋'));
        $this->assertSame(22, Converter::convertToStadiumId('福岡'));
        $this->assertSame(23, Converter::convertToStadiumId('唐津'));
        $this->assertSame(24, Converter::convertToStadiumId('大村'));
    }

    /**
     * @return void
     */
    public function testConvertToStadiumName(): void
    {
        $this->assertNull(Converter::convertToStadiumName(null));
        $this->assertNull(Converter::convertToStadiumName(0));
        $this->assertSame('桐生', Converter::convertToStadiumName(1));
        $this->assertSame('戸田', Converter::convertToStadiumName(2));
        $this->assertSame('江戸川', Converter::convertToStadiumName(3));
        $this->assertSame('平和島', Converter::convertToStadiumName(4));
        $this->assertSame('多摩川', Converter::convertToStadiumName(5));
        $this->assertSame('浜名湖', Converter::convertToStadiumName(6));
        $this->assertSame('蒲郡', Converter::convertToStadiumName(7));
        $this->assertSame('常滑', Converter::convertToStadiumName(8));
        $this->assertSame('津', Converter::convertToStadiumName(9));
        $this->assertSame('三国', Converter::convertToStadiumName(10));
        $this->assertSame('びわこ', Converter::convertToStadiumName(11));
        $this->assertSame('住之江', Converter::convertToStadiumName(12));
        $this->assertSame('尼崎', Converter::convertToStadiumName(13));
        $this->assertSame('鳴門', Converter::convertToStadiumName(14));
        $this->assertSame('丸亀', Converter::convertToStadiumName(15));
        $this->assertSame('児島', Converter::convertToStadiumName(16));
        $this->assertSame('宮島', Converter::convertToStadiumName(17));
        $this->assertSame('徳山', Converter::convertToStadiumName(18));
        $this->assertSame('下関', Converter::convertToStadiumName(19));
        $this->assertSame('若松', Converter::convertToStadiumName(20));
        $this->assertSame('芦屋', Converter::convertToStadiumName(21));
        $this->assertSame('福岡', Converter::convertToStadiumName(22));
        $this->assertSame('唐津', Converter::convertToStadiumName(23));
        $this->assertSame('大村', Converter::convertToStadiumName(24));
    }

    /**
     * @return void
     */
    public function testConvertToTechniqueId(): void
    {
        $this->assertNull(Converter::convertToTechniqueId(null));
        $this->assertNull(Converter::convertToTechniqueId('競艇'));
        $this->assertSame(1, Converter::convertToTechniqueId('逃げ'));
        $this->assertSame(2, Converter::convertToTechniqueId('差し'));
        $this->assertSame(3, Converter::convertToTechniqueId('まくり'));
        $this->assertSame(4, Converter::convertToTechniqueId('まくり差し'));
        $this->assertSame(5, Converter::convertToTechniqueId('抜き'));
        $this->assertSame(6, Converter::convertToTechniqueId('恵まれ'));
    }

    /**
     * @return void
     */
    public function testConvertToTechniqueName(): void
    {
        $this->assertNull(Converter::convertToTechniqueName(null));
        $this->assertNull(Converter::convertToTechniqueName(0));
        $this->assertSame('逃げ', Converter::convertToTechniqueName(1));
        $this->assertSame('差し', Converter::convertToTechniqueName(2));
        $this->assertSame('まくり', Converter::convertToTechniqueName(3));
        $this->assertSame('まくり差し', Converter::convertToTechniqueName(4));
        $this->assertSame('抜き', Converter::convertToTechniqueName(5));
        $this->assertSame('恵まれ', Converter::convertToTechniqueName(6));
    }

    /**
     * @return void
     */
    public function testConvertToWeatherId(): void
    {
        $this->assertNull(Converter::convertToWeatherId(null));
        $this->assertNull(Converter::convertToWeatherId('競艇'));
        $this->assertSame(1, Converter::convertToWeatherId('晴'));
        $this->assertSame(2, Converter::convertToWeatherId('曇り'));
        $this->assertSame(3, Converter::convertToWeatherId('雨'));
        $this->assertSame(4, Converter::convertToWeatherId('雪'));
        $this->assertSame(5, Converter::convertToWeatherId('霧'));
    }

    /**
     * @return void
     */
    public function testConvertToWeatherName(): void
    {
        $this->assertNull(Converter::convertToWeatherName(null));
        $this->assertNull(Converter::convertToWeatherName(0));
        $this->assertSame('晴', Converter::convertToWeatherName(1));
        $this->assertSame('曇り', Converter::convertToWeatherName(2));
        $this->assertSame('雨', Converter::convertToWeatherName(3));
        $this->assertSame('雪', Converter::convertToWeatherName(4));
        $this->assertSame('霧', Converter::convertToWeatherName(5));
    }
}
