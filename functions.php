<?php
/**
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 */

/**
 * I18N permalinks (Czech, German, Greek, Polish, Russian, Serbian, Slovak, Turkish, Ukranian).
 *
 */

add_filter('sanitize_title', 'transliterate_slug', 5, 3);

function transliterate_slug($title, $raw_title = NULL, $context = 'query')
{

    if ($raw_title != NULL) {
        $title = $raw_title;
    }

    // Czech
    $title = str_replace('Č', 'c', $title);
    $title = str_replace('č', 'c', $title);
    $title = str_replace('Ď', 'd', $title);
    $title = str_replace('ď', 'd', $title);
    $title = str_replace('Ě', 'e', $title);
    $title = str_replace('ě', 'e', $title);
    $title = str_replace('Ň', 'n', $title);
    $title = str_replace('ň', 'n', $title);
    $title = str_replace('Ř', 'r', $title);
    $title = str_replace('ř', 'r', $title);
    $title = str_replace('Š', 's', $title);
    $title = str_replace('š', 's', $title);
    $title = str_replace('Ť', 't', $title);
    $title = str_replace('ť', 't', $title);
    $title = str_replace('Ů', 'u', $title);
    $title = str_replace('ů', 'u', $title);
    $title = str_replace('Ž', 'z', $title);
    $title = str_replace('ž', 'z', $title);

    // German
    $title = str_replace('Ä', 'ae', $title);
    $title = str_replace('ä', 'ae', $title);
    $title = str_replace('Ö', 'oe', $title);
    $title = str_replace('ö', 'oe', $title);
    $title = str_replace('Ü', 'ue', $title);
    $title = str_replace('ü', 'ue', $title);
    $title = str_replace('ẞ', 'ss', $title);
    $title = str_replace('ß', 'ss', $title);

    // Greek
    $title = str_replace('α', 'a', $title);
    $title = str_replace('β', 'v', $title);
    $title = str_replace('γ', 'g', $title);
    $title = str_replace('δ', 'd', $title);
    $title = str_replace('ε', 'e', $title);
    $title = str_replace('ζ', 'z', $title);
    $title = str_replace('η', 'i', $title);
    $title = str_replace('θ', 'th', $title);
    $title = str_replace('ι', 'i', $title);
    $title = str_replace('κ', 'k', $title);
    $title = str_replace('λ', 'l', $title);
    $title = str_replace('μ', 'm', $title);
    $title = str_replace('ν', 'n', $title);
    $title = str_replace('ξ', 'ks', $title);
    $title = str_replace('ο', 'o', $title);
    $title = str_replace('π', 'p', $title);
    $title = str_replace('ρ', 'r', $title);
    $title = str_replace('σ', 's', $title);
    $title = str_replace('τ', 't', $title);
    $title = str_replace('υ', 'y', $title);
    $title = str_replace('φ', 'f', $title);
    $title = str_replace('χ', 'x', $title);
    $title = str_replace('ψ', 'ps', $title);
    $title = str_replace('ω', 'o', $title);
    $title = str_replace('ά', 'a', $title);
    $title = str_replace('έ', 'e', $title);
    $title = str_replace('ί', 'i', $title);
    $title = str_replace('ό', 'o', $title);
    $title = str_replace('ύ', 'y', $title);
    $title = str_replace('ή', 'i', $title);
    $title = str_replace('ώ', 'o', $title);
    $title = str_replace('ς', 's', $title);
    $title = str_replace('ϊ', 'i', $title);
    $title = str_replace('ΰ', 'y', $title);
    $title = str_replace('ϋ', 'y', $title);
    $title = str_replace('ΐ', 'i', $title);
    $title = str_replace('Α', 'A', $title);
    $title = str_replace('Β', 'B', $title);
    $title = str_replace('Γ', 'G', $title);
    $title = str_replace('Δ', 'D', $title);
    $title = str_replace('Ε', 'E', $title);
    $title = str_replace('Ζ', 'Z', $title);
    $title = str_replace('Η', 'I', $title);
    $title = str_replace('Θ', 'TH', $title);
    $title = str_replace('Ι', 'I', $title);
    $title = str_replace('Κ', 'K', $title);
    $title = str_replace('Λ', 'L', $title);
    $title = str_replace('Μ', 'M', $title);
    $title = str_replace('Ν', 'N', $title);
    $title = str_replace('Ξ', 'KS', $title);
    $title = str_replace('Ο', 'O', $title);
    $title = str_replace('Π', 'P', $title);
    $title = str_replace('Ρ', 'R', $title);
    $title = str_replace('Σ', 'S', $title);
    $title = str_replace('Τ', 'T', $title);
    $title = str_replace('Υ', 'Y', $title);
    $title = str_replace('Φ', 'F', $title);
    $title = str_replace('Χ', 'X', $title);
    $title = str_replace('Ψ', 'PS', $title);
    $title = str_replace('Ω', 'W', $title);
    $title = str_replace('Ά', 'A', $title);
    $title = str_replace('Έ', 'E', $title);
    $title = str_replace('Ί', 'I', $title);
    $title = str_replace('Ό', 'O', $title);
    $title = str_replace('Ύ', 'Y', $title);
    $title = str_replace('Ή', 'I', $title);
    $title = str_replace('Ώ', 'O', $title);
    $title = str_replace('Ϊ', 'I', $title);
    $title = str_replace('Ϋ', 'Y', $title);

    // Polish
    $title = str_replace('ą', 'a', $title);
    $title = str_replace('ć', 'c', $title);
    $title = str_replace('ę', 'e', $title);
    $title = str_replace('ł', 'l', $title);
    $title = str_replace('ń', 'n', $title);
    $title = str_replace('ó', 'o', $title);
    $title = str_replace('ś', 's', $title);
    $title = str_replace('ź', 'z', $title);
    $title = str_replace('ż', 'z', $title);
    $title = str_replace('Ą', 'A', $title);
    $title = str_replace('Ć', 'C', $title);
    $title = str_replace('Ę', 'E', $title);
    $title = str_replace('Ł', 'L', $title);
    $title = str_replace('Ń', 'N', $title);
    $title = str_replace('Ś', 'S', $title);
    $title = str_replace('Ź', 'Z', $title);
    $title = str_replace('Ż', 'Z', $title);

    // Russian
    $title = str_replace('а', 'a', $title);
    $title = str_replace('б', 'b', $title);
    $title = str_replace('в', 'v', $title);
    $title = str_replace('г', 'g', $title);
    $title = str_replace('д', 'd', $title);
    $title = str_replace('е', 'e', $title);
    $title = str_replace('ё', 'yo', $title);
    $title = str_replace('ж', 'zh', $title);
    $title = str_replace('з', 'z', $title);
    $title = str_replace('и', 'i', $title);
    $title = str_replace('й', 'i', $title);
    $title = str_replace('к', 'k', $title);
    $title = str_replace('л', 'l', $title);
    $title = str_replace('м', 'm', $title);
    $title = str_replace('н', 'n', $title);
    $title = str_replace('о', 'o', $title);
    $title = str_replace('п', 'p', $title);
    $title = str_replace('р', 'r', $title);
    $title = str_replace('с', 's', $title);
    $title = str_replace('т', 't', $title);
    $title = str_replace('у', 'u', $title);
    $title = str_replace('ф', 'f', $title);
    $title = str_replace('х', 'kh', $title);
    $title = str_replace('ц', 'c', $title);
    $title = str_replace('ч', 'ch', $title);
    $title = str_replace('ш', 'sh', $title);
    $title = str_replace('щ', 'sh', $title);
    $title = str_replace('ъ', '', $title);
    $title = str_replace('ы', 'y', $title);
    $title = str_replace('ь', '', $title);
    $title = str_replace('э', 'e', $title);
    $title = str_replace('ю', 'yu', $title);
    $title = str_replace('я', 'ya', $title);
    $title = str_replace('А', 'A', $title);
    $title = str_replace('Б', 'B', $title);
    $title = str_replace('В', 'V', $title);
    $title = str_replace('Г', 'G', $title);
    $title = str_replace('Д', 'D', $title);
    $title = str_replace('Е', 'E', $title);
    $title = str_replace('Ё', 'Yo', $title);
    $title = str_replace('Ж', 'Zh', $title);
    $title = str_replace('З', 'Z', $title);
    $title = str_replace('И', 'I', $title);
    $title = str_replace('Й', 'I', $title);
    $title = str_replace('К', 'K', $title);
    $title = str_replace('Л', 'L', $title);
    $title = str_replace('М', 'M', $title);
    $title = str_replace('Н', 'N', $title);
    $title = str_replace('О', 'O', $title);
    $title = str_replace('П', 'P', $title);
    $title = str_replace('Р', 'R', $title);
    $title = str_replace('С', 'S', $title);
    $title = str_replace('Т', 'T', $title);
    $title = str_replace('У', 'U', $title);
    $title = str_replace('Ф', 'F', $title);
    $title = str_replace('Х', 'Kh', $title);
    $title = str_replace('Ц', 'C', $title);
    $title = str_replace('Ч', 'Ch', $title);
    $title = str_replace('Ш', 'Sh', $title);
    $title = str_replace('Щ', 'Sh', $title);
    $title = str_replace('Ъ', '', $title);
    $title = str_replace('Ы', 'Y', $title);
    $title = str_replace('Ь', '', $title);
    $title = str_replace('Э', 'E', $title);
    $title = str_replace('Ю', 'Yu', $title);
    $title = str_replace('Я', 'Ya', $title);

    // Serbian
    $title = str_replace('ђ', 'dj', $title);
    $title = str_replace('ј', 'j', $title);
    $title = str_replace('љ', 'lj', $title);
    $title = str_replace('њ', 'nj', $title);
    $title = str_replace('ћ', 'c', $title);
    $title = str_replace('џ', 'dz', $title);
    $title = str_replace('Ђ', 'Dj', $title);
    $title = str_replace('Ј', 'j', $title);
    $title = str_replace('Љ', 'Lj', $title);
    $title = str_replace('Њ', 'Nj', $title);
    $title = str_replace('Ћ', 'C', $title);
    $title = str_replace('Џ', 'Dz', $title);

    // Slovak
    $title = str_replace('ľ', 'l', $title);
    $title = str_replace('ĺ', 'l', $title);
    $title = str_replace('ŕ', 'r', $title);
    $title = str_replace('Ľ', 'L', $title);
    $title = str_replace('Ĺ', 'L', $title);
    $title = str_replace('Ŕ', 'R', $title);

    // Turkish
    $title = str_replace('ş', 's', $title);
    $title = str_replace('Ş', 'S', $title);
    $title = str_replace('ı', 'i', $title);
    $title = str_replace('İ', 'I', $title);
    $title = str_replace('ç', 'c', $title);
    $title = str_replace('Ç', 'C', $title);
    $title = str_replace('ü', 'u', $title);
    $title = str_replace('Ü', 'U', $title);
    $title = str_replace('ö', 'o', $title);
    $title = str_replace('Ö', 'O', $title);
    $title = str_replace('ğ', 'g', $title);
    $title = str_replace('Ğ', 'G', $title);

    // Ukranian
    $title = str_replace('Є', 'Ye', $title);
    $title = str_replace('І', 'I', $title);
    $title = str_replace('Ї', 'Yi', $title);
    $title = str_replace('Ґ', 'G', $title);
    $title = str_replace('є', 'ye', $title);
    $title = str_replace('і', 'i', $title);
    $title = str_replace('ї', 'yi', $title);
    $title = str_replace('ґ', 'g', $title);

    if ($context == 'save') {
        $title = remove_accents($title);
    }

    return $title;

}