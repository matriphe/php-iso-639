<?php

use Matriphe\ISO639\ISO639;
use PHPUnit\Framework\TestCase;

class ISO639Test extends TestCase
{
    private ISO639 $iso;

    public function setUp(): void
    {
        $this->iso = new ISO639();
    }

    public static function languageByCode1DataProvider(): array
    {
        return array(
            array('en', 'English'),
            array('fr', 'French'),
            array('es', 'Spanish'),
            array('id', 'Indonesian'),
            array('jv', 'Javanese'),
            array('hi', 'Hindi'),
            array('th', 'Thai'),
            array('ko', 'Korean'),
            array('ja', 'Japanese'),
            array('zh', 'Chinese'),
            array('ru', 'Russian'),
            array('ar', 'Arabic'),
            array('vi', 'Vietnamese'),
            array('ms', 'Malay'),
            array('su', 'Sundanese'),
        );
    }

    /** @dataProvider languageByCode1DataProvider */
    #[\PHPUnit\Framework\Attributes\DataProvider('languageByCode1DataProvider')]
    public function testLanguageISO6391(string $code, string $expected): void
    {
        $this->assertSame($expected, $this->iso->languageByCode1($code));
    }

    public static function nativeByCode1DataProvider(): array
    {
        return array(
            array('en', 'English'),
            array('fr', 'français, langue française'),
            array('es', 'español'),
            array('id', 'Bahasa Indonesia'),
            array('jv', 'basa Jawa'),
            array('hi', 'हिन्दी, हिंदी'),
            array('th', 'ไทย'),
            array('ko', '한국어'),
            array('ja', '日本語 (にほんご)'),
            array('zh', '中文 (Zhōngwén), 汉语, 漢語'),
            array('ru', 'Русский'),
            array('ar', 'العربية'),
            array('vi', 'Việt Nam'),
            array('ms', 'bahasa Melayu, بهاس ملايو‎'),
            array('su', 'Basa Sunda'),
        );
    }

    /** @dataProvider nativeByCode1DataProvider */
    #[\PHPUnit\Framework\Attributes\DataProvider('nativeByCode1DataProvider')]
    public function testNativeISO6391(string $code, string $expected): void
    {
        $this->assertSame($expected, $this->iso->nativeByCode1($code));
    }

    public static function nativeByCode2tDataProvider(): array
    {
        return array(
            array('eng', 'English'),
            array('fra', 'français, langue française'),
            array('spa', 'español'),
            array('ind', 'Bahasa Indonesia'),
            array('jav', 'basa Jawa'),
            array('hin', 'हिन्दी, हिंदी'),
            array('tha', 'ไทย'),
            array('kor', '한국어'),
            array('jpn', '日本語 (にほんご)'),
            array('zho', '中文 (Zhōngwén), 汉语, 漢語'),
            array('rus', 'Русский'),
            array('ara', 'العربية'),
            array('vie', 'Việt Nam'),
            array('msa', 'bahasa Melayu, بهاس ملايو‎'),
            array('sun', 'Basa Sunda'),
        );
    }

    /** @dataProvider nativeByCode2tDataProvider */
    #[\PHPUnit\Framework\Attributes\DataProvider('nativeByCode2tDataProvider')]
    public function testNativeISO6392t(string $code, string $expected): void
    {
        $this->assertSame($expected, $this->iso->nativeByCode2t($code));
    }

    public static function nativeByCode2bDataProvider(): array
    {
        return array(
            array('eng', 'English'),
            array('fre', 'français, langue française'),
            array('spa', 'español'),
            array('ind', 'Bahasa Indonesia'),
            array('jav', 'basa Jawa'),
            array('hin', 'हिन्दी, हिंदी'),
            array('tha', 'ไทย'),
            array('kor', '한국어'),
            array('jpn', '日本語 (にほんご)'),
            array('chi', '中文 (Zhōngwén), 汉语, 漢語'),
            array('rus', 'Русский'),
            array('ara', 'العربية'),
            array('vie', 'Việt Nam'),
            array('may', 'bahasa Melayu, بهاس ملايو‎'),
            array('sun', 'Basa Sunda'),
        );
    }

    /** @dataProvider nativeByCode2bDataProvider */
    #[\PHPUnit\Framework\Attributes\DataProvider('nativeByCode2bDataProvider')]
    public function testNativeISO6392b(string $code, string $expected): void
    {
        $this->assertSame('English', $this->iso->languageByCode2b('eng'));
        $this->assertSame('French', $this->iso->languageByCode2b('fre'));
        $this->assertSame('Spanish', $this->iso->languageByCode2b('spa'));
        $this->assertSame('Indonesian', $this->iso->languageByCode2b('ind'));
        $this->assertSame('Javanese', $this->iso->languageByCode2b('jav'));
        $this->assertSame('Hindi', $this->iso->languageByCode2b('hin'));
        $this->assertSame('Thai', $this->iso->languageByCode2b('tha'));
        $this->assertSame('Korean', $this->iso->languageByCode2b('kor'));
        $this->assertSame('Japanese', $this->iso->languageByCode2b('jpn'));
        $this->assertSame('Chinese', $this->iso->languageByCode2b('chi'));
        $this->assertSame('Russian', $this->iso->languageByCode2b('rus'));
        $this->assertSame('Arabic', $this->iso->languageByCode2b('ara'));
        $this->assertSame('Vietnamese', $this->iso->languageByCode2b('vie'));
        $this->assertSame('Malay', $this->iso->languageByCode2b('may'));
        $this->assertSame('Sundanese', $this->iso->languageByCode2b('sun'));
    }

    public static function languageByCode3DataProvider(): array
    {
        return array(
            array('eng', 'English'),
            array('fra', 'French'),
            array('spa', 'Spanish'),
            array('ind', 'Indonesian'),
            array('jav', 'Javanese'),
            array('hin', 'Hindi'),
            array('tha', 'Thai'),
            array('kor', 'Korean'),
            array('jpn', 'Japanese'),
            array('zho', 'Chinese'),
            array('rus', 'Russian'),
            array('ara', 'Arabic'),
            array('vie', 'Vietnamese'),
            array('msa', 'Malay'),
            array('sun', 'Sundanese'),
        );
    }

    /** @dataProvider languageByCode3DataProvider */
    #[\PHPUnit\Framework\Attributes\DataProvider('languageByCode3DataProvider')]
    public function testLanguageISO6393(string $code, string $expected): void
    {
        $this->assertSame($expected, $this->iso->languageByCode3($code));
    }

    public static function nativeByCode3DataProvider(): array
    {
        return array(
            array('eng', 'English'),
            array('fra', 'français, langue française'),
            array('spa', 'español'),
            array('ind', 'Bahasa Indonesia'),
            array('jav', 'basa Jawa'),
            array('hin', 'हिन्दी, हिंदी'),
            array('tha', 'ไทย'),
            array('kor', '한국어'),
            array('jpn', '日本語 (にほんご)'),
            array('zho', '中文 (Zhōngwén), 汉语, 漢語'),
            array('rus', 'Русский'),
            array('ara', 'العربية'),
            array('vie', 'Việt Nam'),
            array('msa', 'bahasa Melayu, بهاس ملايو‎'),
            array('sun', 'Basa Sunda'),
        );
    }

    /** @dataProvider nativeByCode3DataProvider */
    #[\PHPUnit\Framework\Attributes\DataProvider('nativeByCode3DataProvider')]
    public function testNativeISO6393(string $code, string $expected): void
    {
        $this->assertSame($expected, $this->iso->nativeByCode3($code));
    }

    public static function code1ByLanguageDataProvider(): array
    {
        return array(
            array('en', 'English'),
            array('fr', 'French'),
            array('es', 'Spanish'),
            array('id', 'Indonesian'),
            array('jv', 'Javanese'),
            array('hi', 'Hindi'),
            array('th', 'Thai'),
            array('ko', 'Korean'),
            array('ja', 'Japanese'),
            array('zh', 'Chinese'),
            array('ru', 'Russian'),
            array('ar', 'Arabic'),
            array('vi', 'Vietnamese'),
            array('ms', 'Malay'),
            array('su', 'Sundanese'),
        );
    }
    /** @dataProvider code1ByLanguageDataProvider */
    #[\PHPUnit\Framework\Attributes\DataProvider('code1ByLanguageDataProvider')]
    public function testCode1ByLanguage(string $expected, string $language): void
    {
        $this->assertSame($expected, $this->iso->code1ByLanguage($language));
    }

    public static function code2tByLanguageDataProvider(): array
    {
        return array(
            array('eng', 'English'),
            array('fra', 'French'),
            array('spa', 'Spanish'),
            array('ind', 'Indonesian'),
            array('jav', 'Javanese'),
            array('hin', 'Hindi'),
            array('tha', 'Thai'),
            array('kor', 'Korean'),
            array('jpn', 'Japanese'),
            array('zho', 'Chinese'),
            array('rus', 'Russian'),
            array('ara', 'Arabic'),
            array('vie', 'Vietnamese'),
            array('msa', 'Malay'),
            array('sun', 'Sundanese'),
        );
    }

    /** @dataProvider code2tByLanguageDataProvider */
    #[\PHPUnit\Framework\Attributes\DataProvider('code2tByLanguageDataProvider')]
    public function testCode2tByLanguage(string $expected, string $language): void
    {
        $this->assertSame($expected, $this->iso->code2tByLanguage($language));
    }

    public static function code2bByLanguageDataProvider(): array
    {
        return array(
            array('eng', 'English'),
            array('fre', 'French'),
            array('spa', 'Spanish'),
            array('ind', 'Indonesian'),
            array('jav', 'Javanese'),
            array('hin', 'Hindi'),
            array('tha', 'Thai'),
            array('kor', 'Korean'),
            array('jpn', 'Japanese'),
            array('chi', 'Chinese'),
            array('rus', 'Russian'),
            array('ara', 'Arabic'),
            array('vie', 'Vietnamese'),
            array('may', 'Malay'),
            array('sun', 'Sundanese'),
        );
    }

    /** @dataProvider code2bByLanguageDataProvider */
    #[\PHPUnit\Framework\Attributes\DataProvider('code2bByLanguageDataProvider')]
    public function testCode2bByLanguage(string $expected, string $language): void
    {
        $this->assertSame($expected, $this->iso->code2bByLanguage($language));
    }

    public static function code3ByLanguageDataProvider(): array
    {
        return array(
            array('eng', 'English'),
            array('fra', 'French'),
            array('spa', 'Spanish'),
            array('ind', 'Indonesian'),
            array('jav', 'Javanese'),
            array('hin', 'Hindi'),
            array('tha', 'Thai'),
            array('kor', 'Korean'),
            array('jpn', 'Japanese'),
            array('zho', 'Chinese'),
            array('rus', 'Russian'),
            array('ara', 'Arabic'),
            array('vie', 'Vietnamese'),
            array('msa', 'Malay'),
            array('sun', 'Sundanese'),
        );
    }

    /** @dataProvider code3ByLanguageDataProvider */
    #[\PHPUnit\Framework\Attributes\DataProvider('code3ByLanguageDataProvider')]
    public function testCode3ByLanguage(string $expected, string $language): void
    {
        $this->assertSame($expected, $this->iso->code3ByLanguage($language));
    }

    public static function getLanguageByIsoCode2bDataProvider(): array
    {
        return array(
            array(array('en', 'eng', 'eng', 'eng', 'English', 'English'), 'eng'),
            array(array('fr', 'fra', 'fre', 'fra', 'French', 'français, langue française'), 'fre'),
            array(array('id', 'ind', 'ind', 'ind', 'Indonesian', 'Bahasa Indonesia'), 'ind'),
        );
    }

    /** @dataProvider getLanguageByIsoCode2bDataProvider */
    #[\PHPUnit\Framework\Attributes\DataProvider('getLanguageByIsoCode2bDataProvider')]
    public function testGetLanguageByIsoCode2B(array $expected, string $code): void
    {
        $this->assertSame($expected, $this->iso->getLanguageByIsoCode2b($code));
    }

    public static function getLanguageByIsoCode2bNullDataProvider(): array
    {
        return array(
            array('null'),
            array('abc'),
        );
    }

    /** @dataProvider getLanguageByIsoCode2bNullDataProvider */
    #[\PHPUnit\Framework\Attributes\DataProvider('getLanguageByIsoCode2bNullDataProvider')]
    public function testGetLanguageByIsoCode2bNull(string $code): void
    {
        $this->assertNull($this->iso->getLanguageByIsoCode2b($code));
    }

    public static function code2tByCode1DataProvider(): array
    {
        return array(
            array('fra', 'fr'),
            array('eng', 'en'),
            array('spa', 'es'),
            array('ind', 'id'),
        );
    }

    /** @dataProvider code2tByCode1DataProvider */
    #[\PHPUnit\Framework\Attributes\DataProvider('code2tByCode1DataProvider')]
    public function testCode2tByCode1(string $expected, string $code): void
    {
        $this->assertSame($expected, $this->iso->code2tByCode1($code));
    }

}
