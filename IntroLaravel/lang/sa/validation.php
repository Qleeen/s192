<?php

declare(strict_types=1);

return [
    'accepted'             => '१० अवश्यं स्वीकारणीयाः।',
    'accepted_if'          => '२० यदा ३० भवति तदा १० स्वीकारः अवश्यं करणीयः ।',
    'active_url'           => '१० वैधः URL नास्ति ।',
    'after'                => '१० २० तः परं तिथिः भवितुमर्हति ।',
    'after_or_equal'       => '१० २० इत्यस्य अनन्तरं वा समं वा तिथिः भवितुमर्हति ।',
    'alpha'                => '१० मध्ये केवलं अक्षराणि एव भवितुमर्हन्ति।',
    'alpha_dash'           => '१० मध्ये केवलं अक्षराणि, संख्याः, डैशः, अधोरेखाः च अवश्यं भवेयुः ।',
    'alpha_num'            => '१० मध्ये केवलं अक्षराणि सङ्ख्याः च भवितुमर्हन्ति ।',
    'array'                => '१० एकः सरणी भवितुमर्हति।',
    'ascii'                => ':attribute क्षेत्रे केवलं एकबाइट्-अक्षर-संख्या-वर्णाः चिह्नानि च भवितुमर्हन्ति ।',
    'before'               => '१० २० तः पूर्वं तिथिः भवितुमर्हति ।',
    'before_or_equal'      => '१० २० इत्यस्मात् पूर्वं वा समं वा तिथिः भवितुमर्हति ।',
    'between'              => [
        'array'   => '१० मध्ये २० तः ३० पर्यन्तं वस्तूनि भवितुमर्हन्ति ।',
        'file'    => '१० २० तः ३० किलोबाइट् यावत् भवितुमर्हति ।',
        'numeric' => '१० २० तः ३० पर्यन्तं भवितुमर्हति ।',
        'string'  => '१० वर्णाः २० तः ३० पर्यन्तं वर्णाः भवेयुः ।',
    ],
    'boolean'              => '१० क्षेत्रं सत्यं वा असत्यं वा भवितुमर्हति ।',
    'can'                  => ':attribute क्षेत्रे अनधिकृतं मूल्यं भवति ।',
    'confirmed'            => '१० पुष्टिः न मेलति।',
    'contains'             => 'The :attribute field is missing a required value.',
    'current_password'     => 'गुप्तशब्दः अशुद्धः अस्ति ।',
    'date'                 => '१० न वैधतिथिः ।',
    'date_equals'          => '१० इत्यस्य २० समं तिथिः भवितुमर्हति ।',
    'date_format'          => '१० प्रारूपेण २० न मेलति ।',
    'decimal'              => '१० क्षेत्रे २० दशमलवस्थानानि भवितुमर्हन्ति ।',
    'declined'             => '१० अवश्यं निराकरणीयम्।',
    'declined_if'          => '२० यदा ३० भवति तदा १० अवश्यं निराकरणीयम् ।',
    'different'            => '१०, २० च भिन्नाः भवितुमर्हन्ति।',
    'digits'               => '१० अङ्काः २० भवितुमर्हन्ति ।',
    'digits_between'       => '१० २० तः ३० अङ्कानां मध्ये भवितुमर्हति ।',
    'dimensions'           => '१० इत्यस्य अमान्यप्रतिबिम्बपरिमाणाः सन्ति ।',
    'distinct'             => '१० क्षेत्रस्य द्वितीयकं मूल्यं भवति ।',
    'doesnt_end_with'      => '१० क्षेत्रं निम्नलिखितयोः एकेन न समाप्तं भवेत् : २० ।',
    'doesnt_start_with'    => '१० क्षेत्रं निम्नलिखितयोः एकेन न आरभ्यते : २० ।',
    'email'                => '१० वैधः ईमेल-सङ्केतः भवितुमर्हति ।',
    'ends_with'            => '१० इत्यस्य समाप्तिः निम्नलिखितयोः एकेन सह भवितुमर्हति : २० ।',
    'enum'                 => 'चयनितं १० अमान्यम् अस्ति ।',
    'exists'               => 'चयनितं १० अमान्यम् अस्ति ।',
    'extensions'           => ':attribute क्षेत्रे निम्नलिखितविस्तारेषु एकः भवितुमर्हति: :values.',
    'file'                 => '१० सञ्चिका भवितुमर्हति।',
    'filled'               => '१० क्षेत्रस्य मूल्यं भवितुमर्हति ।',
    'gt'                   => [
        'array'   => '१० मध्ये २० अधिकानि वस्तूनि भवितुमर्हन्ति।',
        'file'    => '१० २० किलोबाइट् इत्यस्मात् अधिकं भवितुमर्हति ।',
        'numeric' => '१० २० तः अधिकं भवितुमर्हति ।',
        'string'  => '१० वर्णात् अधिकं भवितुमर्हति ।',
    ],
    'gte'                  => [
        'array'   => '१० मध्ये २० वस्तूनि वा अधिकानि वा भवितुमर्हन्ति।',
        'file'    => '१० किलोबाइट् इत्यस्मात् अधिकं वा समं वा भवितुमर्हति ।',
        'numeric' => '१० २० इत्यस्मात् अधिकं वा समं वा भवितुमर्हति ।',
        'string'  => '१० वर्णात् अधिकं वा समं वा भवितुमर्हति ।',
    ],
    'hex_color'            => ':attribute क्षेत्रं वैधं षट्दशमलववर्णं भवितुमर्हति ।',
    'image'                => '१० एकं प्रतिबिम्बं भवितुमर्हति।',
    'in'                   => 'चयनितं १० अमान्यम् अस्ति ।',
    'in_array'             => '१० क्षेत्रं २० मध्ये नास्ति ।',
    'integer'              => '१० पूर्णाङ्कः भवितुमर्हति ।',
    'ip'                   => '१० वैधः IP-सङ्केतः भवितुमर्हति ।',
    'ipv4'                 => '१० वैधः IPv4 पता भवितुमर्हति ।',
    'ipv6'                 => '१० वैधः IPv6 पता भवितुमर्हति ।',
    'json'                 => ':attribute वैधः JSON स्ट्रिंग् भवितुमर्हति ।',
    'list'                 => '१० क्षेत्रं सूची भवितुमर्हति ।',
    'lowercase'            => '१० क्षेत्रं लघुवर्णं भवितुमर्हति ।',
    'lt'                   => [
        'array'   => '१० मध्ये २० वस्तूनि न्यूनानि भवितुमर्हन्ति।',
        'file'    => '१० २० किलोबाइट् इत्यस्मात् न्यूनं भवितुमर्हति ।',
        'numeric' => '१० २० तः न्यूनाः भवितुमर्हन्ति ।',
        'string'  => '१० वर्णात् न्यूनाः भवेयुः ।',
    ],
    'lte'                  => [
        'array'   => '१० मध्ये २० अधिकानि वस्तूनि न भवितुमर्हन्ति।',
        'file'    => '१० २० किलोबाइट् इत्यस्मात् न्यूनं वा समं वा भवितुमर्हति ।',
        'numeric' => '१० २० तः न्यूनं वा समं वा भवितुमर्हति ।',
        'string'  => '१० वर्णात् न्यूनं वा समं वा भवितुमर्हति ।',
    ],
    'mac_address'          => '१० वैधः MAC-सङ्केतः भवितुमर्हति ।',
    'max'                  => [
        'array'   => '१० मध्ये २० अधिकानि वस्तूनि न भवितुमर्हन्ति।',
        'file'    => '१० २० किलोबाइट् इत्यस्मात् अधिकं न भवितुमर्हति ।',
        'numeric' => '१० २० तः अधिकं न भवितुमर्हति ।',
        'string'  => '१० वर्णात् अधिकं न भवितुमर्हति ।',
    ],
    'max_digits'           => '१० क्षेत्रे २० अङ्काधिकाः न भवेयुः ।',
    'mimes'                => '१० प्रकारस्य सञ्चिका भवितुमर्हति: २० ।',
    'mimetypes'            => '१० प्रकारस्य सञ्चिका भवितुमर्हति: २० ।',
    'min'                  => [
        'array'   => '१० मध्ये न्यूनातिन्यूनं २० वस्तूनि भवितुमर्हन्ति।',
        'file'    => '१० न्यूनातिन्यूनं २० किलोबाइट् भवितुमर्हति ।',
        'numeric' => '१० न्यूनातिन्यूनं २० भवितुमर्हति।',
        'string'  => '१० न्यूनातिन्यूनं २० वर्णाः भवितुमर्हन्ति ।',
    ],
    'min_digits'           => '१० क्षेत्रे न्यूनातिन्यूनं २० अङ्काः भवितुमर्हन्ति ।',
    'missing'              => '१० क्षेत्रं अवश्यं लुप्तं भवति।',
    'missing_if'           => '२० यदा ३० भवति तदा १० क्षेत्रं अवश्यमेव गम्यते ।',
    'missing_unless'       => '१० क्षेत्रं यावत् २० ३० न भवति तावत् अवश्यमेव लुप्तं भवेत् ।',
    'missing_with'         => '२० उपस्थिते १० क्षेत्रं अवश्यमेव लुप्तं भवति ।',
    'missing_with_all'     => '२० वर्तन्ते सति १० क्षेत्रं अवश्यमेव गम्यते ।',
    'multiple_of'          => '१० इति २० गुणनखण्डः भवितुमर्हति ।',
    'not_in'               => 'चयनितं १० अमान्यम् अस्ति ।',
    'not_regex'            => '१० प्रारूपम् अमान्यम् अस्ति ।',
    'numeric'              => '१० सङ्ख्या भवितुमर्हति।',
    'password'             => [
        'letters'       => '१० क्षेत्रे न्यूनातिन्यूनम् एकं अक्षरं भवितुमर्हति ।',
        'mixed'         => '१० क्षेत्रे न्यूनातिन्यूनं एकः बृहत् अक्षरः एकः लघुः च अक्षरः भवितुमर्हति ।',
        'numbers'       => '१० क्षेत्रे न्यूनातिन्यूनम् एकः सङ्ख्या भवितुमर्हति ।',
        'symbols'       => '१० क्षेत्रे न्यूनातिन्यूनम् एकं चिह्नं भवितुमर्हति ।',
        'uncompromised' => 'दत्तं १० दत्तांशलीक् मध्ये प्रादुर्भूतम् अस्ति । कृपया भिन्नं १० चिनोतु ।',
    ],
    'present'              => '१० क्षेत्रं अवश्यं वर्तते।',
    'present_if'           => '२० यदा ३० भवति तदा १० क्षेत्रं अवश्यं भवितव्यम् ।',
    'present_unless'       => '१० क्षेत्रं यावत् २० ३० न भवति तावत् अवश्यं भवितव्यम् ।',
    'present_with'         => '२० युक्ते १० क्षेत्रं अवश्यमेव भवितव्यम् ।',
    'present_with_all'     => '२० क्षेत्रं यदा २० वर्तन्ते तदा अवश्यमेव भवितव्यम् ।',
    'prohibited'           => '१० क्षेत्रं निषिद्धम् अस्ति ।',
    'prohibited_if'        => '२० क्षेत्रं यदा ३० भवति तदा निषिद्धम् ।',
    'prohibited_unless'    => '१० क्षेत्रं निषिद्धं यावत् २० ३० मध्ये नास्ति ।',
    'prohibits'            => '१० क्षेत्रेण २० जनानां उपस्थितिः निषिद्धा अस्ति ।',
    'regex'                => '१० प्रारूपम् अमान्यम् अस्ति ।',
    'required'             => '१० क्षेत्रम् आवश्यकम् ।',
    'required_array_keys'  => ':attribute क्षेत्रे प्रविष्टयः भवितुमर्हन्ति: :values.',
    'required_if'          => '२० क्षेत्रं यदा २० ३० भवति तदा आवश्यकम् ।',
    'required_if_accepted' => '२० स्वीकृते १० क्षेत्रम् आवश्यकम् ।',
    'required_if_declined' => 'The :attribute field is required when :other is declined.',
    'required_unless'      => '१० क्षेत्रं आवश्यकं यावत् २० ३० मध्ये नास्ति ।',
    'required_with'        => '२० युक्ते १० क्षेत्रम् आवश्यकम् ।',
    'required_with_all'    => '२० क्षेत्रस्य आवश्यकता भवति यदा २० वर्तन्ते ।',
    'required_without'     => '२० न भवति चेत् १० क्षेत्रम् आवश्यकम् ।',
    'required_without_all' => '२० क्षेत्रस्य आवश्यकता यदा २० मध्ये कोऽपि नास्ति ।',
    'same'                 => '१०, २० च मेलनं करणीयम्।',
    'size'                 => [
        'array'   => '१० मध्ये २० वस्तूनि अवश्यं सन्ति ।',
        'file'    => '१० २० किलोबाइट् भवितुमर्हति ।',
        'numeric' => '१० इति २० भवितुमर्हति।',
        'string'  => '१० वर्णाः २० वर्णाः भवेयुः ।',
    ],
    'starts_with'          => '१० इत्यस्य आरम्भः निम्नलिखितयोः एकेन अवश्यं भवति : २० ।',
    'string'               => '१० तारः भवितुमर्हति ।',
    'timezone'             => '१० वैधसमयक्षेत्रं भवितुमर्हति ।',
    'ulid'                 => ':attribute क्षेत्रं वैधं ULID भवितुमर्हति ।',
    'unique'               => '१० पूर्वमेव गृहीतम् अस्ति।',
    'uploaded'             => '१० अपलोड् कर्तुं असफलाः अभवन् ।',
    'uppercase'            => '१० क्षेत्रं बृहत् अक्षरं भवितुमर्हति ।',
    'url'                  => '१० वैधः URL भवितुमर्हति ।',
    'uuid'                 => '१० वैधः यूयूआईडी भवितुमर्हति ।',
];