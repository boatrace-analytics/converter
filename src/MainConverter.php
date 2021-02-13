<?php

namespace Boatrace\Analytics;

use Carbon\CarbonImmutable as Carbon;

/**
 * @author shimomo
 */
class MainConverter
{
    /**
     * @var array
     */
    protected $classes = [
        ['id' => 1, 'name' => 'A1'],
        ['id' => 2, 'name' => 'A2'],
        ['id' => 3, 'name' => 'B1'],
        ['id' => 4, 'name' => 'B2'],
    ];

    /**
     * @var array
     */
    protected $places = [
        ['id' => 1, 'name' => '1'],
        ['id' => 2, 'name' => '2'],
        ['id' => 3, 'name' => '3'],
        ['id' => 4, 'name' => '4'],
        ['id' => 5, 'name' => '5'],
        ['id' => 6, 'name' => '6'],
        ['id' => 7, 'name' => '妨'],
        ['id' => 8, 'name' => 'エ'],
        ['id' => 9, 'name' => '転'],
        ['id' => 10, 'name' => '落'],
        ['id' => 11, 'name' => '沈'],
        ['id' => 12, 'name' => '不'],
        ['id' => 13, 'name' => '失'],
        ['id' => 14, 'name' => 'F'],
        ['id' => 15, 'name' => 'L'],
        ['id' => 16, 'name' => '欠'],
    ];

    /**
     * @var array
     */
    protected $prefectures = [
        ['id' => 1, 'name' => '北海道'],
        ['id' => 2, 'name' => '青森'],
        ['id' => 3, 'name' => '岩手'],
        ['id' => 4, 'name' => '宮城'],
        ['id' => 5, 'name' => '秋田'],
        ['id' => 6, 'name' => '山形'],
        ['id' => 7, 'name' => '福島'],
        ['id' => 8, 'name' => '茨城'],
        ['id' => 9, 'name' => '栃木'],
        ['id' => 10, 'name' => '群馬'],
        ['id' => 11, 'name' => '埼玉'],
        ['id' => 12, 'name' => '千葉'],
        ['id' => 13, 'name' => '東京'],
        ['id' => 14, 'name' => '神奈川'],
        ['id' => 15, 'name' => '新潟'],
        ['id' => 16, 'name' => '富山'],
        ['id' => 17, 'name' => '石川'],
        ['id' => 18, 'name' => '福井'],
        ['id' => 19, 'name' => '山梨'],
        ['id' => 20, 'name' => '長野'],
        ['id' => 21, 'name' => '岐阜'],
        ['id' => 22, 'name' => '静岡'],
        ['id' => 23, 'name' => '愛知'],
        ['id' => 24, 'name' => '三重'],
        ['id' => 25, 'name' => '滋賀'],
        ['id' => 26, 'name' => '京都'],
        ['id' => 27, 'name' => '大阪'],
        ['id' => 28, 'name' => '兵庫'],
        ['id' => 29, 'name' => '奈良'],
        ['id' => 30, 'name' => '和歌山'],
        ['id' => 31, 'name' => '鳥取'],
        ['id' => 32, 'name' => '島根'],
        ['id' => 33, 'name' => '岡山'],
        ['id' => 34, 'name' => '広島'],
        ['id' => 35, 'name' => '山口'],
        ['id' => 36, 'name' => '徳島'],
        ['id' => 37, 'name' => '香川'],
        ['id' => 38, 'name' => '愛媛'],
        ['id' => 39, 'name' => '高知'],
        ['id' => 40, 'name' => '福岡'],
        ['id' => 41, 'name' => '佐賀'],
        ['id' => 42, 'name' => '長崎'],
        ['id' => 43, 'name' => '熊本'],
        ['id' => 44, 'name' => '大分'],
        ['id' => 45, 'name' => '宮崎'],
        ['id' => 46, 'name' => '鹿児島'],
        ['id' => 47, 'name' => '沖縄'],
    ];

    /**
     * @var array
     */
    protected $stadiums = [
        ['id' => 1, 'name' => '桐生'],
        ['id' => 2, 'name' => '戸田'],
        ['id' => 3, 'name' => '江戸川'],
        ['id' => 4, 'name' => '平和島'],
        ['id' => 5, 'name' => '多摩川'],
        ['id' => 6, 'name' => '浜名湖'],
        ['id' => 7, 'name' => '蒲郡'],
        ['id' => 8, 'name' => '常滑'],
        ['id' => 9, 'name' => '津'],
        ['id' => 10, 'name' => '三国'],
        ['id' => 11, 'name' => 'びわこ'],
        ['id' => 12, 'name' => '住之江'],
        ['id' => 13, 'name' => '尼崎'],
        ['id' => 14, 'name' => '鳴門'],
        ['id' => 15, 'name' => '丸亀'],
        ['id' => 16, 'name' => '児島'],
        ['id' => 17, 'name' => '宮島'],
        ['id' => 18, 'name' => '徳山'],
        ['id' => 19, 'name' => '下関'],
        ['id' => 20, 'name' => '若松'],
        ['id' => 21, 'name' => '芦屋'],
        ['id' => 22, 'name' => '福岡'],
        ['id' => 23, 'name' => '唐津'],
        ['id' => 24, 'name' => '大村'],
    ];

    /**
     * @var array
     */
    protected $techniques = [
        ['id' => 1, 'name' => '逃げ'],
        ['id' => 2, 'name' => '差し'],
        ['id' => 3, 'name' => 'まくり'],
        ['id' => 4, 'name' => 'まくり差し'],
        ['id' => 5, 'name' => '抜き'],
        ['id' => 6, 'name' => '恵まれ'],
    ];

    /**
     * @var array
     */
    protected $weathers = [
        ['id' => 1, 'name' => '晴'],
        ['id' => 2, 'name' => '曇り'],
        ['id' => 3, 'name' => '雨'],
        ['id' => 4, 'name' => '雪'],
        ['id' => 5, 'name' => '霧'],
    ];

    /**
     * @param  string|null  $value
     * @return string|null
     */
    public function convertToString(string $value = null): ?string
    {
        return is_null($value) ? null : Trimmer::trim(mb_convert_kana($value, 'as', 'utf-8'));
    }

    /**
     * @param  string|null  $value
     * @return int|null
     */
    public function convertToInt(string $value = null): ?int
    {
        return is_null($value) ? null : (int) $this->convertToString($value);
    }

    /**
     * @param  string|null  $value
     * @return float|null
     */
    public function convertToFloat(string $value = null): ?float
    {
        return is_null($value) ? null : (float) $this->convertToString($value);
    }

    /**
     * @param  string|null  $value
     * @return string|null
     */
    public function convertToName(string $value = null): ?string
    {
        return is_null($value) ? null : implode(' ', preg_split('/[\\x0-\x20\x7f\xc2\xa0\xe3\x80\x80]++/u', $this->convertToString($value), -1, PREG_SPLIT_NO_EMPTY) + [1 => '']);
    }

    /**
     * @param  string|null  $value
     * @return int|null
     */
    public function convertToFlying(string $value = null): ?int
    {
        return $this->convertToInt(Trimmer::ltrim($this->convertToString($value), 'F'));
    }

    /**
     * @param  string|null  $value
     * @return int|null
     */
    public function convertToLate(string $value = null): ?int
    {
        return $this->convertToInt(Trimmer::ltrim($this->convertToString($value), 'L'));
    }

    /**
     * @param  string|null  $value
     * @return float|null
     */
    public function convertToStartTiming(string $value = null): ?float
    {
        switch (substr($value = $this->convertToString($value), 0, 1)) {
            case 'F':
                return $this->convertToFloat(-1);
            case 'L':
                return $this->convertToFloat(1);
            default:
                return is_null($value) ? null : $this->convertToFloat(sprintf('%d%s', 0, preg_replace('/[^0-9.]/', '', $value)));
        }
    }

    /**
     * @param  string|null  $value
     * @return int|null
     */
    public function convertToWind(string $value = null): ?int
    {
        return $this->convertToInt(Trimmer::rtrim($this->convertToString($value), 'm'));
    }

    /**
     * @param  string|null  $value
     * @return int|null
     */
    public function convertToWave(string $value = null): ?int
    {
        return $this->convertToInt(Trimmer::rtrim($this->convertToString($value), 'cm'));
    }

    /**
     * @param  string|null  $value
     * @return float|null
     */
    public function convertToTemperature(string $value = null): ?float
    {
        return $this->convertToFloat(Trimmer::rtrim($this->convertToString($value), '℃'));
    }

    /**
     * @param  string|null  $value
     * @return string|null
     */
    public function convertToDate(string $value = null): ?string
    {
        return is_null($value) ? null : Carbon::parse($value)->format('Y-m-d');
    }

    /**
     * @param  string|null  $value
     * @return string|null
     */
    public function convertToDateTime(string $value = null): ?string
    {
        return is_null($value) ? null : Carbon::parse($value)->format('Y-m-d H:i:s');
    }

    /**
     * @param  string|null  $name
     * @return int|null
     */
    public function convertToClassId(string $name = null): ?int
    {
        $name = $this->convertToString($name);

        $classes = array_column($this->classes, 'id', 'name');

        return $classes[$name] ?? null;
    }

    /**
     * @param  int|null  $id
     * @return string|null
     */
    public function convertToClassName(int $id = null): ?string
    {
        $classes = array_column($this->classes, 'name', 'id');

        return $classes[$id] ?? null;
    }

    /**
     * @param  string|null  $name
     * @return int|null
     */
    public function convertToPlaceId(string $name = null): ?int
    {
        $name = $this->convertToString($name);

        $places = array_column($this->places, 'id', 'name');

        return $places[$name] ?? null;
    }

    /**
     * @param  int|null  $id
     * @return string|null
     */
    public function convertToPlaceName(int $id = null): ?string
    {
        $places = array_column($this->places, 'name', 'id');

        return $places[$id] ?? null;
    }

    /**
     * @param  string|null  $name
     * @return int|null
     */
    public function convertToPrefectureId(string $name = null): ?int
    {
        $name = $this->convertToString($name);

        $prefectures = array_column($this->prefectures, 'id', 'name');

        return $prefectures[$name] ?? null;
    }

    /**
     * @param  int|null  $id
     * @return string|null
     */
    public function convertToPrefectureName(int $id = null): ?string
    {
        $prefectures = array_column($this->prefectures, 'name', 'id');

        return $prefectures[$id] ?? null;
    }

    /**
     * @param  string|null  $name
     * @return int|null
     */
    public function convertToStadiumId(string $name = null): ?int
    {
        $name = $this->convertToString($name);

        $stadiums = array_column($this->stadiums, 'id', 'name');

        return $stadiums[$name] ?? null;
    }

    /**
     * @param  int|null  $id
     * @return string|null
     */
    public function convertToStadiumName(int $id = null): ?string
    {
        $stadiums = array_column($this->stadiums, 'name', 'id');

        return $stadiums[$id] ?? null;
    }

    /**
     * @param  string|null  $name
     * @return int|null
     */
    public function convertToTechniqueId(string $name = null): ?int
    {
        $name = $this->convertToString($name);

        $techniques = array_column($this->techniques, 'id', 'name');

        return $techniques[$name] ?? null;
    }

    /**
     * @param  int|null  $id
     * @return string|null
     */
    public function convertToTechniqueName(int $id = null): ?string
    {
        $techniques = array_column($this->techniques, 'name', 'id');

        return $techniques[$id] ?? null;
    }

    /**
     * @param  string|null  $name
     * @return int|null
     */
    public function convertToWeatherId(string $name = null): ?int
    {
        $name = $this->convertToString($name);

        $weathers = array_column($this->weathers, 'id', 'name');

        return $weathers[$name] ?? null;
    }

    /**
     * @param  int|null  $id
     * @return string|null
     */
    public function convertToWeatherName(int $id = null): ?string
    {
        $weathers = array_column($this->weathers, 'name', 'id');

        return $weathers[$id] ?? null;
    }
}
