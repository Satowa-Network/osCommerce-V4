<?php
/**
 * This file is part of the netsuitephp/netsuite-php library
 * AND originally from the NetSuite PHP Toolkit.
 *
 * New content:
 * @package    ryanwinchester/netsuite-php
 * @copyright  Copyright (c) Ryan Winchester
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache-2.0
 * @link       https://github.com/netsuitephp/netsuite-php
 *
 * Original content:
 * @copyright  Copyright (c) NetSuite Inc.
 * @license    https://raw.githubusercontent.com/netsuitephp/netsuite-php/master/original/NetSuite%20Application%20Developer%20License%20Agreement.txt
 * @link       http://www.netsuite.com/portal/developers/resources/suitetalk-sample-applications.shtml
 */

namespace NetSuite\Classes;

class CurrencyLocale {
    static $paramtypesmap = array(
    );
    const _afghanistanPashto = "_afghanistanPashto";
    const _afghanistanPersian = "_afghanistanPersian";
    const _alandIslandsSwedish = "_alandIslandsSwedish";
    const _albaniaAlbanian = "_albaniaAlbanian";
    const _algeriaArabic = "_algeriaArabic";
    const _angolaPortuguese = "_angolaPortuguese";
    const _anguillaEnglish = "_anguillaEnglish";
    const _antiguaAndBarbudaEnglish = "_antiguaAndBarbudaEnglish";
    const _argentinaSpanish = "_argentinaSpanish";
    const _armeniaArmenian = "_armeniaArmenian";
    const _arubaEnglish = "_arubaEnglish";
    const _arubaPortuguese = "_arubaPortuguese";
    const _australiaEnglish = "_australiaEnglish";
    const _austriaGerman = "_austriaGerman";
    const _azerbaijanAzerbaijani = "_azerbaijanAzerbaijani";
    const _bahamasEnglish = "_bahamasEnglish";
    const _bahrainArabic = "_bahrainArabic";
    const _barbadosEnglish = "_barbadosEnglish";
    const _belarusByelorussian = "_belarusByelorussian";
    const _belgiumDutch = "_belgiumDutch";
    const _belgiumFrench = "_belgiumFrench";
    const _belizeEnglish = "_belizeEnglish";
    const _bengali = "_bengali";
    const _beninFrench = "_beninFrench";
    const _bermudaEnglish = "_bermudaEnglish";
    const _bhutanDzongkha = "_bhutanDzongkha";
    const _boliviaSpanish = "_boliviaSpanish";
    const _bonaireSaintEustatiusAndSabaDutch = "_bonaireSaintEustatiusAndSabaDutch";
    const _bosniaAndHerzegovinaBosnian = "_bosniaAndHerzegovinaBosnian";
    const _botswanaEnglish = "_botswanaEnglish";
    const _brazilPortuguese = "_brazilPortuguese";
    const _bruneiMalay = "_bruneiMalay";
    const _bulgariaBulgarian = "_bulgariaBulgarian";
    const _burkinaFasoFrench = "_burkinaFasoFrench";
    const _burundiFrench = "_burundiFrench";
    const _cambodiaKhmer = "_cambodiaKhmer";
    const _cameroonFrench = "_cameroonFrench";
    const _canadaEnglish = "_canadaEnglish";
    const _canadaFrench = "_canadaFrench";
    const _canaryIslandsSpanish = "_canaryIslandsSpanish";
    const _capeVerdePortuguese = "_capeVerdePortuguese";
    const _caymanIslandsEnglish = "_caymanIslandsEnglish";
    const _centralAfricanRepublicFrench = "_centralAfricanRepublicFrench";
    const _ceutaAndMelillaSpanish = "_ceutaAndMelillaSpanish";
    const _chadFrench = "_chadFrench";
    const _chileSpanish = "_chileSpanish";
    const _chinaChinese = "_chinaChinese";
    const _colombiaSpanish = "_colombiaSpanish";
    const _comorosFrench = "_comorosFrench";
    const _congoDemocraticRepublicEnglish = "_congoDemocraticRepublicEnglish";
    const _congoDemocraticRepublicFrench = "_congoDemocraticRepublicFrench";
    const _congoRepublicOfFrench = "_congoRepublicOfFrench";
    const _costaRicaSpanish = "_costaRicaSpanish";
    const _coteDivoireFrench = "_coteDivoireFrench";
    const _croatiaCroatian = "_croatiaCroatian";
    const _cubaSpanish = "_cubaSpanish";
    const _curacaoDutch = "_curacaoDutch";
    const _cyprusEnglish = "_cyprusEnglish";
    const _cyprusEnglishEuro = "_cyprusEnglishEuro";
    const _czechRepublicCzech = "_czechRepublicCzech";
    const _denmarkDanish = "_denmarkDanish";
    const _djiboutiArabic = "_djiboutiArabic";
    const _djiboutiFrench = "_djiboutiFrench";
    const _dominicaEnglish = "_dominicaEnglish";
    const _dominicanRepublicSpanish = "_dominicanRepublicSpanish";
    const _ecuadorSpanish = "_ecuadorSpanish";
    const _egyptArabic = "_egyptArabic";
    const _elSalvadorSpanish = "_elSalvadorSpanish";
    const _equatorialGuineaSpanish = "_equatorialGuineaSpanish";
    const _eritreaAfar = "_eritreaAfar";
    const _estoniaEstonian = "_estoniaEstonian";
    const _ethiopiaAmharic = "_ethiopiaAmharic";
    const _falklandIslandsEnglish = "_falklandIslandsEnglish";
    const _fijiFijian = "_fijiFijian";
    const _finlandFinnish = "_finlandFinnish";
    const _finlandFinnishEuro = "_finlandFinnishEuro";
    const _franceFrench = "_franceFrench";
    const _franceFrenchEuro = "_franceFrenchEuro";
    const _frenchPolynesiaFrench = "_frenchPolynesiaFrench";
    const _gabonFrench = "_gabonFrench";
    const _gambiaEnglish = "_gambiaEnglish";
    const _georgiaGeorgian = "_georgiaGeorgian";
    const _germanyGerman = "_germanyGerman";
    const _germanyGermanEuro = "_germanyGermanEuro";
    const _ghanaEnglish = "_ghanaEnglish";
    const _gibraltarEnglish = "_gibraltarEnglish";
    const _goldOunce = "_goldOunce";
    const _greeceGreek = "_greeceGreek";
    const _grenadaEnglish = "_grenadaEnglish";
    const _guatemalaSpanish = "_guatemalaSpanish";
    const _guineaBissauPortuguese = "_guineaBissauPortuguese";
    const _guineaFrench = "_guineaFrench";
    const _guyanaEnglish = "_guyanaEnglish";
    const _haitian = "_haitian";
    const _hondurasSpanish = "_hondurasSpanish";
    const _hongKongChinese = "_hongKongChinese";
    const _hungaryHungarian = "_hungaryHungarian";
    const _icelandIcelandic = "_icelandIcelandic";
    const _indiaEnglish = "_indiaEnglish";
    const _indiaGujarati = "_indiaGujarati";
    const _indiaHindi = "_indiaHindi";
    const _indiaKannada = "_indiaKannada";
    const _indiaMarathi = "_indiaMarathi";
    const _indiaPanjabi = "_indiaPanjabi";
    const _indiaTamil = "_indiaTamil";
    const _indiaTelugu = "_indiaTelugu";
    const _indonesiaIndonesian = "_indonesiaIndonesian";
    const _iranPersian = "_iranPersian";
    const _iraqArabic = "_iraqArabic";
    const _irelandEnglish = "_irelandEnglish";
    const _israelHebrew = "_israelHebrew";
    const _italyItalian = "_italyItalian";
    const _italyItalianEuro = "_italyItalianEuro";
    const _jamaicaEnglish = "_jamaicaEnglish";
    const _japanJapanese = "_japanJapanese";
    const _jordanArabic = "_jordanArabic";
    const _jordanEnglish = "_jordanEnglish";
    const _kazakhstanRussian = "_kazakhstanRussian";
    const _kenyaEnglish = "_kenyaEnglish";
    const _kuwaitArabic = "_kuwaitArabic";
    const _kuwaitEnglish = "_kuwaitEnglish";
    const _kyrgyzstanRussian = "_kyrgyzstanRussian";
    const _laosLao = "_laosLao";
    const _latviaLatvianLettish = "_latviaLatvianLettish";
    const _lebanonArabic = "_lebanonArabic";
    const _lesothoEnglish = "_lesothoEnglish";
    const _liberiaEnglish = "_liberiaEnglish";
    const _libyaArabic = "_libyaArabic";
    const _lithuaniaLithuanian = "_lithuaniaLithuanian";
    const _luxembourgFrench = "_luxembourgFrench";
    const _luxembourgGerman = "_luxembourgGerman";
    const _luxembourgLuxembourgish = "_luxembourgLuxembourgish";
    const _macauChinese = "_macauChinese";
    const _macedoniaMacedonian = "_macedoniaMacedonian";
    const _malawiEnglish = "_malawiEnglish";
    const _malaysiaMalay = "_malaysiaMalay";
    const _maldivesDhivehi = "_maldivesDhivehi";
    const _maliFrench = "_maliFrench";
    const _mauritiusEnglish = "_mauritiusEnglish";
    const _mexicoSpanish = "_mexicoSpanish";
    const _moldovaRomanian = "_moldovaRomanian";
    const _moldovaRussian = "_moldovaRussian";
    const _mongoliaMongolian = "_mongoliaMongolian";
    const _moroccoArabic = "_moroccoArabic";
    const _mozambiquePortuguese = "_mozambiquePortuguese";
    const _myanmarBurmese = "_myanmarBurmese";
    const _namibiaEnglish = "_namibiaEnglish";
    const _nepalNepali = "_nepalNepali";
    const _netherlandsAntillesDutch = "_netherlandsAntillesDutch";
    const _netherlandsDutch = "_netherlandsDutch";
    const _netherlandsDutchEuro = "_netherlandsDutchEuro";
    const _newCaledoniaFrench = "_newCaledoniaFrench";
    const _newZealandEnglish = "_newZealandEnglish";
    const _nicaraguaSpanish = "_nicaraguaSpanish";
    const _nigerFrench = "_nigerFrench";
    const _nigeriaEnglish = "_nigeriaEnglish";
    const _northKoreaKorean = "_northKoreaKorean";
    const _norwayNorwegian = "_norwayNorwegian";
    const _omanArabic = "_omanArabic";
    const _pakistanUrdu = "_pakistanUrdu";
    const _palladiumOunce = "_palladiumOunce";
    const _panamaSpanish = "_panamaSpanish";
    const _papuaNewGuineaEnglish = "_papuaNewGuineaEnglish";
    const _paraguaySpanish = "_paraguaySpanish";
    const _peruSpanish = "_peruSpanish";
    const _philippinesEnglish = "_philippinesEnglish";
    const _philippinesTagalog = "_philippinesTagalog";
    const _platinumOunce = "_platinumOunce";
    const _polandPolish = "_polandPolish";
    const _portugalPortuguese = "_portugalPortuguese";
    const _portugalPortugueseEuro = "_portugalPortugueseEuro";
    const _puertoRicoSpanish = "_puertoRicoSpanish";
    const _qatarArabic = "_qatarArabic";
    const _qatarEnglish = "_qatarEnglish";
    const _romaniaRomanian = "_romaniaRomanian";
    const _russiaRussian = "_russiaRussian";
    const _rwandaFrench = "_rwandaFrench";
    const _saintBarthelemyFrench = "_saintBarthelemyFrench";
    const _saintHelenaEnglish = "_saintHelenaEnglish";
    const _saintKittsAndNevisEnglish = "_saintKittsAndNevisEnglish";
    const _saintLuciaEnglish = "_saintLuciaEnglish";
    const _saintMartinEnglish = "_saintMartinEnglish";
    const _saintVincentAndTheGrenadinesEnglish = "_saintVincentAndTheGrenadinesEnglish";
    const _samoaSamoan = "_samoaSamoan";
    const _saoTomeAndPrincipePortuguese = "_saoTomeAndPrincipePortuguese";
    const _saudiArabiaArabic = "_saudiArabiaArabic";
    const _senegalFrench = "_senegalFrench";
    const _serbiaAndMontenegroSerbian = "_serbiaAndMontenegroSerbian";
    const _serbiaSerbian = "_serbiaSerbian";
    const _serbiaSerboCroatian = "_serbiaSerboCroatian";
    const _seychellesEnglish = "_seychellesEnglish";
    const _seychellesFrench = "_seychellesFrench";
    const _sierraLeoneEnglish = "_sierraLeoneEnglish";
    const _silverOunce = "_silverOunce";
    const _singaporeEnglish = "_singaporeEnglish";
    const _sintMaartenDutch = "_sintMaartenDutch";
    const _slovakiaSlovak = "_slovakiaSlovak";
    const _slovakiaSlovakEuro = "_slovakiaSlovakEuro";
    const _sloveniaSlovenian = "_sloveniaSlovenian";
    const _sloveniaSlovenianEuro = "_sloveniaSlovenianEuro";
    const _solomonIslandsEnglish = "_solomonIslandsEnglish";
    const _somaliaSomali = "_somaliaSomali";
    const _southAfricaAfrikaans = "_southAfricaAfrikaans";
    const _southAfricaEnglish = "_southAfricaEnglish";
    const _southKoreaKorean = "_southKoreaKorean";
    const _southSudanEnglish = "_southSudanEnglish";
    const _spainCatalan = "_spainCatalan";
    const _spainSpanish = "_spainSpanish";
    const _spainSpanishEuro = "_spainSpanishEuro";
    const _sriLankaSinhalese = "_sriLankaSinhalese";
    const _sudanArabic = "_sudanArabic";
    const _surinameDutch = "_surinameDutch";
    const _swazilandSwati = "_swazilandSwati";
    const _swedenSwedish = "_swedenSwedish";
    const _switzerlandFrench = "_switzerlandFrench";
    const _switzerlandGerman = "_switzerlandGerman";
    const _switzerlandItalian = "_switzerlandItalian";
    const _syriaArabic = "_syriaArabic";
    const _taiwanChinese = "_taiwanChinese";
    const _tajikistanTajik = "_tajikistanTajik";
    const _tanzaniaEnglish = "_tanzaniaEnglish";
    const _thailandThai = "_thailandThai";
    const _togoFrench = "_togoFrench";
    const _tongaTonga = "_tongaTonga";
    const _trinidadAndTobagoEnglish = "_trinidadAndTobagoEnglish";
    const _tunisiaArabic = "_tunisiaArabic";
    const _turkeyTurkish = "_turkeyTurkish";
    const _turkmenistanTurkmen = "_turkmenistanTurkmen";
    const _turksAndCaicosIslandsEnglish = "_turksAndCaicosIslandsEnglish";
    const _ugandaEnglish = "_ugandaEnglish";
    const _ukraineUkrainian = "_ukraineUkrainian";
    const _unitedArabEmiratesArabic = "_unitedArabEmiratesArabic";
    const _unitedArabEmiratesEnglish = "_unitedArabEmiratesEnglish";
    const _unitedKingdomEnglish = "_unitedKingdomEnglish";
    const _unitedStatesEnglish = "_unitedStatesEnglish";
    const _uruguaySpanish = "_uruguaySpanish";
    const _uzbekistanUzbek = "_uzbekistanUzbek";
    const _vanuatuEnglish = "_vanuatuEnglish";
    const _vanuatuFrench = "_vanuatuFrench";
    const _venezuelaSpanish = "_venezuelaSpanish";
    const _vietnamVietnamese = "_vietnamVietnamese";
    const _wallisAndFutunaFrench = "_wallisAndFutunaFrench";
    const _yemenArabic = "_yemenArabic";
    const _zambiaEnglish = "_zambiaEnglish";
}