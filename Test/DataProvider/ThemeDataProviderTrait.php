<?php

namespace Drupal\Console\Test\DataProvider;

/**
 * Class ThemeDataProviderTrait
 * @package Drupal\Console\Test\DataProvider
 */
trait ThemeDataProviderTrait
{
    /**
     * @return array
     */
    public function commandData()
    {
        $this->setUpTemporalDirectory();

        return [
          ['Foo', 'foo', 'themes/custom', 'bar', 'Other', '8.x', 'sd', 'global-styling', false, false]
        ];
    }
}