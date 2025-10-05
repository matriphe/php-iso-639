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
        return [
            ['en', 'English'],
            ['fr', 'French'],
            ['es', 'Spanish'],
            ['id', 'Indonesian'],
            ['jv', 'Javanese'],
            ['hi', 'Hindi'],
            ['th', 'Thai'],
            ['ko', 'Korean'],
            ['ja', 'Japanese'],
            ['zh', 'Chinese'],
            ['ru', 'Russian'],
            ['ar', 'Arabic'],
            ['vi', 'Vietnamese'],
            ['ms', 'Malay'],
            ['su', 'Sundanese'],
        ];
    }

    /** @dataProvider languageByCode1DataProvider */
    #[\PHPUnit\Framework\Attributes\DataProvider('languageByCode1DataProvider')]
    public function testLanguageISO6391(string $code, string $expected): void
    {
        $this->assertSame($expected, $this->iso->languageByCode1($code));
    }

    public static function nativeByCode1DataProvider(): array
    {
        return [
            ['en', 'English'],
            ['fr', 'français, langue française'],
            ['es', 'español'],
            ['id', 'Bahasa Indonesia'],
            ['jv', 'basa Jawa'],
            ['hi', 'हिन्दी, हिंदी'],
            ['th', 'ไทย'],
            ['ko', '한국어'],
            ['ja', '日本語 (にほんご)'],
            ['zh', '中文 (Zhōngwén), 汉语, 漢語'],
            ['ru', 'Русский'],
            ['ar', 'العربية'],
            ['vi', 'Việt Nam'],
            ['ms', 'bahasa Melayu, بهاس ملايو‎'],
            ['su', 'Basa Sunda'],
        ];
    }

    /** @dataProvider nativeByCode1DataProvider */
    #[\PHPUnit\Framework\Attributes\DataProvider('nativeByCode1DataProvider')]
    public function testNativeISO6391(string $code, string $expected): void
    {
        $this->assertSame($expected, $this->iso->nativeByCode1($code));
    }

    public static function nativeByCode1CapitalizedDataProvider(): array
    {
        return [
            ['en', 'English'],
            ['fr', 'Français, Langue Française'],
            ['es', 'Español'],
            ['id', 'Bahasa Indonesia'],
            ['jv', 'Basa Jawa'],
            ['hi', 'हिन्दी, हिंदी'],
            ['th', 'ไทย'],
            ['ko', '한국어'],
            ['ja', '日本語 (にほんご)'],
            ['zh', '中文 (Zhōngwén), 汉语, 漢語'],
            ['ru', 'Русский'],
            ['ar', 'العربية'],
            ['vi', 'Việt Nam'],
            ['ms', 'Bahasa Melayu, بهاس ملايو‎'],
            ['su', 'Basa Sunda'],
        ];
    }

    /** @dataProvider nativeByCode1CapitalizedDataProvider */
    #[\PHPUnit\Framework\Attributes\DataProvider('nativeByCode1CapitalizedDataProvider')]
    public function testNativeISO6391Capitalized(string $code, string $expected): void
    {
        $this->assertSame($expected, $this->iso->nativeByCode1($code, true));
    }

    public static function nativeByCode2tDataProvider(): array
    {
        return [
            ['eng', 'English'],
            ['fra', 'français, langue française'],
            ['spa', 'español'],
            ['ind', 'Bahasa Indonesia'],
            ['jav', 'basa Jawa'],
            ['hin', 'हिन्दी, हिंदी'],
            ['tha', 'ไทย'],
            ['kor', '한국어'],
            ['jpn', '日本語 (にほんご)'],
            ['zho', '中文 (Zhōngwén), 汉语, 漢語'],
            ['rus', 'Русский'],
            ['ara', 'العربية'],
            ['vie', 'Việt Nam'],
            ['msa', 'bahasa Melayu, بهاس ملايو‎'],
            ['sun', 'Basa Sunda'],
        ];
    }

    /** @dataProvider nativeByCode2tDataProvider */
    #[\PHPUnit\Framework\Attributes\DataProvider('nativeByCode2tDataProvider')]
    public function testNativeISO6392t(string $code, string $expected): void
    {
        $this->assertSame($expected, $this->iso->nativeByCode2t($code));
    }

    public static function nativeByCode2bDataProvider(): array
    {
        return [
            ['eng', 'English'],
            ['fre', 'français, langue française'],
            ['spa', 'español'],
            ['ind', 'Bahasa Indonesia'],
            ['jav', 'basa Jawa'],
            ['hin', 'हिन्दी, हिंदी'],
            ['tha', 'ไทย'],
            ['kor', '한국어'],
            ['jpn', '日本語 (にほんご)'],
            ['chi', '中文 (Zhōngwén), 汉语, 漢語'],
            ['rus', 'Русский'],
            ['ara', 'العربية'],
            ['vie', 'Việt Nam'],
            ['may', 'bahasa Melayu, بهاس ملايو‎'],
            ['sun', 'Basa Sunda'],
        ];
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
        return [
            ['eng', 'English'],
            ['fra', 'French'],
            ['spa', 'Spanish'],
            ['ind', 'Indonesian'],
            ['jav', 'Javanese'],
            ['hin', 'Hindi'],
            ['tha', 'Thai'],
            ['kor', 'Korean'],
            ['jpn', 'Japanese'],
            ['zho', 'Chinese'],
            ['rus', 'Russian'],
            ['ara', 'Arabic'],
            ['vie', 'Vietnamese'],
            ['msa', 'Malay'],
            ['sun', 'Sundanese'],
        ];
    }

    /** @dataProvider languageByCode3DataProvider */
    #[\PHPUnit\Framework\Attributes\DataProvider('languageByCode3DataProvider')]
    public function testLanguageISO6393(string $code, string $expected): void
    {
        $this->assertSame($expected, $this->iso->languageByCode3($code));
    }

    public static function nativeByCode3DataProvider(): array
    {
        return [
            ['eng', 'English'],
            ['fra', 'français, langue française'],
            ['spa', 'español'],
            ['ind', 'Bahasa Indonesia'],
            ['jav', 'basa Jawa'],
            ['hin', 'हिन्दी, हिंदी'],
            ['tha', 'ไทย'],
            ['kor', '한국어'],
            ['jpn', '日本語 (にほんご)'],
            ['zho', '中文 (Zhōngwén), 汉语, 漢語'],
            ['rus', 'Русский'],
            ['ara', 'العربية'],
            ['vie', 'Việt Nam'],
            ['msa', 'bahasa Melayu, بهاس ملايو‎'],
            ['sun', 'Basa Sunda'],
        ];
    }

    /** @dataProvider nativeByCode3DataProvider */
    #[\PHPUnit\Framework\Attributes\DataProvider('nativeByCode3DataProvider')]
    public function testNativeISO6393(string $code, string $expected): void
    {
        $this->assertSame($expected, $this->iso->nativeByCode3($code));
    }

    public static function code1ByLanguageDataProvider(): array
    {
        return [
            ['en', 'English'],
            ['fr', 'French'],
            ['es', 'Spanish'],
            ['id', 'Indonesian'],
            ['jv', 'Javanese'],
            ['hi', 'Hindi'],
            ['th', 'Thai'],
            ['ko', 'Korean'],
            ['ja', 'Japanese'],
            ['zh', 'Chinese'],
            ['ru', 'Russian'],
            ['ar', 'Arabic'],
            ['vi', 'Vietnamese'],
            ['ms', 'Malay'],
            ['su', 'Sundanese'],
        ];
    }
    /** @dataProvider code1ByLanguageDataProvider */
    #[\PHPUnit\Framework\Attributes\DataProvider('code1ByLanguageDataProvider')]
    public function testCode1ByLanguage(string $expected, string $language): void
    {
        $this->assertSame($expected, $this->iso->code1ByLanguage($language));
    }

    public static function code2tByLanguageDataProvider(): array
    {
        return [
            ['eng', 'English'],
            ['fra', 'French'],
            ['spa', 'Spanish'],
            ['ind', 'Indonesian'],
            ['jav', 'Javanese'],
            ['hin', 'Hindi'],
            ['tha', 'Thai'],
            ['kor', 'Korean'],
            ['jpn', 'Japanese'],
            ['zho', 'Chinese'],
            ['rus', 'Russian'],
            ['ara', 'Arabic'],
            ['vie', 'Vietnamese'],
            ['msa', 'Malay'],
            ['sun', 'Sundanese'],
        ];
    }

    /** @dataProvider code2tByLanguageDataProvider */
    #[\PHPUnit\Framework\Attributes\DataProvider('code2tByLanguageDataProvider')]
    public function testCode2tByLanguage(string $expected, string $language): void
    {
        $this->assertSame($expected, $this->iso->code2tByLanguage($language));
    }

    public static function code2bByLanguageDataProvider(): array
    {
        return [
            ['eng', 'English'],
            ['fre', 'French'],
            ['spa', 'Spanish'],
            ['ind', 'Indonesian'],
            ['jav', 'Javanese'],
            ['hin', 'Hindi'],
            ['tha', 'Thai'],
            ['kor', 'Korean'],
            ['jpn', 'Japanese'],
            ['chi', 'Chinese'],
            ['rus', 'Russian'],
            ['ara', 'Arabic'],
            ['vie', 'Vietnamese'],
            ['may', 'Malay'],
            ['sun', 'Sundanese'],
        ];
    }

    /** @dataProvider code2bByLanguageDataProvider */
    #[\PHPUnit\Framework\Attributes\DataProvider('code2bByLanguageDataProvider')]
    public function testCode2bByLanguage(string $expected, string $language): void
    {
        $this->assertSame($expected, $this->iso->code2bByLanguage($language));
    }

    public static function code3ByLanguageDataProvider(): array
    {
        return [
            ['eng', 'English'],
            ['fra', 'French'],
            ['spa', 'Spanish'],
            ['ind', 'Indonesian'],
            ['jav', 'Javanese'],
            ['hin', 'Hindi'],
            ['tha', 'Thai'],
            ['kor', 'Korean'],
            ['jpn', 'Japanese'],
            ['zho', 'Chinese'],
            ['rus', 'Russian'],
            ['ara', 'Arabic'],
            ['vie', 'Vietnamese'],
            ['msa', 'Malay'],
            ['sun', 'Sundanese'],
        ];
    }

    /** @dataProvider code3ByLanguageDataProvider */
    #[\PHPUnit\Framework\Attributes\DataProvider('code3ByLanguageDataProvider')]
    public function testCode3ByLanguage(string $expected, string $language): void
    {
        $this->assertSame($expected, $this->iso->code3ByLanguage($language));
    }

    public static function getLanguageByIsoCode2bDataProvider(): array
    {
        return [
            [['en', 'eng', 'eng', 'eng', 'English', 'English'], 'eng'],
            [['fr', 'fra', 'fre', 'fra', 'French', 'français, langue française'], 'fre'],
            [['id', 'ind', 'ind', 'ind', 'Indonesian', 'Bahasa Indonesia'], 'ind'],
        ];
    }

    /** @dataProvider getLanguageByIsoCode2bDataProvider */
    #[\PHPUnit\Framework\Attributes\DataProvider('getLanguageByIsoCode2bDataProvider')]
    public function testGetLanguageByIsoCode2B(array $expected, string $code): void
    {
        $this->assertSame($expected, $this->iso->getLanguageByIsoCode2b($code));
    }

    public static function getLanguageByIsoCode2bNullDataProvider(): array
    {
        return [
            ['null'],
            ['abc'],
        ];
    }

    /** @dataProvider getLanguageByIsoCode2bNullDataProvider */
    #[\PHPUnit\Framework\Attributes\DataProvider('getLanguageByIsoCode2bNullDataProvider')]
    public function testGetLanguageByIsoCode2bNull(string $code): void
    {
        $this->assertNull($this->iso->getLanguageByIsoCode2b($code));
    }

    public static function code2tByCode1DataProvider(): array
    {
        return [
            ['fra', 'fr'],
            ['eng', 'en'],
            ['spa', 'es'],
            ['ind', 'id'],
        ];
    }

    /** @dataProvider code2tByCode1DataProvider */
    #[\PHPUnit\Framework\Attributes\DataProvider('code2tByCode1DataProvider')]
    public function testCode2tByCode1(string $expected, string $code): void
    {
        $this->assertSame($expected, $this->iso->code2tByCode1($code));
    }

}
