<?php

namespace Boatrace\Analytics\Tests;

use Boatrace\Analytics\MainConverter;
use PHPUnit\Framework\TestCase as PHPUnitTestCase;

/**
 * @author shimomo
 */
class MainConverterTest extends PHPUnitTestCase
{
    /**
     * @var \Boatrace\Analytics\MainConverter
     */
    protected $converter;

    /**
     * @return void
     */
    public function setUp(): void
    {
        $this->converter = new MainConverter;
    }

    /**
     * @return void
     */
    public function testConvertToString(): void
    {
        $this->assertNull($this->converter->convertToString(null));
        $this->assertSame('', $this->converter->convertToString(' '));
        $this->assertSame('', $this->converter->convertToString('　'));
        $this->assertSame('1', $this->converter->convertToString('1'));
        $this->assertSame('1', $this->converter->convertToString('１'));
    }

    /**
     * @return void
     */
    public function testConvertToInt(): void
    {
        $this->assertNull($this->converter->convertToInt(null));
        $this->assertSame(1, $this->converter->convertToInt('1'));
        $this->assertSame(1, $this->converter->convertToInt('１'));
    }

    /**
     * @return void
     */
    public function testConvertToFloat(): void
    {
        $this->assertNull($this->converter->convertToFloat(null));
        $this->assertSame(1.0, $this->converter->convertToFloat('1.0'));
        $this->assertSame(1.0, $this->converter->convertToFloat('１.０'));
    }

    /**
     * @return void
     */
    public function testConvertToName(): void
    {
        $this->assertNull($this->converter->convertToName(null));
        $this->assertSame('中辻 博訓', $this->converter->convertToName('中辻 博訓'));
        $this->assertSame('中辻 博訓', $this->converter->convertToName('中辻　博訓'));
    }

    /**
     * @return void
     */
    public function testConvertToFlying(): void
    {
        $this->assertNull($this->converter->convertToFlying(null));
        $this->assertSame(1, $this->converter->convertToFlying('F1'));
        $this->assertSame(1, $this->converter->convertToFlying('F１'));
    }

    /**
     * @return void
     */
    public function testConvertToLate(): void
    {
        $this->assertNull($this->converter->convertToLate(null));
        $this->assertSame(1, $this->converter->convertToLate('L1'));
        $this->assertSame(1, $this->converter->convertToLate('L１'));
    }

    /**
     * @return void
     */
    public function testConvertToStartTiming(): void
    {
        $this->assertNull($this->converter->convertToStartTiming(null));
        $this->assertSame(0.10, $this->converter->convertToStartTiming('.10'));
        $this->assertSame(0.10, $this->converter->convertToStartTiming('.１０'));
        $this->assertSame(1.0, $this->converter->convertToStartTiming('L'));
        $this->assertSame(-1.0, $this->converter->convertToStartTiming('F'));
    }

    /**
     * @return void
     */
    public function testConvertToWind(): void
    {
        $this->assertNull($this->converter->convertToWind(null));
        $this->assertSame(1, $this->converter->convertToWind('1m'));
        $this->assertSame(1, $this->converter->convertToWind('１m'));
    }

    /**
     * @return void
     */
    public function testConvertToWave(): void
    {
        $this->assertNull($this->converter->convertToWave(null));
        $this->assertSame(1, $this->converter->convertToWave('1cm'));
        $this->assertSame(1, $this->converter->convertToWave('１cm'));
    }

    /**
     * @return void
     */
    public function testConvertToTemperature(): void
    {
        $this->assertNull($this->converter->convertToTemperature(null));
        $this->assertSame(1.0, $this->converter->convertToTemperature('1.0℃'));
        $this->assertSame(1.0, $this->converter->convertToTemperature('１.０℃'));
    }

    /**
     * @return void
     */
    public function testConvertToDate(): void
    {
        $this->assertNull($this->converter->convertToDate(null));
        $this->assertSame('2019-07-01', $this->converter->convertToDate('20190701'));
    }

    /**
     * @return void
     */
    public function testConvertToDateTime(): void
    {
        $this->assertNull($this->converter->convertToDateTime(null));
        $this->assertSame('2019-07-01 12:30:00', $this->converter->convertToDateTime('20190701 123000'));
    }

    /**
     * @return void
     */
    public function testConvertToClassId(): void
    {
        $this->assertNull($this->converter->convertToClassId(null));
        $this->assertNull($this->converter->convertToClassId('競艇'));
        $this->assertSame(1, $this->converter->convertToClassId('A1'));
        $this->assertSame(1, $this->converter->convertToClassId('A１'));
        $this->assertSame(2, $this->converter->convertToClassId('A2'));
        $this->assertSame(2, $this->converter->convertToClassId('A２'));
        $this->assertSame(3, $this->converter->convertToClassId('B1'));
        $this->assertSame(3, $this->converter->convertToClassId('B１'));
        $this->assertSame(4, $this->converter->convertToClassId('B2'));
        $this->assertSame(4, $this->converter->convertToClassId('B２'));
    }

    /**
     * @return void
     */
    public function testConvertToClassName(): void
    {
        $this->assertNull($this->converter->convertToClassName(null));
        $this->assertNull($this->converter->convertToClassName(0));
        $this->assertSame('A1', $this->converter->convertToClassName(1));
        $this->assertSame('A2', $this->converter->convertToClassName(2));
        $this->assertSame('B1', $this->converter->convertToClassName(3));
        $this->assertSame('B2', $this->converter->convertToClassName(4));
    }

    /**
     * @return void
     */
    public function testConvertToPlaceId(): void
    {
        $this->assertNull($this->converter->convertToPlaceId(null));
        $this->assertNull($this->converter->convertToPlaceId('競艇'));
        $this->assertSame(1, $this->converter->convertToPlaceId('1'));
        $this->assertSame(1, $this->converter->convertToPlaceId('１'));
        $this->assertSame(2, $this->converter->convertToPlaceId('2'));
        $this->assertSame(2, $this->converter->convertToPlaceId('２'));
        $this->assertSame(3, $this->converter->convertToPlaceId('3'));
        $this->assertSame(3, $this->converter->convertToPlaceId('３'));
        $this->assertSame(4, $this->converter->convertToPlaceId('4'));
        $this->assertSame(4, $this->converter->convertToPlaceId('４'));
        $this->assertSame(5, $this->converter->convertToPlaceId('5'));
        $this->assertSame(5, $this->converter->convertToPlaceId('５'));
        $this->assertSame(6, $this->converter->convertToPlaceId('6'));
        $this->assertSame(6, $this->converter->convertToPlaceId('６'));
        $this->assertSame(7, $this->converter->convertToPlaceId('妨'));
        $this->assertSame(8, $this->converter->convertToPlaceId('エ'));
        $this->assertSame(9, $this->converter->convertToPlaceId('転'));
        $this->assertSame(10, $this->converter->convertToPlaceId('落'));
        $this->assertSame(11, $this->converter->convertToPlaceId('沈'));
        $this->assertSame(12, $this->converter->convertToPlaceId('不'));
        $this->assertSame(13, $this->converter->convertToPlaceId('失'));
        $this->assertSame(14, $this->converter->convertToPlaceId('F'));
        $this->assertSame(15, $this->converter->convertToPlaceId('L'));
        $this->assertSame(16, $this->converter->convertToPlaceId('欠'));
    }

    /**
     * @return void
     */
    public function testConvertToPlaceName(): void
    {
        $this->assertNull($this->converter->convertToPlaceName(null));
        $this->assertNull($this->converter->convertToPlaceName(0));
        $this->assertSame('1', $this->converter->convertToPlaceName(1));
        $this->assertSame('2', $this->converter->convertToPlaceName(2));
        $this->assertSame('3', $this->converter->convertToPlaceName(3));
        $this->assertSame('4', $this->converter->convertToPlaceName(4));
        $this->assertSame('5', $this->converter->convertToPlaceName(5));
        $this->assertSame('6', $this->converter->convertToPlaceName(6));
        $this->assertSame('妨', $this->converter->convertToPlaceName(7));
        $this->assertSame('エ', $this->converter->convertToPlaceName(8));
        $this->assertSame('転', $this->converter->convertToPlaceName(9));
        $this->assertSame('落', $this->converter->convertToPlaceName(10));
        $this->assertSame('沈', $this->converter->convertToPlaceName(11));
        $this->assertSame('不', $this->converter->convertToPlaceName(12));
        $this->assertSame('失', $this->converter->convertToPlaceName(13));
        $this->assertSame('F', $this->converter->convertToPlaceName(14));
        $this->assertSame('L', $this->converter->convertToPlaceName(15));
        $this->assertSame('欠', $this->converter->convertToPlaceName(16));
    }

    /**
     * @return void
     */
    public function testConvertToPrefectureId(): void
    {
        $this->assertNull($this->converter->convertToPrefectureId(null));
        $this->assertNull($this->converter->convertToPrefectureId('競艇'));
        $this->assertSame(1, $this->converter->convertToPrefectureId('北海道'));
        $this->assertSame(2, $this->converter->convertToPrefectureId('青森'));
        $this->assertSame(3, $this->converter->convertToPrefectureId('岩手'));
        $this->assertSame(4, $this->converter->convertToPrefectureId('宮城'));
        $this->assertSame(5, $this->converter->convertToPrefectureId('秋田'));
        $this->assertSame(6, $this->converter->convertToPrefectureId('山形'));
        $this->assertSame(7, $this->converter->convertToPrefectureId('福島'));
        $this->assertSame(8, $this->converter->convertToPrefectureId('茨城'));
        $this->assertSame(9, $this->converter->convertToPrefectureId('栃木'));
        $this->assertSame(10, $this->converter->convertToPrefectureId('群馬'));
        $this->assertSame(11, $this->converter->convertToPrefectureId('埼玉'));
        $this->assertSame(12, $this->converter->convertToPrefectureId('千葉'));
        $this->assertSame(13, $this->converter->convertToPrefectureId('東京'));
        $this->assertSame(14, $this->converter->convertToPrefectureId('神奈川'));
        $this->assertSame(15, $this->converter->convertToPrefectureId('新潟'));
        $this->assertSame(16, $this->converter->convertToPrefectureId('富山'));
        $this->assertSame(17, $this->converter->convertToPrefectureId('石川'));
        $this->assertSame(18, $this->converter->convertToPrefectureId('福井'));
        $this->assertSame(19, $this->converter->convertToPrefectureId('山梨'));
        $this->assertSame(20, $this->converter->convertToPrefectureId('長野'));
        $this->assertSame(21, $this->converter->convertToPrefectureId('岐阜'));
        $this->assertSame(22, $this->converter->convertToPrefectureId('静岡'));
        $this->assertSame(23, $this->converter->convertToPrefectureId('愛知'));
        $this->assertSame(24, $this->converter->convertToPrefectureId('三重'));
        $this->assertSame(25, $this->converter->convertToPrefectureId('滋賀'));
        $this->assertSame(26, $this->converter->convertToPrefectureId('京都'));
        $this->assertSame(27, $this->converter->convertToPrefectureId('大阪'));
        $this->assertSame(28, $this->converter->convertToPrefectureId('兵庫'));
        $this->assertSame(29, $this->converter->convertToPrefectureId('奈良'));
        $this->assertSame(30, $this->converter->convertToPrefectureId('和歌山'));
        $this->assertSame(31, $this->converter->convertToPrefectureId('鳥取'));
        $this->assertSame(32, $this->converter->convertToPrefectureId('島根'));
        $this->assertSame(33, $this->converter->convertToPrefectureId('岡山'));
        $this->assertSame(34, $this->converter->convertToPrefectureId('広島'));
        $this->assertSame(35, $this->converter->convertToPrefectureId('山口'));
        $this->assertSame(36, $this->converter->convertToPrefectureId('徳島'));
        $this->assertSame(37, $this->converter->convertToPrefectureId('香川'));
        $this->assertSame(38, $this->converter->convertToPrefectureId('愛媛'));
        $this->assertSame(39, $this->converter->convertToPrefectureId('高知'));
        $this->assertSame(40, $this->converter->convertToPrefectureId('福岡'));
        $this->assertSame(41, $this->converter->convertToPrefectureId('佐賀'));
        $this->assertSame(42, $this->converter->convertToPrefectureId('長崎'));
        $this->assertSame(43, $this->converter->convertToPrefectureId('熊本'));
        $this->assertSame(44, $this->converter->convertToPrefectureId('大分'));
        $this->assertSame(45, $this->converter->convertToPrefectureId('宮崎'));
        $this->assertSame(46, $this->converter->convertToPrefectureId('鹿児島'));
        $this->assertSame(47, $this->converter->convertToPrefectureId('沖縄'));
    }

    /**
     * @return void
     */
    public function testConvertToPrefectureName(): void
    {
        $this->assertNull($this->converter->convertToPrefectureName(null));
        $this->assertNull($this->converter->convertToPrefectureName(0));
        $this->assertSame('北海道', $this->converter->convertToPrefectureName(1));
        $this->assertSame('青森', $this->converter->convertToPrefectureName(2));
        $this->assertSame('岩手', $this->converter->convertToPrefectureName(3));
        $this->assertSame('宮城', $this->converter->convertToPrefectureName(4));
        $this->assertSame('秋田', $this->converter->convertToPrefectureName(5));
        $this->assertSame('山形', $this->converter->convertToPrefectureName(6));
        $this->assertSame('福島', $this->converter->convertToPrefectureName(7));
        $this->assertSame('茨城', $this->converter->convertToPrefectureName(8));
        $this->assertSame('栃木', $this->converter->convertToPrefectureName(9));
        $this->assertSame('群馬', $this->converter->convertToPrefectureName(10));
        $this->assertSame('埼玉', $this->converter->convertToPrefectureName(11));
        $this->assertSame('千葉', $this->converter->convertToPrefectureName(12));
        $this->assertSame('東京', $this->converter->convertToPrefectureName(13));
        $this->assertSame('神奈川', $this->converter->convertToPrefectureName(14));
        $this->assertSame('新潟', $this->converter->convertToPrefectureName(15));
        $this->assertSame('富山', $this->converter->convertToPrefectureName(16));
        $this->assertSame('石川', $this->converter->convertToPrefectureName(17));
        $this->assertSame('福井', $this->converter->convertToPrefectureName(18));
        $this->assertSame('山梨', $this->converter->convertToPrefectureName(19));
        $this->assertSame('長野', $this->converter->convertToPrefectureName(20));
        $this->assertSame('岐阜', $this->converter->convertToPrefectureName(21));
        $this->assertSame('静岡', $this->converter->convertToPrefectureName(22));
        $this->assertSame('愛知', $this->converter->convertToPrefectureName(23));
        $this->assertSame('三重', $this->converter->convertToPrefectureName(24));
        $this->assertSame('滋賀', $this->converter->convertToPrefectureName(25));
        $this->assertSame('京都', $this->converter->convertToPrefectureName(26));
        $this->assertSame('大阪', $this->converter->convertToPrefectureName(27));
        $this->assertSame('兵庫', $this->converter->convertToPrefectureName(28));
        $this->assertSame('奈良', $this->converter->convertToPrefectureName(29));
        $this->assertSame('和歌山', $this->converter->convertToPrefectureName(30));
        $this->assertSame('鳥取', $this->converter->convertToPrefectureName(31));
        $this->assertSame('島根', $this->converter->convertToPrefectureName(32));
        $this->assertSame('岡山', $this->converter->convertToPrefectureName(33));
        $this->assertSame('広島', $this->converter->convertToPrefectureName(34));
        $this->assertSame('山口', $this->converter->convertToPrefectureName(35));
        $this->assertSame('徳島', $this->converter->convertToPrefectureName(36));
        $this->assertSame('香川', $this->converter->convertToPrefectureName(37));
        $this->assertSame('愛媛', $this->converter->convertToPrefectureName(38));
        $this->assertSame('高知', $this->converter->convertToPrefectureName(39));
        $this->assertSame('福岡', $this->converter->convertToPrefectureName(40));
        $this->assertSame('佐賀', $this->converter->convertToPrefectureName(41));
        $this->assertSame('長崎', $this->converter->convertToPrefectureName(42));
        $this->assertSame('熊本', $this->converter->convertToPrefectureName(43));
        $this->assertSame('大分', $this->converter->convertToPrefectureName(44));
        $this->assertSame('宮崎', $this->converter->convertToPrefectureName(45));
        $this->assertSame('鹿児島', $this->converter->convertToPrefectureName(46));
        $this->assertSame('沖縄', $this->converter->convertToPrefectureName(47));
    }

    /**
     * @return void
     */
    public function testConvertToStadiumId(): void
    {
        $this->assertNull($this->converter->convertToStadiumId(null));
        $this->assertNull($this->converter->convertToStadiumId('競艇'));
        $this->assertSame(1, $this->converter->convertToStadiumId('桐生'));
        $this->assertSame(2, $this->converter->convertToStadiumId('戸田'));
        $this->assertSame(3, $this->converter->convertToStadiumId('江戸川'));
        $this->assertSame(4, $this->converter->convertToStadiumId('平和島'));
        $this->assertSame(5, $this->converter->convertToStadiumId('多摩川'));
        $this->assertSame(6, $this->converter->convertToStadiumId('浜名湖'));
        $this->assertSame(7, $this->converter->convertToStadiumId('蒲郡'));
        $this->assertSame(8, $this->converter->convertToStadiumId('常滑'));
        $this->assertSame(9, $this->converter->convertToStadiumId('津'));
        $this->assertSame(10, $this->converter->convertToStadiumId('三国'));
        $this->assertSame(11, $this->converter->convertToStadiumId('びわこ'));
        $this->assertSame(12, $this->converter->convertToStadiumId('住之江'));
        $this->assertSame(13, $this->converter->convertToStadiumId('尼崎'));
        $this->assertSame(14, $this->converter->convertToStadiumId('鳴門'));
        $this->assertSame(15, $this->converter->convertToStadiumId('丸亀'));
        $this->assertSame(16, $this->converter->convertToStadiumId('児島'));
        $this->assertSame(17, $this->converter->convertToStadiumId('宮島'));
        $this->assertSame(18, $this->converter->convertToStadiumId('徳山'));
        $this->assertSame(19, $this->converter->convertToStadiumId('下関'));
        $this->assertSame(20, $this->converter->convertToStadiumId('若松'));
        $this->assertSame(21, $this->converter->convertToStadiumId('芦屋'));
        $this->assertSame(22, $this->converter->convertToStadiumId('福岡'));
        $this->assertSame(23, $this->converter->convertToStadiumId('唐津'));
        $this->assertSame(24, $this->converter->convertToStadiumId('大村'));
    }

    /**
     * @return void
     */
    public function testConvertToStadiumName(): void
    {
        $this->assertNull($this->converter->convertToStadiumName(null));
        $this->assertNull($this->converter->convertToStadiumName(0));
        $this->assertSame('桐生', $this->converter->convertToStadiumName(1));
        $this->assertSame('戸田', $this->converter->convertToStadiumName(2));
        $this->assertSame('江戸川', $this->converter->convertToStadiumName(3));
        $this->assertSame('平和島', $this->converter->convertToStadiumName(4));
        $this->assertSame('多摩川', $this->converter->convertToStadiumName(5));
        $this->assertSame('浜名湖', $this->converter->convertToStadiumName(6));
        $this->assertSame('蒲郡', $this->converter->convertToStadiumName(7));
        $this->assertSame('常滑', $this->converter->convertToStadiumName(8));
        $this->assertSame('津', $this->converter->convertToStadiumName(9));
        $this->assertSame('三国', $this->converter->convertToStadiumName(10));
        $this->assertSame('びわこ', $this->converter->convertToStadiumName(11));
        $this->assertSame('住之江', $this->converter->convertToStadiumName(12));
        $this->assertSame('尼崎', $this->converter->convertToStadiumName(13));
        $this->assertSame('鳴門', $this->converter->convertToStadiumName(14));
        $this->assertSame('丸亀', $this->converter->convertToStadiumName(15));
        $this->assertSame('児島', $this->converter->convertToStadiumName(16));
        $this->assertSame('宮島', $this->converter->convertToStadiumName(17));
        $this->assertSame('徳山', $this->converter->convertToStadiumName(18));
        $this->assertSame('下関', $this->converter->convertToStadiumName(19));
        $this->assertSame('若松', $this->converter->convertToStadiumName(20));
        $this->assertSame('芦屋', $this->converter->convertToStadiumName(21));
        $this->assertSame('福岡', $this->converter->convertToStadiumName(22));
        $this->assertSame('唐津', $this->converter->convertToStadiumName(23));
        $this->assertSame('大村', $this->converter->convertToStadiumName(24));
    }

    /**
     * @return void
     */
    public function testConvertToTechniqueId(): void
    {
        $this->assertNull($this->converter->convertToTechniqueId(null));
        $this->assertNull($this->converter->convertToTechniqueId('競艇'));
        $this->assertSame(1, $this->converter->convertToTechniqueId('逃げ'));
        $this->assertSame(2, $this->converter->convertToTechniqueId('差し'));
        $this->assertSame(3, $this->converter->convertToTechniqueId('まくり'));
        $this->assertSame(4, $this->converter->convertToTechniqueId('まくり差し'));
        $this->assertSame(5, $this->converter->convertToTechniqueId('抜き'));
        $this->assertSame(6, $this->converter->convertToTechniqueId('恵まれ'));
    }

    /**
     * @return void
     */
    public function testConvertToTechniqueName(): void
    {
        $this->assertNull($this->converter->convertToTechniqueName(null));
        $this->assertNull($this->converter->convertToTechniqueName(0));
        $this->assertSame('逃げ', $this->converter->convertToTechniqueName(1));
        $this->assertSame('差し', $this->converter->convertToTechniqueName(2));
        $this->assertSame('まくり', $this->converter->convertToTechniqueName(3));
        $this->assertSame('まくり差し', $this->converter->convertToTechniqueName(4));
        $this->assertSame('抜き', $this->converter->convertToTechniqueName(5));
        $this->assertSame('恵まれ', $this->converter->convertToTechniqueName(6));
    }

    /**
     * @return void
     */
    public function testConvertToWeatherId(): void
    {
        $this->assertNull($this->converter->convertToWeatherId(null));
        $this->assertNull($this->converter->convertToWeatherId('競艇'));
        $this->assertSame(1, $this->converter->convertToWeatherId('晴'));
        $this->assertSame(2, $this->converter->convertToWeatherId('曇り'));
        $this->assertSame(3, $this->converter->convertToWeatherId('雨'));
        $this->assertSame(4, $this->converter->convertToWeatherId('雪'));
        $this->assertSame(5, $this->converter->convertToWeatherId('霧'));
    }

    /**
     * @return void
     */
    public function testConvertToWeatherName(): void
    {
        $this->assertNull($this->converter->convertToWeatherName(null));
        $this->assertNull($this->converter->convertToWeatherName(0));
        $this->assertSame('晴', $this->converter->convertToWeatherName(1));
        $this->assertSame('曇り', $this->converter->convertToWeatherName(2));
        $this->assertSame('雨', $this->converter->convertToWeatherName(3));
        $this->assertSame('雪', $this->converter->convertToWeatherName(4));
        $this->assertSame('霧', $this->converter->convertToWeatherName(5));
    }
}
