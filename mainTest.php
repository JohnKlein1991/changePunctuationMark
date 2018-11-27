<?php
require 'main.php';
use PHPUnit\Framework\TestCase;

class PunctuationTest extends TestCase{
    /**
     * @dataProvider provider
     */
    public function testChangePunctuationMark($a, $b) {
        $punc = new Punctuation();
        $this->assertEquals($punc->changePunctuationMark($a), $b);
    }
    public function provider() {
        return [
          ['asdf#cc ()fefe 3 3','asdf cc )(fefe 3#3'],
          ['LUji ;9(*^3nlkГрлдыв:?ау3 4ШГ ','LUji  9?:^3nlkГрлдыв*(ау3;4ШГ '],
          ['a;J(:J#uj ;idu  3rr;ar4a','a;J  J;uj #idu:(3rr;ar4a'],
          ['ЛРШ*ршвнарн7 8?Нщ9ф872?:*("', 'ЛРШ"ршвнарн7(8*Нщ9ф872:?? *']
        ];
    }
}

