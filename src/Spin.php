<?php

namespace ContentSpinning;

class Spin
{

    /**
     * Process
     * @param  [type] $text [description]
     * @return [type]       [description]
     */
    public function process($text)
    {
        return preg_replace_callback(
            '/\{(((?>[^\{\}]+)|(?R))*)\}/x',
            array($this, 'replace'),
            $text
        );
    }

    /**
     * Replace
     * @param  [type] $text [description]
     * @return [type]       [description]
     */
    public function replace($text)
    {
        $text = $this->process($text[1]);
        $parts = explode('|', $text);
        return $parts[array_rand($parts)];
    }

}
