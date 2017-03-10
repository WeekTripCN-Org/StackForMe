<?php

namespace state;

/**
 * Class Farmer
 *
 * @package \state
 *
 * @author  WeekTrip<weektrip@weektrip.cn>
 */
class Farmer
{
    // 季节
    private $_currentSeason = '';

    private $_season = [
        'spring',
        'summer',
        'autumn',
        'winter'
    ];

    private $_state;

    /**
     * 设置状态
     * @param $currentSeason
     */
    private function setState($currentSeason)
    {
        switch ($currentSeason) {
            case 'spring':
                $this->_state = new FarmSpring();
                break;
            case 'summer':
                $this->_state = new FarmSummer();
                break;
            case 'autumn':
                $this->_state = new FarmAutumn();
                break;
            case 'winter':
                $this->_state = new FarmWinter();
                break;
            default:
                echo "Not support season. \n";
                break;
        }
    }

    /**
     * 设置下一个季节状态
     */
    public function nextSeason()
    {
        $nowKey = (int)array_search($this->_currentSeason, $this->_season);
        if ($nowKey < 3) {
            $nextSeason = $this->_season[$nowKey+1];
        } else {
            $nextSeason = 'spring';
        }
        $this->_currentSeason = $nextSeason;
        $this->setState($this->_currentSeason);
    }

    /**
     * 设置初始状态
     * Farmer constructor.
     * @param string $season
     */
    public function __construct($season = 'spring')
    {
        $this->_currentSeason = $season;
        $this->setState($this->_currentSeason);
    }

    /**
     * 种植
     */
    public function grow()
    {
        $this->_state->grow();
    }

    /**
     * 收割
     */
    public function havest()
    {
        $this->_state->havest();
        $this->nextSeason();
    }
}