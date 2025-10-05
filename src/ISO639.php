<?php

namespace Matriphe\ISO639;

class ISO639
{
    private const INDEX_ISO639_1 = 0;
    private const INDEX_ISO639_2T = 1;
    private const INDEX_ISO639_2B = 2;
    private const INDEX_ISO639_3 = 3;
    private const INDEX_ENGLISH_NAME = 4;
    private const INDEX_NATIVE_NAME = 5;

    private const KEY_CODE_1 = 'code1';
    private const KEY_CODE_2T = 'code2t';
    private const KEY_CODE_2B = 'code2b';
    private const KEY_CODE_3 = 'code3';
    private const KEY_ENGLISH = 'english';
    private const KEY_NATIVE = 'native';

    /*
     * Language database, based on Wikipedia.
     * Source: https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes
     */
    private array $languages = [
        // ISO 639-1, ISO 639-2/T, ISO 639-2/B, ISO 639-3, English name, Native name
        ['ab', 'abk', 'abk', 'abk', 'Abkhaz', 'аҧсуа бызшәа, аҧсшәа'],
        ['aa', 'aar', 'aar', 'aar', 'Afar', 'Afaraf'],
        ['af', 'afr', 'afr', 'afr', 'Afrikaans', 'Afrikaans'],
        ['ak', 'aka', 'aka', 'aka', 'Akan', 'Akan'],
        ['sq', 'sqi', 'alb', 'sqi', 'Albanian', 'Shqip'],
        ['am', 'amh', 'amh', 'amh', 'Amharic', 'አማርኛ'],
        ['ar', 'ara', 'ara', 'ara', 'Arabic', 'العربية'],
        ['an', 'arg', 'arg', 'arg', 'Aragonese', 'aragonés'],
        ['hy', 'hye', 'arm', 'hye', 'Armenian', 'Հայերեն'],
        ['as', 'asm', 'asm', 'asm', 'Assamese', 'অসমীয়া'],
        ['av', 'ava', 'ava', 'ava', 'Avaric', 'авар мацӀ, магӀарул мацӀ'],
        ['ae', 'ave', 'ave', 'ave', 'Avestan', 'avesta'],
        ['ay', 'aym', 'aym', 'aym', 'Aymara', 'aymar aru'],
        ['az', 'aze', 'aze', 'aze', 'Azerbaijani', 'azərbaycan dili'],
        ['bm', 'bam', 'bam', 'bam', 'Bambara', 'bamanankan'],
        ['ba', 'bak', 'bak', 'bak', 'Bashkir', 'башҡорт теле'],
        ['eu', 'eus', 'baq', 'eus', 'Basque', 'euskara, euskera'],
        ['be', 'bel', 'bel', 'bel', 'Belarusian', 'беларуская мова'],
        ['bn', 'ben', 'ben', 'ben', 'Bengali, Bangla', 'বাংলা'],
        ['bh', 'bho', 'bih', 'bih', 'Bihari', 'भोजपुरी'],
        ['bi', 'bis', 'bis', 'bis', 'Bislama', 'Bislama'],
        ['bs', 'bos', 'bos', 'bos', 'Bosnian', 'bosanski jezik'],
        ['br', 'bre', 'bre', 'bre', 'Breton', 'brezhoneg'],
        ['bg', 'bul', 'bul', 'bul', 'Bulgarian', 'български език'],
        ['my', 'mya', 'bur', 'mya', 'Burmese', 'ဗမာစာ'],
        ['ca', 'cat', 'cat', 'cat', 'Catalan', 'català'],
        ['ch', 'cha', 'cha', 'cha', 'Chamorro', 'Chamoru'],
        ['ce', 'che', 'che', 'che', 'Chechen', 'нохчийн мотт'],
        ['ny', 'nya', 'nya', 'nya', 'Chichewa, Chewa, Nyanja', 'chiCheŵa, chinyanja'],
        ['zh', 'zho', 'chi', 'zho', 'Chinese', '中文 (Zhōngwén), 汉语, 漢語'],
        ['cv', 'chv', 'chv', 'chv', 'Chuvash', 'чӑваш чӗлхи'],
        ['kw', 'cor', 'cor', 'cor', 'Cornish', 'Kernewek'],
        ['co', 'cos', 'cos', 'cos', 'Corsican', 'corsu, lingua corsa'],
        ['cr', 'cre', 'cre', 'cre', 'Cree', 'ᓀᐦᐃᔭᐍᐏᐣ'],
        ['hr', 'hrv', 'hrv', 'hrv', 'Croatian', 'hrvatski jezik'],
        ['cs', 'ces', 'cze', 'ces', 'Czech', 'čeština, český jazyk'],
        ['da', 'dan', 'dan', 'dan', 'Danish', 'dansk'],
        ['dv', 'div', 'div', 'div', 'Divehi, Dhivehi, Maldivian', 'ދިވެހި'],
        ['nl', 'nld', 'dut', 'nld', 'Dutch', 'Nederlands, Vlaams'],
        ['dz', 'dzo', 'dzo', 'dzo', 'Dzongkha', 'རྫོང་ཁ'],
        ['en', 'eng', 'eng', 'eng', 'English', 'English'],
        ['eo', 'epo', 'epo', 'epo', 'Esperanto', 'Esperanto'],
        ['et', 'est', 'est', 'est', 'Estonian', 'eesti, eesti keel'],
        ['ee', 'ewe', 'ewe', 'ewe', 'Ewe', 'Eʋegbe'],
        ['fo', 'fao', 'fao', 'fao', 'Faroese', 'føroyskt'],
        ['fj', 'fij', 'fij', 'fij', 'Fijian', 'vosa Vakaviti'],
        ['fi', 'fin', 'fin', 'fin', 'Finnish', 'suomi, suomen kieli'],
        ['fr', 'fra', 'fre', 'fra', 'French', 'français, langue française'],
        ['ff', 'ful', 'ful', 'ful', 'Fula, Fulah, Pulaar, Pular', 'Fulfulde, Pulaar, Pular'],
        ['gl', 'glg', 'glg', 'glg', 'Galician', 'galego'],
        ['ka', 'kat', 'geo', 'kat', 'Georgian', 'ქართული'],
        ['de', 'deu', 'ger', 'deu', 'German', 'Deutsch'],
        ['el', 'ell', 'gre', 'ell', 'Greek (modern)', 'ελληνικά'],
        ['gn', 'grn', 'grn', 'grn', 'Guaraní', 'Avañe\'ẽ'],
        ['gu', 'guj', 'guj', 'guj', 'Gujarati', 'ગુજરાતી'],
        ['ht', 'hat', 'hat', 'hat', 'Haitian, Haitian Creole', 'Kreyòl ayisyen'],
        ['ha', 'hau', 'hau', 'hau', 'Hausa', '(Hausa) هَوُسَ'],
        ['he', 'heb', 'heb', 'heb', 'Hebrew (modern)', 'עברית'],
        ['hz', 'her', 'her', 'her', 'Herero', 'Otjiherero'],
        ['hi', 'hin', 'hin', 'hin', 'Hindi', 'हिन्दी, हिंदी'],
        ['ho', 'hmo', 'hmo', 'hmo', 'Hiri Motu', 'Hiri Motu'],
        ['hu', 'hun', 'hun', 'hun', 'Hungarian', 'magyar'],
        ['ia', 'ina', 'ina', 'ina', 'Interlingua', 'Interlingua'],
        ['id', 'ind', 'ind', 'ind', 'Indonesian', 'Bahasa Indonesia'],
        ['ie', 'ile', 'ile', 'ile', 'Interlingue', 'Originally called Occidental; then Interlingue after WWII'],
        ['ga', 'gle', 'gle', 'gle', 'Irish', 'Gaeilge'],
        ['ig', 'ibo', 'ibo', 'ibo', 'Igbo', 'Asụsụ Igbo'],
        ['ik', 'ipk', 'ipk', 'ipk', 'Inupiaq', 'Iñupiaq, Iñupiatun'],
        ['io', 'ido', 'ido', 'ido', 'Ido', 'Ido'],
        ['is', 'isl', 'ice', 'isl', 'Icelandic', 'Íslenska'],
        ['it', 'ita', 'ita', 'ita', 'Italian', 'italiano'],
        ['iu', 'iku', 'iku', 'iku', 'Inuktitut', 'ᐃᓄᒃᑎᑐᑦ'],
        ['ja', 'jpn', 'jpn', 'jpn', 'Japanese', '日本語 (にほんご)'],
        ['jv', 'jav', 'jav', 'jav', 'Javanese', 'basa Jawa'],
        ['kl', 'kal', 'kal', 'kal', 'Kalaallisut, Greenlandic', 'kalaallisut, kalaallit oqaasii'],
        ['kn', 'kan', 'kan', 'kan', 'Kannada', 'ಕನ್ನಡ'],
        ['kr', 'kau', 'kau', 'kau', 'Kanuri', 'Kanuri'],
        ['ks', 'kas', 'kas', 'kas', 'Kashmiri', 'कश्मीरी, كشميري‎'],
        ['kk', 'kaz', 'kaz', 'kaz', 'Kazakh', 'қазақ тілі'],
        ['km', 'khm', 'khm', 'khm', 'Khmer', 'ខ្មែរ, ខេមរភាសា, ភាសាខ្មែរ'],
        ['ki', 'kik', 'kik', 'kik', 'Kikuyu, Gikuyu', 'Gĩkũyũ'],
        ['rw', 'kin', 'kin', 'kin', 'Kinyarwanda', 'Ikinyarwanda'],
        ['ky', 'kir', 'kir', 'kir', 'Kyrgyz', 'Кыргызча, Кыргыз тили'],
        ['kv', 'kom', 'kom', 'kom', 'Komi', 'коми кыв'],
        ['kg', 'kon', 'kon', 'kon', 'Kongo', 'Kikongo'],
        ['ko', 'kor', 'kor', 'kor', 'Korean', '한국어'],
        ['ku', 'kur', 'kur', 'kur', 'Kurdish', 'Kurdî, كوردی‎'],
        ['kj', 'kua', 'kua', 'kua', 'Kwanyama, Kuanyama', 'Kuanyama'],
        ['la', 'lat', 'lat', 'lat', 'Latin', 'latine, lingua latina'],
        ['', '', '', 'lld', 'Ladin', 'ladin, lingua ladina'],
        ['lb', 'ltz', 'ltz', 'ltz', 'Luxembourgish, Letzeburgesch', 'Lëtzebuergesch'],
        ['lg', 'lug', 'lug', 'lug', 'Ganda', 'Luganda'],
        ['li', 'lim', 'lim', 'lim', 'Limburgish, Limburgan, Limburger', 'Limburgs'],
        ['ln', 'lin', 'lin', 'lin', 'Lingala', 'Lingála'],
        ['lo', 'lao', 'lao', 'lao', 'Lao', 'ພາສາລາວ'],
        ['lt', 'lit', 'lit', 'lit', 'Lithuanian', 'lietuvių kalba'],
        ['lu', 'lub', 'lub', 'lub', 'Luba-Katanga', 'Tshiluba'],
        ['lv', 'lav', 'lav', 'lav', 'Latvian', 'latviešu valoda'],
        ['gv', 'glv', 'glv', 'glv', 'Manx', 'Gaelg, Gailck'],
        ['mk', 'mkd', 'mac', 'mkd', 'Macedonian', 'македонски јазик'],
        ['mg', 'mlg', 'mlg', 'mlg', 'Malagasy', 'fiteny malagasy'],
        ['ms', 'msa', 'may', 'msa', 'Malay', 'bahasa Melayu, بهاس ملايو‎'],
        ['ml', 'mal', 'mal', 'mal', 'Malayalam', 'മലയാളം'],
        ['mt', 'mlt', 'mlt', 'mlt', 'Maltese', 'Malti'],
        ['mi', 'mri', 'mao', 'mri', 'Māori', 'te reo Māori'],
        ['mr', 'mar', 'mar', 'mar', 'Marathi (Marāṭhī)', 'मराठी'],
        ['mh', 'mah', 'mah', 'mah', 'Marshallese', 'Kajin M̧ajeļ'],
        ['mn', 'mon', 'mon', 'mon', 'Mongolian', 'монгол'],
        ['na', 'nau', 'nau', 'nau', 'Nauru', 'Ekakairũ Naoero'],
        ['nv', 'nav', 'nav', 'nav', 'Navajo, Navaho', 'Diné bizaad'],
        ['nd', 'nde', 'nde', 'nde', 'Northern Ndebele', 'isiNdebele'],
        ['ne', 'nep', 'nep', 'nep', 'Nepali', 'नेपाली'],
        ['ng', 'ndo', 'ndo', 'ndo', 'Ndonga', 'Owambo'],
        ['nb', 'nob', 'nob', 'nob', 'Norwegian Bokmål', 'Norsk bokmål'],
        ['nn', 'nno', 'nno', 'nno', 'Norwegian Nynorsk', 'Norsk nynorsk'],
        ['no', 'nor', 'nor', 'nor', 'Norwegian', 'Norsk'],
        ['ii', 'iii', 'iii', 'iii', 'Nuosu', 'ꆈꌠ꒿ Nuosuhxop'],
        ['nr', 'nbl', 'nbl', 'nbl', 'Southern Ndebele', 'isiNdebele'],
        ['oc', 'oci', 'oci', 'oci', 'Occitan', 'occitan, lenga d\'òc'],
        ['oj', 'oji', 'oji', 'oji', 'Ojibwe, Ojibwa', 'ᐊᓂᔑᓈᐯᒧᐎᓐ'],
        ['cu', 'chu', 'chu', 'chu', 'Old Church Slavonic, Church Slavonic, Old Bulgarian', 'ѩзыкъ словѣньскъ'],
        ['om', 'orm', 'orm', 'orm', 'Oromo', 'Afaan Oromoo'],
        ['or', 'ori', 'ori', 'ori', 'Oriya', 'ଓଡ଼ିଆ'],
        ['os', 'oss', 'oss', 'oss', 'Ossetian, Ossetic', 'ирон æвзаг'],
        ['pa', 'pan', 'pan', 'pan', 'Panjabi, Punjabi', 'ਪੰਜਾਬੀ, پنجابی‎'],
        ['pi', 'pli', 'pli', 'pli', 'Pāli', 'पाऴि'],
        ['fa', 'fas', 'per', 'fas', 'Persian (Farsi)', 'فارسی'],
        ['pl', 'pol', 'pol', 'pol', 'Polish', 'język polski, polszczyzna'],
        ['ps', 'pus', 'pus', 'pus', 'Pashto, Pushto', 'پښتو'],
        ['pt', 'por', 'por', 'por', 'Portuguese', 'português'],
        ['qu', 'que', 'que', 'que', 'Quechua', 'Runa Simi, Kichwa'],
        ['rm', 'roh', 'roh', 'roh', 'Romansh', 'rumantsch grischun'],
        ['rn', 'run', 'run', 'run', 'Kirundi', 'Ikirundi'],
        ['ro', 'ron', 'rum', 'ron', 'Romanian', 'limba română'],
        ['ru', 'rus', 'rus', 'rus', 'Russian', 'Русский'],
        ['sa', 'san', 'san', 'san', 'Sanskrit (Saṁskṛta)', 'संस्कृतम्'],
        ['sc', 'srd', 'srd', 'srd', 'Sardinian', 'sardu'],
        ['sd', 'snd', 'snd', 'snd', 'Sindhi', 'सिन्धी, سنڌي، سندھی‎'],
        ['se', 'sme', 'sme', 'sme', 'Northern Sami', 'Davvisámegiella'],
        ['sm', 'smo', 'smo', 'smo', 'Samoan', 'gagana fa\'a Samoa'],
        ['sg', 'sag', 'sag', 'sag', 'Sango', 'yângâ tî sängö'],
        ['sr', 'srp', 'srp', 'srp', 'Serbian', 'српски језик'],
        ['gd', 'gla', 'gla', 'gla', 'Scottish Gaelic, Gaelic', 'Gàidhlig'],
        ['sn', 'sna', 'sna', 'sna', 'Shona', 'chiShona'],
        ['si', 'sin', 'sin', 'sin', 'Sinhala, Sinhalese', 'සිංහල'],
        ['sk', 'slk', 'slo', 'slk', 'Slovak', 'slovenčina, slovenský jazyk'],
        ['sl', 'slv', 'slv', 'slv', 'Slovene', 'slovenski jezik, slovenščina'],
        ['so', 'som', 'som', 'som', 'Somali', 'Soomaaliga, af Soomaali'],
        ['st', 'sot', 'sot', 'sot', 'Southern Sotho', 'Sesotho'],
        ['es', 'spa', 'spa', 'spa', 'Spanish', 'español'],
        ['su', 'sun', 'sun', 'sun', 'Sundanese', 'Basa Sunda'],
        ['sw', 'swa', 'swa', 'swa', 'Swahili', 'Kiswahili'],
        ['ss', 'ssw', 'ssw', 'ssw', 'Swati', 'SiSwati'],
        ['sv', 'swe', 'swe', 'swe', 'Swedish', 'svenska'],
        ['ta', 'tam', 'tam', 'tam', 'Tamil', 'தமிழ்'],
        ['te', 'tel', 'tel', 'tel', 'Telugu', 'తెలుగు'],
        ['tg', 'tgk', 'tgk', 'tgk', 'Tajik', 'тоҷикӣ, toçikī, تاجیکی‎'],
        ['th', 'tha', 'tha', 'tha', 'Thai', 'ไทย'],
        ['ti', 'tir', 'tir', 'tir', 'Tigrinya', 'ትግርኛ'],
        ['bo', 'bod', 'tib', 'bod', 'Tibetan Standard, Tibetan, Central', 'བོད་ཡིག'],
        ['tk', 'tuk', 'tuk', 'tuk', 'Turkmen', 'Türkmen, Түркмен'],
        ['tl', 'tgl', 'tgl', 'tgl', 'Tagalog', 'Wikang Tagalog, ᜏᜒᜃᜅ᜔ ᜆᜄᜎᜓᜄ᜔'],
        ['tn', 'tsn', 'tsn', 'tsn', 'Tswana', 'Setswana'],
        ['to', 'ton', 'ton', 'ton', 'Tonga (Tonga Islands)', 'faka Tonga'],
        ['tr', 'tur', 'tur', 'tur', 'Turkish', 'Türkçe'],
        ['ts', 'tso', 'tso', 'tso', 'Tsonga', 'Xitsonga'],
        ['tt', 'tat', 'tat', 'tat', 'Tatar', 'татар теле, tatar tele'],
        ['tw', 'twi', 'twi', 'twi', 'Twi', 'Twi'],
        ['ty', 'tah', 'tah', 'tah', 'Tahitian', 'Reo Tahiti'],
        ['ug', 'uig', 'uig', 'uig', 'Uyghur', 'ئۇيغۇرچە‎, Uyghurche'],
        ['uk', 'ukr', 'ukr', 'ukr', 'Ukrainian', 'українська мова'],
        ['ur', 'urd', 'urd', 'urd', 'Urdu', 'اردو'],
        ['uz', 'uzb', 'uzb', 'uzb', 'Uzbek', 'Oʻzbek, Ўзбек, أۇزبېك‎'],
        ['ve', 'ven', 'ven', 'ven', 'Venda', 'Tshivenḓa'],
        ['vi', 'vie', 'vie', 'vie', 'Vietnamese', 'Việt Nam'],
        ['vo', 'vol', 'vol', 'vol', 'Volapük', 'Volapük'],
        ['wa', 'wln', 'wln', 'wln', 'Walloon', 'walon'],
        ['cy', 'cym', 'wel', 'cym', 'Welsh', 'Cymraeg'],
        ['wo', 'wol', 'wol', 'wol', 'Wolof', 'Wollof'],
        ['fy', 'fry', 'fry', 'fry', 'Western Frisian', 'Frysk'],
        ['xh', 'xho', 'xho', 'xho', 'Xhosa', 'isiXhosa'],
        ['yi', 'yid', 'yid', 'yid', 'Yiddish', 'ייִדיש'],
        ['yo', 'yor', 'yor', 'yor', 'Yoruba', 'Yorùbá'],
        ['za', 'zha', 'zha', 'zha', 'Zhuang, Chuang', 'Saɯ cueŋƅ, Saw cuengh'],
        ['zu', 'zul', 'zul', 'zul', 'Zulu', 'isiZulu'],
    ];

    /**
     * Whether mbstring extension is available
     */
    private bool $hasMbstring;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->hasMbstring = extension_loaded('mbstring');

        $this->buildHashmap();
    }

    /**
     * Convert string to lowercase using mbstring if available, fallback to strtolower
     */
    private function toLower(string $string): string
    {
        $string = trim($string);

        if ($this->hasMbstring) {
            return mb_strtolower($string, 'UTF-8');
        }

        return strtolower($string);
    }

    /**
     * Convert first character of each word to uppercase using mbstring if available, fallback to ucwords
     */
    private function toTitleCase(string $string): string
    {
        if ($this->hasMbstring) {
            return mb_convert_case($string, MB_CASE_TITLE, 'UTF-8');
        }

        return ucwords($string);
    }

    private array $iso639_1 = [];
    private array $iso639_2t = [];
    private array $iso639_2b = [];
    private array $iso639_3 = [];
    private array $langEnglish = [];
    private array $code2tToCode1 = [];
    private array $code1ToCode2t = [];
    private array $code2bToLang = [];

    private function buildHashmap(): void
    {
        foreach ($this->languages as $lang) {
            $iso639_1 = $this->toLower($lang[self::INDEX_ISO639_1]);
            $iso639_2t = $this->toLower($lang[self::INDEX_ISO639_2T]);
            $iso639_2b = $this->toLower($lang[self::INDEX_ISO639_2B]);
            $iso639_3 = $this->toLower($lang[self::INDEX_ISO639_3]);

            $english = $lang[self::INDEX_ENGLISH_NAME];
            $native = $lang[self::INDEX_NATIVE_NAME];

            $val = [
                self::KEY_CODE_1 => $iso639_1,
                self::KEY_CODE_2T => $iso639_2t,
                self::KEY_CODE_2B => $iso639_2b,
                self::KEY_CODE_3 => $iso639_3,
                self::KEY_ENGLISH => $english,
                self::KEY_NATIVE => $native,
            ];

            if (!empty($iso639_1)) {
                $this->iso639_1[$iso639_1] = $val;
            }
            if (!empty($iso639_2t)) {
                $this->iso639_2t[$iso639_2t] = $val;
            }
            if (!empty($iso639_2b)) {
                $this->iso639_2b[$iso639_2b] = $val;

                $this->code2bToLang[$iso639_2b] = $lang;
            }
            if (!empty($iso639_3)) {
                $this->iso639_3[$iso639_3] = $val;
            }

            $this->langEnglish[$this->toLower($english)] = $val;

            if (!empty($iso639_2t) && !empty($iso639_1)) {
                $this->code2tToCode1[$iso639_2t] = $iso639_1;
            }
            if (!empty($iso639_1) && !empty($iso639_2t)) {
                $this->code1ToCode2t[$iso639_1] = $iso639_2t;
            }
        }
    }

    /*
     * Get all language data
    */
    public function allLanguages(): array
    {
        return $this->languages;
    }

    /*
     * Get language name from ISO-639-1 (two-letters code)
     */
    public function languageByCode1(string $code): string
    {
        return $this->iso639_1[$this->toLower($code)][self::KEY_ENGLISH] ?? '';
    }

    /*
     * Get native language name from ISO-639-1 (two-letters code)
     */
    public function nativeByCode1(string $code, bool $isCapitalized = false): string
    {
        $native = $this->iso639_1[$this->toLower($code)][self::KEY_NATIVE] ?? '';

        return $isCapitalized ? $this->toTitleCase($native) : $native;
    }

    /*
     * Get language name from ISO-639-2/t (three-letter codes) terminologic
     */
    public function languageByCode2t(string $code): string
    {
        return $this->iso639_2t[$this->toLower($code)][self::KEY_ENGLISH] ?? '';
    }

    /*
     * Get native language name from ISO-639-2/t (three-letter codes) terminologic
     */
    public function nativeByCode2t(string $code, bool $isCapitalized = false): string
    {
        $native = $this->iso639_2t[$this->toLower($code)][self::KEY_NATIVE] ?? '';

        return $isCapitalized ? $this->toTitleCase($native) : $native;
    }

    /*
     * Get language name from ISO-639-2/b (three-letter codes) bibliographic
     */
    public function languageByCode2b(string $code): string
    {
        return $this->iso639_2b[$this->toLower($code)][self::KEY_ENGLISH] ?? '';
    }

    /*
     * Get native language name from ISO-639-2/b (three-letter codes) bibliographic
     */
    public function nativeByCode2b(string $code, bool $isCapitalized = false): string
    {
        $native = $this->iso639_2b[$this->toLower($code)][self::KEY_NATIVE] ?? '';

        return $isCapitalized ? $this->toTitleCase($native) : $native;
    }

    /*
     * Get language name from ISO-639-3 (three-letter codes)
     */
    public function languageByCode3($code): string
    {
        return $this->iso639_3[$this->toLower($code)][self::KEY_ENGLISH] ?? '';
    }

    /*
     * Get native language name from ISO-639-3 (three-letter codes)
     */
    public function nativeByCode3(string $code, bool $isCapitalized = false): string
    {
        $native = $this->iso639_3[$this->toLower($code)][self::KEY_NATIVE] ?? '';

        return $isCapitalized ? $this->toTitleCase($native) : $native;
    }

    /*
     * Get ISO-639-1 (two-letters code) from language name
     */
    public function code1ByLanguage(string $language): string
    {
        return $this->langEnglish[$this->toLower($language)][self::KEY_CODE_1] ?? '';
    }

    /*
     * Get ISO-639-2/t (three-letter codes) terminologic from language name
     */
    public function code2tByLanguage(string $language): string
    {
        return $this->langEnglish[$this->toLower($language)][self::KEY_CODE_2T] ?? '';
    }

    /*
     * Get ISO-639-2/b (three-letter codes) bibliographic from language name
     */
    public function code2bByLanguage(string $language): string
    {
        return $this->langEnglish[$this->toLower($language)][self::KEY_CODE_2B] ?? '';
    }

    /*
     * Get ISO-639-3 (three-letter codes) from language name
     */
    public function code3ByLanguage(string $language): string
    {
        return $this->langEnglish[$this->toLower($language)][self::KEY_CODE_3] ?? '';
    }

    /**
     * Gat language array from ISO-639-2/b (three-letter code)
     */
    public function getLanguageByIsoCode2b(string $code): ?array
    {
        return $this->code2bToLang[$this->toLower($code)] ?? null;
    }

    /**
     * Get ISO-639-2t code from ISO-639-1 code
     */
    public function code2tByCode1(string $code): string
    {
        return $this->code1ToCode2t[$this->toLower($code)] ?? '';
    }

}
