<?php
/**
 * Author: Joris Rietveld <jorisrietveld@gmail.com>
 * Created: 18-11-2016 19:43
 * Licence: GNU General Public licence version 3 <https://www.gnu.org/licenses/quick-guide-gplv3.html>
 */
declare( strict_types = 1 );
namespace HTTP;


class HeaderContainer implements \Countable, \IteratorAggregate
{
    protected $headers = [];
    protected $cacheControl = [];

    public function count(  )
    {
        return 0;
    }

    public function getIterator(  )
    {
        return new \ArrayIterator();
    }
}