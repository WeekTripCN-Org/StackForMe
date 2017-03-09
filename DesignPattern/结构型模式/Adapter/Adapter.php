<?php

namespace adapter;

/**
 * Class Adapter
 *
 * @package \adapter
 *
 * @author  WeekTrip<weektrip@weektrip.cn>
 */
    class Adapter
    {
        private $_advancePlayerIstance;
        private $_type = '';

        public function __construct($type = '')
        {
            switch ($type) {
                case 'mp4':
                    $this->_advancePlayerIstance = new AdvanceMp4Player();
                    break;
                case 'wma':
                    $this->_advancePlayerIstance = new AdvanceWmaPlayer();
                    break;
                default:
                    throw new \Exception("$type is not supported", 400);
                    break;
            }
            $this->_type = $type;
        }

        public function play($file = '')
        {
            switch ($this->_type) {
                case 'mp4':
                    $this->_advancePlayerIstance->playMp4($file);
                    break;
                case 'wma':
                    $this->_advancePlayerIstance->playWma($file);
                    break;
                default:
                    break;
            }
        }
    }