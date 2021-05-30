<?php
namespace GDO\Quotes\Method;

use GDO\DB\GDT_Object;
use GDO\Quotes\GDO_QuoteLikes;

final class Dislike extends \GDO\Vote\Method\UnLike
{
    public function isCLI() { return true; }
    public function getLikeTableClass() { return GDO_QuoteLikes::class; }
    
    public function gdoParameters()
    {
        return [
            GDT_Object::make('id')->table($this->getLikeTable())->notNull(),
        ];
    }
}
