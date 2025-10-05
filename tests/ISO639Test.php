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
    public function testLanguageByCode1(string $code, string $expected): void
    {
        $this->assertSame($expected, $this->iso->languageByCode1($code));
    }

    public static function nativeByCode1DataProvider(): array
    {
        return [
            // Default not capitalized
            ['en', 'English', false],
            ['fr', 'français, langue française', false],
            ['es', 'español', false],
            ['id', 'Bahasa Indonesia', false],
            ['jv', 'basa Jawa', false],
            ['hi', 'हिन्दी, हिंदी', false],
            ['th', 'ไทย', false],
            ['ko', '한국어', false],
            ['ja', '日本語 (にほんご)', false],
            ['zh', '中文 (Zhōngwén), 汉语, 漢語', false],
            ['ru', 'Русский', false],
            ['ar', 'العربية', false],
            ['vi', 'Việt Nam', false],
            ['ms', 'bahasa Melayu, بهاس ملايو‎', false],
            ['su', 'Basa Sunda', false],
            // Capitalized
            ['en', 'English', true],
            ['fr', 'Français, Langue Française', true],
            ['es', 'Español', true],
            ['id', 'Bahasa Indonesia', true],
            ['jv', 'Basa Jawa', true],
            ['hi', 'हिन्दी, हिंदी', true],
            ['th', 'ไทย', true],
            ['ko', '한국어', true],
            ['ja', '日本語 (にほんご)', true],
            ['zh', '中文 (Zhōngwén), 汉语, 漢語', true],
            ['ru', 'Русский', true],
            ['ar', 'العربية', true],
            ['vi', 'Việt Nam', true],
            ['ms', 'Bahasa Melayu, بهاس ملايو‎', true],
            ['su', 'Basa Sunda', true],
        ];
    }

    /** @dataProvider nativeByCode1DataProvider */
    #[\PHPUnit\Framework\Attributes\DataProvider('nativeByCode1DataProvider')]
    public function testNativeByCode1(string $code, string $expected, bool $sCapitalized): void
    {
        $this->assertSame($expected, $this->iso->nativeByCode1($code, $sCapitalized));
    }

    public static function languageByCode2tDataProvider(): array
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

    /** @dataProvider languageByCode2tDataProvider */
    #[\PHPUnit\Framework\Attributes\DataProvider('languageByCode2tDataProvider')]
    public function testLanguageISO6392t(string $code, string $expected): void
    {
        $this->assertSame($expected, $this->iso->languageByCode2t($code));
    }   

    public static function nativeByCode2tDataProvider(): array
    {
        return [
            // Default not capitalized
            ['eng', 'English', false],
            ['fra', 'français, langue française', false],
            ['spa', 'español', false],
            ['ind', 'Bahasa Indonesia', false],
            ['jav', 'basa Jawa', false],
            ['hin', 'हिन्दी, हिंदी', false],
            ['tha', 'ไทย', false],
            ['kor', '한국어', false],
            ['jpn', '日本語 (にほんご)', false],
            ['zho', '中文 (Zhōngwén), 汉语, 漢語', false],
            ['rus', 'Русский', false],
            ['ara', 'العربية', false],
            ['vie', 'Việt Nam', false],
            ['msa', 'bahasa Melayu, بهاس ملايو‎', false],
            ['sun', 'Basa Sunda', false],
            // Capitalized
            ['eng', 'English', true],
            ['fra', 'Français, Langue Française', true],
            ['spa', 'Español', true],
            ['ind', 'Bahasa Indonesia', true],
            ['jav', 'Basa Jawa', true],
            ['hin', 'हिन्दी, हिंदी', true],
            ['tha', 'ไทย', true],
            ['kor', '한국어', true],
            ['jpn', '日本語 (にほんご)', true],
            ['zho', '中文 (Zhōngwén), 汉语, 漢語', true],
            ['rus', 'Русский', true],
            ['ara', 'العربية', true],
            ['vie', 'Việt Nam', true],
            ['msa', 'Bahasa Melayu, بهاس ملايو‎', true],
            ['sun', 'Basa Sunda', true],
        ];
    }

    /** @dataProvider nativeByCode2tDataProvider */
    #[\PHPUnit\Framework\Attributes\DataProvider('nativeByCode2tDataProvider')]
    public function testNativeISO6392t(string $code, string $expected, bool $isCapitalized): void
    {
        $this->assertSame($expected, $this->iso->nativeByCode2t($code, $isCapitalized));
    }

    public static function languageByCode2bDataProvider(): array
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

    /** @dataProvider languageByCode2bDataProvider */
    #[\PHPUnit\Framework\Attributes\DataProvider('languageByCode2bDataProvider')]
    public function testLanguageByCode2b(string $code, string $expected): void
    {
        $this->assertSame($expected, $this->iso->languageByCode2b($code));
    }

    public static function nativeByCode2bDataProvider(): array
    {
        return [
            // Default not capitalized
            ['eng', 'English', false],
            ['fre', 'français, langue française', false],
            ['spa', 'español', false],
            ['ind', 'Bahasa Indonesia', false],
            ['jav', 'basa Jawa', false],
            ['hin', 'हिन्दी, हिंदी', false],
            ['tha', 'ไทย', false],
            ['kor', '한국어', false],
            ['jpn', '日本語 (にほんご)', false],
            ['chi', '中文 (Zhōngwén), 汉语, 漢語', false],
            ['rus', 'Русский', false],
            ['ara', 'العربية', false],
            ['vie', 'Việt Nam', false],
            ['may', 'bahasa Melayu, بهاس ملايو‎', false],
            ['sun', 'Basa Sunda', false],
            // Capitalized
            ['eng', 'English', true],
            ['fre', 'Français, Langue Française', true],
            ['spa', 'Español', true],
            ['ind', 'Bahasa Indonesia', true],
            ['jav', 'Basa Jawa', true],
            ['hin', 'हिन्दी, हिंदी', true],
            ['tha', 'ไทย', true],
            ['kor', '한국어', true],
            ['jpn', '日本語 (にほんご)', true],
            ['chi', '中文 (Zhōngwén), 汉语, 漢語', true],
            ['rus', 'Русский', true],
            ['ara', 'العربية', true],
            ['vie', 'Việt Nam', true],
            ['may', 'Bahasa Melayu, بهاس ملايو‎', true],
            ['sun', 'Basa Sunda', true],
        ];
    }

    /** @dataProvider nativeByCode2bDataProvider */
    #[\PHPUnit\Framework\Attributes\DataProvider('nativeByCode2bDataProvider')]
    public function testNativeByCode2b(string $code, string $expected, bool $isCapitalized): void
    {
        $this->assertSame($expected, $this->iso->nativeByCode2b($code, $isCapitalized));
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
    public function testLanguageByCode3(string $code, string $expected): void
    {
        $this->assertSame($expected, $this->iso->languageByCode3($code));
    }

    public static function nativeByCode3DataProvider(): array
    {
        return [
            // Default not capitalized
            ['eng', 'English', false],
            ['fra', 'français, langue française', false],
            ['spa', 'español', false],
            ['ind', 'Bahasa Indonesia', false],
            ['jav', 'basa Jawa', false],
            ['hin', 'हिन्दी, हिंदी', false],
            ['tha', 'ไทย', false],
            ['kor', '한국어', false],
            ['jpn', '日本語 (にほんご)', false],
            ['zho', '中文 (Zhōngwén), 汉语, 漢語', false],
            ['rus', 'Русский', false],
            ['ara', 'العربية', false],
            ['vie', 'Việt Nam', false],
            ['msa', 'bahasa Melayu, بهاس ملايو‎', false],
            ['sun', 'Basa Sunda', false],
            // Capitalized
            ['eng', 'English', true],
            ['fra', 'Français, Langue Française', true],
            ['spa', 'Español', true],
            ['ind', 'Bahasa Indonesia', true],
            ['jav', 'Basa Jawa', true],
            ['hin', 'हिन्दी, हिंदी', true],
            ['tha', 'ไทย', true],
            ['kor', '한국어', true],
            ['jpn', '日本語 (にほんご)', true],
            ['zho', '中文 (Zhōngwén), 汉语, 漢語', true],
            ['rus', 'Русский', true],
            ['ara', 'العربية', true],
            ['vie', 'Việt Nam', true],
            ['msa', 'Bahasa Melayu, بهاس ملايو‎', true],
            ['sun', 'Basa Sunda', true],
        ];
    }

    /** @dataProvider nativeByCode3DataProvider */
    #[\PHPUnit\Framework\Attributes\DataProvider('nativeByCode3DataProvider')]
    public function testNativeByCode3(string $code, string $expected, bool $isCapitalized): void
    {
        $this->assertSame($expected, $this->iso->nativeByCode3($code, $isCapitalized));
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
